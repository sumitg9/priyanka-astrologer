<?php
$pageTitle = "Home | Priyanka Dey · Astrology, Tarot, Vastu & Numerology";
$pageDescription = "Premium astrology, tarot, Vastu, Kundali and numerology consultations with Priyanka Dey in Siliguri, West Bengal.";
$bodyClass = "home-page";
$activeNav = "home";
$isHomePage = true;

include __DIR__ . '/header.php';
?>

<main>
        <!-- HERO SECTION WITH SLOW FLOATING GALAXY CANVAS & 5-IMAGE SYNCED ROTATION -->
        <section class="hero stars" id="heroSection" aria-label="Hero Spotlight">
            <!-- Galaxy floating stars canvas -->
            <canvas id="galaxyCanvas" class="hero-galaxy-canvas" aria-hidden="true"></canvas>
            <div class="hero-galaxy-overlay" aria-hidden="true"></div>

            <div class="hero-inner">
                <!-- Left: Synchronized Title & Sub-title Slider -->
                <div class="hero-text-slider">
                    <div class="hero-text-slides">
                        <!-- Slide 01: Trusted Astrologer in Siliguri -->
                        <div class="hero-slide-text is-active" data-slide="0" aria-hidden="false">
                            <p class="eyebrow">A Personal Approach to Ancient Wisdom</p>
                            <h1>Trusted Astrologer in Siliguri<br><em>– Discover Clarity Through Astrology, Tarot &amp;
                                    Vastu</em></h1>
                            <p class="hero-copy">Experience personalised astrology, tarot reading, Vastu Shastra, and
                                numerology consultations with Priyanka Dey. Available in Siliguri and online across
                                India.</p>
                            <div class="hero-actions">
                                <a class="btn gold" href="contact.php#booking">Book a Consultation &#8599;</a>
                                <a class="btn" href="services.php">Explore Services &#8599;</a>
                            </div>
                        </div>

                        <!-- Slide 02: Discover Your Cosmic Path with Priyanka Dey -->
                        <div class="hero-slide-text" data-slide="1" aria-hidden="true">
                            <p class="eyebrow">Vedic Astrology &amp; Cosmic Cycles</p>
                            <h1>Discover Your Cosmic Path with Priyanka Dey<br><em>– Astrologer &amp; Spiritual
                                    Consultant in Siliguri</em></h1>
                            <p class="hero-copy">Explore ancient wisdom through personalised Vedic astrology, tarot card
                                reading, numerology, and Vastu consultations designed to bring clarity and perspective.
                            </p>
                            <div class="hero-actions">
                                <a class="btn gold" href="astrology.php">Explore Astrology &#8599;</a>
                                <a class="btn" href="contact.php#booking">Book a Reading &#8599;</a>
                            </div>
                        </div>

                        <!-- Slide 03: Looking for an Astrologer in Siliguri -->
                        <div class="hero-slide-text" data-slide="2" aria-hidden="true">
                            <p class="eyebrow">Tarot Reading &amp; Intuitive Reflection</p>
                            <h1>Looking for an Astrologer in Siliguri?<br><em>Get Personalised Astrology &amp; Tarot
                                    Consultations.</em></h1>
                            <p class="hero-copy">Connect with Priyanka Dey for astrology, Kundali analysis, tarot
                                reading, Vastu guidance, and numerology consultations. Book your appointment online or
                                in Siliguri.</p>
                            <div class="hero-actions">
                                <a class="btn gold" href="tarot.php">Explore Tarot &#8599;</a>
                                <a class="btn" href="contact.php#booking">Book a Reading &#8599;</a>
                            </div>
                        </div>

                        <!-- Slide 04: Astrology, Tarot Reading, Vastu & Numerology Services in Siliguri -->
                        <div class="hero-slide-text" data-slide="3" aria-hidden="true">
                            <p class="eyebrow">Vastu Shastra &amp; Space Energy</p>
                            <h1>Astrology, Tarot Reading, Vastu &amp; Numerology Services in Siliguri<br><em>– Priyanka
                                    Dey.</em></h1>
                            <p class="hero-copy">Explore personalised consultations for birth-chart analysis, horoscope
                                interpretation, tarot reading, Vastu Shastra, and numerology, available online and in
                                person.</p>
                            <div class="hero-actions">
                                <a class="btn gold" href="vastu.php">Explore Vastu &#8599;</a>
                                <a class="btn" href="contact.php#booking">Request Audit &#8599;</a>
                            </div>
                        </div>

                        <!-- Slide 05: Priyanka Dey Consultant -->
                        <div class="hero-slide-text" data-slide="4" aria-hidden="true">
                            <p class="eyebrow">Kundali &amp; Sacred Numerology</p>
                            <h1>Priyanka Dey<br><em>– Your Astrologer, Tarot Reader &amp; Vastu Consultant in
                                    Siliguri</em></h1>
                            <p class="hero-copy">Discover traditional astrological insights, personalised tarot
                                readings, Kundali analysis, and Vastu consultations with a thoughtful, professional
                                approach.</p>
                            <div class="hero-actions">
                                <a class="btn gold" href="kundali.php">Explore Kundali &#8599;</a>
                                <a class="btn" href="contact.php#booking">Get Chart Analysis &#8599;</a>
                            </div>
                        </div>
                    </div>

                    <p class="hero-badge-meta">✦ Siliguri, West Bengal · Online sessions worldwide</p>

                    <!-- Synced Slider Controls (Arrows, Dots with progress, and Slide Counter) -->
                    <div class="hero-slider-controls">
                        <button class="slider-arrow slider-prev" id="sliderPrev" aria-label="Previous Slide">←</button>
                        <div class="hero-slider-dots" id="sliderDots" role="tablist" aria-label="Hero Slide Navigation">
                            <button class="slider-dot is-active" data-index="0" role="tab" aria-selected="true"
                                aria-label="Slide 1: Trusted Astrologer in Siliguri"><span
                                    class="dot-fill"></span></button>
                            <button class="slider-dot" data-index="1" role="tab" aria-selected="false"
                                aria-label="Slide 2: Discover Your Cosmic Path"><span class="dot-fill"></span></button>
                            <button class="slider-dot" data-index="2" role="tab" aria-selected="false"
                                aria-label="Slide 3: Looking for an Astrologer in Siliguri"><span
                                    class="dot-fill"></span></button>
                            <button class="slider-dot" data-index="3" role="tab" aria-selected="false"
                                aria-label="Slide 4: Astrology, Tarot &amp; Vastu Services in Siliguri"><span
                                    class="dot-fill"></span></button>
                            <button class="slider-dot" data-index="4" role="tab" aria-selected="false"
                                aria-label="Slide 5: Priyanka Dey Consultant"><span class="dot-fill"></span></button>
                        </div>
                        <button class="slider-arrow slider-next" id="sliderNext" aria-label="Next Slide">→</button>
                        <div class="hero-slide-counter">
                            <span class="current-slide" id="currentSlideNum">01</span><span
                                class="counter-divider">/</span><span class="total-slides">05</span>
                        </div>
                    </div>
                </div>

                <!-- Right: Synchronized 5-Image Hero Slider with Captions -->
                <div class="hero-photo-wrapper">
                    <div class="hero-photo">
                        <div class="hero-slider-images" id="heroMediaContainer">
                            <!-- Slide 01 Image: Guide Portrait -->
                            <div class="hero-slide-media is-active" data-slide="0">
                                <img src="assets/priyanka-dey.jpg" alt="Priyanka Dey - Trusted Astrologer in Siliguri">
                                <div class="photo-caption">
                                    <span class="eyebrow">Your Guide</span>
                                    <h2>Priyanka Dey</h2>
                                    <p>Trusted Astrologer in Siliguri</p>
                                </div>
                            </div>

                            <!-- Slide 02 Image: Vedic Astrology (Celestial Wheel) -->
                            <div class="hero-slide-media" data-slide="1">
                                <img src="assets/numerology.jpg" alt="Vedic Astrology Celestial Night Sky"
                                    onerror="this.onerror=null;this.src='assets/astrology-zodiac-wheel.svg';">
                                <div class="photo-caption">
                                    <span class="eyebrow">Numerology</span>
                                    <h2>Numerology Consultation</h2>
                                    <p>Numerologist in Siliguri</p>
                                </div>
                            </div>

                            <!-- Slide 03 Image: Tarot Reading (Mystic Cards) -->
                            <div class="hero-slide-media" data-slide="2">
                                <img src="assets/tarrot.jpg" alt="Tarot Reading and Intuitive Wisdom"
                                    onerror="this.onerror=null;this.src='assets/tarot-mystic-card.svg';">
                                <div class="photo-caption">
                                    <span class="eyebrow">Tarot Card</span>
                                    <h2>Tarot Card Reading</h2>
                                    <p>Tarot Consultations in Siliguri</p>
                                </div>
                            </div>

                            <!-- Slide 04 Image: Vastu Shastra (Sacred Mandala) -->
                            <div class="hero-slide-media" data-slide="3">
                                <img src="assets/vastu.jpg" alt="Vastu Shastra and Space Harmony"
                                    onerror="this.onerror=null;this.src='assets/vastu-mandala.svg';">
                                <div class="photo-caption">
                                    <span class="eyebrow">Vastu Consultation</span>
                                    <h2>Vastu Consultation</h2>
                                    <p>Vastu Services in Siliguri &ndash; Priyanka Dey</p>
                                </div>
                            </div>

                            <!-- Slide 05 Image: Kundali & Numerology (Cosmic Blueprint) -->
                            <div class="hero-slide-media" data-slide="4">
                                <img src="assets/kundali-horoscope.jpg" alt="Kundali and Horoscope"
                                    onerror="this.onerror=null;this.src='assets/kundali-chart.svg';">
                                <div class="photo-caption">
                                    <span class="eyebrow">Kundali - Horoscope</span>
                                    <h2>Kundali Preparation & Analysis</h2>
                                    <p>Kundali Consultation Services in Siliguri &ndash; Priyanka Dey</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION: A LITTLE ABOUT ME -->
        <section class="section about-priyanka">
            <div class="container two-col">
                <img class="portrait" src="assets/priyanka-dey.jpg" alt="Priyanka Dey Astrologer and Consultant">
                <div>
                    <p class="eyebrow">A little about me</p>
                    <h2 class="section-title">Personal guidance,<br><em>thoughtfully considered.</em></h2>
                    <p class="section-copy">I’m Priyanka Dey. My consultation approach brings together traditional
                        spiritual practices and a personal, thoughtful conversation. Whether you are curious about
                        astrology, tarot, Vastu, horoscope themes or sacred numerology, the aim is to help you explore
                        your questions with greater perspective.</p>
                    <p class="section-copy" style="margin-top:15px">Every consultation is shaped around you — providing
                        an empathetic space where you can share your concerns, understand classical principles, and move
                        forward with peace of mind.</p>
                    <a class="text-link" href="about.php">GET TO KNOW ME ↗</a>
                </div>
            </div>
        </section>

        <!-- SECTION: EXPLORE SERVICES (ALL 6 DISCIPLINES WITH IMAGES) -->
        <section class="section theme-ink" id="chooseConsultation">
            <div class="container center">
                <p class="eyebrow">PERSONAL CONSULTATIONS WITH PRIYANKA DEY</p>
                <h2 class="section-title">Astrology, Tarot & Vastu Consultations <br><em>in Siliguri</em></h2>
                <p class="section-copy">Explore astrology, Kundali analysis, Tarot, numerology, Vastu and horoscope
                    readings with Priyanka Dey in Siliguri. Choose a consultation for your questions and goals.</p>

                <div class="cards cards-3col">
                    <!-- 1. Astrology -->
                    <article class="card">
                        <img src="assets/horoscope1.jpg" alt="Golden zodiac wheel with planetary symbols"
                            loading="lazy">
                        <div class="card-body">
                            <span class="card-number">01 / PERSONAL ASTROLOGY</span>
                            <h3>Astrology Consultation</h3>
                            <p>Explore your birth chart and planetary influences with a personal astrology consultation
                                focused on career, relationships and life choices.</p>
                            <a class="text-link" href="astrology.php">VIEW ASTROLOGY SERVICES ↗</a>
                        </div>
                    </article>

                    <!-- 2. Tarot Reading -->
                    <article class="card">
                        <img src="assets/tarot.png" alt="Illustrated Tarot cards arranged on purple velvet"
                            loading="lazy">
                        <div class="card-body">
                            <span class="card-number">02 / CLARITY & REFLECTION</span>
                            <h3>Tarot Card Reading</h3>
                            <p>Explore questions about love, career and personal choices through a reflective Tarot card
                                reading with Priyanka Dey.</p>
                            <a class="text-link" href="tarot.php">VIEW TAROT READINGS ↗</a>
                        </div>
                    </article>

                    <!-- 3. Vastu Consultation -->
                    <article class="card">
                        <img src="assets/vastu1.jpg" alt="Traditional Vastu Purusha Mandala with directional markings"
                            loading="lazy">
                        <div class="card-body">
                            <span class="card-number">03 / HOME & WORKPLACE</span>
                            <h3>Vastu Consultation</h3>
                            <p>Get traditional Vastu guidance for your home, office or shop, with a review of room
                                layouts, entrances and directions.</p>
                            <a class="text-link" href="vastu.php">VIEW VASTU SERVICES ↗</a>
                        </div>
                    </article>

                    <!-- 4. Kundali Analysis -->
                    <article class="card">
                        <img src="assets/vedic-kundali.jpg"
                            alt="North Indian Janam Kundali chart with planetary placements" loading="lazy">
                        <div class="card-body">
                            <span class="card-number">04 / UNDERSTAND YOUR BIRTH CHART</span>
                            <h3>Kundali Analysis</h3>
                            <p>Understand your Janam Kundali through a personal reading of your Lagna, planetary
                                placements and Mahadasha periods.</p>
                            <a class="text-link" href="kundali.php">VIEW KUNDALI SERVICES ↗</a>
                        </div>
                    </article>

                    <!-- 5. Horoscope -->
                    <article class="card">
                        <img src="assets/horoscope1.jpg" alt="Golden zodiac wheel against a starry background"
                            loading="lazy">
                        <div class="card-body">
                            <span class="card-number">05 / YOUR PERSONAL OUTLOOK</span>
                            <h3>Horoscope Reading</h3>
                            <p>Explore your zodiac sign and planetary transits through a personal horoscope reading
                                focused on the themes of your month or year.</p>
                            <a class="text-link" href="horoscope.php">VIEW HOROSCOPE READINGS ↗</a>
                        </div>
                    </article>

                    <!-- 6. Sacred Numerology -->
                    <article class="card">
                        <img src="assets/numerology1.jpg" alt="Golden numbers arranged around a geometric pattern"
                            loading="lazy">
                        <div class="card-body">
                            <span class="card-number">06 / NAME & BIRTH-DATE INSIGHTS</span>
                            <h3>Numerology Consultation</h3>
                            <p>Discover traditional interpretations of your name, birth date and life path number
                                through a personal numerology consultation.</p>
                            <a class="text-link" href="services.php">VIEW NUMEROLOGY SERVICES ↗</a>
                        </div>
                    </article>
                </div>

                <p style="margin-top:35px"><a class="btn" href="services.php">Explore All Services ↗</a></p>
            </div>
        </section>

        <!-- SECTION: COSMIC ARCHETYPES & ENERGIES -->
        <section class="section zodiac-daily-section">
            <div class="container center">
                <p class="eyebrow"
                    style="color: var(--champagne); letter-spacing: 0.22em; font-size: 12px; margin-bottom: 12px;">
                    EXPLORE THE 12 ZODIAC SIGNS</p>
                <h2 class="section-title" style="color: #ffffff; margin-bottom: 14px;">Discover Your Zodiac Sign &
                    <em>Personality Traits</em>
                </h2>
                <p class="section-copy"
                    style="color: rgba(255, 255, 255, 0.72); max-width: 720px; margin: 0 auto 46px;">Explore all 12
                    zodiac signs, their dates, elements, ruling planets and traditional personality traits. Select your
                    sign to learn about its strengths, relationship compatibility and astrological characteristics.</p>

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
                            <path
                                d="M 23,25 C 22,21 24,16 28,13 C 32,10 37,11 40,14 C 37,15 34,17 33,20 C 32,23 29,24 27,24 Z" />
                            <!-- Flame Mane Mid Wave -->
                            <path
                                d="M 36,16 C 40,17 45,20 47,25 C 49,30 47,34 44,36 C 44,33 43,30 40,28 C 37,25 37,21 36,16 Z" />
                            <!-- Flame Mane Lower Wave -->
                            <path
                                d="M 46,27 C 50,31 51,37 49,42 C 47,46 43,48 39,48 C 41,45 42,41 41,37 C 40,33 43,30 46,27 Z" />
                            <!-- Flame Mane Tail Swirl -->
                            <path
                                d="M 45,40 C 46,44 44,49 40,52 C 36,54 31,53 28,50 C 31,49 34,47 35,44 C 37,41 41,40 45,40 Z" />
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
                            <path
                                d="M 29,14 C 23,14 18,19 19,25 C 20,23 22,21 25,20 C 29,19 33,21 36,24 C 37,21 34,16 29,14 Z" />
                            <!-- Hair Cascading Waves -->
                            <path
                                d="M 33,15 C 39,17 45,22 46,29 C 47,35 45,40 41,44 C 43,39 43,33 41,28 C 39,23 36,18 33,15 Z" />
                            <path
                                d="M 43,32 C 46,37 47,43 44,48 C 41,52 36,54 31,55 C 35,53 39,50 40,46 C 42,41 42,36 43,32 Z" />
                            <path
                                d="M 40,44 C 40,48 37,52 32,54 C 28,56 23,55 19,53 C 24,53 28,51 31,48 C 34,45 37,44 40,44 Z" />
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
                            <path
                                d="M 28,32 C 24,28 20,27 16,29 C 14,30 13,33 14,35 C 15,36 17,35 18,33 C 19,31 22,30 25,33 Z" />
                            <path
                                d="M 15,28 C 12,24 13,19 16,16 C 18,14 20,15 20,17 C 20,19 18,21 17,23 C 18,25 21,27 23,28 Z" />
                            <path d="M 16,16 C 14,19 14,23 16,26 C 15,26 13,24 13,21 C 13,18 14.5,16.5 16,16 Z" />
                            <!-- Right Claw -->
                            <path
                                d="M 36,32 C 40,28 44,27 48,29 C 50,30 51,33 50,35 C 49,36 47,35 46,33 C 45,31 42,30 39,33 Z" />
                            <path
                                d="M 49,28 C 52,24 51,19 48,16 C 46,14 44,15 44,17 C 44,19 46,21 47,23 C 46,25 43,27 41,28 Z" />
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
                            <path
                                d="M 31,23 C 28,26 23,30 20,36 C 17,42 16,48 14,54 C 16,51 18,46 21,41 C 24,36 29,31 33,27 Z" />
                            <path
                                d="M 28,26 C 25,29 21,34 19,40 C 17,46 16,51 13,56 C 14.5,52 16,47 19,42 C 22,37 26,32 30,29 Z" />
                            <path
                                d="M 25,31 C 22,35 19,40 18,46 C 17,52 15,56 12,58 C 13,54 15,49 17,44 C 19,39 23,35 27,33 Z" />
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
            <div id="zodiacDialog" class="zodiac-dialog" role="dialog" aria-modal="true"
                aria-labelledby="dialogSignTitle">
                <div class="zodiac-dialog-backdrop" data-dialog-close></div>
                <div class="zodiac-dialog-content" role="document">
                    <button type="button" class="zodiac-dialog-close" data-dialog-close aria-label="Close dialogue box">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
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
                        <a href="contact.php#booking" class="btn gold">Book Personalised Reading ↗</a>
                    </div>
                </div>
            </div>
            <!-- /zodiacDialog -->
        </section>

        <!-- SECTION: PERSONAL HOROSCOPE CONSULTATION CTA -->
        <section class="section personal-horoscope-cta-section" id="personalHoroscope">
            <div class="container center">
                <div class="personal-horoscope-card">
                    <p class="eyebrow">Personalized Birth Chart Guidance</p>
                    <h2 class="personal-horoscope-title">Looking for a <em>Personal Horoscope Reading?</em></h2>
                    <p class="personal-horoscope-copy">Explore your birth chart beyond general zodiac traits with
                        Priyanka Dey. Book a personalized astrology consultation in Siliguri to discuss your questions
                        about career, relationships and life choices.</p>
                    <div class="personal-horoscope-actions">
                        <a href="contact.php#booking" class="btn gold personal-horoscope-btn">Book Your Astrology
                            Consultation &#8599;</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION: FROM THE JOURNAL (WITH 3 VISUAL CARDS) -->
        <section class="section theme-ink" id="journal">
            <div class="container center">
                <p class="eyebrow">From the journal</p>
                <h2 class="section-title">Vedic Wisdom &amp; <em>Spiritual Insights.</em></h2>
                <p class="section-copy">Explore practical guides and authoritative insights on Vedic astrology, Vastu
                    Shastra, Tarot readings, and numerology by Priyanka Dey in Siliguri.</p>

                <div class="blog-list">
                    <article class="blog-card">
                        <img src="assets/astrology.jpg"
                            alt="Vedic Astrology birth chart reading and planetary consultation in Siliguri" width="600"
                            height="340" loading="lazy" decoding="async"
                            onerror="this.onerror=null;this.src='assets/blog-astrology.svg';">
                        <div class="card-body">
                            <span class="date">Vedic Astrology · Natal Charts</span>
                            <h3><a href="astrology.php">What Is a Birth Chart? A Complete Guide to Janam Kundali</a>
                            </h3>
                            <p style="font-size:13px;line-height:1.8;color:var(--muted);margin-bottom:18px;">
                                A Vedic birth chart (Janam Kundali) maps planetary alignments at your exact moment of
                                birth. Discover how the 12 bhavas (houses), planetary dashas, and zodiac signs reveal
                                your career destiny, relationship harmony, and life purpose.
                            </p>
                            <a class="text-link" href="astrology.php"
                                aria-label="Read complete guide to Vedic Birth Charts and Kundali">READ COMPLETE GUIDE
                                ↗</a>
                        </div>
                    </article>

                    <article class="blog-card">
                        <img src="assets/vastu1.jpg"
                            alt="Vastu Shastra residential spatial energy audit and five elements alignment" width="600"
                            height="340" loading="lazy" decoding="async"
                            onerror="this.onerror=null;this.src='assets/blog-vastu.svg';">
                        <div class="card-body">
                            <span class="date">Vastu Shastra · Space Harmony</span>
                            <h3><a href="vastu.php">Vastu Shastra for Home &amp; Office: Aligning the Five Elements</a>
                            </h3>
                            <p style="font-size:13px;line-height:1.8;color:var(--muted);margin-bottom:18px;">
                                Harmonize your living spaces with Pancha Tattva (Earth, Water, Fire, Air, and Space).
                                Learn vital directional alignments for entrances and workspaces, and discover
                                non-demolition Vastu remedies that remove stagnant energy and invite prosperity.
                            </p>
                            <a class="text-link" href="vastu.php"
                                aria-label="Read Vastu Shastra consultation guide for homes and businesses">READ VASTU
                                GUIDE ↗</a>
                        </div>
                    </article>

                    <article class="blog-card">
                        <img src="assets/numerology1.jpg"
                            alt="Sacred Numerology life path number calculation and destiny vibration analysis"
                            width="600" height="340" loading="lazy" decoding="async"
                            onerror="this.onerror=null;this.src='assets/blog-numerology.svg';">
                        <div class="card-body">
                            <span class="date">Numerology · Sacred Vibrations</span>
                            <h3><a href="numerology.php">Sacred Numerology Demystified: Life Path &amp; Name
                                    Correction</a></h3>
                            <p style="font-size:13px;line-height:1.8;color:var(--muted);margin-bottom:18px;">
                                Unlock the numeric vibrations shaping your life decisions and success. Explore
                                Pythagorean and Chaldean calculations to discover your Life Path Number, decode annual
                                karmic cycles, and align personal or business names for optimal resonance.
                            </p>
                            <a class="text-link" href="numerology.php"
                                aria-label="Explore Sacred Numerology and life path calculation insights">EXPLORE
                                NUMEROLOGY ↗</a>
                        </div>
                    </article>
                </div>

                <p style="margin-top:35px"><a class="btn" href="blog.php">Visit the Full Blog ↗</a></p>
            </div>
        </section>
    </main>

<?php
include __DIR__ . '/footer.php';
?>
