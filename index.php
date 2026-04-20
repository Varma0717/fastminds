<?php $page_title = 'Home'; ?>
<?php include 'includes/header.php'; ?>

<!-- ===== HERO SECTION ===== -->
<section class="section-spacing bg-gradient-to-br from-white via-light-gray/50 to-white overflow-hidden">
    <div class="container-grid">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div class="reveal-left">
                <span class="section-label">IT Consulting & Data Solutions</span>
                <h1 class="text-navy mb-6 leading-[1.1]">
                    Transforming Data into Decisions.<br>
                    <span class="text-sky">Talent into Impact.</span>
                </h1>
                <p class="text-medium-text text-lg md:text-xl leading-relaxed mb-8 max-w-lg">
                    At FASTMINDS, we help organizations unlock the full value of their data, modernize their technology, and scale faster with top-tier IT talent.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="staffing.php" class="btn-primary">
                        Hire Talent
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                    <a href="services.php" class="btn-outline">Explore Services</a>
                </div>
                <!-- Trust Badges -->
                <div class="mt-10 pt-8 border-t border-gray-200">
                    <div class="flex flex-wrap items-center gap-8">
                        <div>
                            <p class="text-3xl font-bold text-navy">150+</p>
                            <p class="text-sm text-medium-text">Projects Delivered</p>
                        </div>
                        <div class="w-px h-10 bg-gray-200"></div>
                        <div>
                            <p class="text-3xl font-bold text-navy">50+</p>
                            <p class="text-sm text-medium-text">Enterprise Clients</p>
                        </div>
                        <div class="w-px h-10 bg-gray-200"></div>
                        <div>
                            <p class="text-3xl font-bold text-navy">98%</p>
                            <p class="text-sm text-medium-text">Client Satisfaction</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Illustration -->
            <div class="reveal-right hidden lg:block">
                <div class="relative">
                    <div class="absolute -inset-4 bg-sky/5 rounded-3xl blur-3xl"></div>
                    <div class="relative bg-gradient-to-br from-navy to-navy-light rounded-3xl p-10 shadow-2xl">
                        <!-- Abstract Data Visualization -->
                        <div class="space-y-6">
                            <!-- Dashboard Header -->
                            <div class="flex items-center gap-3 mb-8">
                                <div class="w-3 h-3 rounded-full bg-red-400"></div>
                                <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                                <div class="w-3 h-3 rounded-full bg-green-400"></div>
                                <div class="ml-auto text-white/40 text-xs font-mono">analytics_dashboard.py</div>
                            </div>
                            <!-- Chart Bars -->
                            <div class="flex items-end gap-3 h-32">
                                <div class="flex-1 bg-sky/20 rounded-t-lg" style="height:40%"></div>
                                <div class="flex-1 bg-sky/30 rounded-t-lg" style="height:65%"></div>
                                <div class="flex-1 bg-sky/40 rounded-t-lg" style="height:45%"></div>
                                <div class="flex-1 bg-sky/50 rounded-t-lg" style="height:80%"></div>
                                <div class="flex-1 bg-sky/60 rounded-t-lg" style="height:55%"></div>
                                <div class="flex-1 bg-sky rounded-t-lg" style="height:95%"></div>
                                <div class="flex-1 bg-sky-light rounded-t-lg" style="height:70%"></div>
                            </div>
                            <!-- Stats Row -->
                            <div class="grid grid-cols-3 gap-4">
                                <div class="bg-white/5 rounded-xl p-4">
                                    <p class="text-sky text-xs mb-1">Revenue</p>
                                    <p class="text-white font-bold">$2.4M</p>
                                    <p class="text-green-400 text-xs">↑ 24%</p>
                                </div>
                                <div class="bg-white/5 rounded-xl p-4">
                                    <p class="text-sky text-xs mb-1">Efficiency</p>
                                    <p class="text-white font-bold">94.2%</p>
                                    <p class="text-green-400 text-xs">↑ 12%</p>
                                </div>
                                <div class="bg-white/5 rounded-xl p-4">
                                    <p class="text-sky text-xs mb-1">Growth</p>
                                    <p class="text-white font-bold">3.8x</p>
                                    <p class="text-green-400 text-xs">↑ 31%</p>
                                </div>
                            </div>
                            <!-- Code Lines -->
                            <div class="space-y-2 font-mono text-xs">
                                <div class="flex gap-4">
                                    <span class="text-white/20">01</span>
                                    <span class="text-sky">def</span>
                                    <span class="text-white/80">transform_data(</span><span class="text-yellow-300">pipeline</span><span class="text-white/80">):</span>
                                </div>
                                <div class="flex gap-4">
                                    <span class="text-white/20">02</span>
                                    <span class="text-white/40 ml-6">results = pipeline.</span><span class="text-sky">execute()</span>
                                </div>
                                <div class="flex gap-4">
                                    <span class="text-white/20">03</span>
                                    <span class="text-white/40 ml-6">return </span><span class="text-green-400">insights</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== WHAT WE DO ===== -->
