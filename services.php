<?php $page_title = 'Services'; ?>
<?php include 'includes/header.php'; ?>

<!-- ===== PAGE HERO ===== -->
<section class="page-hero" style="background-image: url('images/AD_images/tableau_dashboards_images/TAB_Financial_Performance.png')">
    <div class="absolute top-10 right-[15%] w-3 h-3 bg-sky rounded-full animate-float opacity-60"></div>
    <div class="absolute bottom-20 left-[10%] w-4 h-4 bg-sky/40 rounded-full animate-float-reverse"></div>
    <div class="container-grid relative z-10">
        <div class="max-w-2xl">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 bg-white/10 backdrop-blur-sm rounded-full text-sky text-xs font-semibold uppercase tracking-[3px] mb-6 border border-white/10 reveal">
                <span class="w-2 h-2 bg-sky rounded-full animate-pulse"></span>
                Our Services
            </span>
            <h1 class="text-white mb-5 reveal" data-delay="100">Our <span class="text-gradient">Services</span></h1>
            <p class="text-white/50 text-lg leading-relaxed reveal" data-delay="200">FASTMINDS offers a comprehensive range of services across data, AI, and IT consulting to help organizations achieve operational excellence.</p>
            <div class="flex items-center gap-3 mt-6 text-white/30 text-sm reveal" data-delay="300">
                <a href="index.php" class="hover:text-sky transition-colors">Home</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                <span class="text-sky">Services</span>
            </div>
        </div>
    </div>
</section>

<!-- ===== SERVICES OVERVIEW ===== -->
<section class="section-spacing bg-white relative overflow-hidden">
    <div class="absolute top-0 right-0 w-72 h-72 bg-sky/5 rounded-full blur-3xl"></div>
    <div class="container-grid relative z-10">
        <div class="text-center mb-16 reveal">
            <span class="section-label">What We Offer</span>
            <h2 class="section-title">Innovative IT Services Tailored For Your Success.</h2>
            <p class="section-subtitle mx-auto">We build robust data solutions, automate processes, and provide strategic guidance.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="card hover-tilt reveal" data-delay="0">
                <div class="card-icon">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-navy mb-3">Power BI &amp; Tableau Dashboards</h3>
                <p class="text-medium-text text-sm leading-relaxed">Interactive dashboards and real-time analytics for data-driven decisions.</p>
                <a href="#data-analytics" class="inline-flex items-center gap-2 text-sky font-semibold text-sm mt-6 group/link">Learn More <svg class="w-4 h-4 transition-transform duration-300 group-hover/link:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg></a>
            </div>
            <div class="card hover-tilt reveal" data-delay="100">
                <div class="card-icon">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-navy mb-3">Data Modeling &amp; Warehousing</h3>
                <p class="text-medium-text text-sm leading-relaxed">Scalable data models and modern data warehouse implementations.</p>
                <a href="#data-analytics" class="inline-flex items-center gap-2 text-sky font-semibold text-sm mt-6 group/link">Learn More <svg class="w-4 h-4 transition-transform duration-300 group-hover/link:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg></a>
            </div>
            <div class="card hover-tilt reveal" data-delay="200">
                <div class="card-icon">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-navy mb-3">Workflow Automation</h3>
                <p class="text-medium-text text-sm leading-relaxed">Streamline business processes with intelligent workflow automation.</p>
                <a href="#ai-automation" class="inline-flex items-center gap-2 text-sky font-semibold text-sm mt-6 group/link">Learn More <svg class="w-4 h-4 transition-transform duration-300 group-hover/link:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg></a>
            </div>
            <div class="card hover-tilt reveal" data-delay="300">
                <div class="card-icon">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-navy mb-3">Predictive Analytics</h3>
                <p class="text-medium-text text-sm leading-relaxed">Leverage data to forecast trends and make proactive decisions.</p>
                <a href="#ai-automation" class="inline-flex items-center gap-2 text-sky font-semibold text-sm mt-6 group/link">Learn More <svg class="w-4 h-4 transition-transform duration-300 group-hover/link:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg></a>
            </div>
            <div class="card hover-tilt reveal" data-delay="400">
                <div class="card-icon">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-navy mb-3">Cloud Solutions</h3>
                <p class="text-medium-text text-sm leading-relaxed">Seamless cloud migration on Azure, AWS, and Snowflake platforms.</p>
                <a href="#it-consulting" class="inline-flex items-center gap-2 text-sky font-semibold text-sm mt-6 group/link">Learn More <svg class="w-4 h-4 transition-transform duration-300 group-hover/link:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg></a>
            </div>
            <div class="card hover-tilt reveal" data-delay="500">
                <div class="card-icon">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-navy mb-3">Digital Transformation</h3>
                <p class="text-medium-text text-sm leading-relaxed">Roadmap creation and execution for modernizing your technology.</p>
                <a href="#it-consulting" class="inline-flex items-center gap-2 text-sky font-semibold text-sm mt-6 group/link">Learn More <svg class="w-4 h-4 transition-transform duration-300 group-hover/link:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg></a>
            </div>
        </div>
    </div>
