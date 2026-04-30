<?php $page_title = 'Home'; ?>
<?php include 'includes/header.php'; ?>

<!-- ===== HERO SECTION ===== -->
<section class="relative min-h-[90vh] flex items-center bg-gradient-to-br from-navy via-navy-light to-navy overflow-hidden">
    <!-- Floating Decorative Shapes -->
    <div class="absolute top-20 right-[10%] w-72 h-72 bg-sky/10 rounded-full blur-3xl animate-float" data-parallax="0.05"></div>
    <div class="absolute bottom-20 left-[5%] w-96 h-96 bg-sky/5 rounded-full blur-3xl animate-float-reverse" data-parallax="-0.03"></div>
    <div class="absolute top-1/2 left-1/2 w-[600px] h-[600px] bg-sky/5 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2 animate-pulse-soft"></div>
    <!-- Small floating dots -->
    <div class="absolute top-32 left-[20%] w-3 h-3 bg-sky rounded-full animate-float opacity-60"></div>
    <div class="absolute top-[60%] right-[15%] w-2 h-2 bg-sky-light rounded-full animate-float-slow opacity-40"></div>
    <div class="absolute bottom-32 left-[40%] w-4 h-4 bg-sky/30 rounded-full animate-float-reverse opacity-50"></div>

    <div class="container-grid relative z-10 py-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div>
                <div class="reveal" data-delay="0">
                    <span class="inline-flex items-center gap-2 px-5 py-2 bg-white/10 backdrop-blur-sm rounded-full text-sky text-xs font-semibold uppercase tracking-[3px] mb-8 border border-white/10">
                        <span class="w-2 h-2 bg-sky rounded-full animate-pulse"></span>
                        Best Data &amp; IT Solution Service
                    </span>
                </div>
                <h1 class="text-white mb-6 leading-[1.1] reveal" data-delay="100">
                    Transforming Your<br>Business With
                    <span class="text-gradient"> Data &amp; IT.</span>
                </h1>
                <p class="text-white/60 text-lg md:text-xl leading-relaxed mb-10 max-w-lg reveal" data-delay="200">
                    At FASTMINDS, we help organizations unlock the full value of their data, modernize their technology, and scale faster with top-tier IT talent.
                </p>
                <div class="flex flex-wrap gap-4 reveal" data-delay="300">
                    <a href="services.php" class="btn-primary">
                        Discover More
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                    <a href="contact.php" class="btn-outline-white">
                        Let's Talk
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Right Illustration -->
            <div class="hidden lg:block reveal-right" data-delay="400">
                <div class="relative">
                    <!-- Glow -->
                    <div class="absolute -inset-8 bg-sky/10 rounded-[2rem] blur-3xl animate-pulse-soft"></div>
                    <div class="relative rounded-[2rem] overflow-hidden border border-white/10 shadow-2xl shadow-sky/10">
                        <img src="images/AD_images/power_bi_dashboard_images/POWER_BI_Sales_Overview.png" alt="Power BI sales dashboard screenshot" class="w-full h-auto object-cover" loading="eager">
                        <!-- Overlay gradient -->
                        <div class="absolute inset-0 bg-gradient-to-t from-navy/40 via-transparent to-transparent"></div>
                        <!-- Floating stat badge -->
                        <div class="absolute bottom-6 left-6 right-6 bg-white/10 backdrop-blur-md rounded-xl p-4 border border-white/20">
                            <div class="grid grid-cols-3 gap-3 text-center">
                                <div>
                                    <p class="text-sky text-xs mb-1">Total Sales</p>
                                    <p class="text-white font-bold text-lg">$2.35M</p>
                                </div>
                                <div>
                                    <p class="text-sky text-xs mb-1">Orders</p>
                                    <p class="text-white font-bold text-lg">12.8K</p>
                                </div>
                                <div>
                                    <p class="text-sky text-xs mb-1">Margin</p>
                                    <p class="text-white font-bold text-lg">22.2%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Trust Badges -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-20 pt-10 border-t border-white/10 reveal" data-delay="500">
            <div class="text-center">
                <p class="text-3xl md:text-4xl font-bold text-white" data-counter data-target="150" data-suffix="+">0+</p>
                <p class="text-white/40 text-sm mt-1">Projects Delivered</p>
            </div>
            <div class="text-center">
                <p class="text-3xl md:text-4xl font-bold text-white" data-counter data-target="50" data-suffix="+">0+</p>
                <p class="text-white/40 text-sm mt-1">Enterprise Clients</p>
            </div>
            <div class="text-center">
                <p class="text-3xl md:text-4xl font-bold text-white" data-counter data-target="200" data-suffix="+">0+</p>
                <p class="text-white/40 text-sm mt-1">IT Professionals</p>
            </div>
            <div class="text-center">
                <p class="text-3xl md:text-4xl font-bold text-white" data-counter data-target="98" data-suffix="%">0%</p>
                <p class="text-white/40 text-sm mt-1">Client Satisfaction</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== WHAT WE DO (Services) ===== -->
