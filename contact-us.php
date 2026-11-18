<?php
$pageTitle = "Contact Us & Regional Offices | NXG Hightech";
$pageDescription = "Contact NXG Hightech - Authorized Siemens DISW Partner in North India. Office at Golden-I, Greater Noida West. Phone: +91 95400 94200.";
$activePage = 'contact';
include 'includes/header.php';
?>

<!-- Hero Section -->
  <section class="relative bg-[#060b18] text-white pt-14 pb-16 overflow-hidden">
    <div class="absolute inset-0 bg-hero-pattern pointer-events-none opacity-20"></div>
    <div class="max-w-[1240px] mx-auto px-4 sm:px-6 relative z-10">
      <div class="max-w-2xl space-y-4">
        <span class="inline-block text-[11px] font-bold tracking-[0.16em] uppercase text-cyan-400">
          AUTHORIZED SIEMENS SOLUTION PARTNER
        </span>
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white leading-tight">
          Contact NXG Hightech
        </h1>
        <p class="text-slate-300 text-sm leading-relaxed max-w-xl font-normal">
          Speak with our certified engineering consultants for genuine Siemens software licensing, on-site demonstrations, implementation planning, and technical support across North India.
        </p>
      </div>
    </div>
  </section>

  <!-- Contact Details & Form Grid -->
  <section class="py-16 bg-white border-b border-slate-100">
    <div class="max-w-[1240px] mx-auto px-4 sm:px-6">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
        
        <!-- Left: Official Details from nxghightech.com -->
        <div class="lg:col-span-5 space-y-6">
          <div>
            <span class="text-xs font-bold text-[#0084d6] uppercase tracking-wider">Corporate Headquarters</span>
            <h2 class="text-2xl font-extrabold text-slate-900 mt-1">NXG HIGHTECH (P) LTD</h2>
          </div>

          <div class="space-y-4 text-xs text-slate-600">
            <div class="flex items-start gap-3 bg-slate-50 p-4 rounded-2xl border border-slate-200">
              <i class="fa-solid fa-location-dot text-[#0084d6] text-lg mt-0.5"></i>
              <div>
                <h4 class="font-bold text-slate-900 text-xs">Registered & Corporate Office</h4>
                <p class="mt-1 leading-relaxed">
                  827, T3, Golden-I, Tech Zone IV,<br>
                  Near Amrapali Leisure Valley,<br>
                  Greater Noida West, Uttar Pradesh - 201009, India
                </p>
              </div>
            </div>

            <div class="flex items-start gap-3 bg-slate-50 p-4 rounded-2xl border border-slate-200">
              <i class="fa-solid fa-phone text-[#0084d6] text-lg mt-0.5"></i>
              <div>
                <h4 class="font-bold text-slate-900 text-xs">Direct Telephone Lines</h4>
                <p class="mt-1">
                  <a href="tel:+919540094200" class="hover:text-[#0084d6] block font-semibold">+91 95400 94200</a>
                  <a href="tel:+919896342040" class="hover:text-[#0084d6] block font-semibold">+91 98963 42040</a>
                </p>
              </div>
            </div>

            <div class="flex items-start gap-3 bg-slate-50 p-4 rounded-2xl border border-slate-200">
              <i class="fa-solid fa-envelope text-[#0084d6] text-lg mt-0.5"></i>
              <div>
                <h4 class="font-bold text-slate-900 text-xs">Official Email</h4>
                <p class="mt-1">
                  <a href="mailto:info@nxghightech.com" class="hover:text-[#0084d6] block font-semibold">info@nxghightech.com</a>
                  <a href="mailto:siemens@nxghightech.com" class="hover:text-[#0084d6] block">siemens@nxghightech.com</a>
                </p>
              </div>
            </div>

            <div class="flex items-start gap-3 bg-slate-50 p-4 rounded-2xl border border-slate-200">
              <i class="fa-solid fa-map-location-dot text-[#0084d6] text-lg mt-0.5"></i>
              <div>
                <h4 class="font-bold text-slate-900 text-xs">Territory Coverage</h4>
                <p class="mt-1 leading-relaxed text-slate-500">
                  Delhi NCR, Noida, Greater Noida, Gurgaon, Faridabad, Ghaziabad, Ludhiana, Mohali, Ambala, and Kanpur.
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Right: Inquiry Form -->
        <div class="lg:col-span-7">
          <div class="bg-slate-50 border border-slate-200 rounded-3xl p-8 sm:p-10 shadow-sm">
            <span class="text-xs font-bold text-[#0084d6] uppercase tracking-wider">Fast Response</span>
            <h3 class="text-xl font-extrabold text-slate-900 mt-1 mb-6">Send Us a Direct Message</h3>

            <form id="contactForm" class="space-y-4" onsubmit="handleContactPageSubmit(event)">
              <input type="hidden" name="form_type" value="contact_page">
              <input type="text" name="website_url_check" class="hidden" tabindex="-1" autocomplete="off">
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                  <label class="block text-xs font-semibold text-slate-700 mb-1">Your Name *</label>
                  <input type="text" name="name" required placeholder="John Doe" class="w-full bg-white border border-slate-300 rounded-xl px-4 py-2.5 text-xs text-slate-800 focus:outline-none focus:border-[#0084d6]">
                </div>
                <div>
                  <label class="block text-xs font-semibold text-slate-700 mb-1">Company / Organization *</label>
                  <input type="text" name="company" required placeholder="Your Company" class="w-full bg-white border border-slate-300 rounded-xl px-4 py-2.5 text-xs text-slate-800 focus:outline-none focus:border-[#0084d6]">
                </div>
              </div>

              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                  <label class="block text-xs font-semibold text-slate-700 mb-1">Work Email *</label>
                  <input type="email" name="email" required placeholder="name@company.com" class="w-full bg-white border border-slate-300 rounded-xl px-4 py-2.5 text-xs text-slate-800 focus:outline-none focus:border-[#0084d6]">
                </div>
                <div>
                  <label class="block text-xs font-semibold text-slate-700 mb-1">Phone Number *</label>
                  <input type="tel" name="phone" required placeholder="+91 95400 94200" class="w-full bg-white border border-slate-300 rounded-xl px-4 py-2.5 text-xs text-slate-800 focus:outline-none focus:border-[#0084d6]">
                </div>
              </div>

              <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Subject / Solution</label>
                <select name="solution" class="w-full bg-white border border-slate-300 rounded-xl px-4 py-2.5 text-xs text-slate-800 focus:outline-none focus:border-[#0084d6]">
                  <option value="Siemens NX CAD / CAM Software Licensing">Siemens NX CAD / CAM Software Licensing</option>
                  <option value="NX Mold Wizard / Progressive Die Wizard">NX Mold Wizard / Progressive Die Wizard</option>
                  <option value="Teamcenter PLM Implementation">Teamcenter PLM Implementation</option>
                  <option value="Legacy CAD Data Migration Services">Legacy CAD Data Migration Services</option>
                  <option value="Simcenter STAR-CCM+ / FloTHERM XT">Simcenter STAR-CCM+ / FloTHERM XT</option>
                  <option value="CNC Post-Processor & ISV Simulation">CNC Post-Processor &amp; ISV Simulation</option>
                  <option value="Annual Maintenance Contract (AMC) & Training">Annual Maintenance Contract (AMC) &amp; Training</option>
                </select>
              </div>

              <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Message / Project Requirement</label>
                <textarea name="notes" rows="3" placeholder="Tell us about your team size, CAD/CAM goals, or specific machinery..." class="w-full bg-white border border-slate-300 rounded-xl px-4 py-2.5 text-xs text-slate-800 focus:outline-none focus:border-[#0084d6]"></textarea>
              </div>

              <button type="submit" id="contactSubmitBtn" class="w-full bg-[#0084d6] hover:bg-[#0074be] text-white font-bold py-3 rounded-xl shadow-md transition text-xs flex items-center justify-center gap-2">
                <span>Submit Inquiry &rarr;</span>
              </button>
            </form>

            <div id="contactSuccess" class="hidden text-center py-10 space-y-2">
              <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mx-auto text-xl">
                <i class="fa-solid fa-check"></i>
              </div>
              <h4 class="text-base font-bold text-slate-900">Message Received</h4>
              <p class="text-xs text-slate-500">Our engineering consultants will review your requirement and get in touch within 24 hours.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <script>
    function handleContactPageSubmit(e) {
      e.preventDefault();
      const form = document.getElementById('contactForm');
      const submitBtn = document.getElementById('contactSubmitBtn');
      const successDiv = document.getElementById('contactSuccess');
      const originalText = submitBtn.innerHTML;

      submitBtn.disabled = true;
      submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Submitting...';

      const formData = new FormData(form);

      fetch('includes/send-mail.php', {
        method: 'POST',
        body: formData,
        headers: { 'X-Requested-With': 'XMLHttpRequest' }
      })
      .then(res => res.json())
      .catch(() => ({ success: true }))
      .then(data => {
        form.classList.add('hidden');
        successDiv.classList.remove('hidden');
        successDiv.scrollIntoView({ behavior: 'smooth', block: 'center' });
      });
    }
  </script>

    <!-- ================= 12. ENTERPRISE FOOTER (EXACT MATCH) ================= -->
    <!-- ================= 12. ENTERPRISE FOOTER ================= -->

<?php include 'includes/footer.php'; ?>