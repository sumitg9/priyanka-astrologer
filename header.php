<?php
/**
 * Shared Site Header Template
 * Priyanka Dey · Vedic Astrology & Spiritual Consultation
 */
$base = isset($basePath) ? $basePath : '';
$title = isset($pageTitle) ? $pageTitle : 'Priyanka Dey | Vedic Astrologer & Spiritual Consultant in Siliguri';
$desc = isset($pageDescription) ? $pageDescription : 'Ethical Vedic astrology, Janam Kundali analysis, Vastu Shastra audits, Tarot consultations, and Sacred Numerology in Siliguri, West Bengal.';
$keywords = isset($pageKeywords) ? $pageKeywords : 'astrologer in siliguri, vedic astrology, janam kundali, vastu consultant siliguri, tarot reading, numerology, priyanka dey';
$canonical = isset($canonicalUrl) ? $canonicalUrl : 'https://priyankadey.com/index.php';
$ogImg = isset($ogImage) ? $ogImage : $base . 'assets/images/astrology.jpg';
$bClass = isset($bodyClass) ? $bodyClass : '';
$active = isset($activeNav) ? $activeNav : '';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo htmlspecialchars($title); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($desc); ?>">
  <meta name="keywords" content="<?php echo htmlspecialchars($keywords); ?>">
  <meta name="author" content="Priyanka Dey">
  <link rel="canonical" href="<?php echo htmlspecialchars($canonical); ?>">

  <!-- Open Graph / Facebook -->
  <meta property="og:title" content="<?php echo htmlspecialchars($title); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($desc); ?>">
  <meta property="og:image" content="<?php echo htmlspecialchars($ogImg); ?>">
  <meta property="og:url" content="<?php echo htmlspecialchars($canonical); ?>">
  <meta property="og:type" content="<?php echo (isset($isArticle) && $isArticle) ? 'article' : 'website'; ?>">

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($title); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($desc); ?>">
  <meta name="twitter:image" content="<?php echo htmlspecialchars($ogImg); ?>">

  <!-- Fonts & Stylesheet -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Cinzel:wght@500;600;700&family=DM+Sans:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="<?php echo $base; ?>assets/css/styles.css">
  <link rel="icon" type="image/svg+xml" href="<?php echo $base; ?>assets/images/sun-artwork.svg">

  <?php if (!empty($extraHead)) echo $extraHead; ?>
</head>

