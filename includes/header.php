<?php
$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="FASTMINDS - Premier IT consulting, data analytics, and staffing solutions. Transform your data into decisions and talent into impact.">
    <meta name="keywords" content="IT consulting, data analytics, IT staffing, AI automation, digital transformation">
    <meta name="author" content="FASTMINDS">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="FASTMINDS - IT Consulting & Data Solutions">
    <meta property="og:description" content="Transform your data into decisions and talent into impact with FASTMINDS.">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#0A2540">
    <title><?php echo isset($page_title) ? $page_title . ' | FASTMINDS' : 'FASTMINDS - IT Consulting & Data Solutions'; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="antialiased">

    <!-- Skip Navigation for Accessibility -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-[100] focus:bg-sky focus:text-white focus:px-4 focus:py-2 focus:rounded-lg">
        Skip to main content
    </a>

    <!-- Header / Navigation -->
    <header id="site-header" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-white/80 backdrop-blur-lg border-b border-gray-100/50">
        <nav class="container-grid" aria-label="Main navigation">
            <div class="flex items-center justify-between h-[72px]">
                <!-- Logo -->
                <a href="index.php" class="flex items-center gap-2 group" aria-label="FASTMINDS Home">
                    <div class="w-9 h-9 bg-sky rounded-lg flex items-center justify-center transition-transform duration-300 group-hover:scale-110">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <span class="text-xl font-bold text-navy tracking-tight">FAST<span class="text-sky">MINDS</span></span>
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center gap-8">
                    <a href="index.php" class="nav-link <?php echo $current_page === 'index' ? 'active' : ''; ?>">Home</a>
                    <a href="about.php" class="nav-link <?php echo $current_page === 'about' ? 'active' : ''; ?>">About</a>
                    <a href="services.php" class="nav-link <?php echo $current_page === 'services' ? 'active' : ''; ?>">Services</a>
                    <a href="staffing.php" class="nav-link <?php echo $current_page === 'staffing' ? 'active' : ''; ?>">Staffing</a>
                    <a href="industries.php" class="nav-link <?php echo $current_page === 'industries' ? 'active' : ''; ?>">Industries</a>
                    <a href="case-studies.php" class="nav-link <?php echo $current_page === 'case-studies' ? 'active' : ''; ?>">Case Studies</a>
                    <a href="insights.php" class="nav-link <?php echo $current_page === 'insights' ? 'active' : ''; ?>">Insights</a>
                    <a href="careers.php" class="nav-link <?php echo $current_page === 'careers' ? 'active' : ''; ?>">Careers</a>
                    <a href="contact.php" class="btn-primary text-sm !px-5 !py-2.5">Contact Us</a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="lg:hidden p-2 rounded-lg text-navy hover:bg-gray-100 transition-colors" aria-label="Toggle menu" aria-expanded="false">
                    <svg class="w-6 h-6 menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="w-6 h-6 close-icon hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </nav>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="lg:hidden hidden bg-white border-t border-gray-100">
            <div class="container-grid py-6 flex flex-col gap-4">
                <a href="index.php" class="text-sm font-medium text-gray-600 hover:text-navy py-2 transition-colors <?php echo $current_page === 'index' ? 'text-navy' : ''; ?>">Home</a>
                <a href="about.php" class="text-sm font-medium text-gray-600 hover:text-navy py-2 transition-colors <?php echo $current_page === 'about' ? 'text-navy' : ''; ?>">About</a>
                <a href="services.php" class="text-sm font-medium text-gray-600 hover:text-navy py-2 transition-colors <?php echo $current_page === 'services' ? 'text-navy' : ''; ?>">Services</a>
                <a href="staffing.php" class="text-sm font-medium text-gray-600 hover:text-navy py-2 transition-colors <?php echo $current_page === 'staffing' ? 'text-navy' : ''; ?>">Staffing</a>
                <a href="industries.php" class="text-sm font-medium text-gray-600 hover:text-navy py-2 transition-colors <?php echo $current_page === 'industries' ? 'text-navy' : ''; ?>">Industries</a>
                <a href="case-studies.php" class="text-sm font-medium text-gray-600 hover:text-navy py-2 transition-colors <?php echo $current_page === 'case-studies' ? 'text-navy' : ''; ?>">Case Studies</a>
                <a href="insights.php" class="text-sm font-medium text-gray-600 hover:text-navy py-2 transition-colors <?php echo $current_page === 'insights' ? 'text-navy' : ''; ?>">Insights</a>
                <a href="careers.php" class="text-sm font-medium text-gray-600 hover:text-navy py-2 transition-colors <?php echo $current_page === 'careers' ? 'text-navy' : ''; ?>">Careers</a>
                <a href="contact.php" class="btn-primary text-sm text-center mt-2">Contact Us</a>
            </div>
        </div>
    </header>

    <!-- Spacer for fixed header -->
    <div class="h-[72px]"></div>

    <main id="main-content">