<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Loodgieter Utrecht | 24/7 Service & Vakmanschap – Loodgieter Paraat</title>
  <meta name="description" content="Loodgieter Paraat is dé loodgieter in Utrecht en omgeving. 24/7 beschikbaar voor lekkages, verstoppingen, cv-problemen en leidingwerk. Altijd snel en vakkundig geholpen.">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- Font Awesome (social icons) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- Favicon -->
  <link rel="icon" href="./images/loodgietersbedrijfParaatAchtergrond_logo.png" type="image/png">

  <!-- Open Graph (Facebook / LinkedIn) -->
  <meta property="og:title" content="Loodgieter Utrecht | Snelle Service – Loodgieter Paraat">
  <meta property="og:description" content="Betrouwbare loodgieter in Utrecht. 24/7 voor lekkages, verstoppingen en leidingwerk.">
  <meta property="og:image" content="./images/loodgietersbedrijfParaat_logo.png">
  <meta property="og:url" content="https://www.loodgieterparaat.nl">
  <meta property="og:type" content="website">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Loodgieter Utrect | Snelle Service – Loodgieter Paraat">
  <meta name="twitter:description" content="Dé loodgieter in Utrecht en omgeving. 24/7 bereikbaar, vakmanschap gegarandeerd.">
  <meta name="twitter:image" content="/images/loodgietersbedrijfParaat_logo.png">

  <!-- Canonical -->
  <link rel="canonical" href="https://www.loodgieterparaat.nl">
</head>