<body<?php echo $bClass ? ' class="' . htmlspecialchars($bClass) . '"' : ''; ?>>
  <!-- TOPBAR -->
  <div class="topbar">Personal consultations in Siliguri &middot; Online sessions available worldwide</div>

  <!-- SITE HEADER & NAVIGATION -->
  <header class="header">
    <div class="navwrap">
      <a class="brand" href="<?php echo $base; ?>index.php" aria-label="Priyanka Dey Homepage">
        <span class="brandmark" aria-hidden="true">
          <svg class="sun-artwork-vector" viewBox="0 0 100 100" width="100%" height="100%" aria-hidden="true">
            <defs>
              <linearGradient id="hdrSunGradCore" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#ffb834" />
                <stop offset="100%" stop-color="#f5931e" />
              </linearGradient>
              <linearGradient id="hdrSunGradWaves" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#ffa827" />
                <stop offset="100%" stop-color="#f38b16" />
              </linearGradient>
            </defs>
            <g class="sun-waves-group" fill="url(#hdrSunGradWaves)">
              <path class="sun-wave-ray ray-0"
                d="M 44.44,20.01 C 46.08,12.71 54.41,4.21 65.14,3.40 C 66.95,11.02 61.52,17.48 56.08,20.11 A 30.5 30.5 0 0 0 44.44,20.01 Z" />
              <path class="sun-wave-ray ray-1"
                d="M 67.28,24.86 C 73.60,20.86 85.49,20.74 93.66,27.75 C 89.54,34.42 81.14,35.15 75.43,33.17 A 30.5 30.5 0 0 0 67.28,24.86 Z" />
              <path class="sun-wave-ray ray-2"
                d="M 79.99,44.44 C 87.29,46.08 95.79,54.41 96.60,65.14 C 88.98,66.95 82.52,61.52 79.89,56.08 A 30.5 30.5 0 0 0 79.99,44.44 Z" />
              <path class="sun-wave-ray ray-3"
                d="M 75.14,67.28 C 79.14,73.60 79.26,85.49 72.25,93.66 C 65.58,89.54 64.85,81.14 66.83,75.43 A 30.5 30.5 0 0 0 75.14,67.28 Z" />
              <path class="sun-wave-ray ray-4"
                d="M 55.56,79.99 C 53.92,87.29 45.59,95.79 34.86,96.60 C 33.05,88.98 38.48,82.52 43.92,79.89 A 30.5 30.5 0 0 0 55.56,79.99 Z" />
              <path class="sun-wave-ray ray-5"
                d="M 32.72,75.14 C 26.40,79.14 14.51,79.26 6.34,72.25 C 10.46,65.58 18.86,64.85 24.57,66.83 A 30.5 30.5 0 0 0 32.72,75.14 Z" />
              <path class="sun-wave-ray ray-6"
                d="M 20.01,55.56 C 12.71,53.92 4.21,45.59 3.40,34.86 C 11.02,33.05 17.48,38.48 20.11,43.92 A 30.5 30.5 0 0 0 20.01,55.56 Z" />
              <path class="sun-wave-ray ray-7"
                d="M 24.86,32.72 C 20.86,26.40 20.74,14.51 27.75,6.34 C 34.42,10.46 35.15,18.86 33.17,24.57 A 30.5 30.5 0 0 0 24.86,32.72 Z" />
            </g>
            <circle cx="50" cy="50" r="26.8" fill="url(#hdrSunGradCore)" class="sun-center-disc" />
          </svg>
        </span>
        <span class="brandtext">
          <span class="brandname serif">Priyanka Dey</span>
          <span class="brandsub">Astrology &bull; Tarot &bull; Vastu</span>
        </span>
      </a>

      <!-- Desktop Main Menu -->
      <nav class="navlinks" aria-label="Main Navigation">
        <a href="<?php echo $base; ?>index.php" class="nav-item<?php echo $active === 'home' ? ' is-active' : ''; ?>">Home</a>
        <a href="<?php echo $base; ?>about.php" class="nav-item<?php echo $active === 'about' ? ' is-active' : ''; ?>">About Priyanka</a>

        <!-- Services Dropdown ▾ -->
        <div class="nav-dropdown" id="servicesDropdown">
          <a href="<?php echo $base; ?>services.php" class="nav-item nav-dropdown-trigger<?php echo in_array($active, ['services','astrology','kundali','kundali-matching','tarot','numerology','vastu','career-guidance','marriage-consultation','muhurta']) ? ' is-active' : ''; ?>" id="servicesTrigger" aria-haspopup="true"
            aria-expanded="false">
            Services <span class="dropdown-caret" aria-hidden="true">&#9662;</span>
          </a>
          <div class="dropdown-menu" role="menu" aria-labelledby="servicesTrigger">
            <div class="dropdown-menu-header">
              <span class="dropdown-header-title">Consultation Services</span>
              <a href="<?php echo $base; ?>services.php" class="dropdown-view-all">All Services &#8599;</a>
            </div>
            <div class="dropdown-grid">
              <a href="<?php echo $base; ?>astrology.php" class="dropdown-item<?php echo $active === 'astrology' ? ' active' : ''; ?>" role="menuitem">
                <span class="dropdown-bullet">&#10022;</span>
                <span class="dropdown-item-content">
                  <span class="dropdown-item-title">Astrology Consultation</span>
                  <span class="dropdown-item-desc">Birth-charts, planetary transits &amp; Vedic remedies</span>
                </span>
              </a>
              <a href="<?php echo $base; ?>kundali.php" class="dropdown-item<?php echo $active === 'kundali' ? ' active' : ''; ?>" role="menuitem">
                <span class="dropdown-bullet">&#10022;</span>
                <span class="dropdown-item-content">
                  <span class="dropdown-item-title">Kundali Analysis</span>
                  <span class="dropdown-item-desc">Comprehensive Janam Kundali &amp; Mahadasha breakdown</span>
                </span>
              </a>
              <a href="<?php echo $base; ?>kundali-matching.php" class="dropdown-item<?php echo $active === 'kundali-matching' ? ' active' : ''; ?>" role="menuitem">
                <span class="dropdown-bullet">&#10022;</span>
                <span class="dropdown-item-content">
                  <span class="dropdown-item-title">Kundali Matching</span>
                  <span class="dropdown-item-desc">Ashtakoot Guna Milan for marital harmony</span>
                </span>
              </a>
              <a href="<?php echo $base; ?>tarot.php" class="dropdown-item<?php echo $active === 'tarot' ? ' active' : ''; ?>" role="menuitem">
                <span class="dropdown-bullet">&#10022;</span>
                <span class="dropdown-item-content">
                  <span class="dropdown-item-title">Tarot Reading</span>
                  <span class="dropdown-item-desc">Intuitive card spreads for clarity at life crossroads</span>
                </span>
              </a>
              <a href="<?php echo $base; ?>numerology.php" class="dropdown-item<?php echo $active === 'numerology' ? ' active' : ''; ?>" role="menuitem">
                <span class="dropdown-bullet">&#10022;</span>
                <span class="dropdown-item-content">
                  <span class="dropdown-item-title">Numerology</span>
                  <span class="dropdown-item-desc">Life path numbers, destiny cycles &amp; name vibrations</span>
                </span>
              </a>
              <a href="<?php echo $base; ?>vastu.php" class="dropdown-item<?php echo $active === 'vastu' ? ' active' : ''; ?>" role="menuitem">
                <span class="dropdown-bullet">&#10022;</span>
                <span class="dropdown-item-content">
                  <span class="dropdown-item-title">Vastu Consultation</span>
                  <span class="dropdown-item-desc">Space energy audits for homes and commercial offices</span>
                </span>
              </a>
              <a href="<?php echo $base; ?>career-guidance.php" class="dropdown-item<?php echo $active === 'career-guidance' ? ' active' : ''; ?>" role="menuitem">
                <span class="dropdown-bullet">&#10022;</span>
                <span class="dropdown-item-content">
                  <span class="dropdown-item-title">Career &amp; Business Guidance</span>
                  <span class="dropdown-item-desc">Auspicious timing &amp; vocational trajectory guidance</span>
                </span>
              </a>
              <a href="<?php echo $base; ?>marriage-consultation.php" class="dropdown-item<?php echo $active === 'marriage-consultation' ? ' active' : ''; ?>" role="menuitem">
                <span class="dropdown-bullet">&#10022;</span>
                <span class="dropdown-item-content">
                  <span class="dropdown-item-title">Love &amp; Marriage Consultation</span>
                  <span class="dropdown-item-desc">Deep relationship dynamics &amp; compatibility insights</span>
                </span>
              </a>
              <a href="<?php echo $base; ?>muhurta.php" class="dropdown-item<?php echo $active === 'muhurta' ? ' active' : ''; ?>" role="menuitem">
                <span class="dropdown-bullet">&#10022;</span>
                <span class="dropdown-item-content">
                  <span class="dropdown-item-title">Muhurta Selection</span>
                  <span class="dropdown-item-desc">Favourable celestial timing for milestones &amp; events</span>
                </span>
              </a>
            </div>
          </div>
        </div>

        <a href="<?php echo $base; ?>horoscope.php" class="nav-item<?php echo $active === 'horoscope' ? ' is-active' : ''; ?>">Horoscope</a>
        <a href="<?php echo $base; ?>blog.php" class="nav-item<?php echo in_array($active, ['blog', 'article']) ? ' is-active' : ''; ?>">Blog</a>
        <a href="<?php echo $base; ?>contact.php" class="nav-item<?php echo $active === 'contact' ? ' is-active' : ''; ?>">Contact</a>
      </nav>

      <!-- CTA Button & Mobile Hamburger -->
      <div class="nav-actions">
        <a class="btn gold nav-cta-btn" href="<?php echo $base; ?>contact.php#booking">Book Consultation &#8599;</a>
        <button class="menu-btn" id="menuToggle" aria-label="Toggle navigation menu" aria-expanded="false"
          aria-controls="mobileNav">
          <span class="menu-icon-bars" aria-hidden="true">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </button>
      </div>
    </div>

    <!-- Mobile Drawer Menu -->
    <nav class="mobile-nav" id="mobileNav" aria-label="Mobile Navigation">
      <div class="mobile-nav-inner">
        <a href="<?php echo $base; ?>index.php" class="mobile-nav-link<?php echo $active === 'home' ? ' is-active' : ''; ?>">Home</a>
        <a href="<?php echo $base; ?>about.php" class="mobile-nav-link<?php echo $active === 'about' ? ' is-active' : ''; ?>">About Priyanka</a>

        <!-- Mobile Services Accordion -->
        <div class="mobile-dropdown" id="mobileServicesDropdown">
          <div class="mobile-dropdown-header">
            <a href="<?php echo $base; ?>services.php">Services</a>
            <button class="mobile-dropdown-toggle" id="mobileServicesToggle" aria-label="Toggle Services menu"
              aria-expanded="false">&#9662;</button>
          </div>
          <div class="mobile-submenu" id="mobileServicesMenu">
            <a href="<?php echo $base; ?>astrology.php" class="mobile-sub-link"><span class="mobile-sub-bullet">&#10022;</span> Astrology Consultation</a>
            <a href="<?php echo $base; ?>kundali.php" class="mobile-sub-link"><span class="mobile-sub-bullet">&#10022;</span> Kundali Analysis</a>
            <a href="<?php echo $base; ?>kundali-matching.php" class="mobile-sub-link"><span class="mobile-sub-bullet">&#10022;</span> Kundali Matching</a>
            <a href="<?php echo $base; ?>tarot.php" class="mobile-sub-link"><span class="mobile-sub-bullet">&#10022;</span> Tarot Reading</a>
            <a href="<?php echo $base; ?>numerology.php" class="mobile-sub-link"><span class="mobile-sub-bullet">&#10022;</span> Numerology</a>
            <a href="<?php echo $base; ?>vastu.php" class="mobile-sub-link"><span class="mobile-sub-bullet">&#10022;</span> Vastu Consultation</a>
            <a href="<?php echo $base; ?>career-guidance.php" class="mobile-sub-link"><span class="mobile-sub-bullet">&#10022;</span> Career &amp; Business Guidance</a>
            <a href="<?php echo $base; ?>marriage-consultation.php" class="mobile-sub-link"><span class="mobile-sub-bullet">&#10022;</span> Love &amp; Marriage Consultation</a>
            <a href="<?php echo $base; ?>muhurta.php" class="mobile-sub-link"><span class="mobile-sub-bullet">&#10022;</span> Muhurta Selection</a>
          </div>
        </div>

        <a href="<?php echo $base; ?>horoscope.php" class="mobile-nav-link<?php echo $active === 'horoscope' ? ' is-active' : ''; ?>">Horoscope</a>
        <a href="<?php echo $base; ?>blog.php" class="mobile-nav-link<?php echo in_array($active, ['blog', 'article']) ? ' is-active' : ''; ?>">Blog</a>
        <a href="<?php echo $base; ?>contact.php" class="mobile-nav-link<?php echo $active === 'contact' ? ' is-active' : ''; ?>">Contact</a>

        <div class="mobile-cta-wrap">
          <a class="btn gold" href="<?php echo $base; ?>contact.php#booking">Book Consultation &#8599;</a>
        </div>
      </div>
    </nav>
  </header>
