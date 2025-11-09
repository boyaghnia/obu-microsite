import './bootstrap';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

// Register ScrollTrigger plugin
gsap.registerPlugin(ScrollTrigger);

document.addEventListener('DOMContentLoaded', () => {
    // Animasi judul (jika ada)
    const judulElement = document.querySelector('#judul');
    if (judulElement) {
        gsap.from('#judul', {
            duration: 1.2,
            scale: 0,
            rotation: 360,
            ease: 'elastic.out(1, 0.5)',
        });
    }

    // Hero Slider
    initHeroSlider();

    // Profil Section ScrollTrigger Animations
    initProfilAnimations();

    // Layanan Section ScrollTrigger Animations
    initLayananAnimations();

    // Gallery Section ScrollTrigger Animations
    initGaleriAnimations();
});

function initHeroSlider() {
    const slides = document.querySelectorAll('.hero-slide');
    const indicators = document.querySelectorAll('.slide-indicator');

    if (slides.length === 0) {
        console.log('No hero slides found, skipping slider initialization');
        return;
    }

    let currentIndex = 0;

    console.log('Hero slider initialized with', slides.length, 'slides');

    // Set first slide as active immediately
    slides[0].style.opacity = '1';

    if (indicators.length > 0 && indicators[0]) {
        indicators[0].classList.add('bg-white', 'w-8');
        indicators[0].classList.remove('bg-white/50');
    }

    function changeSlide() {
        const currentSlide = slides[currentIndex];
        const nextIndex = (currentIndex + 1) % slides.length;
        const nextSlide = slides[nextIndex];

        console.log('Changing slide from', currentIndex, 'to', nextIndex);

        // Fade out current slide
        gsap.to(currentSlide, {
            opacity: 0,
            duration: 1,
            ease: 'power2.inOut',
        });

        // Fade in next slide
        gsap.to(nextSlide, {
            opacity: 1,
            duration: 1,
            ease: 'power2.inOut',
        });

        // Update indicators
        if (indicators.length > 0) {
            indicators[currentIndex].classList.remove('bg-white', 'w-8');
            indicators[currentIndex].classList.add('bg-white/50');
            indicators[nextIndex].classList.add('bg-white', 'w-8');
            indicators[nextIndex].classList.remove('bg-white/50');
        }

        currentIndex = nextIndex;
    }

    // Change slide every 4 seconds
    setInterval(changeSlide, 4000);
    console.log('Auto-slide interval started (4 seconds)');
}

function initProfilAnimations() {
    const profilSection = document.querySelector('#profil');

    if (!profilSection) {
        console.log('Profil section not found');
        return;
    }

    // Animasi logo header - fade in dari atas
    const logo = profilSection.querySelector('a');
    if (logo) {
        gsap.from(logo, {
            scrollTrigger: {
                trigger: profilSection,
                start: 'top 80%',
                end: 'top 50%',
                toggleActions: 'play none none reverse',
            },
            y: -50,
            opacity: 0,
            duration: 1,
            ease: 'power3.out',
        });
    }

    // Animasi gambar utama - scale dan fade
    const mainImage = profilSection.querySelector('.max-w-4xl img');
    if (mainImage) {
        gsap.from(mainImage, {
            scrollTrigger: {
                trigger: mainImage,
                start: 'top 85%',
                end: 'top 50%',
                toggleActions: 'play none none reverse',
            },
            scale: 0.8,
            opacity: 0,
            duration: 1.2,
            ease: 'power2.out',
        });
    }

    // Animasi left column - slide dari kiri
    const leftColumn = profilSection.querySelector('.profil-left');
    if (leftColumn) {
        gsap.from(leftColumn, {
            scrollTrigger: {
                trigger: leftColumn,
                start: 'top 80%',
                end: 'top 50%',
                toggleActions: 'play none none reverse',
            },
            x: -100,
            opacity: 0,
            duration: 1,
            ease: 'power3.out',
        });
    }

    // Animasi right column items - stagger dari kanan
    const rightItems = profilSection.querySelectorAll('.profil-right-item');
    if (rightItems.length > 0) {
        gsap.from(rightItems, {
            scrollTrigger: {
                trigger: profilSection.querySelector('.profil-right'),
                start: 'top 80%',
                end: 'top 50%',
                toggleActions: 'play none none reverse',
            },
            x: 100,
            opacity: 0,
            duration: 1,
            stagger: 0.2,
            ease: 'power3.out',
        });
    }

    // Animasi heading dengan bounce effect
    const headings = profilSection.querySelectorAll('.profil-heading');
    if (headings.length > 0) {
        gsap.from(headings, {
            scrollTrigger: {
                trigger: profilSection,
                start: 'top 70%',
                toggleActions: 'play none none reverse',
            },
            y: 30,
            opacity: 0,
            duration: 0.8,
            stagger: 0.15,
            ease: 'back.out(1.2)',
        });
    }

    console.log('Profil animations initialized');
}

