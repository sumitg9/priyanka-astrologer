<?php
$pageTitle = "Contact & Book Consultation | Priyanka Dey";
$pageDescription = "Contact Priyanka Dey for astrology, tarot, Vastu, Kundali and numerology consultation enquiries in Siliguri.";
$activeNav = "contact";

include __DIR__ . '/header.php';
?>

<!-- PAGE HERO -->
  <section class="page-hero stars">
    <div class="page-hero-inner">
      <div class="crumb">Home &nbsp; / &nbsp; Contact</div>
      <p class="eyebrow" style="margin-top:24px">Consultation Enquiry</p>
      <h1>Let’s begin with your question.</h1>
      <p>Tell Priyanka Dey which discipline you are interested in — Vedic Astrology, Tarot Reading, Vastu Shastra, Kundali or Numerology — and your preferred session format.</p>
    </div>
  </section>

  <main>
    <section class="section">
      <div class="container split">
        <!-- Left: Details & Visual Sanctuary Accent -->
        <div>
          <p class="eyebrow">Get in touch</p>
          <h2 class="section-title">Request a <em>consultation.</em></h2>
          <p class="section-copy">Use the enquiry form to share your preferences. Sessions are offered both virtually and in-person in Siliguri, West Bengal.</p>
          
          <ul class="feature-list">
            <li><strong>Location:</strong> Siliguri, West Bengal, India</li>
            <li><strong>Online Consultations:</strong> Video & voice sessions worldwide</li>
            <li><strong>In-person Sessions:</strong> Available by prior appointment</li>
            <li><strong>Preparation:</strong> Have birth date, time and location ready for Kundali/Astrology</li>
          </ul>

          <div style="margin-top:28px">
            <img src="assets/images/astrology-zodiac-wheel.svg" alt="Astrology & Sacred Consultation Wheel" style="border:1px solid #c8a66b66;box-shadow:0 12px 30px rgba(0,0,0,0.1);max-height:220px;width:100%;object-fit:cover;border-radius:4px">
            <p style="font-size:11px;color:var(--muted);margin-top:8px;text-align:center">✦ Ancient Vedic wisdom thoughtfully adapted for modern life</p>
          </div>
        </div>

        <!-- Right: Form -->
        <div id="booking" class="booking-card">
          <h2 class="serif" style="font-size:35px;color:var(--champagne);margin-bottom:8px">Your enquiry</h2>
          <p class="section-copy" style="font-size:12px;margin-bottom:20px">Fields marked * are required.</p>
          
          <form id="bookingForm">
            <div class="form-grid">
              <label class="field">
                Your name *
                <input required name="name" placeholder="Full name">
              </label>

              <label class="field">
                Phone / WhatsApp *
                <input required name="phone" type="tel" placeholder="+91">
              </label>

              <label class="field">
                Service *
                <select id="service" name="service" required>
                  <option value="">Choose a service</option>
                  <option value="Astrology">Astrology Consultation</option>
                  <option value="Kundali Analysis">Kundali Analysis</option>
                  <option value="Kundali Matching">Kundali Matching</option>
                  <option value="Tarot Reading">Tarot Reading</option>
                  <option value="Numerology">Numerology</option>
                  <option value="Vastu Shastra">Vastu Consultation</option>
                  <option value="Career Guidance">Career &amp; Business Guidance</option>
                  <option value="Love &amp; Marriage">Love &amp; Marriage Consultation</option>
                  <option value="Muhurta Selection">Muhurta Selection</option>
                  <option value="Horoscope">Horoscope &amp; Zodiac</option>
                  <option value="General">Other / Not Sure</option>
                </select>
              </label>

              <label class="field">
                Preferred format
                <select name="format">
                  <option>Online consultation (Video / Audio)</option>
                  <option>In-person session in Siliguri</option>
                  <option>Need guidance choosing format</option>
                </select>
              </label>

              <label class="field full">
                Your message / Birth details
                <textarea class="full" name="message" rows="4" placeholder="Briefly share your questions, or birth date, time, and birthplace for natal charts."></textarea>
              </label>

              <label class="field full" style="display:flex;gap:10px;align-items:flex-start;font-weight:400">
                <input style="width:auto;margin-top:2px" type="checkbox" required>
                <span>I agree to be contacted via WhatsApp or phone regarding this enquiry.</span>
              </label>

              <div class="full">
                <button class="btn gold" type="submit" style="width:100%;font-size:13px">Continue with WhatsApp ↗</button>
                <p id="formNote" class="notice" hidden style="margin-top:14px" role="status"></p>
              </div>
            </div>
          </form>

          <p style="font-size:10px;line-height:1.7;color:var(--muted);margin-top:16px">
            Privacy Assurance: Your birth information and personal questions remain strictly confidential.
          </p>
        </div>
      </div>
    </section>

    <!-- 4-DISCIPLINE VISUAL BANNER STRIP -->
    <section class="section soft" style="padding:50px 24px">
      <div class="container center">
        <p class="eyebrow">Consultation Areas</p>
        <div class="cards" style="margin-top:25px">
          <article class="card">
            <img src="assets/images/kundali-chart.svg" alt="Kundali Analysis" style="height:140px;object-fit:cover">
            <div class="card-body" style="padding:16px">
              <span class="card-number">Birth Chart</span>
              <h3 style="font-size:20px;margin:6px 0">Kundali</h3>
            </div>
          </article>
          <article class="card">
            <img src="assets/images/vastu-mandala.svg" alt="Vastu Shastra" style="height:140px;object-fit:cover">
            <div class="card-body" style="padding:16px">
              <span class="card-number">Spatial Harmony</span>
              <h3 style="font-size:20px;margin:6px 0">Vastu</h3>
            </div>
          </article>
          <article class="card">
            <img src="assets/images/tarot-mystic-card.svg" alt="Tarot Reading" style="height:140px;object-fit:cover">
            <div class="card-body" style="padding:16px">
              <span class="card-number">Intuitive Reflection</span>
              <h3 style="font-size:20px;margin:6px 0">Tarot</h3>
            </div>
          </article>
          <article class="card">
            <img src="assets/images/sacred-numerology.svg" alt="Numerology Blueprint" style="height:140px;object-fit:cover">
            <div class="card-body" style="padding:16px">
              <span class="card-number">Numeric Resonance</span>
              <h3 style="font-size:20px;margin:6px 0">Numerology</h3>
            </div>
          </article>
        </div>
      </div>
    </section>
  </main>

<?php
include __DIR__ . '/footer.php';
?>
