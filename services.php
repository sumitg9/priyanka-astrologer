<?php
$pageTitle = "Consultation Services | Vedic Astrology, Kundali, Tarot &amp; Vastu | Priyanka Dey";
$pageDescription = "Explore the full spectrum of consultations by Priyanka Dey in Siliguri and online: Vedic Astrology, Kundali Analysis, Kundali Matching, Tarot Reading, Numerology, Vastu Shastra, and Muhurta selection.";
$pageKeywords = "Astrology services Siliguri, Kundali matching Siliguri, Tarot card reading, Vastu Shastra audit, Numerology consultation, Priyanka Dey services";
$canonicalUrl = "https://priyankadey.com/services.php";
$ogImage = "https://priyankadey.com/assets/astrology.jpg";
$activeNav = "services";
$extraHead = <<<'EXTRAHEAD'
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "Service",
        "@id": "https://priyankadey.com/services.php#service",
        "name": "Consultation Services Hub",
        "provider": {
          "@type": "Person",
          "name": "Priyanka Dey",
          "jobTitle": "Vedic Astrologer, Tarot Reader & Vastu Consultant",
          "address": {
            "@type": "PostalAddress",
            "addressLocality": "Siliguri",
            "addressRegion": "West Bengal",
            "addressCountry": "IN"
          }
        },
        "description": "Full spectrum of spiritual, astrological, and metaphysical consultation services offered by Priyanka Dey in Siliguri and worldwide online.",
        "areaServed": [
          { "@type": "City", "name": "Siliguri" },
          { "@type": "AdministrativeArea", "name": "West Bengal" },
          { "@type": "Country", "name": "India" }
        ]
      },
      {
        "@type": "BreadcrumbList",
        "itemListElement": [
          {
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "https://priyankadey.com/index.php"
          },
          {
            "@type": "ListItem",
            "position": 2,
            "name": "Services",
            "item": "https://priyankadey.com/services.php"
          }
        ]
      },
      {
        "@type": "FAQPage",
        "@id": "https://priyankadey.com/services.php#faq",
        "mainEntity": [
          {
            "@type": "Question",
            "name": "How do I choose between an Astrology, Tarot, Vastu, or Numerology consultation?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Choose Astrology or Kundali Analysis if you have your exact birth date, time, and location and seek in-depth insights into lifelong planetary cycles, career timing, and karmic tendencies. Choose Tarot Reading if you face an immediate decision, relationship dilemma, or lack exact birth time coordinates. Choose Vastu Shastra for architectural and spatial energy balancing in your home or workplace. Choose Numerology to harmonize your name vibration and understand your personal 9-year cycle."
            }
          },
          {
            "@type": "Question",
            "name": "Can multiple disciplines be combined into a single consultation session?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes. Priyanka frequently synthesizes disciplines—such as cross-referencing your Vedic Janam Kundali with Numerology, or pairing Astrological transits with intuitive Tarot spreads for immediate crossroads dilemmas. Simply mention your preferences when booking your enquiry."
            }
          },
          {
            "@type": "Question",
            "name": "What is the difference between an in-person chamber consultation and an online video reading?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "The depth of mathematical calculations, dedicated consultation duration (60 minutes), and detailed attention to your questions are 100% identical. In-person consultations take place at our peaceful chamber in Siliguri, while online sessions are conducted via Google Meet or WhatsApp Video with live screen sharing."
            }
          },
          {
            "@type": "Question",
            "name": "What if I do not have my exact birth time? Which services can I still book?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "If your exact birth time is unknown, you can book Tarot Card Reading, Numerology, Vastu Shastra, or Horary Astrology (Prashna Kundali), all of which do not require minute-precise birth records. Alternatively, if your birth time is known within a narrow window, Birth Time Rectification (BTR) can be performed."
            }
          },
          {
            "@type": "Question",
            "name": "How should I prepare my questions before attending a consultation?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "We recommend writing down 3 to 5 clear, prioritized questions covering the key areas of your life (e.g. career transitions, relationship dynamics, financial investments, family harmony). Having your thoughts organized ensures every pressing priority is thoroughly addressed."
            }
          },
          {
            "@type": "Question",
            "name": "How strictly confidential are consultation discussions?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Confidentiality is an uncompromising ethical pillar of our practice. Your birth data, questions, personal vulnerabilities, family matters, and consultation records are held in strict privacy and are never disclosed, recorded, or shared with third parties."
            }
          },
          {
            "@type": "Question",
            "name": "What is your policy regarding remedies—are there hidden rituals or mandatory purchases?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "No. Priyanka Dey firmly opposes fear-mongering commercialism. Classical remedies suggested are sattvic and empowering: personalized mantras for mental peace, charitable acts (Daana), lifestyle alignments, and gemstone suggestions only when genuinely beneficial and feasible for the client."
            }
          }
        ]
      }
    ]
  }
  </script>