<section class="section-spacing bg-white relative overflow-hidden">
    <!-- Decorative -->
    <div class="absolute top-0 right-0 w-72 h-72 bg-sky/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
    <div class="container-grid relative z-10">
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between mb-14">
            <div class="reveal">
                <span class="section-label">Our Services</span>
                <h2 class="section-title">Innovative IT Services<br>Tailored For Your Success.</h2>
            </div>
            <p class="text-medium-text max-w-md mt-4 lg:mt-0 reveal" data-delay="100">
                We combine data intelligence, technology expertise, and skilled professionals to deliver end-to-end solutions.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="card hover-tilt reveal" data-delay="0">
                <div class="card-icon">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-navy mb-3">Data &amp; Analytics</h3>
                <p class="text-medium-text leading-relaxed text-sm">We design and deliver powerful data solutions that transform raw data into actionable insights. From interactive dashboards to enterprise data models.</p>
                <a href="service-data-analytics.php" class="inline-flex items-center gap-2 text-sky font-semibold text-sm mt-6 group/link">
                    Read More
                    <svg class="w-4 h-4 transition-transform duration-300 group-hover/link:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
            <!-- Card 2 -->
            <div class="card hover-tilt reveal" data-delay="100">
                <div class="card-icon">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-navy mb-3">AI &amp; Automation</h3>
                <p class="text-medium-text leading-relaxed text-sm">We help businesses reduce manual processes and improve efficiency through intelligent automation, predictive analytics, and process optimization.</p>
                <a href="service-ai-automation.php" class="inline-flex items-center gap-2 text-sky font-semibold text-sm mt-6 group/link">
                    Read More
                    <svg class="w-4 h-4 transition-transform duration-300 group-hover/link:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
            <!-- Card 3 -->
            <div class="card hover-tilt reveal" data-delay="200">
                <div class="card-icon">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-navy mb-3">IT Consulting</h3>
                <p class="text-medium-text leading-relaxed text-sm">We help organizations align technology with business strategy. Our consulting services focus on building scalable architectures and driving digital transformation.</p>
                <a href="service-it-consulting.php" class="inline-flex items-center gap-2 text-sky font-semibold text-sm mt-6 group/link">
                    Read More
                    <svg class="w-4 h-4 transition-transform duration-300 group-hover/link:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
            <!-- Card 4 -->
            <div class="card hover-tilt reveal" data-delay="300">
                <div class="card-icon">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-navy mb-3">IT Staffing</h3>
                <p class="text-medium-text leading-relaxed text-sm">We provide highly skilled IT professionals who are ready to contribute from day one. Whether you need contract, contract-to-hire, or full-time talent.</p>
                <a href="staffing.php" class="inline-flex items-center gap-2 text-sky font-semibold text-sm mt-6 group/link">
                    Read More
                    <svg class="w-4 h-4 transition-transform duration-300 group-hover/link:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
            <!-- Card 5 -->
            <div class="card hover-tilt reveal" data-delay="400">
                <div class="card-icon">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-navy mb-3">Cloud Solutions</h3>
                <p class="text-medium-text leading-relaxed text-sm">Seamless cloud migration and optimized architecture design on Azure, AWS, and Snowflake for scalable, secure, and efficient operations.</p>
                <a href="service-cloud-solutions.php" class="inline-flex items-center gap-2 text-sky font-semibold text-sm mt-6 group/link">
                    Read More
                    <svg class="w-4 h-4 transition-transform duration-300 group-hover/link:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
            <!-- Card 6 -->
            <div class="card hover-tilt reveal" data-delay="500">
                <div class="card-icon">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-navy mb-3">Digital Transformation</h3>
                <p class="text-medium-text leading-relaxed text-sm">Roadmap creation and execution for modernizing your technology landscape, from legacy systems to cutting-edge platforms.</p>
                <a href="service-digital-transformation.php" class="inline-flex items-center gap-2 text-sky font-semibold text-sm mt-6 group/link">
                    Read More
                    <svg class="w-4 h-4 transition-transform duration-300 group-hover/link:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ===== ABOUT PREVIEW ===== -->
