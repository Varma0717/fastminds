<?php $page_title = 'Contact Us'; ?>
<?php include 'includes/header.php'; ?>

<!-- ===== PAGE HERO ===== -->
<section class="page-hero">
    <div class="absolute top-10 right-[15%] w-3 h-3 bg-sky rounded-full animate-float opacity-60"></div>
    <div class="container-grid relative z-10">
        <div class="max-w-2xl">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 bg-white/10 backdrop-blur-sm rounded-full text-sky text-xs font-semibold uppercase tracking-[3px] mb-6 border border-white/10 reveal">
                <span class="w-2 h-2 bg-sky rounded-full animate-pulse"></span>
                Contact
            </span>
            <h1 class="text-white mb-5 reveal" data-delay="100">Get In <span class="text-gradient">Touch</span></h1>
            <p class="text-white/50 text-lg leading-relaxed reveal" data-delay="200">Have a project in mind or need IT talent? We'd love to hear from you.</p>
            <div class="flex items-center gap-3 mt-6 text-white/30 text-sm reveal" data-delay="300">
                <a href="index.php" class="hover:text-sky transition-colors">Home</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                <span class="text-sky">Contact</span>
            </div>
        </div>
    </div>
</section>

<!-- ===== CONTACT FORM & INFO ===== -->
<section class="section-spacing bg-white relative overflow-hidden">
    <div class="absolute top-0 right-0 w-72 h-72 bg-sky/5 rounded-full blur-3xl"></div>
    <div class="container-grid relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <!-- Contact Form -->
            <div class="reveal-left">
                <span class="section-label">Send a Message</span>
                <h2 class="section-title">Let's Start a Conversation</h2>
                <p class="text-medium-text mb-8">Fill out the form below and our team will get back to you within 24 hours.</p>
                <form id="contact-form" class="space-y-6" onsubmit="return false;">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-semibold text-navy mb-2">Full Name</label>
                            <input type="text" id="name" name="name" required class="w-full px-5 py-4 rounded-xl border border-gray-200 focus:border-sky focus:ring-2 focus:ring-sky/20 outline-none transition-all duration-300 text-sm bg-light-gray" placeholder="Your name">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-semibold text-navy mb-2">Email Address</label>
                            <input type="email" id="email" name="email" required class="w-full px-5 py-4 rounded-xl border border-gray-200 focus:border-sky focus:ring-2 focus:ring-sky/20 outline-none transition-all duration-300 text-sm bg-light-gray" placeholder="you@company.com">
                        </div>
                    </div>
                    <div>
                        <label for="company" class="block text-sm font-semibold text-navy mb-2">Company</label>
                        <input type="text" id="company" name="company" class="w-full px-5 py-4 rounded-xl border border-gray-200 focus:border-sky focus:ring-2 focus:ring-sky/20 outline-none transition-all duration-300 text-sm bg-light-gray" placeholder="Company name">
                    </div>
                    <div>
                        <label for="inquiry" class="block text-sm font-semibold text-navy mb-2">Inquiry Type</label>
                        <select id="inquiry" name="inquiry" class="w-full px-5 py-4 rounded-xl border border-gray-200 focus:border-sky focus:ring-2 focus:ring-sky/20 outline-none transition-all duration-300 text-sm bg-light-gray text-medium-text">
                            <option value="">Select an option</option>
                            <option value="consulting">IT Consulting</option>
                            <option value="staffing">IT Staffing</option>
                            <option value="analytics">Data & Analytics</option>
                            <option value="partnership">Partnership</option>
                            <option value="careers">Careers</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-semibold text-navy mb-2">Message</label>
                        <textarea id="message" name="message" rows="5" required class="w-full px-5 py-4 rounded-xl border border-gray-200 focus:border-sky focus:ring-2 focus:ring-sky/20 outline-none transition-all duration-300 text-sm bg-light-gray resize-none" placeholder="Tell us about your project or requirements"></textarea>
                    </div>
                    <button type="submit" class="btn-primary w-full justify-center">
                        Send Message
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                        </svg>
                    </button>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="reveal-right">
                <span class="section-label">Contact Info</span>
                <h2 class="section-title">How to Reach Us</h2>
                <p class="text-medium-text mb-8">Our team is available to discuss your requirements and find the best solution for your business.</p>
                <div class="space-y-6 mb-10">
                    <div class="flex items-start gap-4 p-5 bg-light-gray rounded-2xl hover:shadow-md transition-all duration-300">
                        <div class="w-12 h-12 rounded-xl bg-sky/10 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-navy mb-1">Email Us</h4>
                            <a href="mailto:info@fastmindsllc.com" class="text-medium-text text-sm hover:text-sky transition-colors">info@fastmindsllc.com</a>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-5 bg-light-gray rounded-2xl hover:shadow-md transition-all duration-300">
                        <div class="w-12 h-12 rounded-xl bg-sky/10 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-navy mb-1">Call Us</h4>
                            <a href="tel:+1234567890" class="text-medium-text text-sm hover:text-sky transition-colors">+1 (234) 567-890</a>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-5 bg-light-gray rounded-2xl hover:shadow-md transition-all duration-300">
                        <div class="w-12 h-12 rounded-xl bg-sky/10 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-navy mb-1">Visit Us</h4>
                            <p class="text-medium-text text-sm">United States</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-5 bg-light-gray rounded-2xl hover:shadow-md transition-all duration-300">
                        <div class="w-12 h-12 rounded-xl bg-sky/10 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-navy mb-1">Business Hours</h4>
                            <p class="text-medium-text text-sm">Mon - Fri: 9:00 AM - 6:00 PM EST</p>
                        </div>
                    </div>
                </div>

                <!-- Social Links -->
                <div>
                    <h4 class="font-bold text-navy mb-4">Follow Us</h4>
                    <div class="flex gap-3">
                        <a href="#" class="w-11 h-11 rounded-xl bg-light-gray flex items-center justify-center text-medium-text hover:bg-sky hover:text-white transition-all duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                            </svg>
                        </a>
                        <a href="#" class="w-11 h-11 rounded-xl bg-light-gray flex items-center justify-center text-medium-text hover:bg-sky hover:text-white transition-all duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== CTA ===== -->
<section class="py-20 bg-navy relative overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-sky/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3"></div>
    </div>
    <div class="container-grid relative z-10 text-center">
        <div class="max-w-3xl mx-auto reveal">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6 leading-tight">Prefer to Schedule a Call?</h2>
            <p class="text-white/50 text-lg mb-8">Book a free 30-minute consultation with one of our experts.</p>
            <a href="mailto:info@fastmindsllc.com" class="btn-white">Schedule a Call <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg></a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>