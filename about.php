<?php $page_title = 'About Us'; ?>
<?php include 'includes/header.php'; ?>

<!-- ===== PAGE HERO ===== -->
<section class="page-hero">
    <div class="absolute top-10 right-[15%] w-3 h-3 bg-sky rounded-full animate-float opacity-60"></div>
    <div class="absolute bottom-20 left-[10%] w-4 h-4 bg-sky/40 rounded-full animate-float-reverse"></div>
    <div class="container-grid relative z-10">
        <div class="max-w-2xl">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 bg-white/10 backdrop-blur-sm rounded-full text-sky text-xs font-semibold uppercase tracking-[3px] mb-6 border border-white/10 reveal">
                <span class="w-2 h-2 bg-sky rounded-full animate-pulse"></span>
                About Us
            </span>
            <h1 class="text-white mb-5 reveal" data-delay="100">About <span class="text-gradient">FASTMINDS</span></h1>
            <p class="text-white/50 text-lg leading-relaxed reveal" data-delay="200">FASTMINDS is a modern consulting and staffing firm focused on delivering data-driven solutions and top IT talent.</p>
            <div class="flex items-center gap-3 mt-6 text-white/30 text-sm reveal" data-delay="300">
                <a href="index.php" class="hover:text-sky transition-colors">Home</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                <span class="text-sky">About Us</span>
            </div>
        </div>
    </div>
</section>

<!-- ===== WHO WE ARE ===== -->
<section class="section-spacing bg-white relative overflow-hidden">
    <div class="absolute top-0 right-0 w-72 h-72 bg-sky/5 rounded-full blur-3xl"></div>
    <div class="container-grid relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="reveal-left">
                <div class="relative">
                    <div class="bg-gradient-to-br from-navy to-navy-light rounded-[2rem] p-10 shadow-2xl relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-sky/20 rounded-full blur-2xl"></div>
                        <div class="relative z-10 grid grid-cols-2 gap-5">
                            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center border border-white/10">
                                <div class="text-4xl font-bold text-white mb-1" data-counter data-target="10" data-suffix="+">0+</div>
                                <div class="text-sm text-white/60">Years in Business</div>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center border border-white/10">
                                <div class="text-4xl font-bold text-sky mb-1" data-counter data-target="50" data-suffix="+">0+</div>
                                <div class="text-sm text-white/60">Enterprise Clients</div>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center border border-white/10">
                                <div class="text-4xl font-bold text-white mb-1" data-counter data-target="200" data-suffix="+">0+</div>
                                <div class="text-sm text-white/60">IT Professionals</div>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center border border-white/10">
                                <div class="text-4xl font-bold text-sky mb-1" data-counter data-target="5">0</div>
                                <div class="text-sm text-white/60">Countries Served</div>
                            </div>
                        </div>
                    </div>
                    <!-- Floating badge -->
                    <div class="absolute -bottom-4 -right-4 bg-sky text-white rounded-2xl px-5 py-3 shadow-xl shadow-sky/30 animate-float">
                        <div class="flex items-center gap-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="font-bold text-sm">Certified Company</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="reveal-right">
                <span class="section-label">Who We Are</span>
                <h2 class="section-title">Who We Are</h2>
                <p class="text-medium-text text-lg leading-relaxed mb-6">
                    FASTMINDS is a modern consulting and staffing firm focused on delivering data-driven solutions and top IT talent. We help organizations transform their data, optimize their technology, and build high-performing teams.
                </p>
                <p class="text-medium-text leading-relaxed mb-6">
                    We combine deep technical expertise with a strong understanding of business needs. Our approach ensures that every solution we deliver is practical, scalable, and aligned with client goals.
                </p>
                <p class="text-medium-text leading-relaxed">
                    From startups scaling their data infrastructure to enterprises modernizing their systems, we bring the expertise, agility, and dedication needed to deliver exceptional results.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ===== MISSION & VISION ===== -->
