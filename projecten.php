<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Bekijk onze recente projecten en ontdek hoe Loodgieter Paraat hoogwaardige loodgietersdiensten levert. Van renovaties tot installaties, wij staan voor kwaliteit en vakmanschap.">
    <link rel="icon" type="image/x-icon" href="images/loodgietersbedrijfParaatAchtergrond_logo.png">
    <link rel="stylesheet" href="style.css">
    <title>Projecten - Loodgieter Paraat</title>
    <style>
        .projecten {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
            padding-top: 80px;
        }

        .projecten h2 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 2rem;
        }

        .project-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
        }

        .project-item {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.15);
            cursor: pointer;
            background: #000;
        }

        .project-item img,
        .project-item video {
            width: 100%;
            height: 240px;
            object-fit: cover;
            display: block;
            border-radius: 12px;
            transition: transform 0.4s ease;
        }

        .project-item:hover img,
        .project-item:hover video {
            transform: scale(1.05);
        }

        /* captions voor video's */
        .project-item.video {
            background: #fff;
            /* witte achtergrond */
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.15);
            border-radius: 12px;
            overflow: hidden;
        }

        .project-item.video video {
            border-radius: 12px 12px 0 0;
            /* afgerond alleen boven */
        }

        /* Lightbox styles */
        .lightbox {
            position: fixed;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(0, 0, 0, 0.9);
            visibility: hidden;
            opacity: 0;
            transition: opacity 0.25s ease, visibility 0.25s;
            z-index: 9999;
        }

        .lightbox.show {
            visibility: visible;
            opacity: 1;
        }

        .lightbox-content {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0;
            box-sizing: border-box;
            flex-direction: column;
        }

        .lightbox-content img {
            max-width: calc(100vw - 20px);
            max-height: calc(100vh - 60px);
            /* leave space for caption */
            width: auto;
            height: auto;
            object-fit: contain;
            border-radius: 0;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            display: block;
            margin: 0 auto;
        }

        .lightbox-close {
            position: absolute;
            top: 20px;
            right: 20px;
            background: transparent;
            border: none;
            color: #fff;
            font-size: 32px;
            cursor: pointer;
            line-height: 1;
            padding: 6px 10px;
        }

        .lightbox-caption {
            margin-top: 12px;
            color: #fff;
            font-size: 0.95rem;
            text-align: center;
            max-width: 90vw;
            word-wrap: break-word;
        }
    </style>
</head>

