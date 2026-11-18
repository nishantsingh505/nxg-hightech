<?php
$pageTitle = "Siemens NX (CAD & CAM) Solutions | NXG Hightech";
$pageDescription = "Siemens NX CAD 3D modeling, Mold Wizard, Progressive Die, and NX CAM 5-Axis machining solutions from authorized Siemens partner NXG Hightech.";
$activePage = 'nx-ug';
include 'includes/header.php';
?>

<!-- Hero Section -->
  <section class="relative bg-[#060b18] text-white pt-14 pb-16 overflow-hidden">
    <div class="absolute inset-0 bg-hero-pattern pointer-events-none opacity-20"></div>
    <div class="max-w-[1240px] mx-auto px-4 sm:px-6 relative z-10">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
        <div class="lg:col-span-7 space-y-4">
          <span class="inline-block text-[11px] font-bold tracking-[0.16em] uppercase text-cyan-400">
            SIEMENS DISW FLAGSHIP PORTFOLIO
          </span>
          <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white leading-tight">
            Siemens NX CAD & NX CAM Solutions
          </h1>
          <p class="text-slate-300 text-sm leading-relaxed max-w-xl font-normal">
            The industry's most powerful, integrated solution for 3D mechanical design, advanced tooling (Mold Wizard & Progressive Die), and 2.5-to-5-axis CNC manufacturing. Realize the true value of the digital twin with NX.
          </p>
          <div class="flex flex-wrap items-center gap-3 pt-2">
            <button onclick="openExpertModal()" class="inline-flex items-center gap-2 bg-[#0084d6] hover:bg-[#0074be] active:scale-95 text-white text-xs font-semibold px-6 py-3 rounded-full transition shadow-md shadow-blue-500/20">
              <span>Request NX License Quote</span>
              <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </button>
            <a href="#brochure" class="inline-flex items-center gap-2 border border-slate-700 hover:border-cyan-400 text-slate-200 hover:text-white text-xs font-semibold px-5 py-3 rounded-full transition">
              <i class="fa-solid fa-download text-cyan-400"></i>
              <span>Download NX Brochure</span>
            </a>
          </div>
        </div>
        <div class="lg:col-span-5 flex justify-center">
          <div class="w-full max-w-md bg-[#040814] border border-slate-800 rounded-2xl p-4 shadow-2xl flex items-center justify-center">
            <img src="assets/nx_cad_model.png" alt="Siemens NX CAD Part Analysis" class="max-h-64 max-w-full object-contain">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- NX Mach Design Packages -->
  <section class="py-16 bg-white border-b border-slate-100">
    <div class="max-w-[1240px] mx-auto px-4 sm:px-6">
      <div class="max-w-2xl mb-12">
        <span class="text-[11px] font-bold uppercase tracking-wider text-[#0084d6] block mb-1">
          PRODUCT DESIGN CAPABILITIES
        </span>
        <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 leading-tight">
          NX for Design & Mach Packages
        </h2>
        <p class="text-slate-600 text-xs sm:text-sm mt-2 leading-relaxed">
          The unmatched power, versatility, and flexibility of NX frees your design teams to choose the most productive approach for each individual task, seamlessly interchanging wireframe, surface, parametric solids, or direct modeling.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="border border-slate-200 rounded-2xl p-6 bg-slate-50/60 hover:shadow-lg transition">
          <span class="text-xs font-bold text-[#0084d6] uppercase">Tier 1</span>
          <h3 class="text-lg font-bold text-slate-900 mt-1">NX Mach 1 Design</h3>
          <p class="text-xs text-slate-600 mt-2 leading-relaxed">
            Essential 3D solid modeling, drafting, basic assembly modeling, and Synchronous Technology. Fully integrable with Teamcenter PLM for data management.
          </p>
          <ul class="mt-4 space-y-1.5 text-xs text-slate-500">
            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-cyan-600"></i> Parametric & Direct Modeling</li>
            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-cyan-600"></i> Standard Parts Library Access</li>
            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-cyan-600"></i> HD3D Visual Reporting</li>
          </ul>
        </div>

        <div class="border-2 border-[#0084d6] rounded-2xl p-6 bg-white shadow-md relative">
          <span class="absolute top-4 right-4 bg-[#0084d6] text-white text-[10px] font-bold px-2 py-0.5 rounded-full uppercase">Most Popular</span>
          <span class="text-xs font-bold text-[#0084d6] uppercase">Tier 2</span>
          <h3 class="text-lg font-bold text-slate-900 mt-1">NX Mach 2 Product Design</h3>
          <p class="text-xs text-slate-600 mt-2 leading-relaxed">
            Advanced freeform surfacing, complex sheet metal design, basic routing, user-defined features, and automated validation checking for high-efficiency mechanical engineering.
          </p>
          <ul class="mt-4 space-y-1.5 text-xs text-slate-500">
            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-[#0084d6]"></i> Freeform Surfacing & Shape Modeling</li>
            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-[#0084d6]"></i> Advanced Sheet Metal Forming</li>
            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-[#0084d6]"></i> Stress & Deflection Checkers</li>
          </ul>
        </div>

        <div class="border border-slate-200 rounded-2xl p-6 bg-slate-50/60 hover:shadow-lg transition">
          <span class="text-xs font-bold text-[#0084d6] uppercase">Tier 3</span>
          <h3 class="text-lg font-bold text-slate-900 mt-1">NX Mach 3 High Performance</h3>
          <p class="text-xs text-slate-600 mt-2 leading-relaxed">
            Comprehensive Class-A styling, advanced assembly management for 100,000+ components, digital mockups, kinematics, and generative shape design.
          </p>
          <ul class="mt-4 space-y-1.5 text-xs text-slate-500">
            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-cyan-600"></i> History-based Class A Surfacing</li>
            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-cyan-600"></i> Large Assembly Clearance & Motion</li>
            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-cyan-600"></i> Multi-CAD Direct Geometry Reuse</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Tooling & Mold Wizard Section -->
  <section id="mold-wizard" class="py-16 bg-slate-50 border-b border-slate-200">
    <div class="max-w-[1240px] mx-auto px-4 sm:px-6">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
        <div class="lg:col-span-6 space-y-4">
          <span class="text-[11px] font-bold uppercase tracking-wider text-[#0084d6] block">
            AUTOMATED TOOLING EXCELLENCE
          </span>
          <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 leading-tight">
            NX Mold Design (Wizard) & Progressive Die Design
          </h2>
          <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
            From providing structured workflows and automation of mold-specific design tasks to comprehensive standard mold libraries (Hasco, DME, Futaba, LKM), Mold Wizard streamlines the entire tooling cycle.
          </p>

          <div class="space-y-3 pt-2 text-xs text-slate-700">
            <div class="flex items-start gap-3 bg-white p-3 rounded-xl border border-slate-200">
              <i class="fa-solid fa-wand-magic-sparkles text-[#0084d6] text-base mt-0.5"></i>
              <div>
                <h4 class="font-bold text-slate-900">Automated Core & Cavity Splitting</h4>
                <p class="text-slate-500 text-[11px]">Instant parting line creation, shut-off surface patching, and associative core/cavity block generation.</p>
              </div>
            </div>

            <div class="flex items-start gap-3 bg-white p-3 rounded-xl border border-slate-200">
              <i class="fa-solid fa-fire-burner text-[#0084d6] text-base mt-0.5"></i>
              <div>
                <h4 class="font-bold text-slate-900">NX EasyFill Flow & Warpage Analysis</h4>
                <p class="text-slate-500 text-[11px]">Integrated filling, packing, cooling, and warpage simulation within the CAD window with gate location wizards.</p>
              </div>
            </div>

            <div class="flex items-start gap-3 bg-white p-3 rounded-xl border border-slate-200">
              <i class="fa-solid fa-layer-group text-[#0084d6] text-base mt-0.5"></i>
              <div>
                <h4 class="font-bold text-slate-900">NX Progressive Die Wizard</h4>
                <p class="text-slate-500 text-[11px]">Automated blank development, strip layout calculation, punch/die insert generation, and forming verification.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="lg:col-span-6 flex justify-center">
          <div class="w-full bg-[#040814] p-4 rounded-2xl border border-slate-800 shadow-xl flex items-center justify-center">
            <img src="assets/site_images/site_img_2.jpg" alt="Mold, Tool and Die Engineering" class="max-h-80 max-w-full object-contain rounded-lg">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- NX CAM Section -->
  <section id="cam" class="py-16 bg-[#060b18] text-white">
    <div class="max-w-[1240px] mx-auto px-4 sm:px-6">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
        <div class="lg:col-span-6 order-2 lg:order-1 flex justify-center">
          <div class="w-full bg-[#040814] p-4 rounded-2xl border border-slate-800 shadow-xl flex items-center justify-center">
            <img src="assets/product_showcase_1.png" alt="Siemens NX CAM Machining Showcase" class="max-h-80 max-w-full object-contain">
          </div>
        </div>

        <div class="lg:col-span-6 order-1 lg:order-2 space-y-4">
          <span class="text-[11px] font-bold uppercase tracking-wider text-cyan-400 block">
            COMPUTER-AIDED MANUFACTURING
          </span>
          <h2 class="text-2xl sm:text-3xl font-extrabold text-white leading-tight">
            NX CAM - Program Any Job Using One Software
          </h2>
          <p class="text-slate-300 text-xs sm:text-sm leading-relaxed">
            NX CAM provides comprehensive NC programming capabilities in a single unified system, connecting planning and shop-floor CNC machines with a digital thread.
          </p>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2">
            <div class="bg-[#09152e] border border-slate-800 p-3.5 rounded-xl">
              <h4 class="text-xs font-bold text-white flex items-center gap-1.5">
                <i class="fa-solid fa-gears text-cyan-400"></i> Mold & Die HSM
              </h4>
              <p class="text-[11px] text-slate-400 mt-1">High-speed machining, automated rest milling, and smooth finishing toolpaths to maximize tool life.</p>
            </div>

            <div class="bg-[#09152e] border border-slate-800 p-3.5 rounded-xl">
              <h4 class="text-xs font-bold text-white flex items-center gap-1.5">
                <i class="fa-solid fa-arrows-to-circle text-cyan-400"></i> Simultaneous 5-Axis
              </h4>
              <p class="text-[11px] text-slate-400 mt-1">Precise multi-axis toolpaths for complex parts, blisks, impellers, and deep cavities with fewer setups.</p>
            </div>

            <div class="bg-[#09152e] border border-slate-800 p-3.5 rounded-xl">
              <h4 class="text-xs font-bold text-white flex items-center gap-1.5">
                <i class="fa-solid fa-bolt text-cyan-400"></i> Prismatic Machining (FBM)
              </h4>
              <p class="text-[11px] text-slate-400 mt-1">Automated feature-based machining reducing NC programming time by up to 90%.</p>
            </div>

            <div class="bg-[#09152e] border border-slate-800 p-3.5 rounded-xl">
              <h4 class="text-xs font-bold text-white flex items-center gap-1.5">
                <i class="fa-solid fa-shield-halved text-cyan-400"></i> Postprocessing & ISV
              </h4>
              <p class="text-[11px] text-slate-400 mt-1">G-code driven digital twin simulation eliminating machine collisions and shop floor errors.</p>
            </div>
          </div>

          <div class="pt-3">
            <button onclick="openExpertModal()" class="inline-flex items-center gap-2 bg-[#0084d6] hover:bg-[#0074be] text-white text-xs font-bold px-6 py-3 rounded-full transition shadow-md">
              <span>Request NX CAM Demo</span>
              <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Brochure CTA Section -->
  <section id="brochure" class="py-14 bg-gradient-to-r from-blue-900 to-[#071329] text-white border-t border-cyan-500/30">
    <div class="max-w-[1240px] mx-auto px-4 sm:px-6 flex flex-col md:flex-row items-center justify-between gap-6">
      <div class="max-w-xl">
        <h3 class="text-xl sm:text-2xl font-extrabold text-white">Download the Official Siemens NX Brochure</h3>
        <p class="text-slate-300 text-xs sm:text-sm mt-1">Get complete technical specifications, packaging guides, and licensing tiers for North India manufacturing enterprises.</p>
      </div>
      <div>
        <button onclick="openExpertModal()" class="inline-flex items-center gap-2 bg-cyan-400 hover:bg-cyan-300 text-slate-900 font-bold text-xs px-6 py-3 rounded-full shadow-lg transition">
          <i class="fa-solid fa-file-pdf"></i>
          <span>Download Product Brochure</span>
        </button>
      </div>
    </div>
  </section>

    <!-- ================= 12. ENTERPRISE FOOTER (EXACT MATCH) ================= -->
    <!-- ================= 12. ENTERPRISE FOOTER ================= -->

<?php include 'includes/footer.php'; ?>