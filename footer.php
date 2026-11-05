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
            <img src="<?php echo $base; ?>assets/images/lotus-logo.png" alt="Priyanka Dey Logo" class="brand-logo-img footer-logo-img" width="70" height="43">
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
        <div class="developer-credit"><a href="https://wa.me/919832017554" target="_blank" rel="noopener noreferrer" aria-label="Contact website developer Sumit Ghosh on WhatsApp">Website developed and maintain by <span class="dev-name">Sumit Ghosh</span></a></div>
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

  <script src="<?php echo $base; ?>assets/js/script.js"></script>
</body>

</html>

