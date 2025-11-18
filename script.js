const hamburger = document.querySelector('.hamburger');
const menu = document.querySelector('.hamburgerMenu');
const overlay = document.querySelector('.menu-overlay');
const closeBtn = document.querySelector('.close-btn');

function openMenu() {
    hamburger.classList.add('active');
    menu.classList.add('active');
    overlay.classList.add('active');
    document.body.classList.add('menu-open');
}
function closeMenu() {
    hamburger.classList.remove('active');
    menu.classList.remove('active');
    overlay.classList.remove('active');
    document.body.classList.remove('menu-open');
}

hamburger.addEventListener('click', openMenu);
closeBtn.addEventListener('click', closeMenu);
overlay.addEventListener('click', closeMenu);

// Sluit menu bij klik op link, BEHALVE dropdown-toggles
document.querySelectorAll('.mobileNavItem a').forEach(link => {
    link.addEventListener('click', function (e) {
        // Als het een dropdown-toggle is, sluit het menu NIET
        if (this.classList.contains('dropdown-toggle')) {
            return; // Stop hier, laat de dropdown-functie het overnemen
        }
        // Anders: sluit het menu zoals normaal
        closeMenu();
    });
});
// Smooth scroll for nav links
document.querySelectorAll('a[href^="#"]').forEach(link => {
    link.addEventListener('click', function (e) {
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            e.preventDefault();
            target.scrollIntoView({ behavior: 'smooth' });
            navMobile.classList.remove('open');
            hamburger.setAttribute('aria-expanded', 'false');
        }
    });
});

// Scroll-in animaties
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('inview');
        }
    });
}, { threshold: 0.15 });

document.querySelectorAll('.dienst, .blogpost, .overons-img img, .overons-content > div').forEach(el => {
    observer.observe(el);
});

// Navbar shrink effect on scroll
window.addEventListener('scroll', function () {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 80) { // pas 80 aan naar wens
        navbar.classList.add('shrink');
    } else {
        navbar.classList.remove('shrink');
    }
});

// FAQ toggle functionaliteit
document.addEventListener('DOMContentLoaded', function () {
    const faqQuestions = document.querySelectorAll('.faq-question');

    faqQuestions.forEach(question => {
        question.addEventListener('click', function () {
            const faqItem = this.parentElement;
            const isActive = faqItem.classList.contains('active');

            // Sluit alle andere FAQ items
            document.querySelectorAll('.faq-item').forEach(item => {
                item.classList.remove('active');
            });

            // Toggle huidige item
            if (!isActive) {
                faqItem.classList.add('active');
            }
        });
    });
});

const fileInput = document.getElementById('afbeelding');
const preview = document.getElementById('preview');

fileInput.addEventListener('change', function (event) {
    const files = Array.from(event.target.files);
    preview.innerHTML = '';

    // Toon maximaal 3 thumbnails
    const maxThumbnails = 3;
    const filesToShow = files.slice(0, maxThumbnails);

    filesToShow.forEach((file, idx) => {
        if (file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = function (e) {
                const container = document.createElement('div');
                container.className = 'thumb-container';

                const img = document.createElement('img');
                img.src = e.target.result;

                const btn = document.createElement('button');
                btn.type = 'button';
                btn.className = 'remove-thumb';
                btn.innerHTML = '&times;';
                btn.onclick = function () {
                    // Verwijder het bestand uit de file input
                    const dataTransfer = new DataTransfer();
                    Array.from(fileInput.files).forEach((f, i) => {
                        if (i !== idx) dataTransfer.items.add(f);
                    });
                    fileInput.files = dataTransfer.files;

                    // Update preview
                    fileInput.dispatchEvent(new Event('change'));
                };

                container.appendChild(img);
                container.appendChild(btn);
                preview.appendChild(container);
            };
            reader.readAsDataURL(file);
        }
    });

    // Toon hoeveel bestanden er in totaal zijn geselecteerd
    if (files.length > maxThumbnails) {
        const extraInfo = document.createElement('div');
        extraInfo.style.cssText = 'margin-top: 10px; color: #666; font-size: 0.9em;';
        extraInfo.textContent = `${files.length} bestanden geselecteerd (${maxThumbnails} voorbeelden getoond)`;
        preview.appendChild(extraInfo);
    }
});

document.addEventListener("DOMContentLoaded", function () {
    // Check of de preloader al is getoond
    if (localStorage.getItem('preloaderShown')) {
        // Verberg direct de preloader
        document.querySelector('.preloader').style.display = 'none';
    } else {
        // Toon de preloader en zet de flag
        localStorage.setItem('preloaderShown', 'true');
        // Je bestaande fade-out code:
        setTimeout(function () {
            document.querySelector('.preloader').classList.add('fade-out');
            setTimeout(function () {
                document.querySelector('.preloader').style.display = 'none';
            }, 1000);
        }, 1200); // of jouw gewenste tijd
    }
});

