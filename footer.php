<?php
/**
 * Shared Site Footer Template
 * Priyanka Dey · Vedic Astrology & Spiritual Consultation
 */
$base = isset($basePath) ? $basePath : '';
?>
  <!-- SITE FOOTER -->
  <footer class="footer">
    <div class="footer-grid">
      <div>
        <a href="<?php echo $base; ?>index.php" class="brand footer-brand" aria-label="Priyanka Dey Home">
          <span class="brandmark footer-brandmark" aria-hidden="true">
            <svg class="sun-artwork-vector" viewBox="0 0 100 100" width="100%" height="100%" aria-hidden="true">
              <defs>
                <linearGradient id="ftrSunGradCore" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" stop-color="#ffb834" />
                  <stop offset="100%" stop-color="#f5931e" />
                </linearGradient>
                <linearGradient id="ftrSunGradWaves" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" stop-color="#ffa827" />
                  <stop offset="100%" stop-color="#f38b16" />
                </linearGradient>
              </defs>
              <g class="sun-waves-group" fill="url(#ftrSunGradWaves)">
                <path class="sun-wave-ray ray-0"
                  d="M 44.44,20.01 C 46.08,12.71 54.41,4.21 65.14,3.40 C 66.95,11.02 61.52,17.48 56.08,20.11 A 30.5 30.5 0 0 0 44.44,20.01 Z" />
                <path class="sun-wave-ray ray-1"
                  d="M 67.28,24.86 C 73.60,20.86 85.49,20.74 93.66,27.75 C 89.54,34.42 81.14,35.15 75.43,33.17 A 30.5 30.5 0 0 0 67.28,24.86 Z" />
                <path class="sun-wave-ray ray-2"
                  d="M 79.99,44.44 C 87.29,46.08 95.79,54.41 96.60,65.14 C 88.98,66.95 82.52,61.52 79.89,56.08 A 30.5 30.5 0 0 0 79.99,44.44 Z" />
                <path class="sun-wave-ray ray-3"
                  d="M 75.14,67.28 C 79.14,73.60 79.26,85.49 72.25,93.66 C 65.58,89.54 64.85,81.14 66.83,75.43 A 30.5 30.5 0 0 0 75.14,67.28 Z" />
                <path class="sun-wave-ray ray-4"
                  d="M 55.56,79.99 C 53.92,87.29 45.59,95.79 34.86,96.60 C 33.05,88.98 38.48,82.52 43.92,79.89 A 30.5 30.5 0 0 0 55.56,79.99 Z" />
                <path class="sun-wave-ray ray-5"
                  d="M 32.72,75.14 C 26.40,79.14 14.51,79.26 6.34,72.25 C 10.46,65.58 18.86,64.85 24.57,66.83 A 30.5 30.5 0 0 0 32.72,75.14 Z" />
                <path class="sun-wave-ray ray-6"
                  d="M 20.01,55.56 C 12.71,53.92 4.21,45.59 3.40,34.86 C 11.02,33.05 17.48,38.48 20.11,43.92 A 30.5 30.5 0 0 0 20.01,55.56 Z" />
                <path class="sun-wave-ray ray-7"
                  d="M 24.86,32.72 C 20.86,26.40 20.74,14.51 27.75,6.34 C 34.42,10.46 35.15,18.86 33.17,24.57 A 30.5 30.5 0 0 0 24.86,32.72 Z" />
              </g>
              <circle cx="50" cy="50" r="26.8" fill="url(#ftrSunGradCore)" class="sun-center-disc" />
            </svg>
          </span>
          <span class="serif footer-brandname" style="font-size:32px;color:var(--champagne);line-height:1">Priyanka
            Dey</span>
        </a>
        <p style="max-width:360px;margin-top:15px">
          Astrology, tarot, Vastu, and numerology consultations in Siliguri, West Bengal, and online worldwide by
          arrangement.
        </p>
      </div>

      <div>
        <h3>Our Services</h3>
        <ul>
          <li><a href="<?php echo $base; ?>astrology.php">Astrologer in Siliguri</a></li>
          <li><a href="<?php echo $base; ?>kundali.php">Kundali Analysis in Siliguri</a></li>
          <li><a href="<?php echo $base; ?>kundali-matching.php">Kundali Matching</a></li>
          <li><a href="<?php echo $base; ?>tarot.php">Tarot Card Reader in Siliguri</a></li>
          <li><a href="<?php echo $base; ?>numerology.php">Numerologist in Siliguri</a></li>
          <li><a href="<?php echo $base; ?>vastu.php">Vastu Consultant in Siliguri</a></li>
          <li><a href="<?php echo $base; ?>career-guidance.php">Career &amp; Business Guidance</a></li>
          <li><a href="<?php echo $base; ?>marriage-consultation.php">Love &amp; Marriage Consultation</a></li>
          <li><a href="<?php echo $base; ?>muhurta.php">Muhurta Selection</a></li>
        </ul>
      </div>

      <div>
        <h3>Explore</h3>
        <ul>
          <li><a href="<?php echo $base; ?>about.php">About Priyanka</a></li>
          <li><a href="<?php echo $base; ?>services.php">All Services</a></li>
          <li><a href="<?php echo $base; ?>horoscope.php">Horoscope &amp; Zodiac</a></li>
          <li><a href="<?php echo $base; ?>blog.php">Insights &amp; Blog</a></li>
          <li><a href="<?php echo $base; ?>contact.php">Contact</a></li>
        </ul>
      </div>

      <div>
        <h3>Get in touch</h3>
        <p>Siliguri, West Bengal, India</p>
        <p><a href="<?php echo $base; ?>contact.php#booking">Send a consultation enquiry &#8599;</a></p>
        <p>In-person sessions in Siliguri and online video consultations worldwide.</p>
      </div>
    </div>

    <!-- Footer Legal & Policy Links -->
    <div class="footer-legal">
      <div class="footer-legal-links">
        <a href="<?php echo $base; ?>privacy.php">Privacy Policy</a>
        <span class="legal-sep">&#8226;</span>
        <a href="<?php echo $base; ?>terms.php">Terms &amp; Conditions</a>
        <span class="legal-sep">&#8226;</span>
        <a href="<?php echo $base; ?>refund.php">Refund Policy</a>
        <span class="legal-sep">&#8226;</span>
        <a href="#disclaimer">Disclaimer</a>
      </div>
    </div>

    <div class="footer-bottom" id="disclaimer">
      Disclaimer: Astrology, tarot, Vastu, and numerology are traditional interpretive disciplines intended for personal
      reflection, guidance, and spiritual self-discovery. Consultations do not guarantee predetermined outcomes and are
      not a substitute for qualified medical, psychological, legal, or financial counsel.<br><br>
      <div class="footer-bottom-row">
        <div class="footer-copyright">&copy; <span data-year></span> Priyanka Dey. All rights reserved.</div>
        <div class="developer-credit"><a href="https://wa.me/919832017554" target="_blank" rel="noopener noreferrer" aria-label="Contact website developer Sumit Ghosh on WhatsApp">Website develop and maintain by <span class="dev-name">Sumit Ghosh</span></a></div>
      </div>
    </div>
  </footer>

<?php if (isset($isHomePage) && $isHomePage): ?>
  <!-- ANIMATED CELESTIAL MOUSE CURSOR (ONLY ON HOME PAGE) -->
  <div class="home-cursor-container" id="homeCursor" aria-hidden="true">
    <div class="cursor-glow" id="cursorGlow"></div>
    <div class="cursor-ring" id="cursorRing"></div>
    <div class="cursor-dot" id="cursorDot"></div>
  </div>
<?php endif; ?>

  <script src="<?php echo $base; ?>script.js"></script>
</body>

</html>

