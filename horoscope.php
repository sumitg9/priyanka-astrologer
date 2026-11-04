<?php
$pageTitle = "Horoscope &amp; Zodiac Sign Analysis in Siliguri | Priyanka Dey";
$pageDescription = "Explore the 12 Vedic Rashis and Zodiac signs, planetary transits (Gochara), and personalized horoscope consultations with Priyanka Dey in Siliguri and online.";
$pageKeywords = "Horoscope Siliguri, Zodiac sign reading, Vedic Rashi analysis, planetary transits, Gochara predictions, Priyanka Dey horoscope";
$canonicalUrl = "https://priyankadey.com/horoscope.php";
$ogImage = "https://priyankadey.com/assets/images/horoscope1.jpg";
$activeNav = "horoscope";
$extraHead = <<<'EXTRAHEAD'
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "Service",
        "@id": "https://priyankadey.com/horoscope.php#service",
        "name": "Horoscope & Zodiac Sign Consultation",
        "provider": {
          "@type": "Person",
          "name": "Priyanka Dey",
          "jobTitle": "Vedic Astrologer & Horoscope Consultant",
          "address": {
            "@type": "PostalAddress",
            "addressLocality": "Siliguri",
            "addressRegion": "West Bengal",
            "addressCountry": "IN"
          }
        },
        "description": "Comprehensive personalized horoscope readings, Vedic Rashi analysis, planetary transits (Gochara), and transit timing guidance for career, health, and relationships.",
        "areaServed": [
          { "@type": "City", "name": "Siliguri" },
          { "@type": "AdministrativeArea", "name": "West Bengal" },
          { "@type": "Country", "name": "India" }
        ],
        "hasOfferCatalog": {
          "@type": "OfferCatalog",
          "name": "Horoscope Consultation Formats",
          "itemListElement": [
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "name": "Personal Horoscope & Transit Reading in Siliguri"
              }
            },
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "name": "Online Live Horoscope Consultation (Google Meet / WhatsApp Video)"
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
            "name": "Horoscope & Zodiac",
            "item": "https://priyankadey.com/horoscope.php"
          }
        ]
      },
      {
        "@type": "FAQPage",
        "@id": "https://priyankadey.com/horoscope.php#faq",
        "mainEntity": [
          {
            "@type": "Question",
            "name": "What is the fundamental difference between my Sun sign and my Vedic Moon sign (Rashi)?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Your Sun sign is based on the Tropical zodiac, indicating the Sun's position by month, representing conscious ego and outer aspirations. In authentic Vedic astrology, your Moon sign (Chandra Rashi) is calculated using the Sidereal zodiac based on the Moon's exact constellation at birth. The Moon governs your emotional mind (Manas), intuition, subconscious temperament, and lived reality. Major planetary transits (Gochara) like Saturn and Jupiter are measured from the Moon sign."
            }
          },
          {
            "@type": "Question",
            "name": "Why do mass-media or newspaper daily horoscopes feel generic or inaccurate?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Generic daily horoscopes divide humanity into twelve broad categories based solely on Sun signs, ignoring your Ascendant (Lagna), planetary degrees, running Mahadasha, and unique 12-house chart matrix. A personalised horoscope consultation analyzes the exact mathematical degree of every celestial body relative to your unique birth chart."
            }
          },
          {
            "@type": "Question",
            "name": "What is Gochara (planetary transit), and how does it affect my personal horoscope?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Gochara refers to the continuous real-time movement of planets across the twelve zodiac signs. While your birth chart reflects your static cosmic blueprint, planetary transits act as celestial triggers activating specific houses (e.g. Jupiter transiting your 10th house of career or Saturn aspecting your 7th house of partnerships)."
            }
          },
          {
            "@type": "Question",
            "name": "What is Sade Sati, and is it always a difficult or fear-inducing phase?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Sade Sati is the 7.5-year transit of Saturn through the sign preceding, containing, and succeeding your natal Moon. Contrary to sensationalist myths, Sade Sati is not a curse; it is a profound period of maturation, karmic clearing, and long-term grounding. If Saturn is functionally benefic in your chart, it often bestows significant professional elevation and lasting legacy."
            }
          },
          {
            "@type": "Question",
            "name": "Can a personalized horoscope reading help plan auspicious timing for marriage, business, or investments?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes. By analyzing real-time planetary transits alongside your active Vimshottari Mahadasha, Priyanka identifies auspicious celestial windows (Muhurta and favorable Gochara periods) when planetary energies actively support major initiatives, minimizing preventable obstacles."
            }
          },
          {
            "@type": "Question",
            "name": "What exact birth details are needed for a personalized horoscope consultation?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "To cast and verify your personalized horoscope, you need to provide your Date of Birth (day, month, year), exact Time of Birth (hours and minutes), and Place of Birth (city or district to compute geographic latitude and longitude)."
            }
          },
          {
            "@type": "Question",
            "name": "Can I consult online via live video call if I am outside Siliguri?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes. Personalized horoscope consultations are conducted regularly via Google Meet or WhatsApp Video Call for clients across Kolkata, India, and internationally. Screen-shared chart walkthroughs and full discussion notes provide the exact same personal depth as an in-person chamber consultation in Siliguri."
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
        <span>Horoscope &amp; Zodiac</span>
      </nav>

      <div class="trust-pills">
        <span class="trust-pill"><span class="trust-pill-dot"></span> 12 Vedic Rashis &amp; Planetary Rulers</span>
        <span class="trust-pill"><span class="trust-pill-dot"></span> Saturn &amp; Jupiter Transit (Gochara)
          Tracking</span>
        <span class="trust-pill"><span class="trust-pill-dot"></span> Moon Sign &amp; Ascendant Precision</span>
        <span class="trust-pill"><span class="trust-pill-dot"></span> In Siliguri &amp; Online Worldwide</span>
      </div>

      <p class="eyebrow" style="margin-top:28px">Zodiac Horoscope &amp; Astrological Rashis</p>
      <h1>Personalised Horoscope &amp; <em>Zodiac Consultation.</em></h1>
      <p class="hero-desc">
        Move beyond generic newspaper columns. Discover how real-time planetary transits (Gochara), your Vedic Moon Sign
        (Rashi), and Ascendant (Lagna) shape your opportunities, relationship timing, and life seasons with precision
        and clarity.
      </p>

      <div class="hero-actions" style="margin-top:32px;display:flex;gap:14px;justify-content:center;flex-wrap:wrap">
        <a class="btn gold" href="contact.php?service=Horoscope#booking">Book Horoscope Reading &#8599;</a>
        <a class="btn" href="#zodiac-section">Explore 12 Zodiac Signs &#8595;</a>
      </div>
    </div>
  </section>

  <main id="main-content">
    <!-- SECTION 1: THE CELESTIAL ZODIAC BELT (SPLIT OVERVIEW) -->
    <section class="section" id="overview">
      <div class="container split">
        <div>
          <p class="eyebrow">The Celestial Belt</p>
          <h2 class="section-title">The Twelve Rashis of the <em>Sidereal Sky.</em></h2>
          <p class="section-copy">
            The celestial sphere encompasses a 360-degree belt divided into twelve distinct 30-degree segments, each
            governed by an elemental quality and planetary sovereign.
          </p>
          <p class="section-copy" style="margin-top:14px">
            While Western popular astrology focuses almost exclusively on Sun signs, authentic Vedic astrology places
            paramount emphasis on the <strong>Moon Sign (Chandra Rashi)</strong> and the <strong>Ascendant
              (Lagna)</strong>. The Moon represents the receptive subconscious mind, mental emotional health, and
            internal perception, while the Lagna dictates physical vitality and life trajectory.
          </p>

          <ul class="feature-list" style="margin-top:20px">
            <li><strong>Sidereal Realignment:</strong> Accounting for the earth's precession (Ayanamsha) to reflect real
              visible constellations.</li>
            <li><strong>Dynamic Planetary Transits (Gochara):</strong> Measuring how moving planets activate natal
              houses in real time.</li>
            <li><strong>Dasha-Transit Synthesis:</strong> Blending personal Mahadashas with cosmic weather for pinpoint
              forecasting.</li>
            <li><strong>Classical Sattvic Balancing:</strong> Timely guidance for major career shifts, relationship
              steps, and spiritual growth.</li>
          </ul>

          <div class="notice" style="margin-top:24px">
            <strong>Beyond Generalised Horoscopes:</strong> Mass-market horoscopes treat one-twelfth of the global
            population identically. A personalised horoscope consultation analyzes the specific planetary degrees of
            your unique natal coordinates.
          </div>

          <div style="margin-top:28px">
            <a class="btn gold" href="contact.php?service=Horoscope#booking">Request Personal Horoscope Analysis
              &#8599;</a>
          </div>
        </div>

        <div>
          <img class="portrait" src="assets/images/horoscope.jpg"
            alt="Vedic horoscope and zodiac sign astrological wheel consultation in Siliguri" width="896" height="1200"
            loading="lazy" decoding="async">
        </div>
      </div>
    </section>

    <!-- SECTION 2: INTERACTIVE 12 ZODIAC SIGNS SHOWCASE -->
    <section class="section soft zodiac-daily-section" id="zodiac-section">
      <div class="container center">
        <p class="eyebrow" style="color:var(--champagne);letter-spacing:0.22em;font-size:12px;margin-bottom:12px">
          EXPLORE THE 12 ZODIAC SIGNS</p>
        <h2 class="section-title" style="color:#ffffff;margin-bottom:14px">Discover Your Zodiac Sign &amp;
          <em>Personality Archetype</em></h2>
        <p class="section-copy" style="color:rgba(255,255,255,0.72);max-width:720px;margin:0 auto 46px">
          Tap any zodiac archetype below to explore its ruling planet, elemental harmony, Sanskrit Rashi identity, and
          core spiritual strengths.
        </p>

        <!-- 12 Signs Interactive Grid -->
        <div class="zodiac-daily-grid">

          <!-- Aries -->

          <button type="button" class="zodiac-daily-card" data-sign="aries" aria-haspopup="dialog"
            aria-label="Aries - Tap to reveal cosmic archetype and energies">

            <svg class="zodiac-glyph" viewBox="0 0 64 64" fill="currentColor" aria-hidden="true">

              <!-- Ram Head / Face Core -->

              <path
                d="M 32,24 C 34.5,24 36.5,25.5 36.5,28 C 36.5,31 34.5,34 34.5,37 C 34.5,41 36,44 35,47.5 C 34.2,50 32.8,51 32,51 C 31.2,51 29.8,50 29,47.5 C 28,44 29.5,41 29.5,37 C 29.5,34 27.5,31 27.5,28 C 27.5,25.5 29.5,24 32,24 Z" />

              <!-- Left Spiral Horn -->

              <path
                d="M 30.5,25.5 C 29,21 24.5,13 16.5,13 C 9.5,13 5,18.5 5,26 C 5,34 11,38 15.5,38 C 19,38 21.5,35 21.5,32 C 21.5,28.5 18.5,26.5 15.5,26.5 C 13,26.5 11,28 11,30.5 C 11,31.2 11.3,32 11.8,32.5 C 9.8,31 8.5,28.5 8.5,25.5 C 8.5,20 12,16.5 16.5,16.5 C 22.5,16.5 26.5,22.5 28.5,28 Z" />

              <!-- Right Spiral Horn -->

              <path
                d="M 33.5,25.5 C 35,21 39.5,13 47.5,13 C 54.5,13 59,18.5 59,26 C 59,34 53,38 48.5,38 C 45,38 42.5,35 42.5,32 C 42.5,28.5 45.5,26.5 48.5,26.5 C 51,26.5 53,28 53,30.5 C 53,31.2 52.7,32 52.2,32.5 C 54.2,31 55.5,28.5 55.5,25.5 C 55.5,20 52,16.5 47.5,16.5 C 41.5,16.5 37.5,22.5 35.5,28 Z" />

              <!-- Ears -->

              <path d="M 26,34 C 20,33 16,36 15,39 C 18,40 23,38 26.5,36 Z" />

              <path d="M 38,34 C 44,33 48,36 49,39 C 46,40 41,38 37.5,36 Z" />

            </svg>

            <span class="zodiac-name">Aries</span>

            <span class="zodiac-dates">Mar 21 - Apr 19</span>

          </button>



          <!-- Taurus -->

          <button type="button" class="zodiac-daily-card" data-sign="taurus" aria-haspopup="dialog"
            aria-label="Taurus - Tap to reveal cosmic archetype and energies">

            <svg class="zodiac-glyph" viewBox="0 0 64 64" fill="currentColor" aria-hidden="true">

              <!-- Bull Left Horn -->

              <path
                d="M 25,23 C 21,21 15,19 12,14 C 9.5,9.5 9,6 10,5 C 11.5,7.5 13.5,13 18,16 C 22,18.5 25,19 28,19.5 Z" />

              <!-- Bull Right Horn -->

              <path
                d="M 39,23 C 43,21 49,19 52,14 C 54.5,9.5 55,6 54,5 C 52.5,7.5 50.5,13 46,16 C 42,18.5 39,19 36,19.5 Z" />

              <!-- Head & Snout -->

              <path
                d="M 21,22 C 26,20 38,20 43,22 C 45,24 45.5,28 45,31 C 44,36 44.5,40 43,45 C 41.5,49 38,52 32,52 C 26,52 22.5,49 21,45 C 19.5,40 20,36 19,31 C 18.5,28 19,24 21,22 Z" />

              <!-- Left & Right Ears -->

              <path d="M 18,25 C 13,24 9,26 8,28 C 11,29.5 15,29 18,27.5 Z" />

              <path d="M 46,25 C 51,24 55,26 56,28 C 53,29.5 49,29 46,27.5 Z" />

            </svg>

            <span class="zodiac-name">Taurus</span>

            <span class="zodiac-dates">Apr 20 - May 20</span>

          </button>



          <!-- Gemini -->

          <button type="button" class="zodiac-daily-card" data-sign="gemini" aria-haspopup="dialog"
            aria-label="Gemini - Tap to reveal cosmic archetype and energies">

            <svg class="zodiac-glyph" viewBox="0 0 64 64" fill="currentColor" aria-hidden="true">

              <!-- Front Twin (Left) -->

              <path
                d="M 28,15 C 24,15 21,17 19,20 C 18,21.5 17.5,23.5 17,25 C 16.5,26 15,27 13.5,28 L 16.5,29.5 C 16.5,31 15.5,32 15,33 C 17,33.5 17.5,34.5 17,36 C 16,37.5 16.5,39 18,40 C 19,40.5 20,40 20.5,42 C 21,44 23,46 25,47 L 29,47 C 30,44 29,40 29,37 C 30,34 32,30 32,25 C 32,20 30.5,16 28,15 Z" />

              <!-- Rear Twin (Right) -->

              <path
                d="M 39,12 C 35,12 32,14 30,17 C 29,18.5 28.5,20.5 28,22 C 27.5,23 26,24 24.5,25 L 27.5,26.5 C 27.5,28 26.5,29 26,30 C 28,30.5 28.5,31.5 28,33 C 27,34.5 27.5,36 29,37 C 30,37.5 31,37 31.5,39 C 32,41 34,43 36,44 L 40,44 C 41,41 40,37 40,34 C 41,31 43,27 43,22 C 43,17 41.5,13 39,12 Z" />

              <!-- Rear Hair Ridges / Tufts (like image) -->

              <path d="M 40,14 C 43,16 46,19 46,23 C 44,23 42,22 41,19 Z" />

              <path d="M 43,24 C 45,26 46,29 46,32 C 44,32 42,31 42,29 Z" />

              <path d="M 42,33 C 44,35 45,38 44,41 C 43,41 41,40 41,38 Z" />

            </svg>

            <span class="zodiac-name">Gemini</span>

            <span class="zodiac-dates">May 21 - Jun 20</span>

          </button>



          <!-- Cancer -->

          <button type="button" class="zodiac-daily-card" data-sign="cancer" aria-haspopup="dialog"
            aria-label="Cancer - Tap to reveal cosmic archetype and energies">

            <svg class="zodiac-glyph" viewBox="0 0 64 64" fill="currentColor" aria-hidden="true">

              <!-- Crab Main Shell -->

              <ellipse cx="32" cy="35" rx="14" ry="11" />

              <!-- Front Left Claw -->

              <path
                d="M 23,29 C 19,23 15,18 18,12 C 21.5,6 28,8 26.5,14 C 25.5,17 23,19 25,23 C 26.5,26 25,28 23,29 Z" />

              <path d="M 19,12 C 16,13.5 14,17.5 16,21 C 17.5,22 19,20 18,18 C 17.5,16 18,14 19,12 Z" />

              <!-- Front Right Claw -->

              <path
                d="M 41,29 C 45,23 49,18 46,12 C 42.5,6 36,8 37.5,14 C 38.5,17 41,19 39,23 C 37.5,26 39,28 41,29 Z" />

              <path d="M 45,12 C 48,13.5 50,17.5 48,21 C 46.5,22 45,20 46,18 C 46.5,16 46,14 45,12 Z" />

              <!-- Left Legs -->

              <path d="M 19,33 C 14,31 9,33 7,36 C 9,36.5 14,35 18,36 Z" />

              <path d="M 19,38 C 14,38 9,41 7,45 C 9,45 13,42 18,41 Z" />

              <path d="M 21,43 C 17,45 12,49 11,53 C 13,52 17,48 20,46 Z" />

              <!-- Right Legs -->

              <path d="M 45,33 C 50,31 55,33 57,36 C 55,36.5 50,35 46,36 Z" />

              <path d="M 45,38 C 50,38 55,41 57,45 C 55,45 51,42 46,41 Z" />

              <path d="M 43,43 C 47,45 52,49 53,53 C 51,52 47,48 44,46 Z" />

              <!-- Eyes -->

              <circle cx="28" cy="22" r="1.5" />

              <circle cx="36" cy="22" r="1.5" />

            </svg>

            <span class="zodiac-name">Cancer</span>

            <span class="zodiac-dates">Jun 21 - Jul 22</span>

          </button>



          <!-- Leo -->

          <button type="button" class="zodiac-daily-card" data-sign="leo" aria-haspopup="dialog"
            aria-label="Leo - Tap to reveal cosmic archetype and energies">

            <svg class="zodiac-glyph" viewBox="0 0 64 64" fill="currentColor" aria-hidden="true">

              <!-- Lion Face / Snout / Jaw -->

              <path
                d="M 23,26 C 21,27 17,30 14,32 C 12,33.5 10,34 8,34 C 8.5,36 10,38 12,38.5 C 14,39 17,38.5 18,37 C 19,36 21,36 22,37.5 C 20,39 17,40 15,41 C 15.5,42.5 17,43.5 19,43.5 C 22,43.5 24,41.5 26,40 C 27,39 28,40 28,42 C 27,45 25,47 22,49 C 23,50.5 25,51 27,50 C 30,48.5 31,45 31,42 C 31,39 30,36 29,33 C 28,30 26,27 23,26 Z" />

              <!-- Flame Mane Top Crest -->

              <path d="M 23,25 C 22,21 24,16 28,13 C 32,10 37,11 40,14 C 37,15 34,17 33,20 C 32,23 29,24 27,24 Z" />

              <!-- Flame Mane Mid Wave -->

              <path d="M 36,16 C 40,17 45,20 47,25 C 49,30 47,34 44,36 C 44,33 43,30 40,28 C 37,25 37,21 36,16 Z" />

              <!-- Flame Mane Lower Wave -->

              <path d="M 46,27 C 50,31 51,37 49,42 C 47,46 43,48 39,48 C 41,45 42,41 41,37 C 40,33 43,30 46,27 Z" />

              <!-- Flame Mane Tail Swirl -->

              <path d="M 45,40 C 46,44 44,49 40,52 C 36,54 31,53 28,50 C 31,49 34,47 35,44 C 37,41 41,40 45,40 Z" />

              <path d="M 32,45 C 32,49 30,52 26,54 C 28,52 29,49 29,46 Z" />

            </svg>

            <span class="zodiac-name">Leo</span>

            <span class="zodiac-dates">Jul 23 - Aug 22</span>

          </button>



          <!-- Virgo -->

          <button type="button" class="zodiac-daily-card" data-sign="virgo" aria-haspopup="dialog"
            aria-label="Virgo - Tap to reveal cosmic archetype and energies">

            <svg class="zodiac-glyph" viewBox="0 0 64 64" fill="currentColor" aria-hidden="true">

              <!-- Maiden Profile Face -->

              <path
                d="M 30,22 C 28,22 26,23 24,25 C 23,26.5 23,28 21.5,29 C 20,30 19,30.5 18,31 L 20.5,32.5 C 20,33.5 19,34.5 19.5,35 C 21,35.5 21.5,36 21,37 C 20.5,38 21,39 22,39.5 C 23,40 24,39.5 24.5,41 C 25,43 26.5,44.5 28,45 C 27,46 25.5,46.5 24,47 L 32,47 C 33,45 32.5,42 32.5,40 C 33.5,38 35,34 35,30 C 35,25 33,22 30,22 Z" />

              <!-- Hair Crown -->

              <path d="M 29,14 C 23,14 18,19 19,25 C 20,23 22,21 25,20 C 29,19 33,21 36,24 C 37,21 34,16 29,14 Z" />

              <!-- Hair Cascading Waves -->

              <path d="M 33,15 C 39,17 45,22 46,29 C 47,35 45,40 41,44 C 43,39 43,33 41,28 C 39,23 36,18 33,15 Z" />

              <path d="M 43,32 C 46,37 47,43 44,48 C 41,52 36,54 31,55 C 35,53 39,50 40,46 C 42,41 42,36 43,32 Z" />

              <path d="M 40,44 C 40,48 37,52 32,54 C 28,56 23,55 19,53 C 24,53 28,51 31,48 C 34,45 37,44 40,44 Z" />

            </svg>

            <span class="zodiac-name">Virgo</span>

            <span class="zodiac-dates">Aug 23 - Sep 22</span>

          </button>



          <!-- Libra -->

          <button type="button" class="zodiac-daily-card" data-sign="libra" aria-haspopup="dialog"
            aria-label="Libra - Tap to reveal cosmic archetype and energies">

            <svg class="zodiac-glyph" viewBox="0 0 64 64" fill="currentColor" aria-hidden="true">

              <!-- Central Fulcrum Pillar -->

              <path
                d="M 32,15 L 34,19 L 32.8,19 L 32.8,32 L 34,33 L 34,35 L 30,35 L 30,33 L 31.2,32 L 31.2,19 L 30,19 Z" />

              <circle cx="32" cy="14" r="2.5" />

              <!-- Balance Beam -->

              <path
                d="M 12,23 L 52,23 C 53,23 53.5,23.5 53.5,24 C 53.5,24.5 53,25 52,25 L 12,25 C 11,25 10.5,24.5 10.5,24 C 10.5,23.5 11,23 12,23 Z" />

              <circle cx="16" cy="24" r="1.8" />

              <circle cx="48" cy="24" r="1.8" />

              <circle cx="32" cy="24" r="2.8" />

              <!-- Left Pan Suspension Strings -->

              <line x1="16" y1="25" x2="8.5" y2="39" stroke="currentColor" stroke-width="1.4" />

              <line x1="16" y1="25" x2="23.5" y2="39" stroke="currentColor" stroke-width="1.4" />

              <!-- Left Pan (Curved bowl) -->

              <path d="M 7,39 C 9,44 23,44 25,39 Z" />

              <!-- Right Pan Suspension Strings -->

              <line x1="48" y1="25" x2="40.5" y2="39" stroke="currentColor" stroke-width="1.4" />

              <line x1="48" y1="25" x2="55.5" y2="39" stroke="currentColor" stroke-width="1.4" />

              <!-- Right Pan (Curved bowl) -->

              <path d="M 39,39 C 41,44 55,44 57,39 Z" />

            </svg>

            <span class="zodiac-name">Libra</span>

            <span class="zodiac-dates">Sep 23 - Oct 22</span>

          </button>



          <!-- Scorpio -->

          <button type="button" class="zodiac-daily-card" data-sign="scorpio" aria-haspopup="dialog"
            aria-label="Scorpio - Tap to reveal cosmic archetype and energies">

            <svg class="zodiac-glyph" viewBox="0 0 64 64" fill="currentColor" aria-hidden="true">

              <!-- Body (Segmented) -->

              <ellipse cx="32" cy="36" rx="6.5" ry="9" />

              <!-- Left Claw -->

              <path d="M 28,32 C 24,28 20,27 16,29 C 14,30 13,33 14,35 C 15,36 17,35 18,33 C 19,31 22,30 25,33 Z" />

              <path d="M 15,28 C 12,24 13,19 16,16 C 18,14 20,15 20,17 C 20,19 18,21 17,23 C 18,25 21,27 23,28 Z" />

              <path d="M 16,16 C 14,19 14,23 16,26 C 15,26 13,24 13,21 C 13,18 14.5,16.5 16,16 Z" />

              <!-- Right Claw -->

              <path d="M 36,32 C 40,28 44,27 48,29 C 50,30 51,33 50,35 C 49,36 47,35 46,33 C 45,31 42,30 39,33 Z" />

              <path d="M 49,28 C 52,24 51,19 48,16 C 46,14 44,15 44,17 C 44,19 46,21 47,23 C 46,25 43,27 41,28 Z" />

              <path d="M 48,16 C 50,19 50,23 48,26 C 49,26 51,24 51,21 C 51,18 49.5,16.5 48,16 Z" />

              <!-- Walking Legs Left -->

              <path d="M 27,35 C 22,34 18,36 15,39 C 17,39 21,37 26,38 Z" />

              <path d="M 27,39 C 22,39 17,42 15,46 C 17,46 21,42 26,41 Z" />

              <path d="M 28,43 C 24,44 19,48 18,52 C 20,51 23,47 27,45 Z" />

              <!-- Walking Legs Right -->

              <path d="M 37,35 C 42,34 46,36 49,39 C 47,39 43,37 38,38 Z" />

              <path d="M 37,39 C 42,39 47,42 49,46 C 47,46 43,42 38,41 Z" />

              <path d="M 36,43 C 40,44 45,48 46,52 C 44,51 41,47 37,45 Z" />

              <!-- Arching Tail Segments & Stinger -->

              <path
                d="M 32,45 C 31,48 32,52 35,54 C 38,56 42,55 45,51 C 48,46 48,40 45,34 C 43,30 40,26 39,21 C 38,16 41,12 45,10 C 47,9 49,10 49,12 C 49,15 45,18 44,22 C 43,26 46,31 49,37 C 52,43 51,51 46,56 C 41,60 34,60 29,56 C 26,53 25,48 27,44 Z" />

              <!-- Stinger Barb -->

              <path d="M 45,10 C 42,8 39,8 38,10 C 37,11 39,12 41,12 C 43,12 44.5,11 45,10 Z" />

            </svg>

            <span class="zodiac-name">Scorpio</span>

            <span class="zodiac-dates">Oct 23 - Nov 21</span>

          </button>



          <!-- Sagittarius -->

          <button type="button" class="zodiac-daily-card" data-sign="sagittarius" aria-haspopup="dialog"
            aria-label="Sagittarius - Tap to reveal cosmic archetype and energies">

            <svg class="zodiac-glyph" viewBox="0 0 64 64" fill="currentColor" aria-hidden="true">

              <!-- Bow Wood (Recurve) -->

              <path
                d="M 34,13 C 32,18 29,24 35,32 C 29,40 32,46 34,51 C 32.5,50 30,44 26,38 C 23,34 23,30 26,26 C 30,20 32.5,14 34,13 Z" />

              <!-- Bowstring -->

              <line x1="34" y1="13" x2="15" y2="32" stroke="currentColor" stroke-width="1.6" />

              <line x1="15" y1="32" x2="34" y2="51" stroke="currentColor" stroke-width="1.6" />

              <!-- Arrow Shaft -->

              <line x1="11" y1="32" x2="52" y2="32" stroke="currentColor" stroke-width="2.5" />

              <!-- Arrow Head -->

              <polygon points="56,32 46,27 48,32 46,37" />

              <!-- Arrow Fletching / Feathers at back -->

              <polygon points="11,32 17,27 19,27 15,32" />

              <polygon points="11,32 17,37 19,37 15,32" />

            </svg>

            <span class="zodiac-name">Sagittarius</span>

            <span class="zodiac-dates">Nov 22 - Dec 21</span>

          </button>



          <!-- Capricorn -->

          <button type="button" class="zodiac-daily-card" data-sign="capricorn" aria-haspopup="dialog"
            aria-label="Capricorn - Tap to reveal cosmic archetype and energies">

            <svg class="zodiac-glyph" viewBox="0 0 64 64" fill="currentColor" aria-hidden="true">

              <!-- Goat Head Core -->

              <path
                d="M 32,26 C 35,26 38,27.5 39,30 C 40,32 39,35 38,38 C 36.5,42 35,46 33.5,50 L 30.5,50 C 29,46 27.5,42 26,38 C 25,35 24,32 25,30 C 26,27.5 29,26 32,26 Z" />

              <!-- Left Horn (sweeping back/left, ribbed) -->

              <path
                d="M 29,27 C 27,21 23,15 15,12 C 18,15 20,20 21,24 L 20,22 C 17,18 13,15 9,14 C 13,18 16,23 17,28 L 25,29 Z" />

              <!-- Right Horn (sweeping back/right, ribbed) -->

              <path
                d="M 35,27 C 37,21 41,15 49,12 C 46,15 44,20 43,24 L 44,22 C 47,18 51,15 55,14 C 51,18 48,23 47,28 L 39,29 Z" />

              <!-- Ears -->

              <path d="M 24,32 C 18,32 13,34 11,37 C 14,37.5 19,36 24,34 Z" />

              <path d="M 40,32 C 46,32 51,34 53,37 C 50,37.5 45,36 40,34 Z" />

              <!-- Goat Beard -->

              <path d="M 30.5,50 L 33.5,50 C 33.5,53 34,56 32,59 C 30,56 30.5,53 30.5,50 Z" />

            </svg>

            <span class="zodiac-name">Capricorn</span>

            <span class="zodiac-dates">Dec 22 - Jan 19</span>

          </button>



          <!-- Aquarius -->

          <button type="button" class="zodiac-daily-card" data-sign="aquarius" aria-haspopup="dialog"
            aria-label="Aquarius - Tap to reveal cosmic archetype and energies">

            <svg class="zodiac-glyph" viewBox="0 0 64 64" fill="currentColor" aria-hidden="true">

              <!-- Tilted Water Urn / Amphora (tilted to the left) -->

              <path
                d="M 36,18 L 41,20 C 44,22 47,25 49,29 C 51,33 51,37 49,40 L 46,42 C 43,44 40,43 37,40 L 33,36 C 30,33 29,30 30,27 C 31,24 33,21 36,18 Z" />

              <!-- Urn Base and Rim -->

              <path d="M 47,40 L 51,43 C 52,44 51,46 49,46 L 44,43 Z" />

              <path d="M 34,17 C 36,15 39,18 37,20 L 32,23 C 30,25 27,22 29,20 Z" />

              <!-- Urn Curved Handle (right side) -->

              <path d="M 43,23 C 48,24 53,28 51,33 C 50,35 48,35 47,33 C 48,30 46,27 42,26 Z" />

              <!-- Cascading Water Streams Pouring Down -->

              <path d="M 31,23 C 28,26 23,30 20,36 C 17,42 16,48 14,54 C 16,51 18,46 21,41 C 24,36 29,31 33,27 Z" />

              <path d="M 28,26 C 25,29 21,34 19,40 C 17,46 16,51 13,56 C 14.5,52 16,47 19,42 C 22,37 26,32 30,29 Z" />

              <path d="M 25,31 C 22,35 19,40 18,46 C 17,52 15,56 12,58 C 13,54 15,49 17,44 C 19,39 23,35 27,33 Z" />

            </svg>

            <span class="zodiac-name">Aquarius</span>

            <span class="zodiac-dates">Jan 20 - Feb 18</span>

          </button>



          <!-- Pisces -->

          <button type="button" class="zodiac-daily-card" data-sign="pisces" aria-haspopup="dialog"
            aria-label="Pisces - Tap to reveal cosmic archetype and energies">

            <svg class="zodiac-glyph" viewBox="0 0 64 64" fill="currentColor" aria-hidden="true">

              <!-- Left Fish (swimming up and curling right) -->

              <path
                d="M 18,47 C 14,43 13,36 14,30 C 15,24 19,19 25,16 C 24,19 23,23 24,27 C 25,32 29,36 32,38 C 28,40 24,44 21,49 L 18,53 C 18,50 16,49 14,50 C 15,47 16,45 18,47 Z" />

              <!-- Left Fish Fins -->

              <path d="M 23,17 C 24,14 26,13 28,14 C 27,16 26,17 24,17 Z" />

              <path d="M 14,31 C 11,31 9,33 9,35 C 11,35 13,34 14,33 Z" />

              <!-- Right Fish (swimming down and curling left) -->

              <path
                d="M 46,17 C 50,21 51,28 50,34 C 49,40 45,45 39,48 C 40,45 41,41 40,37 C 39,32 35,28 32,26 C 36,24 40,20 43,15 L 46,11 C 46,14 48,15 50,14 C 49,17 48,19 46,17 Z" />

              <!-- Right Fish Fins -->

              <path d="M 41,47 C 40,50 38,51 36,50 C 37,48 38,47 40,47 Z" />

              <path d="M 50,33 C 53,33 55,31 55,29 C 53,29 51,30 50,31 Z" />

            </svg>

            <span class="zodiac-name">Pisces</span>

            <span class="zodiac-dates">Feb 19 - Mar 20</span>

          </button>

        </div>

      </div>



      <!-- Interactive Zodiac Sign Modal Dialog -->

      <div id="zodiacDialog" class="zodiac-dialog" role="dialog" aria-modal="true" aria-labelledby="dialogSignTitle">

        <div class="zodiac-dialog-backdrop" data-dialog-close></div>

        <div class="zodiac-dialog-content" role="document">

          <button type="button" class="zodiac-dialog-close" data-dialog-close aria-label="Close dialogue box">

            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"
              stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">

              <line x1="18" y1="6" x2="6" y2="18"></line>

              <line x1="6" y1="6" x2="18" y2="18"></line>

            </svg>

          </button>



          <div class="zodiac-dialog-header">

            <div class="zodiac-dialog-glyph-box" id="dialogGlyph">

              <!-- Dynamically populated SVG Glyph -->

            </div>

            <div class="zodiac-dialog-meta">

              <span class="zodiac-dialog-dates" id="dialogDates"></span>

              <h3 class="zodiac-dialog-title" id="dialogSignTitle">

                <span id="dialogSignName"></span>

                <span class="sanskrit" id="dialogSanskrit"></span>

              </h3>

              <div class="zodiac-dialog-badges" id="dialogBadges">

                <!-- Dynamically populated badges -->

              </div>

            </div>

          </div>



          <div class="zodiac-dialog-body">

            <div class="zodiac-dialog-section">

              <h4 class="zodiac-dialog-subheading">✦ Cosmic Blueprint &amp; Personality</h4>

              <p class="zodiac-dialog-desc" id="dialogDescription"></p>

            </div>



            <div class="zodiac-dialog-section">

              <h4 class="zodiac-dialog-subheading">✦ Core Archetypal Strengths</h4>

              <div class="zodiac-dialog-traits" id="dialogTraits">

                <!-- Dynamically populated trait badges -->

              </div>

            </div>



            <div class="zodiac-dialog-section">

              <h4 class="zodiac-dialog-subheading">✦ Spiritual Growth &amp; Life Lesson</h4>

              <p class="zodiac-dialog-guidance" id="dialogGuidance"></p>

            </div>

          </div>



          <div class="zodiac-dialog-footer">

            <a href="horoscope.php" id="dialogHoroscopeLink" class="btn">Explore In-Depth Horoscope ↗</a>

            <a href="contact.php?service=Horoscope#booking" class="btn gold">Book Personalised Reading ↗</a>

          </div>

        </div>

      </div>

      <!-- /zodiacDialog -->
    </section>

    <!-- SECTION 3: THE FOUR ELEMENTAL TRINES -->
    <section class="section" id="elements">
      <div class="container center">
        <p class="eyebrow">The Four Elemental Trines</p>
        <h2 class="section-title">The Four Elements of <em>Zodiac Chemistry.</em></h2>
        <p class="section-copy">How Fire, Earth, Air, and Water shape behavioral temperament and relationship
          compatibility.</p>

        <div class="focus-grid" style="margin-top:45px">
          <!-- Fire Trine -->
          <article class="focus-card">
            <span class="card-icon-badge">&#128293;</span>
            <span class="card-number">Agni Tattva</span>
            <h3>Fire Signs: Aries, Leo, Sagittarius</h3>
            <p>
              Mesha, Simha, and Dhanu represent raw vitality, visionary courage, inspirational enthusiasm, and
              leadership. They initiate new cycles and thrive on creative autonomy and ambitious goals.
            </p>
            <div style="margin-top:16px">
              <a class="text-link" href="contact.php?service=Horoscope#booking">EXPLORE FIRE SIGNS &#8599;</a>
            </div>
          </article>

          <!-- Earth Trine -->
          <article class="focus-card">
            <span class="card-icon-badge">&#127793;</span>
            <span class="card-number">Prithvi Tattva</span>
            <h3>Earth Signs: Taurus, Virgo, Capricorn</h3>
            <p>
              Vrishabha, Kanya, and Makara represent grounding stability, pragmatic discipline, financial stewardship,
              and structural mastery. They bring ideas into tangible reality with enduring patience.
            </p>
            <div style="margin-top:16px">
              <a class="text-link" href="contact.php?service=Horoscope#booking">EXPLORE EARTH SIGNS &#8599;</a>
            </div>
          </article>

          <!-- Air Trine -->
          <article class="focus-card">
            <span class="card-icon-badge">&#128168;</span>
            <span class="card-number">Vayu Tattva</span>
            <h3>Air Signs: Gemini, Libra, Aquarius</h3>
            <p>
              Mithuna, Tula, and Kumbha represent intellectual curiosity, communicative finesse, diplomatic relationship
              dynamics, and egalitarian visionary innovation.
            </p>
            <div style="margin-top:16px">
              <a class="text-link" href="contact.php?service=Horoscope#booking">EXPLORE AIR SIGNS &#8599;</a>
            </div>
          </article>

          <!-- Water Trine -->
          <article class="focus-card">
            <span class="card-icon-badge">&#128167;</span>
            <span class="card-number">Jal Tattva</span>
            <h3>Water Signs: Cancer, Scorpio, Pisces</h3>
            <p>
              Karka, Vrishchika, and Meena represent profound emotional intelligence, psychic empathy, intuitive
              healing, and spiritual devotion. They perceive the invisible depths of human connections.
            </p>
            <div style="margin-top:16px">
              <a class="text-link" href="contact.php?service=Horoscope#booking">EXPLORE WATER SIGNS &#8599;</a>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- SECTION 4: PLANETARY TRANSITS (GOCHARA) ARCHITECTURE -->
    <section class="section soft" id="transits">
      <div class="container split">
        <div>
          <img class="portrait" src="assets/images/horoscope1.jpg"
            alt="Planetary transits Gochara wheel showing Saturn and Jupiter cycles" width="1200" height="896"
            loading="lazy" decoding="async">
        </div>

        <div>
          <p class="eyebrow">Real-Time Celestial Weather</p>
          <h2 class="section-title">Navigating Life Seasons with <em>Planetary Transits (Gochara).</em></h2>
          <p class="section-copy">
            A birth chart maps your lifelong potential, but planetary transits (Gochara) dictate the exact seasons when
            specific opportunities, challenges, and shifts unfold:
          </p>

          <div style="margin-top:24px;display:flex;flex-direction:column;gap:14px">
            <div style="display:flex;gap:14px;align-items:flex-start">
              <span style="color:var(--champagne);font-size:18px;line-height:1">&#10022;</span>
              <div>
                <p style="font-size:15px;color:#ffffff;font-weight:600;margin:0 0 4px">Saturn Transit &amp; Sade Sati
                  (2.5 Years per Sign)</p>
                <p style="font-size:14px;color:rgba(255,255,255,0.75);line-height:1.7;margin:0">
                  The great cosmic tutor: demands diligence, dismantles illusions, and builds enduring foundations. A
                  personalized review dispels fear and guides constructive action.
                </p>
              </div>
            </div>

            <div style="display:flex;gap:14px;align-items:flex-start">
              <span style="color:var(--champagne);font-size:18px;line-height:1">&#10022;</span>
              <div>
                <p style="font-size:15px;color:#ffffff;font-weight:600;margin:0 0 4px">Jupiter Transit / Guru Gochara (1
                  Year per Sign)</p>
                <p style="font-size:14px;color:rgba(255,255,255,0.75);line-height:1.7;margin:0">
                  The celestial grace: confers expansion, professional recognition, favorable marital windows, and
                  spiritual awakening as it aspects key natal houses.
                </p>
              </div>
            </div>

            <div style="display:flex;gap:14px;align-items:flex-start">
              <span style="color:var(--champagne);font-size:18px;line-height:1">&#10022;</span>
              <div>
                <p style="font-size:15px;color:#ffffff;font-weight:600;margin:0 0 4px">Rahu &amp; Ketu Nodal Transits
                  (18 Months per Axis)</p>
                <p style="font-size:14px;color:rgba(255,255,255,0.75);line-height:1.7;margin:0">
                  Karmic tipping points: drive sudden pivots, foreign relocations, radical identity upgrades, and
                  releasing obsolete emotional ties.
                </p>
              </div>
            </div>
          </div>

          <div style="margin-top:30px">
            <a class="btn gold" href="contact.php?service=Horoscope#booking">Check Your Active Transits &#8599;</a>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 5: 4-STEP CONSULTATION PROCESS -->
    <section class="section" id="process">
      <div class="container center">
        <p class="eyebrow">Consultation Methodology</p>
        <h2 class="section-title">The Four Steps of a <em>Personal Horoscope Session.</em></h2>
        <p class="section-copy">How Priyanka translates celestial movements into grounded personal strategy.</p>

        <div class="process-steps-grid" style="margin-top:45px">
          <!-- Step 1 -->
          <div class="process-step-item">
            <span class="step-num">01</span>
            <h3>Natal &amp; Moon Sign Verification</h3>
            <p>
              We confirm your exact birth time coordinates, verify your rising Lagna degree, and calculate your
              authentic Sidereal Moon sign (Chandra Rashi) and Janma Nakshatra.
            </p>
          </div>

          <!-- Step 2 -->
          <div class="process-step-item">
            <span class="step-num">02</span>
            <h3>Transit (Gochara) Mapping</h3>
            <p>
              We compute current real-time transits of major planets (Saturn, Jupiter, Rahu, Ketu) across your 12 natal
              houses to assess active planetary pressure and opportunities.
            </p>
          </div>

          <!-- Step 3 -->
          <div class="process-step-item">
            <span class="step-num">03</span>
            <h3>Dasha-Transit Synthesis</h3>
            <p>
              We cross-reference current transits against your active Vimshottari Mahadasha/Antardasha, ensuring
              external astrological seasons align with your personal karma.
            </p>
          </div>

          <!-- Step 4 -->
          <div class="process-step-item">
            <span class="step-num">04</span>
            <h3>Actionable Timing &amp; Sattvic Remedies</h3>
            <p>
              A 60-minute in-depth consultation providing strategic timing for career moves, relationships, and
              investments, paired with classical mindfulness and Vedic mantras.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 6: CLEVER MID-PAGE CTA BANNER -->
    <section class="section">
      <div class="container">
        <div class="service-cta-banner">
          <div class="cta-banner-content">
            <p class="eyebrow" style="color:var(--champagne)">Clear Celestial Perspective</p>
            <h2>Ready for a <em>Personalised Horoscope Reading?</em></h2>
            <p>
              Discover your upcoming transit windows, evaluate career transitions, and gain deep personal insight.
              Available at our Siliguri chamber or worldwide through private video consultations.
            </p>
            <div style="margin-top:28px;display:flex;gap:14px;justify-content:center;flex-wrap:wrap">
              <a class="btn gold" href="contact.php?service=Horoscope#booking">Book Horoscope Reading &#8599;</a>
              <a class="btn"
                href="https://wa.me/919876543210?text=Hello%20Priyanka%20Dey,%20I%20would%20like%20to%20enquire%20about%20a%20Personalised%20Horoscope%20consultation."
                target="_blank" rel="noopener noreferrer">Chat on WhatsApp &#8599;</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 7: FREQUENTLY ASKED QUESTIONS (ACCORDION AT BOTTOM BEFORE FOOTER) -->
    <section class="section soft" id="faq">
      <div class="container center">
        <p class="eyebrow">Frequently Asked Questions</p>
        <h2 class="section-title">Everything You Need to Know About <em>Horoscope Guidance.</em></h2>
        <p class="section-copy">Clear, upfront answers about Moon signs, transit predictions, and personal readings.</p>

        <div class="faq-wrap">
          <!-- FAQ 1 -->
          <details class="faq-accordion" open>
            <summary class="faq-summary">
              <span>What is the fundamental difference between my Sun sign and my Vedic Moon sign (Rashi)?</span>
              <span class="faq-indicator" aria-hidden="true">+</span>
            </summary>
            <div class="faq-content">
              <p>
                The fundamental difference lies in the astronomical coordinate system and astrological focus:
              </p>
              <ul style="margin: 10px 0 14px 20px; line-height: 1.8; text-align: left;">
                <li><strong>Sun Sign (Western Tropical):</strong> Based on the Sun's position relative to the Earth's
                  seasonal equinoxes. It changes once every 30 days and primarily reflects outer persona, conscious
                  ambition, and ego expression.</li>
                <li><strong>Moon Sign (Vedic Sidereal / Chandra Rashi):</strong> Based on the Moon's visible alignment
                  with actual star constellations (Nakshatras). The Moon moves rapidly, changing signs every 2.25 days.
                  It represents your subconscious psychology, emotional resilience, instinctive reactions, and lived
                  daily experience.</li>
              </ul>
              <p>
                In Vedic Jyotish, major planetary transits (such as Saturn's Sade Sati and Jupiter's Gochara) are always
                calculated from the Moon sign to assess real-life developments.
              </p>
            </div>
          </details>

          <!-- FAQ 2 -->
          <details class="faq-accordion">
            <summary class="faq-summary">
              <span>Why do mass-media or newspaper daily horoscopes feel generic or inaccurate?</span>
              <span class="faq-indicator" aria-hidden="true">+</span>
            </summary>
            <div class="faq-content">
              <p>
                Commercial daily horoscopes artificially group the entire human population into just twelve groups based
                only on Sun sign dates. They completely ignore:
              </p>
              <ul style="margin: 10px 0 14px 20px; line-height: 1.8; text-align: left;">
                <li>Your individual <strong>Lagna (Ascendant)</strong> rising at your exact minute of birth.</li>
                <li>The individual house placements and planetary strengths (Shadbala) of the remaining eight celestial
                  bodies.</li>
                <li>Your active <strong>Vimshottari Mahadasha</strong> cycle, which determines your personal karmic
                  timeline.</li>
              </ul>
              <p>
                A personalized horoscope consultation treats your birth chart as a unique mathematical blueprint rather
                than a generic newspaper column.
              </p>
            </div>
          </details>

          <!-- FAQ 3 -->
          <details class="faq-accordion">
            <summary class="faq-summary">
              <span>What is Gochara (planetary transit), and how does it affect my personal horoscope?</span>
              <span class="faq-indicator" aria-hidden="true">+</span>
            </summary>
            <div class="faq-content">
              <p>
                <strong>Gochara</strong> refers to the actual, real-time astronomical movement of planets through the
                zodiac constellations. While your birth chart is a permanent snapshot of the sky at your moment of
                birth, the planets continue moving through the heavens every day.
              </p>
              <p>
                When a transiting planet passes through or aspects a sensitive house in your birth chart (such as your
                10th house of career, 7th of partnerships, or 4th of home), it acts as an environmental catalyst,
                triggering events and emotional themes promised in your natal blueprint.
              </p>
            </div>
          </details>

          <!-- FAQ 4 -->
          <details class="faq-accordion">
            <summary class="faq-summary">
              <span>What is Sade Sati, and is it always a difficult or fear-inducing phase?</span>
              <span class="faq-indicator" aria-hidden="true">+</span>
            </summary>
            <div class="faq-content">
              <p>
                <strong>Sade Sati</strong> is the 7.5-year period during which Saturn (Shani) transits through the 12th
                house from your Moon sign, your Moon sign itself, and the 2nd house following your Moon sign.
              </p>
              <p>
                Contrary to sensationalist myths, Sade Sati is not an inescapable curse. It is an intense period of
                self-discipline, reality checking, and personal maturation. For people with a strong, well-placed
                Saturn, Sade Sati often brings massive career promotions, lasting property acquisition, and public
                recognition. Priyanka provides clear, fear-free analysis to help you navigate this period
                constructively.
              </p>
            </div>
          </details>

          <!-- FAQ 5 -->
          <details class="faq-accordion">
            <summary class="faq-summary">
              <span>Can a personalized horoscope reading help plan auspicious timing for marriage, business, or
                investments?</span>
              <span class="faq-indicator" aria-hidden="true">+</span>
            </summary>
            <div class="faq-content">
              <p>
                Yes, absolutely. By combining your active Vimshottari Mahadasha with the current transits of Jupiter
                (Guru) and Saturn (Shani), Priyanka can identify optimal windows of opportunity:
              </p>
              <ul style="margin: 10px 0 14px 20px; line-height: 1.8; text-align: left;">
                <li>Favorable transit phases for job changes, business incorporation, or salary negotiations.</li>
                <li>Auspicious cycles for relationship commitments, engagement, and wedding dates (Vivaha Muhurta).</li>
                <li>Periods requiring caution, conservation, and spiritual reflection to avoid premature risks.</li>
              </ul>
            </div>
          </details>

          <!-- FAQ 6 -->
          <details class="faq-accordion">
            <summary class="faq-summary">
              <span>What exact birth details are needed for a personalized horoscope consultation?</span>
              <span class="faq-indicator" aria-hidden="true">+</span>
            </summary>
            <div class="faq-content">
              <p>
                To calculate an accurate Vedic horoscope, three precise birth coordinates are required:
              </p>
              <ul style="margin: 10px 0 14px 20px; line-height: 1.8; text-align: left;">
                <li><strong>Date of Birth:</strong> Day, month, and year.</li>
                <li><strong>Exact Time of Birth:</strong> Hours and minutes (as recorded in hospital birth documents).
                </li>
                <li><strong>Place of Birth:</strong> City, town, or district to determine exact geographic latitude and
                  longitude.</li>
              </ul>
            </div>
          </details>

          <!-- FAQ 7 -->
          <details class="faq-accordion">
            <summary class="faq-summary">
              <span>Can I consult online via live video call if I am outside Siliguri?</span>
              <span class="faq-indicator" aria-hidden="true">+</span>
            </summary>
            <div class="faq-content">
              <p>
                Yes. Online horoscope consultations are conducted via Google Meet or WhatsApp Video Call for clients
                across Kolkata, India, and globally.
              </p>
              <p>
                The consultation includes a live screen-shared walkthrough of your birth chart, transit overlays, and
                personalized question-and-answer discussions, providing the exact same depth and intimacy as an
                in-person session at our Siliguri chamber.
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