</section>

<!-- ===== DATA & ANALYTICS DETAIL ===== -->
<section id="data-analytics" class="section-spacing bg-light-gray relative overflow-hidden">
    <div class="container-grid relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="reveal-left">
                <span class="section-label">Data &amp; Analytics</span>
                <h2 class="section-title">Data &amp; Analytics</h2>
                <p class="text-medium-text text-lg mb-8">We build robust data solutions that enable organizations to gain real-time insights and make informed decisions.</p>
                <div class="space-y-4 mb-8">
                    <div class="flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm hover:shadow-md transition-all duration-300">
                        <div class="w-10 h-10 rounded-xl bg-sky/10 flex items-center justify-center shrink-0"><svg class="w-5 h-5 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg></div>
                        <div><span class="font-semibold text-navy text-sm">Power BI and Tableau Dashboards</span>
                            <p class="text-medium-text text-xs">Interactive dashboards and real-time analytics</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm hover:shadow-md transition-all duration-300">
                        <div class="w-10 h-10 rounded-xl bg-sky/10 flex items-center justify-center shrink-0"><svg class="w-5 h-5 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg></div>
                        <div><span class="font-semibold text-navy text-sm">Data Modeling and Warehousing</span>
                            <p class="text-medium-text text-xs">Scalable data models and modern data warehouses</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm hover:shadow-md transition-all duration-300">
                        <div class="w-10 h-10 rounded-xl bg-sky/10 flex items-center justify-center shrink-0"><svg class="w-5 h-5 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg></div>
                        <div><span class="font-semibold text-navy text-sm">KPI Development and Reporting</span>
                            <p class="text-medium-text text-xs">Custom KPI tracking and automated reporting</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm hover:shadow-md transition-all duration-300">
                        <div class="w-10 h-10 rounded-xl bg-sky/10 flex items-center justify-center shrink-0"><svg class="w-5 h-5 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg></div>
                        <div><span class="font-semibold text-navy text-sm">Data Integration and Transformation</span>
                            <p class="text-medium-text text-xs">End-to-end data pipelines and ETL/ELT solutions</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="reveal-right hidden lg:block">
                <div class="bg-gradient-to-br from-navy to-navy-light rounded-[2rem] p-6 shadow-2xl relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-sky/20 rounded-full blur-2xl"></div>
                    <div class="relative z-10">
                        <p class="text-white/60 text-xs uppercase tracking-[2px] mb-4">Client Dashboard Samples</p>
                        <div class="space-y-4">
                            <div class="rounded-xl overflow-hidden border border-white/10 shadow-lg">
                                <img src="images/AD_images/tableau_dashboards_images/TAB_Financial_Performance.png" alt="Tableau financial performance dashboard" class="w-full h-48 object-cover" loading="lazy">
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="rounded-xl overflow-hidden border border-white/10 shadow-lg">
                                    <img src="images/AD_images/power_bi_dashboard_images/POWER_BI_Health_AD.png" alt="Power BI health analytics dashboard" class="w-full h-32 object-cover" loading="lazy">
                                </div>
                                <div class="rounded-xl overflow-hidden border border-white/10 shadow-lg">
                                    <img src="images/AD_images/tableau_dashboards_images/TAB_Sales_Overview.png" alt="Tableau sales overview dashboard" class="w-full h-32 object-cover" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== AI & AUTOMATION DETAIL ===== -->
