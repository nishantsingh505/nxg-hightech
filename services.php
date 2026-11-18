<?php
$pageTitle = "Engineering Services & Turnkey Implementation | NXG Hightech";
$pageDescription = "CAD data migration, 3D modeling, FEA meshing, and custom post-processor development for multi-axis CNC machines from NXG Hightech.";
$activePage = 'services';
include 'includes/header.php';
?>

<!-- Hero Section -->
  <section class="relative bg-[#060b18] text-white pt-14 pb-16 overflow-hidden">
    <div class="absolute inset-0 bg-hero-pattern pointer-events-none opacity-20"></div>
    <div class="max-w-[1240px] mx-auto px-4 sm:px-6 relative z-10">
      <div class="max-w-2xl space-y-4">
        <span class="inline-block text-[11px] font-bold tracking-[0.16em] uppercase text-cyan-400">
          TURNKEY INDUSTRIAL ENGINEERING & CONSULTING
        </span>
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white leading-tight">
          Specialized Engineering Services
        </h1>
        <p class="text-slate-300 text-sm leading-relaxed max-w-xl font-normal">
          From legacy CAD database migration and multi-axis CNC post-processors to finite element meshing and Teamcenter PLM deployment, our certified engineers deliver measurable results.
        </p>
        <button onclick="openExpertModal()" class="inline-flex items-center gap-2 bg-[#0084d6] hover:bg-[#0074be] active:scale-95 text-white text-xs font-semibold px-6 py-3 rounded-full transition shadow-md shadow-blue-500/20">
          <span>Request Service Consultation</span>
          <i class="fa-solid fa-arrow-right text-[10px]"></i>
        </button>
      </div>
    </div>
  </section>

  <!-- 6 Detailed Services -->
  <section class="py-16 bg-white border-b border-slate-100">
    <div class="max-w-[1240px] mx-auto px-4 sm:px-6">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        <!-- 1. 3D Modeling & Design -->
        <div class="border border-slate-200 rounded-2xl p-6 bg-slate-50/60 hover:shadow-lg transition">
          <div class="w-12 h-12 rounded-xl bg-blue-100 text-[#0084d6] flex items-center justify-center text-xl mb-4"><i class="fa-solid fa-cube"></i></div>
          <h3 class="text-base font-bold text-slate-900">3D Modeling & Designing</h3>
          <p class="text-xs text-slate-600 mt-2 leading-relaxed">
            Our experienced designers create high-precision 3D models for mechanical, electrical, and complex industrial products, helping clients attain business prosperity through flawless CAD geometry.
          </p>
          <ul class="mt-4 space-y-1 text-xs text-slate-500">
            <li>â€¢ Mechanical 3D Solid & Surface Modeling</li>
            <li>â€¢ Electrical & Harness 3D Packaging</li>
            <li>â€¢ Digital Mockups & Multi-CAD Integration</li>
          </ul>
        </div>

        <!-- 2. CAD Data Migration -->
        <div class="border border-slate-200 rounded-2xl p-6 bg-slate-50/60 hover:shadow-lg transition">
          <div class="w-12 h-12 rounded-xl bg-cyan-100 text-cyan-600 flex items-center justify-center text-xl mb-4"><i class="fa-solid fa-arrow-right-arrow-left"></i></div>
          <h3 class="text-base font-bold text-slate-900">CAD Data Migration Services</h3>
          <p class="text-xs text-slate-600 mt-2 leading-relaxed">
            Noticeably reduce product design cycles and time required for new products. Legacy CAD databases (AutoCAD, Pro/E, CATIA, Inventor) are migrated to modern automated Siemens NX/Solid Edge environments cost-effectively.
          </p>
          <ul class="mt-4 space-y-1 text-xs text-slate-500">
            <li>â€¢ Feature & Parametric History Preservation</li>
            <li>â€¢ Dedicated and Shared Resource Models</li>
            <li>â€¢ Automated Data Clean-up & Reusability</li>
          </ul>
        </div>

        <!-- 3. Post Processor Development -->
        <div class="border border-slate-200 rounded-2xl p-6 bg-slate-50/60 hover:shadow-lg transition">
          <div class="w-12 h-12 rounded-xl bg-amber-100 text-amber-600 flex items-center justify-center text-xl mb-4"><i class="fa-solid fa-gears"></i></div>
          <h3 class="text-base font-bold text-slate-900">Post-Processor & ISV Simulation</h3>
          <p class="text-xs text-slate-600 mt-2 leading-relaxed">
            Engineering companies using CNC machines require customized post-processors that translate CAM data into machine-specific G-code. NXG Hightech has achieved niche expertise in developing and proving out post-processors and ISV machine simulation across India.
          </p>
          <ul class="mt-4 space-y-1 text-xs text-slate-500">
            <li>â€¢ Multi-Axis CNCs (3, 4, 5-Axis & Mill-Turn)</li>
            <li>â€¢ Fanuc, Sinumerik, Heidenhain, Haas, Mazak</li>
            <li>â€¢ On-Machine Collision Prove-Out</li>
          </ul>
        </div>

        <!-- 4. FEA & Meshing -->
        <div class="border border-slate-200 rounded-2xl p-6 bg-slate-50/60 hover:shadow-lg transition">
          <div class="w-12 h-12 rounded-xl bg-purple-100 text-purple-600 flex items-center justify-center text-xl mb-4"><i class="fa-solid fa-chart-line"></i></div>
          <h3 class="text-base font-bold text-slate-900">Finite Element Analysis & Meshing</h3>
          <p class="text-xs text-slate-600 mt-2 leading-relaxed">
            Various analysis techniques are crucial to mechanical design optimization. Our team has successfully used FEA, Kinematic Analysis, and Vibration Analysis alongside complex meshing projects for engineering machinery and automotive sectors.
          </p>
          <ul class="mt-4 space-y-1 text-xs text-slate-500">
            <li>â€¢ High-Order Hex & Tet Meshing</li>
            <li>â€¢ Kinematic & Structural Stress Analysis</li>
            <li>â€¢ Vibration & Fatigue Life Assessment</li>
          </ul>
        </div>

        <!-- 5. Teamcenter PLM Implementation -->
        <div class="border border-slate-200 rounded-2xl p-6 bg-slate-50/60 hover:shadow-lg transition">
          <div class="w-12 h-12 rounded-xl bg-teal-100 text-[#00a3a6] flex items-center justify-center text-xl mb-4"><i class="fa-solid fa-network-wired"></i></div>
          <h3 class="text-base font-bold text-slate-900">Teamcenter Implementation</h3>
          <p class="text-xs text-slate-600 mt-2 leading-relaxed">
            Turnkey PLM implementations from scratch as well as system migration from legacy PDM. We advise clients from initial project approval through workflow configuration, BOM standardization, and team training.
          </p>
          <ul class="mt-4 space-y-1 text-xs text-slate-500">
            <li>â€¢ Architecture & Data Model Customization</li>
            <li>â€¢ Legacy PDM Migration & Cleansing</li>
            <li>â€¢ Annual Maintenance & Technical Support</li>
          </ul>
        </div>

        <!-- 6. Reverse Engineering -->
        <div class="border border-slate-200 rounded-2xl p-6 bg-slate-50/60 hover:shadow-lg transition">
          <div class="w-12 h-12 rounded-xl bg-rose-100 text-rose-600 flex items-center justify-center text-xl mb-4"><i class="fa-solid fa-camera-retro"></i></div>
          <h3 class="text-base font-bold text-slate-900">Reverse Engineering & Scanning</h3>
          <p class="text-xs text-slate-600 mt-2 leading-relaxed">
            Transform physical legacy tools, molds, and automotive components into fully parametric 3D CAD models using high-density laser scanning and convergent modeling.
          </p>
          <ul class="mt-4 space-y-1 text-xs text-slate-500">
            <li>â€¢ Scan Point-Cloud to B-Rep Conversion</li>
            <li>â€¢ Deviation Inspection & Wear Analysis</li>
            <li>â€¢ CAD Reconstruction for 3D Printing</li>
          </ul>
        </div>

      </div>
    </div>
  </section>

    <!-- ================= 12. ENTERPRISE FOOTER (EXACT MATCH) ================= -->
    <!-- ================= 12. ENTERPRISE FOOTER ================= -->

<?php include 'includes/footer.php'; ?>