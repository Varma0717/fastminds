<?php $page_title = 'Contact Us'; ?>
<?php include 'includes/header.php'; ?>

<!-- ===== PAGE HERO ===== -->
<section class="section-spacing bg-gradient-to-br from-navy to-navy-light relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 right-0 w-96 h-96 bg-sky rounded-full blur-3xl -translate-y-1/2 translate-x-1/3"></div>
    </div>
    <div class="container-grid relative z-10">
        <div class="max-w-2xl reveal">
            <span class="text-sky font-semibold text-sm uppercase tracking-widest mb-3 block">Contact Us</span>
            <h1 class="text-white mb-6">Contact <span class="text-sky">Us</span></h1>
            <p class="text-white/60 text-lg leading-relaxed">Get in touch with FASTMINDS to discuss your business needs.</p>
        </div>
    </div>
</section>

<!-- ===== CONTACT FORM ===== -->
<section class="section-spacing bg-white">
    <div class="container-grid">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-16">
            <!-- Form -->
            <div class="lg:col-span-3 reveal-left">
                <h2 class="section-title mb-8">Send Us a Message</h2>
                <form id="contact-form" class="space-y-6" onsubmit="return false;">
                    <!-- Interest Type -->
                    <div>
                        <label class="block text-sm font-semibold text-navy mb-3">I'm interested in:</label>
                        <div class="flex flex-wrap gap-3">
                            <label class="cursor-pointer">
                                <input type="radio" name="interest" value="hire-talent" class="sr-only peer" checked>
                                <span class="inline-flex items-center px-5 py-2.5 rounded-lg border-2 border-gray-200 text-sm font-medium text-medium-text transition-all duration-300 peer-checked:border-sky peer-checked:text-sky peer-checked:bg-sky/5">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    Hire Talent
                                </span>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="interest" value="start-project" class="sr-only peer">
                                <span class="inline-flex items-center px-5 py-2.5 rounded-lg border-2 border-gray-200 text-sm font-medium text-medium-text transition-all duration-300 peer-checked:border-sky peer-checked:text-sky peer-checked:bg-sky/5">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                    Start a Project
                                </span>
                            </label>
                        </div>
                    </div>

                    <!-- Name & Email Row -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-semibold text-navy mb-2">Full Name <span class="text-red-500">*</span></label>
                            <input type="text" id="name" name="name" required placeholder="John Doe" class="w-full px-5 py-3.5 rounded-lg border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-sky focus:border-transparent transition-all duration-300">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-semibold text-navy mb-2">Email Address <span class="text-red-500">*</span></label>
                            <input type="email" id="email" name="email" required placeholder="john@company.com" class="w-full px-5 py-3.5 rounded-lg border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-sky focus:border-transparent transition-all duration-300">
                        </div>
                    </div>

                    <!-- Company -->
                    <div>
                        <label for="company" class="block text-sm font-semibold text-navy mb-2">Company</label>
                        <input type="text" id="company" name="company" placeholder="Your company name" class="w-full px-5 py-3.5 rounded-lg border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-sky focus:border-transparent transition-all duration-300">
                    </div>

                    <!-- Message -->
                    <div>
                        <label for="message" class="block text-sm font-semibold text-navy mb-2">Message <span class="text-red-500">*</span></label>
                        <textarea id="message" name="message" required rows="5" placeholder="Tell us about your project or staffing needs..." class="w-full px-5 py-3.5 rounded-lg border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-sky focus:border-transparent transition-all duration-300 resize-none"></textarea>
                    </div>

                    <!-- Submit -->
                    <button type="submit" class="btn-primary w-full md:w-auto">
                        Send Message
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                        </svg>
                    </button>
                </form>
            </div>

            <!-- Contact Info Sidebar -->
            <div class="lg:col-span-2 reveal-right">
                <div class="sticky top-28 space-y-8">
                    <div>
                        <h3 class="text-xl font-bold text-navy mb-6">Get in Touch</h3>
                        <div class="space-y-5">
                            <div class="flex items-start gap-4">
                                <div class="w-11 h-11 rounded-xl bg-sky/10 flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-navy">Email</p>
                                    <a href="mailto:info@fastminds.com" class="text-sm text-medium-text hover:text-sky transition-colors">info@fastminds.com</a>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-11 h-11 rounded-xl bg-sky/10 flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-navy">Phone</p>
                                    <a href="tel:+1234567890" class="text-sm text-medium-text hover:text-sky transition-colors">+1 (234) 567-890</a>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-11 h-11 rounded-xl bg-sky/10 flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-navy">Location</p>
                                    <p class="text-sm text-medium-text">United States</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Response Time -->
                    <div class="bg-light-gray rounded-2xl p-6">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-2.5 h-2.5 rounded-full bg-green-500 animate-pulse"></div>
                            <span class="text-sm font-semibold text-navy">Typical Response Time</span>
                        </div>
                        <p class="text-medium-text text-sm">We typically respond within 24 hours on business days. For urgent staffing needs, we can respond within 4 hours.</p>
                    </div>

                    <!-- Social Links -->
                    <div>
                        <h4 class="text-sm font-semibold text-navy mb-4">Follow Us</h4>
                        <div class="flex items-center gap-3">
                            <a href="#" class="w-10 h-10 rounded-xl bg-light-gray flex items-center justify-center text-medium-text hover:bg-sky hover:text-white transition-all duration-300" aria-label="LinkedIn">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                </svg>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-xl bg-light-gray flex items-center justify-center text-medium-text hover:bg-sky hover:text-white transition-all duration-300" aria-label="Twitter">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                                </svg>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-xl bg-light-gray flex items-center justify-center text-medium-text hover:bg-sky hover:text-white transition-all duration-300" aria-label="Facebook">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>