/**
 * FASTMINDS - Main JavaScript
 * Handles animations, mobile menu, header scroll, and interactions
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
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
            mobileMenuBtn.setAttribute('aria-expanded', !isOpen);
        });
    }

    // ===== HEADER SCROLL EFFECT =====
    const header = document.getElementById('site-header');
    let lastScrollY = 0;

    if (header) {
        window.addEventListener('scroll', function () {
            const currentScrollY = window.scrollY;

            if (currentScrollY > 10) {
                header.classList.add('shadow-sm');
            } else {
                header.classList.remove('shadow-sm');
            }

            lastScrollY = currentScrollY;
        }, { passive: true });
    }

    // ===== SCROLL REVEAL ANIMATION =====
    const revealElements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');

    if (revealElements.length > 0) {
        const revealObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        revealElements.forEach(function (el) {
            revealObserver.observe(el);
        });
    }

    // ===== SMOOTH SCROLL FOR ANCHOR LINKS =====
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            var targetId = this.getAttribute('href');
            if (targetId === '#') return;

            var target = document.querySelector(targetId);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
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
                btn.classList.remove('bg-sky');
                btn.classList.add('bg-green-500');

                setTimeout(function () {
                    btn.innerHTML = originalText;
                    btn.disabled = false;
                    btn.classList.remove('bg-green-500');
                    btn.classList.add('bg-sky');
                    contactForm.reset();
                }, 2000);
            }, 1500);
        });
    }

})();