<section class="section-spacing bg-light-gray relative overflow-hidden">
    <div class="absolute bottom-0 left-0 w-64 h-64 bg-sky/5 rounded-full blur-3xl"></div>
    <div class="container-grid relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- Left: Visual -->
            <div class="reveal-left">
                <div class="relative">
                    <div class="bg-gradient-to-br from-navy to-navy-light rounded-[2rem] p-10 shadow-2xl relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-sky/20 rounded-full blur-2xl"></div>
                        <div class="relative z-10 grid grid-cols-2 gap-5">
                            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center border border-white/10">
                                <div class="text-4xl font-bold text-white mb-1" data-counter data-target="10" data-suffix="+">0+</div>
                                <div class="text-sm text-white/60">Years Experience</div>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center border border-white/10">
                                <div class="text-4xl font-bold text-sky mb-1" data-counter data-target="50" data-suffix="+">0+</div>
                                <div class="text-sm text-white/60">Enterprise Clients</div>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center border border-white/10">
                                <div class="text-4xl font-bold text-white mb-1" data-counter data-target="200" data-suffix="+">0+</div>
                                <div class="text-sm text-white/60">Consultants</div>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center border border-white/10">
                                <div class="text-4xl font-bold text-sky mb-1" data-counter data-target="5">0</div>
                                <div class="text-sm text-white/60">Countries Served</div>
                            </div>
                        </div>
                        <!-- Satisfaction Bar -->
                        <div class="mt-6 bg-white/10 backdrop-blur-sm rounded-2xl p-5 border border-white/10">
                            <div class="flex items-center justify-between mb-3">
                                <span class="text-sm font-semibold text-white">Client Satisfaction</span>
                                <span class="text-sm font-bold text-sky">98%</span>
                            </div>
                            <div class="progress-bar-track !bg-white/10">
                                <div class="progress-bar-fill" style="--progress: 98%"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Floating badge -->
                    <div class="absolute -bottom-4 -right-4 bg-sky text-white rounded-2xl px-6 py-4 shadow-xl shadow-sky/30 animate-float">
                        <div class="flex items-center gap-3">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                            <div>
                                <p class="font-bold text-sm">Award-Winning</p>
                                <p class="text-white/80 text-xs">IT Solutions</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Text Content -->
            <div class="reveal-right">
                <span class="section-label">About Us</span>
                <h2 class="section-title">Boost Business with Our Innovative IT Solutions</h2>
                <p class="text-medium-text text-lg leading-relaxed mb-8">
                    FASTMINDS is a modern consulting and staffing firm focused on delivering data-driven solutions and top IT talent. We help organizations transform their data, optimize their technology, and build high-performing teams.
                </p>
                <div class="space-y-4 mb-8">
                    <div class="flex items-center gap-3">
                        <div class="w-6 h-6 rounded-full bg-sky/10 flex items-center justify-center shrink-0">
                            <svg class="w-3.5 h-3.5 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <span class="text-navy font-medium">End-to-end solutions across data, technology, and talent</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-6 h-6 rounded-full bg-sky/10 flex items-center justify-center shrink-0">
                            <svg class="w-3.5 h-3.5 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <span class="text-navy font-medium">Deep expertise in analytics, cloud, and enterprise systems</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-6 h-6 rounded-full bg-sky/10 flex items-center justify-center shrink-0">
                            <svg class="w-3.5 h-3.5 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <span class="text-navy font-medium">Fast and reliable delivery with scalable engagement models</span>
                    </div>
                </div>
                <a href="about.php" class="btn-primary">
                    Learn More
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ===== WHY CHOOSE US ===== -->
<section class="section-spacing bg-white relative overflow-hidden">
    <div class="absolute top-0 left-0 w-96 h-96 bg-sky/5 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2"></div>
    <div class="container-grid relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- Left Content -->
            <div class="reveal-left">
                <span class="section-label">Why Choose Us</span>
                <h2 class="section-title">Elevate Growth With Our IT Solutions For Success.</h2>
                <p class="text-medium-text text-lg mb-8">We combine deep domain expertise with agile delivery to help you move faster, scale smarter, and achieve measurable outcomes.</p>

                <!-- Progress Bars -->
                <div class="space-y-6 mb-8">
                    <div>
                        <div class="flex justify-between mb-2">
                            <span class="font-semibold text-navy text-sm">Data & Analytics Expertise</span>
                            <span class="font-bold text-sky text-sm">95%</span>
                        </div>
                        <div class="progress-bar-track">
                            <div class="progress-bar-fill" style="--progress: 95%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-2">
                            <span class="font-semibold text-navy text-sm">Cloud & Infrastructure</span>
                            <span class="font-bold text-sky text-sm">90%</span>
                        </div>
                        <div class="progress-bar-track">
                            <div class="progress-bar-fill" style="--progress: 90%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-2">
                            <span class="font-semibold text-navy text-sm">Talent Acquisition</span>
                            <span class="font-bold text-sky text-sm">88%</span>
                        </div>
                        <div class="progress-bar-track">
                            <div class="progress-bar-fill" style="--progress: 88%"></div>
                        </div>
                    </div>
                </div>

                <a href="about.php" class="btn-sky-outline">
                    Learn More
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>

            <!-- Right Content -->
            <div class="reveal-right">
                <div class="grid grid-cols-2 gap-5">
                    <div class="bg-light-gray rounded-2xl p-8 text-center hover:shadow-xl hover:-translate-y-1 transition-all duration-500">
                        <div class="w-14 h-14 rounded-2xl bg-sky/10 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-7 h-7 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h4 class="font-bold text-navy mb-1">24/7 Support</h4>
                        <p class="text-medium-text text-xs">Round-the-clock assistance</p>
                    </div>
                    <div class="bg-light-gray rounded-2xl p-8 text-center hover:shadow-xl hover:-translate-y-1 transition-all duration-500 mt-8">
                        <div class="w-14 h-14 rounded-2xl bg-sky/10 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-7 h-7 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h4 class="font-bold text-navy mb-1">Enterprise Security</h4>
                        <p class="text-medium-text text-xs">SOC 2 compliant processes</p>
                    </div>
                    <div class="bg-light-gray rounded-2xl p-8 text-center hover:shadow-xl hover:-translate-y-1 transition-all duration-500">
                        <div class="w-14 h-14 rounded-2xl bg-sky/10 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-7 h-7 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                        </div>
                        <h4 class="font-bold text-navy mb-1">Measurable Impact</h4>
                        <p class="text-medium-text text-xs">KPI-driven outcomes</p>
                    </div>
                    <div class="bg-light-gray rounded-2xl p-8 text-center hover:shadow-xl hover:-translate-y-1 transition-all duration-500 mt-8">
                        <div class="w-14 h-14 rounded-2xl bg-sky/10 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-7 h-7 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h4 class="font-bold text-navy mb-1">Global Reach</h4>
                        <p class="text-medium-text text-xs">5+ countries served</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== WORKING PROCESS ===== -->
