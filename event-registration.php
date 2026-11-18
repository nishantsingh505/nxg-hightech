<?php
$pageTitle = "Delegate Event Registration Portal | NXG Hightech";
$pageDescription = "Register for upcoming Siemens PLM-NX Tech Forum, NX Mold Wizard Masterclass, and FloTHERM XT Webinars. Complimentary delegate passes by NXG Hightech.";
$activePage = 'event-registration';
include 'includes/header.php';
?>

<!-- ================= 2. HERO BANNER ================= -->
  <section class="relative bg-[#060f22] text-white pt-12 sm:pt-16 pb-12 sm:pb-16 overflow-hidden">
    <div class="absolute inset-0 bg-hero-pattern opacity-30 pointer-events-none"></div>
    <div class="max-w-[1360px] mx-auto px-4 sm:px-6 relative z-10 text-center max-w-2xl mx-auto space-y-3">
      <div class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-cyan-500/10 border border-cyan-400/25 text-[#00c8ff] text-[9.5px] sm:text-[11px] font-bold tracking-wider uppercase">
        <span>DELEGATE REGISTRATION DESK</span>
      </div>
      <h1 class="text-3xl sm:text-4xl font-black text-white leading-tight">
        Siemens PLM-NX Event Registration
      </h1>
      <p class="text-slate-300 text-xs sm:text-sm leading-relaxed">
        Fill out your professional details below to reserve your delegate pass. You will receive an official confirmation receipt and entry barcode directly via email.
      </p>
    </div>
  </section>


  <!-- ================= 3. REGISTRATION GRID ================= -->
  <section class="py-12 sm:py-16 bg-slate-50 border-b border-slate-200">
    <div class="max-w-[1240px] mx-auto px-4 sm:px-6">
      
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
        
        <!-- Left Column: Event Information & Delegate Perks -->
        <div class="lg:col-span-5 space-y-6">
          
          <div class="bg-white p-6 sm:p-7 rounded-3xl border border-slate-200 shadow-sm space-y-4">
            <span class="text-xs font-bold text-[#0084d6] uppercase tracking-wider block">Delegate Package Inclusions</span>
            <h3 class="text-xl font-bold text-slate-900 leading-snug">What's Included with Your Pass</h3>
            
            <ul class="space-y-3 text-xs text-slate-600">
              <li class="flex items-start gap-2.5">
                <i class="fa-solid fa-circle-check text-emerald-500 text-sm mt-0.5 flex-shrink-0"></i>
                <span><strong>All-Day Access:</strong> Full entry to keynote sessions, breakout masterclasses, and hands-on software labs.</span>
              </li>
              <li class="flex items-start gap-2.5">
                <i class="fa-solid fa-circle-check text-emerald-500 text-sm mt-0.5 flex-shrink-0"></i>
                <span><strong>Siemens Certificate:</strong> Official Certificate of Participation issued by NXG Hightech &amp; Siemens.</span>
              </li>
              <li class="flex items-start gap-2.5">
                <i class="fa-solid fa-circle-check text-emerald-500 text-sm mt-0.5 flex-shrink-0"></i>
                <span><strong>Trial Software Access:</strong> 30-day evaluation trial licenses and sample CAD/CAM exercise files.</span>
              </li>
              <li class="flex items-start gap-2.5">
                <i class="fa-solid fa-circle-check text-emerald-500 text-sm mt-0.5 flex-shrink-0"></i>
                <span><strong>Executive Hospitality:</strong> Networking breakfast, buffet luncheon, and closing high-tea included.</span>
              </li>
              <li class="flex items-start gap-2.5">
                <i class="fa-solid fa-circle-check text-emerald-500 text-sm mt-0.5 flex-shrink-0"></i>
                <span><strong>1-on-1 Architect Consultation:</strong> Direct discussion with Siemens Certified Solution Architects.</span>
              </li>
            </ul>
          </div>

          <div class="bg-[#050f24] text-white p-6 rounded-3xl border border-blue-500/20 shadow-md space-y-3">
            <div class="flex items-center gap-2 text-cyan-400 text-xs font-bold uppercase tracking-wider">
              <i class="fa-solid fa-building-circle-check"></i>
              <span>Venue Information</span>
            </div>
            <h4 class="text-base font-bold text-white">Siemens Center of Excellence &amp; Tech Forum</h4>
            <p class="text-xs text-slate-300 leading-relaxed">
              NXG Hightech Headquarters, 827, T3, Golden-I, Tech Zone IV, Greater Noida West, Uttar Pradesh - 201009.<br>
              <span class="text-slate-400 mt-1 block">Live stream link will also be dispatched for remote delegates.</span>
            </p>
          </div>

        </div>

        <!-- Right Column: Registration Form -->
        <div class="lg:col-span-7">
          <div class="bg-white border border-slate-200 rounded-3xl p-6 sm:p-10 shadow-xl">
            
            <form id="delegatePortalForm" class="space-y-4" onsubmit="handlePortalSubmit(event)">
              
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                  <label class="block text-xs font-bold text-slate-700 mb-1">Full Name *</label>
                  <input type="text" name="name" required placeholder="e.g. Rahul Sharma" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-xs text-slate-800 focus:outline-none focus:border-[#0084d6]">
                </div>
                <div>
                  <label class="block text-xs font-bold text-slate-700 mb-1">Company / Organization *</label>
                  <input type="text" name="company" required placeholder="e.g. Acme Precision Toolings" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-xs text-slate-800 focus:outline-none focus:border-[#0084d6]">
                </div>
              </div>

              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                  <label class="block text-xs font-bold text-slate-700 mb-1">Corporate Email Address *</label>
                  <input type="email" name="email" required placeholder="rahul@company.com" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-xs text-slate-800 focus:outline-none focus:border-[#0084d6]">
                </div>
                <div>
                  <label class="block text-xs font-bold text-slate-700 mb-1">Mobile / WhatsApp Number *</label>
                  <input type="tel" name="phone" required placeholder="+91 98765 43210" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-xs text-slate-800 focus:outline-none focus:border-[#0084d6]">
                </div>
              </div>

              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                  <label class="block text-xs font-bold text-slate-700 mb-1">Job Title / Designation *</label>
                  <input type="text" name="designation" required placeholder="e.g. Head of Tooling / CAM Lead" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-xs text-slate-800 focus:outline-none focus:border-[#0084d6]">
                </div>
                <div>
                  <label class="block text-xs font-bold text-slate-700 mb-1">City / Location *</label>
                  <input type="text" name="city" required placeholder="e.g. Noida / Gurgaon / Ludhiana" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-xs text-slate-800 focus:outline-none focus:border-[#0084d6]">
                </div>
              </div>

              <div>
                <label class="block text-xs font-bold text-slate-700 mb-1">Select Event Track *</label>
                <select name="eventTrack" required class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-xs text-slate-800 focus:outline-none focus:border-[#0084d6]">
                  <option value="Full Access Pass: Siemens PLM-NX Tech Forum India">Full Access Pass: Siemens PLM-NX Tech Forum India</option>
                  <option value="Specialized Masterclass: NX Mold Wizard Automation">Specialized Masterclass: NX Mold Wizard Automation</option>
                  <option value="Workshop: 5-Axis CNC Post-Processing & Machine Simulation">Workshop: 5-Axis CNC Post-Processing &amp; Machine Simulation</option>
                  <option value="Webinar: FloTHERM XT Electronics Thermal Cooling">Webinar: FloTHERM XT Electronics Thermal Cooling</option>
                  <option value="Executive Briefing: Teamcenter PLM Cloud Migration">Executive Briefing: Teamcenter PLM Cloud Migration</option>
                </select>
              </div>

              <div>
                <label class="block text-xs font-bold text-slate-700 mb-1">Attendance Mode</label>
                <div class="grid grid-cols-2 gap-3">
                  <label class="flex items-center gap-2 p-2.5 bg-slate-50 rounded-xl border border-slate-200 cursor-pointer hover:border-[#0084d6]">
                    <input type="radio" name="attendanceMode" value="In-Person at Tech Forum Venue" checked class="text-[#0084d6]">
                    <span class="text-xs font-semibold text-slate-800">In-Person (Venue)</span>
                  </label>
                  <label class="flex items-center gap-2 p-2.5 bg-slate-50 rounded-xl border border-slate-200 cursor-pointer hover:border-[#0084d6]">
                    <input type="radio" name="attendanceMode" value="Live Interactive Virtual Stream" class="text-[#0084d6]">
                    <span class="text-xs font-semibold text-slate-800">Virtual Stream (Online)</span>
                  </label>
                </div>
              </div>

              <div>
                <label class="block text-xs font-bold text-slate-700 mb-1">Questions / Specific CAD/CAM Challenges</label>
                <textarea name="notes" rows="3" placeholder="Any specific technical challenges, post-processor requirements, or tooling workflows you would like demonstrated..." class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-xs text-slate-800 focus:outline-none focus:border-[#0084d6]"></textarea>
              </div>

              <div class="pt-2">
                <button type="submit" class="w-full bg-[#0084d6] hover:bg-[#0074be] active:scale-95 text-white font-bold py-3.5 rounded-xl shadow-lg shadow-blue-500/25 transition text-xs sm:text-sm flex items-center justify-center gap-2">
                  <i class="fa-solid fa-id-card"></i>
                  <span>Submit Registration &amp; Generate Pass â†’</span>
                </button>
              </div>

            </form>

            <!-- Pass Confirmation Preview -->
            <div id="portalSuccess" class="hidden text-center py-6 space-y-4">
              <div class="w-16 h-16 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mx-auto text-3xl">
                <i class="fa-solid fa-circle-check"></i>
              </div>
              <h3 class="text-2xl font-black text-slate-900">Delegate Pass Confirmed!</h3>
              <p class="text-xs text-slate-600 max-w-md mx-auto leading-relaxed">
                Your registration has been successfully processed. Here is your digital delegate pass summary:
              </p>

              <!-- Digital Delegate Badge Card -->
              <div class="bg-gradient-to-br from-[#060f22] to-[#0a1838] text-white p-6 rounded-2xl border border-cyan-500/30 max-w-md mx-auto text-left shadow-2xl relative overflow-hidden">
                <div class="flex items-center justify-between pb-3 border-b border-white/10">
                  <span class="text-[10px] font-bold text-[#00c8ff] uppercase tracking-wider">OFFICIAL DELEGATE PASS</span>
                  <span class="text-[10px] bg-emerald-500/20 text-emerald-400 border border-emerald-400/30 px-2 py-0.5 rounded-full font-bold">CONFIRMED</span>
                </div>
                <div class="py-4 space-y-1">
                  <div class="text-lg font-black text-white" id="passName">Rahul Sharma</div>
                  <div class="text-xs text-slate-300" id="passCompany">Acme Precision Toolings</div>
                  <div class="text-[11px] text-cyan-300 pt-1" id="passTrack">Siemens PLM-NX Tech Forum India</div>
                </div>
                <div class="pt-3 border-t border-white/10 flex items-center justify-between text-[10px] text-slate-400">
                  <span>Venue: Golden-I, Greater Noida West</span>
                  <i class="fa-solid fa-qrcode text-xl text-white"></i>
                </div>
              </div>

              <div class="pt-3 flex items-center justify-center gap-4">
                <button onclick="window.print()" class="text-xs font-bold text-slate-700 hover:text-[#0084d6] flex items-center gap-1.5 border border-slate-300 px-4 py-2 rounded-xl">
                  <i class="fa-solid fa-print"></i>
                  <span>Print Pass</span>
                </button>
                <a href="events.php" class="text-xs font-bold text-[#0084d6] hover:underline">View Event Agenda</a>
              </div>
            </div>

          </div>
        </div>

      </div>

    </div>
  </section>


  <!-- ================= 12. ENTERPRISE FOOTER ================= -->
    <!-- ================= 12. ENTERPRISE FOOTER ================= -->

<script>
    function handlePortalSubmit(e) {
      e.preventDefault();
      const form = document.getElementById('delegatePortalForm');
      const success = document.getElementById('portalSuccess');
      const name = form.elements['name'].value;
      const company = form.elements['company'].value;
      const track = form.elements['eventTrack'].value;

      document.getElementById('passName').textContent = name;
      document.getElementById('passCompany').textContent = company;
      document.getElementById('passTrack').textContent = track;

      form.classList.add('hidden');
      success.classList.remove('hidden');
      success.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }
  </script>

<?php include 'includes/footer.php'; ?>