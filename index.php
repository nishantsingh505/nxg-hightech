<?php
$pageTitle = "NXG HIGHTECH | Authorised Siemens Digital Industries Software Partner";
$pageDescription = "NXG Hightech delivers end-to-end CAD/CAM/CAE/PLM and Digital Manufacturing solutions with Siemens Xcelerator across North India.";
$activePage = 'home';
include 'includes/header.php';
?>

<!-- ================= 2. HERO SECTION ================= -->
  <section class="relative bg-[#060f22] text-white pt-7 sm:pt-16 pb-10 sm:pb-16 overflow-hidden">

    <!-- Background Blueprint Grid Pattern (Exact Mobile Match) -->
    <div class="absolute inset-0 bg-hero-pattern opacity-40 pointer-events-none"></div>
    <div class="absolute -top-40 -left-40 w-96 h-96 bg-blue-600/20 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-40 -right-40 w-96 h-96 bg-cyan-500/15 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-[1360px] mx-auto px-4 sm:px-6 relative z-10">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">

        <!-- Hero Left Column: Headline, Subtitle, CTAs, Badges (Mobile-Matched) -->
        <div class="lg:col-span-6 space-y-5 sm:space-y-6">

          <!-- Siemens Partner Pill -->
          <div
            class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-cyan-500/10 border border-cyan-400/25 text-[#00c8ff] text-[9.5px] sm:text-[11px] font-bold tracking-wider uppercase">
            <span>SIEMENS DIGITAL INDUSTRIES SOFTWARE PARTNER</span>
          </div>

          <!-- Main Bold Headline -->
          <h1 class="text-3xl sm:text-4xl lg:text-[46px] font-black text-white leading-[1.12] tracking-tight">
            ENGINEERING<br>
            IDEAS TODAY<br>
            FOR <span class="text-[#00c8ff]">A SMARTER<br>
              TOMORROW.</span>
          </h1>

          <!-- Subtitle -->
          <p class="text-slate-300 text-xs sm:text-sm leading-relaxed max-w-xl">
            NXG Hightech delivers end-to-end CAD/CAM/CAE/PLM and Digital Manufacturing solutions with Siemens Xcelerator
            to help businesses design better, manufacture smarter, and innovate faster.
          </p>

          <!-- CTA Buttons: Exact Side-by-Side with Glowing Blue Accent -->
          <div class="flex items-center gap-2.5 sm:gap-3.5 pt-2">
            <a href="#solutions"
              class="inline-flex items-center justify-center gap-1.5 sm:gap-2 bg-[#0084d6] hover:bg-[#0074be] text-white text-xs sm:text-sm font-bold px-5 sm:px-6 py-3 rounded-full transition-all duration-200 shadow-[0_0_22px_rgba(0,132,214,0.55)] active:scale-95 whitespace-nowrap">
              <span>Explore Solutions</span>
              <i class="fa-solid fa-arrow-right text-[10px] sm:text-[11px]"></i>
            </a>
            <button onclick="openExpertModal()"
              class="inline-flex items-center justify-center border border-white/40 hover:border-white text-white hover:bg-white/10 text-xs sm:text-sm font-semibold px-4 sm:px-6 py-3 rounded-full transition-all duration-200 whitespace-nowrap">
              <span>Talk to an Expert</span>
            </button>
          </div>

          <!-- 4 Features Badges: Exact 2x2 Grid on Mobile -->
          <div class="grid grid-cols-2 sm:grid-cols-4 gap-3.5 sm:gap-4 pt-6 border-t border-slate-800/80">
            <div class="flex items-center gap-2.5 sm:gap-3">
              <i class="fa-solid fa-shield-halved text-[#00c8ff] text-lg sm:text-xl flex-shrink-0"></i>
              <div class="text-left">
                <div class="text-xs font-bold text-white leading-tight">Authorised</div>
                <div class="text-[10px] sm:text-[11px] text-slate-400">Siemens Partner</div>
              </div>
            </div>
            <div class="flex items-center gap-2.5 sm:gap-3">
              <i class="fa-solid fa-headset text-[#00c8ff] text-lg sm:text-xl flex-shrink-0"></i>
              <div class="text-left">
                <div class="text-xs font-bold text-white leading-tight">Expert Support</div>
                <div class="text-[10px] sm:text-[11px] text-slate-400">Across India</div>
              </div>
            </div>
            <div class="flex items-center gap-2.5 sm:gap-3">
              <i class="fa-solid fa-microchip text-[#00c8ff] text-lg sm:text-xl flex-shrink-0"></i>
              <div class="text-left">
                <div class="text-xs font-bold text-white leading-tight">Industry-Focused</div>
                <div class="text-[10px] sm:text-[11px] text-slate-400">Solutions</div>
              </div>
            </div>
            <div class="flex items-center gap-2.5 sm:gap-3">
              <i class="fa-solid fa-chart-line text-[#00c8ff] text-lg sm:text-xl flex-shrink-0"></i>
              <div class="text-left">
                <div class="text-xs font-bold text-white leading-tight">Training &amp;</div>
                <div class="text-[10px] sm:text-[11px] text-slate-400">Implementation</div>
              </div>
            </div>
          </div>

        </div>

        <!-- Hero Right Column: Exact Cinematic Engineering Graphic in Dark Rounded Card -->
        <div class="lg:col-span-6 flex justify-center items-center relative pt-6 lg:pt-0">
          <div
            class="w-full max-w-[620px] rounded-2xl overflow-hidden border border-blue-500/30 bg-[#071329] shadow-2xl p-1 sm:p-1.5">
            <img src="assets/hero_visual.png"
              alt="Engineering Ideas Today for a Smarter Tomorrow - Siemens Digital Industries Software"
              class="w-full h-auto object-cover rounded-xl">
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- ================= 3. CLIENT LOGOS CAROUSEL (WHITE BACKGROUND) ================= -->
  <section class="py-6 sm:py-7 bg-white border-b border-slate-200">
    <div class="max-w-[1360px] mx-auto px-4 sm:px-6">
      <div class="flex items-center justify-between gap-3 sm:gap-6">

        <!-- Left Arrow -->
        <button id="logoPrevBtn" aria-label="Previous"
          class="w-8 h-8 rounded-full border border-slate-300 hover:border-[#0084d6] bg-white flex items-center justify-center text-slate-500 hover:text-[#0084d6] transition flex-shrink-0 text-xs shadow-sm">
          <i class="fa-solid fa-chevron-left text-[11px]"></i>
        </button>

        <!-- Official Vector Logos Strip in Original Colors -->
        <div
          class="flex-1 overflow-x-auto scrollbar-none flex items-center justify-start sm:justify-between gap-6 sm:gap-10 px-2 py-1"
          id="logoScroller">

          <div class="flex-shrink-0 h-10 flex items-center justify-center hover:scale-105 transition"
            title="Tata Motors / Tata Group">
            <img src="assets/logos/tata.svg" alt="Tata" class="h-8 sm:h-9 w-auto max-w-[110px] object-contain">
          </div>

          <div class="flex-shrink-0 h-10 flex items-center justify-center hover:scale-105 transition"
            title="Mahindra &amp; Mahindra">
            <img src="assets/logos/mahindra.svg" alt="Mahindra" class="h-7 sm:h-8 w-auto max-w-[125px] object-contain">
          </div>

          <div class="flex-shrink-0 h-10 flex items-center justify-center hover:scale-105 transition" title="Bosch">
            <img src="assets/logos/bosch.svg" alt="Bosch" class="h-7 sm:h-8 w-auto max-w-[115px] object-contain">
          </div>

          <div class="flex-shrink-0 h-10 flex items-center justify-center hover:scale-105 transition"
            title="Maruti Suzuki">
            <img src="assets/logos/maruti_suzuki.svg" alt="Maruti Suzuki"
              class="h-6 sm:h-7 w-auto max-w-[140px] object-contain">
          </div>

          <div class="flex-shrink-0 h-10 flex items-center justify-center hover:scale-105 transition"
            title="LG Electronics">
            <img src="assets/logos/lg.svg" alt="LG Electronics" class="h-7 sm:h-8 w-auto max-w-[70px] object-contain">
          </div>

          <div class="flex-shrink-0 h-10 flex items-center justify-center hover:scale-105 transition" title="Godrej">
            <img src="assets/logos/godrej.svg" alt="Godrej" class="h-6 sm:h-7 w-auto max-w-[100px] object-contain">
          </div>

          <div class="flex-shrink-0 h-10 flex items-center justify-center hover:scale-105 transition" title="Siemens">
            <img src="assets/logos/siemens.svg" alt="Siemens" class="h-6 sm:h-7 w-auto max-w-[120px] object-contain">
          </div>

        </div>

        <!-- Right Arrow -->
        <button id="logoNextBtn" aria-label="Next"
          class="w-8 h-8 rounded-full border border-slate-300 hover:border-[#0084d6] bg-white flex items-center justify-center text-slate-500 hover:text-[#0084d6] transition flex-shrink-0 text-xs shadow-sm">
          <i class="fa-solid fa-chevron-right text-[11px]"></i>
        </button>

      </div>
    </div>
  </section>


  <!-- ================= 4. SOLUTIONS SECTION (EXACT 2-COLUMN MATCH) ================= -->
  <section id="solutions" class="py-12 sm:py-16 bg-white border-b border-slate-200">
    <div class="max-w-[1360px] mx-auto px-4 sm:px-6">

      <div class="flex flex-col lg:flex-row gap-8 lg:gap-12 items-start">

        <!-- Left Side: Header & Overview Text -->
        <div class="lg:w-[32%] flex-shrink-0 flex flex-col justify-between space-y-5">
          <div class="space-y-4">
            <span class="text-xs font-bold uppercase tracking-wider text-[#0084d6] block">
              SIEMENS PLM SOFTWARE SOLUTIONS
            </span>
            <h2 class="text-2xl sm:text-3xl lg:text-[34px] font-black text-[#091124] leading-[1.18] tracking-tight">
              A Complete Portfolio for the Entire Product Development Journey
            </h2>
            <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
              From design and simulation to manufacturing and lifecycle management, we bring the full power of Siemens
              Digital Industries Software to your business.
            </p>
            <div class="pt-1">
              <a href="#portfolio-details"
                class="inline-flex items-center gap-1.5 text-xs sm:text-sm font-bold text-[#0084d6] hover:text-[#006cb0] group transition">
                <span>View All Solutions</span>
                <i class="fa-solid fa-arrow-right text-[11px] group-hover:translate-x-1 transition-transform"></i>
              </a>
            </div>
          </div>

          <!-- Added Balance: Value Points & Quick Consultation Card -->
          <div class="pt-4 border-t border-slate-100 space-y-3.5">
            <div class="space-y-2">
              <div class="flex items-center gap-2.5 text-xs text-slate-700 font-medium">
                <div
                  class="w-5 h-5 rounded-full bg-blue-50 text-[#0084d6] flex items-center justify-center flex-shrink-0 text-[10px]">
                  <i class="fa-solid fa-check"></i>
                </div>
                <span>Genuine Siemens Commercial Licensing</span>
              </div>
              <div class="flex items-center gap-2.5 text-xs text-slate-700 font-medium">
                <div
                  class="w-5 h-5 rounded-full bg-blue-50 text-[#0084d6] flex items-center justify-center flex-shrink-0 text-[10px]">
                  <i class="fa-solid fa-check"></i>
                </div>
                <span>End-to-End Implementation & Migration</span>
              </div>
              <div class="flex items-center gap-2.5 text-xs text-slate-700 font-medium">
                <div
                  class="w-5 h-5 rounded-full bg-blue-50 text-[#0084d6] flex items-center justify-center flex-shrink-0 text-[10px]">
                  <i class="fa-solid fa-check"></i>
                </div>
                <span>Certified Engineer Training & On-Site Support</span>
              </div>
            </div>

            <div
              class="bg-slate-50 border border-slate-200/80 rounded-xl p-3.5 flex items-center justify-between gap-3">
              <div>
                <p class="text-[11px] font-semibold text-slate-500">Need solution sizing?</p>
                <p class="text-xs font-bold text-[#091124]">Consult our Siemens Specialists</p>
              </div>
              <button onclick="openExpertModal()"
                class="px-3 py-1.5 bg-[#0084d6] hover:bg-[#006cb0] text-white text-xs font-semibold rounded-lg transition-colors flex-shrink-0 shadow-sm">
                Inquire Now
              </button>
            </div>
          </div>
        </div>

        <!-- Right Side: 8 Cards (4 columns x 2 rows) with thumb_*.png -->
        <div class="lg:w-[68%] w-full">
          <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 sm:gap-4">

            <!-- Card 1: NX CAD -->
            <a href="nx-ug.php"
              class="bg-[#060c1d] rounded-2xl overflow-hidden border border-[#14234b] hover:border-[#0084d6] transition-all duration-300 hover:shadow-xl hover:-translate-y-1 group flex flex-col">
              <div class="w-full h-24 sm:h-32 overflow-hidden bg-black/40">
                <img src="assets/card_nxcad.png" alt="NX CAD"
                  class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
              </div>
              <div class="p-3 sm:p-4 flex flex-col justify-between flex-1">
                <h4 class="text-xs sm:text-base font-bold text-white mb-0.5 sm:mb-1">NX CAD</h4>
                <span
                  class="text-[10px] sm:text-xs font-semibold text-[#00c8ff] group-hover:text-white transition-colors inline-flex items-center gap-1">
                  <span>Product Design</span>
                  <i class="fa-solid fa-arrow-right text-[9px] group-hover:translate-x-0.5 transition-transform"></i>
                </span>
              </div>
            </a>

            <!-- Card 2: NX CAM -->
            <a href="nx-ug.php#cam"
              class="bg-[#060c1d] rounded-2xl overflow-hidden border border-[#14234b] hover:border-[#0084d6] transition-all duration-300 hover:shadow-xl hover:-translate-y-1 group flex flex-col">
              <div class="w-full h-24 sm:h-32 overflow-hidden bg-black/40">
                <img src="assets/engineering_cad_main.jpg" alt="NX CAM"
                  class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
              </div>
              <div class="p-3 sm:p-4 flex flex-col justify-between flex-1">
                <h4 class="text-xs sm:text-base font-bold text-white mb-0.5 sm:mb-1">NX CAM</h4>
                <span
                  class="text-[10px] sm:text-xs font-semibold text-[#00c8ff] group-hover:text-white transition-colors inline-flex items-center gap-1">
                  <span>Manufacturing</span>
                  <i class="fa-solid fa-arrow-right text-[9px] group-hover:translate-x-0.5 transition-transform"></i>
                </span>
              </div>
            </a>

            <!-- Card 3: Teamcenter -->
            <a href="teamcenter.php"
              class="bg-[#060c1d] rounded-2xl overflow-hidden border border-[#14234b] hover:border-[#0084d6] transition-all duration-300 hover:shadow-xl hover:-translate-y-1 group flex flex-col">
              <div class="w-full h-24 sm:h-32 overflow-hidden bg-black/40">
                <img src="assets/solidedge_teamcenter.jpg" alt="Teamcenter"
                  class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
              </div>
              <div class="p-3 sm:p-4 flex flex-col justify-between flex-1">
                <h4 class="text-xs sm:text-base font-bold text-white mb-0.5 sm:mb-1">Teamcenter</h4>
                <span
                  class="text-[10px] sm:text-xs font-semibold text-[#00c8ff] group-hover:text-white transition-colors inline-flex items-center gap-1">
                  <span>PLM</span>
                  <i class="fa-solid fa-arrow-right text-[9px] group-hover:translate-x-0.5 transition-transform"></i>
                </span>
              </div>
            </a>

            <!-- Card 4: Solid Edge -->
            <a href="solid-edge.php"
              class="bg-[#060c1d] rounded-2xl overflow-hidden border border-[#14234b] hover:border-[#0084d6] transition-all duration-300 hover:shadow-xl hover:-translate-y-1 group flex flex-col">
              <div class="w-full h-24 sm:h-32 overflow-hidden bg-black/40">
                <img src="assets/card_solidedge.png" alt="Solid Edge"
                  class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
              </div>
              <div class="p-3 sm:p-4 flex flex-col justify-between flex-1">
                <h4 class="text-xs sm:text-base font-bold text-white mb-0.5 sm:mb-1">Solid Edge</h4>
                <span
                  class="text-[10px] sm:text-xs font-semibold text-[#00c8ff] group-hover:text-white transition-colors inline-flex items-center gap-1">
                  <span>Accessible 3D Design</span>
                  <i class="fa-solid fa-arrow-right text-[9px] group-hover:translate-x-0.5 transition-transform"></i>
                </span>
              </div>
            </a>

            <!-- Card 5: Simcenter -->
            <a href="star-ccm.php"
              class="bg-[#060c1d] rounded-2xl overflow-hidden border border-[#14234b] hover:border-[#0084d6] transition-all duration-300 hover:shadow-xl hover:-translate-y-1 group flex flex-col">
              <div class="w-full h-24 sm:h-32 overflow-hidden bg-black/40">
                <img src="assets/card_simcenter.png" alt="Simcenter"
                  class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
              </div>
              <div class="p-3 sm:p-4 flex flex-col justify-between flex-1">
                <h4 class="text-xs sm:text-base font-bold text-white mb-0.5 sm:mb-1">Simcenter</h4>
                <span
                  class="text-[10px] sm:text-xs font-semibold text-[#00c8ff] group-hover:text-white transition-colors inline-flex items-center gap-1">
                  <span>Simulation &amp; Testing</span>
                  <i class="fa-solid fa-arrow-right text-[9px] group-hover:translate-x-0.5 transition-transform"></i>
                </span>
              </div>
            </a>

            <!-- Card 6: Star-CCM+ -->
            <a href="star-ccm.php"
              class="bg-[#060c1d] rounded-2xl overflow-hidden border border-[#14234b] hover:border-[#0084d6] transition-all duration-300 hover:shadow-xl hover:-translate-y-1 group flex flex-col">
              <div class="w-full h-24 sm:h-32 overflow-hidden bg-black/40">
                <img src="assets/card_starccm.png" alt="Star-CCM+"
                  class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
              </div>
              <div class="p-3 sm:p-4 flex flex-col justify-between flex-1">
                <h4 class="text-xs sm:text-base font-bold text-white mb-0.5 sm:mb-1">Star-CCM+</h4>
                <span
                  class="text-[10px] sm:text-xs font-semibold text-[#00c8ff] group-hover:text-white transition-colors inline-flex items-center gap-1">
                  <span>CFD &amp; Multiphysics</span>
                  <i class="fa-solid fa-arrow-right text-[9px] group-hover:translate-x-0.5 transition-transform"></i>
                </span>
              </div>
            </a>

            <!-- Card 7: FloTHERM XT -->
            <a href="flotherm-xt.php"
              class="bg-[#060c1d] rounded-2xl overflow-hidden border border-[#14234b] hover:border-[#0084d6] transition-all duration-300 hover:shadow-xl hover:-translate-y-1 group flex flex-col">
              <div class="w-full h-24 sm:h-32 overflow-hidden bg-black/40">
                <img src="assets/card_flotherm.png" alt="FloTHERM XT"
                  class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
              </div>
              <div class="p-3 sm:p-4 flex flex-col justify-between flex-1">
                <h4 class="text-xs sm:text-base font-bold text-white mb-0.5 sm:mb-1">FloTHERM XT</h4>
                <span
                  class="text-[10px] sm:text-xs font-semibold text-[#00c8ff] group-hover:text-white transition-colors inline-flex items-center gap-1">
                  <span>Thermal Analysis</span>
                  <i class="fa-solid fa-arrow-right text-[9px] group-hover:translate-x-0.5 transition-transform"></i>
                </span>
              </div>
            </a>

            <!-- Card 8: Tecnomatix -->
            <a href="services.php"
              class="bg-[#060c1d] rounded-2xl overflow-hidden border border-[#14234b] hover:border-[#0084d6] transition-all duration-300 hover:shadow-xl hover:-translate-y-1 group flex flex-col">
              <div class="w-full h-24 sm:h-32 overflow-hidden bg-black/40">
                <img src="assets/card_tecnomatix.png" alt="Tecnomatix"
                  class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
              </div>
              <div class="p-3 sm:p-4 flex flex-col justify-between flex-1">
                <h4 class="text-xs sm:text-base font-bold text-white mb-0.5 sm:mb-1">Tecnomatix</h4>
                <span
                  class="text-[10px] sm:text-xs font-semibold text-[#00c8ff] group-hover:text-white transition-colors inline-flex items-center gap-1">
                  <span>Manufacturing Planning</span>
                  <i class="fa-solid fa-arrow-right text-[9px] group-hover:translate-x-0.5 transition-transform"></i>
                </span>
              </div>
            </a>

          </div>
        </div>

      </div>

    </div>
  </section>


  <!-- ================= 5. INDUSTRIES WE SERVE ================= -->
  <section id="industries"
    class="py-12 sm:py-16 bg-[#040817] text-white border-b border-slate-800 relative overflow-hidden">
    <div class="max-w-[1360px] mx-auto px-4 sm:px-6">

      <div class="flex flex-col lg:flex-row gap-8 lg:gap-10 items-start lg:items-center">

        <!-- Left Side: Copy & CTA Button -->
        <div class="lg:w-[30%] flex-shrink-0 space-y-4">
          <span class="text-xs font-bold uppercase tracking-wider text-[#00c8ff] block">
            INDUSTRIES WE SERVE
          </span>
          <h2 class="text-2xl sm:text-4xl font-black text-white leading-tight">
            Innovating<br>Across Industries
          </h2>
          <p class="text-slate-300 text-xs sm:text-sm leading-relaxed">
            We work with leading companies across industries to solve real engineering challenges with Siemens
            solutions.
          </p>
          <div class="pt-2">
            <a href="services.php"
              class="inline-flex items-center gap-2 bg-[#0084d6] hover:bg-[#0074be] text-white text-xs sm:text-sm font-bold px-6 py-3 rounded-full transition shadow-lg shadow-blue-500/20 active:scale-95">
              <span>Explore Industries</span>
              <i class="fa-solid fa-arrow-right text-[11px]"></i>
            </a>
          </div>
        </div>

        <!-- Right Side: 6 Industry Portrait Cards -->
        <div class="lg:w-[70%] w-full">

          <!-- Top Arrow Controls -->
          <div class="flex justify-end gap-2 mb-3">
            <button id="indPrevBtn" aria-label="Previous Industry"
              class="w-7 h-7 rounded-full bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white flex items-center justify-center text-[10px] transition border border-slate-700">
              <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button id="indNextBtn" aria-label="Next Industry"
              class="w-7 h-7 rounded-full bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white flex items-center justify-center text-[10px] transition border border-slate-700">
              <i class="fa-solid fa-chevron-right"></i>
            </button>
          </div>

          <!-- Cards Row -->
          <div
            class="flex lg:grid lg:grid-cols-6 gap-3 sm:gap-3.5 overflow-x-auto lg:overflow-visible pb-2 lg:pb-0 scrollbar-none snap-x snap-mandatory"
            id="industriesScroller">

            <!-- 1. Automotive -->
            <a href="nx-ug.php"
              class="w-[145px] sm:w-[170px] lg:w-auto flex-shrink-0 snap-start group relative rounded-2xl overflow-hidden aspect-[9/15] bg-[#081024] border border-slate-800 hover:border-[#0084d6] transition-all duration-300 hover:-translate-y-1 hover:shadow-xl flex flex-col justify-end p-3 sm:p-3.5">
              <img src="assets/ind_automotive_hd.jpg" alt="Automotive"
                class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
              <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/35 to-transparent"></div>
              <div class="relative z-10">
                <h4
                  class="text-xs sm:text-[13px] font-bold text-white group-hover:text-[#00c8ff] transition-colors leading-snug">
                  Automotive</h4>
                <span
                  class="text-slate-400 group-hover:text-white group-hover:translate-x-1 inline-block transition-all text-xs mt-1">â†’</span>
              </div>
            </a>

            <!-- 2. Aerospace & Defense -->
            <a href="nx-ug.php"
              class="w-[145px] sm:w-[170px] lg:w-auto flex-shrink-0 snap-start group relative rounded-2xl overflow-hidden aspect-[9/15] bg-[#081024] border border-slate-800 hover:border-[#0084d6] transition-all duration-300 hover:-translate-y-1 hover:shadow-xl flex flex-col justify-end p-3 sm:p-3.5">
              <img src="assets/ind_aerospace_hd.jpg" alt="Aerospace & Defense"
                class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
              <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/35 to-transparent"></div>
              <div class="relative z-10">
                <h4
                  class="text-xs sm:text-[13px] font-bold text-white group-hover:text-[#00c8ff] transition-colors leading-snug">
                  Aerospace<br>&amp; Defense</h4>
                <span
                  class="text-slate-400 group-hover:text-white group-hover:translate-x-1 inline-block transition-all text-xs mt-1">â†’</span>
              </div>
            </a>

            <!-- 3. Industrial Machinery -->
            <a href="services.php"
              class="w-[145px] sm:w-[170px] lg:w-auto flex-shrink-0 snap-start group relative rounded-2xl overflow-hidden aspect-[9/15] bg-[#081024] border border-slate-800 hover:border-[#0084d6] transition-all duration-300 hover:-translate-y-1 hover:shadow-xl flex flex-col justify-end p-3 sm:p-3.5">
              <img src="assets/ind_machinery_hd.jpg" alt="Industrial Machinery"
                class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
              <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/35 to-transparent"></div>
              <div class="relative z-10">
                <h4
                  class="text-xs sm:text-[13px] font-bold text-white group-hover:text-[#00c8ff] transition-colors leading-snug">
                  Industrial<br>Machinery</h4>
                <span
                  class="text-slate-400 group-hover:text-white group-hover:translate-x-1 inline-block transition-all text-xs mt-1">â†’</span>
              </div>
            </a>

            <!-- 4. Consumer Products -->
            <a href="solid-edge.php"
              class="w-[145px] sm:w-[170px] lg:w-auto flex-shrink-0 snap-start group relative rounded-2xl overflow-hidden aspect-[9/15] bg-[#081024] border border-slate-800 hover:border-[#0084d6] transition-all duration-300 hover:-translate-y-1 hover:shadow-xl flex flex-col justify-end p-3 sm:p-3.5">
              <img src="assets/ind_consumer_hd.jpg" alt="Consumer Products"
                class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
              <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/35 to-transparent"></div>
              <div class="relative z-10">
                <h4
                  class="text-xs sm:text-[13px] font-bold text-white group-hover:text-[#00c8ff] transition-colors leading-snug">
                  Consumer<br>Products</h4>
                <span
                  class="text-slate-400 group-hover:text-white group-hover:translate-x-1 inline-block transition-all text-xs mt-1">â†’</span>
              </div>
            </a>

            <!-- 5. Energy & Utilities -->
            <a href="star-ccm.php"
              class="w-[145px] sm:w-[170px] lg:w-auto flex-shrink-0 snap-start group relative rounded-2xl overflow-hidden aspect-[9/15] bg-[#081024] border border-slate-800 hover:border-[#0084d6] transition-all duration-300 hover:-translate-y-1 hover:shadow-xl flex flex-col justify-end p-3 sm:p-3.5">
              <img src="assets/ind_energy_hd.jpg" alt="Energy & Utilities"
                class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
              <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/35 to-transparent"></div>
              <div class="relative z-10">
                <h4
                  class="text-xs sm:text-[13px] font-bold text-white group-hover:text-[#00c8ff] transition-colors leading-snug">
                  Energy<br>&amp; Utilities</h4>
                <span
                  class="text-slate-400 group-hover:text-white group-hover:translate-x-1 inline-block transition-all text-xs mt-1">â†’</span>
              </div>
            </a>

            <!-- 6. Medical Devices -->
            <a href="nx-ug.php"
              class="w-[145px] sm:w-[170px] lg:w-auto flex-shrink-0 snap-start group relative rounded-2xl overflow-hidden aspect-[9/15] bg-[#081024] border border-slate-800 hover:border-[#0084d6] transition-all duration-300 hover:-translate-y-1 hover:shadow-xl flex flex-col justify-end p-3 sm:p-3.5">
              <img src="assets/ind_medical_hd.jpg" alt="Medical Devices"
                class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
              <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/35 to-transparent"></div>
              <div class="relative z-10">
                <h4
                  class="text-xs sm:text-[13px] font-bold text-white group-hover:text-[#00c8ff] transition-colors leading-snug">
                  Medical<br>Devices</h4>
                <span
                  class="text-slate-400 group-hover:text-white group-hover:translate-x-1 inline-block transition-all text-xs mt-1">â†’</span>
              </div>
            </a>

          </div>

        </div>

      </div>

    </div>
  </section>


  <!-- ================= 6. OUR APPROACH ================= -->
  <section class="py-14 sm:py-20 bg-white border-b border-slate-200">
    <div class="max-w-[1360px] mx-auto px-4 sm:px-6">

      <!-- Top Header Row: Full Width & Balanced -->
      <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-10 sm:mb-14">
        <div class="max-w-2xl space-y-2.5">
          <span class="text-xs font-bold uppercase tracking-wider text-[#0084d6] block">
            OUR STRUCTURED METHODOLOGY
          </span>
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-[#091124] tracking-tight leading-[1.15]">
            From Vision to Real-World Impact
          </h2>
          <p class="text-slate-600 text-xs sm:text-sm leading-relaxed max-w-xl">
            We follow a proven 5-stage deployment framework to ensure maximum adoption, faster ROI, and zero disruption
            across your engineering lifecycle.
          </p>
        </div>
        <div class="flex-shrink-0">
          <a href="services.php"
            class="inline-flex items-center gap-2 border border-[#0084d6] text-[#0084d6] hover:bg-[#0084d6] hover:text-white text-xs sm:text-sm font-bold px-6 py-2.5 rounded-full transition-all duration-200 active:scale-95 shadow-sm">
            <span>Explore All Services</span>
            <i class="fa-solid fa-arrow-right text-[10px]"></i>
          </a>
        </div>
      </div>

      <!-- 5-Step Process Cards: Full Width, Spacious, Elevated -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4 lg:gap-5">

        <!-- Step 1 -->
        <div
          class="bg-slate-50/80 hover:bg-white rounded-2xl p-5 sm:p-6 border border-slate-200/80 hover:border-[#0084d6] transition-all duration-300 hover:shadow-xl hover:-translate-y-1 flex flex-col justify-between group relative">
          <div>
            <div class="flex items-center justify-between mb-4">
              <div
                class="w-12 h-12 rounded-xl bg-white group-hover:bg-[#0084d6] text-[#0084d6] group-hover:text-white border border-slate-200/70 group-hover:border-[#0084d6] flex items-center justify-center text-lg shadow-sm transition-all duration-300 flex-shrink-0">
                <i class="fa-solid fa-bullseye"></i>
              </div>
              <span
                class="text-xs font-black tracking-wider text-[#0084d6] bg-blue-50 px-2.5 py-1 rounded-full border border-blue-100">01</span>
            </div>
            <h4 class="text-sm sm:text-base font-bold text-[#091124] group-hover:text-[#0084d6] transition-colors mb-2">
              Understand Your Goals
            </h4>
            <p class="text-xs text-slate-500 leading-relaxed">
              In-depth audit of your CAD/CAM/PLM bottlenecks and digital objectives.
            </p>
          </div>
          <div
            class="hidden lg:block absolute -right-3 top-1/2 -translate-y-1/2 z-10 text-slate-300 group-hover:text-[#0084d6] transition-colors text-xs pointer-events-none">
            <i class="fa-solid fa-chevron-right"></i>
          </div>
        </div>

        <!-- Step 2 -->
        <div
          class="bg-slate-50/80 hover:bg-white rounded-2xl p-5 sm:p-6 border border-slate-200/80 hover:border-[#0084d6] transition-all duration-300 hover:shadow-xl hover:-translate-y-1 flex flex-col justify-between group relative">
          <div>
            <div class="flex items-center justify-between mb-4">
              <div
                class="w-12 h-12 rounded-xl bg-white group-hover:bg-[#0084d6] text-[#0084d6] group-hover:text-white border border-slate-200/70 group-hover:border-[#0084d6] flex items-center justify-center text-lg shadow-sm transition-all duration-300 flex-shrink-0">
                <i class="fa-solid fa-laptop-code"></i>
              </div>
              <span
                class="text-xs font-black tracking-wider text-[#0084d6] bg-blue-50 px-2.5 py-1 rounded-full border border-blue-100">02</span>
            </div>
            <h4 class="text-sm sm:text-base font-bold text-[#091124] group-hover:text-[#0084d6] transition-colors mb-2">
              Recommend Solutions
            </h4>
            <p class="text-xs text-slate-500 leading-relaxed">
              Curate the exact Siemens modules, licensing, and infrastructure fit.
            </p>
          </div>
          <div
            class="hidden lg:block absolute -right-3 top-1/2 -translate-y-1/2 z-10 text-slate-300 group-hover:text-[#0084d6] transition-colors text-xs pointer-events-none">
            <i class="fa-solid fa-chevron-right"></i>
          </div>
        </div>

        <!-- Step 3 -->
        <div
          class="bg-slate-50/80 hover:bg-white rounded-2xl p-5 sm:p-6 border border-slate-200/80 hover:border-[#0084d6] transition-all duration-300 hover:shadow-xl hover:-translate-y-1 flex flex-col justify-between group relative">
          <div>
            <div class="flex items-center justify-between mb-4">
              <div
                class="w-12 h-12 rounded-xl bg-white group-hover:bg-[#0084d6] text-[#0084d6] group-hover:text-white border border-slate-200/70 group-hover:border-[#0084d6] flex items-center justify-center text-lg shadow-sm transition-all duration-300 flex-shrink-0">
                <i class="fa-solid fa-gears"></i>
              </div>
              <span
                class="text-xs font-black tracking-wider text-[#0084d6] bg-blue-50 px-2.5 py-1 rounded-full border border-blue-100">03</span>
            </div>
            <h4 class="text-sm sm:text-base font-bold text-[#091124] group-hover:text-[#0084d6] transition-colors mb-2">
              Implement &amp; Customize
            </h4>
            <p class="text-xs text-slate-500 leading-relaxed">
              Seamless deployment, data migration, post-processor &amp; workflow setup.
            </p>
          </div>
          <div
            class="hidden lg:block absolute -right-3 top-1/2 -translate-y-1/2 z-10 text-slate-300 group-hover:text-[#0084d6] transition-colors text-xs pointer-events-none">
            <i class="fa-solid fa-chevron-right"></i>
          </div>
        </div>

        <!-- Step 4 -->
        <div
          class="bg-slate-50/80 hover:bg-white rounded-2xl p-5 sm:p-6 border border-slate-200/80 hover:border-[#0084d6] transition-all duration-300 hover:shadow-xl hover:-translate-y-1 flex flex-col justify-between group relative">
          <div>
            <div class="flex items-center justify-between mb-4">
              <div
                class="w-12 h-12 rounded-xl bg-white group-hover:bg-[#0084d6] text-[#0084d6] group-hover:text-white border border-slate-200/70 group-hover:border-[#0084d6] flex items-center justify-center text-lg shadow-sm transition-all duration-300 flex-shrink-0">
                <i class="fa-solid fa-users"></i>
              </div>
              <span
                class="text-xs font-black tracking-wider text-[#0084d6] bg-blue-50 px-2.5 py-1 rounded-full border border-blue-100">04</span>
            </div>
            <h4 class="text-sm sm:text-base font-bold text-[#091124] group-hover:text-[#0084d6] transition-colors mb-2">
              Train Your Team
            </h4>
            <p class="text-xs text-slate-500 leading-relaxed">
              Hands-on corporate training, masterclasses, and certified coaching.
            </p>
          </div>
          <div
            class="hidden lg:block absolute -right-3 top-1/2 -translate-y-1/2 z-10 text-slate-300 group-hover:text-[#0084d6] transition-colors text-xs pointer-events-none">
            <i class="fa-solid fa-chevron-right"></i>
          </div>
        </div>

        <!-- Step 5 -->
        <div
          class="bg-slate-50/80 hover:bg-white rounded-2xl p-5 sm:p-6 border border-slate-200/80 hover:border-[#0084d6] transition-all duration-300 hover:shadow-xl hover:-translate-y-1 flex flex-col justify-between group relative">
          <div>
            <div class="flex items-center justify-between mb-4">
              <div
                class="w-12 h-12 rounded-xl bg-white group-hover:bg-[#0084d6] text-[#0084d6] group-hover:text-white border border-slate-200/70 group-hover:border-[#0084d6] flex items-center justify-center text-lg shadow-sm transition-all duration-300 flex-shrink-0">
                <i class="fa-solid fa-headset"></i>
              </div>
              <span
                class="text-xs font-black tracking-wider text-[#0084d6] bg-blue-50 px-2.5 py-1 rounded-full border border-blue-100">05</span>
            </div>
            <h4 class="text-sm sm:text-base font-bold text-[#091124] group-hover:text-[#0084d6] transition-colors mb-2">
              Ongoing Support
            </h4>
            <p class="text-xs text-slate-500 leading-relaxed">
              Dedicated helpdesk, priority technical support, and version upgrades.
            </p>
          </div>
        </div>

      </div>

    </div>
  </section>



  <!-- ================= 7. STATS BANNER ================= -->
  <section class="bg-[#040c1d] border-b border-slate-800 text-white relative overflow-hidden py-8 sm:py-12">
    <!-- Blueprint Car Texture in Background -->
    <div class="absolute right-0 top-0 bottom-0 w-full sm:w-1/2 flex justify-end pointer-events-none opacity-40">
      <img src="assets/blueprint_car_hd.jpg" alt="Blueprint Car"
        class="h-full w-auto object-cover object-right opacity-30">
    </div>
    <div class="absolute inset-0 bg-gradient-to-r from-[#040c1d] via-[#040c1d]/90 to-transparent pointer-events-none">
    </div>

    <div class="max-w-[1360px] mx-auto px-4 sm:px-6 relative z-10">
      <div class="grid grid-cols-2 md:grid-cols-4 gap-6 sm:gap-10 items-center">

        <!-- Stat 1 -->
        <div class="flex items-center gap-4 sm:gap-5">
          <div
            class="w-12 h-12 sm:w-16 sm:h-16 rounded-2xl bg-gradient-to-br from-[#0084d6]/25 to-[#00c8ff]/10 border border-[#00c8ff]/35 text-[#00c8ff] flex items-center justify-center text-xl sm:text-2xl shadow-[0_0_20px_rgba(0,200,255,0.18)] flex-shrink-0">
            <i class="fa-solid fa-award"></i>
          </div>
          <div>
            <div class="text-2xl sm:text-3xl lg:text-4xl font-black text-white leading-none">10+</div>
            <div class="text-xs sm:text-sm text-slate-300 font-medium mt-1.5 leading-tight">Years of Experience</div>
          </div>
        </div>

        <!-- Stat 2 -->
        <div class="flex items-center gap-4 sm:gap-5">
          <div
            class="w-12 h-12 sm:w-16 sm:h-16 rounded-2xl bg-gradient-to-br from-[#0084d6]/25 to-[#00c8ff]/10 border border-[#00c8ff]/35 text-[#00c8ff] flex items-center justify-center text-xl sm:text-2xl shadow-[0_0_20px_rgba(0,200,255,0.18)] flex-shrink-0">
            <i class="fa-solid fa-handshake-angle"></i>
          </div>
          <div>
            <div class="text-2xl sm:text-3xl lg:text-4xl font-black text-white leading-none">200+</div>
            <div class="text-xs sm:text-sm text-slate-300 font-medium mt-1.5 leading-tight">Happy Clients</div>
          </div>
        </div>

        <!-- Stat 3 -->
        <div class="flex items-center gap-4 sm:gap-5">
          <div
            class="w-12 h-12 sm:w-16 sm:h-16 rounded-2xl bg-gradient-to-br from-[#0084d6]/25 to-[#00c8ff]/10 border border-[#00c8ff]/35 text-[#00c8ff] flex items-center justify-center text-xl sm:text-2xl shadow-[0_0_20px_rgba(0,200,255,0.18)] flex-shrink-0">
            <i class="fa-solid fa-circle-check"></i>
          </div>
          <div>
            <div class="text-2xl sm:text-3xl lg:text-4xl font-black text-white leading-none">500+</div>
            <div class="text-xs sm:text-sm text-slate-300 font-medium mt-1.5 leading-tight">Successful Projects</div>
          </div>
        </div>

        <!-- Stat 4 -->
        <div class="flex items-center gap-4 sm:gap-5">
          <div
            class="w-12 h-12 sm:w-16 sm:h-16 rounded-2xl bg-gradient-to-br from-[#0084d6]/25 to-[#00c8ff]/10 border border-[#00c8ff]/35 text-[#00c8ff] flex items-center justify-center text-xl sm:text-2xl shadow-[0_0_20px_rgba(0,200,255,0.18)] flex-shrink-0">
            <i class="fa-solid fa-user-shield"></i>
          </div>
          <div>
            <div class="text-2xl sm:text-3xl lg:text-4xl font-black text-white leading-none">50+</div>
            <div class="text-xs sm:text-sm text-slate-300 font-medium mt-1.5 leading-tight">Certified Experts</div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- ================= 8. SIEMENS PARTNERSHIP BANNER ================= -->
  <section class="py-14 sm:py-16 bg-white border-b border-slate-200">
    <div class="max-w-[1360px] mx-auto px-4 sm:px-6">

      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">

        <!-- Left: Siemens Brand Column -->
        <div class="lg:col-span-3 space-y-3">
          <div class="flex items-center">
            <img src="assets/logos/siemens.svg" alt="Siemens" class="h-9 sm:h-10 w-auto object-contain">
          </div>
          <p class="text-xs font-semibold text-slate-600">
            Authorised Channel Partner
          </p>
          <div class="w-12 h-1 bg-[#0084d6] rounded-full"></div>
        </div>

        <!-- Middle: Narrative & CTA -->
        <div class="lg:col-span-4 space-y-4">
          <h3 class="text-2xl sm:text-3xl font-black text-[#091124] leading-tight">
            Partnering for a<br>Smarter Tomorrow
          </h3>
          <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
            As an authorised channel partner for Siemens Digital Industries Software, NXG Hightech provides genuine
            software, expert consultation, implementation and ongoing support.
          </p>
          <div class="pt-1">
            <button onclick="openExpertModal()"
              class="inline-flex items-center gap-2 border border-[#0084d6] text-[#0084d6] hover:bg-[#0084d6] hover:text-white text-xs sm:text-sm font-bold px-6 py-2.5 rounded-full transition active:scale-95 shadow-sm">
              <span>About Our Partnership</span>
              <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </button>
          </div>
        </div>

        <!-- Right: Siemens Building & Capabilities Card (Desktop Floating, Mobile 2x2 Grid) -->
        <div
          class="lg:col-span-5 relative rounded-2xl overflow-hidden border border-slate-200 shadow-xl group bg-slate-900">
          <div class="relative h-56 sm:h-[340px] w-full overflow-hidden">
            <img src="assets/siemens_building_hd.jpg" alt="Siemens Channel Partner Headquarters"
              class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
            <div
              class="absolute inset-0 bg-gradient-to-t sm:bg-gradient-to-r from-black/80 via-black/40 to-transparent">
            </div>

            <!-- Siemens Logo Badge -->
            <div
              class="absolute top-3 sm:top-4 left-3 sm:left-4 bg-white/95 backdrop-blur-md px-2.5 sm:px-3 py-1 sm:py-1.5 rounded-lg border border-white/50 shadow-md z-10">
              <img src="assets/logos/siemens.svg" alt="Siemens" class="h-3.5 sm:h-4 w-auto">
            </div>

            <!-- Desktop Floating Translucent Capability Card -->
            <div
              class="hidden sm:flex absolute bottom-4 right-4 top-4 w-52 bg-[#050f24]/90 backdrop-blur-md rounded-xl border border-white/15 p-3.5 flex-col justify-between shadow-2xl text-white z-10">
              <div class="space-y-2.5">
                <div class="flex items-center gap-2.5 text-xs font-semibold">
                  <div
                    class="w-6 h-6 rounded-lg bg-cyan-500/15 border border-cyan-400/25 text-[#00c8ff] flex items-center justify-center text-[10px]">
                    <i class="fa-solid fa-certificate"></i>
                  </div>
                  <span>Genuine Licenses</span>
                </div>
                <div class="flex items-center gap-2.5 text-xs font-semibold">
                  <div
                    class="w-6 h-6 rounded-lg bg-cyan-500/15 border border-cyan-400/25 text-[#00c8ff] flex items-center justify-center text-[10px]">
                    <i class="fa-solid fa-user-tie"></i>
                  </div>
                  <span>Expert Consultation</span>
                </div>
                <div class="flex items-center gap-2.5 text-xs font-semibold">
                  <div
                    class="w-6 h-6 rounded-lg bg-cyan-500/15 border border-cyan-400/25 text-[#00c8ff] flex items-center justify-center text-[10px]">
                    <i class="fa-solid fa-gears"></i>
                  </div>
                  <span>Implementation Support</span>
                </div>
                <div class="flex items-center gap-2.5 text-xs font-semibold">
                  <div
                    class="w-6 h-6 rounded-lg bg-cyan-500/15 border border-cyan-400/25 text-[#00c8ff] flex items-center justify-center text-[10px]">
                    <i class="fa-solid fa-graduation-cap"></i>
                  </div>
                  <span>Training &amp; Certification</span>
                </div>
              </div>
              <div
                class="text-[9px] text-cyan-400 font-bold tracking-wider uppercase border-t border-white/10 pt-2 flex items-center justify-between">
                <span>Siemens Certified</span>
                <i class="fa-solid fa-shield-check text-[#00c8ff]"></i>
              </div>
            </div>
          </div>

          <!-- Mobile Capability Badges (2x2 Grid Stacked Below Photo) -->
          <div class="sm:hidden bg-[#061026] p-4 border-t border-white/10 grid grid-cols-2 gap-2.5 text-white">
            <div
              class="flex items-center gap-2 text-[11px] font-semibold bg-white/5 p-2 rounded-lg border border-white/10">
              <div
                class="w-5 h-5 rounded-md bg-cyan-500/15 border border-cyan-400/25 text-[#00c8ff] flex items-center justify-center text-[9px] flex-shrink-0">
                <i class="fa-solid fa-certificate"></i>
              </div>
              <span class="leading-tight">Genuine Licenses</span>
            </div>
            <div
              class="flex items-center gap-2 text-[11px] font-semibold bg-white/5 p-2 rounded-lg border border-white/10">
              <div
                class="w-5 h-5 rounded-md bg-cyan-500/15 border border-cyan-400/25 text-[#00c8ff] flex items-center justify-center text-[9px] flex-shrink-0">
                <i class="fa-solid fa-user-tie"></i>
              </div>
              <span class="leading-tight">Expert Consultation</span>
            </div>
            <div
              class="flex items-center gap-2 text-[11px] font-semibold bg-white/5 p-2 rounded-lg border border-white/10">
              <div
                class="w-5 h-5 rounded-md bg-cyan-500/15 border border-cyan-400/25 text-[#00c8ff] flex items-center justify-center text-[9px] flex-shrink-0">
                <i class="fa-solid fa-gears"></i>
              </div>
              <span class="leading-tight">Implementation</span>
            </div>
            <div
              class="flex items-center gap-2 text-[11px] font-semibold bg-white/5 p-2 rounded-lg border border-white/10">
              <div
                class="w-5 h-5 rounded-md bg-cyan-500/15 border border-cyan-400/25 text-[#00c8ff] flex items-center justify-center text-[9px] flex-shrink-0">
                <i class="fa-solid fa-graduation-cap"></i>
              </div>
              <span class="leading-tight">Training &amp; Cert</span>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>



  <!-- ================= 9. WHY NXG HIGHTECH ================= -->
  <section id="about" class="bg-[#040c1d] border-b border-slate-800 text-white py-14 sm:py-16 relative overflow-hidden">
    <div class="max-w-[1360px] mx-auto px-4 sm:px-6">

      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-center">

        <!-- Left: Headline & CTA -->
        <div class="lg:col-span-4 space-y-4">
          <span class="text-xs font-bold uppercase tracking-wider text-[#00c8ff] block">
            WHY NXG HIGHTECH
          </span>
          <h2 class="text-2xl sm:text-4xl font-black text-white leading-tight">
            Your Engineering<br>Transformation Partner
          </h2>
          <div class="pt-2">
            <a href="contact-us.php"
              class="inline-flex items-center gap-2 bg-[#0084d6] hover:bg-[#0074be] text-white text-xs sm:text-sm font-bold px-6 py-3 rounded-full transition shadow-lg shadow-blue-500/20 active:scale-95">
              <span>Get in Touch</span>
              <i class="fa-solid fa-arrow-right text-[11px]"></i>
            </a>
          </div>
        </div>

        <!-- Middle: 4 Key Value Checkmarks -->
        <div class="lg:col-span-4 space-y-3.5">
          <div class="flex items-center gap-3">
            <div
              class="w-5 h-5 rounded-full bg-[#0084d6] text-white flex items-center justify-center text-[10px] flex-shrink-0 shadow-sm">
              <i class="fa-solid fa-check"></i>
            </div>
            <span class="text-xs sm:text-sm text-slate-200 font-medium">Deep domain expertise</span>
          </div>
          <div class="flex items-center gap-3">
            <div
              class="w-5 h-5 rounded-full bg-[#0084d6] text-white flex items-center justify-center text-[10px] flex-shrink-0 shadow-sm">
              <i class="fa-solid fa-check"></i>
            </div>
            <span class="text-xs sm:text-sm text-slate-200 font-medium">Proven implementation methodology</span>
          </div>
          <div class="flex items-center gap-3">
            <div
              class="w-5 h-5 rounded-full bg-[#0084d6] text-white flex items-center justify-center text-[10px] flex-shrink-0 shadow-sm">
              <i class="fa-solid fa-check"></i>
            </div>
            <span class="text-xs sm:text-sm text-slate-200 font-medium">Dedicated support team</span>
          </div>
          <div class="flex items-center gap-3">
            <div
              class="w-5 h-5 rounded-full bg-[#0084d6] text-white flex items-center justify-center text-[10px] flex-shrink-0 shadow-sm">
              <i class="fa-solid fa-check"></i>
            </div>
            <span class="text-xs sm:text-sm text-slate-200 font-medium">Focus on measurable business outcomes</span>
          </div>
        </div>

        <!-- Right: Digital Twin Holographic Car with Callouts (Crystal-Clear HD) -->
        <div class="lg:col-span-4 relative flex items-center justify-center group">
          <div
            class="relative rounded-2xl overflow-hidden border border-blue-500/30 shadow-2xl bg-[#06122c] w-full max-w-[460px]">
            <img src="assets/blueprint_car_hd.jpg" alt="Digital Twin Transformation"
              class="w-full h-auto object-cover group-hover:scale-105 transition-transform duration-700 opacity-90">
            <div
              class="absolute inset-0 bg-gradient-to-t from-[#040c1d] via-transparent to-transparent pointer-events-none">
            </div>

            <!-- Callout Badges Overlaid with Crisp Vectors (Mobile Responsive) -->
            <div
              class="absolute top-2 left-2 bg-[#030919]/90 backdrop-blur-md border border-cyan-400/30 px-2 py-0.5 sm:px-2.5 sm:py-1 rounded-full flex items-center gap-1 sm:gap-1.5 shadow-lg">
              <i class="fa-solid fa-bolt text-[#00c8ff] text-[8px] sm:text-[10px]"></i>
              <span class="text-[8.5px] sm:text-[10px] font-bold text-white whitespace-nowrap">Faster
                Time-to-Market</span>
            </div>

            <div
              class="absolute top-2 right-2 bg-[#030919]/90 backdrop-blur-md border border-cyan-400/30 px-2 py-0.5 sm:px-2.5 sm:py-1 rounded-full flex items-center gap-1 sm:gap-1.5 shadow-lg">
              <i class="fa-solid fa-award text-[#00c8ff] text-[8px] sm:text-[10px]"></i>
              <span class="text-[8.5px] sm:text-[10px] font-bold text-white whitespace-nowrap">Better Quality</span>
            </div>

            <div
              class="absolute bottom-2 left-2 bg-[#030919]/90 backdrop-blur-md border border-cyan-400/30 px-2 py-0.5 sm:px-2.5 sm:py-1 rounded-full flex items-center gap-1 sm:gap-1.5 shadow-lg">
              <i class="fa-solid fa-chart-line-down text-[#00c8ff] text-[8px] sm:text-[10px]"></i>
              <span class="text-[8.5px] sm:text-[10px] font-bold text-white whitespace-nowrap">Reduced Cost</span>
            </div>

            <div
              class="absolute bottom-2 right-2 bg-[#030919]/90 backdrop-blur-md border border-cyan-400/30 px-2 py-0.5 sm:px-2.5 sm:py-1 rounded-full flex items-center gap-1 sm:gap-1.5 shadow-lg">
              <i class="fa-solid fa-lightbulb text-[#00c8ff] text-[8px] sm:text-[10px]"></i>
              <span class="text-[8.5px] sm:text-[10px] font-bold text-white whitespace-nowrap">Higher Innovation</span>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>


  <!-- ================= 10. TESTIMONIALS ================= -->
  <section class="py-12 sm:py-16 bg-white border-b border-slate-200">
    <div class="max-w-[1360px] mx-auto px-4 sm:px-6">

      <!-- Top Row Header -->
      <div class="flex flex-col sm:flex-row items-start sm:items-end justify-between gap-4 mb-10">
        <div>
          <span class="text-xs font-bold uppercase tracking-wider text-[#0084d6] block mb-1">TESTIMONIALS</span>
          <h2 class="text-2xl sm:text-3xl font-extrabold text-[#091124]">What Our Clients Say</h2>
        </div>
        <div class="flex items-center gap-4">
          <a href="contact-us.php"
            class="text-xs sm:text-sm font-bold text-[#0084d6] hover:text-[#0074be] inline-flex items-center gap-1">
            <span>View All Testimonials</span>
            <i class="fa-solid fa-arrow-right text-[10px]"></i>
          </a>
          <div class="flex items-center gap-2">
            <button id="testPrevBtn" aria-label="Previous"
              class="w-7 h-7 rounded-full border border-slate-200 hover:border-[#0084d6] text-slate-400 hover:text-[#0084d6] flex items-center justify-center text-[10px] transition"><i
                class="fa-solid fa-chevron-left"></i></button>
            <button id="testNextBtn" aria-label="Next"
              class="w-7 h-7 rounded-full border border-slate-200 hover:border-[#0084d6] text-slate-400 hover:text-[#0084d6] flex items-center justify-center text-[10px] transition"><i
                class="fa-solid fa-chevron-right"></i></button>
          </div>
        </div>
      </div>

      <!-- Testimonial Cards (Swipeable Carousel on Mobile, 3 Cols on Desktop) -->
      <div
        class="flex md:grid md:grid-cols-3 gap-4 sm:gap-6 overflow-x-auto md:overflow-visible pb-3 md:pb-0 scrollbar-none snap-x snap-mandatory"
        id="testimonialContainer">

        <!-- Card 1 -->
        <div
          class="w-[85vw] max-w-[340px] md:w-auto flex-shrink-0 snap-center bg-white rounded-2xl border border-slate-200 p-5 sm:p-7 shadow-sm hover:shadow-md transition flex flex-col justify-between">
          <div>
            <div class="text-[#0084d6] text-3xl font-serif mb-2 leading-none">â€œ</div>
            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-6">
              NXG Hightech helped us implement Siemens NX seamlessly. Their team is highly professional and supportive.
            </p>
          </div>
          <div class="flex items-center gap-3 pt-4 border-t border-slate-100">
            <img src="assets/avatar_rohit.png" alt="Rohit Sharma" class="w-10 h-10 rounded-full object-cover">
            <div>
              <h4 class="text-xs sm:text-sm font-bold text-[#091124]">Rohit Sharma</h4>
              <p class="text-[11px] text-slate-500">Engineering Head, Automotive Sector</p>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div
          class="w-[85vw] max-w-[340px] md:w-auto flex-shrink-0 snap-center bg-white rounded-2xl border border-slate-200 p-5 sm:p-7 shadow-sm hover:shadow-md transition flex flex-col justify-between">
          <div>
            <div class="text-[#0084d6] text-3xl font-serif mb-2 leading-none">â€œ</div>
            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-6">
              Excellent domain knowledge and implementation support. NXG Hightech is a reliable partner for our digital
              transformation journey.
            </p>
          </div>
          <div class="flex items-center gap-3 pt-4 border-t border-slate-100">
            <img src="assets/avatar_priya.png" alt="Priya Mehta" class="w-10 h-10 rounded-full object-cover">
            <div>
              <h4 class="text-xs sm:text-sm font-bold text-[#091124]">Priya Mehta</h4>
              <p class="text-[11px] text-slate-500">CTO, Industrial Machinery</p>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div
          class="w-[85vw] max-w-[340px] md:w-auto flex-shrink-0 snap-center bg-white rounded-2xl border border-slate-200 p-5 sm:p-7 shadow-sm hover:shadow-md transition flex flex-col justify-between">
          <div>
            <div class="text-[#0084d6] text-3xl font-serif mb-2 leading-none">â€œ</div>
            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-6">
              Their expertise in Siemens solutions helped us improve productivity and reduce time-to-market.
            </p>
          </div>
          <div class="flex items-center gap-3 pt-4 border-t border-slate-100">
            <img src="assets/avatar_amit.png" alt="Amit Verma" class="w-10 h-10 rounded-full object-cover">
            <div>
              <h4 class="text-xs sm:text-sm font-bold text-[#091124]">Amit Verma</h4>
              <p class="text-[11px] text-slate-500">Operations Manager, Consumer Products</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>


  <!-- ================= 11. LATEST INSIGHTS (FROM OUR BLOG) ================= -->
  <section id="blog" class="py-16 bg-white border-b border-slate-200">
    <div class="max-w-[1360px] mx-auto px-4 sm:px-6">

      <!-- Top Row Header -->
      <div class="flex flex-col sm:flex-row items-start sm:items-end justify-between gap-4 mb-10">
        <div>
          <span class="text-xs font-bold uppercase tracking-wider text-[#0084d6] block mb-1">LATEST INSIGHTS</span>
          <h2 class="text-2xl sm:text-3xl font-extrabold text-[#091124]">From Our Blog</h2>
        </div>
        <div class="flex items-center gap-4">
          <a href="events.php"
            class="text-xs sm:text-sm font-bold text-[#0084d6] hover:text-[#0074be] inline-flex items-center gap-1">
            <span>View All Blogs</span>
            <i class="fa-solid fa-arrow-right text-[10px]"></i>
          </a>
          <div class="flex items-center gap-2">
            <button id="blogPrevBtn" aria-label="Previous"
              class="w-7 h-7 rounded-full border border-slate-200 hover:border-[#0084d6] text-slate-400 hover:text-[#0084d6] flex items-center justify-center text-[10px] transition"><i
                class="fa-solid fa-chevron-left"></i></button>
            <button id="blogNextBtn" aria-label="Next"
              class="w-7 h-7 rounded-full border border-slate-200 hover:border-[#0084d6] text-slate-400 hover:text-[#0084d6] flex items-center justify-center text-[10px] transition"><i
                class="fa-solid fa-chevron-right"></i></button>
          </div>
        </div>
      </div>

      <!-- Blog Cards (Swipeable Carousel on Mobile, 3 Cols on Desktop) -->
      <div
        class="flex md:grid md:grid-cols-3 gap-4 sm:gap-6 overflow-x-auto md:overflow-visible pb-3 md:pb-0 scrollbar-none snap-x snap-mandatory"
        id="blogContainer">

        <!-- Blog 1 -->
        <a href="nx-ug.php"
          class="w-[82vw] max-w-[320px] md:w-auto flex-shrink-0 snap-center group bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-md transition flex flex-col">
          <div class="w-full h-44 overflow-hidden bg-slate-900">
            <img src="assets/blog_1_hd.jpg" alt="How Siemens NX is Transforming Product Design"
              class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
          </div>
          <div class="p-5 flex flex-col justify-between flex-1">
            <div>
              <span class="text-[11px] font-semibold text-slate-400 block mb-1.5">15 Oct 2024</span>
              <h3
                class="text-sm sm:text-base font-bold text-[#091124] group-hover:text-[#0084d6] transition-colors leading-snug mb-3">
                How Siemens NX is Transforming Product Design
              </h3>
            </div>
            <span class="text-xs font-bold text-[#0084d6] inline-flex items-center gap-1 mt-2">
              <span>Read More</span>
              <i class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
            </span>
          </div>
        </a>

        <!-- Blog 2 -->
        <a href="services.php"
          class="w-[82vw] max-w-[320px] md:w-auto flex-shrink-0 snap-center group bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-md transition flex flex-col">
          <div class="w-full h-44 overflow-hidden bg-slate-900">
            <img src="assets/blog_2_hd.jpg" alt="Top 5 Benefits of Digital Manufacturing with Tecnomatix"
              class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
          </div>
          <div class="p-5 flex flex-col justify-between flex-1">
            <div>
              <span class="text-[11px] font-semibold text-slate-400 block mb-1.5">10 Oct 2024</span>
              <h3
                class="text-sm sm:text-base font-bold text-[#091124] group-hover:text-[#0084d6] transition-colors leading-snug mb-3">
                Top 5 Benefits of Digital Manufacturing with Tecnomatix
              </h3>
            </div>
            <span class="text-xs font-bold text-[#0084d6] inline-flex items-center gap-1 mt-2">
              <span>Read More</span>
              <i class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
            </span>
          </div>
        </a>

        <!-- Blog 3 -->
        <a href="star-ccm.php"
          class="w-[82vw] max-w-[320px] md:w-auto flex-shrink-0 snap-center group bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-md transition flex flex-col">
          <div class="w-full h-44 overflow-hidden bg-slate-900">
            <img src="assets/blog_3_hd.jpg" alt="Simcenter for Real-World Performance Testing"
              class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
          </div>
          <div class="p-5 flex flex-col justify-between flex-1">
            <div>
              <span class="text-[11px] font-semibold text-slate-400 block mb-1.5">05 Oct 2024</span>
              <h3
                class="text-sm sm:text-base font-bold text-[#091124] group-hover:text-[#0084d6] transition-colors leading-snug mb-3">
                Simcenter for Real-World Performance Testing
              </h3>
            </div>
            <span class="text-xs font-bold text-[#0084d6] inline-flex items-center gap-1 mt-2">
              <span>Read More</span>
              <i class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
            </span>
          </div>
        </a>

      </div>

    </div>
  </section>

  <!-- ================= 12. ENTERPRISE FOOTER (EXACT MATCH) ================= -->
  <!-- ================= 12. ENTERPRISE FOOTER ================= -->

<?php include 'includes/footer.php'; ?>