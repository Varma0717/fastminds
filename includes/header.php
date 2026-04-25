<?php
$current_page = basename($_SERVER['PHP_SELF'], '.php');

// ── SEO: Use production domain for canonical and social URLs ────────────
$_site_url  = 'https://fastmindsit.com';
$_base_url  = $_site_url;
$_canonical = rtrim($_site_url, '/') . '/' . ($current_page === 'index' ? '' : $current_page . '.php');
$_og_image  = rtrim($_site_url, '/') . '/images/og-image.svg';

// ── Per-page SEO defaults (pages can override with $page_description) ────
$_seo_map = [
    'index'                          => ['title' => 'FASTMINDS &#8212; IT Consulting, Data Analytics &amp; IT Staffing',   'desc' => 'FASTMINDS is a premier IT consulting firm delivering data analytics, AI automation, cloud solutions, IT staffing, and digital transformation for modern enterprises.'],
    'about'                          => ['title' => 'About Us | FASTMINDS',                                                  'desc' => 'Learn about FASTMINDS &#8212; our mission, values, and the expert team behind our IT consulting, data analytics, and staffing services in Charlotte, NC.'],
    'services'                       => ['title' => 'IT Services | FASTMINDS',                                               'desc' => 'Explore FASTMINDS end-to-end IT services: Data &amp; Analytics, AI &amp; Automation, IT Consulting, Cloud Solutions, and Digital Transformation.'],
    'staffing'                       => ['title' => 'IT Staffing &amp; Talent Solutions | FASTMINDS',                        'desc' => 'FASTMINDS places OPT, H1B, Green Card, and US Citizen IT professionals on contract, contract-to-hire, and full-time roles across the U.S.'],
    'industries'                     => ['title' => 'Industries We Serve | FASTMINDS',                                       'desc' => 'FASTMINDS delivers tailored IT consulting and staffing solutions for Healthcare, Banking, Manufacturing, Retail, and Enterprise sectors.'],
    'case-studies'                   => ['title' => 'Case Studies | FASTMINDS',                                              'desc' => 'Explore FASTMINDS client success stories and see how our data, AI, and IT solutions have delivered measurable business results.'],
    'insights'                       => ['title' => 'Insights &amp; Thought Leadership | FASTMINDS',                         'desc' => 'Read the latest insights on data analytics, AI, cloud technology, and IT staffing trends from the FASTMINDS expert team.'],
    'careers'                        => ['title' => 'Careers | FASTMINDS',                                                   'desc' => 'Join the FASTMINDS team. Explore open roles in IT consulting, data analytics, and staffing at our Charlotte, NC headquarters.'],
    'contact'                        => ['title' => 'Contact Us | FASTMINDS',                                                'desc' => 'Get in touch with FASTMINDS in Charlotte, NC. We are ready to discuss your IT consulting, data analytics, or staffing needs.'],
    'service-data-analytics'         => ['title' => 'Data &amp; Analytics Services | FASTMINDS',                             'desc' => 'Power BI, Tableau, data warehousing, ETL pipelines, and KPI dashboards by FASTMINDS &#8212; turning raw data into a competitive advantage.'],
    'service-ai-automation'          => ['title' => 'AI &amp; Automation Services | FASTMINDS',                              'desc' => 'Workflow automation, predictive analytics, RPA, and NLP solutions by FASTMINDS to reduce manual effort and accelerate business decisions.'],
    'service-it-consulting'          => ['title' => 'IT Consulting Services | FASTMINDS',                                    'desc' => 'Strategic IT consulting by FASTMINDS &#8212; cloud strategy, data governance, system integration, and technology roadmaps for modern enterprises.'],
    'service-cloud-solutions'        => ['title' => 'Cloud Solutions | FASTMINDS',                                           'desc' => 'Azure, AWS, and Snowflake cloud migration, architecture design, and cost optimization by FASTMINDS for scalable, secure operations.'],
    'service-digital-transformation' => ['title' => 'Digital Transformation | FASTMINDS',                                    'desc' => 'Legacy modernization, process re-engineering, and digital transformation roadmaps by FASTMINDS to help businesses compete in the digital age.'],
];

$_fallback_title = 'FASTMINDS &#8212; IT Consulting, Data Analytics &amp; Staffing';
$_fallback_desc  = 'FASTMINDS is a premier IT consulting and staffing firm delivering data analytics, AI automation, cloud solutions, and digital transformation.';