<section id="ai-automation" class="section-spacing bg-white relative overflow-hidden">
    <div class="container-grid relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="reveal-left hidden lg:block order-2 lg:order-1">
                <div class="bg-white rounded-[2rem] p-8 shadow-xl border border-gray-100">
                    <div class="space-y-4">
                        <div class="flex items-center gap-4 p-4 bg-light-gray rounded-xl">
                            <div class="w-10 h-10 rounded-xl bg-sky/10 flex items-center justify-center shrink-0"><svg class="w-5 h-5 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                </svg></div>
                            <div class="flex-1">
                                <p class="text-sm font-semibold text-navy">ML Model Training</p>
                                <p class="text-xs text-medium-text">Accuracy: 97.3%</p>
                            </div>
                            <span class="text-xs font-semibold text-green-600 bg-green-50 px-3 py-1 rounded-full">Complete</span>
                        </div>
                        <div class="flex items-center gap-4 p-4 bg-light-gray rounded-xl">
                            <div class="w-10 h-10 rounded-xl bg-sky/10 flex items-center justify-center shrink-0"><svg class="w-5 h-5 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                </svg></div>
                            <div class="flex-1">
                                <p class="text-sm font-semibold text-navy">Process Automation</p>
                                <p class="text-xs text-medium-text">12 workflows automated</p>
                            </div>
                            <span class="text-xs font-semibold text-sky bg-sky/10 px-3 py-1 rounded-full">Running</span>
                        </div>
                        <div class="flex items-center gap-4 p-4 bg-light-gray rounded-xl">
                            <div class="w-10 h-10 rounded-xl bg-sky/10 flex items-center justify-center shrink-0"><svg class="w-5 h-5 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg></div>
                            <div class="flex-1">
                                <p class="text-sm font-semibold text-navy">NLP Pipeline</p>
                                <p class="text-xs text-medium-text">Sentiment analysis active</p>
                            </div>
                            <span class="text-xs font-semibold text-green-600 bg-green-50 px-3 py-1 rounded-full">Live</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="reveal-right order-1 lg:order-2">
                <span class="section-label">AI &amp; Automation</span>
                <h2 class="section-title">AI &amp; Automation</h2>
                <p class="text-medium-text text-lg mb-8">We help businesses reduce manual processes and improve efficiency through automation and intelligent systems.</p>
                <div class="space-y-4 mb-8">
                    <div class="flex items-center gap-4 p-4 bg-light-gray rounded-xl hover:shadow-md transition-all duration-300">
                        <div class="w-10 h-10 rounded-xl bg-sky/10 flex items-center justify-center shrink-0"><svg class="w-5 h-5 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg></div>
                        <div><span class="font-semibold text-navy text-sm">Workflow Automation</span>
                            <p class="text-medium-text text-xs">Streamline business processes</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-light-gray rounded-xl hover:shadow-md transition-all duration-300">
                        <div class="w-10 h-10 rounded-xl bg-sky/10 flex items-center justify-center shrink-0"><svg class="w-5 h-5 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg></div>
                        <div><span class="font-semibold text-navy text-sm">Predictive Analytics</span>
                            <p class="text-medium-text text-xs">Forecast trends and decisions</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-light-gray rounded-xl hover:shadow-md transition-all duration-300">
                        <div class="w-10 h-10 rounded-xl bg-sky/10 flex items-center justify-center shrink-0"><svg class="w-5 h-5 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg></div>
                        <div><span class="font-semibold text-navy text-sm">Reporting Automation</span>
                            <p class="text-medium-text text-xs">Automated report generation</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-light-gray rounded-xl hover:shadow-md transition-all duration-300">
                        <div class="w-10 h-10 rounded-xl bg-sky/10 flex items-center justify-center shrink-0"><svg class="w-5 h-5 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg></div>
                        <div><span class="font-semibold text-navy text-sm">Process Optimization</span>
                            <p class="text-medium-text text-xs">Eliminate operational inefficiencies</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== IT CONSULTING DETAIL ===== -->