<section class="section-spacing bg-light-gray relative overflow-hidden">
    <div class="absolute top-10 right-10 w-48 h-48 bg-sky/5 rounded-full blur-3xl animate-float-slow"></div>
    <div class="container-grid relative z-10">
        <div class="text-center mb-16 reveal">
            <span class="section-label">Working Process</span>
            <h2 class="section-title">How We Work</h2>
            <p class="section-subtitle mx-auto">Our proven process ensures consistent, high-quality results for every engagement.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Step 1 -->
            <div class="process-step reveal" data-delay="0">
                <div class="process-number mb-6 mx-auto">01</div>
                <h4 class="font-bold text-navy mb-3">Discover &amp; Analyze</h4>
                <p class="text-medium-text text-sm">We understand your business challenges, data landscape, and strategic objectives.</p>
            </div>
            <!-- Step 2 -->
            <div class="process-step reveal" data-delay="150">
                <div class="process-number mb-6 mx-auto">02</div>
                <h4 class="font-bold text-navy mb-3">Strategy &amp; Plan</h4>
                <p class="text-medium-text text-sm">We design a tailored roadmap with clear milestones and measurable outcomes.</p>
            </div>
            <!-- Step 3 -->
            <div class="process-step reveal" data-delay="300">
                <div class="process-number mb-6 mx-auto">03</div>
                <h4 class="font-bold text-navy mb-3">Execute &amp; Build</h4>
                <p class="text-medium-text text-sm">Our experts implement solutions using agile methodology and best practices.</p>
            </div>
            <!-- Step 4 -->
            <div class="process-step reveal" data-delay="450">
                <div class="process-number mb-6 mx-auto">04</div>
                <h4 class="font-bold text-navy mb-3">Deliver &amp; Scale</h4>
                <p class="text-medium-text text-sm">We deliver results, provide ongoing support, and help you scale for the future.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== MARQUEE TICKER ===== -->