<section class="section-spacing bg-white">
    <div class="container-grid">
        <div class="text-center mb-14 reveal">
            <span class="section-label">What We Do</span>
            <h2 class="section-title">Comprehensive IT Solutions</h2>
            <p class="section-subtitle mx-auto">We deliver end-to-end technology solutions that drive growth, efficiency, and innovation for modern enterprises.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="card reveal" style="transition-delay: 0.1s;">
                <div class="card-icon">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-navy mb-3">Data & Analytics</h3>
                <p class="text-medium-text leading-relaxed">Turn raw data into strategic insights with our advanced analytics, BI solutions, and data engineering expertise.</p>
                <a href="services.php" class="inline-flex items-center gap-2 text-sky font-semibold text-sm mt-5 hover:gap-3 transition-all duration-300">
                    Learn more
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
            <!-- Card 2 -->
            <div class="card reveal" style="transition-delay: 0.2s;">
                <div class="card-icon">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-navy mb-3">IT Consulting</h3>
                <p class="text-medium-text leading-relaxed">Strategic technology guidance from architecture design to cloud migration and digital transformation.</p>
                <a href="services.php" class="inline-flex items-center gap-2 text-sky font-semibold text-sm mt-5 hover:gap-3 transition-all duration-300">
                    Learn more
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
            <!-- Card 3 -->
            <div class="card reveal" style="transition-delay: 0.3s;">
                <div class="card-icon">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-navy mb-3">IT Staffing</h3>
                <p class="text-medium-text leading-relaxed">Access top-tier technology talent on demand — from contract specialists to full-time placements.</p>
                <a href="staffing.php" class="inline-flex items-center gap-2 text-sky font-semibold text-sm mt-5 hover:gap-3 transition-all duration-300">
                    Learn more
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ===== WHY FASTMINDS ===== -->
<section class="section-spacing bg-light-gray">
    <div class="container-grid">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- Left Content -->
            <div class="reveal-left">
                <span class="section-label">Why FASTMINDS</span>
                <h2 class="section-title">Built for Speed.<br>Designed for Impact.</h2>
                <p class="text-medium-text text-lg mb-8">We combine deep domain expertise with agile delivery to help you move faster, scale smarter, and achieve measurable outcomes.</p>
                <div class="space-y-5">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-lg bg-sky/10 flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-5 h-5 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-navy mb-1">End-to-End Solutions</h4>
                            <p class="text-medium-text text-sm">From strategy to execution, we handle the entire lifecycle of your technology projects.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-lg bg-sky/10 flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-5 h-5 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-navy mb-1">Deep Expertise</h4>
                            <p class="text-medium-text text-sm">Our team brings 10+ years of hands-on experience across data, cloud, and enterprise IT.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-lg bg-sky/10 flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-5 h-5 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-navy mb-1">Fast Delivery</h4>
                            <p class="text-medium-text text-sm">Agile methodology and streamlined processes mean faster time-to-value for your business.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-lg bg-sky/10 flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-5 h-5 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-navy mb-1">Industry Experience</h4>
                            <p class="text-medium-text text-sm">Deep understanding of healthcare, finance, manufacturing, retail, and enterprise sectors.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Illustration -->
            <div class="reveal-right hidden lg:block">
                <div class="relative">
                    <div class="absolute -inset-4 bg-sky/5 rounded-3xl blur-2xl"></div>
                    <div class="relative bg-white rounded-3xl p-10 shadow-xl border border-gray-100">
                        <div class="grid grid-cols-2 gap-6">
                            <div class="bg-light-gray rounded-2xl p-6 text-center">
                                <div class="text-4xl font-bold text-navy mb-1">150+</div>
                                <div class="text-sm text-medium-text">Projects</div>
                            </div>
                            <div class="bg-light-gray rounded-2xl p-6 text-center">
                                <div class="text-4xl font-bold text-sky mb-1">50+</div>
                                <div class="text-sm text-medium-text">Clients</div>
                            </div>
                            <div class="bg-light-gray rounded-2xl p-6 text-center">
                                <div class="text-4xl font-bold text-navy mb-1">200+</div>
                                <div class="text-sm text-medium-text">Consultants</div>
                            </div>
                            <div class="bg-light-gray rounded-2xl p-6 text-center">
                                <div class="text-4xl font-bold text-sky mb-1">10+</div>
                                <div class="text-sm text-medium-text">Years</div>
                            </div>
                        </div>
                        <div class="mt-8 bg-gradient-to-r from-sky/10 to-sky/5 rounded-2xl p-6">
                            <div class="flex items-center gap-4 mb-4">
                                <div class="w-10 h-10 rounded-full bg-sky flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-navy">Client Satisfaction</p>
                                    <p class="text-xs text-medium-text">Consistently rated above industry average</p>
                                </div>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-sky rounded-full h-2" style="width: 98%"></div>
                            </div>
                            <p class="text-right text-xs text-sky font-semibold mt-1">98%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== INDUSTRIES ===== -->
