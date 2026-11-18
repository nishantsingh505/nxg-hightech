<?php
$pageTitle = "About Us | NXG Hightech - Authorized Siemens Solution Partner";
$pageDescription = "Learn about NXG Hightech (P) Ltd, an authorized channel partner for Siemens Digital Industries Software providing CAD/CAM/CAE/PLM solutions, implementation, and consulting across India.";
$activePage = 'about';
include 'includes/header.php';
?>

<!-- ================= 2. HERO SECTION ================= -->
  <section class="relative bg-[#060f22] text-white pt-12 sm:pt-20 pb-14 sm:pb-20 overflow-hidden">
    <div class="absolute inset-0 bg-hero-pattern opacity-30 pointer-events-none"></div>
    <div class="absolute -top-32 -left-32 w-80 h-80 bg-blue-600/20 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-32 -right-32 w-80 h-80 bg-cyan-500/20 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-[1360px] mx-auto px-4 sm:px-6 relative z-10">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
        
        <div class="lg:col-span-7 space-y-4 sm:space-y-6">
          <div class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-cyan-500/10 border border-cyan-400/25 text-[#00c8ff] text-[9.5px] sm:text-[11px] font-bold tracking-wider uppercase">
            <span>ABOUT NXG HIGHTECH (P) LTD</span>
          </div>

          <h1 class="text-3xl sm:text-4xl lg:text-[46px] font-black text-white leading-[1.15] tracking-tight">
            Pioneering India's<br>
            <span class="text-[#00c8ff]">Digital Engineering</span><br>
            Transformation.
          </h1>

          <p class="text-slate-300 text-xs sm:text-sm leading-relaxed max-w-xl">
            NXG Hightech is an Authorised Channel Partner for Siemens Digital Industries Software in India. Headquartered at Golden-I, Greater Noida West, we help manufacturers accelerate product design, simulate multi-physics performance, optimize 5-axis CNC machining, and unify product lifecycles with Teamcenter.
          </p>

          <div class="flex items-center gap-3 pt-2">
            <button onclick="openExpertModal()" class="inline-flex items-center justify-center gap-2 bg-[#0084d6] hover:bg-[#0074be] text-white text-xs sm:text-sm font-bold px-6 py-3 rounded-full transition shadow-lg shadow-blue-500/30 active:scale-95">
              <span>Partner With Us</span>
              <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </button>
            <a href="contact-us.php" class="inline-flex items-center justify-center border border-white/30 hover:border-white text-white hover:bg-white/10 text-xs sm:text-sm font-semibold px-5 py-3 rounded-full transition">
              <span>Our Locations</span>
            </a>
          </div>
        </div>

        <div class="lg:col-span-5 relative flex items-center justify-center">
          <div class="w-full rounded-2xl overflow-hidden border border-blue-500/30 shadow-2xl bg-[#071329] p-1.5">
            <img src="assets/siemens_building_hd.jpg" alt="NXG Hightech Siemens Channel Partner Headquarters" class="w-full h-auto object-cover rounded-xl">
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- ================= 3. STATS STRIP ================= -->
  <section class="bg-[#040c1d] border-b border-slate-800 text-white py-8 sm:py-12">
    <div class="max-w-[1360px] mx-auto px-4 sm:px-6">
      <div class="grid grid-cols-2 md:grid-cols-4 gap-6 sm:gap-10 items-center">
        
        <div class="flex items-center gap-4 sm:gap-5">
          <div class="w-12 h-12 sm:w-16 sm:h-16 rounded-2xl bg-gradient-to-br from-[#0084d6]/25 to-[#00c8ff]/10 border border-[#00c8ff]/35 text-[#00c8ff] flex items-center justify-center text-xl sm:text-2xl shadow-[0_0_20px_rgba(0,200,255,0.18)] flex-shrink-0">
            <i class="fa-solid fa-award"></i>
          </div>
          <div>
            <div class="text-2xl sm:text-3xl lg:text-4xl font-black text-white leading-none">10+</div>
            <div class="text-xs sm:text-sm text-slate-300 font-medium mt-1.5 leading-tight">Years of Experience</div>
          </div>
        </div>

        <div class="flex items-center gap-4 sm:gap-5">
          <div class="w-12 h-12 sm:w-16 sm:h-16 rounded-2xl bg-gradient-to-br from-[#0084d6]/25 to-[#00c8ff]/10 border border-[#00c8ff]/35 text-[#00c8ff] flex items-center justify-center text-xl sm:text-2xl shadow-[0_0_20px_rgba(0,200,255,0.18)] flex-shrink-0">
            <i class="fa-solid fa-handshake-angle"></i>
          </div>
          <div>
            <div class="text-2xl sm:text-3xl lg:text-4xl font-black text-white leading-none">200+</div>
            <div class="text-xs sm:text-sm text-slate-300 font-medium mt-1.5 leading-tight">Happy Clients</div>
          </div>
        </div>

        <div class="flex items-center gap-4 sm:gap-5">
          <div class="w-12 h-12 sm:w-16 sm:h-16 rounded-2xl bg-gradient-to-br from-[#0084d6]/25 to-[#00c8ff]/10 border border-[#00c8ff]/35 text-[#00c8ff] flex items-center justify-center text-xl sm:text-2xl shadow-[0_0_20px_rgba(0,200,255,0.18)] flex-shrink-0">
            <i class="fa-solid fa-circle-check"></i>
          </div>
          <div>
            <div class="text-2xl sm:text-3xl lg:text-4xl font-black text-white leading-none">500+</div>
            <div class="text-xs sm:text-sm text-slate-300 font-medium mt-1.5 leading-tight">Successful Projects</div>
          </div>
        </div>

        <div class="flex items-center gap-4 sm:gap-5">
          <div class="w-12 h-12 sm:w-16 sm:h-16 rounded-2xl bg-gradient-to-br from-[#0084d6]/25 to-[#00c8ff]/10 border border-[#00c8ff]/35 text-[#00c8ff] flex items-center justify-center text-xl sm:text-2xl shadow-[0_0_20px_rgba(0,200,255,0.18)] flex-shrink-0">
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


  <!-- ================= 4. OUR STORY & MISSION ================= -->
  <section class="py-14 sm:py-20 bg-white border-b border-slate-200">
    <div class="max-w-[1360px] mx-auto px-4 sm:px-6">
      
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">
        
        <div class="lg:col-span-6 space-y-4 sm:space-y-5">
          <span class="text-xs font-bold uppercase tracking-wider text-[#0084d6] block">
            OUR PURPOSE &amp; VISION
          </span>
          <h2 class="text-2xl sm:text-3xl lg:text-[34px] font-black text-[#091124] leading-tight">
            Bridging High-Tech Engineering Software with Real Shop-Floor Impact
          </h2>
          <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
            Founded with a vision to empower Indian manufacturers with state-of-the-art engineering technology, NXG Hightech has grown into one of North Indiaâ€™s premier Siemens Digital Industries Software Channel Partners.
          </p>
          <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
            We don't just supply genuine Siemens software licenses; we become your engineering co-pilot. From setting up complex 5-axis post-processors and developing automated mold design macros, to orchestrating multi-site Teamcenter PLM rollouts and conducting multi-physics CFD simulations, our certified domain experts ensure your engineering investment yields measurable business outcomes.
          </p>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-3">
            <div class="p-4 rounded-xl bg-slate-50 border border-slate-200">
              <div class="w-8 h-8 rounded-lg bg-blue-500/10 text-[#0084d6] flex items-center justify-center text-sm mb-2 font-bold">
                <i class="fa-solid fa-bullseye"></i>
              </div>
              <h4 class="text-sm font-bold text-slate-900 mb-1">Our Mission</h4>
              <p class="text-[11px] text-slate-500 leading-relaxed">To empower Indian engineering enterprises to design better, manufacture smarter, and bring innovations to market faster.</p>
            </div>

            <div class="p-4 rounded-xl bg-slate-50 border border-slate-200">
              <div class="w-8 h-8 rounded-lg bg-cyan-500/10 text-cyan-600 flex items-center justify-center text-sm mb-2 font-bold">
                <i class="fa-solid fa-eye"></i>
              </div>
              <h4 class="text-sm font-bold text-slate-900 mb-1">Our Vision</h4>
              <p class="text-[11px] text-slate-500 leading-relaxed">To be the most valued and trusted Siemens digital transformation partner across manufacturing and tooling hubs nationwide.</p>
            </div>
          </div>
        </div>

        <div class="lg:col-span-6 space-y-4">
          <div class="rounded-2xl overflow-hidden border border-slate-200 shadow-xl">
            <img src="assets/engineering_cad_main.jpg" alt="NXG Hightech Engineering Innovation" class="w-full h-72 sm:h-80 object-cover">
          </div>
          <div class="bg-gradient-to-r from-[#0084d6] to-[#005c99] text-white p-5 rounded-2xl shadow-lg flex items-center justify-between">
            <div>
              <div class="text-xs font-bold uppercase tracking-wider text-cyan-200">Official Channel Partner</div>
              <div class="text-base sm:text-lg font-black mt-0.5">Siemens Digital Industries Software</div>
            </div>
            <img src="assets/logos/siemens.svg" alt="Siemens" class="h-6 w-auto brightness-0 invert opacity-90">
          </div>
        </div>

      </div>

    </div>
  </section>


  <!-- ================= 5. CORE CAPABILITIES ================= -->
  <section class="py-14 sm:py-20 bg-[#040817] text-white border-b border-slate-800">
    <div class="max-w-[1360px] mx-auto px-4 sm:px-6">
      
      <div class="text-center max-w-2xl mx-auto mb-12 sm:mb-16 space-y-3">
        <span class="text-xs font-bold uppercase tracking-wider text-[#00c8ff] block">
          WHY WORK WITH NXG HIGHTECH
        </span>
        <h2 class="text-2xl sm:text-4xl font-black text-white leading-tight">
          Comprehensive Engineering Services Under One Roof
        </h2>
        <p class="text-slate-300 text-xs sm:text-sm leading-relaxed">
          From software procurement to complex digital twin implementation, our team delivers complete end-to-end support.
        </p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
        
        <div class="bg-[#081329] border border-slate-800 hover:border-[#0084d6] p-6 rounded-2xl transition duration-300 space-y-3">
          <div class="w-12 h-12 rounded-xl bg-blue-500/10 border border-blue-400/20 text-[#00c8ff] flex items-center justify-center text-xl">
            <i class="fa-solid fa-certificate"></i>
          </div>
          <h4 class="text-base font-bold text-white">Genuine Software Licensing</h4>
          <p class="text-xs text-slate-400 leading-relaxed">
            Direct access to official Siemens DISW software licenses, maintenance updates, security patches, and subscription flex packages.
          </p>
        </div>

        <div class="bg-[#081329] border border-slate-800 hover:border-[#0084d6] p-6 rounded-2xl transition duration-300 space-y-3">
          <div class="w-12 h-12 rounded-xl bg-cyan-500/10 border border-cyan-400/25 text-[#00c8ff] flex items-center justify-center text-xl">
            <i class="fa-solid fa-code"></i>
          </div>
          <h4 class="text-base font-bold text-white">Post-Processor Development</h4>
          <p class="text-xs text-slate-400 leading-relaxed">
            Custom-built 3-axis to 5-axis post-processors for Fanuc, Heidenhain, Siemens 840D, and Mazak controllers with full collision simulation.
          </p>
        </div>

        <div class="bg-[#081329] border border-slate-800 hover:border-[#0084d6] p-6 rounded-2xl transition duration-300 space-y-3">
          <div class="w-12 h-12 rounded-xl bg-blue-500/10 border border-blue-400/20 text-[#00c8ff] flex items-center justify-center text-xl">
            <i class="fa-solid fa-sitemap"></i>
          </div>
          <h4 class="text-base font-bold text-white">Teamcenter PLM Deployment</h4>
          <p class="text-xs text-slate-400 leading-relaxed">
            Turnkey Teamcenter implementation, CAD integrations (NX, SolidWorks, CATIA), multi-BOM synchronization, and engineering change management.
          </p>
        </div>

        <div class="bg-[#081329] border border-slate-800 hover:border-[#0084d6] p-6 rounded-2xl transition duration-300 space-y-3">
          <div class="w-12 h-12 rounded-xl bg-cyan-500/10 border border-cyan-400/25 text-[#00c8ff] flex items-center justify-center text-xl">
            <i class="fa-solid fa-headset"></i>
          </div>
          <h4 class="text-base font-bold text-white">Onsite &amp; Remote Technical AMC</h4>
          <p class="text-xs text-slate-400 leading-relaxed">
            Prompt dedicated technical support desk, annual maintenance agreements (AMC), on-site troubleshooting, and advanced user workshops.
          </p>
        </div>

      </div>

    </div>
  </section>


  <!-- ================= 6. REGIONAL COVERAGE & HEADQUARTERS ================= -->
  <section class="py-14 sm:py-20 bg-white border-b border-slate-200">
    <div class="max-w-[1360px] mx-auto px-4 sm:px-6">
      
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
        
        <div class="lg:col-span-5 space-y-4">
          <span class="text-xs font-bold uppercase tracking-wider text-[#0084d6] block">
            OUR LOCATIONS &amp; COVERAGE
          </span>
          <h2 class="text-2xl sm:text-3xl font-black text-[#091124] leading-tight">
            Strategically Positioned to Support India's Manufacturing Hubs
          </h2>
          <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
            Operating from our state-of-the-art facility in Greater Noida West (Golden-I), NXG Hightech provides on-site implementation, training, and technical consultation across key industrial belts:
          </p>

          <div class="space-y-3 pt-2 text-xs text-slate-700">
            <div class="flex items-start gap-3 p-3 bg-slate-50 rounded-xl border border-slate-200">
              <i class="fa-solid fa-location-dot text-[#0084d6] text-base mt-0.5"></i>
              <div>
                <strong class="text-slate-900 block text-xs">Registered Corporate Office</strong>
                <span class="text-slate-500">827, T3, Golden-I, Tech Zone IV, Greater Noida West, UP - 201009</span>
              </div>
            </div>

            <div class="flex items-start gap-3 p-3 bg-slate-50 rounded-xl border border-slate-200">
              <i class="fa-solid fa-map text-[#0084d6] text-base mt-0.5"></i>
              <div>
                <strong class="text-slate-900 block text-xs">North India Regional Hubs</strong>
                <span class="text-slate-500">Delhi NCR, Noida, Gurgaon, Manesar, Faridabad, Ghaziabad, Ludhiana, Chandigarh, Baddi, and Kanpur</span>
              </div>
            </div>

            <div class="flex items-start gap-3 p-3 bg-slate-50 rounded-xl border border-slate-200">
              <i class="fa-solid fa-phone text-[#0084d6] text-base mt-0.5"></i>
              <div>
                <strong class="text-slate-900 block text-xs">Direct Support Lines</strong>
                <span class="text-slate-500">+91 95400 94200 / +91 98186 72929</span>
              </div>
            </div>
          </div>

          <div class="pt-2">
            <a href="contact-us.php" class="inline-flex items-center gap-2 bg-[#0084d6] hover:bg-[#0074be] text-white text-xs sm:text-sm font-bold px-6 py-2.5 rounded-full transition active:scale-95 shadow-md">
              <span>View Contact Details</span>
              <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </div>

        <div class="lg:col-span-7">
          <div class="bg-slate-900 text-white rounded-3xl p-7 sm:p-9 border border-slate-800 shadow-2xl relative overflow-hidden">
            <div class="absolute inset-0 bg-hero-pattern opacity-20 pointer-events-none"></div>
            <div class="relative z-10 space-y-6">
              <div>
                <span class="text-xs font-bold uppercase tracking-wider text-[#00c8ff]">The NXG Advantage</span>
                <h3 class="text-xl sm:text-2xl font-black mt-1">Authorized Siemens Digital Industries Software Channel Partner</h3>
              </div>
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs text-slate-300">
                <div class="flex items-center gap-2.5">
                  <i class="fa-solid fa-check text-[#00c8ff]"></i>
                  <span>100% Genuine Siemens Software</span>
                </div>
                <div class="flex items-center gap-2.5">
                  <i class="fa-solid fa-check text-[#00c8ff]"></i>
                  <span>Siemens Certified Engineers</span>
                </div>
                <div class="flex items-center gap-2.5">
                  <i class="fa-solid fa-check text-[#00c8ff]"></i>
                  <span>Guaranteed Implementation SLA</span>
                </div>
                <div class="flex items-center gap-2.5">
                  <i class="fa-solid fa-check text-[#00c8ff]"></i>
                  <span>Custom Tooling &amp; CAM Post-Processors</span>
                </div>
                <div class="flex items-center gap-2.5">
                  <i class="fa-solid fa-check text-[#00c8ff]"></i>
                  <span>Official Siemens User Certification</span>
                </div>
                <div class="flex items-center gap-2.5">
                  <i class="fa-solid fa-check text-[#00c8ff]"></i>
                  <span>Dedicated Account Manager</span>
                </div>
              </div>
              <div class="pt-2 border-t border-slate-800 flex items-center justify-between">
                <span class="text-xs text-slate-400">Ready to consult with our engineering specialists?</span>
                <button onclick="openExpertModal()" class="text-xs font-bold text-[#00c8ff] hover:text-white transition flex items-center gap-1.5">
                  <span>Schedule Consultation</span>
                  <i class="fa-solid fa-arrow-right text-[10px]"></i>
                </button>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>


  <!-- ================= 12. ENTERPRISE FOOTER ================= -->
    <!-- ================= 12. ENTERPRISE FOOTER ================= -->

<?php include 'includes/footer.php'; ?>