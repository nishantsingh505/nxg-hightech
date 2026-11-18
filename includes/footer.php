<?php
require_once __DIR__ . '/config.php';
?>
  <!-- ================= 12. ENTERPRISE FOOTER ================= -->
  <footer class="bg-[#030712] text-slate-400 pt-14 pb-8 border-t border-slate-800">
    <div class="max-w-[1360px] mx-auto px-4 sm:px-6">

      <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-12 gap-6 sm:gap-8 pb-12 border-b border-slate-800">

        <!-- Col 1: NXG Brand Info (Full width on mobile, 4 cols on desktop) -->
        <div class="col-span-2 lg:col-span-4 space-y-4">
          <a href="index.php" class="flex items-center gap-2.5">
            <img src="assets/site_logo.png" alt="<?= SITE_NAME ?>" class="h-9 w-auto object-contain">
            <div class="flex flex-col">
              <span class="text-base sm:text-lg font-black tracking-wide text-white leading-none"><?= SITE_NAME ?></span>
              <span class="text-[9px] font-bold tracking-widest text-[#0084d6] uppercase mt-0.5">SIEMENS SOLUTION PARTNER</span>
            </div>
          </a>
          <p class="text-xs text-slate-400 leading-relaxed max-w-sm">
            NXG Hightech is an authorised channel partner for Siemens Digital Industries Software, delivering
            engineering and manufacturing solutions to help businesses design better, manufacture smarter and innovate
            faster.
          </p>

          <!-- Social Media Icons -->
          <div class="flex items-center gap-2.5 pt-1">
            <a href="<?= LINK_LINKEDIN ?>" target="_blank" rel="noreferrer"
              class="w-7 h-7 rounded-lg bg-[#0077b5] text-white flex items-center justify-center text-xs hover:opacity-90 transition shadow-sm"
              aria-label="LinkedIn">
              <i class="fa-brands fa-linkedin-in"></i>
            </a>
            <a href="<?= LINK_YOUTUBE ?>" target="_blank" rel="noreferrer"
              class="w-7 h-7 rounded-lg bg-[#ff0000] text-white flex items-center justify-center text-xs hover:opacity-90 transition shadow-sm"
              aria-label="YouTube">
              <i class="fa-brands fa-youtube"></i>
            </a>
            <a href="<?= LINK_FACEBOOK ?>" target="_blank" rel="noreferrer"
              class="w-7 h-7 rounded-lg bg-[#1877f2] text-white flex items-center justify-center text-xs hover:opacity-90 transition shadow-sm"
              aria-label="Facebook">
              <i class="fa-brands fa-facebook-f"></i>
            </a>
            <a href="<?= LINK_INSTAGRAM ?>" target="_blank" rel="noreferrer"
              class="w-7 h-7 rounded-lg bg-gradient-to-tr from-amber-500 via-rose-500 to-purple-600 text-white flex items-center justify-center text-xs hover:opacity-90 transition shadow-sm"
              aria-label="Instagram">
              <i class="fa-brands fa-instagram"></i>
            </a>
          </div>
        </div>

        <!-- Col 2: Quick Links -->
        <div class="col-span-1 lg:col-span-2">
          <h4 class="text-xs sm:text-sm font-bold text-white mb-4">Quick Links</h4>
          <ul class="space-y-2 text-xs">
            <li><a href="index.php" class="hover:text-white transition">Home</a></li>
            <li><a href="about.php" class="hover:text-white transition">About Us</a></li>
            <li><a href="index.php#solutions" class="hover:text-white transition">Solutions</a></li>
            <li><a href="index.php#industries" class="hover:text-white transition">Industries</a></li>
            <li><a href="services.php" class="hover:text-white transition">Services</a></li>
            <li><a href="events.php" class="hover:text-white transition">Events &amp; Forum</a></li>
            <li><a href="event-registration.php" class="hover:text-white transition">Registration</a></li>
            <li><a href="contact-us.php" class="hover:text-white transition">Contact</a></li>
          </ul>
        </div>

        <!-- Col 3: Our Solutions -->
        <div class="col-span-1 lg:col-span-2">
          <h4 class="text-xs sm:text-sm font-bold text-white mb-4">Our Solutions</h4>
          <ul class="space-y-2 text-xs">
            <li><a href="nx-ug.php" class="hover:text-white transition">NX CAD</a></li>
            <li><a href="nx-ug.php#cam" class="hover:text-white transition">NX CAM</a></li>
            <li><a href="teamcenter.php" class="hover:text-white transition">Teamcenter</a></li>
            <li><a href="solid-edge.php" class="hover:text-white transition">Solid Edge</a></li>
            <li><a href="star-ccm.php" class="hover:text-white transition">Simcenter</a></li>
            <li><a href="star-ccm.php" class="hover:text-white transition">Star-CCM+</a></li>
            <li><a href="flotherm-xt.php" class="hover:text-white transition">FloTHERM XT</a></li>
            <li><a href="services.php" class="hover:text-white transition">Tecnomatix</a></li>
          </ul>
        </div>

        <!-- Col 4: Our Services -->
        <div class="col-span-1 lg:col-span-2">
          <h4 class="text-xs sm:text-sm font-bold text-white mb-4">Our Services</h4>
          <ul class="space-y-2 text-xs">
            <li><a href="services.php" class="hover:text-white transition">Software Sales &amp; Support</a></li>
            <li><a href="teamcenter.php" class="hover:text-white transition">Implementation</a></li>
            <li><a href="services.php" class="hover:text-white transition">Data Migration</a></li>
            <li><a href="services.php" class="hover:text-white transition">Engineering Consulting</a></li>
            <li><a href="services.php" class="hover:text-white transition">Training &amp; Support</a></li>
            <li><a href="services.php" class="hover:text-white transition">Customization</a></li>
            <li><a href="contact-us.php" class="hover:text-white transition">Technical Support</a></li>
            <li><a href="contact-us.php" class="hover:text-white transition">AMC</a></li>
          </ul>
        </div>

        <!-- Col 5: Contact Us -->
        <div class="col-span-1 sm:col-span-2 lg:col-span-2">
          <h4 class="text-xs sm:text-sm font-bold text-white mb-4">Contact Us</h4>
          <ul class="space-y-3 text-xs">
            <li>
              <a href="tel:<?= CONTACT_PHONE_TEL ?>" class="hover:text-white transition flex items-center gap-2.5">
                <i class="fa-solid fa-phone text-[#0084d6] text-xs"></i>
                <span class="font-medium"><?= CONTACT_PHONE_PRIMARY ?></span>
              </a>
            </li>
            <li>
              <a href="mailto:<?= CONTACT_EMAIL_INFO ?>" class="hover:text-white transition flex items-center gap-2.5">
                <i class="fa-solid fa-envelope text-[#0084d6] text-xs"></i>
                <span><?= CONTACT_EMAIL_INFO ?></span>
              </a>
            </li>
            <li class="flex items-start gap-2.5">
              <i class="fa-solid fa-location-dot text-[#0084d6] text-xs mt-0.5"></i>
              <span class="leading-relaxed">827, T3, Golden-I, Tech Zone IV,<br>Greater Noida West, UP, India</span>
            </li>
          </ul>
        </div>

      </div>

      <!-- Copyright Bar -->
      <div class="pt-6 flex flex-col sm:flex-row items-center justify-between text-[11px] text-slate-500 gap-2">
        <p>&copy; <?= date('Y') ?> <?= COMPANY_FULL_NAME ?>. All Rights Reserved.</p>
        <div class="flex items-center gap-4">
          <a href="contact-us.php" class="hover:text-slate-300 transition">Privacy Policy</a>
          <span>|</span>
          <a href="contact-us.php" class="hover:text-slate-300 transition">Terms of Service</a>
          <span>|</span>
          <a href="contact-us.php" class="hover:text-slate-300 transition">Support</a>
        </div>
      </div>

    </div>
  </footer>

  <!-- Floating Back to Top Button -->
  <button id="backToTopBtn" aria-label="Back to Top"
    class="fixed bottom-6 right-6 w-9 h-9 rounded-full bg-[#0084d6] hover:bg-[#0074be] text-white shadow-xl flex items-center justify-center transition-all duration-300 z-40 opacity-0 translate-y-6 pointer-events-none">
    <i class="fa-solid fa-arrow-up text-xs"></i>
  </button>

  <!-- Talk to an Expert Modal -->
  <div id="expertModal" class="fixed inset-0 z-50 bg-black/75 backdrop-blur-sm hidden items-center justify-center p-4">
    <div
      class="bg-white border border-slate-200 w-full max-w-lg rounded-2xl p-6 sm:p-7 shadow-2xl relative animate-scaleUp">
      <button onclick="closeExpertModal()" class="absolute top-4 right-4 text-slate-400 hover:text-slate-700 text-lg">
        <i class="fa-solid fa-xmark"></i>
      </button>

      <div class="mb-5">
        <span class="text-[10px] uppercase font-bold tracking-widest text-[#0084d6]">Siemens Certified Partner</span>
        <h3 class="text-xl font-extrabold text-slate-900 mt-0.5">Talk to a Siemens Solutions Expert</h3>
        <p class="text-slate-500 text-xs mt-1">Get genuine Siemens DISW software licensing, implementation timelines,
          and technical consultation.</p>
      </div>

      <form id="expertForm" class="space-y-3.5" method="POST" action="includes/send-mail.php" onsubmit="handleExpertFormSubmit(event)">
        <input type="hidden" name="form_type" value="expert_consultation">
        
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
          <div>
            <label class="block text-[11px] font-semibold text-slate-700 mb-1">Full Name *</label>
            <input type="text" name="name" required placeholder="John Doe"
              class="w-full bg-slate-50 border border-slate-300 rounded-lg px-3 py-2 text-xs text-slate-800 focus:outline-none focus:border-[#0084d6]">
          </div>
          <div>
            <label class="block text-[11px] font-semibold text-slate-700 mb-1">Work Email *</label>
            <input type="email" name="email" required placeholder="name@company.com"
              class="w-full bg-slate-50 border border-slate-300 rounded-lg px-3 py-2 text-xs text-slate-800 focus:outline-none focus:border-[#0084d6]">
          </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
          <div>
            <label class="block text-[11px] font-semibold text-slate-700 mb-1">Phone Number *</label>
            <input type="tel" name="phone" required placeholder="+91 95400 94200"
              class="w-full bg-slate-50 border border-slate-300 rounded-lg px-3 py-2 text-xs text-slate-800 focus:outline-none focus:border-[#0084d6]">
          </div>
          <div>
            <label class="block text-[11px] font-semibold text-slate-700 mb-1">Company / Location</label>
            <input type="text" name="company" placeholder="e.g. Noida / Gurgaon / Delhi"
              class="w-full bg-slate-50 border border-slate-300 rounded-lg px-3 py-2 text-xs text-slate-800 focus:outline-none focus:border-[#0084d6]">
          </div>
        </div>

        <div>
          <label class="block text-[11px] font-semibold text-slate-700 mb-1">Solution of Interest</label>
          <select name="solution"
            class="w-full bg-slate-50 border border-slate-300 rounded-lg px-3 py-2 text-xs text-slate-800 focus:outline-none focus:border-[#0084d6]">
            <option value="NX CAD">Siemens NX CAD (Product Design / Mold Wizard)</option>
            <option value="NX CAM">Siemens NX CAM &amp; Post-Processor Development</option>
            <option value="Teamcenter">Teamcenter PLM Implementation</option>
            <option value="Simcenter">Simcenter STAR-CCM+ / FloTHERM XT</option>
            <option value="Solid Edge">Solid Edge 3D CAD</option>
            <option value="Data Migration">Legacy CAD Data Migration</option>
          </select>
        </div>

        <div>
          <label class="block text-[11px] font-semibold text-slate-700 mb-1">Requirement / Notes</label>
          <textarea name="notes" rows="2" placeholder="Tell us about your team size, CAD migration goals, or software licenses..."
            class="w-full bg-slate-50 border border-slate-300 rounded-lg px-3 py-2 text-xs text-slate-800 focus:outline-none focus:border-[#0084d6]"></textarea>
        </div>

        <button type="submit" id="expertSubmitBtn"
          class="w-full bg-[#0084d6] hover:bg-[#0074be] text-white font-bold py-2.5 rounded-lg shadow transition text-xs flex items-center justify-center gap-2">
          <span>Schedule Free Consultation &rarr;</span>
        </button>
      </form>

      <div id="expertSuccess" class="hidden text-center py-6">
        <div
          class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mx-auto mb-2 text-xl">
          <i class="fa-solid fa-check"></i>
        </div>
        <h4 class="text-base font-bold text-slate-900">Thank You!</h4>
        <p class="text-slate-500 text-xs mt-1">Our Siemens Certified Specialist will contact you shortly.</p>
      </div>
    </div>
  </div>

  <script src="script.js"></script>
  <script>
    // AJAX Submission handler for Expert Modal
    function handleExpertFormSubmit(e) {
      e.preventDefault();
      const form = document.getElementById('expertForm');
      const submitBtn = document.getElementById('expertSubmitBtn');
      const successDiv = document.getElementById('expertSuccess');
      const originalText = submitBtn.innerHTML;

      submitBtn.disabled = true;
      submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Submitting...';

      const formData = new FormData(form);

      fetch('includes/send-mail.php', {
        method: 'POST',
        body: formData,
        headers: {
          'X-Requested-With': 'XMLHttpRequest'
        }
      })
      .then(res => res.json())
      .catch(() => ({ success: true })) // Fallback optimistic on static/offline preview
      .then(data => {
        form.classList.add('hidden');
        successDiv.classList.remove('hidden');
        setTimeout(() => {
          form.reset();
          submitBtn.disabled = false;
          submitBtn.innerHTML = originalText;
          form.classList.remove('hidden');
          successDiv.classList.add('hidden');
          closeExpertModal();
        }, 3000);
      });
    }
  </script>
</body>

</html>
