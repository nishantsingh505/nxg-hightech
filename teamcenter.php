<?php
$pageTitle = "Siemens Teamcenter PLM System | NXG Hightech";
$pageDescription = "Siemens Teamcenter PLM software - BOM Management, Change Management, Workflow Automation and Teamcenter X SaaS from NXG Hightech.";
$activePage = 'teamcenter';
include 'includes/header.php';
?>

<!-- Hero Section -->
  <section class="relative bg-[#060b18] text-white pt-14 pb-16 overflow-hidden">
    <div class="absolute inset-0 bg-hero-pattern pointer-events-none opacity-20"></div>
    <div class="max-w-[1240px] mx-auto px-4 sm:px-6 relative z-10">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
        <div class="lg:col-span-7 space-y-4">
          <span class="inline-block text-[11px] font-bold tracking-[0.16em] uppercase text-cyan-400">
            ENTERPRISE PRODUCT LIFECYCLE MANAGEMENT
          </span>
          <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white leading-tight">
            Siemens Teamcenter PLM
          </h1>
          <p class="text-slate-300 text-sm leading-relaxed max-w-xl font-normal">
            The world's most widely used PLM software connects people and processes across functional silos with an unbroken digital thread for innovation. Available On-Premises, on Cloud, and as SaaS via Teamcenter X.
          </p>
          <div class="flex flex-wrap items-center gap-3 pt-2">
            <button onclick="openExpertModal()" class="inline-flex items-center gap-2 bg-[#0084d6] hover:bg-[#0074be] active:scale-95 text-white text-xs font-semibold px-6 py-3 rounded-full transition shadow-md shadow-blue-500/20">
              <span>Request Teamcenter Consultation</span>
              <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </button>
            <a href="#bom" class="inline-flex items-center gap-2 border border-slate-700 hover:border-cyan-400 text-slate-200 hover:text-white text-xs font-semibold px-5 py-3 rounded-full transition">
              <span>Explore Capabilities â†“</span>
            </a>
          </div>
        </div>
        <div class="lg:col-span-5 flex justify-center">
          <div class="w-full max-w-md bg-[#040814] border border-slate-800 rounded-2xl p-4 shadow-2xl flex items-center justify-center">
            <img src="assets/solidedge_teamcenter.jpg" alt="Teamcenter Digital Twin Assembly" class="max-h-64 max-w-full object-contain">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Core Pillars -->
  <section class="py-16 bg-white border-b border-slate-100">
    <div class="max-w-[1240px] mx-auto px-4 sm:px-6">
      <div class="max-w-2xl mb-12">
        <span class="text-[11px] font-bold uppercase tracking-wider text-[#0084d6] block mb-1">
          ADAPTABLE PLM FOUNDATION
        </span>
        <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 leading-tight">
          Connect People & Processes with a Digital Thread
        </h2>
        <p class="text-slate-600 text-xs sm:text-sm mt-2 leading-relaxed">
          Start with the right PLM solution for your industry needs today, within your budget, with the assurance that you can scale capabilities over time across mechanical, electrical, software, and manufacturing domains.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div id="bom" class="border border-slate-200 rounded-2xl p-6 bg-slate-50/60 hover:shadow-lg transition">
          <div class="w-12 h-12 rounded-xl bg-blue-100 text-[#0084d6] flex items-center justify-center text-xl mb-4">
            <i class="fa-solid fa-sitemap"></i>
          </div>
          <h3 class="text-lg font-bold text-slate-900">Bill of Materials (BOM) Management</h3>
          <p class="text-xs text-slate-600 mt-2 leading-relaxed">
            Effective BOM management and configuration are critical whether your product consists of ten parts or ten million. Teamcenter provides a single source of BOM information across EBOM, MBOM, variant configurations, and ERP synchronisation.
          </p>
          <ul class="mt-4 space-y-1.5 text-xs text-slate-500">
            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-cyan-600"></i> Multi-CAD BOM Synchronization</li>
            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-cyan-600"></i> Product Variant & Options Rule Engine</li>
            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-cyan-600"></i> Upstream Planning to Shop-Floor Link</li>
          </ul>
        </div>

        <div class="border border-slate-200 rounded-2xl p-6 bg-slate-50/60 hover:shadow-lg transition">
          <div class="w-12 h-12 rounded-xl bg-cyan-100 text-cyan-600 flex items-center justify-center text-xl mb-4">
            <i class="fa-solid fa-arrows-spin"></i>
          </div>
          <h3 class="text-lg font-bold text-slate-900">Change Management & Workflow</h3>
          <p class="text-xs text-slate-600 mt-2 leading-relaxed">
            Reduce manual effort and cost with automated PLM workflows. Streamline Engineering Change Notices (ECN), Change Requests (ECR), design reviews, and quality audits with complete visibility into affected parts and people.
          </p>
          <ul class="mt-4 space-y-1.5 text-xs text-slate-500">
            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-cyan-600"></i> Standard Process Templates</li>
            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-cyan-600"></i> Instant Status, History & Audit Logs</li>
            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-cyan-600"></i> Traceable Change Impact Analysis</li>
          </ul>
        </div>

        <div class="border border-slate-200 rounded-2xl p-6 bg-slate-50/60 hover:shadow-lg transition">
          <div class="w-12 h-12 rounded-xl bg-teal-100 text-[#00a3a6] flex items-center justify-center text-xl mb-4">
            <i class="fa-solid fa-list-check"></i>
          </div>
          <h3 class="text-lg font-bold text-slate-900">Project & Program Management</h3>
          <p class="text-xs text-slate-600 mt-2 leading-relaxed">
            Bridge the gap between project planning and engineering execution. Manage complex schedules, Gantt charts, milestones, and deliverable handoffs directly linked to CAD data in a single unified system.
          </p>
          <ul class="mt-4 space-y-1.5 text-xs text-slate-500">
            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-cyan-600"></i> Integrated Task Management</li>
            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-cyan-600"></i> Milestone & Gate Reviews</li>
            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-cyan-600"></i> ERP & Enterprise Tool Integration</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Teamcenter X SaaS Banner -->
  <section class="py-14 bg-gradient-to-r from-[#071936] to-[#040e20] text-white border-y border-cyan-500/20">
    <div class="max-w-[1240px] mx-auto px-4 sm:px-6 flex flex-col md:flex-row items-center justify-between gap-6">
      <div class="max-w-2xl">
        <span class="text-xs font-bold text-cyan-400 uppercase tracking-widest">Instant Cloud SaaS</span>
        <h3 class="text-2xl font-extrabold text-white mt-1">Deploy Fast with Teamcenter X</h3>
        <p class="text-slate-300 text-xs sm:text-sm mt-1">Get up and running with the world's leading PLM in days, preconfigured with industry best practices, managed by Siemens and supported locally by NXG Hightech.</p>
      </div>
      <div>
        <button onclick="openExpertModal()" class="inline-flex items-center gap-2 bg-[#0084d6] hover:bg-[#0074be] text-white font-bold text-xs px-6 py-3 rounded-full shadow-lg transition">
          <span>Book Teamcenter Demo</span>
          <i class="fa-solid fa-arrow-right text-[10px]"></i>
        </button>
      </div>
    </div>
  </section>

    <!-- ================= 12. ENTERPRISE FOOTER (EXACT MATCH) ================= -->
    <!-- ================= 12. ENTERPRISE FOOTER ================= -->

<?php include 'includes/footer.php'; ?>