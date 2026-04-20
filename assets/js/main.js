/**
 * FASTMINDS - Main JavaScript
 * ITZone-style animations: counters, progress bars, accordion, reveals, marquee, tilt
 */
(function () {
    'use strict';

    // ===== MOBILE MENU =====
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = mobileMenuBtn?.querySelector('.menu-icon');
    const closeIcon = mobileMenuBtn?.querySelector('.close-icon');

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', function () {
            const isOpen = !mobileMenu.classList.contains('hidden');
            mobileMenu.classList.toggle('hidden');
            menuIcon?.classList.toggle('hidden');
            closeIcon?.classList.toggle('hidden');
            mobileMenuBtn.setAttribute('aria-expanded', !isOpen);
            document.body.style.overflow = isOpen ? '' : 'hidden';
        });
    }

    // ===== HEADER SCROLL EFFECT =====
    const header = document.getElementById('site-header');
    if (header) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }, { passive: true });
    }

    // ===== SCROLL REVEAL ANIMATION (Staggered) =====
    const revealElements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale');
    if (revealElements.length > 0) {
        const revealObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    // Add stagger delay based on data attribute or siblings
                    const delay = entry.target.dataset.delay || 0;
                    setTimeout(function () {
                        entry.target.classList.add('revealed');
                    }, delay);
                    revealObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -60px 0px'
        });
        revealElements.forEach(function (el) {
            revealObserver.observe(el);
        });
    }

    // ===== ANIMATED COUNTER =====
    function animateCounter(el) {
        const target = parseInt(el.dataset.target, 10);
        const suffix = el.dataset.suffix || '';
        const prefix = el.dataset.prefix || '';
        const duration = 2000;
        const start = 0;
        const startTime = performance.now();

        function update(currentTime) {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            // Ease out cubic
            const eased = 1 - Math.pow(1 - progress, 3);
            const current = Math.floor(eased * (target - start) + start);
            el.textContent = prefix + current.toLocaleString() + suffix;
            if (progress < 1) {
                requestAnimationFrame(update);
            } else {
                el.textContent = prefix + target.toLocaleString() + suffix;
            }
        }
        requestAnimationFrame(update);
    }

    const counterElements = document.querySelectorAll('[data-counter]');
    if (counterElements.length > 0) {
        const counterObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    counterObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.3 });
        counterElements.forEach(function (el) {
            counterObserver.observe(el);
        });
    }

    // ===== PROGRESS BAR ANIMATION =====
    const progressBars = document.querySelectorAll('.progress-bar-fill');
    if (progressBars.length > 0) {
        const progressObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                    progressObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        progressBars.forEach(function (el) {
            progressObserver.observe(el);
        });
    }

    // ===== ACCORDION =====
    const accordionHeaders = document.querySelectorAll('.accordion-header');
    accordionHeaders.forEach(function (header) {
        header.addEventListener('click', function () {
            const item = this.closest('.accordion-item');
            const isActive = item.classList.contains('active');
            // Close all
            document.querySelectorAll('.accordion-item').forEach(function (i) {
                i.classList.remove('active');
            });
            // Toggle current
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });

    // ===== SMOOTH SCROLL FOR ANCHOR LINKS =====
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            var targetId = this.getAttribute('href');
            if (targetId === '#') return;
            var target = document.querySelector(targetId);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

    // ===== TILT EFFECT ON CARDS =====
    document.querySelectorAll('.hover-tilt').forEach(function (el) {
        el.addEventListener('mousemove', function (e) {
            var rect = el.getBoundingClientRect();
            var x = e.clientX - rect.left;
            var y = e.clientY - rect.top;
            var centerX = rect.width / 2;
            var centerY = rect.height / 2;
            var rotateX = ((y - centerY) / centerY) * -5;
            var rotateY = ((x - centerX) / centerX) * 5;
            el.style.transform = 'perspective(1000px) rotateX(' + rotateX + 'deg) rotateY(' + rotateY + 'deg) translateY(-5px)';
        });
        el.addEventListener('mouseleave', function () {
            el.style.transform = '';
        });
    });

    // ===== CONTACT FORM (Simple UI feedback) =====
    var contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();
            var btn = this.querySelector('button[type="submit"]');
            var originalText = btn.innerHTML;

            btn.innerHTML = '<svg class="w-5 h-5 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg> Sending...';
            btn.disabled = true;

            setTimeout(function () {
                btn.innerHTML = '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Message Sent!';
                btn.classList.add('!bg-green-500');
                setTimeout(function () {
                    btn.innerHTML = originalText;
                    btn.disabled = false;
                    btn.classList.remove('!bg-green-500');
                    contactForm.reset();
                }, 2000);
            }, 1500);
        });
    }

    // ===== PARALLAX FLOATING SHAPES =====
    window.addEventListener('scroll', function () {
        var scrolled = window.scrollY;
        document.querySelectorAll('[data-parallax]').forEach(function (el) {
            var speed = parseFloat(el.dataset.parallax) || 0.1;
            el.style.transform = 'translateY(' + (scrolled * speed) + 'px)';
        });
    }, { passive: true });

    // ===== TYPED TEXT EFFECT =====
    const typedElements = document.querySelectorAll('[data-typed]');
    typedElements.forEach(function (el) {
        const words = el.dataset.typed.split(',');
        let wordIndex = 0;
        let charIndex = 0;
        let isDeleting = false;

        function type() {
            const current = words[wordIndex];
            if (isDeleting) {
                el.textContent = current.substring(0, charIndex - 1);
                charIndex--;
            } else {
                el.textContent = current.substring(0, charIndex + 1);
                charIndex++;
            }

            let typeSpeed = isDeleting ? 50 : 100;

            if (!isDeleting && charIndex === current.length) {
                typeSpeed = 2000;
                isDeleting = true;
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                wordIndex = (wordIndex + 1) % words.length;
                typeSpeed = 500;
            }

            setTimeout(type, typeSpeed);
        }
        type();
    });

})();
