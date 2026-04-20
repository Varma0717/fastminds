<?php $page_title = 'Insights'; ?>
<?php include 'includes/header.php'; ?>

<!-- ===== PAGE HERO ===== -->
<section class="page-hero">
    <div class="absolute top-10 right-[15%] w-3 h-3 bg-sky rounded-full animate-float opacity-60"></div>
    <div class="container-grid relative z-10">
        <div class="max-w-2xl">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 bg-white/10 backdrop-blur-sm rounded-full text-sky text-xs font-semibold uppercase tracking-[3px] mb-6 border border-white/10 reveal">
                <span class="w-2 h-2 bg-sky rounded-full animate-pulse"></span>
                Insights
            </span>
            <h1 class="text-white mb-5 reveal" data-delay="100">Industry <span class="text-gradient">Insights</span></h1>
            <p class="text-white/50 text-lg leading-relaxed reveal" data-delay="200">Expert perspectives on data, technology, and digital transformation.</p>
            <div class="flex items-center gap-3 mt-6 text-white/30 text-sm reveal" data-delay="300">
                <a href="index.php" class="hover:text-sky transition-colors">Home</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                <span class="text-sky">Insights</span>
            </div>
        </div>
    </div>
</section>

<!-- ===== BLOG CARDS ===== -->
<section class="section-spacing bg-white relative overflow-hidden">
    <div class="absolute top-0 right-0 w-72 h-72 bg-sky/5 rounded-full blur-3xl"></div>
    <div class="container-grid relative z-10">
        <div class="text-center mb-14 reveal">
            <span class="section-label">Latest Articles</span>
            <h2 class="section-title">Expert Insights &amp; Resources</h2>
            <p class="section-subtitle mx-auto">Stay ahead with the latest trends and strategies in data, technology, and business intelligence.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Blog Card 1 -->
            <div class="blog-card reveal" data-delay="0">
                <div class="bg-gradient-to-br from-navy to-navy-light h-56 flex items-center justify-center rounded-t-2xl overflow-hidden">
                    <div class="text-center px-6">
                        <div class="w-14 h-14 rounded-2xl bg-white/10 flex items-center justify-center mx-auto mb-4"><svg class="w-7 h-7 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg></div>
                        <span class="text-white/40 text-xs uppercase tracking-wider">Healthcare</span>
                    </div>
                </div>
                <div class="p-7">
                    <div class="flex items-center gap-4 mb-4">
                        <span class="text-xs text-sky font-semibold bg-sky/10 px-3 py-1 rounded-full">Healthcare</span>
                        <span class="text-xs text-medium-text">5 min read</span>
                    </div>
                    <h3 class="text-lg font-bold text-navy mb-3 leading-snug">Top KPIs Every Healthcare Organization Should Track</h3>
                    <p class="text-medium-text text-sm leading-relaxed mb-4">Discover the most critical KPIs that help healthcare organizations improve patient outcomes and operational efficiency.</p>
                    <a href="#" class="inline-flex items-center gap-2 text-sky font-semibold text-sm group/link">
                        Read Article
                        <svg class="w-4 h-4 transition-transform duration-300 group-hover/link:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>
            <!-- Blog Card 2 -->
            <div class="blog-card reveal" data-delay="100">
                <div class="bg-gradient-to-br from-sky-dark to-sky h-56 flex items-center justify-center rounded-t-2xl overflow-hidden">
                    <div class="text-center px-6">
                        <div class="w-14 h-14 rounded-2xl bg-white/10 flex items-center justify-center mx-auto mb-4"><svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg></div>
                        <span class="text-white/60 text-xs uppercase tracking-wider">Analytics</span>
                    </div>
                </div>
                <div class="p-7">
                    <div class="flex items-center gap-4 mb-4">
                        <span class="text-xs text-sky font-semibold bg-sky/10 px-3 py-1 rounded-full">Analytics</span>
                        <span class="text-xs text-medium-text">7 min read</span>
                    </div>
                    <h3 class="text-lg font-bold text-navy mb-3 leading-snug">Power BI vs Tableau: Choosing the Right Tool</h3>
                    <p class="text-medium-text text-sm leading-relaxed mb-4">An in-depth comparison to help you select the best analytics platform for your organization's specific needs.</p>
                    <a href="#" class="inline-flex items-center gap-2 text-sky font-semibold text-sm group/link">
                        Read Article
                        <svg class="w-4 h-4 transition-transform duration-300 group-hover/link:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>
            <!-- Blog Card 3 -->
            <div class="blog-card reveal" data-delay="200">
                <div class="bg-gradient-to-br from-navy-light to-navy h-56 flex items-center justify-center rounded-t-2xl overflow-hidden">
                    <div class="text-center px-6">
                        <div class="w-14 h-14 rounded-2xl bg-white/10 flex items-center justify-center mx-auto mb-4"><svg class="w-7 h-7 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg></div>
                        <span class="text-white/40 text-xs uppercase tracking-wider">AI</span>
                    </div>
                </div>
                <div class="p-7">
                    <div class="flex items-center gap-4 mb-4">
                        <span class="text-xs text-sky font-semibold bg-sky/10 px-3 py-1 rounded-full">AI</span>
                        <span class="text-xs text-medium-text">6 min read</span>
                    </div>
                    <h3 class="text-lg font-bold text-navy mb-3 leading-snug">The Role of AI in Modern Business</h3>
                    <p class="text-medium-text text-sm leading-relaxed mb-4">Explore how artificial intelligence is reshaping business operations from automation to advanced analytics.</p>
                    <a href="#" class="inline-flex items-center gap-2 text-sky font-semibold text-sm group/link">
                        Read Article
                        <svg class="w-4 h-4 transition-transform duration-300 group-hover/link:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
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
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-6 leading-tight">Want to Learn More About Our Solutions?</h2>
            <p class="text-white/50 text-lg mb-10">Subscribe to our insights or get in touch with our experts.</p>
            <a href="contact.php" class="btn-white">Contact Us <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg></a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>