import { initEtherealShadow } from './ethereal-shadow.js';

const observer = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    },
    { threshold: 0.15 },
);

document.querySelectorAll('.reveal').forEach((el) => observer.observe(el));

const backToTop = document.getElementById('back-to-top');
if (backToTop) {
    window.addEventListener('scroll', () => {
        if (window.scrollY > 400) {
            backToTop.classList.remove('opacity-0', 'translate-y-4');
            backToTop.classList.add('opacity-100', 'translate-y-0');
        } else {
            backToTop.classList.add('opacity-0', 'translate-y-4');
            backToTop.classList.remove('opacity-100', 'translate-y-0');
        }
    }, { passive: true });
}

const ethereal = document.getElementById('ethereal-hero');
if (ethereal) {
    initEtherealShadow(ethereal, {
        color: 'rgba(128, 128, 128, 1)',
        animationScale: 100,
        animationSpeed: 90,
        noiseOpacity: 1,
        noiseScale: 1.2,
        sizing: 'fill',
    });
}