$_meta_title = $_seo_map[$current_page]['title'] ?? (isset($page_title) ? htmlspecialchars($page_title, ENT_QUOTES) . ' | FASTMINDS' : $_fallback_title);
$_meta_desc  = isset($page_description) ? htmlspecialchars($page_description, ENT_QUOTES) : ($_seo_map[$current_page]['desc'] ?? $_fallback_desc);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary SEO -->
    <title><?php echo $_meta_title; ?></title>
    <meta name="description" content="<?php echo $_meta_desc; ?>">
    <meta name="keywords" content="IT consulting, data analytics, IT staffing, AI automation, cloud solutions, digital transformation, Power BI, Tableau, Charlotte NC">
    <meta name="author" content="FASTMINDS">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo htmlspecialchars($_canonical, ENT_QUOTES); ?>">

    <!-- Open Graph / Facebook / LinkedIn -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="FASTMINDS">
    <meta property="og:locale" content="en_US">
    <meta property="og:url" content="<?php echo htmlspecialchars($_canonical, ENT_QUOTES); ?>">
    <meta property="og:title" content="<?php echo $_meta_title; ?>">
    <meta property="og:description" content="<?php echo $_meta_desc; ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($_og_image, ENT_QUOTES); ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="FASTMINDS &#8212; IT Consulting, Data Analytics &amp; IT Staffing">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $_meta_title; ?>">
    <meta name="twitter:description" content="<?php echo $_meta_desc; ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($_og_image, ENT_QUOTES); ?>">
    <meta name="twitter:image:alt" content="FASTMINDS &#8212; IT Consulting, Data Analytics &amp; IT Staffing">

    <!-- Favicons -->
    <link rel="icon" href="images/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="images/favicon.svg">
    <meta name="theme-color" content="#0A2540">

    <!-- JSON-LD: Organization structured data -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "FASTMINDS",
            "url": "<?php echo htmlspecialchars($_base_url, ENT_QUOTES); ?>",
            "logo": "<?php echo htmlspecialchars(rtrim($_base_url, '/') . '/images/favicon.svg', ENT_QUOTES); ?>",
            "description": "Premier IT consulting, data analytics, and staffing firm delivering AI automation, cloud solutions, and digital transformation.",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "1515 Mockingbird Lane, Suite 420",
                "addressLocality": "Charlotte",
                "addressRegion": "NC",
                "postalCode": "28209",
                "addressCountry": "US"
            },
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+1-234-567-890",
                "contactType": "customer service"
            },
            "sameAs": []
        }
    </script>

    <!-- Fonts & Styles -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="antialiased">

    <!-- Skip Navigation -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-[100] focus:bg-sky focus:text-white focus:px-4 focus:py-2 focus:rounded-lg">
        Skip to main content
    </a>

    <!-- ===== TOP BAR ===== -->
    <div class="bg-navy text-white hidden lg:block">
        <div class="container-grid">
            <div class="flex items-center justify-between h-10 text-xs">
                <div class="flex items-center gap-6">
                    <a href="mailto:info@fastmindsit.com" class="flex items-center gap-2 text-white/70 hover:text-sky transition-colors">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        info@fastmindsit.com
                    </a>
                    <a href="tel:+1234567890" class="flex items-center gap-2 text-white/70 hover:text-sky transition-colors">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        +1 (234) 567-890
                    </a>
                </div>
                <div class="flex items-center gap-4">
                    <a href="#" class="text-white/50 hover:text-sky transition-colors" aria-label="LinkedIn">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                        </svg>
                    </a>
                    <a href="#" class="text-white/50 hover:text-sky transition-colors" aria-label="Twitter">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                        </svg>
                    </a>
                    <a href="#" class="text-white/50 hover:text-sky transition-colors" aria-label="Facebook">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== HEADER / NAVIGATION ===== -->
    <header id="site-header" class="sticky top-0 z-50 bg-white border-b border-gray-100/80 transition-all duration-500">
        <nav class="container-grid" aria-label="Main navigation">
            <div class="flex items-center justify-between h-[76px]">
                <!-- Logo -->
                <a href="index.php" class="flex items-center gap-2.5 group" aria-label="FASTMINDS Home">
                    <div class="w-10 h-10 bg-gradient-to-br from-sky to-sky-dark rounded-xl flex items-center justify-center transition-all duration-500 group-hover:scale-110 group-hover:rotate-[360deg] group-hover:shadow-lg group-hover:shadow-sky/30">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <span class="text-xl font-extrabold text-navy tracking-tight">FAST<span class="text-sky">MINDS</span></span>
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center gap-7">
                    <a href="index.php" class="nav-link <?php echo $current_page === 'index' ? 'active' : ''; ?>">Home</a>
                    <a href="about.php" class="nav-link <?php echo $current_page === 'about' ? 'active' : ''; ?>">About</a>
                    <a href="services.php" class="nav-link <?php echo $current_page === 'services' ? 'active' : ''; ?>">Services</a>
                    <a href="staffing.php" class="nav-link <?php echo $current_page === 'staffing' ? 'active' : ''; ?>">Staffing</a>
                    <a href="industries.php" class="nav-link <?php echo $current_page === 'industries' ? 'active' : ''; ?>">Industries</a>
                    <a href="case-studies.php" class="nav-link <?php echo $current_page === 'case-studies' ? 'active' : ''; ?>">Case Studies</a>
                    <a href="insights.php" class="nav-link <?php echo $current_page === 'insights' ? 'active' : ''; ?>">Insights</a>
                    <a href="careers.php" class="nav-link <?php echo $current_page === 'careers' ? 'active' : ''; ?>">Careers</a>
                </div>

                <!-- CTA + Mobile -->
                <div class="flex items-center gap-4">
                    <a href="contact.php" class="hidden lg:inline-flex btn-primary !py-3 !px-6 !text-xs">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                        Let's Talk
                    </a>
                    <button id="mobile-menu-btn" class="lg:hidden w-10 h-10 rounded-xl bg-light-gray flex items-center justify-center text-navy hover:bg-sky hover:text-white transition-all duration-300" aria-label="Toggle menu" aria-expanded="false">
                        <svg class="w-5 h-5 menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg class="w-5 h-5 close-icon hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </nav>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="lg:hidden hidden bg-white border-t border-gray-100">
            <div class="container-grid py-6 flex flex-col gap-1">
                <a href="index.php" class="text-sm font-medium text-gray-600 hover:text-sky hover:bg-sky/5 px-4 py-3 rounded-xl transition-all <?php echo $current_page === 'index' ? 'text-sky bg-sky/5' : ''; ?>">Home</a>
                <a href="about.php" class="text-sm font-medium text-gray-600 hover:text-sky hover:bg-sky/5 px-4 py-3 rounded-xl transition-all <?php echo $current_page === 'about' ? 'text-sky bg-sky/5' : ''; ?>">About</a>
                <a href="services.php" class="text-sm font-medium text-gray-600 hover:text-sky hover:bg-sky/5 px-4 py-3 rounded-xl transition-all <?php echo $current_page === 'services' ? 'text-sky bg-sky/5' : ''; ?>">Services</a>
                <a href="staffing.php" class="text-sm font-medium text-gray-600 hover:text-sky hover:bg-sky/5 px-4 py-3 rounded-xl transition-all <?php echo $current_page === 'staffing' ? 'text-sky bg-sky/5' : ''; ?>">Staffing</a>
                <a href="industries.php" class="text-sm font-medium text-gray-600 hover:text-sky hover:bg-sky/5 px-4 py-3 rounded-xl transition-all <?php echo $current_page === 'industries' ? 'text-sky bg-sky/5' : ''; ?>">Industries</a>
                <a href="case-studies.php" class="text-sm font-medium text-gray-600 hover:text-sky hover:bg-sky/5 px-4 py-3 rounded-xl transition-all <?php echo $current_page === 'case-studies' ? 'text-sky bg-sky/5' : ''; ?>">Case Studies</a>
                <a href="insights.php" class="text-sm font-medium text-gray-600 hover:text-sky hover:bg-sky/5 px-4 py-3 rounded-xl transition-all <?php echo $current_page === 'insights' ? 'text-sky bg-sky/5' : ''; ?>">Insights</a>
                <a href="careers.php" class="text-sm font-medium text-gray-600 hover:text-sky hover:bg-sky/5 px-4 py-3 rounded-xl transition-all <?php echo $current_page === 'careers' ? 'text-sky bg-sky/5' : ''; ?>">Careers</a>
                <a href="contact.php" class="btn-primary text-sm text-center mt-3">Let's Talk</a>
            </div>
        </div>
    </header>

    <main id="main-content">