<section class="py-10 bg-navy overflow-hidden">
    <div class="marquee-wrapper">
        <div class="marquee-track">
            <span class="marquee-item text-white/20"><span class="marquee-dot"></span> DATA ANALYTICS</span>
            <span class="marquee-item text-white/20"><span class="marquee-dot"></span> IT CONSULTING</span>
            <span class="marquee-item text-white/20"><span class="marquee-dot"></span> AI AUTOMATION</span>
            <span class="marquee-item text-white/20"><span class="marquee-dot"></span> IT STAFFING</span>
            <span class="marquee-item text-white/20"><span class="marquee-dot"></span> CLOUD SOLUTIONS</span>
            <span class="marquee-item text-white/20"><span class="marquee-dot"></span> DIGITAL TRANSFORMATION</span>
            <span class="marquee-item text-white/20"><span class="marquee-dot"></span> POWER BI</span>
            <span class="marquee-item text-white/20"><span class="marquee-dot"></span> ENTERPRISE DATA</span>
            <!-- Duplicate for seamless loop -->
            <span class="marquee-item text-white/20"><span class="marquee-dot"></span> DATA ANALYTICS</span>
            <span class="marquee-item text-white/20"><span class="marquee-dot"></span> IT CONSULTING</span>
            <span class="marquee-item text-white/20"><span class="marquee-dot"></span> AI AUTOMATION</span>
            <span class="marquee-item text-white/20"><span class="marquee-dot"></span> IT STAFFING</span>
            <span class="marquee-item text-white/20"><span class="marquee-dot"></span> CLOUD SOLUTIONS</span>
            <span class="marquee-item text-white/20"><span class="marquee-dot"></span> DIGITAL TRANSFORMATION</span>
            <span class="marquee-item text-white/20"><span class="marquee-dot"></span> POWER BI</span>
            <span class="marquee-item text-white/20"><span class="marquee-dot"></span> ENTERPRISE DATA</span>
        </div>
    </div>
</section>

<!-- ===== CASE STUDIES / PORTFOLIO ===== -->
<section class="section-spacing bg-white relative overflow-hidden">
    <div class="container-grid">
        <div class="text-center mb-14 reveal">
            <span class="section-label">Case Studies</span>
            <h2 class="section-title">Explore Our Recent Projects</h2>
            <p class="section-subtitle mx-auto">See how FASTMINDS has helped organizations achieve measurable results through data and technology.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Case 1 -->
            <div class="portfolio-card reveal" data-delay="0">
                <div class="bg-gradient-to-br from-navy to-navy-light h-64 flex items-center justify-center rounded-2xl">
                    <div class="text-center px-6">
                        <div class="w-16 h-16 rounded-2xl bg-white/10 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                        <p class="text-white/60 text-sm">Healthcare</p>
                    </div>
                </div>
                <div class="portfolio-overlay">
                    <span class="text-sky text-xs font-semibold uppercase tracking-wider mb-2">Healthcare</span>
                    <h4 class="text-white font-bold text-lg">Reduced Reporting Time by 40%</h4>
                    <p class="text-white/60 text-sm mt-2">Automated dashboards and real-time analytics</p>
                </div>
            </div>
            <!-- Case 2 -->
            <div class="portfolio-card reveal" data-delay="100">
                <div class="bg-gradient-to-br from-sky-dark to-sky h-64 flex items-center justify-center rounded-2xl">
                    <div class="text-center px-6">
                        <div class="w-16 h-16 rounded-2xl bg-white/10 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <p class="text-white/60 text-sm">Banking</p>
                    </div>
                </div>
                <div class="portfolio-overlay">
                    <span class="text-sky text-xs font-semibold uppercase tracking-wider mb-2">Banking &amp; Finance</span>
                    <h4 class="text-white font-bold text-lg">Enterprise BI Solutions</h4>
                    <p class="text-white/60 text-sm mt-2">Financial reporting and accuracy improvements</p>
                </div>
            </div>
            <!-- Case 3 -->
            <div class="portfolio-card reveal" data-delay="200">
                <div class="bg-gradient-to-br from-navy-light to-navy h-64 flex items-center justify-center rounded-2xl">
                    <div class="text-center px-6">
                        <div class="w-16 h-16 rounded-2xl bg-white/10 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                        </div>
                        <p class="text-white/60 text-sm">Retail</p>
                    </div>
                </div>
                <div class="portfolio-overlay">
                    <span class="text-sky text-xs font-semibold uppercase tracking-wider mb-2">Retail</span>
                    <h4 class="text-white font-bold text-lg">AI-Powered Demand Forecasting</h4>
                    <p class="text-white/60 text-sm mt-2">Reduced overstock by 35% across 200+ stores</p>
                </div>
            </div>
        </div>
        <div class="text-center mt-12 reveal">
            <a href="case-studies.php" class="btn-sky-outline">
                View All Case Studies
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- ===== STATS COUNTERS ===== -->
<section class="py-20 bg-gradient-to-r from-navy via-navy-light to-navy relative overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-0 left-1/4 w-64 h-64 bg-sky rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-1/4 w-64 h-64 bg-sky rounded-full blur-3xl"></div>
    </div>
    <div class="container-grid relative z-10">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="stat-item reveal" data-delay="0">
                <div class="counter-number text-white" data-counter data-target="100" data-suffix="+">0</div>
                <p class="text-white/50 mt-2">Projects Completed</p>
            </div>
            <div class="stat-item reveal" data-delay="100">
                <div class="counter-number text-white" data-counter data-target="300" data-suffix="+">0</div>
                <p class="text-white/50 mt-2">Happy Clients</p>
            </div>
            <div class="stat-item reveal" data-delay="200">
                <div class="counter-number text-white" data-counter data-target="200" data-suffix="+">0</div>
                <p class="text-white/50 mt-2">Expert Consultants</p>
            </div>
            <div class="stat-item reveal" data-delay="300">
                <div class="counter-number text-white" data-counter data-target="10" data-suffix="+">0</div>
                <p class="text-white/50 mt-2">Years of Experience</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== INDUSTRIES ===== -->