<section id="it-consulting" class="section-spacing bg-light-gray relative overflow-hidden">
    <div class="container-grid relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="reveal-left">
                <span class="section-label">IT Consulting</span>
                <h2 class="section-title">IT Consulting</h2>
                <p class="text-medium-text text-lg mb-8">We provide strategic guidance and technical expertise to help organizations modernize their technology landscape.</p>
                <div class="space-y-4 mb-8">
                    <div class="flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm hover:shadow-md transition-all duration-300">
                        <div class="w-10 h-10 rounded-xl bg-sky/10 flex items-center justify-center shrink-0"><svg class="w-5 h-5 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg></div>
                        <div><span class="font-semibold text-navy text-sm">Cloud Solutions (Azure, AWS, Snowflake)</span>
                            <p class="text-medium-text text-xs">Cloud migration and architecture design</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm hover:shadow-md transition-all duration-300">
                        <div class="w-10 h-10 rounded-xl bg-sky/10 flex items-center justify-center shrink-0"><svg class="w-5 h-5 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg></div>
                        <div><span class="font-semibold text-navy text-sm">Data Architecture and Governance</span>
                            <p class="text-medium-text text-xs">Scalable, secure data architectures</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm hover:shadow-md transition-all duration-300">
                        <div class="w-10 h-10 rounded-xl bg-sky/10 flex items-center justify-center shrink-0"><svg class="w-5 h-5 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg></div>
                        <div><span class="font-semibold text-navy text-sm">System Integration</span>
                            <p class="text-medium-text text-xs">Unify your technology ecosystem</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm hover:shadow-md transition-all duration-300">
                        <div class="w-10 h-10 rounded-xl bg-sky/10 flex items-center justify-center shrink-0"><svg class="w-5 h-5 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg></div>
                        <div><span class="font-semibold text-navy text-sm">Digital Transformation Strategies</span>
                            <p class="text-medium-text text-xs">Roadmap for modernization</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="reveal-right hidden lg:block">
                <div class="bg-white rounded-[2rem] p-8 shadow-xl border border-gray-100">
                    <div class="space-y-4">
                        <div class="bg-light-gray rounded-xl p-5">
                            <div class="flex items-center justify-between mb-3"><span class="text-sm font-semibold text-navy">Cloud Migration</span><span class="text-xs text-sky font-semibold">Phase 3/4</span></div>
                            <div class="progress-bar-track">
                                <div class="progress-bar-fill" style="--progress:75%"></div>
                            </div>
                        </div>
                        <div class="bg-light-gray rounded-xl p-5">
                            <div class="flex items-center justify-between mb-3"><span class="text-sm font-semibold text-navy">Security Audit</span><span class="text-xs text-green-600 font-semibold">Complete</span></div>
                            <div class="progress-bar-track">
                                <div class="progress-bar-fill" style="--progress:100%"></div>
                            </div>
                        </div>
                        <div class="bg-light-gray rounded-xl p-5">
                            <div class="flex items-center justify-between mb-3"><span class="text-sm font-semibold text-navy">Architecture Design</span><span class="text-xs text-sky font-semibold">In Progress</span></div>
                            <div class="progress-bar-track">
                                <div class="progress-bar-fill" style="--progress:60%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== CTA ===== -->
<section class="section-spacing bg-navy relative overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-sky/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3"></div>
    </div>
    <div class="container-grid relative z-10 text-center">
        <div class="max-w-3xl mx-auto reveal">
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-6 leading-tight">Need a Custom Solution For Your Business?</h2>
            <p class="text-white/50 text-lg mb-10">Let's discuss how our services can address your unique challenges and drive growth.</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="contact.php" class="btn-white">Start a Project <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg></a>
                <a href="case-studies.php" class="btn-outline-white">View Case Studies</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>