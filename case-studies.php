<?php $page_title = 'Case Studies'; ?>
<?php include 'includes/header.php'; ?>

<!-- ===== PAGE HERO ===== -->
<section class="page-hero" style="background-image: url('images/representation-user-experience-interface-design-computer.jpg')">
    <div class="absolute top-10 right-[15%] w-3 h-3 bg-sky rounded-full animate-float opacity-60"></div>
    <div class="container-grid relative z-10">
        <div class="max-w-2xl">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 bg-white/10 backdrop-blur-sm rounded-full text-sky text-xs font-semibold uppercase tracking-[3px] mb-6 border border-white/10 reveal">
                <span class="w-2 h-2 bg-sky rounded-full animate-pulse"></span>
                Case Studies
            </span>
            <h1 class="text-white mb-5 reveal" data-delay="100">Our <span class="text-gradient">Case Studies</span></h1>
            <p class="text-white/50 text-lg leading-relaxed reveal" data-delay="200">See how FASTMINDS has helped organizations achieve measurable results through data and technology.</p>
            <div class="flex items-center gap-3 mt-6 text-white/30 text-sm reveal" data-delay="300">
                <a href="index.php" class="hover:text-sky transition-colors">Home</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                <span class="text-sky">Case Studies</span>
            </div>
        </div>
    </div>
</section>

<!-- ===== PORTFOLIO CARDS ===== -->
<section class="section-spacing bg-white relative overflow-hidden">
    <div class="container-grid">
        <div class="text-center mb-14 reveal">
            <span class="section-label">Our Work</span>
            <h2 class="section-title">Explore Our Recent Projects</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="portfolio-card reveal" data-delay="0">
                <div class="bg-gradient-to-br from-navy to-navy-light h-64 flex items-center justify-center rounded-2xl">
                    <div class="text-center px-6">
                        <div class="w-16 h-16 rounded-2xl bg-white/10 flex items-center justify-center mx-auto mb-4"><svg class="w-8 h-8 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg></div>
                        <p class="text-white font-semibold">Healthcare Analytics</p>
                        <p class="text-white/40 text-sm">Reporting Transformation</p>
                    </div>
                </div>
                <div class="portfolio-overlay">
                    <span class="text-sky text-xs font-semibold uppercase tracking-wider mb-2">Healthcare</span>
                    <h4 class="text-white font-bold text-lg">Reduced Reporting Time by 40%</h4>
                    <p class="text-white/60 text-sm mt-2">Automated dashboards and real-time analytics for a major health network</p>
                </div>
            </div>
            <div class="portfolio-card reveal" data-delay="100">
                <div class="bg-gradient-to-br from-sky-dark to-sky h-64 flex items-center justify-center rounded-2xl">
                    <div class="text-center px-6">
                        <div class="w-16 h-16 rounded-2xl bg-white/10 flex items-center justify-center mx-auto mb-4"><svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg></div>
                        <p class="text-white font-semibold">Enterprise BI</p>
                        <p class="text-white/60 text-sm">Banking &amp; Finance</p>
                    </div>
                </div>
                <div class="portfolio-overlay">
                    <span class="text-sky text-xs font-semibold uppercase tracking-wider mb-2">Banking &amp; Finance</span>
                    <h4 class="text-white font-bold text-lg">Enterprise BI Platform</h4>
                    <p class="text-white/60 text-sm mt-2">Centralized reporting with 99.9% accuracy across 50+ branches</p>
                </div>
            </div>
            <div class="portfolio-card reveal" data-delay="200">
                <div class="bg-gradient-to-br from-navy-light to-navy h-64 flex items-center justify-center rounded-2xl">
                    <div class="text-center px-6">
                        <div class="w-16 h-16 rounded-2xl bg-white/10 flex items-center justify-center mx-auto mb-4"><svg class="w-8 h-8 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg></div>
                        <p class="text-white font-semibold">Demand Forecasting</p>
                        <p class="text-white/40 text-sm">Retail AI Solution</p>
                    </div>
                </div>
                <div class="portfolio-overlay">
                    <span class="text-sky text-xs font-semibold uppercase tracking-wider mb-2">Retail</span>
                    <h4 class="text-white font-bold text-lg">AI-Powered Demand Forecasting</h4>
                    <p class="text-white/60 text-sm mt-2">Reduced overstock by 35% across 200+ stores</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== FEATURED CASE STUDY ===== -->
<section class="section-spacing bg-light-gray relative overflow-hidden">
    <div class="container-grid relative z-10">
        <div class="text-center mb-14 reveal">
            <span class="section-label">Featured Project</span>
            <h2 class="section-title">Healthcare Analytics Transformation</h2>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="reveal-left">
                <h3 class="text-2xl font-bold text-navy mb-6">The Challenge</h3>
                <p class="text-medium-text leading-relaxed mb-6">A major healthcare network was relying on manual, spreadsheet-based reporting that was time-consuming, error-prone, and lacked real-time visibility into operational and clinical KPIs.</p>
                <h3 class="text-2xl font-bold text-navy mb-6">Our Solution</h3>
                <p class="text-medium-text leading-relaxed mb-6">We implemented an automated analytics platform with real-time dashboards, predictive models for patient outcomes, and automated compliance reporting.</p>
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-6 h-6 rounded-full bg-sky/10 flex items-center justify-center shrink-0"><svg class="w-3.5 h-3.5 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg></div><span class="text-navy font-medium text-sm">Built Power BI dashboards for 12 departments</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-6 h-6 rounded-full bg-sky/10 flex items-center justify-center shrink-0"><svg class="w-3.5 h-3.5 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg></div><span class="text-navy font-medium text-sm">Designed HIPAA-compliant data warehouse</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-6 h-6 rounded-full bg-sky/10 flex items-center justify-center shrink-0"><svg class="w-3.5 h-3.5 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg></div><span class="text-navy font-medium text-sm">Automated daily operational reports</span>
                    </div>
                </div>
            </div>
            <div class="reveal-right">
                <div class="bg-white rounded-[2rem] p-8 shadow-xl border border-gray-100">
                    <h3 class="text-xl font-bold text-navy mb-6 text-center">Results</h3>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="text-center p-6 bg-light-gray rounded-2xl">
                            <div class="text-4xl font-bold text-sky mb-2" data-counter data-target="40" data-suffix="%">0%</div>
                            <p class="text-medium-text text-sm">Faster Reporting</p>
                        </div>
                        <div class="text-center p-6 bg-light-gray rounded-2xl">
                            <div class="text-4xl font-bold text-sky mb-2" data-counter data-target="12">0</div>
                            <p class="text-medium-text text-sm">Departments Served</p>
                        </div>
                        <div class="text-center p-6 bg-light-gray rounded-2xl">
                            <div class="text-4xl font-bold text-sky mb-2" data-counter data-target="100" data-suffix="%">0%</div>
                            <p class="text-medium-text text-sm">Automated Reports</p>
                        </div>
                        <div class="text-center p-6 bg-light-gray rounded-2xl">
                            <div class="text-4xl font-bold text-sky mb-2" data-counter data-target="24" data-suffix="/7">0</div>
                            <p class="text-medium-text text-sm">Data Availability</p>
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
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-6 leading-tight">Ready to Transform Your Organization?</h2>
            <p class="text-white/50 text-lg mb-10">Let's discuss how we can deliver similar results for your business.</p>
            <a href="contact.php" class="btn-white">Start a Conversation <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg></a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>