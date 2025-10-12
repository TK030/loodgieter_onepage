<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Loodgieter Blog & Tips | Advies & Nieuws van Loodgieter Paraat</title>
    <meta name="description" content="Lees de blog van Loodgieter Paraat uit Utrecht. Praktische tips, advies en nieuws over loodgieterswerk, badkamer renovatie, cv-installaties, riolering en meer.">

    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">

    <link rel="icon" href="./images/loodgietersbedrijfParaatAchtergrond_logo.png" type="image/png">

    <!-- Open Graph -->
    <meta property="og:title" content="Loodgieter Blog & Tips – Loodgieter Paraat">
    <meta property="og:description" content="Praktische loodgieter tips en nieuws. Van badkamer renovatie tot cv-onderhoud: lees de blog van Loodgieter Paraat.">
    <meta property="og:image" content="./images/loodgietersbedrijfParaatAchtergrond_logo.png">
    <meta property="og:url" content="https://www.loodgieterparaat.nl/blog">
    <meta property="og:type" content="website">

    <!-- Canonical -->
    <link rel="canonical" href="https://www.loodgieterparaat.nl/blog">
    <style>
        /* Mobile Navigation Bar */
        .mobile-Nav {
            display: none;
            /* Standaard verborgen */
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            background-color: var(--wit);
            box-shadow: 0 2px 4px rgba(31, 75, 110, 0.08);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            height: 70px;
            box-sizing: border-box;
        }

        /* Logo in mobile nav */
        .opennavLogo img {
            max-height: 90px;
            width: auto;
            padding-top: 25px;
        }

        /* Hamburger Button */
        .hamburger {
            cursor: pointer;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            width: 32px;
            height: 28px;
            background: transparent;
            border: none;
            padding: 0;
            z-index: 1001;
        }

        /* Hamburger Bars */
        .bar {
            width: 32px;
            height: 4px;
            background-color: var(--blauw);
            border-radius: 2px;
            margin: 2px 0;
            transition: all 0.3s linear;
        }

        /* Hamburger Animation when Active */
        .hamburger.active .bar:nth-child(1) {
            transform: rotate(-45deg) translate(-5px, 6px);
        }

        .hamburger.active .bar:nth-child(2) {
            opacity: 0;
        }

        .hamburger.active .bar:nth-child(3) {
            transform: rotate(45deg) translate(-5px, -6px);
        }

        /* Menu Overlay */
        .menu-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(31, 75, 110, 0.5);
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
            z-index: 999;
        }

        .menu-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        /* Hamburger Menu (Slide-in from right) */
        .hamburgerMenu {
            position: fixed;
            top: 0;
            right: -100%;
            /* Standaard buiten beeld */
            width: 100%;
            max-width: 400px;
            height: 100%;
            background: var(--wit);
            transition: right 0.3s ease;
            z-index: 1000;
            overflow-y: auto;
            padding: 2rem 1.5rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            box-shadow: -4px 0 20px rgba(31, 75, 110, 0.15);
        }

        .hamburgerMenu.active {
            right: 0;
            /* Schuift in beeld */
        }

        /* Close Button */
        .close-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            background: none;
            border: none;
            font-size: 2rem;
            color: var(--blauw);
            cursor: pointer;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: background-color 0.2s;
        }

        .close-btn:hover {
            background-color: rgba(31, 75, 110, 0.1);
        }

        /* Logo in hamburger menu */
        .navLogo {
            margin-bottom: 2rem;
        }

        .navLogo img {
            max-height: 60px;
            width: auto;
        }

        /* Mobile Navigation Links */
        .mobileNavLinks {
            list-style-type: none;
            padding: 0;
            margin: 0;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
        }

        .mobileNavItem {
            width: 100%;
            text-align: center;
        }

        .mobileNavItem a {
            color: var(--blauw);
            text-decoration: none;
            font-size: 1.2rem;
            font-weight: 600;
            padding: 15px 20px;
            border-radius: 12px;
            display: block;
            transition: all 0.3s ease;
            width: 100%;
            box-sizing: border-box;
        }

        .mobileNavItem a:hover {
            background-color: rgba(31, 75, 110, 0.1);
            color: var(--oranje);
            transform: translateX(5px);
        }

        /* Special styling for call button */
        .mobileNavItem:last-child a {
            background: linear-gradient(135deg, var(--oranje), #f4a853);
            color: var(--wit);
            font-weight: bold;
            margin-top: 1rem;
            box-shadow: 0 4px 16px rgba(238, 154, 58, 0.3);
        }

        .mobileNavItem:last-child a:hover {
            background: var(--blauw);
            color: var(--wit);
            transform: translateY(-2px);
        }

        /* Social Buttons */
        .social-buttons {
            display: flex;
            gap: 15px;
            margin: 2rem 0 1rem 0;
        }

        .social-buttons a {
            width: 44px;
            height: 44px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(31, 75, 110, 0.1);
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .social-buttons a:hover {
            background: var(--oranje);
            transform: translateY(-2px);
        }

        .social-buttons a img {
            width: 24px;
            height: 24px;
        }

        /* CTA Button in menu */
        .cta-button {
            background: linear-gradient(135deg, var(--oranje), #f4a853);
            color: var(--wit);
            padding: 12px 24px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            font-size: 1rem;
            margin-top: 1rem;
            box-shadow: 0 4px 16px rgba(238, 154, 58, 0.3);
            transition: all 0.3s ease;
            display: inline-block;
            text-align: center;
        }

        .cta-button:hover {
            background: var(--blauw);
            color: var(--wit);
            transform: translateY(-2px);
        }

        /* Prevent body scroll when menu is open */
        body.menu-open {
            overflow: hidden;
        }

        .blog-overzicht-main {
            max-width: 1200px;
            margin: 4em auto 2em auto;
            padding-top: 5em;
        }

        .blog-overzicht-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            max-width: 1100px;
            margin: 0 auto;
            width: 100%;
            box-sizing: border-box;
            padding: 0 1rem;
        }

        .blog-overzicht-card {
            background: var(--wit, #fff);
            color: var(--blauw, #1f4b6e);
            border-radius: 12px;
            box-shadow: var(--schaduw, 0 4px 15px rgba(31, 75, 110, 0.1));
            padding: 1.5rem 1rem;
            display: flex;
            flex-direction: column;
            gap: 1rem;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .blog-overzicht-card:hover {
            transform: translateY(-4px) scale(1.02);
            box-shadow: 0 4px 16px rgba(31, 75, 110, 0.10);
        }

        .blog-overzicht-card img {
            width: 100%;
            height: 140px;
            object-fit: cover;
            border-radius: 8px;
        }

        .blog-overzicht-card a {
            color: var(--wit, #fff);
            text-decoration: none;
            font-weight: bold;
            margin-top: auto;
            transition: color 0.2s;
            font-size: 1.1rem;
            display: flex;
            border: #1f4b6e 1px solid;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            justify-content: center;
            background-color: #1f4b6e;
        }

        .blog-overzicht-card a:hover {
            color: var(--oranje, #ee9a3a);
        }

        @media (max-width: 1000px) {
            .blog-overzicht-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 700px) {
            .blog-overzicht-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <?php include 'partials/nav.html'; ?>
    <main class="blog-overzicht-main">
        <div class="blog-post-footer">
            <a href="index.php#blog" class="terug-link">&larr; Terug naar home</a>
        </div>
        <h1>Alle blogs</h1>
        <div class="blog-overzicht-grid">
            <article class="blog-overzicht-card">
                <img src="./images/ontstoppen_afvoer.jpg" alt="Blog loodgieter tips">
                <h3>5 Tips om Verstoppingen te Voorkomen</h3>
                <p>Voorkom verstoppingen in huis met deze eenvoudige tips van onze loodgieters.</p>
                <a href="verstoppingen-tips.php">Lees meer</a>
            </article>
            <article class="blog-overzicht-card">
                <img src="./images/lekkage.jpg" alt="Blog lekkage oplossen">
                <h3>Lekkage? Dit Moet U Doen!</h3>
                <p>Ontdek wat u direct kunt doen bij een lekkage en wanneer u ons moet bellen.</p>
                <a href="lekkage-tips.php">Lees meer</a>
            </article>
            <article class="blog-overzicht-card">
                <img src="./images/badkamer-renovatie.jpg" alt="Badkamer renovatie tips">
                <h3>Badkamer Renovatie: 7 Praktische Tips voor een Succesvolle Verbouwing</h3>
                <p>
                    Ga je je badkamer verbouwen? Met deze 7 praktische tips voorkom je verrassingen en geniet je straks van een prachtige, functionele badkamer.
                </p>
                <a href="badkamer-renovatie-tips.php">Lees meer</a>
            </article>
            <article class="blog-overzicht-card">
                <img src="./images/vervangen_waterleiding.jpg" alt="Waterleiding vervangen tips">
                <h3>Wanneer Moet U Uw Waterleidingen Vervangen?</h3>
                <p>
                    Oude of loden leidingen kunnen lekkages en gezondheidsrisico’s veroorzaken. Ontdek wanneer het tijd is om uw waterleidingen te vernieuwen en waar u op moet letten.
                </p>
                <a href="waterleiding-tips.php">Lees meer</a>
            </article>
            <article class="blog-overzicht-card">
                <img src="./images/plaatsen_radiator.jpg" alt="Radiator ontluchten tips">
                <h3>Wanneer Moet U Uw Radiatoren Ontluchten?</h3>
                <p>
                    Oude of loden leidingen kunnen lekkages en gezondheidsrisico’s veroorzaken. Ontdek wanneer het tijd is om uw radiatoren te ontluchten en waar u op moet letten.
                </p>
                <a href="radiator-tips.php">Lees meer</a>
            </article>
            <article class="blog-overzicht-card">
                <img src="./images/plaatsen_radiator.jpg" alt="Radiator plaatsen tips">
                <h3>Wanneer Moet U Uw Radiatoren Plaatsen?</h3>
                <p>
                    Oude of loden leidingen kunnen lekkages en gezondheidsrisico’s veroorzaken. Ontdek wanneer het tijd is om uw radiatoren te plaatsen en waar u op moet letten.
                </p>
                <a href="radiator-plaatsen-tips.php">Lees meer</a>
            </article>
            <article class="blog-overzicht-card">
                <img src="./images/badkamer-renovatie.jpg" alt="Badkamer renovatie tips">
                <h3>Wanneer Moet U Uw Badkamer Renoveren?</h3>
                <p>
                    Oude of loden leidingen kunnen lekkages en gezondheidsrisico’s veroorzaken. Ontdek wanneer het tijd is om uw badkamer te renoveren en waar u op moet letten.
                </p>
                <a href="douche-bad-aansluiten-tips.php">Lees meer</a>
            </article>
            <article class="blog-overzicht-card">
                <img src="./images/ontstoppen_afvoer-2.jpg" alt="Afvoer ontstoppen tips">
                <h3>Wanneer Moet U Uw Afvoer Ontstoppen?</h3>
                <p>
                    Oude of loden leidingen kunnen lekkages en gezondheidsrisico’s veroorzaken. Ontdek wanneer het tijd is om uw afvoer te ontstoppen en waar u op moet letten.
                </p>
                <a href="keuken-kraan-afvoer-vervangen-tips.php">Lees meer</a>
            </article>
            <article class="blog-overzicht-card">
                <img src="./images/aanleg_sanitair.jpg" alt="Sanitair vervangen tips">
                <h3>Wanneer Moet U Uw Sanitair Vervangen?</h3>
                <p>
                    Oude of loden leidingen kunnen lekkages en gezondheidsrisico’s veroorzaken. Ontdek wanneer het tijd is om uw sanitair te vervangen en waar u op moet letten.
                </p>
                <a href="sanitair-vervangen-tips.php">Lees meer</a>
            </article>
            <article class="blog-overzicht-card">
                <img src="./images/reparatie_waterleiding.jpg" alt="waterdruk problemen tips">
                <h3>Wanneer Moet U Uw Waterdruk Problemen Aanpakken?</h3>
                <p>
                    Oude of loden leidingen kunnen lekkages en gezondheidsrisico’s veroorzaken. Ontdek wanneer het tijd is om uw waterdruk problemen aan te pakken en waar u op moet letten.
                </p>
                <a href="waterdruk-problemen-tips.php">Lees meer</a>
            </article>
            <article class="blog-overzicht-card">
                <img src="./images/aanleg_cv-leiding.jpg" alt="leidingen verleggen in badkamer tips">
                <h3>Wanneer Moet U Uw Leidingen Verleggen in de Badkamer?</h3>
                <p>
                    Oude of loden leidingen kunnen lekkages en gezondheidsrisico’s veroorzaken. Ontdek wanneer het tijd is om uw leidingen te verleggen in de badkamer en waar u op moet letten.
                </p>
                <a href="leidingen-verleggen-badkamer-tips.php">Lees meer</a>
            </article>
            <article class="blog-overzicht-card">
                <img src="./images/spoeddienst.jpg" alt="spoed loodgieter tips">
                <h3>Wanneer Moet U Uw Spoed Loodgieter Inschakelen?</h3>
                <p>
                    Oude of loden leidingen kunnen lekkages en gezondheidsrisico’s veroorzaken. Ontdek wanneer het tijd is om uw spoed loodgieter in te schakelen en waar u op moet letten.
                </p>
                <a href="spoed-loodgieter-tips.php">Lees meer</a>
            </article>
        </div>
    </main>
    <footer class="main-footer">
        <div class="footer-top">
            <div class="footer-col">
                <h3>Sitemap</h3>
                <ul>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./index.php#over">Over ons</a></li>
                    <li><a href="./index.php#diensten">Diensten</a></li>
                    <li><a href="./index.php#blog">Blog</a></li>
                    <li><a href="./projecten.php">Projecten</a></li>
                    <li><a href="./index.php#contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h3>Contact</h3>
                <ul>
                    <li><a href="mailto:info@loodgieterparaat.nl">info@loodgieterparaat.nl</a></li>
                    <li>
                        <a href="tel:0612345678" style="color:#ee9a3a;font-weight:bold;">
                            06-12345678
                        </a>
                    </li>
                    <li>Utrecht, Nederland</li>
                    <li>KVK: 12345678</li>
                    <li>BTW: NL123456789B01</li>
                    <li>Bank: NL91ABNA0417164300</li>
                </ul>
            </div>
            <div class="footer-col">
                <h3>Social media</h3>
                <div class="footer-socials">
                    <a href="#" target="_blank" aria-label="Facebook" class="footer-icon">
                        <!-- Facebook SVG -->
                        <svg width="40" height="40" viewBox="0 0 32 32" fill="none">
                            <circle cx="16" cy="16" r="16" fill="#1f4b6e" />
                            <path
                                d="M20.5 16H18V25H15V16H13V13.5H15V12C15 10.62 15.62 9 18 9H20.5V11.5H19C18.45 11.5 18 11.95 18 12.5V13.5H20.5V16Z"
                                fill="#ee9a3a" />
                        </svg>
                    </a>
                    <a href="#" target="_blank" aria-label="Instagram" class="footer-icon">
                        <!-- Instagram SVG -->
                        <svg width="40" height="40" viewBox="0 0 32 32" fill="none">
                            <circle cx="16" cy="16" r="16" fill="#1f4b6e" />
                            <rect x="10" y="10" width="12" height="12" rx="4" stroke="#ee9a3a" stroke-width="2"
                                fill="none" />
                            <circle cx="16" cy="16" r="3" stroke="#ee9a3a" stroke-width="2" fill="none" />
                            <circle cx="21" cy="11" r="1" fill="#ee9a3a" />
                        </svg>
                    </a>
                    <a href="#" target="_blank" aria-label="LinkedIn" class="footer-icon">
                        <!-- LinkedIn SVG -->
                        <svg width="40" height="40" viewBox="0 0 32 32" fill="none">
                            <circle cx="16" cy="16" r="16" fill="#1f4b6e" />
                            <rect x="11" y="14" width="2" height="7" fill="#ee9a3a" />
                            <rect x="19" y="17" width="2" height="4" fill="#ee9a3a" />
                            <rect x="11" y="11" width="2" height="2" fill="#ee9a3a" />
                            <rect x="15" y="17" width="2" height="4" fill="#ee9a3a" />
                            <rect x="15" y="14" width="2" height="2" fill="#ee9a3a" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="footer-col footer-map">
                <h3>Locatie</h3>
                <iframe src="https://www.google.com/maps?q=Utrecht&output=embed" width="100%" height="140" style="border:0;"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
        <hr>
        <div class="footer-bottom">
            <span>&copy; 2025 Loodgieter Paraat</span>
            <span class="footer-divider">-</span>
            <a href="./legal/privacy-policy.php">Privacy Policy</a>
            <span class="footer-divider">-</span>
            <a href="./legal/cookie-policy.php">Cookie Policy</a>
            <span class="footer-divider">-</span>
            <a href="./legal/algemene-voorwaarden.php">Algemene Voorwaarden</a>
            <span class="footer-divider">-</span>
            <a href="https://www.linkedin.com/in/tahak030/" target="_blank" style=" color: rgb(236, 236, 236);
                    text-decoration: none;">
                Gerealiseerd door Taha Karaman
            </a>
        </div>
    </footer>
    <button id="backToTop" aria-label="Terug naar boven">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="20" height="20" aria-hidden="true">
            <path
                d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2 160 448c0 17.7 14.3 32 32 32s32-14.3 32-32l0-306.7L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"
                fill="currentColor" />
        </svg>
    </button>
    <script src="script.js"></script>
    <script>
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
</body>

</html>