<section class="section-spacing bg-light-gray relative overflow-hidden">
    <div class="absolute bottom-0 left-0 w-48 h-48 bg-sky/5 rounded-full blur-3xl"></div>
    <div class="container-grid relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="card reveal !p-10 hover-tilt" data-delay="0">
                <div class="w-16 h-16 rounded-2xl bg-sky/10 flex items-center justify-center mb-6 transition-all duration-500 group-hover:bg-sky">
                    <svg class="w-8 h-8 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-navy mb-4">Our Mission</h3>
                <p class="text-medium-text leading-relaxed">
                    Our mission is to empower businesses with intelligent insights, scalable technology solutions, and the right talent to accelerate growth and innovation.
                </p>
            </div>
            <div class="card reveal !p-10 hover-tilt" data-delay="150">
                <div class="w-16 h-16 rounded-2xl bg-sky/10 flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-navy mb-4">Our Vision</h3>
                <p class="text-medium-text leading-relaxed">
                    Our vision is to become a trusted partner for organizations seeking excellence in data, AI, and workforce solutions.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ===== WHY CHOOSE US ===== -->
<section class="section-spacing bg-white relative overflow-hidden">
    <div class="container-grid relative z-10">
        <div class="text-center mb-14 reveal">
            <span class="section-label">Our Difference</span>
            <h2 class="section-title">Why Choose FASTMINDS</h2>
            <p class="section-subtitle mx-auto">We combine deep technical expertise with a strong understanding of business needs.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="card text-center hover-tilt reveal" data-delay="0">
                <div class="card-icon mx-auto">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                    </svg>
                </div>
                <h4 class="font-bold text-navy mb-3">Proven Track Record</h4>
                <p class="text-medium-text text-sm">150+ successful projects delivered with 98% client satisfaction rate.</p>
            </div>
            <div class="card text-center hover-tilt reveal" data-delay="100">
                <div class="card-icon mx-auto">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <h4 class="font-bold text-navy mb-3">Expert Team</h4>
                <p class="text-medium-text text-sm">200+ certified professionals with deep domain and technical expertise.</p>
            </div>
            <div class="card text-center hover-tilt reveal" data-delay="200">
                <div class="card-icon mx-auto">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h4 class="font-bold text-navy mb-3">Agile Delivery</h4>
                <p class="text-medium-text text-sm">Fast, iterative approach that ensures you see value early and often.</p>
            </div>
            <div class="card text-center hover-tilt reveal" data-delay="300">
                <div class="card-icon mx-auto">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h4 class="font-bold text-navy mb-3">Enterprise Security</h4>
                <p class="text-medium-text text-sm">SOC 2 compliant processes with rigorous data security standards.</p>
            </div>
            <div class="card text-center hover-tilt reveal" data-delay="400">
                <div class="card-icon mx-auto">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h4 class="font-bold text-navy mb-3">Global Reach</h4>
                <p class="text-medium-text text-sm">Serving clients across 5 countries with 24/7 support capabilities.</p>
            </div>
            <div class="card text-center hover-tilt reveal" data-delay="500">
                <div class="card-icon mx-auto">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                    </svg>
                </div>
                <h4 class="font-bold text-navy mb-3">Measurable Impact</h4>
                <p class="text-medium-text text-sm">Every engagement is tied to clear KPIs and business outcomes.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== CTA ===== -->
<section class="section-spacing bg-navy relative overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-sky/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-sky/5 rounded-full blur-3xl translate-y-1/2 -translate-x-1/3"></div>
    </div>
    <div class="container-grid relative z-10 text-center">
        <div class="max-w-3xl mx-auto reveal">
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-6 leading-tight">Let's Build Something Extraordinary Together.</h2>
            <p class="text-white/50 text-lg mb-10">Whether you need strategic consulting, skilled talent, or end-to-end delivery — we're ready.</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="contact.php" class="btn-white">Get in Touch <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg></a>
                <a href="services.php" class="btn-outline-white">Our Services</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>