function initLayananAnimations() {
    const layananSection = document.querySelector('#layanan');

    if (!layananSection) {
        console.log('Layanan section not found');
        return;
    }

    // Animasi header - fade in dari atas
    const header = layananSection.querySelector('.layanan-header');
    if (header) {
        gsap.from(header, {
            scrollTrigger: {
                trigger: layananSection,
                start: 'top 75%',
                end: 'top 50%',
                toggleActions: 'play none none reverse',
            },
            y: -50,
            opacity: 0,
            duration: 1,
            ease: 'power3.out',
        });
    }

    // Animasi cards - slide dari kanan secara berurutan (stagger)
    const cards = layananSection.querySelectorAll('.layanan-card');

    if (cards.length > 0) {
        // Set initial state
        gsap.set(cards, { x: 150, opacity: 0 });

        gsap.to(cards, {
            scrollTrigger: {
                trigger: layananSection,
                start: 'top 70%',
                toggleActions: 'play none none none',
                once: true,
            },
            x: 0,
            opacity: 1,
            duration: 0.8,
            stagger: {
                each: 0.1,
                from: 'start',
            },
            ease: 'power2.out',
        });
    }

    console.log('Layanan animations initialized with', cards.length, 'cards');
}

function initGaleriAnimations() {
    // Animation for Gallery page (album grid)
    const albumCards = document.querySelectorAll('.group.bg-gray-900.rounded-2xl');

    if (albumCards.length > 0) {
        // Set initial state
        gsap.set(albumCards, { y: 80, opacity: 0, scale: 0.9 });

        gsap.to(albumCards, {
            scrollTrigger: {
                trigger: albumCards[0].closest('section') || albumCards[0].parentElement,
                start: 'top 75%',
                toggleActions: 'play none none none',
                once: true,
            },
            y: 0,
            opacity: 1,
            scale: 1,
            duration: 0.8,
            stagger: {
                each: 0.12,
                from: 'start',
            },
            ease: 'back.out(1.2)',
        });

        console.log('Gallery animations initialized with', albumCards.length, 'album cards');
    }

    // Animation for Gallery Album Detail page (photos grid)
    const galleryItems = document.querySelectorAll('.gallery-item');

    if (galleryItems.length > 0) {
        // Set initial state
        gsap.set(galleryItems, { y: 60, opacity: 0, scale: 0.85 });

        gsap.to(galleryItems, {
            scrollTrigger: {
                trigger: galleryItems[0].closest('section') || galleryItems[0].parentElement,
                start: 'top 70%',
                toggleActions: 'play none none none',
                once: true,
            },
            y: 0,
            opacity: 1,
            scale: 1,
            duration: 0.7,
            stagger: {
                each: 0.08,
                from: 'start',
            },
            ease: 'power2.out',
        });

        console.log('Gallery album detail animations initialized with', galleryItems.length, 'photos');
    }

    // Animation for filter buttons
    const filterButtons = document.querySelectorAll('section button[class*="rounded-full"]');
    if (filterButtons.length > 0 && filterButtons[0].textContent.includes('Album')) {
        gsap.from(filterButtons, {
            scrollTrigger: {
                trigger: filterButtons[0].closest('div'),
                start: 'top 80%',
                toggleActions: 'play none none none',
                once: true,
            },
            y: -30,
            opacity: 0,
            duration: 0.6,
            stagger: 0.08,
            ease: 'power2.out',
        });
    }
}