<body>
  <!-- Preloader -->
  <div class="preloader" id="preloader">
    <img src="./images/loodgietersbedrijfParaatAchtergrond_logo.png" alt="Rijschool Paraat Logo" class="loader-logo">
  </div>
  <!-- Navigatie -->
  <?php include 'partials/nav.html'; ?>
  <!-- Hero -->
  <section id="hero" class="hero">
    <div class="hero-content">
      <h1>Loodgietersbedrijf Paraat - Uw betrouwbare partner in loodgieterswerk</h1>
      <br>
      <p>Betrouwbaar, snel en vakkundig – 24/7 service in Utrecht en omgeving! Wij gaan pas weg als u tevreden bent! Neem contact met ons op voor een vrijblijvende offerte!</p>
      <div class="hero-buttons">
        <a href="#contact" class="cta-btn">Vraag direct een offerte aan</a>
      </div>
    </div>
    <div class="hero-img">
      <img src="images/plumber-1162323_1280.jpg" alt="Loodgieter aan het werk">
    </div>
  </section>

  <!-- Diensten -->
  <section id="diensten" class="diensten section-dark">
    <h2>Onze Diensten</h2>
    <div class="diensten-grid">
      <!-- Waterleidingen -->
      <a href="werkzaamheden/waterleidingen.php" class="dienst">
        <div class="dienst-img-wrap">
          <img src="./images/waterleidingen.jpg" alt="Waterleidingen" class="dienst-afbeelding" />
          <span class="dienst-icoon" aria-hidden="true">
            <span class="icoon-animatie">
              <!-- Kraan/leiding icoon -->
              <svg width="56" height="56" viewBox="0 0 56 56" fill="none">
                <circle cx="28" cy="28" r="24" stroke="#ee9a3a" stroke-width="4" fill="#fff" />
                <rect x="10" y="24" width="36" height="8" rx="4" fill="#ee9a3a" />
                <rect x="24" y="10" width="8" height="36" rx="4" fill="#1f4b6e" />
              </svg>
            </span>
          </span>
        </div>
        <h3>Waterleidingen</h3>
        <p>Aanleggen, repareren en vervangen van waterleidingen, inclusief lekkage opsporen en buitenkranen.</p>
      </a>
      <!-- Sanitair en badkamer -->
      <a href="werkzaamheden/sanitair-en-badkamer.php" class="dienst">
        <div class="dienst-img-wrap">
          <img src="./images/sanitair_badkamer.jpg" alt="Sanitair en badkamer" class="dienst-afbeelding" />
          <span class="dienst-icoon" aria-hidden="true">
            <span class="icoon-animatie">
              <!-- Sanitair/badkamer icoon -->
              <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="28" cy="28" r="24" fill="#fff" stroke="#ee9a3a" stroke-width="4" />
                <g transform="translate(14,17) scale(0.052)">
                  <path
                    d="M96 77.3c0-7.3 5.9-13.3 13.3-13.3c3.5 0 6.9 1.4 9.4 3.9l14.9 14.9C130 91.8 128 101.7 128 112c0 19.9 7.2 38 19.2 52c-5.3 9.2-4 21.1 3.8 29c9.4 9.4 24.6 9.4 33.9 0L289 89c9.4-9.4 9.4-24.6 0-33.9c-7.9-7.9-19.8-9.1-29-3.8C246 39.2 227.9 32 208 32c-10.3 0-20.2 2-29.2 5.5L163.9 22.6C149.4 8.1 129.7 0 109.3 0C66.6 0 32 34.6 32 77.3L32 256c-17.7 0-32 14.3-32 32s14.3 32 32 32l448 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 256 96 77.3zM32 352l0 16c0 28.4 12.4 54 32 71.6L64 480c0 17.7 14.3 32 32 32s32-14.3 32-32l0-16 256 0 0 16c0 17.7 14.3 32 32 32s32-14.3 32-32l0-40.4c19.6-17.6 32-43.1 32-71.6l0-16L32 352z"
                    fill="none" stroke="#1f4b6e" stroke-width="28" />
                </g>
              </svg>
            </span>
          </span>
        </div>
        <h3>Sanitair &amp; Badkamer</h3>
        <p>Plaatsen, vervangen en repareren van sanitair, ontstoppen van afvoeren en complete badkamerrenovaties.</p>
      </a>
      <!-- Verwarmingsinstallatie -->
      <a href="werkzaamheden/verwarmingsinstallatie.php" class="dienst">
        <div class="dienst-img-wrap">
          <img src="./images/verwarming_installatie.jpg" alt="Verwarmingsinstallatie" class="dienst-afbeelding" />
          <span class="dienst-icoon" aria-hidden="true">
            <span class="icoon-animatie">
              <!-- Radiator icoon -->
              <svg width="56" height="56" viewBox="0 0 56 56" fill="none">
                <circle cx="28" cy="28" r="24" stroke="#ee9a3a" stroke-width="4" fill="#fff" />
                <rect x="16" y="20" width="24" height="16" rx="4" fill="#1f4b6e" />
                <rect x="20" y="24" width="4" height="8" rx="2" fill="#ee9a3a" />
                <rect x="32" y="24" width="4" height="8" rx="2" fill="#ee9a3a" />
              </svg>
            </span>
          </span>
        </div>
        <h3>Verwarmingsinstallatie</h3>
        <p>Ontluchten, bijvullen en aanleggen van cv-leidingen en radiatoren.</p>
      </a>
      <!-- Riolering en afvoer -->
      <a href="werkzaamheden/riolering-en-afvoer.php" class="dienst">
        <div class="dienst-img-wrap">
          <img src="./images/riolering_afvoer.jpg" alt="Riolering en afvoer" class="dienst-afbeelding" />
          <span class="dienst-icoon" aria-hidden="true">
            <span class="icoon-animatie">
              <!-- Riool/pijp icoon -->
              <svg width="56" height="56" viewBox="0 0 56 56" fill="none" aria-hidden="true">
                <circle cx="28" cy="28" r="24" stroke="#ee9a3a" stroke-width="4" fill="#fff" />
                <ellipse cx="28" cy="32" rx="10" ry="4" fill="#fff" stroke="#1f4b6e" stroke-width="2" />
                <path d="M28 18c2 3 4 6 4 8a4 4 0 1 1-8 0c0-2 2-5 4-8z" fill="#1f4b6e" />
              </svg>
            </span>
          </span>
        </div>
        <h3>Riolering &amp; Afvoer</h3>
        <p>Aanleggen, ontstoppen en inspecteren van riolering en afvoer, stankproblemen, inclusief camera-inspectie en reparatie.</p>
      </a>
      <!-- Spoeddienst -->
      <a href="werkzaamheden/spoeddienst.php" class="dienst">
        <div class="dienst-img-wrap">
          <img src="./images/spoeddienst.jpg" alt="Spoeddienst" class="dienst-afbeelding" />
          <span class="dienst-icoon" aria-hidden="true">
            <span class="icoon-animatie">
              <!-- Klok/spoed icoon -->
              <svg width="56" height="56" viewBox="0 0 56 56" fill="none">
                <circle cx="28" cy="28" r="24" stroke="#ee9a3a" stroke-width="4" fill="#fff" />
                <rect x="26" y="14" width="4" height="16" rx="2" fill="#1f4b6e" />
                <circle cx="28" cy="38" r="3" fill="#1f4b6e" />
              </svg>
            </span>
          </span>
        </div>
        <h3>Spoeddienst / 24/7</h3>
        <p>Direct hulp bij lekkages, verstoppingen, gasproblemen of overige zaken. 24/7 bereikbaar!</p>
      </a>
    </div>
  </section>

  <!-- Over ons -->
  <section id="over" class="section-light">
    <!-- Blok 1: Introductie -->
    <div class="overons-row"
      data-aos="zoom-in"
      data-aos-duration="1000">
      <div class="overons-row-text">
        <h2>Over Loodgietersbedrijf Paraat</h2>
        <p>
          Welkom bij Loodgietersbedrijf Paraat! Wij zijn een modern, klantgericht loodgietersbedrijf met een passie voor vakmanschap en service. Al jaren staan wij bekend om onze snelle, betrouwbare en transparante aanpak. Of het nu gaat om een lekkage, verstopping, renovatie of onderhoud: ons team zorgt dat je snel en vakkundig wordt geholpen.
        </p>
        <p>
          Onze missie is om iedere klant volledig te ontzorgen. We geloven in heldere communicatie, duidelijke afspraken en een persoonlijke benadering. Je wordt altijd geholpen door een deskundig team van ervaren monteurs, zodat je precies weet waar je aan toe bent. Geen verrassingen, geen gedoe.
        </p>
      </div>
      <div class="overons-row-img">
        <img src="./images/overonsimg.png" alt="Team van loodgietersbedrijf Paraat">
      </div>
    </div>

    <!-- USP GRID -->
    <div class="usp-grid-container">
      <div class="usp-grid">
        <div class="usp-card"
          data-aos="zoom-in"
          data-aos-duration="1000"
          data-aos-delay="0">
          <div class="usp-icon">
            <!-- Klok/bliksemschicht icoon -->
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
              <circle cx="20" cy="20" r="20" fill="#ee9a3a" />
              <path d="M20 10v10l7 7" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
              <circle cx="20" cy="20" r="9" stroke="#fff" stroke-width="2" />
            </svg>
          </div>
          <h3>Vandaag gebeld = vandaag geholpen</h3>
          <p>We zijn flexibel en snel ter plaatse, ook bij spoed.</p>
        </div>

        <div class="usp-card"
          data-aos="zoom-in"
          data-aos-duration="1000"
          data-aos-delay="300">
          <div class="usp-icon">
            <!-- Prijs/Euro icoon -->
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
              <circle cx="20" cy="20" r="20" fill="#1f4b6e" />
              <text x="20" y="27" text-anchor="middle" font-size="22" fill="#fff" font-family="Arial, sans-serif">€</text>
            </svg>
          </div>
          <h3>Transparante prijzen</h3>
          <p>Je weet altijd vooraf waar je aan toe bent, zonder verrassingen achteraf.</p>
        </div>

        <div class="usp-card"
          data-aos="zoom-in"
          data-aos-duration="1000"
          data-aos-delay="600">
          <div class="usp-icon">
            <!-- 24/7 klok icoon -->
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
              <circle cx="20" cy="20" r="20" fill="#ee9a3a" />
              <path d="M20 12v8l6 4" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
              <circle cx="20" cy="20" r="9" stroke="#fff" stroke-width="2" />
              <text x="20" y="36" text-anchor="middle" font-size="10" fill="#fff" font-family="Arial, sans-serif">24/7</text>
            </svg>
          </div>
          <h3>24/7 bereikbaar</h3>
          <p>Ook 's avonds en in het weekend kun je op ons rekenen.</p>
        </div>

        <div class="usp-card"
          data-aos="zoom-in"
          data-aos-duration="1000"
          data-aos-delay="900">
          <div class="usp-icon">
            <!-- Persoon icoon -->
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
              <circle cx="20" cy="20" r="20" fill="#1f4b6e" />
              <circle cx="20" cy="17" r="6" fill="#fff" />
              <rect x="12" y="26" width="16" height="6" rx="3" fill="#fff" />
            </svg>
          </div>
          <h3>Team van ervaren specialisten</h3>
          <p>Je wordt altijd geholpen door een deskundig en ervaren team van monteurs.</p>
        </div>
      </div>
    </div>

    <!-- Blok 2: Missie en USP's -->
    <div class="overons-row reverse"
      data-aos="zoom-in"
      data-aos-duration="1000">
      <div class="overons-row-text">
        <h2>Onze Missie & Visie</h2>
        <p>
          Wij willen het verschil maken door niet alleen snel en vakkundig te werken, maar vooral door écht te luisteren naar onze klanten. We denken mee, geven eerlijk advies en zorgen dat alles netjes en naar wens wordt opgeleverd. Jouw tevredenheid is onze grootste drijfveer!
        </p>
        <p>
          We houden van korte lijnen en duidelijke communicatie. Vanaf het eerste contact tot de oplevering houden we je op de hoogte van elke stap. We denken graag mee en geven eerlijk advies, zodat je altijd de beste oplossing krijgt voor jouw situatie.
        </p>
      </div>
      <div class="overons-row-img">
        <img src="./images/missie_visie.jpg" alt="Team Paraat">
      </div>
    </div>

    <!-- Onze Werkwijze Sectie -->
    <div class="overons-row"
      data-aos="zoom-in"
      data-aos-duration="1000">
      <div class="overons-row-text">
        <h2>Onze Werkwijze</h2>
        <p>
          We werken uitsluitend met hoogwaardige materialen en moderne technieken. Ons team bestaat uit ervaren, gecertificeerde vakmensen die hun werk met trots uitvoeren. We laten alles netjes achter en gaan pas weg als jij tevreden bent.
        </p>
        <a href="#contact" class="cta-btn">Direct contact opnemen</a>
      </div>
      <div class="overons-row-img">
        <img src="./images/werkwijze.jpg" alt="Werkbus Paraat">
      </div>
    </div>

    <!-- Stappenplan onderaan Onze Werkwijze -->
    <section class="stappenplan-modern">
      <h3>In 3 stappen helpen wij u</h3>
      <div class="stappenplan-blokken">
        <div class="stap-blok groot"
          data-aos="zoom-in"
          data-aos-duration="1000"
          data-aos-delay="0">
          <div class="stap-nummer groot">1</div>
          <div class="stap-icoon groot">
            <!-- Telefoon icoon -->
            <svg width="48" height="48" fill="none" stroke="#1f4b6e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
              <path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.72 19.72 0 0 1 3.09 5.18 2 2 0 0 1 5 3h3a2 2 0 0 1 2 1.72c.13.81.37 1.6.7 2.34a2 2 0 0 1-.45 2.11l-1.27 1.27a16 16 0 0 0 6.29 6.29l1.27-1.27a2 2 0 0 1 2.11-.45c.74.33 1.53.57 2.34.7A2 2 0 0 1 22 16.92z" />
            </svg>
          </div>
          <div class="stap-titel groot">Contact</div>
          <div class="stap-uitleg groot">Neem contact op via het formulier of bel ons direct.</div>
        </div>
        <div class="stap-pijl"
          data-aos="zoom-in"
          data-aos-duration="1000"
          data-aos-delay="300">
          <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
            <path d="M8 24h32M32 16l8 8-8 8" stroke="#ee9a3a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
        <div class="stap-blok groot"
          data-aos="zoom-in"
          data-aos-duration="1000"
          data-aos-delay="600">
          <div class="stap-nummer groot">2</div>
          <div class="stap-icoon groot">
            <!-- Euro-teken in cirkel -->
            <div class="stap-icoon groot">
              <svg width="48" height="48" viewBox="0 0 640 640" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="320" cy="320" r="288" stroke="#1f4b6e" stroke-width="40" fill="none" />
                <g transform="scale(0.8) translate(70 70)">
                  <path d="M169.3 256C196.8 163.5 282.5 96 384 96L448 96C465.7 96 480 110.3 480 128C480 145.7 465.7 160 448 160L384 160C318.4 160 262 199.5 237.3 256L368 256C381.3 256 392 266.7 392 280C392 293.3 381.3 304 368 304L224.8 304C224.3 309.3 224 314.6 224 320C224 325.4 224.3 330.7 224.8 336L368 336C381.3 336 392 346.7 392 360C392 373.3 381.3 384 368 384L237.3 384C262 440.5 318.4 480 384 480L448 480C465.7 480 480 494.3 480 512C480 529.7 465.7 544 448 544L384 544C282.5 544 196.8 476.5 169.3 384L136 384C122.7 384 112 373.3 112 360C112 346.7 122.7 336 136 336L160.6 336C159.9 325.5 159.9 314.5 160.6 304L136 304C122.7 304 112 293.3 112 280C112 266.7 122.7 256 136 256L169.3 256z"
                    stroke="#1f4b6e" stroke-width="32" fill="none" stroke-linecap="round" stroke-linejoin="round" />
                </g>
              </svg>
            </div>
          </div>
          <div class="stap-titel groot">Prijsbespreking</div>
          <div class="stap-uitleg groot">We bespreken samen de prijs en mogelijkheden.</div>
        </div>
        <div class="stap-pijl"
          data-aos="zoom-in"
          data-aos-duration="1000"
          data-aos-delay="900">
          <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
            <path d="M8 24h32M32 16l8 8-8 8" stroke="#ee9a3a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
        <div class="stap-blok groot"
          data-aos="zoom-in"
          data-aos-duration="1000"
          data-aos-delay="900">
          <div class="stap-nummer groot">3</div>
          <div class="stap-icoon groot">
            <!-- Moersleutel icoon (outline, geen vulling) -->
            <svg width="48" height="48" viewBox="0 0 640 640" fill="none" stroke="#1f4b6e" stroke-width="40" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
              <path d="M541.4 162.6C549 155 561.7 156.9 565.5 166.9C572.3 184.6 576 203.9 576 224C576 312.4 504.4 384 416 384C398.5 384 381.6 381.2 365.8 376L178.9 562.9C150.8 591 105.2 591 77.1 562.9C49 534.8 49 489.2 77.1 461.1L264 274.2C258.8 258.4 256 241.6 256 224C256 135.6 327.6 64 416 64C436.1 64 455.4 67.7 473.1 74.5C483.1 78.3 484.9 91 477.4 98.6L388.7 187.3C385.7 190.3 384 194.4 384 198.6L384 240C384 248.8 391.2 256 400 256L441.4 256C445.6 256 449.7 254.3 452.7 251.3L541.4 162.6z" />
            </svg>
          </div>
          <div class="stap-titel groot">Uitvoering</div>
          <div class="stap-uitleg groot">We voeren de werkzaamheden vakkundig uit.</div>
        </div>
      </div>
    </section>
  </section>

  <!-- Klantreviews -->
  <section class="review-slider-section">
    <h2>Wat Klanten Zeggen</h2>
    <p class="review-subtitle">Hieronder vind je een overzicht wat klanten over ons zeggen.</p>
    <div class="review-slider" id="reviewSlider">
      <div class="review-slider-track" id="reviewSliderTrack">
        <!-- Slide 1 -->
        <div class="review-slide">
          <div class="review-card">
            <div class="review-quote">“</div>
            <div class="review-stars">
              ★★★★★
            </div>
            <div class="review-text">
              Binnen een uur stond er een monteur op de stoep om mijn lekkage te verhelpen. Snel, vriendelijk en alles netjes achtergelaten. Echt top!
            </div>
            <div class="reviewer">Sanne uit Utrecht</div>
          </div>
        </div>
        <div class="review-slide">
          <div class="review-card">
            <div class="review-quote">“</div>
            <div class="review-stars">
              ★★★★★
            </div>
            <div class="review-text">
              Zeer tevreden over de snelle service bij een verstopte afvoer. Goede communicatie en duidelijke prijsafspraken. Aanrader!
            </div>
            <div class="reviewer">Mark</div>
          </div>
        </div>
        <div class="review-slide">
          <div class="review-card">
            <div class="review-quote">“</div>
            <div class="review-stars">
              ★★★★★
            </div>
            <div class="review-text">
              Mijn nieuwe badkamer is prachtig geworden dankzij Paraat. Alles volgens planning en super netjes gewerkt. Bedankt voor het meedenken!
            </div>
            <div class="reviewer">Petra</div>
          </div>
        </div>
        <div class="review-slide">
          <div class="review-card">
            <div class="review-quote">“</div>
            <div class="review-stars">
              ★★★★
            </div>
            <div class="review-text">
              Fijne loodgieter! Duidelijke uitleg, snel geholpen en geen verrassingen achteraf. Ik bel voortaan altijd Paraat.
            </div>
            <div class="reviewer">Erik</div>
          </div>
        </div>
        <div class="review-slide">
          <div class="review-card">
            <div class="review-quote">“</div>
            <div class="review-stars">
              ★★★★
            </div>
            <div class="review-text">
              Zelfs op zondagavond werd ik direct geholpen met een lekkende leiding. Wat een service! Zeer professioneel en vriendelijk.
            </div>
            <div class="reviewer">Linda</div>
          </div>
        </div>
        <div class="review-slide">
          <div class="review-card">
            <div class="review-quote">“</div>
            <div class="review-title">
              <strong>Geweldige Service!</strong>
            </div>
            <div class="review-stars">
              ★★★★★
            </div>
            <div class="review-text">
              Paraat heeft bij ons de cv-installatie vervangen. Alles verliep soepel en het huis werd schoon achtergelaten. Zeer tevreden!
            </div>
            <div class="reviewer">Familie Jansen</div>
          </div>
        </div>
        <div class="review-slide">
          <div class="review-card">
            <div class="review-quote">“</div>
            <div class="review-stars">
              ★★★★
            </div>
            <div class="review-text">
              Prettig contact, snelle offerte en vakkundig werk geleverd. Je merkt dat ze echt verstand van zaken hebben.
            </div>
            <div class="reviewer">Tom</div>
          </div>
        </div>
        <div class="review-slide">
          <div class="review-card">
            <div class="review-quote">“</div>
            <div class="review-stars">
              ★★★★★
            </div>
            <div class="review-text">
              Ik ben erg blij met de nieuwe kraan en het advies over waterbesparing. Paraat denkt echt mee met de klant!
            </div>
            <div class="reviewer">Sophie</div>
          </div>
        </div>
      </div>
      <div class="review-dots" id="reviewDots"></div>
    </div>
  </section>

  <!-- Blog -->
  <section id="blog" class="blog section-dark">
    <h2>Laatste Blogs</h2>
    <div class="blog-grid">
      <article class="blogpost"
        data-aos="zoom-in"
        data-aos-duration="1000"
        data-aos-delay="0">
        <img src="images/ontstoppen_afvoer.jpg" alt="Blog loodgieter tips">
        <h3>5 Tips om Verstoppingen te Voorkomen</h3>
        <p>Voorkom verstoppingen in huis met deze eenvoudige tips van onze loodgieters.</p>
        <a href="verstoppingen-tips.php">Lees meer</a>
      </article>

      <article class="blogpost"
        data-aos="zoom-in"
        data-aos-duration="1000"
        data-aos-delay="600">
        <img src="images/lekkage.jpg" alt="Blog lekkage oplossen">
        <h3>Lekkage? Dit Moet U Doen!</h3>
        <p>Ontdek wat u direct kunt doen bij een lekkage en wanneer u ons moet bellen.</p>
        <a href="lekkage-tips.php">Lees meer</a>
      </article>

      <article class="blogpost"
        data-aos="zoom-in"
        data-aos-duration="1000"
        data-aos-delay="1200">
        <img src="./images/badkamer-renovatie.jpg" alt="Badkamer renovatie tips">
        <h3>Badkamer Renovatie: 7 Praktische Tips voor een Succesvolle Verbouwing</h3>
        <p>
          Ga je je badkamer verbouwen? Met deze 7 praktische tips voorkom je verrassingen en geniet je straks van een prachtige, functionele badkamer.
        </p>
        <a href="badkamer-renovatie-tips.php">Lees meer</a>
      </article>

      <article class="blogpost"
        data-aos="zoom-in"
        data-aos-duration="1000"
        data-aos-delay="1800">
        <img src="./images/vervangen_waterleiding.jpg" alt="Waterleiding vervangen tips">
        <h3>Wanneer Moet U Uw Waterleidingen Vervangen?</h3>
        <p>
          Oude of loden leidingen kunnen lekkages en gezondheidsrisico’s veroorzaken. Ontdek wanneer het tijd is om uw waterleidingen te vernieuwen en waar u op moet letten.
        </p>
        <a href="waterleiding-tips.php">Lees meer</a>
      </article>
    </div>

    <div class="blog-meer">
      <a href="blog.php" class="terug-link">Bekijk alle blogs &rarr;</a>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="section-light">
    <div class="contact-container">
      <h2>Contact opnemen</h2>

      <!-- Snelle bel-optie bovenaan -->
      <div class="contact-direct-call">
        <div class="call-badge">
          <svg width="22" height="22" viewBox="0 0 28 28" fill="none">
            <circle cx="14" cy="14" r="14" fill="#ee9a3a" />
            <path d="M19.5 17.2l-2.1-1a1.2 1.2 0 0 0-1.3.3l-.9 1.1a9.2 9.2 0 0 1-4.3-4.3l1.1-.9a1.2 1.2 0 0 0 .3-1.3l-1-2.1a1.2 1.2 0 0 0-1.3-.7l-2.2.5a1.2 1.2 0 0 0-1 1.2c0 6.1 5 11.1 11.1 11.1a1.2 1.2 0 0 0 1.2-1l.5-2.2a1.2 1.2 0 0 0-.7-1.3z" fill="none" stroke="#fff" stroke-width="2" />
          </svg>
          Spoed? Bel direct:
          <a href="tel:0612345678" class="call-number">06-12345678</a>
        </div>
      </div>

      <div class="contact-layout">
        <!-- Contact formulier -->
        <div class="contact-card">
          <h3>Stuur ons een bericht</h3>
          <form class="contact-form" method="POST" enctype="multipart/form-data" action="contact-verwerk.php">
            <div class="form-group">
              <label for="naam">Naam *</label>
              <input type="text" id="naam" name="naam" placeholder="Uw naam" required>
            </div>

            <div class="form-group">
              <label for="email">E-mailadres *</label>
              <input type="email" id="email" name="email" placeholder="Uw emailadres" required>
            </div>

            <div class="form-group">
              <label for="telefoon">Telefoonnummer *</label>
              <input type="tel" id="telefoon" name="telefoon" required placeholder="Uw telefoonnummer">
            </div>

            <div class="form-group">
              <label for="dienst">Voor welke dienst? *</label>
              <select id="dienst" name="dienst" required>
                <option value="">Kies een dienst...</option>
                <option value="lekkage">Lekkage opsporen en repareren</option>
                <option value="riolering">Rioleringswerk</option>
                <option value="badkamer">Badkamer renovatie</option>
                <option value="kraan">Kraan vervangen</option>
                <option value="waterleiding">Waterleidingen aanleggen/repareren</option>
                <option value="spoed">Spoedklus</option>
                <option value="offerte">Offerte aanvragen</option>
                <option value="overig">Overig</option>
              </select>
            </div>

            <div class="form-group">
              <label for="bericht">Bericht *</label>
              <textarea id="bericht" name="bericht" rows="5" required placeholder="Beschrijf uw probleem of vraag..."></textarea>
            </div>

            <div class="form-group">
              <label for="afbeelding">Foto's uploaden (optioneel)</label>
              <input type="file" id="afbeelding" name="afbeelding[]" multiple accept="image/*" capture="environment" class="file-input">
              <small>Maximaal 3 voorbeelden worden getoond, maar je kunt meer foto's selecteren.</small>
              <div id="preview" class="image-preview"></div>
            </div>

            <button type="submit" class="cta-btn">Bericht verzenden</button>
          </form>
        </div>

        <!-- FAQ sectie -->
        <div class="faq-section">
          <h3>Veelgestelde vragen</h3>
          <div class="faq-container">
            <div class="faq-item">
              <button class="faq-question">
                Hoe snel kunnen jullie langskomen?
                <span class="faq-icon">+</span>
              </button>
              <div class="faq-answer">
                <p>Voor spoedklussen proberen we binnen 30 minuten ter plaatse te zijn. Voor reguliere werkzaamheden plannen we meestal binnen 24-48 uur een afspraak in.</p>
              </div>
            </div>

            <div class="faq-item">
              <button class="faq-question">
                Wat zijn jullie tarieven?
                <span class="faq-icon">+</span>
              </button>
              <div class="faq-answer">
                <p>Bij Loodgietersbedrijf Paraat werken we altijd met transparante prijzen. Voordat we starten met de werkzaamheden, ontvang je van ons een duidelijke en vrijblijvende prijsindicatie of offerte op maat. Zo weet je precies waar je aan toe bent, zonder verrassingen achteraf.</p>
              </div>
            </div>

            <div class="faq-item">
              <button class="faq-question">
                Zijn jullie verzekerd?
                <span class="faq-icon">+</span>
              </button>
              <div class="faq-answer">
                <p>Ja, wij zijn volledig verzekerd voor aansprakelijkheid en hebben een beroepsaansprakelijkheidsverzekering. Alle werkzaamheden zijn gedekt.</p>
              </div>
            </div>
            <div class="faq-item">
              <button class="faq-question">
                Werken jullie ook buiten kantoortijden?
                <span class="faq-icon">+</span>
              </button>
              <div class="faq-answer">
                <p>Ja, wij zijn 24/7 bereikbaar voor spoedgevallen zoals lekkages, verstoppingen en cv-problemen. Ook ’s avonds en in het weekend staan wij voor je klaar.</p>
              </div>
            </div>

            <div class="faq-item">
              <button class="faq-question">
                Voeren jullie ook kleine klussen uit?
                <span class="faq-icon">+</span>
              </button>
              <div class="faq-answer">
                <p>Absoluut. Geen klus is te klein. Van het vervangen van een kraan tot het ontstoppen van een afvoer, wij helpen graag.</p>
              </div>
            </div>

            <div class="faq-item">
              <button class="faq-question">
                Helpen jullie ook met badkamer- of keukenrenovaties?
                <span class="faq-icon">+</span>
              </button>
              <div class="faq-answer">
                <p>Ja, wij voeren complete loodgieterswerkzaamheden uit bij renovaties en verbouwingen. Denk aan nieuwe leidingen, afvoeren en de installatie van sanitair.</p>
              </div>
            </div>

            <div class="faq-item">
              <button class="faq-question">
                Welke regio dekken jullie?
                <span class="faq-icon">+</span>
              </button>
              <div class="faq-answer">
                <p>Wij zijn gevestigd in Utrecht en werken in de volledige regio Utrecht en omstreken. Voor spoedklussen streven we ernaar om snel ter plaatse te zijn binnen dit gebied.</p>
              </div>
            </div>

            <div class="faq-item">
              <button class="faq-question">
                Kunnen jullie verstoppingen voorkomen?
                <span class="faq-icon">+</span>
              </button>
              <div class="faq-answer">
                <p>Wij geven advies om verstoppingen te voorkomen, zoals het regelmatig doorspoelen van leidingen en voorzichtig omgaan met vet, olie en etensresten. Daarnaast kunnen we preventief onderhoud uitvoeren.</p>
              </div>
            </div>

            <div class="faq-item">
              <button class="faq-question">
                Wat moet ik doen bij een lekkage voordat jullie arriveren?
                <span class="faq-icon">+</span>
              </button>
              <div class="faq-answer">
                <p>Sluit indien mogelijk de hoofdkraan af om waterschade te beperken en leg handdoeken neer om verspreiding van water tegen te gaan. Neem vervolgens direct contact met ons op zodat wij snel kunnen helpen.</p>
              </div>
            </div>

            <div class="faq-item">
              <button class="faq-question">
                Plaatsen jullie ook buitenkranen of regenafvoeren?
                <span class="faq-icon">+</span>
              </button>
              <div class="faq-answer">
                <p>Ja, wij installeren ook buitenkranen en zorgen voor een goede aansluiting op regenafvoeren of tuinsystemen. Dit doen we vorstvrij zodat je ze het hele jaar veilig kunt gebruiken.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  <!-- Footer -->
  <?php include 'partials/footer.html'; ?>
  <button id="backToTop" aria-label="Terug naar boven">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="20" height="20" aria-hidden="true">
      <path
        d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2 160 448c0 17.7 14.3 32 32 32s32-14.3 32-32l0-306.7L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"
        fill="currentColor" />
    </svg>
  </button>
  <script src="script.js"></script>
  <script>
    // Preloader
    window.addEventListener('load', function() {
      const preloader = document.getElementById('preloader');
      preloader.classList.add('fade-out');
      setTimeout(() => {
        preloader.style.display = 'none';
      }, 1000);
    });
    // Back to top button
    const backToTopBtn = document.getElementById('backToTop');
    window.addEventListener('scroll', () => {
      if (window.scrollY > 80) {
        backToTopBtn.classList.add('show');
      } else {
        backToTopBtn.classList.remove('show');
      }
    });
    backToTopBtn.addEventListener('click', () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      once: true // Animaties gebeuren maar één keer
    });
  </script>
</body>

</html>