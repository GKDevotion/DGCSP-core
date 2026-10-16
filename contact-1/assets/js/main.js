/**
 * DEVOTION GLOBAL CSP — MAIN INTERACTION & CALCULATOR SCRIPT
 * High-end luxury animations, stats counter, matrix filter,
 * interactive cost estimator, FAQ accordion, 3D card tilt & modal.
 */

(function () {
  'use strict';

  /* ==========================================================================
     1. STICKY HEADER & MOBILE NAVIGATION
     ========================================================================== */
  const header = document.getElementById('siteHeader');
  const menuToggle = document.getElementById('menuToggle');
  const mainNav = document.getElementById('mainNav');

  window.addEventListener('scroll', () => {
    if (window.scrollY > 40) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });

  if (menuToggle && mainNav) {
    menuToggle.addEventListener('click', () => {
      const isVisible = mainNav.style.display === 'block';
      mainNav.style.display = isVisible ? 'none' : 'block';
      if (!isVisible) {
        mainNav.style.position = 'absolute';
        mainNav.style.top = '100%';
        mainNav.style.left = '0';
        mainNav.style.width = '100%';
        mainNav.style.background = '#ffffff';
        mainNav.style.padding = '20px 24px';
        mainNav.style.boxShadow = '0 15px 30px rgba(0,0,0,0.1)';
        mainNav.style.borderBottom = '1px solid var(--gold-border)';
        mainNav.querySelector('ul').style.flexDirection = 'column';
        mainNav.querySelector('ul').style.alignItems = 'flex-start';
        mainNav.querySelector('ul').style.gap = '16px';
      }
    });

    // Close mobile menu on nav link click
    mainNav.querySelectorAll('.nav-link').forEach((link) => {
      link.addEventListener('click', () => {
        if (window.innerWidth <= 768) {
          mainNav.style.display = 'none';
        }
      });
    });
  }

  /* ==========================================================================
     2. STATS COUNTER STRIP (IntersectionObserver)
     ========================================================================== */
  const statNumbers = document.querySelectorAll('.stat-number[data-count]');
  let counted = false;

  const countUp = (el, target) => {
    let start = 0;
    const duration = 1800;
    const stepTime = 20;
    const totalSteps = duration / stepTime;
    const increment = target / totalSteps;

    const timer = setInterval(() => {
      start += increment;
      if (start >= target) {
        el.textContent = `${target}+`;
        clearInterval(timer);
      } else {
        el.textContent = `${Math.floor(start)}+`;
      }
    }, stepTime);
  };

  if ('IntersectionObserver' in window && statNumbers.length > 0) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting && !counted) {
          counted = true;
          statNumbers.forEach((el) => {
            const val = parseInt(el.getAttribute('data-count'), 10) || 50;
            countUp(el, val);
          });
        }
      });
    }, { threshold: 0.3 });

    statNumbers.forEach((num) => observer.observe(num));
  }

  /* ==========================================================================
     3. GLOBAL JURISDICTIONS MATRIX TABLE FILTER TABS
     ========================================================================== */
  const tabBtns = document.querySelectorAll('.tab-btn');
  const matrixRows = document.querySelectorAll('.matrix-row');

  tabBtns.forEach((btn) => {
    btn.addEventListener('click', function () {
      tabBtns.forEach((b) => b.classList.remove('active'));
      this.classList.add('active');

      const filter = this.getAttribute('data-filter');

      matrixRows.forEach((row) => {
        const categories = row.getAttribute('data-category') || '';
        if (filter === 'all' || categories.includes(filter)) {
          row.style.display = '';
          row.style.animation = 'slideUpFade 0.4s ease-out';
        } else {
          row.style.display = 'none';
        }
      });
    });
  });

  /* ==========================================================================
     4. INTERACTIVE CRYPTO & VASP COST ESTIMATOR
     ========================================================================== */
  const estimatorState = {
    sector: { name: 'VASP Exchange', cost: 12500, time: 8 },
    jurisdiction: { name: 'Lithuania (EU VASP)', cost: 15000, time: 8 },
    banking: { name: 'Full Turnkey Suite', cost: 9500, time: 4 }
  };

  const summarySectorEl = document.getElementById('summarySector');
  const summaryJurEl = document.getElementById('summaryJur');
  const summaryBankEl = document.getElementById('summaryBank');
  const summaryTimelineEl = document.getElementById('summaryTimeline');
  const summaryTotalEl = document.getElementById('summaryTotal');

  function updateEstimator() {
    const totalCost = estimatorState.sector.cost + estimatorState.jurisdiction.cost + estimatorState.banking.cost;
    const maxWeeks = Math.max(estimatorState.sector.time, estimatorState.jurisdiction.time) + Math.round(estimatorState.banking.time / 2);
    const minWeeks = maxWeeks - 3;

    if (summarySectorEl) summarySectorEl.textContent = estimatorState.sector.name;
    if (summaryJurEl) summaryJurEl.textContent = estimatorState.jurisdiction.name;
    if (summaryBankEl) summaryBankEl.textContent = estimatorState.banking.name;
    if (summaryTimelineEl) summaryTimelineEl.textContent = `${minWeeks} - ${maxWeeks} Weeks`;
    if (summaryTotalEl) {
      summaryTotalEl.textContent = `$${totalCost.toLocaleString('en-US')}`;
    }
  }

  // Setup click listeners on all option boxes
  const optionBoxes = document.querySelectorAll('.option-box');
  optionBoxes.forEach((box) => {
    box.addEventListener('click', function () {
      const type = this.getAttribute('data-type');
      const name = this.getAttribute('data-name');
      const cost = parseInt(this.getAttribute('data-cost'), 10) || 0;
      const time = parseInt(this.getAttribute('data-time'), 10) || 4;

      // Unselect siblings
      const parentGrid = this.parentElement;
      parentGrid.querySelectorAll('.option-box').forEach((b) => b.classList.remove('active'));
      this.classList.add('active');

      if (type && estimatorState[type]) {
        estimatorState[type] = { name, cost, time };
        updateEstimator();
      }
    });
  });

  updateEstimator();

  /* ==========================================================================
     5. FREQUENTLY ASKED QUESTIONS ACCORDION
     ========================================================================== */
  const faqItems = document.querySelectorAll('.faq-item');

  faqItems.forEach((item) => {
    const questionBtn = item.querySelector('.faq-question');
    if (!questionBtn) return;

    questionBtn.addEventListener('click', () => {
      const isActive = item.classList.contains('active');

      // Close all other items
      faqItems.forEach((other) => {
        if (other !== item) other.classList.remove('active');
      });

      // Toggle current item
      if (isActive) {
        item.classList.remove('active');
      } else {
        item.classList.add('active');
      }
    });
  });

  /* ==========================================================================
     6. 3D TILT & SPOTLIGHT TRACKING ON CONTACT CARDS
     ========================================================================== */
  const contactCards = document.querySelectorAll('.contact-info-card, .contact-form-card');

  contactCards.forEach((card) => {
    card.addEventListener('mousemove', (e) => {
      const rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;

      // Update CSS variables for radial spotlight beam
      card.style.setProperty('--mouse-x', `${x}px`);
      card.style.setProperty('--mouse-y', `${y}px`);

      if (window.innerWidth > 1024) {
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;
        const rotateX = -((y - centerY) / centerY) * 5;
        const rotateY = ((x - centerX) / centerX) * 5;

        card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.01, 1.01, 1.01)`;
      }
    });

    card.addEventListener('mouseleave', () => {
      card.style.transform = '';
    });
  });

  /* ==========================================================================
     7. INSTANT PROPOSAL POPUP MODAL
     ========================================================================== */
  const modal = document.getElementById('proposalModal');
  const openModalBtn = document.getElementById('openProposalBtn');
  const closeModalBtn = document.getElementById('modalCloseBtn');
  const modalForm = document.getElementById('modalForm');

  function openModal() {
    if (modal) {
      modal.classList.add('active');
      document.body.style.overflow = 'hidden';
    }
  }

  function closeModal() {
    if (modal) {
      modal.classList.remove('active');
      document.body.style.overflow = '';
    }
  }

  if (openModalBtn) {
    openModalBtn.addEventListener('click', openModal);
  }

  if (closeModalBtn) {
    closeModalBtn.addEventListener('click', closeModal);
  }

  if (modal) {
    modal.addEventListener('click', (e) => {
      if (e.target === modal) closeModal();
    });
  }

  window.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && modal && modal.classList.contains('active')) {
      closeModal();
    }
  });

  if (modalForm) {
    modalForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const submitBtn = modalForm.querySelector('button[type="submit"]');
      const originalHTML = submitBtn.innerHTML;
      submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin me-2"></i> Generating Proposal...';
      submitBtn.disabled = true;

      setTimeout(() => {
        submitBtn.innerHTML = '<i class="fa-solid fa-check me-2"></i> Proposal Sent to Email!';
        submitBtn.style.background = '#10b981';
        setTimeout(() => {
          closeModal();
          modalForm.reset();
          submitBtn.innerHTML = originalHTML;
          submitBtn.style.background = '';
          submitBtn.disabled = false;
        }, 2200);
      }, 1400);
    });
  }

  /* ==========================================================================
     8. CONSULTATION FORM SUBMIT HANDLER
     ========================================================================== */
  const consultationForm = document.getElementById('consultationForm');
  if (consultationForm) {
    consultationForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const submitBtn = consultationForm.querySelector('button[type="submit"]');
      const originalHTML = submitBtn.innerHTML;

      submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin me-2"></i> Transmitting Inquiry...';
      submitBtn.disabled = true;

      setTimeout(() => {
        submitBtn.innerHTML = '<i class="fa-solid fa-circle-check me-2"></i> Consultation Confirmed! Counsel contacting in < 2 hrs.';
        submitBtn.style.background = '#10b981';
        setTimeout(() => {
          consultationForm.reset();
          submitBtn.innerHTML = originalHTML;
          submitBtn.style.background = '';
          submitBtn.disabled = false;
        }, 3500);
      }, 1500);
    });
  }

})();
