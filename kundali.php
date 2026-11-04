<?php
$pageTitle = "Janam Kundali Analysis & Vedic Birth Chart Consultation | Priyanka Dey Siliguri";
$pageDescription = "In-depth Vedic Janam Kundali analysis, D9 Navamsha chart readings, Mahadasha timeline predictions, and classical remedies by Priyanka Dey in Siliguri and online worldwide.";
$pageKeywords = "Kundali Analysis Siliguri, Janam Kundali reading, Vedic birth chart, Navamsha D9 analysis, Mahadasha predictions, Kundali dosha remedies Siliguri, Priyanka Dey";
$canonicalUrl = "https://priyankadey.com/kundali.php";
$ogImage = "https://priyankadey.com/assets/images/kundali.jpg";
$activeNav = "kundali";
$extraHead = <<<'EXTRAHEAD'
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "Service",
        "@id": "https://priyankadey.com/kundali.php#service",
        "name": "Janam Kundali Analysis & Vedic Birth Chart Reading",
        "provider": {
          "@type": "Person",
          "name": "Priyanka Dey",
          "jobTitle": "Vedic Astrologer & Kundali Specialist",
          "address": {
            "@type": "PostalAddress",
            "addressLocality": "Siliguri",
            "addressRegion": "West Bengal",
            "addressCountry": "IN"
          }
        },
        "description": "Comprehensive Vedic Janam Kundali analysis covering the 12 Bhavas, D1 Rashi, D9 Navamsha divisional charts, planetary yogas, dosha clarifications, and Vimshottari Mahadasha timelines.",
        "areaServed": [
          { "@type": "City", "name": "Siliguri" },
          { "@type": "AdministrativeArea", "name": "West Bengal" },
          { "@type": "Country", "name": "India" }
        ],
        "hasOfferCatalog": {
          "@type": "OfferCatalog",
          "name": "Kundali Consultation Services",
          "itemListElement": [
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "name": "In-Person Janam Kundali Consultation in Siliguri"
              }
            },
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "name": "Online Kundali Reading (Google Meet / WhatsApp Video)"
              }
            }
          ]
        }
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
          },
          {
            "@type": "ListItem",
            "position": 3,
            "name": "Kundali Analysis",
            "item": "https://priyankadey.com/kundali.php"
          }
        ]
      },
      {
        "@type": "FAQPage",
        "@id": "https://priyankadey.com/kundali.php#faq",
        "mainEntity": [
          {
            "@type": "Question",
            "name": "What exact information do I need to provide for a Kundali consultation?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "To generate an accurate Janam Kundali (birth chart), you need to provide three exact coordinates: your Date of Birth (day, month, year), exact Time of Birth (hours and minutes, ideally from hospital records), and Place of Birth (city or district to determine astronomical latitude and longitude)."
            }
          },
          {
            "@type": "Question",
            "name": "What is the fundamental difference between my Lagna (Ascendant) and Rashi (Moon sign)?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Your Lagna (Ascendant) is the zodiac constellation rising on the eastern horizon at the exact minute you were born. It establishes the 1st House and governs your physical vitality, health, temperament, and outward life path. Your Rashi (Moon sign) reflects the constellation the Moon occupied at birth, governing your emotional mind, instincts, mental comfort, and inner psychology."
            }
          },
          {
            "@type": "Question",
            "name": "Why is the Navamsha (D9) chart examined alongside the main birth chart?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "In Vedic astrology, the D1 Rashi chart shows external potential, while the D9 Navamsha chart represents the inner strength (potency) of each planet and reveals the fruit of your karma. It is crucial for assessing marriage compatibility, spouse nature, long-term relationship harmony, and career direction in the mature phase of life (typically after age 28-32)."
            }
          },
          {
            "@type": "Question",
            "name": "What are Mahadasha and Antardasha, and how do they affect my life timing?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "The Vimshottari Dasha system is a 120-year cosmic cycle where different planets rule specific periods of your life. While your birth chart shows what you are born with, the Mahadasha (major period) and Antardasha (sub-period) reveal WHEN those events will actually manifest—explaining why certain periods bring rapid career growth while others require patience and inner cultivation."
            }
          },
          {
            "@type": "Question",
            "name": "I was told I have Manglik Dosha or Kaal Sarp Dosha. Is this something to worry about?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "No. Classical Parashari scriptures describe hundreds of cancellation rules (Dosha Bhanga) that neutralize or greatly soften planetary combinations like Mangal Dosha or Kaal Sarp. Priyanka Dey provides calm, classical, and fear-free explanations, separating superstitious myth from actual astrological reality and suggesting simple, sattvic harmonizations."
            }
          },
          {
            "@type": "Question",
            "name": "Can a Janam Kundali be prepared and analyzed for a newborn baby?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes. A newborn's Janam Kundali is cast to identify the auspicious Janma Nakshatra, recommended Vedic naming syllables (Namkaran), inherent constitutional temperament (Prakriti), and early planetary periods. In accordance with classical Vedic ethics, predictions regarding longevity or distant adult developments are not made during early infancy."
            }
          },
          {
            "@type": "Question",
            "name": "Can I receive my Kundali consultation via online video call if I am outside Siliguri?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes. Online Kundali consultations are conducted regularly via Google Meet or WhatsApp Video Call for clients across West Bengal, India, and internationally. The depth of astronomical calculations, screen-shared chart review, and dedicated time are identical to an in-person chamber session."
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
        <a href="services.php">Services</a> &nbsp;/&nbsp;
        <span>Kundali Analysis</span>
      </nav>

      <div class="trust-pills">
        <span class="trust-pill"><span class="trust-pill-dot"></span> D1 Rashi &amp; D9 Navamsha Precision</span>
        <span class="trust-pill"><span class="trust-pill-dot"></span> Vimshottari Dasha Timeline</span>
        <span class="trust-pill"><span class="trust-pill-dot"></span> Objective Dosha &amp; Yoga Assessment</span>
        <span class="trust-pill"><span class="trust-pill-dot"></span> In Siliguri &amp; Online Worldwide</span>
      </div>

      <p class="eyebrow" style="margin-top:28px">Vedic Janam Kundali &amp; Natal Blueprint</p>
      <h1>Janam Kundali Analysis &amp; <em>Natal Blueprint.</em></h1>
      <p class="hero-desc">
        A profound, mathematical exploration of your 12 Bhavas, planetary dignities, harmonic divisional charts, and
        unfolding Dasha cycles. Unlock authentic clarity on your vocational calling, relationship harmony, and life
        milestones without superstitious fatalism.
      </p>

      <div class="hero-actions" style="margin-top:32px;display:flex;gap:14px;justify-content:center;flex-wrap:wrap">
        <a class="btn gold" href="contact.php?service=Kundali#booking">Book Kundali Reading &#8599;</a>
        <a class="btn" href="#framework">Explore Kundali Framework &#8595;</a>
      </div>
    </div>
  </section>

  <main id="main-content">
    <!-- SECTION 1: THE CELESTIAL BLUEPRINT (SPLIT OVERVIEW) -->
    <section class="section" id="framework">
      <div class="container split">
        <div>
          <p class="eyebrow">The Natal Framework</p>
          <h2 class="section-title">Your Celestial Blueprint, <em>Calculated with Mathematical Rigour.</em></h2>
          <p class="section-copy">
            A Vedic <strong>Janam Kundali (Natal Horoscope)</strong> is not a generic personality archetype; it is an
            exact astronomical snapshot of the celestial heavens captured at the precise moment and geographic
            coordinates of your birth.
          </p>
          <p class="section-copy" style="margin-top:14px">
            As the Earth rotates, a specific zodiac constellation ascends on the eastern horizon. This marks your
            <strong>Lagna (Ascendant)</strong>, defining the 1st House of identity, physical vitality, and worldview.
            From this foundational anchor, eleven subsequent Bhavas unfold—governing finances, family lineage, courage,
            emotional roots, intellectual progeny, partnerships, and ultimate purpose.
          </p>

          <ul class="feature-list" style="margin-top:20px">
            <li><strong>Lagna &amp; Rashi Synergy:</strong> Bridging external life momentum with internal emotional
              psychology.</li>
            <li><strong>D9 Navamsha Harmony:</strong> Inspecting the harmonic soul chart to evaluate hidden planetary
              strength and marriage.</li>
            <li><strong>Vimshottari Dasha Mapping:</strong> Calculating the 120-year cycle to understand your active
              planetary seasons.</li>
            <li><strong>Sattvic, Constructive Guidance:</strong> Clarifying classical combinations (Yogas and Doshas)
              with calm rationality.</li>
          </ul>

          <div class="notice" style="margin-top:24px">
            <strong>Ethical Practice Guarantee:</strong> Priyanka Dey treats your Janam Kundali as a diagnostic
            instrument for self-knowledge and timely action. Consultations never rely on fear-inducing omens,
            sensationalist claims, or commercial rituals.
          </div>

          <div style="margin-top:28px">
            <a class="btn gold" href="contact.php?service=Kundali#booking">Schedule Your Kundali Reading &#8599;</a>
          </div>
        </div>

        <div>
          <img class="portrait" src="assets/images/kundali.jpg"
            alt="Vedic Janam Kundali birth chart analysis and astrological calculations in Siliguri" width="896"
            height="1200" loading="lazy" decoding="async">
        </div>
      </div>
    </section>

    <!-- SECTION 2: SIX PILLARS OF A COMPREHENSIVE KUNDALI READING -->
    <section class="section soft" id="pillars">
      <div class="container center">
        <p class="eyebrow">Diagnostic Depth</p>
        <h2 class="section-title">The Six Pillars of <em>In-Depth Kundali Analysis.</em></h2>
        <p class="section-copy">How classical Parashari Jyotish systematically examines every layer of your birth chart.
        </p>

        <div class="focus-grid" style="margin-top:45px">
          <!-- Pillar 1: Lagna & Atmakaraka -->
          <article class="focus-card">
            <span class="card-icon-badge">&#10022;</span>
            <span class="card-number">01 / The Core Self</span>
            <h3>Lagna &amp; Atmakaraka</h3>
            <p>
              Your Ascendant degree establishes physical constitution, natural temperament, and how you engage with the
              world. Cross-referenced with the Atmakaraka (the planet holding highest degree), we identify your deepest
              spiritual lessons.
            </p>
            <div style="margin-top:16px">
              <a class="text-link" href="contact.php?service=Kundali#booking">EXPLORE YOUR ASCENDANT &#8599;</a>
            </div>
          </article>

          <!-- Pillar 2: The 12 Bhavas -->
          <article class="focus-card">
            <span class="card-icon-badge">&#9775;</span>
            <span class="card-number">02 / The Life Houses</span>
            <h3>The 12 Bhavas (Houses)</h3>
            <p>
              Every domain of life has its own house: 1st of Self, 2nd of Wealth &amp; Speech, 4th of Domestic Peace,
              7th of Marriage, 9th of Fortune &amp; Dharma, and 10th of Profession. We examine house lords, aspects
              (Drishti), and planetary occupancy.
            </p>
            <div style="margin-top:16px">
              <a class="text-link" href="contact.php?service=Kundali#booking">ASSESS LIFE HOUSES &#8599;</a>
            </div>
          </article>

          <!-- Pillar 3: Navamsha (D9) Chart -->
          <article class="focus-card">
            <span class="card-icon-badge">&#9671;</span>
            <span class="card-number">03 / Subtle Potency</span>
            <h3>Navamsha (D9) Chart</h3>
            <p>
              A planet may appear exalted in the basic birth chart, but its true dignity is tested in the Navamsha.
              Essential for evaluating marital longevity, relational compatibility, and how your inner gifts ripen after
              age 28&ndash;32.
            </p>
            <div style="margin-top:16px">
              <a class="text-link" href="contact.php?service=Kundali#booking">D9 NAVAMSHA INSIGHTS &#8599;</a>
            </div>
          </article>

          <!-- Pillar 4: Yogas & Combinations -->
          <article class="focus-card">
            <span class="card-icon-badge">&#10038;</span>
            <span class="card-number">04 / Auspicious Alignments</span>
            <h3>Planetary Yogas</h3>
            <p>
              Identification of classical auspicious alignments: Raja Yogas (authority &amp; leadership), Dhana Yogas
              (wealth retention), Gajakesari Yoga (wisdom &amp; honor), and Budhaditya Yoga (intellectual acumen) and
              their timing of fruition.
            </p>
            <div style="margin-top:16px">
              <a class="text-link" href="contact.php?service=Kundali#booking">DISCOVER YOUR YOGAS &#8599;</a>
            </div>
          </article>

          <!-- Pillar 5: Dosha Clarification -->
          <article class="focus-card">
            <span class="card-icon-badge">&#9878;</span>
            <span class="card-number">05 / Objective Clarification</span>
            <h3>Doshas &amp; Planetary Afflictions</h3>
            <p>
              Rational assessment of Manglik Dosha, Kaal Sarp, Kemdrum, or Sade Sati. We examine textual cancellation
              rules (Bhanga) to dismantle unfounded anxiety, providing grounding sattvic remedies only where genuine
              imbalances exist.
            </p>
            <div style="margin-top:16px">
              <a class="text-link" href="contact.php?service=Kundali#booking">CLARIFY DOSHAS ETHICALLY &#8599;</a>
            </div>
          </article>

          <!-- Pillar 6: Vimshottari Mahadasha -->
          <article class="focus-card">
            <span class="card-icon-badge">&#9200;</span>
            <span class="card-number">06 / Temporal Timing</span>
            <h3>Vimshottari Dasha Cycles</h3>
            <p>
              The birth chart shows natal promise; the Dasha timeline determines WHEN that promise activates. We map
              your current Mahadasha, Antardasha, and upcoming planetary shifts to guide your timing for key personal
              investments and transitions.
            </p>
            <div style="margin-top:16px">
              <a class="text-link" href="contact.php?service=Kundali#booking">MAP YOUR DASHA TIMELINE &#8599;</a>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- SECTION 3: VISUAL SHOWCASE - JANAM PATRIKA ANATOMY -->
    <section class="section">
      <div class="container split">
        <div>
          <img class="portrait" src="assets/images/vedic-kundali.jpg"
            alt="Vedic Janam Kundali diagram chart showing planetary placements and houses" width="1200" height="896"
            loading="lazy" decoding="async">
        </div>

        <div>
          <p class="eyebrow">Chart Anatomy</p>
          <h2 class="section-title">Reading the Geometry of <em>Your Janam Patrika.</em></h2>
          <p class="section-copy">
            In North Indian Vedic tradition, the Janam Kundali is cast as a diamond matrix of twelve rhomboid
            compartments. Unlike Western wheel charts where houses shift around the perimeter, in the North Indian
            chart, the houses remain stationary while the signs and planets shift based on your rising Lagna.
          </p>
          <p class="section-copy" style="margin-top:14px">
            Priyanka Dey is well-versed in both <strong>North Indian diamond</strong> and <strong>South Indian
              square</strong> chart traditions, ensuring clients from all cultural backgrounds feel completely at home
            during their consultation.
          </p>

          <div style="margin-top:24px;display:flex;flex-direction:column;gap:12px">
            <div style="display:flex;gap:14px;align-items:flex-start">
              <span style="color:var(--champagne);font-size:18px;line-height:1">&#10022;</span>
              <p style="font-size:14.5px;color:rgba(255,255,255,0.78);line-height:1.7;margin:0">
                <strong>Kendra Houses (1, 4, 7, 10):</strong> The foundational pillars representing identity, heart,
                spouse, and societal contribution.
              </p>
            </div>
            <div style="display:flex;gap:14px;align-items:flex-start">
              <span style="color:var(--champagne);font-size:18px;line-height:1">&#10022;</span>
              <p style="font-size:14.5px;color:rgba(255,255,255,0.78);line-height:1.7;margin:0">
                <strong>Trikona Houses (1, 5, 9):</strong> The sacred Lakshmi sthanas governing past-life merits (Purva
                Punya), wisdom, and divine fortune.
              </p>
            </div>
            <div style="display:flex;gap:14px;align-items:flex-start">
              <span style="color:var(--champagne);font-size:18px;line-height:1">&#10022;</span>
              <p style="font-size:14.5px;color:rgba(255,255,255,0.78);line-height:1.7;margin:0">
                <strong>Upachaya Houses (3, 6, 10, 11):</strong> Houses of gradual self-effort where challenges convert
                into lasting achievement over time.
              </p>
            </div>
          </div>

          <div style="margin-top:30px">
            <a class="btn gold" href="contact.php?service=Kundali#booking">Request Your Full Chart Breakdown
              &#8599;</a>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 4: THE 4-STEP CONSULTATION PROCESS -->
    <section class="section soft" id="process">
      <div class="container center">
        <p class="eyebrow">Methodology &amp; Care</p>
        <h2 class="section-title">The Four Steps of a <em>Kundali Consultation.</em></h2>
        <p class="section-copy">From mathematical ephemeris calculation to constructive life remedies.</p>

        <div class="process-steps-grid" style="margin-top:45px">
          <!-- Step 1 -->
          <div class="process-step-item">
            <span class="step-num">01</span>
            <h3>Data Verification &amp; Lagna Check</h3>
            <p>
              We confirm your birth coordinates, calculate latitude and longitude, and review the rising degree to
              ensure your Ascendant boundary is verified before analysis begins.
            </p>
          </div>

          <!-- Step 2 -->
          <div class="process-step-item">
            <span class="step-num">02</span>
            <h3>Divisional Chart &amp; Dignity Audit</h3>
            <p>
              We cross-examine the D1 Rashi chart against the D9 Navamsha, computing Shadbala (six-fold planetary
              strength) and checking benefic/malefic combinations.
            </p>
          </div>

          <!-- Step 3 -->
          <div class="process-step-item">
            <span class="step-num">03</span>
            <h3>Dasha Timeline &amp; Gochara Overlay</h3>
            <p>
              We compute your current Vimshottari Mahadasha and Antardasha, overlaying real-time planetary transits
              (such as Saturn and Jupiter) across key life houses.
            </p>
          </div>

          <!-- Step 4 -->
          <div class="process-step-item">
            <span class="step-num">04</span>
            <h3>60-Minute Reading &amp; Sattvic Remedies</h3>
            <p>
              A calm, comprehensive conversation addressing your specific questions, followed by classical remedies:
              daily mantras, charitable acts, lifestyle shifts, and gemstone advice if needed.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 5: CLEVER MID-PAGE CTA BANNER -->
    <section class="section">
      <div class="container">
        <div class="service-cta-banner">
          <div class="cta-banner-content">
            <p class="eyebrow" style="color:var(--champagne)">Clarity Over Confusion</p>
            <h2>Ready to Decode Your <em>Janam Kundali?</em></h2>
            <p>
              Discover your inherent strengths, upcoming Mahadasha cycles, and actionable astrological guidance.
              Available at our Siliguri chamber or through private online video sessions.
            </p>
            <div style="margin-top:28px;display:flex;gap:14px;justify-content:center;flex-wrap:wrap">
              <a class="btn gold" href="contact.php?service=Kundali#booking">Book Kundali Consultation &#8599;</a>
              <a class="btn"
                href="https://wa.me/919876543210?text=Hello%20Priyanka%20Dey,%20I%20would%20like%20to%20enquire%20about%20a%20Kundali%20Analysis%20consultation."
                target="_blank" rel="noopener noreferrer">Chat on WhatsApp &#8599;</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 6: FREQUENTLY ASKED QUESTIONS (ACCORDION AT BOTTOM BEFORE FOOTER) -->
    <section class="section soft" id="faq">
      <div class="container center">
        <p class="eyebrow">Frequently Asked Questions</p>
        <h2 class="section-title">Everything You Need to Know About <em>Kundali Analysis.</em></h2>
        <p class="section-copy">Clear, upfront answers to common questions regarding Vedic birth charts, Dashas, and
          remedies.</p>

        <div class="faq-wrap">
          <!-- FAQ 1 -->
          <details class="faq-accordion" open>
            <summary class="faq-summary">
              <span>What exact information do I need to provide for a Kundali consultation?</span>
              <span class="faq-indicator" aria-hidden="true">+</span>
            </summary>
            <div class="faq-content">
              <p>
                To generate an accurate Janam Kundali (birth chart), three precise astronomical coordinates are
                necessary:
              </p>
              <ul style="margin: 10px 0 14px 20px; line-height: 1.8; text-align: left;">
                <li><strong>Date of Birth:</strong> Day, month, and year of birth.</li>
                <li><strong>Exact Time of Birth:</strong> Hours and minutes (ideally verified against official hospital
                  records or birth certificate). Because the Lagna (Ascendant) advances into a new sign roughly every
                  120 minutes, accurate time ensures correct house placements.</li>
                <li><strong>Place of Birth:</strong> The exact town, city, or district to calculate latitude, longitude,
                  and local mean time adjustments.</li>
              </ul>
              <p>
                If your exact birth time is approximate within a narrow window, Birth Time Rectification (BTR) can be
                performed prior to your session.
              </p>
            </div>
          </details>

          <!-- FAQ 2 -->
          <details class="faq-accordion">
            <summary class="faq-summary">
              <span>What is the fundamental difference between my Lagna (Ascendant) and Rashi (Moon sign)?</span>
              <span class="faq-indicator" aria-hidden="true">+</span>
            </summary>
            <div class="faq-content">
              <p>
                While popular western astrology focuses on Sun signs, authentic Vedic astrology relies heavily on the
                <strong>Lagna</strong> and the <strong>Rashi (Moon Sign)</strong>:
              </p>
              <ul style="margin: 10px 0 14px 20px; line-height: 1.8; text-align: left;">
                <li><strong>Lagna (Ascendant):</strong> The constellation rising on the eastern horizon at the exact
                  moment of birth. It anchors the 1st House and governs your physical constitution, vitality, natural
                  temperament, and worldly path.</li>
                <li><strong>Rashi (Moon Sign):</strong> The constellation occupied by the Moon at your birth. It governs
                  your emotional mind (Manas), psychological comfort zones, intuition, and mental reactivity.</li>
              </ul>
              <p>
                Both must be synthesized together: the Lagna indicates how you act in the outer world, while the Moon
                indicates how you perceive and feel your life experiences.
              </p>
            </div>
          </details>

          <!-- FAQ 3 -->
          <details class="faq-accordion">
            <summary class="faq-summary">
              <span>Why is the Navamsha (D9) chart examined alongside the main birth chart?</span>
              <span class="faq-indicator" aria-hidden="true">+</span>
            </summary>
            <div class="faq-content">
              <p>
                The <strong>Navamsha (D9) chart</strong> is the most important divisional chart (Shodashvarga) in Vedic
                astrology. While the basic D1 Rashi chart shows external potential and tree branches, the Navamsha
                reveals the roots and the ultimate fruit.
              </p>
              <p>
                A planet that looks exalted in D1 might lose dignity in D9, or conversely, a debilitated planet might
                gain extraordinary strength (Neecha Bhanga) in D9. Moreover, the Navamsha specifically governs
                <strong>marriage compatibility, the nature of your life partner, and the development of your character
                  and career during the second half of life (typically after age 28 to 32)</strong>.
              </p>
            </div>
          </details>

          <!-- FAQ 4 -->
          <details class="faq-accordion">
            <summary class="faq-summary">
              <span>What are Mahadasha and Antardasha, and how do they affect my life timing?</span>
              <span class="faq-indicator" aria-hidden="true">+</span>
            </summary>
            <div class="faq-content">
              <p>
                In the classical <strong>Vimshottari Dasha system</strong>, human lifespan is symbolically mapped across
                a 120-year cycle ruled by nine celestial bodies (Ketu, Venus, Sun, Moon, Mars, Rahu, Jupiter, Saturn,
                and Mercury).
              </p>
              <p>
                Your birth chart reveals your lifelong promises and talents, but your active <strong>Mahadasha (major
                  planetary cycle)</strong> and <strong>Antardasha (sub-period)</strong> determine <em>when</em> those
                themes actually manifest. Understanding your active Dasha prevents fighting against unfavourable
                planetary seasons and empowers you to act decisively when auspicious cycles commence.
              </p>
            </div>
          </details>

          <!-- FAQ 5 -->
          <details class="faq-accordion">
            <summary class="faq-summary">
              <span>I was told I have Manglik Dosha or Kaal Sarp Dosha. Is this something to worry about?</span>
              <span class="faq-indicator" aria-hidden="true">+</span>
            </summary>
            <div class="faq-content">
              <p>
                No, you should never be alarmed by sensationalist labels. Classical Parashari texts define dozens of
                <strong>cancellation factors (Bhanga rules)</strong> that neutralize or greatly temper combinations like
                Manglik Dosha or Kaal Sarp.
              </p>
              <p>
                For example, Mars placed in its own sign (Aries or Scorpio), exalted in Capricorn, or aspected by a
                strong benefic Jupiter cancels major negative manifestations of Mangal Dosha. Priyanka Dey strictly
                adheres to ethical Vedic principles, explaining these alignments with scholarly objectivity and
                dispelling needless fear.
              </p>
            </div>
          </details>

          <!-- FAQ 6 -->
          <details class="faq-accordion">
            <summary class="faq-summary">
              <span>Can a Janam Kundali be prepared and analyzed for a newborn baby?</span>
              <span class="faq-indicator" aria-hidden="true">+</span>
            </summary>
            <div class="faq-content">
              <p>
                Yes. Casting a newborn's Janam Kundali is a venerable Vedic tradition. It helps identify the child's
                auspicious birth star (Nakshatra), recommended initial naming phonetics (Namkaran syllables), innate
                constitutional strengths (Ayurvedic Prakriti), and foundational personality traits.
              </p>
              <p>
                In adherence to classical Vedic ethics, predictions concerning adult career outcomes, marriage, or
                fatalistic questions are never entertained during early infancy.
              </p>
            </div>
          </details>

          <!-- FAQ 7 -->
          <details class="faq-accordion">
            <summary class="faq-summary">
              <span>Can I receive my Kundali consultation via online video call if I am outside Siliguri?</span>
              <span class="faq-indicator" aria-hidden="true">+</span>
            </summary>
            <div class="faq-content">
              <p>
                Yes. Online consultations are conducted regularly via Google Meet or WhatsApp Video Call for clients
                across Kolkata, West Bengal, India, and internationally.
              </p>
              <p>
                The astrological calculation depth, screen-shared chart review, and dedicated time are identical to
                visiting our Siliguri chamber. You are encouraged to take notes or request key point highlights after
                your session.
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
