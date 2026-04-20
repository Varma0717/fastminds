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
            <h1 class="text-white mb-6">IT Staffing & <span class="text-sky">Talent Solutions</span></h1>
            <p class="text-white/60 text-lg leading-relaxed">FASTMINDS provides highly skilled IT professionals to help organizations build and scale their teams efficiently.</p>
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
            <span class="section-label">Talent We Provide</span>
            <h2 class="section-title">Specialists Across Every Domain</h2>
            <p class="section-subtitle mx-auto">We provide experts in the most in-demand technology roles.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            $roles = [
                ['Data Analysts', 'Analyze data to deliver actionable insights and support business decision-making.', 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z'],
                ['BI Developers', 'Build interactive dashboards and reporting solutions using Power BI, Tableau, and more.', 'M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z'],
                ['Data Engineers', 'Build and maintain data pipelines, ETL processes, and data infrastructure.', 'M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4'],
                ['SQL Developers', 'Design and optimize databases, write complex queries, and manage data storage.', 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4'],
                ['Cloud Engineers', 'Design and implement scalable cloud solutions on AWS, Azure, and GCP.', 'M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z'],
                ['AI / Machine Learning Engineers', 'Build and deploy machine learning models and AI-powered applications.', 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'],
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
            <span class="section-label">Engagement Models</span>
            <h2 class="section-title">Flexible Hiring Models</h2>
            <p class="section-subtitle mx-auto">We offer flexible hiring models to meet your business needs.</p>
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
            <h2 class="section-title">Our Process</h2>
            <p class="section-subtitle mx-auto">A streamlined 4-step process to get you the right talent, fast.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Step 1 -->
            <div class="text-center reveal" style="transition-delay: 0.1s;">
                <div class="relative mb-6">
                    <div class="w-16 h-16 rounded-2xl bg-sky text-white flex items-center justify-center text-2xl font-bold mx-auto">1</div>
                    <div class="hidden md:block absolute top-1/2 left-[calc(50%+40px)] w-[calc(100%-80px)] h-0.5 bg-gray-200"></div>
                </div>
                <h4 class="font-bold text-navy mb-2">Understand Requirements</h4>
                <p class="text-medium-text text-sm">Tell us about your project needs, required skills, and timeline.</p>
            </div>
            <!-- Step 2 -->
            <div class="text-center reveal" style="transition-delay: 0.2s;">
                <div class="relative mb-6">
                    <div class="w-16 h-16 rounded-2xl bg-sky text-white flex items-center justify-center text-2xl font-bold mx-auto">2</div>
                    <div class="hidden md:block absolute top-1/2 left-[calc(50%+40px)] w-[calc(100%-80px)] h-0.5 bg-gray-200"></div>
                </div>
                <h4 class="font-bold text-navy mb-2">Screen Candidates</h4>
                <p class="text-medium-text text-sm">We identify and screen top candidates from our talent pool.</p>
            </div>
            <!-- Step 3 -->
            <div class="text-center reveal" style="transition-delay: 0.3s;">
                <div class="relative mb-6">
                    <div class="w-16 h-16 rounded-2xl bg-sky text-white flex items-center justify-center text-2xl font-bold mx-auto">3</div>
                    <div class="hidden md:block absolute top-1/2 left-[calc(50%+40px)] w-[calc(100%-80px)] h-0.5 bg-gray-200"></div>
                </div>
                <h4 class="font-bold text-navy mb-2">Facilitate Interviews</h4>
                <p class="text-medium-text text-sm">Review profiles, conduct interviews, and choose the best fit for your team.</p>
            </div>
            <!-- Step 4 -->
            <div class="text-center reveal" style="transition-delay: 0.4s;">
                <div class="mb-6">
                    <div class="w-16 h-16 rounded-2xl bg-sky text-white flex items-center justify-center text-2xl font-bold mx-auto">4</div>
                </div>
                <h4 class="font-bold text-navy mb-2">Smooth Onboarding</h4>
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
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-5">Request Talent Today</h2>
            <p class="text-white/60 text-lg mb-8">Get access to pre-qualified talent with faster hiring turnaround, industry-specific expertise, and flexible, scalable staffing solutions.</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="contact.php" class="btn-white">Hire Talent Now</a>
                <a href="contact.php" class="btn-outline-white">Schedule a Call</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>