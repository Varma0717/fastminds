<?php $page_title = 'IT Staffing'; ?>
<?php include 'includes/header.php'; ?>

<!-- ===== PAGE HERO ===== -->
<section class="section-spacing bg-gradient-to-br from-navy to-navy-light relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 right-0 w-96 h-96 bg-sky rounded-full blur-3xl -translate-y-1/2 translate-x-1/3"></div>
    </div>
    <div class="container-grid relative z-10">
        <div class="max-w-2xl reveal">
            <span class="text-sky font-semibold text-sm uppercase tracking-widest mb-3 block">IT Staffing</span>
            <h1 class="text-white mb-6">Top-Tier <span class="text-sky">IT Talent</span> On Demand</h1>
            <p class="text-white/60 text-lg leading-relaxed">Access pre-vetted, highly skilled technology professionals across data, cloud, AI, and enterprise IT — exactly when you need them.</p>
            <div class="mt-8">
                <a href="contact.php" class="btn-white">Hire Talent Now</a>
            </div>
        </div>
    </div>
</section>

<!-- ===== TALENT LIST ===== -->
<section class="section-spacing bg-white">
    <div class="container-grid">
        <div class="text-center mb-14 reveal">
            <span class="section-label">Our Talent Pool</span>
            <h2 class="section-title">Specialists Across Every Domain</h2>
            <p class="section-subtitle mx-auto">We provide experts in the most in-demand technology roles.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            $roles = [
                ['Data Engineers', 'Build and maintain data pipelines, ETL processes, and data infrastructure.', 'M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4'],
                ['Data Scientists', 'Apply statistical methods and ML to extract insights from complex datasets.', 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z'],
                ['Cloud Architects', 'Design and implement scalable cloud solutions on AWS, Azure, and GCP.', 'M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z'],
                ['Full Stack Developers', 'End-to-end application development with modern frameworks and technologies.', 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4'],
                ['DevOps Engineers', 'CI/CD pipelines, infrastructure automation, and reliability engineering.', 'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15'],
                ['Business Analysts', 'Bridge technology and business with requirements analysis and process design.', 'M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z'],
                ['AI/ML Engineers', 'Build and deploy machine learning models and AI-powered applications.', 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'],
                ['Project Managers', 'Lead technical projects with agile methodology and stakeholder management.', 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4'],
                ['QA Engineers', 'Automated testing, performance testing, and quality assurance processes.', 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z'],
            ];
            foreach ($roles as $index => $role): ?>
                <div class="card reveal" style="transition-delay: <?php echo ($index % 3) * 0.1; ?>s;">
                    <div class="card-icon">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="<?php echo $role[2]; ?>" />
                        </svg>
                    </div>
                    <h4 class="font-bold text-navy mb-2"><?php echo $role[0]; ?></h4>
                    <p class="text-medium-text text-sm"><?php echo $role[1]; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ===== HIRING MODELS ===== -->
<section class="section-spacing bg-light-gray">
    <div class="container-grid">
        <div class="text-center mb-14 reveal">
            <span class="section-label">Flexible Engagement</span>
            <h2 class="section-title">Hiring Models That Fit Your Needs</h2>
            <p class="section-subtitle mx-auto">Choose the engagement model that works best for your project and budget.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="card reveal text-center !p-10" style="transition-delay: 0.1s;">
                <div class="card-icon mx-auto !w-16 !h-16 !rounded-2xl !mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-navy mb-3">Contract Staffing</h3>
                <p class="text-medium-text text-sm">Short to long-term contract placements with flexible terms. Scale up or down as your project demands.</p>
            </div>
            <div class="card reveal text-center !p-10 border-2 !border-sky relative" style="transition-delay: 0.2s;">
                <div class="absolute -top-3 left-1/2 -translate-x-1/2">
                    <span class="bg-sky text-white text-xs font-semibold px-4 py-1 rounded-full">Popular</span>
                </div>
                <div class="card-icon mx-auto !w-16 !h-16 !rounded-2xl !mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-navy mb-3">Contract-to-Hire</h3>
                <p class="text-medium-text text-sm">Try before you commit. Evaluate talent on the job before converting to a full-time position.</p>
            </div>
            <div class="card reveal text-center !p-10" style="transition-delay: 0.3s;">
                <div class="card-icon mx-auto !w-16 !h-16 !rounded-2xl !mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-navy mb-3">Direct Placement</h3>
                <p class="text-medium-text text-sm">Full-time permanent placements for critical roles. We find the perfect fit for your team culture.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== PROCESS STEPS ===== -->
<section class="section-spacing bg-white">
    <div class="container-grid">
        <div class="text-center mb-14 reveal">
            <span class="section-label">Our Process</span>
            <h2 class="section-title">How It Works</h2>
            <p class="section-subtitle mx-auto">A streamlined 4-step process to get you the right talent, fast.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Step 1 -->
            <div class="text-center reveal" style="transition-delay: 0.1s;">
                <div class="relative mb-6">
                    <div class="w-16 h-16 rounded-2xl bg-sky text-white flex items-center justify-center text-2xl font-bold mx-auto">1</div>
                    <div class="hidden md:block absolute top-1/2 left-[calc(50%+40px)] w-[calc(100%-80px)] h-0.5 bg-gray-200"></div>
                </div>
                <h4 class="font-bold text-navy mb-2">Share Requirements</h4>
                <p class="text-medium-text text-sm">Tell us about your project needs, required skills, and timeline.</p>
            </div>
            <!-- Step 2 -->
            <div class="text-center reveal" style="transition-delay: 0.2s;">
                <div class="relative mb-6">
                    <div class="w-16 h-16 rounded-2xl bg-sky text-white flex items-center justify-center text-2xl font-bold mx-auto">2</div>
                    <div class="hidden md:block absolute top-1/2 left-[calc(50%+40px)] w-[calc(100%-80px)] h-0.5 bg-gray-200"></div>
                </div>
                <h4 class="font-bold text-navy mb-2">Talent Matching</h4>
                <p class="text-medium-text text-sm">We match you with pre-vetted candidates from our talent pool within 48 hours.</p>
            </div>
            <!-- Step 3 -->
            <div class="text-center reveal" style="transition-delay: 0.3s;">
                <div class="relative mb-6">
                    <div class="w-16 h-16 rounded-2xl bg-sky text-white flex items-center justify-center text-2xl font-bold mx-auto">3</div>
                    <div class="hidden md:block absolute top-1/2 left-[calc(50%+40px)] w-[calc(100%-80px)] h-0.5 bg-gray-200"></div>
                </div>
                <h4 class="font-bold text-navy mb-2">Interview & Select</h4>
                <p class="text-medium-text text-sm">Review profiles, conduct interviews, and choose the best fit for your team.</p>
            </div>
            <!-- Step 4 -->
            <div class="text-center reveal" style="transition-delay: 0.4s;">
                <div class="mb-6">
                    <div class="w-16 h-16 rounded-2xl bg-sky text-white flex items-center justify-center text-2xl font-bold mx-auto">4</div>
                </div>
                <h4 class="font-bold text-navy mb-2">Onboard & Deliver</h4>
                <p class="text-medium-text text-sm">Seamless onboarding with ongoing support to ensure project success.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== CTA ===== -->
<section class="section-spacing bg-navy relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 right-0 w-96 h-96 bg-sky rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-sky rounded-full blur-3xl translate-y-1/2 -translate-x-1/2"></div>
    </div>
    <div class="container-grid relative z-10 text-center">
        <div class="max-w-2xl mx-auto reveal">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-5">Ready to build your dream team?</h2>
            <p class="text-white/60 text-lg mb-8">Get access to top-tier IT talent within 48 hours. No long-term commitments required.</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="contact.php" class="btn-white">Hire Talent Now</a>
                <a href="contact.php" class="btn-outline-white">Schedule a Call</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>