<section class="section-spacing bg-white">
    <div class="container-grid">
        <div class="text-center mb-14 reveal">
            <span class="section-label">Industries</span>
            <h2 class="section-title">Serving Diverse Sectors</h2>
            <p class="section-subtitle mx-auto">We bring specialized expertise to the industries that matter most.</p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <!-- Healthcare -->
            <div class="card text-center reveal !p-6" style="transition-delay: 0.1s;">
                <div class="card-icon mx-auto !mb-4">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </div>
                <h4 class="font-bold text-navy text-sm">Healthcare</h4>
            </div>
            <!-- Banking -->
            <div class="card text-center reveal !p-6" style="transition-delay: 0.15s;">
                <div class="card-icon mx-auto !mb-4">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h4 class="font-bold text-navy text-sm">Banking</h4>
            </div>
            <!-- Manufacturing -->
            <div class="card text-center reveal !p-6" style="transition-delay: 0.2s;">
                <div class="card-icon mx-auto !mb-4">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                    </svg>
                </div>
                <h4 class="font-bold text-navy text-sm">Manufacturing</h4>
            </div>
            <!-- Retail -->
            <div class="card text-center reveal !p-6" style="transition-delay: 0.25s;">
                <div class="card-icon mx-auto !mb-4">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                </div>
                <h4 class="font-bold text-navy text-sm">Retail</h4>
            </div>
            <!-- Enterprise -->
            <div class="card text-center reveal !p-6" style="transition-delay: 0.3s;">
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

<!-- ===== CASE STUDIES PREVIEW ===== -->
<section class="section-spacing bg-light-gray">
    <div class="container-grid">
        <div class="text-center mb-14 reveal">
            <span class="section-label">Case Studies</span>
            <h2 class="section-title">Proven Results</h2>
            <p class="section-subtitle mx-auto">See how we've helped enterprises achieve measurable impact.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Case 1 -->
            <div class="card reveal" style="transition-delay: 0.1s;">
                <div class="bg-sky/10 rounded-xl px-4 py-2 inline-block mb-4">
                    <span class="text-sky text-xs font-semibold">Healthcare</span>
                </div>
                <h3 class="text-lg font-bold text-navy mb-3">Reduced Reporting Time by 40%</h3>
                <p class="text-medium-text text-sm mb-6">Implemented automated BI dashboards for a major healthcare provider, cutting manual reporting from days to hours.</p>
                <div class="flex items-center gap-6 pt-4 border-t border-gray-100">
                    <div>
                        <p class="text-2xl font-bold text-sky">40%</p>
                        <p class="text-xs text-medium-text">Faster Reports</p>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-navy">$1.2M</p>
                        <p class="text-xs text-medium-text">Cost Savings</p>
                    </div>
                </div>
            </div>
            <!-- Case 2 -->
            <div class="card reveal" style="transition-delay: 0.2s;">
                <div class="bg-sky/10 rounded-xl px-4 py-2 inline-block mb-4">
                    <span class="text-sky text-xs font-semibold">Banking</span>
                </div>
                <h3 class="text-lg font-bold text-navy mb-3">Modernized Legacy Data Platform</h3>
                <p class="text-medium-text text-sm mb-6">Migrated a tier-1 bank's on-premise data warehouse to a cloud-native architecture with real-time analytics.</p>
                <div class="flex items-center gap-6 pt-4 border-t border-gray-100">
                    <div>
                        <p class="text-2xl font-bold text-sky">60%</p>
                        <p class="text-xs text-medium-text">Faster Queries</p>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-navy">99.9%</p>
                        <p class="text-xs text-medium-text">Uptime</p>
                    </div>
                </div>
            </div>
            <!-- Case 3 -->
            <div class="card reveal" style="transition-delay: 0.3s;">
                <div class="bg-sky/10 rounded-xl px-4 py-2 inline-block mb-4">
                    <span class="text-sky text-xs font-semibold">Retail</span>
                </div>
                <h3 class="text-lg font-bold text-navy mb-3">AI-Powered Demand Forecasting</h3>
                <p class="text-medium-text text-sm mb-6">Built predictive models that improved inventory accuracy and reduced overstock by 35% across 200+ stores.</p>
                <div class="flex items-center gap-6 pt-4 border-t border-gray-100">
                    <div>
                        <p class="text-2xl font-bold text-sky">35%</p>
                        <p class="text-xs text-medium-text">Less Overstock</p>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-navy">$3.5M</p>
                        <p class="text-xs text-medium-text">Revenue Gained</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-10 reveal">
            <a href="case-studies.php" class="btn-outline">View All Case Studies</a>
        </div>
    </div>
</section>

<!-- ===== CTA SECTION ===== -->
<section class="section-spacing bg-navy relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 right-0 w-96 h-96 bg-sky rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-sky rounded-full blur-3xl translate-y-1/2 -translate-x-1/2"></div>
    </div>
    <div class="container-grid relative z-10 text-center">
        <div class="max-w-2xl mx-auto reveal">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-5">Ready to scale your business with data and talent?</h2>
            <p class="text-white/60 text-lg mb-8">Partner with FASTMINDS and unlock the full potential of your technology investments.</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="staffing.php" class="btn-white">Hire Talent</a>
                <a href="contact.php" class="btn-outline-white">Start a Project</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>