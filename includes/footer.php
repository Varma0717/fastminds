    </main>

    <!-- ===== NEWSLETTER / PRE-FOOTER CTA ===== -->
    <section class="bg-gradient-to-r from-sky to-sky-dark py-16 relative overflow-hidden">
        <!-- Floating shapes -->
        <div class="absolute top-0 left-10 w-32 h-32 bg-white/10 rounded-full blur-2xl animate-float"></div>
        <div class="absolute bottom-0 right-10 w-40 h-40 bg-white/5 rounded-full blur-3xl animate-float-reverse"></div>
        <div class="container-grid relative z-10">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-8">
                <div class="text-center lg:text-left">
                    <h3 class="text-2xl md:text-3xl font-bold text-white mb-2">Subscribe to Our Newsletter</h3>
                    <p class="text-white/70">Get the latest insights in data, analytics, and technology straight to your inbox.</p>
                </div>
                <form class="flex w-full lg:w-auto gap-0" onsubmit="event.preventDefault();">
                    <input type="email" placeholder="Enter your email" class="flex-1 lg:w-80 px-6 py-4 rounded-l-full bg-white/20 text-white placeholder-white/60 border border-white/30 focus:outline-none focus:bg-white/30 transition-all" required>
                    <button type="submit" class="px-8 py-4 bg-navy text-white font-semibold rounded-r-full hover:bg-navy-light transition-all duration-300 whitespace-nowrap">
                        Subscribe Now
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- ===== FOOTER ===== -->
    <footer class="bg-navy text-white">
        <div class="container-grid pt-20 pb-8">
            <!-- Footer Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 pb-16 border-b border-white/10">
                <!-- Company Info -->
                <div class="lg:col-span-1">
                    <a href="index.php" class="flex items-center gap-2.5 mb-6">
                        <div class="w-10 h-10 bg-gradient-to-br from-sky to-sky-dark rounded-xl flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <span class="text-xl font-extrabold tracking-tight">FAST<span class="text-sky">MINDS</span></span>
                    </a>
                    <p class="text-white/50 text-sm leading-relaxed mb-6">
                        Transforming data into decisions and talent into impact. Your trusted partner in IT consulting, data analytics, and digital transformation.
                    </p>
                    <div class="flex items-center gap-3">
                        <a href="#" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-white/50 hover:bg-sky hover:text-white transition-all duration-300 hover:-translate-y-1" aria-label="LinkedIn">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-white/50 hover:bg-sky hover:text-white transition-all duration-300 hover:-translate-y-1" aria-label="Twitter">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-white/50 hover:bg-sky hover:text-white transition-all duration-300 hover:-translate-y-1" aria-label="Facebook">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Services -->
                <div>
                    <h4 class="text-base font-bold mb-6 relative inline-block">
                        Services
                        <span class="absolute -bottom-2 left-0 w-8 h-[2px] bg-sky rounded-full"></span>
                    </h4>
                    <ul class="space-y-3 mt-4">
                        <li><a href="services.php" class="text-sm text-white/50 hover:text-sky hover:pl-2 transition-all duration-300">Data & Analytics</a></li>
                        <li><a href="services.php" class="text-sm text-white/50 hover:text-sky hover:pl-2 transition-all duration-300">AI & Automation</a></li>
                        <li><a href="services.php" class="text-sm text-white/50 hover:text-sky hover:pl-2 transition-all duration-300">IT Consulting</a></li>
                        <li><a href="staffing.php" class="text-sm text-white/50 hover:text-sky hover:pl-2 transition-all duration-300">IT Staffing</a></li>
                    </ul>
                </div>

                <!-- Company -->
                <div>
                    <h4 class="text-base font-bold mb-6 relative inline-block">
                        Quick Links
                        <span class="absolute -bottom-2 left-0 w-8 h-[2px] bg-sky rounded-full"></span>
                    </h4>
                    <ul class="space-y-3 mt-4">
                        <li><a href="about.php" class="text-sm text-white/50 hover:text-sky hover:pl-2 transition-all duration-300">About Us</a></li>
                        <li><a href="case-studies.php" class="text-sm text-white/50 hover:text-sky hover:pl-2 transition-all duration-300">Case Studies</a></li>
                        <li><a href="careers.php" class="text-sm text-white/50 hover:text-sky hover:pl-2 transition-all duration-300">Careers</a></li>
                        <li><a href="insights.php" class="text-sm text-white/50 hover:text-sky hover:pl-2 transition-all duration-300">Insights</a></li>
                        <li><a href="contact.php" class="text-sm text-white/50 hover:text-sky hover:pl-2 transition-all duration-300">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-base font-bold mb-6 relative inline-block">
                        Contact Us
                        <span class="absolute -bottom-2 left-0 w-8 h-[2px] bg-sky rounded-full"></span>
                    </h4>
                    <ul class="space-y-4 mt-4">
                        <li class="flex items-start gap-3">
                            <div class="w-9 h-9 rounded-xl bg-white/5 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <span class="text-sm text-white/50">1515 Mockingbird Lane, Suite 420,<br>Charlotte, NC 28209<br>USA</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="w-9 h-9 rounded-xl bg-white/5 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <a href="tel:+1234567890" class="text-sm text-white/50 hover:text-sky transition-colors">+1 (234) 567-890</a>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="w-9 h-9 rounded-xl bg-white/5 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <a href="mailto:info@fastmindsit.com" class="text-sm text-white/50 hover:text-sky transition-colors">info@fastmindsit.com</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="flex flex-col md:flex-row items-center justify-between pt-8 gap-4">
                <p class="text-sm text-white/30">&copy; <?php echo date('Y'); ?> FASTMINDS. All rights reserved.</p>
                <div class="flex items-center gap-6">
                    <a href="#" class="text-sm text-white/30 hover:text-sky transition-colors duration-300">Privacy Policy</a>
                    <a href="#" class="text-sm text-white/30 hover:text-sky transition-colors duration-300">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="back-to-top" onclick="window.scrollTo({top:0,behavior:'smooth'})" class="fixed bottom-8 right-8 w-12 h-12 bg-sky text-white rounded-full shadow-lg shadow-sky/30 flex items-center justify-center opacity-0 invisible translate-y-4 transition-all duration-300 hover:bg-sky-dark hover:-translate-y-1 z-40">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
    </button>

    <script src="assets/js/main.js"></script>
    <script>
        // Back to top visibility
        window.addEventListener('scroll', function() {
            var btn = document.getElementById('back-to-top');
            if (window.scrollY > 500) {
                btn.classList.remove('opacity-0', 'invisible', 'translate-y-4');
                btn.classList.add('opacity-100', 'visible', 'translate-y-0');
            } else {
                btn.classList.add('opacity-0', 'invisible', 'translate-y-4');
                btn.classList.remove('opacity-100', 'visible', 'translate-y-0');
            }
        }, {
            passive: true
        });
        // Header scroll style
        window.addEventListener('scroll', function() {
            var h = document.getElementById('site-header');
            if (window.scrollY > 50) {
                h.classList.add('shadow-lg', 'shadow-navy/5');
            } else {
                h.classList.remove('shadow-lg', 'shadow-navy/5');
            }
        }, {
            passive: true
        });
    </script>
    </body>

    </html>