<section class="section-spacing bg-light-gray relative overflow-hidden">
    <div class="container-grid relative z-10">
        <div class="text-center mb-14 reveal">
            <span class="section-label">Industries</span>
            <h2 class="section-title">Industries We Serve</h2>
            <p class="section-subtitle mx-auto">We deliver tailored solutions across multiple industries, helping organizations address unique challenges.</p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <div class="card text-center !p-8 reveal" data-delay="0">
                <div class="card-icon mx-auto !mb-4">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </div>
                <h4 class="font-bold text-navy text-sm">Healthcare</h4>
            </div>
            <div class="card text-center !p-8 reveal" data-delay="100">
                <div class="card-icon mx-auto !mb-4">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h4 class="font-bold text-navy text-sm">Banking</h4>
            </div>
            <div class="card text-center !p-8 reveal" data-delay="200">
                <div class="card-icon mx-auto !mb-4">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                    </svg>
                </div>
                <h4 class="font-bold text-navy text-sm">Manufacturing</h4>
            </div>
            <div class="card text-center !p-8 reveal" data-delay="300">
                <div class="card-icon mx-auto !mb-4">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                </div>
                <h4 class="font-bold text-navy text-sm">Retail</h4>
            </div>
            <div class="card text-center !p-8 reveal" data-delay="400">
                <div class="card-icon mx-auto !mb-4">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
                <h4 class="font-bold text-navy text-sm">Enterprise</h4>
            </div>
        </div>
    </div>
</section>

<!-- ===== CTA SECTION ===== -->
<section class="section-spacing bg-navy relative overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-sky/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-sky/5 rounded-full blur-3xl translate-y-1/2 -translate-x-1/3"></div>
    </div>
    <div class="container-grid relative z-10">
        <div class="max-w-3xl mx-auto text-center reveal">
            <span class="inline-flex items-center gap-2 px-5 py-2 bg-white/10 backdrop-blur-sm rounded-full text-sky text-xs font-semibold uppercase tracking-[3px] mb-6 border border-white/10">
                <span class="w-2 h-2 bg-sky rounded-full animate-pulse"></span>
                Get in Touch
            </span>
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-6 leading-tight">Ready to Scale Your Business<br>With Data &amp; Talent?</h2>
            <p class="text-white/50 text-lg mb-10 max-w-xl mx-auto">Partner with FASTMINDS to unlock the full potential of your data and technology investments.</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="staffing.php" class="btn-white">
                    Hire Talent
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
                <a href="contact.php" class="btn-outline-white">
                    Start a Project
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>