// Scrollspy: update hash in URL bij scrollen
const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('.nav-links a, .mobileNavLinks a');

window.addEventListener('scroll', () => {
    let current = '';
    sections.forEach(section => {
        const sectionTop = section.offsetTop - 100; // 100px marge voor sticky nav
        if (window.scrollY >= sectionTop) {
            current = section.getAttribute('id');
        }
    });

    if (current) {
        // Update de URL hash zonder te scrollen
        history.replaceState(null, null, '#' + current);

        // (optioneel) Highlight de actieve link
        navLinks.forEach(link => {
            link.classList.toggle('active', link.getAttribute('href') === '#' + current);
        });
    }
});

// Mobiel: toggle dropdown
document.querySelectorAll('.dropdown-toggle').forEach(btn => {
    // ensure aria attribute exists for accessibility
    btn.setAttribute('aria-expanded', 'false');
    btn.addEventListener('click', function (e) {
        e.preventDefault();
        const parent = this.parentElement;
        const opened = parent.classList.toggle('open');
        this.setAttribute('aria-expanded', opened ? 'true' : 'false');
    });
});

const diensten = document.querySelectorAll('.dienst');

const dienstObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting && !entry.target.classList.contains('inview')) {
            entry.target.classList.add('inview');
            observer.unobserve(entry.target); // animatie gebeurt maar één keer
        }
    });
}, {
    threshold: 0.2
});

diensten.forEach(dienst => dienstObserver.observe(dienst));

document.addEventListener('DOMContentLoaded', function () {
    const track = document.getElementById('reviewSliderTrack');
    const slides = Array.from(track.children);
    const dotsContainer = document.getElementById('reviewDots');
    let index = 0;
    let slidesPerView = window.innerWidth > 700 ? 2 : 1;

    function updateSlidesPerView() {
        slidesPerView = window.innerWidth > 700 ? 2 : 1;
        showSlide(index);
        updateDots();
    }

    function showSlide(i) {
        index = (i + slides.length) % slides.length;
        track.style.transform = `translateX(-${index * (100 / slidesPerView)}%)`;
        updateDots();
    }

    function updateDots() {
        dotsContainer.innerHTML = '';
        const dotCount = Math.ceil(slides.length / slidesPerView);
        for (let i = 0; i < dotCount; i++) {
            const dot = document.createElement('button');
            dot.classList.toggle('active', i === Math.floor(index / slidesPerView));
            dot.addEventListener('click', () => showSlide(i * slidesPerView));
            dotsContainer.appendChild(dot);
        }
    }

    // Swipe/drag support
    let startX = 0;
    let isDragging = false;

    track.addEventListener('mousedown', (e) => {
        isDragging = true;
        startX = e.pageX;
        track.style.transition = 'none';
    });
    document.addEventListener('mousemove', (e) => {
        if (!isDragging) return;
        const diff = e.pageX - startX;
        track.style.transform = `translateX(${-index * (100 / slidesPerView) + (diff / track.offsetWidth) * 100}%)`;
    });
    document.addEventListener('mouseup', (e) => {
        if (!isDragging) return;
        isDragging = false;
        track.style.transition = '';
        const diff = e.pageX - startX;
        if (diff > 80) showSlide(index - slidesPerView);
        else if (diff < -80) showSlide(index + slidesPerView);
        else showSlide(index);
    });

    // Touch support
    track.addEventListener('touchstart', (e) => {
        isDragging = true;
        startX = e.touches[0].pageX;
        track.style.transition = 'none';
    });
    track.addEventListener('touchmove', (e) => {
        if (!isDragging) return;
        const diff = e.touches[0].pageX - startX;
        track.style.transform = `translateX(${-index * (100 / slidesPerView) + (diff / track.offsetWidth) * 100}%)`;
    });
    track.addEventListener('touchend', (e) => {
        if (!isDragging) return;
        isDragging = false;
        track.style.transition = '';
        const diff = e.changedTouches[0].pageX - startX;
        if (diff > 60) showSlide(index - slidesPerView);
        else if (diff < -60) showSlide(index + slidesPerView);
        else showSlide(index);
    });

    window.addEventListener('resize', updateSlidesPerView);

    // Init
    updateSlidesPerView();

    // Automatisch schuiven elke 9 seconden
    setInterval(() => {
        showSlide(index + slidesPerView);
    }, 9000);
});