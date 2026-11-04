// NXG Hightech - Interactive Scripts

document.addEventListener('DOMContentLoaded', () => {

  // 1. Header scroll effect
  const mainHeader = document.getElementById('mainHeader');
  const backToTopBtn = document.getElementById('backToTopBtn');

  window.addEventListener('scroll', () => {
    if (window.scrollY > 40) {
      mainHeader.classList.add('shadow-md');
    } else {
      mainHeader.classList.remove('shadow-md');
    }

    // Back to top visibility
    if (window.scrollY > 400) {
      backToTopBtn.classList.remove('opacity-0', 'translate-y-6', 'pointer-events-none');
      backToTopBtn.classList.add('opacity-100', 'translate-y-0', 'pointer-events-auto');
    } else {
      backToTopBtn.classList.add('opacity-0', 'translate-y-6', 'pointer-events-none');
      backToTopBtn.classList.remove('opacity-100', 'translate-y-0', 'pointer-events-auto');
    }
  });

  // Back to top click
  backToTopBtn.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });

  // 2. Mobile Menu Toggle
  const mobileMenuBtn = document.getElementById('mobileMenuBtn');
  const mobileMenu = document.getElementById('mobileMenu');
  const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');

  if (mobileMenuBtn && mobileMenu) {
    mobileMenuBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });

    mobileNavLinks.forEach(link => {
      link.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
      });
    });
  }

  // 3. Search Modal Handling
  const searchBtn = document.getElementById('searchBtn');
  const mobileSearchBtn = document.getElementById('mobileSearchBtn');
  const searchModal = document.getElementById('searchModal');
  const closeSearchModal = document.getElementById('closeSearchModal');
  const searchInput = document.getElementById('searchInput');

  function openSearch() {
    searchModal.classList.remove('hidden');
    searchModal.classList.add('flex');
    setTimeout(() => searchInput && searchInput.focus(), 100);
  }

  function closeSearch() {
    searchModal.classList.add('hidden');
    searchModal.classList.remove('flex');
  }

  if (searchBtn) searchBtn.addEventListener('click', openSearch);
  if (mobileSearchBtn) mobileSearchBtn.addEventListener('click', openSearch);
  if (closeSearchModal) closeSearchModal.addEventListener('click', closeSearch);

  if (searchModal) {
    searchModal.addEventListener('click', (e) => {
      if (e.target === searchModal) closeSearch();
    });
  }

  window.fillSearch = function(keyword) {
    if (searchInput) {
      searchInput.value = keyword;
      searchInput.focus();
    }
  };

  // 4. Video Modal ("Watch Our Story")
  const videoModal = document.getElementById('videoModal');
  const closeVideoModal = document.getElementById('closeVideoModal');
  const videoIframe = document.getElementById('videoIframe');

  window.openVideoModal = function() {
    // Siemens industrial showcase video
    videoIframe.src = "https://www.youtube-nocookie.com/embed/fWf5n_m414c?autoplay=1";
    videoModal.classList.remove('hidden');
    videoModal.classList.add('flex');
  };

  function closeVideo() {
    videoModal.classList.add('hidden');
    videoModal.classList.remove('flex');
    videoIframe.src = "";
  }

  if (closeVideoModal) closeVideoModal.addEventListener('click', closeVideo);
  if (videoModal) {
    videoModal.addEventListener('click', (e) => {
      if (e.target === videoModal) closeVideo();
    });
  }

  // 5. Expert Consultation Modal
  const expertModal = document.getElementById('expertModal');

  window.openExpertModal = function() {
    expertModal.classList.remove('hidden');
    expertModal.classList.add('flex');
  };

  window.closeExpertModal = function() {
    expertModal.classList.add('hidden');
    expertModal.classList.remove('flex');
  };

  if (expertModal) {
    expertModal.addEventListener('click', (e) => {
      if (e.target === expertModal) window.closeExpertModal();
    });
  }

  window.handleExpertSubmit = function(event) {
    event.preventDefault();
    const form = document.getElementById('expertForm');
    const successMsg = document.getElementById('expertSuccess');

    form.classList.add('hidden');
    successMsg.classList.remove('hidden');

    setTimeout(() => {
      form.reset();
      form.classList.remove('hidden');
      successMsg.classList.add('hidden');
      window.closeExpertModal();
    }, 3000);
  };

  // 5B. Event Registration Modal
  const eventModal = document.getElementById('eventModal');

  window.openEventModal = function() {
    if (eventModal) {
      eventModal.classList.remove('hidden');
      eventModal.classList.add('flex');
    }
  };

  window.closeEventModal = function() {
    if (eventModal) {
      eventModal.classList.add('hidden');
      eventModal.classList.remove('flex');
    }
  };

  if (eventModal) {
    eventModal.addEventListener('click', (e) => {
      if (e.target === eventModal) window.closeEventModal();
    });
  }

  window.handleEventSubmit = function(event) {
    event.preventDefault();
    const form = document.getElementById('eventForm');
    const successMsg = document.getElementById('eventSuccess');

    form.classList.add('hidden');
    successMsg.classList.remove('hidden');

    setTimeout(() => {
      form.reset();
      form.classList.remove('hidden');
      successMsg.classList.add('hidden');
      window.closeEventModal();
    }, 3000);
  };

  // 6. Client Logo Scroller Arrows
  const logoScroller = document.getElementById('logoScroller');
  const logoPrevBtn = document.getElementById('logoPrevBtn');
  const logoNextBtn = document.getElementById('logoNextBtn');

  if (logoScroller && logoPrevBtn && logoNextBtn) {
    logoPrevBtn.addEventListener('click', () => {
      logoScroller.scrollBy({ left: -250, behavior: 'smooth' });
    });
    logoNextBtn.addEventListener('click', () => {
      logoScroller.scrollBy({ left: 250, behavior: 'smooth' });
    });
  }

  // 7. Industry Scroller Arrows
  const indScroller = document.getElementById('industryScroller') || document.getElementById('industriesScroller');
  const indPrevBtn = document.getElementById('indPrevBtn');
  const indNextBtn = document.getElementById('indNextBtn');

  if (indScroller && indPrevBtn && indNextBtn) {
    indPrevBtn.addEventListener('click', () => {
      indScroller.scrollBy({ left: -220, behavior: 'smooth' });
    });
    indNextBtn.addEventListener('click', () => {
      indScroller.scrollBy({ left: 220, behavior: 'smooth' });
    });
  }

  // 8. Testimonials carousel scrolling
  const testContainer = document.getElementById('testimonialContainer');
  const testPrevBtn = document.getElementById('testPrevBtn');
  const testNextBtn = document.getElementById('testNextBtn');

  if (testContainer && testPrevBtn && testNextBtn) {
    testPrevBtn.addEventListener('click', () => {
      testContainer.scrollBy({ left: -350, behavior: 'smooth' });
    });
    testNextBtn.addEventListener('click', () => {
      testContainer.scrollBy({ left: 350, behavior: 'smooth' });
    });
  }

  // 9. Blog carousel scrolling
  const blogPrevBtn = document.getElementById('blogPrevBtn');
  const blogNextBtn = document.getElementById('blogNextBtn');

  if (blogPrevBtn && blogNextBtn) {
    blogPrevBtn.addEventListener('click', () => {
      const container = blogPrevBtn.closest('section').querySelector('.grid');
      if (container) container.scrollBy({ left: -350, behavior: 'smooth' });
    });
    blogNextBtn.addEventListener('click', () => {
      const container = blogNextBtn.closest('section').querySelector('.grid');
      if (container) container.scrollBy({ left: 350, behavior: 'smooth' });
    });
  }

  // ESC key to close any active modal
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      closeSearch();
      closeVideo();
      window.closeExpertModal();
      window.closeEventModal();
    }
  });

});

