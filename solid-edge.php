<?php
$pageTitle = "Siemens Solid Edge 3D CAD | NXG Hightech";
$pageDescription = "Siemens Solid Edge 3D CAD, Synchronous Technology, Generative Design, and Technical Publications from NXG Hightech.";
$activePage = 'solid-edge';
include 'includes/header.php';
?>

<!-- Hero Section -->
  <section class="relative bg-[#060b18] text-white pt-14 pb-16 overflow-hidden">
    <div class="absolute inset-0 bg-hero-pattern pointer-events-none opacity-20"></div>
    <div class="max-w-[1240px] mx-auto px-4 sm:px-6 relative z-10">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
        <div class="lg:col-span-7 space-y-4">
          <span class="inline-block text-[11px] font-bold tracking-[0.16em] uppercase text-cyan-400">
            AFFORDABLE & POWERFUL 3D DESIGN
          </span>
          <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white leading-tight">
            Siemens Solid Edge
          </h1>
          <p class="text-slate-300 text-sm leading-relaxed max-w-xl font-normal">
            Solid Edge is an intuitive, affordable software portfolio that covers all aspects of product developmentâ€”3D design, simulation, manufacturing, and data managementâ€”powered by breakthrough Synchronous Technology.
          </p>
          <div class="flex flex-wrap items-center gap-3 pt-2">
            <button onclick="openExpertModal()" class="inline-flex items-center gap-2 bg-[#0084d6] hover:bg-[#0074be] active:scale-95 text-white text-xs font-semibold px-6 py-3 rounded-full transition shadow-md shadow-blue-500/20">
              <span>Request Solid Edge Trial / Quote</span>
              <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </button>
            <a href="#features" class="inline-flex items-center gap-2 border border-slate-700 hover:border-cyan-400 text-slate-200 hover:text-white text-xs font-semibold px-5 py-3 rounded-full transition">
              <span>View Features â†“</span>
            </a>
          </div>
        </div>
        <div class="lg:col-span-5 flex justify-center">
          <div class="w-full max-w-md bg-[#040814] border border-slate-800 rounded-2xl p-4 shadow-2xl flex items-center justify-center">
            <img src="assets/product_showcase_2.png" alt="Siemens Solid Edge Portfolio Wheel" class="max-h-64 max-w-full object-contain">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Key Capabilities -->
  <section id="features" class="py-16 bg-white border-b border-slate-100">
    <div class="max-w-[1240px] mx-auto px-4 sm:px-6">
      <div class="max-w-2xl mb-12">
        <span class="text-[11px] font-bold uppercase tracking-wider text-[#0084d6] block mb-1">
          INNOVATIVE 3D CAPABILITIES
        </span>
        <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 leading-tight">
          Develop Product Forms in a Fraction of the Time
        </h2>
        <p class="text-slate-600 text-xs sm:text-sm mt-2 leading-relaxed">
          Solid Edge combines the speed and simplicity of direct modeling with the flexibility and control of parametric design.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="border border-slate-200 rounded-2xl p-6 bg-slate-50/60 hover:shadow-lg transition">
          <div class="text-[#0084d6] text-2xl mb-3"><i class="fa-solid fa-bolt"></i></div>
          <h3 class="text-base font-bold text-slate-900">Synchronous Technology</h3>
          <p class="text-xs text-slate-600 mt-2 leading-relaxed">
            Make rapid design changes on imported or native CAD data without dealing with tangled feature histories or regenerations.
          </p>
        </div>

        <div class="border border-slate-200 rounded-2xl p-6 bg-slate-50/60 hover:shadow-lg transition">
          <div class="text-[#0084d6] text-2xl mb-3"><i class="fa-solid fa-shapes"></i></div>
          <h3 class="text-base font-bold text-slate-900">Generative Design</h3>
          <p class="text-xs text-slate-600 mt-2 leading-relaxed">
            Topology optimization directly inside CAD to develop lighter, high-strength structural parts optimized for casting or 3D printing.
          </p>
        </div>

        <div class="border border-slate-200 rounded-2xl p-6 bg-slate-50/60 hover:shadow-lg transition">
          <div class="text-[#0084d6] text-2xl mb-3"><i class="fa-solid fa-camera-rotate"></i></div>
          <h3 class="text-base font-bold text-slate-900">Reverse Engineering</h3>
          <p class="text-xs text-slate-600 mt-2 leading-relaxed">
            Import 3D mesh and scan data, identify feature surfaces, and quickly convert physical mockups into parametric solids.
          </p>
        </div>

        <div class="border border-slate-200 rounded-2xl p-6 bg-slate-50/60 hover:shadow-lg transition">
          <div class="text-[#0084d6] text-2xl mb-3"><i class="fa-solid fa-book-open"></i></div>
          <h3 class="text-base font-bold text-slate-900">Technical Publications</h3>
          <p class="text-xs text-slate-600 mt-2 leading-relaxed">
            Create interactive 3D technical documents, work instructions, spare parts catalogs, and maintenance guides directly from CAD.
          </p>
        </div>

        <div class="border border-slate-200 rounded-2xl p-6 bg-slate-50/60 hover:shadow-lg transition">
          <div class="text-[#0084d6] text-2xl mb-3"><i class="fa-solid fa-plug"></i></div>
          <h3 class="text-base font-bold text-slate-900">Solid Edge Electrical</h3>
          <p class="text-xs text-slate-600 mt-2 leading-relaxed">
            Complete electrical schematic design, wire harness routing, and cross-discipline collaboration between electrical and mechanical teams.
          </p>
        </div>

        <div class="border border-slate-200 rounded-2xl p-6 bg-slate-50/60 hover:shadow-lg transition">
          <div class="text-[#0084d6] text-2xl mb-3"><i class="fa-solid fa-industry"></i></div>
          <h3 class="text-base font-bold text-slate-900">Modular Plant Design</h3>
          <p class="text-xs text-slate-600 mt-2 leading-relaxed">
            Comprehensive P&ID creation and 3D piping routing for packaging machinery, process equipment, and modular skids.
          </p>
        </div>
      </div>
    </div>
  </section>

    <!-- ================= 12. ENTERPRISE FOOTER (EXACT MATCH) ================= -->
    <!-- ================= 12. ENTERPRISE FOOTER ================= -->

<?php include 'includes/footer.php'; ?>