<body>
    <?php include 'partials/nav.html'; ?>

    <section class="projecten">
        <h2>Onze Projecten</h2>
        <div class="project-grid">

            <!-- FOTO'S Project 1-36 -->
            <div class="project-item"><img src="./projecten/project1.jpg" alt="Project 1">
            </div>
            <div class="project-item"><img src="./projecten/project2.jpg" alt="Project 2">
            </div>
            <div class="project-item"><img src="./projecten/project3.jpg" alt="Project 3">
            </div>
            <div class="project-item"><img src="./projecten/project4.jpg" alt="Project 4">
            </div>
            <div class="project-item"><img src="./projecten/project5.jpg" alt="Project 5">
            </div>
            <div class="project-item"><img src="./projecten/project6.jpg" alt="Project 6">
            </div>
            <div class="project-item"><img src="./projecten/project7.jpg" alt="Project 7">
            </div>
            <div class="project-item"><img src="./projecten/project8.jpg" alt="Project 8">
            </div>
            <div class="project-item"><img src="./projecten/project9.jpg" alt="Project 9">
            </div>
            <div class="project-item"><img src="./projecten/project10.jpg" alt="Project 10">
            </div>
            <div class="project-item"><img src="./projecten/project11.jpg" alt="Project 11">
            </div>
            <div class="project-item"><img src="./projecten/project12.jpg" alt="Project 12">
            </div>
            <div class="project-item"><img src="./projecten/project13.jpg" alt="Project 13">
            </div>
            <div class="project-item"><img src="./projecten/project14.jpg" alt="Project 14">
            </div>
            <div class="project-item"><img src="./projecten/project15.jpg" alt="Project 15">
            </div>
            <div class="project-item"><img src="./projecten/project16.jpg" alt="Project 16">
            </div>
            <div class="project-item"><img src="./projecten/project17.jpg" alt="Project 17">
            </div>
            <div class="project-item"><img src="./projecten/project18.jpg" alt="Project 18">
            </div>
            <div class="project-item"><img src="./projecten/project19.jpg" alt="Project 19">
            </div>
            <div class="project-item"><img src="./projecten/project20.jpg" alt="Project 20">
            </div>
            <div class="project-item"><img src="./projecten/project21.jpg" alt="Project 21">
            </div>
            <div class="project-item"><img src="./projecten/project22.jpg" alt="Project 22">
            </div>
            <div class="project-item"><img src="./projecten/project23.jpg" alt="Project 23">
            </div>
            <div class="project-item"><img src="./projecten/project24.jpg" alt="Project 24">
            </div>
            <div class="project-item"><img src="./projecten/project25.jpg" alt="Project 25">
            </div>
            <div class="project-item"><img src="./projecten/project26.jpg" alt="Project 26">
            </div>
            <div class="project-item"><img src="./projecten/project27.jpg" alt="Project 27">
            </div>
            <div class="project-item"><img src="./projecten/project28.jpg" alt="Project 28">
            </div>
            <div class="project-item"><img src="./projecten/project29.jpg" alt="Project 29">
            </div>
            <div class="project-item"><img src="./projecten/project30.jpg" alt="Project 30">
            </div>
            <div class="project-item"><img src="./projecten/project31.jpg" alt="Project 31">
            </div>
            <div class="project-item"><img src="./projecten/project32.jpg" alt="Project 32">
            </div>
            <div class="project-item"><img src="./projecten/project33.jpg" alt="Project 33">
            </div>
            <div class="project-item"><img src="./projecten/project34.jpg" alt="Project 34">
            </div>

            <!-- VIDEO's Project 35-37 -->
            <div class="project-item video">
                <video controls>
                    <source src="./projecten/project35.mp4" type="video/mp4">
                </video>
            </div>

            <div class="project-item video">
                <video controls>
                    <source src="./projecten/project36.mp4" type="video/mp4">
                </video>
            </div>

            <div class="project-item video">
                <video controls>
                    <source src="./projecten/project37.mp4" type="video/mp4">
                </video>
            </div>
        </div>

        <!-- Lightbox markup -->
        <div id="lightbox" class="lightbox" aria-hidden="true">
            <button class="lightbox-close" aria-label="Sluit">&times;</button>
            <div class="lightbox-content">
                <img id="lightbox-img" src="" alt="">
                <div id="lightbox-caption" class="lightbox-caption"></div>
            </div>
        </div>
    </section>
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
        // Simple lightbox for project images
        (function() {
            const lightbox = document.getElementById('lightbox');
            const lightboxImg = document.getElementById('lightbox-img');
            const lightboxCaption = document.getElementById('lightbox-caption');
            const closeBtn = document.querySelector('.lightbox-close');

            function openLightbox(imgEl) {
                // imgEl is the clicked thumbnail element
                const src = imgEl.src;
                const alt = imgEl.alt || '';
                lightboxImg.src = src;
                lightboxImg.alt = alt;
                lightboxCaption.textContent = alt;
                // reset explicit sizing
                lightboxImg.style.width = '';
                lightboxImg.style.height = '';
                lightbox.classList.add('show');
                lightbox.setAttribute('aria-hidden', 'false');
                document.body.style.overflow = 'hidden';

                // When the full image loads, compute a size ~1.8x the thumbnail (capped by natural size and viewport)
                lightboxImg.onload = () => {
                    const naturalW = lightboxImg.naturalWidth || lightboxImg.width;
                    const naturalH = lightboxImg.naturalHeight || lightboxImg.height;
                    const thumbRect = imgEl.getBoundingClientRect();
                    const targetWFromThumb = thumbRect.width * 1.8; // 180% of thumbnail
                    const maxW = Math.max(window.innerWidth - 20, 50);
                    const maxH = Math.max(window.innerHeight - 20, 50);

                    // Start with width-based sizing
                    let targetW = Math.min(naturalW, targetWFromThumb, maxW);
                    let targetH = targetW * (naturalH / naturalW);

                    // If height exceeds viewport, switch to height-based sizing
                    if (targetH > maxH) {
                        targetH = Math.min(naturalH, maxH);
                        targetW = targetH * (naturalW / naturalH);
                    }

                    // Apply sizing as px to ensure the image appears zoomed relative to thumbnail
                    lightboxImg.style.width = Math.round(targetW) + 'px';
                    lightboxImg.style.height = Math.round(targetH) + 'px';
                };
            }

            function closeLightbox() {
                lightbox.classList.remove('show');
                lightbox.setAttribute('aria-hidden', 'true');
                lightboxImg.src = '';
                lightboxImg.alt = '';
                lightboxCaption.textContent = '';
                lightboxImg.onload = null;
                lightboxImg.style.width = '';
                lightboxImg.style.height = '';
                document.body.style.overflow = '';
            }

            // delegate clicks on project images
            document.querySelectorAll('.project-item').forEach(item => {
                const img = item.querySelector('img');
                // only attach for images (not videos)
                if (img) {
                    img.style.cursor = 'zoom-in';
                    img.addEventListener('click', (e) => {
                        e.preventDefault();
                        openLightbox(img);
                    });
                }
            });

            closeBtn.addEventListener('click', closeLightbox);

            // click outside content closes
            lightbox.addEventListener('click', (e) => {
                if (e.target === lightbox) closeLightbox();
            });

            // ESC to close
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && lightbox.classList.contains('show')) {
                    closeLightbox();
                }
            });
        })();
    </script>
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true // Animaties gebeuren maar één keer
        });
    </script>
</body>

</html>