EXTRAHEAD;

include __DIR__ . '/header.php';
?>

<!-- PAGE HERO -->
  <section class="page-hero stars">
    <div class="page-hero-inner">
      <nav class="crumb" aria-label="Breadcrumb">
        <a href="index.php">Home</a> &nbsp;/&nbsp;
        <span>Services</span>
      </nav>

      <div class="trust-pills">
        <span class="trust-pill"><span class="trust-pill-dot"></span> 9 Classical Vedic &amp; Intuitive
          Disciplines</span>
        <span class="trust-pill"><span class="trust-pill-dot"></span> Personalised In-Person &amp; Online
          Consultations</span>
        <span class="trust-pill"><span class="trust-pill-dot"></span> Ethical, Non-Fatalistic Philosophy</span>
        <span class="trust-pill"><span class="trust-pill-dot"></span> Siliguri Chamber &amp; Worldwide Sessions</span>
      </div>

      <p class="eyebrow" style="margin-top:28px">Sacred Disciplines &amp; Personalised Guidance</p>
      <h1>Classical Disciplines, <em>Personal Consultations.</em></h1>
      <p class="hero-desc">
        Explore a comprehensive spectrum of astrological calculations, spatial Vastu audits, intuitive tarot spreads,
        and numerological blueprints. Each session is carefully tailored around your individual questions and life
        transitions.
      </p>

      <div class="hero-actions" style="margin-top:32px;display:flex;gap:14px;justify-content:center;flex-wrap:wrap">
        <a class="btn gold" href="contact.php#booking">Book a Consultation &#8599;</a>
        <a class="btn" href="#services-menu">Explore All Services &#8595;</a>
      </div>
    </div>
  </section>

  <main id="main-content">
    <!-- SERVICES GRID WITH DEDICATED THEMATIC PHOTOGRAPHY -->
    <section class="section soft" id="services-menu">
      <div class="container center">
        <p class="eyebrow">Consultation Directory</p>
        <h2 class="section-title">Find the Discipline to <em>Illuminate Your Path.</em></h2>
        <p class="section-copy">Choose a dedicated consultation tailored around your natal coordinates, spatial layout,
          or immediate life crossroad.</p>

        <div class="cards cards-3col" style="margin-top:45px">
          <!-- 01. Astrology Consultation -->
          <article class="card" id="astrology">
            <img src="assets/astrology.jpg" alt="Vedic Astrology Consultation in Siliguri" width="600" height="340"
              loading="lazy" decoding="async">
            <div class="card-body">
              <span class="card-number">01 / Cosmic Wisdom</span>
              <h3>Astrology Consultation</h3>
              <p>In-depth birth-chart interpretation, planetary transit calculations, and traditional Vedic remedies to
                illuminate your life path.</p>
              <a class="text-link" href="astrology.php">EXPLORE ASTROLOGY &#8599;</a>
            </div>
          </article>

          <!-- 02. Kundali Analysis -->
          <article class="card" id="kundali">
            <img src="assets/kundali.jpg" alt="Vedic Janam Kundali Analysis in Siliguri" width="600" height="340"
              loading="lazy" decoding="async">
            <div class="card-body">
              <span class="card-number">02 / Birth Chart</span>
              <h3>Kundali Analysis</h3>
              <p>Comprehensive traditional Janam Kundali breakdown including Lagna, Navamsha (D9), planetary yogas, and
                Mahadasha cycles.</p>
              <a class="text-link" href="kundali.php">EXPLORE KUNDALI &#8599;</a>
            </div>
          </article>

          <!-- 03. Kundali Matching -->
          <article class="card" id="kundali-matching">
            <img src="assets/kundali-horoscope.jpg" alt="Kundali Matching Gun Milan for Marriage" width="600"
              height="340" loading="lazy" decoding="async">
            <div class="card-body">
              <span class="card-number">03 / Sacred Union</span>
              <h3>Kundali Matching</h3>
              <p>Ashtakoot Guna Milan, Manglik Dosha evaluation, and holistic astrological compatibility for prospective
                brides and grooms.</p>
              <a class="text-link" href="kundali-matching.php">EXPLORE MATCHING &#8599;</a>
            </div>
          </article>

          <!-- 04. Tarot Reading -->
          <article class="card" id="tarot">
            <img src="assets/tarot.png" alt="Intuitive Tarot Card Reading Consultation" width="600" height="340"
              loading="lazy" decoding="async">
            <div class="card-body">
              <span class="card-number">04 / Intuitive Soul</span>
              <h3>Tarot Reading</h3>
              <p>Reflective archetypal card spreads for pressing questions, understanding emotional crossroads, and
                restoring quiet clarity.</p>
              <a class="text-link" href="tarot.php">EXPLORE TAROT &#8599;</a>
            </div>
          </article>

          <!-- 05. Numerology -->
          <article class="card" id="numerology">
            <img src="assets/numerology.jpg" alt="Sacred Numerology and Name Correction" width="600" height="340"
              loading="lazy" decoding="async">
            <div class="card-body">
              <span class="card-number">05 / Sacred Numbers</span>
              <h3>Numerology</h3>
              <p>Pythagorean and Vedic interpretations of birth dates, Mulank, Bhagyank, destiny cycles, and personal
                name vibration alignment.</p>
              <a class="text-link" href="numerology.php">EXPLORE NUMEROLOGY &#8599;</a>
            </div>
          </article>

          <!-- 06. Vastu Consultation -->
          <article class="card" id="vastu">
            <img src="assets/vastu.jpg" alt="Vastu Shastra Space Audit in Siliguri" width="600" height="340"
              loading="lazy" decoding="async">
            <div class="card-body">
              <span class="card-number">06 / Space Harmony</span>
              <h3>Vastu Consultation</h3>
              <p>Directional elemental analysis for residential and commercial spaces, balancing cosmic energies to
                foster peace and prosperity.</p>
              <a class="text-link" href="vastu.php">EXPLORE VASTU &#8599;</a>
            </div>
          </article>

          <!-- 07. Career & Business Guidance -->
          <article class="card" id="career">
            <img src="assets/numbers.jpg" alt="Career and Business Astrology Guidance" width="600" height="340"
              loading="lazy" decoding="async">
            <div class="card-body">
              <span class="card-number">07 / Auspicious Growth</span>
              <h3>Career &amp; Business Guidance</h3>
              <p>Planetary dasha timing for promotions, career pivots, business launches, and selecting auspicious
                periods for investments.</p>
              <a class="text-link" href="career-guidance.php">EXPLORE CAREER GUIDANCE
                &#8599;</a>
            </div>
          </article>

          <!-- 08. Love & Marriage Consultation -->
          <article class="card" id="marriage">
            <img src="assets/tarrot.jpg" alt="Love and Marriage Astrological Consultation" width="600" height="340"
              loading="lazy" decoding="async">
            <div class="card-body">
              <span class="card-number">08 / Relationship Harmony</span>
              <h3>Love &amp; Marriage Consultation</h3>
              <p>Compassionate astrological and intuitive guidance for couples, resolving recurring relationship
                friction and deepening understanding.</p>
              <a class="text-link" href="marriage-consultation.php">EXPLORE RELATIONSHIPS
                &#8599;</a>
            </div>
          </article>

          <!-- 09. Muhurta Selection -->
          <article class="card" id="muhurta">
            <img src="assets/horoscope.jpg" alt="Muhurta Selection Auspicious Timing" width="600" height="340"
              loading="lazy" decoding="async">
            <div class="card-body">
              <span class="card-number">09 / Auspicious Timing</span>
              <h3>Muhurta Selection</h3>
              <p>Identification of spiritually harmonious celestial timing (Shubh Muhurat) for weddings, Griha Pravesh,
                and business inaugurations.</p>
              <a class="text-link" href="muhurta.php">EXPLORE MUHURTA SELECTION
                &#8599;</a>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- SECTION: NOT SURE WHERE TO BEGIN (WITH PHOTO) -->
    <section class="section" id="where-to-begin">
      <div class="container two-col">
        <img class="portrait" src="assets/priyanka-dey.jpg" alt="Priyanka Dey Consultation Guidance in Siliguri"
          width="541" height="963" loading="lazy" decoding="async">
        <div>
          <p class="eyebrow">Personal Guidance</p>
          <h2 class="section-title">Not Sure Where to <em>Begin?</em></h2>
          <p class="section-copy">
            Spiritual and metaphysical traditions often interconnect naturally. You might start with an astrological
            birth chart analysis, seek directional adjustments through Vastu, or look for immediate intuitive
            perspective via a tarot card reading.
          </p>
          <p class="section-copy" style="margin-top:15px">
            Reach out through our consultation form with your initial questions. Priyanka will recommend the most
            constructive, relevant approach for your present circumstances.
          </p>
          <div style="margin-top:28px;display:flex;gap:14px;flex-wrap:wrap">
            <a class="btn gold" href="contact.php#booking">Send Consultation Enquiry &#8599;</a>
            <a class="btn"
              href="https://wa.me/919876543210?text=Hello%20Priyanka%20Dey,%20I%20am%20unsure%20which%20consultation%20is%20right%20for%20me.%20Could%20you%20guide%20me?"
              target="_blank" rel="noopener noreferrer">Ask on WhatsApp &#8599;</a>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION: CLEVER MID-PAGE CTA BANNER -->
    <section class="section soft">
      <div class="container">
        <div class="service-cta-banner">
          <div class="cta-banner-content">
            <p class="eyebrow" style="color:var(--champagne)">Auspicious Beginnings</p>
            <h2>Ready to Book Your <em>Consultation?</em></h2>
            <p>
              Receive calm, authentic, and confidential guidance tailored to your life situation. Available in-person at
              our Siliguri chamber or globally via private live video sessions.
            </p>
            <div style="margin-top:28px;display:flex;gap:14px;justify-content:center;flex-wrap:wrap">
              <a class="btn gold" href="contact.php#booking">Book a Consultation Now &#8599;</a>
              <a class="btn" href="about.php">About Priyanka Dey &#8599;</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION: FREQUENTLY ASKED QUESTIONS (ACCORDION AT BOTTOM BEFORE FOOTER) -->
    <section class="section soft" id="faq">
      <div class="container center">
        <p class="eyebrow">Frequently Asked Questions</p>
        <h2 class="section-title">Everything You Need to Know About <em>Our Services.</em></h2>
        <p class="section-copy">Clear, upfront answers about session formats, preparation, remedies, and choosing the
          right discipline.</p>

        <div class="faq-wrap">
          <!-- FAQ 1 -->
          <details class="faq-accordion" open>
            <summary class="faq-summary">
              <span>How do I choose between an Astrology, Tarot, Vastu, or Numerology consultation?</span>
              <span class="faq-indicator" aria-hidden="true">+</span>
            </summary>
            <div class="faq-content">
              <p>
                Each discipline addresses a distinct facet of your life:
              </p>
              <ul style="margin: 10px 0 14px 20px; line-height: 1.8; text-align: left;">
                <li><strong>Astrology / Janam Kundali:</strong> Ideal when you have exact birth details and seek
                  long-term clarity on career trajectories, Mahadasha cycles, relationship compatibility, and major life
                  timing.</li>
                <li><strong>Tarot Reading:</strong> Best suited for immediate crossroads dilemmas, emotional
                  reflections, and situations where exact birth time is unavailable.</li>
                <li><strong>Vastu Shastra:</strong> Recommended for harmonizing physical living environments, improving
                  domestic tranquility, or optimizing corporate workplaces for financial liquidity.</li>
                <li><strong>Numerology:</strong> Excellent for optimizing name spellings, brand names, understanding
                  your core Root Number (Mulank), and navigating your 9-year personal cycle.</li>
              </ul>
            </div>
          </details>

          <!-- FAQ 2 -->
          <details class="faq-accordion">
            <summary class="faq-summary">
              <span>Can multiple disciplines be combined into a single consultation session?</span>
              <span class="faq-indicator" aria-hidden="true">+</span>
            </summary>
            <div class="faq-content">
              <p>
                Yes. Priyanka frequently synthesizes disciplines during comprehensive consultations. For instance, an
                Astrology session can be enriched with Numerological name frequency analysis, or Astrological transit
                timing can be paired with an intuitive Tarot spread to explore personal crossroads in depth.
              </p>
            </div>
          </details>

          <!-- FAQ 3 -->
          <details class="faq-accordion">
            <summary class="faq-summary">
              <span>What is the difference between an in-person chamber consultation and an online video reading?</span>
              <span class="faq-indicator" aria-hidden="true">+</span>
            </summary>
            <div class="faq-content">
              <p>
                The astrological calculation depth, consultation duration (60 minutes), and personal attention are 100%
                identical. In-person consultations take place at our quiet chamber in Siliguri, West Bengal.
              </p>
              <p>
                Online sessions are conducted live via Google Meet or WhatsApp Video Call with screen-sharing
                capabilities, allowing clients across India and internationally to view their charts in real time.
              </p>
            </div>
          </details>

          <!-- FAQ 4 -->
          <details class="faq-accordion">
            <summary class="faq-summary">
              <span>What if I do not have my exact birth time? Which services can I still book?</span>
              <span class="faq-indicator" aria-hidden="true">+</span>
            </summary>
            <div class="faq-content">
              <p>
                If your exact birth time is completely unknown, you can book:
              </p>
              <ul style="margin: 10px 0 14px 20px; line-height: 1.8; text-align: left;">
                <li><strong>Tarot Reading:</strong> Requires no birth data; works through real-time energetic resonance.
                </li>
                <li><strong>Numerology:</strong> Requires only the date of birth (day, month, year) and full legal name.
                </li>
                <li><strong>Vastu Shastra:</strong> Evaluates spatial floor plans and compass directions, independent of
                  personal birth charts.</li>
                <li><strong>Prashna Kundali (Horary Astrology):</strong> Cast for the exact moment you ask your
                  question.</li>
              </ul>
              <p>
                If your birth time is known within an approximate window, Birth Time Rectification (BTR) can also be
                conducted.
              </p>
            </div>
          </details>

          <!-- FAQ 5 -->
          <details class="faq-accordion">
            <summary class="faq-summary">
              <span>How should I prepare my questions before attending a consultation?</span>
              <span class="faq-indicator" aria-hidden="true">+</span>
            </summary>
            <div class="faq-content">
              <p>
                We recommend writing down 3 to 5 clear, prioritized questions before your session. Open-ended
                inquiries—such as &ldquo;What factors should I weigh before switching careers?&rdquo; or &ldquo;How can
                we resolve persistent communication friction in our marriage?&rdquo;—yield far deeper, more actionable
                guidance than simple yes/no questions.
              </p>
            </div>
          </details>

          <!-- FAQ 6 -->
          <details class="faq-accordion">
            <summary class="faq-summary">
              <span>How strictly confidential are consultation discussions?</span>
              <span class="faq-indicator" aria-hidden="true">+</span>
            </summary>
            <div class="faq-content">
              <p>
                Confidentiality is an uncompromising ethical pillar of our practice. Your birth coordinates, personal
                life circumstances, family concerns, and session notes are kept completely confidential and are never
                disclosed, recorded publicly, or shared with any third party.
              </p>
            </div>
          </details>

          <!-- FAQ 7 -->
          <details class="faq-accordion">
            <summary class="faq-summary">
              <span>What is your policy regarding remedies—are there hidden rituals or mandatory purchases?</span>
              <span class="faq-indicator" aria-hidden="true">+</span>
            </summary>
            <div class="faq-content">
              <p>
                No. Priyanka Dey adheres strictly to ethical Vedic and philosophical standards and firmly opposes
                fear-mongering commercialism.
              </p>
              <p>
                Remedies suggested are classical, sattvic, and empowering: personalized Vedic mantras for mental
                tranquility, charitable donations (Daana), behavioral adjustments, and gemstone guidance only when
                genuinely beneficial and feasible for the client.
              </p>
            </div>
          </details>
        </div>
      </div>
    </section>
  </main>

  <!-- FOOTER -->

<?php
include __DIR__ . '/footer.php';
?>
