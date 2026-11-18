<?php
$pageTitle = "Simcenter STAR-CCM+ Multiphysics CFD | NXG Hightech";
$pageDescription = "Simcenter STAR-CCM+ computational fluid dynamics, aerodynamics, rotor dynamics and multiphysics engineering simulation from NXG Hightech.";
$activePage = 'star-ccm';
include 'includes/header.php';
?>

<!-- Hero Section -->
  <section class="relative bg-[#060b18] text-white pt-14 pb-16 overflow-hidden">
    <div class="absolute inset-0 bg-hero-pattern pointer-events-none opacity-20"></div>
    <div class="max-w-[1240px] mx-auto px-4 sm:px-6 relative z-10">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
        <div class="lg:col-span-7 space-y-4">
          <span class="inline-block text-[11px] font-bold tracking-[0.16em] uppercase text-cyan-400">
            COMPUTATIONAL FLUID DYNAMICS (CFD)
          </span>
          <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white leading-tight">
            Simcenter STAR-CCM+
          </h1>
          <p class="text-slate-300 text-sm leading-relaxed max-w-xl font-normal">
            A complete multiphysics CFD software that models fluid flow, heat transfer, turbulence, acoustics, and structural interactions in a single integrated user environment.
          </p>
          <div class="flex flex-wrap items-center gap-3 pt-2">
            <button onclick="openExpertModal()" class="inline-flex items-center gap-2 bg-[#0084d6] hover:bg-[#0074be] active:scale-95 text-white text-xs font-semibold px-6 py-3 rounded-full transition shadow-md shadow-blue-500/20">
              <span>Request STAR-CCM+ Consultation</span>
              <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </button>
          </div>
        </div>
        <div class="lg:col-span-5 flex justify-center">
          <div class="w-full max-w-md bg-[#040814] border border-slate-800 rounded-2xl p-4 shadow-2xl flex items-center justify-center">
            <img src="assets/product_showcase_3.png" alt="Simcenter STAR-CCM+ Multiphysics Wheel" class="max-h-64 max-w-full object-contain">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Core Capabilities -->
  <section class="py-16 bg-white border-b border-slate-100">
    <div class="max-w-[1240px] mx-auto px-4 sm:px-6">
      <div class="max-w-2xl mb-12">
        <span class="text-[11px] font-bold uppercase tracking-wider text-[#0084d6] block mb-1">
          MULTIPHYSICS ACCURACY
        </span>
        <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 leading-tight">
          Discover Better Designs, Faster
        </h2>
        <p class="text-slate-600 text-xs sm:text-sm mt-2 leading-relaxed">
          Simcenter STAR-CCM+ includes pre-processing via automated polyhedral and cartesian meshing, advanced finite-volume solvers, and automated design exploration.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="border border-slate-200 rounded-2xl p-6 bg-slate-50/60">
          <h3 class="text-lg font-bold text-slate-900 flex items-center gap-2">
            <i class="fa-solid fa-wave-square text-[#0084d6]"></i> Response Dynamics
          </h3>
          <p class="text-xs text-slate-600 mt-2 leading-relaxed">
            Predict the forced dynamic response of mechanical components to transient, harmonic, shock, and random acoustic excitations, identifying resonance frequencies and damping performance before physical testing.
          </p>
        </div>

        <div class="border border-slate-200 rounded-2xl p-6 bg-slate-50/60">
          <h3 class="text-lg font-bold text-slate-900 flex items-center gap-2">
            <i class="fa-solid fa-fan text-[#0084d6]"></i> Rotor Dynamics
          </h3>
          <p class="text-xs text-slate-600 mt-2 leading-relaxed">
            Model rotating turbomachinery, compressors, turbines, and electric motor spindles to accurately calculate critical speeds, whirl modes, stability thresholds, and unbalance responses.
          </p>
        </div>
      </div>
    </div>
  </section>

    <!-- ================= 12. ENTERPRISE FOOTER (EXACT MATCH) ================= -->
    <!-- ================= 12. ENTERPRISE FOOTER ================= -->

<?php include 'includes/footer.php'; ?>