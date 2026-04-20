<?php $page_title = 'Insights'; ?>
<?php include 'includes/header.php'; ?>

<!-- ===== PAGE HERO ===== -->
<section class="section-spacing bg-gradient-to-br from-navy to-navy-light relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 right-0 w-96 h-96 bg-sky rounded-full blur-3xl -translate-y-1/2 translate-x-1/3"></div>
    </div>
    <div class="container-grid relative z-10">
        <div class="max-w-2xl reveal">
            <span class="text-sky font-semibold text-sm uppercase tracking-widest mb-3 block">Insights</span>
            <h1 class="text-white mb-6">Perspectives on <span class="text-sky">Technology & Innovation</span></h1>
            <p class="text-white/60 text-lg leading-relaxed">Stay ahead with expert insights on data analytics, AI, cloud computing, and the future of enterprise technology.</p>
        </div>
    </div>
</section>

<!-- ===== FEATURED POST ===== -->
<section class="section-spacing bg-white">
    <div class="container-grid">
        <div class="card reveal !p-0 overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div class="bg-gradient-to-br from-sky/10 to-sky/5 p-10 lg:p-14 flex items-center">
                    <div class="text-center lg:text-left w-full">
                        <div class="w-20 h-20 rounded-2xl bg-sky/10 flex items-center justify-center mb-6 mx-auto lg:mx-0">
                            <svg class="w-10 h-10 text-sky" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                        </div>
                        <span class="text-sky text-xs font-semibold uppercase tracking-widest">Featured</span>
                    </div>
                </div>
                <div class="p-8 lg:p-14">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="bg-sky/10 text-sky text-xs font-semibold px-3 py-1 rounded-full">AI & Automation</span>
                        <span class="text-medium-text text-xs">April 15, 2026</span>
                    </div>
                    <h2 class="text-2xl font-bold text-navy mb-4">The Future of Enterprise AI: Trends Shaping 2026 and Beyond</h2>
                    <p class="text-medium-text leading-relaxed mb-6">Explore how generative AI, autonomous agents, and intelligent automation are reshaping enterprise operations and creating new opportunities for growth.</p>
                    <a href="#" class="inline-flex items-center gap-2 text-sky font-semibold text-sm hover:gap-3 transition-all duration-300">
                        Read Article
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== BLOG GRID ===== -->
<section class="pb-section bg-white">
    <div class="container-grid">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Post 1 -->
            <article class="card reveal !p-0 overflow-hidden" style="transition-delay: 0.1s;">
                <div class="bg-gradient-to-br from-navy/5 to-sky/5 h-48 flex items-center justify-center">
                    <svg class="w-16 h-16 text-sky/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-3 mb-3">
                        <span class="bg-sky/10 text-sky text-xs font-semibold px-3 py-1 rounded-full">Data Analytics</span>
                        <span class="text-medium-text text-xs">April 10, 2026</span>
                    </div>
                    <h3 class="text-lg font-bold text-navy mb-3">5 Signs Your Data Strategy Needs a Complete Overhaul</h3>
                    <p class="text-medium-text text-sm mb-4">If your data is siloed, reports take days, and nobody trusts the numbers — it's time for a reset.</p>
                    <a href="#" class="inline-flex items-center gap-2 text-sky font-semibold text-sm hover:gap-3 transition-all duration-300">
                        Read more
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Post 2 -->
            <article class="card reveal !p-0 overflow-hidden" style="transition-delay: 0.2s;">
                <div class="bg-gradient-to-br from-navy/5 to-sky/5 h-48 flex items-center justify-center">
                    <svg class="w-16 h-16 text-sky/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                    </svg>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-3 mb-3">
                        <span class="bg-sky/10 text-sky text-xs font-semibold px-3 py-1 rounded-full">Cloud</span>
                        <span class="text-medium-text text-xs">April 5, 2026</span>
                    </div>
                    <h3 class="text-lg font-bold text-navy mb-3">Cloud Migration: Lessons Learned from 50+ Enterprise Projects</h3>
                    <p class="text-medium-text text-sm mb-4">The biggest pitfalls and best practices we've discovered helping enterprises move to the cloud.</p>
                    <a href="#" class="inline-flex items-center gap-2 text-sky font-semibold text-sm hover:gap-3 transition-all duration-300">
                        Read more
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Post 3 -->
            <article class="card reveal !p-0 overflow-hidden" style="transition-delay: 0.3s;">
                <div class="bg-gradient-to-br from-navy/5 to-sky/5 h-48 flex items-center justify-center">
                    <svg class="w-16 h-16 text-sky/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-3 mb-3">
                        <span class="bg-sky/10 text-sky text-xs font-semibold px-3 py-1 rounded-full">Staffing</span>
                        <span class="text-medium-text text-xs">March 28, 2026</span>
                    </div>
                    <h3 class="text-lg font-bold text-navy mb-3">The IT Talent Shortage: How to Build Teams That Scale</h3>
                    <p class="text-medium-text text-sm mb-4">Practical strategies for attracting and retaining top technology talent in a competitive market.</p>
                    <a href="#" class="inline-flex items-center gap-2 text-sky font-semibold text-sm hover:gap-3 transition-all duration-300">
                        Read more
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Post 4 -->
            <article class="card reveal !p-0 overflow-hidden" style="transition-delay: 0.1s;">
                <div class="bg-gradient-to-br from-navy/5 to-sky/5 h-48 flex items-center justify-center">
                    <svg class="w-16 h-16 text-sky/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-3 mb-3">
                        <span class="bg-sky/10 text-sky text-xs font-semibold px-3 py-1 rounded-full">Security</span>
                        <span class="text-medium-text text-xs">March 20, 2026</span>
                    </div>
                    <h3 class="text-lg font-bold text-navy mb-3">Data Governance in 2026: A Framework for Enterprise Success</h3>
                    <p class="text-medium-text text-sm mb-4">How to build a data governance framework that balances security, compliance, and accessibility.</p>
                    <a href="#" class="inline-flex items-center gap-2 text-sky font-semibold text-sm hover:gap-3 transition-all duration-300">
                        Read more
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Post 5 -->
            <article class="card reveal !p-0 overflow-hidden" style="transition-delay: 0.2s;">
                <div class="bg-gradient-to-br from-navy/5 to-sky/5 h-48 flex items-center justify-center">
                    <svg class="w-16 h-16 text-sky/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-3 mb-3">
                        <span class="bg-sky/10 text-sky text-xs font-semibold px-3 py-1 rounded-full">Healthcare</span>
                        <span class="text-medium-text text-xs">March 12, 2026</span>
                    </div>
                    <h3 class="text-lg font-bold text-navy mb-3">How AI is Revolutionizing Healthcare Data Analytics</h3>
                    <p class="text-medium-text text-sm mb-4">From predictive patient outcomes to operational efficiency — AI is transforming healthcare analytics.</p>
                    <a href="#" class="inline-flex items-center gap-2 text-sky font-semibold text-sm hover:gap-3 transition-all duration-300">
                        Read more
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Post 6 -->
            <article class="card reveal !p-0 overflow-hidden" style="transition-delay: 0.3s;">
                <div class="bg-gradient-to-br from-navy/5 to-sky/5 h-48 flex items-center justify-center">
                    <svg class="w-16 h-16 text-sky/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-3 mb-3">
                        <span class="bg-sky/10 text-sky text-xs font-semibold px-3 py-1 rounded-full">Innovation</span>
                        <span class="text-medium-text text-xs">March 5, 2026</span>
                    </div>
                    <h3 class="text-lg font-bold text-navy mb-3">Digital Transformation: Why Most Initiatives Fail (And How to Succeed)</h3>
                    <p class="text-medium-text text-sm mb-4">70% of digital transformation projects fail. Here's what successful organizations do differently.</p>
                    <a href="#" class="inline-flex items-center gap-2 text-sky font-semibold text-sm hover:gap-3 transition-all duration-300">
                        Read more
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- ===== NEWSLETTER CTA ===== -->
<section class="section-spacing bg-light-gray">
    <div class="container-grid">
        <div class="max-w-2xl mx-auto text-center reveal">
            <span class="section-label">Stay Updated</span>
            <h2 class="section-title">Subscribe to Our Newsletter</h2>
            <p class="section-subtitle mx-auto mb-8">Get the latest insights on data, AI, and IT strategy delivered to your inbox monthly.</p>
            <form class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto" onsubmit="return false;">
                <label for="newsletter-email" class="sr-only">Email address</label>
                <input type="email" id="newsletter-email" placeholder="Enter your email" class="flex-1 px-5 py-3.5 rounded-lg border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-sky focus:border-transparent" required>
                <button type="submit" class="btn-primary !px-6">Subscribe</button>
            </form>
            <p class="text-xs text-medium-text mt-3">No spam. Unsubscribe anytime.</p>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>