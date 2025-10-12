<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>404 - Pagina niet gevonden | Loodgieter Paraat</title>
    <meta name="robots" content="noindex, follow">
    <meta name="description" content="Deze pagina bestaat niet. Ga terug naar de startpagina van Loodgieter Paraat en ontdek onze loodgietersdiensten in Utrecht en omgeving.">

    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">

    <link rel="icon" href="./images/loodgietersbedrijfParaatAchtergrond_logo.png" type="image/png">

    <!-- Open Graph -->
    <meta property="og:title" content="404 - Pagina niet gevonden | Loodgieter Paraat">
    <meta property="og:description" content="De pagina die je zoekt is niet beschikbaar. Ga terug naar de homepagina of bekijk onze diensten.">
    <meta property="og:image" content="./images/loodgietersbedrijfParaat_logo.png">
    <meta property="og:type" content="website">

    <!-- Canonical -->
    <link rel="canonical" href="https://www.loodgieterparaat.nl/404">
</head>

<body>
    <!-- Navigatie -->
    <?php include 'partials/nav.html'; ?>
    <main class="not-found">
        <div class="container">
            <h1>404</h1>
            <h3>Pagina niet gevonden</h3>
            <p>Oeps! De pagina die je zoekt bestaat niet (meer) of is verplaatst.</p>
            <a href="index.php" class="button">Terug naar de homepage</a>
        </div>
    </main>
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