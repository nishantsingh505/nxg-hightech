<?php
require_once __DIR__ . '/config.php';

$pageTitle = $pageTitle ?? 'NXG HIGHTECH | Authorised Siemens Digital Industries Software Partner';
$pageDescription = $pageDescription ?? 'NXG Hightech delivers end-to-end CAD/CAM/CAE/PLM and Digital Manufacturing solutions with Siemens Xcelerator across North India.';
$activePage = $activePage ?? '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
  <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">

  <!-- Google Fonts: Plus Jakarta Sans -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <!-- Font Awesome 6 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brandBlue: '#0084d6',
            brandDark: '#060b18',
            brandNavy: '#071022',
            brandCyan: '#00c8ff',
            cardDark: '#060c1d',
            siemensTeal: '#00a3a6',
          },
          fontFamily: {
            sans: ['"Plus Jakarta Sans"', 'sans-serif'],
          }
        }
      }
    }
  </script>

  <!-- Custom Styles -->
  <link rel="stylesheet" href="styles.css">
  <style>
    .dropdown:hover .dropdown-menu {
      display: block;
    }
  </style>
</head>

<body class="bg-white text-slate-800 font-sans antialiased selection:bg-[#0084d6] selection:text-white">

  <!-- ================= 1. TOP NAVBAR ================= -->
  <header
    class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-slate-200 transition-all duration-200 shadow-sm"
    id="mainHeader">
    <div class="max-w-[1360px] mx-auto px-4 sm:px-6">
      <div class="flex items-center justify-between h-16 sm:h-[76px]">

        <!-- Official Logo: NXG HIGHTECH (Mobile Responsive) -->
        <a href="index.php" class="flex items-center gap-2 sm:gap-3 flex-shrink-0">
          <img src="assets/site_logo.png" alt="NXG HIGHTECH Logo" class="h-8 sm:h-11 w-auto object-contain">
          <div class="flex flex-col">
            <span class="text-sm sm:text-xl font-black tracking-tight text-[#091124] leading-none"><?= SITE_NAME ?></span>
            <span
              class="text-[8px] sm:text-[9px] font-bold tracking-wider sm:tracking-widest text-[#0084d6] uppercase mt-0.5">SIEMENS
              SOLUTION PARTNER</span>
          </div>
        </a>

        <!-- Desktop Navigation: Home, About, Solutions, Industries, Services, Resources, Contact -->
        <nav class="hidden lg:flex items-center gap-6 xl:gap-8">
          <a href="index.php" class="<?= navActiveClass('home', $activePage) ?>">Home</a>
          <a href="about.php" class="<?= navActiveClass('about', $activePage) ?>">About</a>

          <!-- Solutions Dropdown -->
          <div class="relative dropdown group py-2">
            <button
              class="flex items-center gap-1 <?= in_array($activePage, ['nx-ug', 'teamcenter', 'solid-edge', 'star-ccm', 'flotherm-xt', 'solutions']) ? 'text-[#0084d6] font-bold' : 'text-slate-700 hover:text-[#0084d6]' ?> transition-colors text-sm font-semibold">
              <span>Solutions</span>
              <i
                class="fa-solid fa-chevron-down text-[10px] text-slate-400 group-hover:text-[#0084d6] transition-transform group-hover:rotate-180"></i>
            </button>
            <div
              class="dropdown-menu absolute top-full left-0 hidden w-64 bg-white border border-slate-200 rounded-xl shadow-xl py-2 z-50">
              <a href="nx-ug.php"
                class="flex items-center gap-2.5 px-4 py-2.5 text-xs text-slate-700 hover:bg-slate-50 hover:text-[#0084d6]">
                <i class="fa-solid fa-cube text-[#0084d6] w-4"></i>
                <div>
                  <div class="font-bold">Siemens NX (CAD / CAM)</div>
                  <div class="text-[10px] text-slate-500">Product Design &amp; 5-Axis CAM</div>
                </div>
              </a>
              <a href="teamcenter.php"
                class="flex items-center gap-2.5 px-4 py-2.5 text-xs text-slate-700 hover:bg-slate-50 hover:text-[#0084d6]">
                <i class="fa-solid fa-sitemap text-[#00a3a6] w-4"></i>
                <div>
                  <div class="font-bold">Teamcenter PLM</div>
                  <div class="text-[10px] text-slate-500">Lifecycle &amp; BOM Collaboration</div>
                </div>
              </a>
              <a href="solid-edge.php"
                class="flex items-center gap-2.5 px-4 py-2.5 text-xs text-slate-700 hover:bg-slate-50 hover:text-[#0084d6]">
                <i class="fa-solid fa-shapes text-blue-500 w-4"></i>
                <div>
                  <div class="font-bold">Solid Edge</div>
                  <div class="text-[10px] text-slate-500">Synchronous 3D Design</div>
                </div>
              </a>
              <a href="star-ccm.php"
                class="flex items-center gap-2.5 px-4 py-2.5 text-xs text-slate-700 hover:bg-slate-50 hover:text-[#0084d6]">
                <i class="fa-solid fa-wind text-cyan-600 w-4"></i>
                <div>
                  <div class="font-bold">Simcenter STAR-CCM+</div>
                  <div class="text-[10px] text-slate-500">CFD &amp; Multiphysics Simulation</div>
                </div>
              </a>
              <a href="flotherm-xt.php"
                class="flex items-center gap-2.5 px-4 py-2.5 text-xs text-slate-700 hover:bg-slate-50 hover:text-[#0084d6]">
                <i class="fa-solid fa-fire-flame-curved text-amber-500 w-4"></i>
                <div>
                  <div class="font-bold">Simcenter FloTHERM XT</div>
                  <div class="text-[10px] text-slate-500">Electronics Cooling Analysis</div>
                </div>
              </a>
              <a href="services.php"
                class="flex items-center gap-2.5 px-4 py-2.5 text-xs text-slate-700 hover:bg-slate-50 hover:text-[#0084d6]">
                <i class="fa-solid fa-gears text-purple-600 w-4"></i>
                <div>
                  <div class="font-bold">Tecnomatix</div>
                  <div class="text-[10px] text-slate-500">Digital Factory &amp; Robotics</div>
                </div>
              </a>
            </div>
          </div>

          <!-- Industries Dropdown -->
          <div class="relative dropdown group py-2">
            <button
              class="flex items-center gap-1 text-slate-700 hover:text-[#0084d6] transition-colors text-sm font-semibold">
              <span>Industries</span>
              <i
                class="fa-solid fa-chevron-down text-[10px] text-slate-400 group-hover:text-[#0084d6] transition-transform group-hover:rotate-180"></i>
            </button>
            <div
              class="dropdown-menu absolute top-full left-0 hidden w-56 bg-white border border-slate-200 rounded-xl shadow-xl py-2 z-50">
              <a href="index.php#industries"
                class="block px-4 py-2 text-xs text-slate-700 hover:bg-slate-50 hover:text-[#0084d6]">Mold-Tool-Die</a>
              <a href="index.php#industries"
                class="block px-4 py-2 text-xs text-slate-700 hover:bg-slate-50 hover:text-[#0084d6]">Automotive &amp; EV</a>
              <a href="index.php#industries"
                class="block px-4 py-2 text-xs text-slate-700 hover:bg-slate-50 hover:text-[#0084d6]">Consumer Goods</a>
              <a href="index.php#industries"
                class="block px-4 py-2 text-xs text-slate-700 hover:bg-slate-50 hover:text-[#0084d6]">Plastic Components</a>
              <a href="index.php#industries"
                class="block px-4 py-2 text-xs text-slate-700 hover:bg-slate-50 hover:text-[#0084d6]">Medical Devices</a>
              <a href="index.php#industries"
                class="block px-4 py-2 text-xs text-slate-700 hover:bg-slate-50 hover:text-[#0084d6]">Sheet Metal &amp; Machinery</a>
            </div>
          </div>

          <!-- Services Dropdown -->
          <div class="relative dropdown group py-2">
            <button
              class="flex items-center gap-1 <?= ($activePage === 'services') ? 'text-[#0084d6] font-bold' : 'text-slate-700 hover:text-[#0084d6]' ?> transition-colors text-sm font-semibold">
              <span>Services</span>
              <i
                class="fa-solid fa-chevron-down text-[10px] text-slate-400 group-hover:text-[#0084d6] transition-transform group-hover:rotate-180"></i>
            </button>
            <div
              class="dropdown-menu absolute top-full left-0 hidden w-60 bg-white border border-slate-200 rounded-xl shadow-xl py-2 z-50">
              <a href="services.php"
                class="block px-4 py-2 text-xs text-slate-700 hover:bg-slate-50 hover:text-[#0084d6]">Software Sales &amp; Support</a>
              <a href="teamcenter.php"
                class="block px-4 py-2 text-xs text-slate-700 hover:bg-slate-50 hover:text-[#0084d6]">Teamcenter Implementation</a>
              <a href="services.php"
                class="block px-4 py-2 text-xs text-slate-700 hover:bg-slate-50 hover:text-[#0084d6]">Legacy CAD Data Migration</a>
              <a href="services.php"
                class="block px-4 py-2 text-xs text-slate-700 hover:bg-slate-50 hover:text-[#0084d6]">Design &amp; Simulation Consultancy</a>
              <a href="nx-ug.php#cam"
                class="block px-4 py-2 text-xs text-slate-700 hover:bg-slate-50 hover:text-[#0084d6]">CAM &amp; Post-Processor Service</a>
            </div>
          </div>

          <!-- Resources Dropdown -->
          <div class="relative dropdown group py-2">
            <button
              class="flex items-center gap-1 <?= in_array($activePage, ['events', 'event-registration']) ? 'text-[#0084d6] font-bold' : 'text-slate-700 hover:text-[#0084d6]' ?> transition-colors text-sm font-semibold">
              <span>Resources</span>
              <i
                class="fa-solid fa-chevron-down text-[10px] text-slate-400 group-hover:text-[#0084d6] transition-transform group-hover:rotate-180"></i>
            </button>
            <div
              class="dropdown-menu absolute top-full left-0 hidden w-52 bg-white border border-slate-200 rounded-xl shadow-xl py-2 z-50">
              <a href="events.php"
                class="block px-4 py-2 text-xs text-slate-700 hover:bg-slate-50 hover:text-[#0084d6]">Events &amp; Tech Forum</a>
              <a href="event-registration.php"
                class="block px-4 py-2 text-xs text-slate-700 hover:bg-slate-50 hover:text-[#0084d6]">Event Registration</a>
            </div>
          </div>

          <a href="contact-us.php" class="<?= navActiveClass('contact', $activePage) ?>">Contact Us</a>
        </nav>

        <!-- Right Side: Search & CTA Button -->
        <div class="flex items-center gap-2 sm:gap-3.5">
          <a href="index.php#solutions"
            class="p-1.5 text-slate-500 hover:text-[#0084d6] transition text-sm sm:text-base flex-shrink-0"
            title="Search Solutions">
            <i class="fa-solid fa-magnifying-glass"></i>
          </a>

          <!-- Desktop CTA -->
          <button onclick="openExpertModal()"
            class="hidden sm:inline-flex items-center gap-2 bg-[#0084d6] hover:bg-[#0074be] active:scale-95 text-white text-xs sm:text-sm font-bold px-5 sm:px-6 py-2.5 rounded-full shadow-md shadow-blue-500/20 transition whitespace-nowrap">
            <span>Talk to an Expert</span>
            <i class="fa-solid fa-arrow-right text-[11px]"></i>
          </button>

          <!-- Mobile Compact Oval Button -->
          <button onclick="openExpertModal()"
            class="sm:hidden flex flex-col items-center justify-center bg-[#0084d6] hover:bg-[#0074be] active:scale-95 text-white text-[10px] font-bold w-[74px] h-[50px] rounded-full shadow-md shadow-blue-500/25 leading-tight flex-shrink-0">
            <span>Talk to</span>
            <span class="inline-flex items-center gap-1">an <i class="fa-solid fa-arrow-right text-[8px]"></i></span>
            <span>Expert</span>
          </button>

          <!-- Mobile Hamburger -->
          <button id="mobileMenuBtn" aria-label="Toggle Menu"
            class="lg:hidden p-1.5 text-slate-800 hover:text-[#0084d6] transition text-xl flex-shrink-0 ml-1">
            <i class="fa-solid fa-bars"></i>
          </button>
        </div>

      </div>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div id="mobileMenu"
      class="hidden lg:hidden bg-white/98 backdrop-blur-xl border-b border-slate-200 px-5 py-4 shadow-2xl transition-all duration-300">
      <div class="flex flex-col gap-1 text-xs sm:text-sm font-semibold divide-y divide-slate-100">
        <div class="py-1.5 flex flex-col gap-1">
          <a href="index.php" class="<?= mobileNavActiveClass('home', $activePage) ?>">
            <span class="flex items-center gap-2.5"><i class="fa-solid fa-house w-4"></i> Home</span>
            <i class="fa-solid fa-chevron-right text-[10px]"></i>
          </a>
          <a href="about.php" class="<?= mobileNavActiveClass('about', $activePage) ?>">
            <span class="flex items-center gap-2.5"><i class="fa-solid fa-building w-4"></i> About Us</span>
            <i class="fa-solid fa-chevron-right text-[10px]"></i>
          </a>
        </div>

        <div class="py-2">
          <div class="text-[10px] font-bold text-slate-400 uppercase tracking-wider px-3 mb-1">Siemens Solutions</div>
          <div class="grid grid-cols-1 gap-1">
            <a href="nx-ug.php"
              class="mobile-nav-link flex items-center justify-between text-slate-700 hover:text-[#0084d6] px-3 py-1.5 rounded-lg hover:bg-slate-50 transition">
              <span class="flex items-center gap-2.5"><i class="fa-solid fa-cube text-[#0084d6] w-4"></i> Siemens NX (CAD / CAM)</span>
            </a>
            <a href="teamcenter.php"
              class="mobile-nav-link flex items-center justify-between text-slate-700 hover:text-[#0084d6] px-3 py-1.5 rounded-lg hover:bg-slate-50 transition">
              <span class="flex items-center gap-2.5"><i class="fa-solid fa-sitemap text-[#00a3a6] w-4"></i> Teamcenter PLM</span>
            </a>
            <a href="solid-edge.php"
              class="mobile-nav-link flex items-center justify-between text-slate-700 hover:text-[#0084d6] px-3 py-1.5 rounded-lg hover:bg-slate-50 transition">
              <span class="flex items-center gap-2.5"><i class="fa-solid fa-shapes text-blue-500 w-4"></i> Solid Edge</span>
            </a>
            <a href="star-ccm.php"
              class="mobile-nav-link flex items-center justify-between text-slate-700 hover:text-[#0084d6] px-3 py-1.5 rounded-lg hover:bg-slate-50 transition">
              <span class="flex items-center gap-2.5"><i class="fa-solid fa-wind text-cyan-600 w-4"></i> Simcenter STAR-CCM+</span>
            </a>
            <a href="flotherm-xt.php"
              class="mobile-nav-link flex items-center justify-between text-slate-700 hover:text-[#0084d6] px-3 py-1.5 rounded-lg hover:bg-slate-50 transition">
              <span class="flex items-center gap-2.5"><i class="fa-solid fa-fire-flame-curved text-amber-500 w-4"></i> Simcenter FloTHERM XT</span>
            </a>
            <a href="services.php"
              class="mobile-nav-link flex items-center justify-between text-slate-700 hover:text-[#0084d6] px-3 py-1.5 rounded-lg hover:bg-slate-50 transition">
              <span class="flex items-center gap-2.5"><i class="fa-solid fa-gears text-purple-600 w-4"></i> Tecnomatix &amp; Services</span>
            </a>
          </div>
        </div>

        <div class="py-2 flex flex-col gap-1">
          <a href="events.php" class="<?= mobileNavActiveClass('events', $activePage) ?>">
            <span class="flex items-center gap-2.5"><i class="fa-solid fa-calendar-days text-[#0084d6] w-4"></i> Events &amp; Tech Forum</span>
            <span class="text-[9px] bg-cyan-100 text-[#0084d6] font-bold px-2 py-0.5 rounded-full">Upcoming</span>
          </a>
          <a href="event-registration.php" class="<?= mobileNavActiveClass('event-registration', $activePage) ?>">
            <span class="flex items-center gap-2.5"><i class="fa-solid fa-id-card text-emerald-600 w-4"></i> Event Registration</span>
            <span class="text-[9px] bg-emerald-100 text-emerald-700 font-bold px-2 py-0.5 rounded-full">Passes</span>
          </a>
          <a href="contact-us.php" class="<?= mobileNavActiveClass('contact', $activePage) ?>">
            <span class="flex items-center gap-2.5"><i class="fa-solid fa-envelope text-slate-400 w-4"></i> Contact Us</span>
            <i class="fa-solid fa-chevron-right text-[10px] text-slate-300"></i>
          </a>
        </div>

        <div class="pt-3">
          <button onclick="openExpertModal(); mobileMenu.classList.add('hidden')"
            class="w-full bg-[#0084d6] hover:bg-[#0074be] text-white py-3 rounded-full font-bold text-xs flex items-center justify-center gap-2 shadow-lg shadow-blue-500/25 active:scale-95">
            <i class="fa-solid fa-comments"></i>
            <span>Talk to an Expert</span>
          </button>
        </div>
      </div>
    </div>
  </header>
