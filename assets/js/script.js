/**
 * PRIYANKA DEY — WEBSITE JAVASCRIPT
 * 1. Mobile navigation & base interactions
 * 2. Animated floating galaxy stars (slow celestial motion)
 * 3. 5-Image & Text Synchronized Hero Carousel Loop
 * 4. Animated celestial mouse cursor (HOME PAGE ONLY)
 */

(function () {
  'use strict';

  // ==========================================================================
  // 1. BASE NAVIGATION & UTILITIES
  // ==========================================================================

  // ==========================================================================
  // 1. MOBILE NAVIGATION & SERVICES DROPDOWN INTERACTIONS
  // ==========================================================================

  const menuBtn = document.querySelector('.menu-btn');
  const mobileNav = document.querySelector('.mobile-nav');
  const mobileServicesToggle = document.querySelector('#mobileServicesToggle');
  const mobileServicesMenu = document.querySelector('#mobileServicesMenu');
  const servicesDropdown = document.querySelector('#servicesDropdown');
  const servicesTrigger = document.querySelector('#servicesTrigger');

  // Mobile hamburger menu toggle
  if (menuBtn && mobileNav) {
    menuBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      const isOpen = mobileNav.classList.toggle('is-open');
      menuBtn.classList.toggle('is-active', isOpen);
      menuBtn.setAttribute('aria-expanded', String(isOpen));
      document.body.classList.toggle('nav-open', isOpen);
    });

    // Close mobile nav when clicking normal links inside mobile nav
    mobileNav.querySelectorAll('a:not(.mobile-dropdown-header a)').forEach((a) => {
      a.addEventListener('click', () => {
        mobileNav.classList.remove('is-open');
        menuBtn.classList.remove('is-active');
        menuBtn.setAttribute('aria-expanded', 'false');
        document.body.classList.remove('nav-open');
      });
    });
  }

  // Mobile Services Accordion Toggle
  if (mobileServicesToggle && mobileServicesMenu) {
    mobileServicesToggle.addEventListener('click', (e) => {
      e.preventDefault();
      e.stopPropagation();
      const isOpen = mobileServicesMenu.classList.toggle('is-open');
      mobileServicesToggle.classList.toggle('is-open', isOpen);
      mobileServicesToggle.setAttribute('aria-expanded', String(isOpen));
    });
  }

  // Desktop Dropdown Keyboard & Outside Click Accessibility
  if (servicesDropdown && servicesTrigger) {
    // Keyboard Escape to close any open dropdowns or mobile menu
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        servicesDropdown.classList.remove('is-open');
        servicesTrigger.setAttribute('aria-expanded', 'false');
        if (mobileNav && mobileNav.classList.contains('is-open')) {
          mobileNav.classList.remove('is-open');
          if (menuBtn) {
            menuBtn.classList.remove('is-active');
            menuBtn.setAttribute('aria-expanded', 'false');
          }
          document.body.classList.remove('nav-open');
        }
      }
    });

    // Close dropdown and mobile nav on outside click
    document.addEventListener('click', (e) => {
      if (!servicesDropdown.contains(e.target)) {
        servicesDropdown.classList.remove('is-open');
        servicesTrigger.setAttribute('aria-expanded', 'false');
      }
      if (mobileNav && mobileNav.classList.contains('is-open') && !mobileNav.contains(e.target) && !menuBtn.contains(e.target)) {
        mobileNav.classList.remove('is-open');
        if (menuBtn) {
          menuBtn.classList.remove('is-active');
          menuBtn.setAttribute('aria-expanded', 'false');
        }
        document.body.classList.remove('nav-open');
      }
    });
  }

  // Auto-populate consultation service on enquiry form (via data-service or URL param)
  const serviceSelect = document.querySelector('#service');
  if (serviceSelect) {
    const urlParams = new URLSearchParams(window.location.search);
    const serviceParam = urlParams.get('service');
    if (serviceParam) {
      const options = Array.from(serviceSelect.options);
      const exactMatch = options.find(o => o.value.toLowerCase() === serviceParam.toLowerCase());
      const partialMatch = options.find(o => o.value.toLowerCase().includes(serviceParam.toLowerCase()) || serviceParam.toLowerCase().includes(o.value.toLowerCase()));
      if (exactMatch) {
        serviceSelect.value = exactMatch.value;
      } else if (partialMatch) {
        serviceSelect.value = partialMatch.value;
      } else {
        serviceSelect.value = serviceParam;
      }
    }
  }

  document.querySelectorAll('[data-service]').forEach((a) => {
    a.addEventListener('click', () => {
      if (serviceSelect) serviceSelect.value = a.dataset.service;
    });
  });

  // Smooth Exclusive FAQ Accordion Toggle
  const faqAccordions = document.querySelectorAll('.faq-accordion');
  faqAccordions.forEach((details) => {
    details.addEventListener('toggle', () => {
      if (details.open) {
        faqAccordions.forEach((other) => {
          if (other !== details && other.open) {
            other.removeAttribute('open');
          }
        });
      }
    });
  });

  // Booking Form Submission Handler
  const form = document.querySelector('#bookingForm');
  if (form) {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const d = new FormData(form);
      const number = '91XXXXXXXXXX';
      const msg = `Hello Priyanka Dey, I would like to enquire about a consultation.\nName: ${d.get('name')}\nPhone: ${d.get('phone')}\nService: ${d.get('service')}\nFormat: ${d.get('format')}\nMessage: ${d.get('message') || 'Please share more details.'}`;
      const note = document.querySelector('#formNote');

      if (number.includes('X')) {
        note.textContent = 'Demo mode: replace 91XXXXXXXXXX in script.js with the actual WhatsApp number to activate this form.';
        note.hidden = false;
        return;
      }

      window.open(`https://wa.me/${number}?text=${encodeURIComponent(msg)}`, '_blank', 'noopener,noreferrer');
      note.textContent = 'WhatsApp is opening. Review your enquiry and press Send.';
      note.hidden = false;
    });
  }

  // Dynamic Copyright Year
  document.querySelectorAll('[data-year]').forEach((el) => {
    el.textContent = new Date().getFullYear();
  });


  // ==========================================================================
  // 2. HERO GALAXY FLOATING STARS (VERY SLOW CELESTIAL DRIFT)
  // ==========================================================================

  function initGalaxyStars() {
    const canvas = document.getElementById('galaxyCanvas');
    const heroSection = document.getElementById('heroSection');
    if (!canvas || !heroSection) return;

    const ctx = canvas.getContext('2d');
    if (!ctx) return;

    let width = 0;
    let height = 0;
    let dpr = 1;
    let animId = null;
    let isVisible = true;
    let mouse = { x: 0, y: 0, targetX: 0, targetY: 0 };

    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // Star configuration
    const STAR_COUNT = 190;
    const stars = [];

    // Subtle cosmic color palette
    const STAR_COLORS = [
      '232, 215, 179', // champagne
      '200, 166, 107', // gold
      '255, 255, 255', // pure white
      '220, 205, 240', // soft amethyst
      '245, 235, 220'  // warm stardust
    ];

    function resizeCanvas() {
      const rect = heroSection.getBoundingClientRect();
      width = Math.min(rect.width || window.innerWidth, window.innerWidth);
      height = Math.max(rect.height, 350);
      dpr = Math.min(window.devicePixelRatio || 1, 2);

      canvas.width = Math.floor(width * dpr);
      canvas.height = Math.floor(height * dpr);
      canvas.style.width = '100%';
      canvas.style.height = '100%';

      ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
    }

    function createStars() {
      stars.length = 0;
      for (let i = 0; i < STAR_COUNT; i++) {
        // 3 Depth Layers: 0 (Distant), 1 (Mid), 2 (Foreground)
        const layer = Math.random() < 0.55 ? 0 : (Math.random() < 0.8 ? 1 : 2);
        
        let radius, speed, baseAlpha;
        if (layer === 0) {
          radius = 0.4 + Math.random() * 0.45;
          speed = 0.02 + Math.random() * 0.035; // Very slow drift
          baseAlpha = 0.25 + Math.random() * 0.3;
        } else if (layer === 1) {
          radius = 0.7 + Math.random() * 0.45;
          speed = 0.035 + Math.random() * 0.045;
          baseAlpha = 0.4 + Math.random() * 0.35;
        } else {
          radius = 1.0 + Math.random() * 0.4;
          speed = 0.05 + Math.random() * 0.055;
          baseAlpha = 0.6 + Math.random() * 0.3;
        }

        // Float vector: gentle celestial drift upwards and left/right
        const angle = -Math.PI / 2 + (Math.random() - 0.5) * 0.8;
        const vx = Math.cos(angle) * speed;
        const vy = Math.sin(angle) * speed;

        stars.push({
          x: Math.random() * width,
          y: Math.random() * height,
          radius,
          layer,
          vx,
          vy,
          baseAlpha,
          alpha: baseAlpha,
          twinkleSpeed: 0.022 + Math.random() * 0.036, // Faster lively twinkle & blinking cadence
          twinklePhase: Math.random() * Math.PI * 2,
          color: STAR_COLORS[Math.floor(Math.random() * STAR_COLORS.length)]
        });
      }
    }

    // Falling Stars (Shooting Stars) Generator - allows up to 2-3 active at once
    const shootingStars = [];
    const MAX_SHOOTING_STARS = 3;
    let nextShootingStarTime = performance.now() + 1000 + Math.random() * 1200;

    function triggerShootingStar(now) {
      if (prefersReducedMotion || shootingStars.length >= MAX_SHOOTING_STARS) return;

      const startX = Math.random() * (width * 0.85);
      const startY = Math.random() * (height * 0.45);
      const angle = Math.PI / 4 + (Math.random() - 0.5) * 0.28;
      const length = 110 + Math.random() * 130;
      const speed = 7.5 + Math.random() * 4.5;

      shootingStars.push({
        x: startX,
        y: startY,
        dx: Math.cos(angle) * speed,
        dy: Math.sin(angle) * speed,
        length,
        life: 0,
        maxLife: 45 + Math.floor(Math.random() * 20),
        opacity: 0,
        color: Math.random() < 0.6 ? '255, 255, 255' : '232, 215, 179'
      });

      // Schedule next falling star soon so 2-3 falling stars appear regularly
      nextShootingStarTime = now + 2000 + Math.random() * 2200;
    }

    // Draw cosmic rotating nebulae clouds
    function drawNebulae(time) {
      // Nebula 1: Deep plum
      const g1x = width * 0.28 + Math.sin(time * 0.00018) * 40;
      const g1y = height * 0.35 + Math.cos(time * 0.00022) * 35;
      const grad1 = ctx.createRadialGradient(g1x, g1y, 20, g1x, g1y, width * 0.55);
      grad1.addColorStop(0, 'rgba(64, 34, 80, 0.22)');
      grad1.addColorStop(0.6, 'rgba(52, 36, 63, 0.08)');
      grad1.addColorStop(1, 'transparent');
      ctx.fillStyle = grad1;
      ctx.fillRect(0, 0, width, height);

      // Nebula 2: Warm champagne stardust
      const g2x = width * 0.76 + Math.cos(time * 0.00015) * 50;
      const g2y = height * 0.65 + Math.sin(time * 0.0002) * 40;
      const grad2 = ctx.createRadialGradient(g2x, g2y, 10, g2x, g2y, width * 0.45);
      grad2.addColorStop(0, 'rgba(200, 166, 107, 0.10)');
      grad2.addColorStop(0.5, 'rgba(232, 215, 179, 0.03)');
      grad2.addColorStop(1, 'transparent');
      ctx.fillStyle = grad2;
      ctx.fillRect(0, 0, width, height);
    }

    // Main animation loop
    function render(timestamp) {
      if (!isVisible) return;

      ctx.clearRect(0, 0, width, height);

      // Draw faint nebulae
      drawNebulae(timestamp);

      // Mouse Parallax smooth lerp
      mouse.x += (mouse.targetX - mouse.x) * 0.05;
      mouse.y += (mouse.targetY - mouse.y) * 0.05;

      // Update & Draw stars (lively celestial twinkling, pure circular starlight)
      for (let i = 0; i < stars.length; i++) {
        const star = stars[i];

        if (!prefersReducedMotion) {
          // Floating motion (very slow drift)
          star.x += star.vx;
          star.y += star.vy;

          // Seamless boundary wrapping
          if (star.x < -15) star.x = width + 15;
          if (star.x > width + 15) star.x = -15;
          if (star.y < -15) star.y = height + 15;
          if (star.y > height + 15) star.y = -15;

          // Faster lively twinkle & blink pulse
          star.twinklePhase += star.twinkleSpeed;
          const norm = (Math.sin(star.twinklePhase) + 1) * 0.5; // 0 to 1
          const pulse = Math.pow(norm, 1.8); // Responsive starlight peak
          star.alpha = star.baseAlpha * (0.2 + 0.8 * pulse);
        }

        // Parallax offset per layer
        const parallaxFactor = (star.layer + 1) * 6;
        const px = star.x + mouse.x * parallaxFactor;
        const py = star.y + mouse.y * parallaxFactor;

        // Draw smooth circular galaxy star (pure circle, zero plus/cross lines)
        ctx.beginPath();
        ctx.arc(px, py, star.radius, 0, Math.PI * 2);
        ctx.fillStyle = `rgba(${star.color}, ${Math.max(0, Math.min(1, star.alpha))})`;
        ctx.fill();

        // Soft subtle glow halo at peak twinkle
        if (star.alpha > star.baseAlpha * 0.72) {
          const glowR = star.radius * 2.2;
          ctx.beginPath();
          ctx.arc(px, py, glowR, 0, Math.PI * 2);
          ctx.fillStyle = `rgba(${star.color}, ${(star.alpha - star.baseAlpha * 0.72) * 0.5})`;
          ctx.fill();
        }
      }

      // Check & trigger falling stars (up to 2-3 active)
      if (timestamp > nextShootingStarTime) {
        triggerShootingStar(timestamp);
      }

      // Update & Draw all active falling stars (2-3 active)
      for (let s = shootingStars.length - 1; s >= 0; s--) {
        const star = shootingStars[s];
        star.x += star.dx;
        star.y += star.dy;
        star.life++;

        if (star.life < 12) {
          star.opacity = star.life / 12;
        } else if (star.life > star.maxLife - 16) {
          star.opacity = Math.max(0, (star.maxLife - star.life) / 16);
        } else {
          star.opacity = 1;
        }

        const tailX = star.x - (star.dx / 10) * star.length;
        const tailY = star.y - (star.dy / 10) * star.length;

        const grad = ctx.createLinearGradient(tailX, tailY, star.x, star.y);
        grad.addColorStop(0, 'rgba(232, 215, 179, 0)');
        grad.addColorStop(0.65, `rgba(200, 166, 107, ${star.opacity * 0.4})`);
        grad.addColorStop(1, `rgba(${star.color}, ${star.opacity * 0.95})`);

        ctx.strokeStyle = grad;
        ctx.lineWidth = 1.6;
        ctx.lineCap = 'round';
        ctx.beginPath();
        ctx.moveTo(tailX, tailY);
        ctx.lineTo(star.x, star.y);
        ctx.stroke();

        // Small bright glowing head dot
        ctx.fillStyle = `rgba(${star.color}, ${star.opacity})`;
        ctx.beginPath();
        ctx.arc(star.x, star.y, 1.4, 0, Math.PI * 2);
        ctx.fill();

        if (star.life >= star.maxLife) {
          shootingStars.splice(s, 1);
        }
      }

      if (!prefersReducedMotion) {
        animId = requestAnimationFrame(render);
      }
    }

    // Parallax mouse listeners on hero
    heroSection.addEventListener('mousemove', (e) => {
      const rect = heroSection.getBoundingClientRect();
      mouse.targetX = (e.clientX - (rect.left + rect.width / 2)) / rect.width;
      mouse.targetY = (e.clientY - (rect.top + rect.height / 2)) / rect.height;
    });

    heroSection.addEventListener('mouseleave', () => {
      mouse.targetX = 0;
      mouse.targetY = 0;
    });

    // Resize handling
    let resizeTimer = null;
    window.addEventListener('resize', () => {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(() => {
        resizeCanvas();
        createStars();
        if (prefersReducedMotion) render(performance.now());
      }, 150);
    });

    // Pause when hero is off-screen to preserve CPU
    if ('IntersectionObserver' in window) {
      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          isVisible = entry.isIntersecting;
          if (isVisible && !animId && !prefersReducedMotion) {
            animId = requestAnimationFrame(render);
          } else if (!isVisible && animId) {
            cancelAnimationFrame(animId);
            animId = null;
          }
        });
      }, { threshold: 0.05 });
      observer.observe(heroSection);
    }

    // Initialize
    resizeCanvas();
    createStars();
    render(performance.now());
  }


  // ==========================================================================
  // 3. SYNCHRONIZED 5-IMAGE & TEXT HERO CAROUSEL ROTATION
  // ==========================================================================

  function initHeroSlider() {
    const heroSection = document.getElementById('heroSection');
    if (!heroSection) return;

    const textSlides = heroSection.querySelectorAll('.hero-slide-text');
    const mediaSlides = heroSection.querySelectorAll('.hero-slide-media');
    const dots = heroSection.querySelectorAll('.slider-dot');
    const prevBtn = document.getElementById('sliderPrev');
    const nextBtn = document.getElementById('sliderNext');
    const counterEl = document.getElementById('currentSlideNum');

    if (!textSlides.length || !mediaSlides.length) return;

    let currentIndex = 0;
    const totalSlides = Math.min(textSlides.length, mediaSlides.length, 5); // 5 slides loop
    const SLIDE_DURATION = 5500; // 5.5 seconds per slide
    let slideTimer = null;
    let isPaused = false;

    function goToSlide(targetIndex) {
      if (targetIndex === currentIndex && textSlides[currentIndex].classList.contains('is-active')) {
        return;
      }

      // Deactivate current slide
      textSlides[currentIndex].classList.remove('is-active');
      textSlides[currentIndex].setAttribute('aria-hidden', 'true');

      mediaSlides[currentIndex].classList.remove('is-active');

      if (dots[currentIndex]) {
        dots[currentIndex].classList.remove('is-active');
        dots[currentIndex].setAttribute('aria-selected', 'false');
      }

      // Calculate new index with seamless loop
      currentIndex = (targetIndex + totalSlides) % totalSlides;

      // Activate new slide
      textSlides[currentIndex].classList.add('is-active');
      textSlides[currentIndex].setAttribute('aria-hidden', 'false');

      mediaSlides[currentIndex].classList.add('is-active');

      if (dots[currentIndex]) {
        dots[currentIndex].classList.add('is-active');
        dots[currentIndex].setAttribute('aria-selected', 'true');
      }

      // Update numeric counter display (e.g. 01, 02, 03, 04, 05)
      if (counterEl) {
        counterEl.textContent = String(currentIndex + 1).padStart(2, '0');
      }
    }

    function startAutoLoop() {
      stopAutoLoop();
      slideTimer = setInterval(() => {
        if (!isPaused) {
          goToSlide(currentIndex + 1);
        }
      }, SLIDE_DURATION);
    }

    function stopAutoLoop() {
      if (slideTimer) {
        clearInterval(slideTimer);
        slideTimer = null;
      }
    }

    function resetTimer() {
      stopAutoLoop();
      startAutoLoop();
    }

    // Button controls
    if (prevBtn) {
      prevBtn.addEventListener('click', () => {
        goToSlide(currentIndex - 1);
        resetTimer();
      });
    }

    if (nextBtn) {
      nextBtn.addEventListener('click', () => {
        goToSlide(currentIndex + 1);
        resetTimer();
      });
    }

    // Dot indicators
    dots.forEach((dot, index) => {
      dot.addEventListener('click', () => {
        goToSlide(index);
        resetTimer();
      });
    });

    // Pause on hover so the user can comfortably read without rush
    heroSection.addEventListener('mouseenter', () => {
      isPaused = true;
    });

    heroSection.addEventListener('mouseleave', () => {
      isPaused = false;
    });

    // Pause when browser tab is inactive
    document.addEventListener('visibilitychange', () => {
      if (document.hidden) {
        stopAutoLoop();
      } else {
        startAutoLoop();
      }
    });

    // Touch Swipe Gestures for mobile
    let touchStartX = 0;
    let touchStartY = 0;

    heroSection.addEventListener('touchstart', (e) => {
      if (!e.touches.length) return;
      touchStartX = e.touches[0].clientX;
      touchStartY = e.touches[0].clientY;
    }, { passive: true });

    heroSection.addEventListener('touchend', (e) => {
      if (!e.changedTouches.length) return;
      const touchEndX = e.changedTouches[0].clientX;
      const touchEndY = e.changedTouches[0].clientY;
      const deltaX = touchEndX - touchStartX;
      const deltaY = touchEndY - touchStartY;

      // Horizontal swipe threshold: 40px and more horizontal than vertical
      if (Math.abs(deltaX) > 40 && Math.abs(deltaX) > Math.abs(deltaY)) {
        if (deltaX < 0) {
          goToSlide(currentIndex + 1); // Swipe left -> next
        } else {
          goToSlide(currentIndex - 1); // Swipe right -> prev
        }
        resetTimer();
      }
    }, { passive: true });

    // Keyboard navigation when user interacts with slider dots
    heroSection.addEventListener('keydown', (e) => {
      if (e.key === 'ArrowLeft') {
        goToSlide(currentIndex - 1);
        resetTimer();
      } else if (e.key === 'ArrowRight') {
        goToSlide(currentIndex + 1);
        resetTimer();
      }
    });

    // Start rotation loop
    startAutoLoop();
  }


  // ==========================================================================
  // 4. ANIMATED CELESTIAL MOUSE CURSOR (ONLY ON HOME PAGE)
  // ==========================================================================

  function initHomePageCursor() {
    // Strict Guard: ONLY on the home page!
    if (!document.body.classList.contains('home-page')) return;

    // Strict Guard: ONLY on devices with a mouse/fine pointer (never on touch screens)
    if (!window.matchMedia('(hover: hover) and (pointer: fine)').matches) return;

    const cursorContainer = document.getElementById('homeCursor');
    const cursorDot = document.getElementById('cursorDot');
    const cursorRing = document.getElementById('cursorRing');
    const cursorGlow = document.getElementById('cursorGlow');

    if (!cursorContainer || !cursorDot || !cursorRing) return;

    let mouseX = -100;
    let mouseY = -100;
    let ringX = -100;
    let ringY = -100;
    let glowX = -100;
    let glowY = -100;
    let isVisible = false;
    let hasMoved = false;

    // Stardust Sparkle trailing throttle
    let lastSparkleTime = 0;
    let lastSparkleX = 0;
    let lastSparkleY = 0;
    let activeSparkleCount = 0;
    const MAX_SPARKLES = 12;

    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // Spawn tiny fading celestial stardust sparkle behind cursor
    function spawnStardust(x, y) {
      if (prefersReducedMotion || activeSparkleCount >= MAX_SPARKLES) return;

      const sparkle = document.createElement('span');
      sparkle.className = 'cursor-stardust-sparkle';
      sparkle.textContent = Math.random() < 0.6 ? '✦' : '·';
      
      // Slight random position jitter
      const jitterX = (Math.random() - 0.5) * 14;
      const jitterY = (Math.random() - 0.5) * 14;
      sparkle.style.left = `${x + jitterX}px`;
      sparkle.style.top = `${y + jitterY}px`;

      document.body.appendChild(sparkle);
      activeSparkleCount++;

      setTimeout(() => {
        if (sparkle.parentNode) {
          sparkle.parentNode.removeChild(sparkle);
        }
        activeSparkleCount = Math.max(0, activeSparkleCount - 1);
      }, 550);
    }

    // Smooth Physics Follower Animation Loop
    function updateCursor() {
      // Ring follows mouse with smooth spring lerp
      ringX += (mouseX - ringX) * 0.18;
      ringY += (mouseY - ringY) * 0.18;

      // Glow follows with ultra-soft lag
      glowX += (mouseX - glowX) * 0.12;
      glowY += (mouseY - glowY) * 0.12;

      // Position inner dot instantly for razor-sharp responsiveness
      cursorDot.style.left = `${mouseX}px`;
      cursorDot.style.top = `${mouseY}px`;

      // Position outer ring
      cursorRing.style.left = `${ringX}px`;
      cursorRing.style.top = `${ringY}px`;

      // Position ambient glow
      if (cursorGlow) {
        cursorGlow.style.left = `${glowX}px`;
        cursorGlow.style.top = `${glowY}px`;
      }

      requestAnimationFrame(updateCursor);
    }

    // Mouse movement listener
    window.addEventListener('mousemove', (e) => {
      mouseX = e.clientX;
      mouseY = e.clientY;

      if (!hasMoved) {
        hasMoved = true;
        ringX = mouseX;
        ringY = mouseY;
        glowX = mouseX;
        glowY = mouseY;
        document.body.classList.add('cursor-ready');
      }

      if (!isVisible) {
        isVisible = true;
        cursorContainer.classList.add('is-visible');
      }

      // Sparkle emission while gliding
      const now = performance.now();
      const dist = Math.hypot(mouseX - lastSparkleX, mouseY - lastSparkleY);
      if (now - lastSparkleTime > 45 && dist > 14) {
        spawnStardust(mouseX, mouseY);
        lastSparkleTime = now;
        lastSparkleX = mouseX;
        lastSparkleY = mouseY;
      }
    });

    // Window enter / leave handlers
    document.addEventListener('mouseleave', () => {
      isVisible = false;
      cursorContainer.classList.remove('is-visible');
    });

    document.addEventListener('mouseenter', () => {
      isVisible = true;
      cursorContainer.classList.add('is-visible');
    });

    // Click press feedback
    window.addEventListener('mousedown', () => {
      cursorContainer.classList.add('is-active');
    });

    window.addEventListener('mouseup', () => {
      cursorContainer.classList.remove('is-active');
    });

    // Interactive element hover detection (buttons, links, cards, tabs)
    const interactiveSelectors = 'a, button, input, select, textarea, .btn, .card, .slider-dot, .slider-arrow, .brandmark, [role="button"], [role="tab"]';

    document.addEventListener('mouseover', (e) => {
      if (e.target.closest(interactiveSelectors)) {
        cursorContainer.classList.add('is-hover');
      }
    });

    document.addEventListener('mouseout', (e) => {
      if (e.target.closest(interactiveSelectors)) {
        cursorContainer.classList.remove('is-hover');
      }
    });

    // Start cursor animation loop
    requestAnimationFrame(updateCursor);
  }


  // ==========================================================================

  // ==========================================================================
  // 5. INTERACTIVE ZODIAC POPUP DIALOGUE BOX
  // ==========================================================================

  const ZODIAC_DATA = {
    aries: {
      name: 'Aries',
      sanskrit: 'मेष · Mesha',
      dates: 'March 21 – April 19',
      element: 'Fire',
      modality: 'Cardinal',
      ruler: 'Mars (Mangal)',
      symbol: 'The Ram',
      svgPath: '<path d="M 32,24 C 34.5,24 36.5,25.5 36.5,28 C 36.5,31 34.5,34 34.5,37 C 34.5,41 36,44 35,47.5 C 34.2,50 32.8,51 32,51 C 31.2,51 29.8,50 29,47.5 C 28,44 29.5,41 29.5,37 C 29.5,34 27.5,31 27.5,28 C 27.5,25.5 29.5,24 32,24 Z"/> <path d="M 30.5,25.5 C 29,21 24.5,13 16.5,13 C 9.5,13 5,18.5 5,26 C 5,34 11,38 15.5,38 C 19,38 21.5,35 21.5,32 C 21.5,28.5 18.5,26.5 15.5,26.5 C 13,26.5 11,28 11,30.5 C 11,31.2 11.3,32 11.8,32.5 C 9.8,31 8.5,28.5 8.5,25.5 C 8.5,20 12,16.5 16.5,16.5 C 22.5,16.5 26.5,22.5 28.5,28 Z"/> <path d="M 33.5,25.5 C 35,21 39.5,13 47.5,13 C 54.5,13 59,18.5 59,26 C 59,34 53,38 48.5,38 C 45,38 42.5,35 42.5,32 C 42.5,28.5 45.5,26.5 48.5,26.5 C 51,26.5 53,28 53,30.5 C 53,31.2 52.7,32 52.2,32.5 C 54.2,31 55.5,28.5 55.5,25.5 C 55.5,20 52,16.5 47.5,16.5 C 41.5,16.5 37.5,22.5 35.5,28 Z"/> <path d="M 26,34 C 20,33 16,36 15,39 C 18,40 23,38 26.5,36 Z"/> <path d="M 38,34 C 44,33 48,36 49,39 C 46,40 41,38 37.5,36 Z"/>',
      description: 'Aries is the celestial spark that begins the zodiac wheel. Governed by Mars, Aries embodies raw vitality, uncompromising courage, and a natural instinct to pioneer new horizons. They face life head-on with passion, candid truth, and infectious optimism.',
      traits: ['Pioneering Courage', 'Dynamic Initiative', 'Direct Honesty', 'Spontaneous Vitality', 'Inspiring Leadership'],
      guidance: 'Master the art of patience and stamina. True mastery lies not only in sparking the sacred flame, but in tending it until it illuminates the path for others.'
    },
    taurus: {
      name: 'Taurus',
      sanskrit: 'वृषभ · Vrishabha',
      dates: 'April 20 – May 20',
      element: 'Earth',
      modality: 'Fixed',
      ruler: 'Venus (Shukra)',
      symbol: 'The Bull',
      svgPath: '<path d="M 25,23 C 21,21 15,19 12,14 C 9.5,9.5 9,6 10,5 C 11.5,7.5 13.5,13 18,16 C 22,18.5 25,19 28,19.5 Z"/> <path d="M 39,23 C 43,21 49,19 52,14 C 54.5,9.5 55,6 54,5 C 52.5,7.5 50.5,13 46,16 C 42,18.5 39,19 36,19.5 Z"/> <path d="M 21,22 C 26,20 38,20 43,22 C 45,24 45.5,28 45,31 C 44,36 44.5,40 43,45 C 41.5,49 38,52 32,52 C 26,52 22.5,49 21,45 C 19.5,40 20,36 19,31 C 18.5,28 19,24 21,22 Z"/> <path d="M 18,25 C 13,24 9,26 8,28 C 11,29.5 15,29 18,27.5 Z"/> <path d="M 46,25 C 51,24 55,26 56,28 C 53,29.5 49,29 46,27.5 Z"/>',
      description: 'Taurus is the unwavering anchor of serenity and endurance. Ruled by Venus, Taurus appreciates the tactile poetry of the physical world — harmony, steadfast loyalty, and enduring beauty. Patient and grounded, they build stability where others find uncertainty.',
      traits: ['Unshakable Loyalty', 'Patient Endurance', 'Aesthetic Refinement', 'Practical Groundedness', 'Material Reliability'],
      guidance: 'Embrace gentle change without fear. Security is not merely holding on to what is familiar, but cultivating an unshakable inner sanctuary that withstands all seasons.'
    },
    gemini: {
      name: 'Gemini',
      sanskrit: 'मिथुन · Mithuna',
      dates: 'May 21 – June 20',
      element: 'Air',
      modality: 'Mutable',
      ruler: 'Mercury (Budha)',
      symbol: 'The Twins',
      svgPath: '<path d="M 28,15 C 24,15 21,17 19,20 C 18,21.5 17.5,23.5 17,25 C 16.5,26 15,27 13.5,28 L 16.5,29.5 C 16.5,31 15.5,32 15,33 C 17,33.5 17.5,34.5 17,36 C 16,37.5 16.5,39 18,40 C 19,40.5 20,40 20.5,42 C 21,44 23,46 25,47 L 29,47 C 30,44 29,40 29,37 C 30,34 32,30 32,25 C 32,20 30.5,16 28,15 Z"/> <path d="M 39,12 C 35,12 32,14 30,17 C 29,18.5 28.5,20.5 28,22 C 27.5,23 26,24 24.5,25 L 27.5,26.5 C 27.5,28 26.5,29 26,30 C 28,30.5 28.5,31.5 28,33 C 27,34.5 27.5,36 29,37 C 30,37.5 31,37 31.5,39 C 32,41 34,43 36,44 L 40,44 C 41,41 40,37 40,34 C 41,31 43,27 43,22 C 43,17 41.5,13 39,12 Z"/> <path d="M 40,14 C 43,16 46,19 46,23 C 44,23 42,22 41,19 Z"/> <path d="M 43,24 C 45,26 46,29 46,32 C 44,32 42,31 42,29 Z"/> <path d="M 42,33 C 44,35 45,38 44,41 C 43,41 41,40 41,38 Z"/>',
      description: 'Gemini is the breath of intellectual curiosity and versatile communion. Governed by quick-witted Mercury, Gemini moves effortlessly between perspectives, synthesizing ideas and bridging human connections with sparkling charm and sharp observation.',
      traits: ['Intellectual Curiosity', 'Versatile Dexterity', 'Expressive Articulation', 'Quick Wit', 'Adaptable Vision'],
      guidance: 'Anchor your soaring thoughts in quiet contemplation. When your lively mind learns to still its waters, scattered curiosity deepens into profound spiritual wisdom.'
    },
    cancer: {
      name: 'Cancer',
      sanskrit: 'कर्क · Karka',
      dates: 'June 21 – July 22',
      element: 'Water',
      modality: 'Cardinal',
      ruler: 'The Moon (Chandra)',
      symbol: 'The Crab',
      svgPath: '<ellipse cx="32" cy="35" rx="14" ry="11"/> <path d="M 23,29 C 19,23 15,18 18,12 C 21.5,6 28,8 26.5,14 C 25.5,17 23,19 25,23 C 26.5,26 25,28 23,29 Z"/> <path d="M 19,12 C 16,13.5 14,17.5 16,21 C 17.5,22 19,20 18,18 C 17.5,16 18,14 19,12 Z"/> <path d="M 41,29 C 45,23 49,18 46,12 C 42.5,6 36,8 37.5,14 C 38.5,17 41,19 39,23 C 37.5,26 39,28 41,29 Z"/> <path d="M 45,12 C 48,13.5 50,17.5 48,21 C 46.5,22 45,20 46,18 C 46.5,16 46,14 45,12 Z"/> <path d="M 19,33 C 14,31 9,33 7,36 C 9,36.5 14,35 18,36 Z"/> <path d="M 19,38 C 14,38 9,41 7,45 C 9,45 13,42 18,41 Z"/> <path d="M 21,43 C 17,45 12,49 11,53 C 13,52 17,48 20,46 Z"/> <path d="M 45,33 C 50,31 55,33 57,36 C 55,36.5 50,35 46,36 Z"/> <path d="M 45,38 C 50,38 55,41 57,45 C 55,45 51,42 46,41 Z"/> <path d="M 43,43 C 47,45 52,49 53,53 C 51,52 47,48 44,46 Z"/> <circle cx="28" cy="22" r="1.5"/> <circle cx="36" cy="22" r="1.5"/>',
      description: 'Cancer is the empathetic sanctuary of the zodiac. Guided by the luminous cycles of the Moon, Cancer possesses deep emotional resonance and protective intuition. They nurture loved ones with unconditional warmth and an innate sensitivity that detects unspoken truths.',
      traits: ['Profound Empathy', 'Protective Devotion', 'Intuitive Instinct', 'Emotional Depth', 'Sanctuary Builder'],
      guidance: 'Cultivate healthy emotional boundaries. Allow your tender heart to flow freely without retreating behind a heavy shell; vulnerability is your deepest source of spiritual power.'
    },
    leo: {
      name: 'Leo',
      sanskrit: 'सिंह · Simha',
      dates: 'July 23 – August 22',
      element: 'Fire',
      modality: 'Fixed',
      ruler: 'The Sun (Surya)',
      symbol: 'The Lion',
      svgPath: '<path d="M 23,26 C 21,27 17,30 14,32 C 12,33.5 10,34 8,34 C 8.5,36 10,38 12,38.5 C 14,39 17,38.5 18,37 C 19,36 21,36 22,37.5 C 20,39 17,40 15,41 C 15.5,42.5 17,43.5 19,43.5 C 22,43.5 24,41.5 26,40 C 27,39 28,40 28,42 C 27,45 25,47 22,49 C 23,50.5 25,51 27,50 C 30,48.5 31,45 31,42 C 31,39 30,36 29,33 C 28,30 26,27 23,26 Z"/> <path d="M 23,25 C 22,21 24,16 28,13 C 32,10 37,11 40,14 C 37,15 34,17 33,20 C 32,23 29,24 27,24 Z"/> <path d="M 36,16 C 40,17 45,20 47,25 C 49,30 47,34 44,36 C 44,33 43,30 40,28 C 37,25 37,21 36,16 Z"/> <path d="M 46,27 C 50,31 51,37 49,42 C 47,46 43,48 39,48 C 41,45 42,41 41,37 C 40,33 43,30 46,27 Z"/> <path d="M 45,40 C 46,44 44,49 40,52 C 36,54 31,53 28,50 C 31,49 34,47 35,44 C 37,41 41,40 45,40 Z"/> <path d="M 32,45 C 32,49 30,52 26,54 C 28,52 29,49 29,46 Z"/>',
      description: 'Leo radiates the magnanimous warmth and vital charisma of the Sun. Possessing a generous noble heart, Leo inspires those around them through joyful creativity, protective loyalty, and unapologetic self-expression. Their natural radiance uplifts any room.',
      traits: ['Magnetic Charisma', 'Noble Generosity', 'Creative Passion', 'Courageous Heart', 'Buoyant Warmth'],
      guidance: 'Remember that the Sun illuminates all beings without seeking validation. Shine with humble benevolence, sharing the center stage to elevate and empower the spirits of others.'
    },
    virgo: {
      name: 'Virgo',
      sanskrit: 'कन्या · Kanya',
      dates: 'August 23 – September 22',
      element: 'Earth',
      modality: 'Mutable',
      ruler: 'Mercury (Budha)',
      symbol: 'The Maiden',
      svgPath: '<path d="M 30,22 C 28,22 26,23 24,25 C 23,26.5 23,28 21.5,29 C 20,30 19,30.5 18,31 L 20.5,32.5 C 20,33.5 19,34.5 19.5,35 C 21,35.5 21.5,36 21,37 C 20.5,38 21,39 22,39.5 C 23,40 24,39.5 24.5,41 C 25,43 26.5,44.5 28,45 C 27,46 25.5,46.5 24,47 L 32,47 C 33,45 32.5,42 32.5,40 C 33.5,38 35,34 35,30 C 35,25 33,22 30,22 Z"/> <path d="M 29,14 C 23,14 18,19 19,25 C 20,23 22,21 25,20 C 29,19 33,21 36,24 C 37,21 34,16 29,14 Z"/> <path d="M 33,15 C 39,17 45,22 46,29 C 47,35 45,40 41,44 C 43,39 43,33 41,28 C 39,23 36,18 33,15 Z"/> <path d="M 43,32 C 46,37 47,43 44,48 C 41,52 36,54 31,55 C 35,53 39,50 40,46 C 42,41 42,36 43,32 Z"/> <path d="M 40,44 C 40,48 37,52 32,54 C 28,56 23,55 19,53 C 24,53 28,51 31,48 C 34,45 37,44 40,44 Z"/>',
      description: 'Virgo is the sacred craftsperson of discernment, mindfulness, and practical healing. Governed by Mercury, Virgo pairs keen analytical brilliance with quiet dedication to service. They bring order out of chaos, refining processes and healing environments with thoughtful care.',
      traits: ['Analytical Clarity', 'Mindful Craftsmanship', 'Quiet Dedication', 'Holistic Care', 'Practical Wisdom'],
      guidance: 'Release the heavy burden of perfectionism. The universe is inherently whole in its imperfections; honor your human effort with the same kindness you selflessly gift to others.'
    },
    libra: {
      name: 'Libra',
      sanskrit: 'तुला · Tula',
      dates: 'September 23 – October 22',
      element: 'Air',
      modality: 'Cardinal',
      ruler: 'Venus (Shukra)',
      symbol: 'The Scales',
      svgPath: '<path d="M 32,15 L 34,19 L 32.8,19 L 32.8,32 L 34,33 L 34,35 L 30,35 L 30,33 L 31.2,32 L 31.2,19 L 30,19 Z"/> <circle cx="32" cy="14" r="2.5"/> <path d="M 12,23 L 52,23 C 53,23 53.5,23.5 53.5,24 C 53.5,24.5 53,25 52,25 L 12,25 C 11,25 10.5,24.5 10.5,24 C 10.5,23.5 11,23 12,23 Z"/> <circle cx="16" cy="24" r="1.8"/> <circle cx="48" cy="24" r="1.8"/> <circle cx="32" cy="24" r="2.8"/> <line x1="16" y1="25" x2="8.5" y2="39" stroke="currentColor" stroke-width="1.4"/> <line x1="16" y1="25" x2="23.5" y2="39" stroke="currentColor" stroke-width="1.4"/> <path d="M 7,39 C 9,44 23,44 25,39 Z"/> <line x1="48" y1="25" x2="40.5" y2="39" stroke="currentColor" stroke-width="1.4"/> <line x1="48" y1="25" x2="55.5" y2="39" stroke="currentColor" stroke-width="1.4"/> <path d="M 39,39 C 41,44 55,44 57,39 Z"/>',
      description: 'Libra is the seeker of harmony, aesthetic balance, and relational justice. Under the gentle guidance of Venus, Libra weighs every perspective with diplomatic grace and fairness. They are natural peacemakers who strive to elevate human bonds into art.',
      traits: ['Diplomatic Grace', 'Relational Fairness', 'Aesthetic Elegance', 'Equitable Harmony', 'Charming Empathy'],
      guidance: 'Do not silence your own inner truth for the sake of artificial peace. Real harmony embraces honest differences; courageously speak your needs while balancing the scales.'
    },
    scorpio: {
      name: 'Scorpio',
      sanskrit: 'वृश्चिक · Vrishchika',
      dates: 'October 23 – November 21',
      element: 'Water',
      modality: 'Fixed',
      ruler: 'Mars & Ketu',
      symbol: 'The Scorpion',
      svgPath: '<ellipse cx="32" cy="36" rx="6.5" ry="9"/> <path d="M 28,32 C 24,28 20,27 16,29 C 14,30 13,33 14,35 C 15,36 17,35 18,33 C 19,31 22,30 25,33 Z"/> <path d="M 15,28 C 12,24 13,19 16,16 C 18,14 20,15 20,17 C 20,19 18,21 17,23 C 18,25 21,27 23,28 Z"/> <path d="M 16,16 C 14,19 14,23 16,26 C 15,26 13,24 13,21 C 13,18 14.5,16.5 16,16 Z"/> <path d="M 36,32 C 40,28 44,27 48,29 C 50,30 51,33 50,35 C 49,36 47,35 46,33 C 45,31 42,30 39,33 Z"/> <path d="M 49,28 C 52,24 51,19 48,16 C 46,14 44,15 44,17 C 44,19 46,21 47,23 C 46,25 43,27 41,28 Z"/> <path d="M 48,16 C 50,19 50,23 48,26 C 49,26 51,24 51,21 C 51,18 49.5,16.5 48,16 Z"/> <path d="M 27,35 C 22,34 18,36 15,39 C 17,39 21,37 26,38 Z"/> <path d="M 27,39 C 22,39 17,42 15,46 C 17,46 21,42 26,41 Z"/> <path d="M 28,43 C 24,44 19,48 18,52 C 20,51 23,47 27,45 Z"/> <path d="M 37,35 C 42,34 46,36 49,39 C 47,39 43,37 38,38 Z"/> <path d="M 37,39 C 42,39 47,42 49,46 C 47,46 43,42 38,41 Z"/> <path d="M 36,43 C 40,44 45,48 46,52 C 44,51 41,47 37,45 Z"/> <path d="M 32,45 C 31,48 32,52 35,54 C 38,56 42,55 45,51 C 48,46 48,40 45,34 C 43,30 40,26 39,21 C 38,16 41,12 45,10 C 47,9 49,10 49,12 C 49,15 45,18 44,22 C 43,26 46,31 49,37 C 52,43 51,51 46,56 C 41,60 34,60 29,56 C 26,53 25,48 27,44 Z"/> <path d="M 45,10 C 42,8 39,8 38,10 C 37,11 39,12 41,12 C 43,12 44.5,11 45,10 Z"/>',
      description: 'Scorpio journeys fearlessly into the transformative depths of the soul. Ruled by Mars and spiritual Ketu, Scorpio possesses hypnotic emotional depth, unyielding focus, and the mystical power of rebirth. They see beneath facades to discern what is truly eternal.',
      traits: ['Transformative Power', 'Unshakable Focus', 'Psychological Insight', 'Magnetic Loyalty', 'Fearless Truth'],
      guidance: 'Practice the liberation of surrender and forgiveness. When you release guarded control and allow vulnerability, your fierce emotional intensity transmutes into radiant healing wisdom.'
    },
    sagittarius: {
      name: 'Sagittarius',
      sanskrit: 'धनु · Dhanu',
      dates: 'November 22 – December 21',
      element: 'Fire',
      modality: 'Mutable',
      ruler: 'Jupiter (Guru)',
      symbol: 'The Archer',
      svgPath: '<path d="M 34,13 C 32,18 29,24 35,32 C 29,40 32,46 34,51 C 32.5,50 30,44 26,38 C 23,34 23,30 26,26 C 30,20 32.5,14 34,13 Z"/> <line x1="34" y1="13" x2="15" y2="32" stroke="currentColor" stroke-width="1.6"/> <line x1="15" y1="32" x2="34" y2="51" stroke="currentColor" stroke-width="1.6"/> <line x1="11" y1="32" x2="52" y2="32" stroke="currentColor" stroke-width="2.5"/> <polygon points="56,32 46,27 48,32 46,37"/> <polygon points="11,32 17,27 19,27 15,32"/> <polygon points="11,32 17,37 19,37 15,32"/>',
      description: 'Sagittarius is the philosophical pilgrim aiming their arrow toward truth, freedom, and higher wisdom. Blessed by expansive Jupiter, Sagittarius navigates life with boundless optimism, intellectual daring, and an appetite for profound spiritual journeys.',
      traits: ['Philosophical Vision', 'Infectious Optimism', 'Love of Freedom', 'Generous Truth', 'Spiritual Explorer'],
      guidance: 'Harmonize broad vision with compassionate speech and grounded presence. Honor the sacred details of daily reality as deeply as you revere distant mountaintops.'
    },
    capricorn: {
      name: 'Capricorn',
      sanskrit: 'मकर · Makara',
      dates: 'December 22 – January 19',
      element: 'Earth',
      modality: 'Cardinal',
      ruler: 'Saturn (Shani)',
      symbol: 'The Sea-Goat',
      svgPath: '<path d="M 32,26 C 35,26 38,27.5 39,30 C 40,32 39,35 38,38 C 36.5,42 35,46 33.5,50 L 30.5,50 C 29,46 27.5,42 26,38 C 25,35 24,32 25,30 C 26,27.5 29,26 32,26 Z"/> <path d="M 29,27 C 27,21 23,15 15,12 C 18,15 20,20 21,24 L 20,22 C 17,18 13,15 9,14 C 13,18 16,23 17,28 L 25,29 Z"/> <path d="M 35,27 C 37,21 41,15 49,12 C 46,15 44,20 43,24 L 44,22 C 47,18 51,15 55,14 C 51,18 48,23 47,28 L 39,29 Z"/> <path d="M 24,32 C 18,32 13,34 11,37 C 14,37.5 19,36 24,34 Z"/> <path d="M 40,32 C 46,32 51,34 53,37 C 50,37.5 45,36 40,34 Z"/> <path d="M 30.5,50 L 33.5,50 C 33.5,53 34,56 32,59 C 30,56 30.5,53 30.5,50 Z"/>',
      description: 'Capricorn is the grand architect of perseverance, disciplined mastery, and enduring legacy. Guided by Saturn, Capricorn scales the steepest precipices of life with pragmatic composure, unwavering patience, and profound ethical integrity.',
      traits: ['Pragmatic Mastery', 'Disciplined Endurance', 'Strategic Vision', 'Unwavering Integrity', 'Quiet Authority'],
      guidance: 'Balance duty with emotional warmth and mindful rest. Your worth is rooted in your soul’s light, not merely in the towering monuments and achievements you build.'
    },
    aquarius: {
      name: 'Aquarius',
      sanskrit: 'कुम्भ · Kumbha',
      dates: 'January 20 – February 18',
      element: 'Air',
      modality: 'Fixed',
      ruler: 'Saturn & Rahu',
      symbol: 'The Water-Bearer',
      svgPath: '<path d="M 36,18 L 41,20 C 44,22 47,25 49,29 C 51,33 51,37 49,40 L 46,42 C 43,44 40,43 37,40 L 33,36 C 30,33 29,30 30,27 C 31,24 33,21 36,18 Z"/> <path d="M 47,40 L 51,43 C 52,44 51,46 49,46 L 44,43 Z"/> <path d="M 34,17 C 36,15 39,18 37,20 L 32,23 C 30,25 27,22 29,20 Z"/> <path d="M 43,23 C 48,24 53,28 51,33 C 50,35 48,35 47,33 C 48,30 46,27 42,26 Z"/> <path d="M 31,23 C 28,26 23,30 20,36 C 17,42 16,48 14,54 C 16,51 18,46 21,41 C 24,36 29,31 33,27 Z"/> <path d="M 28,26 C 25,29 21,34 19,40 C 17,46 16,51 13,56 C 14.5,52 16,47 19,42 C 22,37 26,32 30,29 Z"/> <path d="M 25,31 C 22,35 19,40 18,46 C 17,52 15,56 12,58 C 13,54 15,49 17,44 C 19,39 23,35 27,33 Z"/>',
      description: 'Aquarius is the revolutionary visionary pouring forth the waters of innovative consciousness. Unconventional and humanitarian, Aquarius perceives the interconnected collective future, fearlessly breaking stagnant traditions to illuminate progressive pathways.',
      traits: ['Visionary Innovation', 'Humanitarian Soul', 'Authentic Originality', 'Intellectual Independence', 'Objective Clarity'],
      guidance: 'Bridge your brilliant intellectual ideals with intimate heart-to-heart presence. True revolution begins when profound universal love is mirrored in personal relationships.'
    },
    pisces: {
      name: 'Pisces',
      sanskrit: 'मीन · Meena',
      dates: 'February 19 – March 20',
      element: 'Water',
      modality: 'Mutable',
      ruler: 'Jupiter (Guru)',
      symbol: 'The Two Fishes',
      svgPath: '<path d="M 18,47 C 14,43 13,36 14,30 C 15,24 19,19 25,16 C 24,19 23,23 24,27 C 25,32 29,36 32,38 C 28,40 24,44 21,49 L 18,53 C 18,50 16,49 14,50 C 15,47 16,45 18,47 Z"/> <path d="M 23,17 C 24,14 26,13 28,14 C 27,16 26,17 24,17 Z"/> <path d="M 14,31 C 11,31 9,33 9,35 C 11,35 13,34 14,33 Z"/> <path d="M 46,17 C 50,21 51,28 50,34 C 49,40 45,45 39,48 C 40,45 41,41 40,37 C 39,32 35,28 32,26 C 36,24 40,20 43,15 L 46,11 C 46,14 48,15 50,14 C 49,17 48,19 46,17 Z"/> <path d="M 41,47 C 40,50 38,51 36,50 C 37,48 38,47 40,47 Z"/> <path d="M 50,33 C 53,33 55,31 55,29 C 53,29 51,30 50,31 Z"/>',
      description: 'Pisces is the mystical ocean where all earthly boundaries dissolve into cosmic oneness. Guided by benevolent Jupiter, Pisces possesses transcendent intuition, poetic artistry, and boundless compassion, holding sacred space for all sentient beings.',
      traits: ['Mystical Intuition', 'Boundless Compassion', 'Poetic Artistry', 'Gentle Sensitivity', 'Soulful Wisdom'],
      guidance: 'Ground your ethereal dreams in tangible daily practice. Protect your delicate aura with firm boundaries, transmuting universal empathy into steady spiritual light.'
    }
  };

  function initZodiacDialog() {
    const dialog = document.querySelector('#zodiacDialog');
    if (!dialog) return;

    const cards = document.querySelectorAll('.zodiac-daily-card');
    const glyphBox = document.querySelector('#dialogGlyph');
    const datesEl = document.querySelector('#dialogDates');
    const nameEl = document.querySelector('#dialogSignName');
    const sanskritEl = document.querySelector('#dialogSanskrit');
    const badgesEl = document.querySelector('#dialogBadges');
    const descEl = document.querySelector('#dialogDescription');
    const traitsEl = document.querySelector('#dialogTraits');
    const guidanceEl = document.querySelector('#dialogGuidance');
    const horoscopeLink = document.querySelector('#dialogHoroscopeLink');
    const closeBtn = dialog.querySelector('.zodiac-dialog-close');
    const backdrop = dialog.querySelector('.zodiac-dialog-backdrop');

    let isClosing = false;

    function populateDialog(signKey) {
      const data = ZODIAC_DATA[signKey];
      if (!data) return;

      if (glyphBox) {
        glyphBox.innerHTML = `<svg class="zodiac-glyph" viewBox="0 0 64 64" fill="currentColor" aria-hidden="true">${data.svgPath}</svg>`;
      }
      if (datesEl) datesEl.textContent = data.dates;
      if (nameEl) nameEl.textContent = data.name;
      if (sanskritEl) sanskritEl.textContent = `(${data.sanskrit})`;

      if (badgesEl) {
        badgesEl.innerHTML = `
          <span class="zodiac-badge"><span style="color:var(--champagne)">✦ Element:</span> ${data.element}</span>
          <span class="zodiac-badge"><span style="color:var(--champagne)">✦ Modality:</span> ${data.modality}</span>
          <span class="zodiac-badge"><span style="color:var(--champagne)">✦ Ruler:</span> ${data.ruler}</span>
          <span class="zodiac-badge"><span style="color:var(--champagne)">✦ Symbol:</span> ${data.symbol}</span>
        `;
      }

      if (descEl) descEl.textContent = data.description;

      if (traitsEl) {
        traitsEl.innerHTML = data.traits.map(t => `<span class="zodiac-trait-pill">✓ ${t}</span>`).join('');
      }

      if (guidanceEl) guidanceEl.textContent = `"${data.guidance}"`;

      if (horoscopeLink) {
        horoscopeLink.href = `horoscope.html#${signKey}`;
      }
    }

    function openDialog(signKey) {
      if (isClosing) return;
      populateDialog(signKey);

      const isAlreadyOpen = dialog.classList.contains('is-open');
      if (!isAlreadyOpen) {
        dialog.classList.add('is-active');
        document.body.classList.add('dialog-open');
        // Force reflow for smooth animation
        void dialog.offsetWidth;
        requestAnimationFrame(() => {
          dialog.classList.remove('is-closing');
          dialog.classList.add('is-open');
        });
      } else {
        // Pulse animation if already open and switching signs
        const content = dialog.querySelector('.zodiac-dialog-content');
        if (content) {
          content.style.transform = 'scale(0.97)';
          setTimeout(() => {
            content.style.transform = '';
          }, 120);
        }
      }
    }

    function closeDialog() {
      if (!dialog.classList.contains('is-open') || isClosing) return;
      isClosing = true;
      dialog.classList.remove('is-open');
      dialog.classList.add('is-closing');
      document.body.classList.remove('dialog-open');

      setTimeout(() => {
        dialog.classList.remove('is-active', 'is-closing');
        isClosing = false;
      }, 220);
    }

    // Attach click triggers to all zodiac cards
    cards.forEach(card => {
      card.addEventListener('click', (e) => {
        e.preventDefault();
        e.stopPropagation();
        const signKey = card.getAttribute('data-sign');
        if (signKey) {
          openDialog(signKey);
        }
      });
    });

    // Close button click
    if (closeBtn) {
      closeBtn.addEventListener('click', (e) => {
        e.preventDefault();
        e.stopPropagation();
        closeDialog();
      });
    }

    // Close on backdrop click (click outside dialog box)
    if (backdrop) {
      backdrop.addEventListener('click', (e) => {
        e.preventDefault();
        e.stopPropagation();
        closeDialog();
      });
    }

    dialog.addEventListener('click', (e) => {
      if (e.target.closest('.zodiac-dialog-close') || e.target === backdrop || e.target === dialog) {
        e.preventDefault();
        e.stopPropagation();
        closeDialog();
      }
    });

    // Close on click on any other elements on the page
    document.addEventListener('click', (e) => {
      if (!dialog.classList.contains('is-open') || isClosing) return;

      // If user clicked the close button
      if (e.target.closest('.zodiac-dialog-close')) {
        e.preventDefault();
        e.stopPropagation();
        closeDialog();
        return;
      }

      // If click is inside the dialog content or on one of the zodiac cards, don't close here
      if (e.target.closest('.zodiac-dialog-content') || e.target.closest('.zodiac-daily-card')) {
        return;
      }
      closeDialog();
    });

    // Close on Escape key press
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && dialog.classList.contains('is-open')) {
        closeDialog();
      }
    });
  }

  // INITIALIZATION ON DOM READY
  // ==========================================================================

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
      initGalaxyStars();
      initHeroSlider();
      initHomePageCursor();
      initZodiacDialog();
    });
  } else {
    initGalaxyStars();
    initHeroSlider();
    initHomePageCursor();
      initZodiacDialog();
  }

})();
