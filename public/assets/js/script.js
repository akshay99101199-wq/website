document.addEventListener('DOMContentLoaded', () => {

    const featureStack = document.querySelector('.feature-image-stack');
    if (featureStack && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        const stackCards = Array.from(featureStack.querySelectorAll('.feature-stack-card'));
        window.setInterval(() => {
            stackCards.forEach((card) => {
                card.dataset.position = String((Number(card.dataset.position) + 1) % stackCards.length);
            });
        }, 2800);
    }
    
    // --- 1. Custom Cursor Logic ---
    const cursorDot = document.querySelector('[data-cursor-dot]');
    const cursorOutline = document.querySelector('[data-cursor-outline]');
    
    if(cursorDot && cursorOutline && window.innerWidth > 768) {
        window.addEventListener('mousemove', (e) => {
            const posX = e.clientX;
            const posY = e.clientY;
            
            cursorDot.style.left = `${posX}px`;
            cursorDot.style.top = `${posY}px`;
            
            cursorOutline.animate({
                left: `${posX}px`,
                top: `${posY}px`
            }, { duration: 300, fill: "forwards" });
        });

        const interactives = document.querySelectorAll('a, button, input, .industry-card, .dark-card, .stat-card');
        interactives.forEach(el => {
            el.addEventListener('mouseenter', () => document.body.classList.add('cursor-hover'));
            el.addEventListener('mouseleave', () => document.body.classList.remove('cursor-hover'));
        });
    }

    // --- 2. Typing Effect Logic ---
    const textArray = ["Our Company", "Nidhi Software", "ERP Accounting", "NBFC Software", "eCommerce", "Mobile Apps", "Cloud Hosting"];
    let textIndex = 0;
    let charIndex = 0;
    const typingDelay = 100;
    const erasingDelay = 50;
    const newTextDelay = 2000;
    const typedTextSpan = document.querySelector(".typed-text");

    function type() {
        if(!typedTextSpan) return;
        if (charIndex < textArray[textIndex].length) {
            typedTextSpan.textContent += textArray[textIndex].charAt(charIndex);
            charIndex++;
            setTimeout(type, typingDelay);
        } else {
            setTimeout(erase, newTextDelay);
        }
    }

    function erase() {
        if(!typedTextSpan) return;
        if (charIndex > 0) {
            typedTextSpan.textContent = textArray[textIndex].substring(0, charIndex - 1);
            charIndex--;
            setTimeout(erase, erasingDelay);
        } else {
            textIndex++;
            if (textIndex >= textArray.length) textIndex = 0;
            setTimeout(type, typingDelay + 500);
        }
    }

    // --- 3. Loader Logic ---
    const preloader = document.getElementById('preloader');
    setTimeout(() => {
        if(preloader) {
            preloader.style.opacity = '0';
            setTimeout(() => {
                preloader.style.display = 'none';
                triggerHeroAnimations();
                if(typedTextSpan) setTimeout(type, newTextDelay - 1000);
            }, 500);
        }
    }, 1200);

    // --- 4. Header Scroll Effect ---
    const header = document.querySelector('.header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 10) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    // --- 5. Scroll Animations (Intersection Observer) ---
    const animateElements = document.querySelectorAll('.animate-on-scroll');
    const observerOptions = { threshold: 0.1, rootMargin: "0px 0px -50px 0px" };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    animateElements.forEach(el => observer.observe(el));

    function triggerHeroAnimations() {
        const heroElements = document.querySelectorAll('.animate-fade-up');
        heroElements.forEach(el => el.classList.add('visible'));
    }


    // Menu toggle
    const menuToggle = document.getElementById("mobileMenuToggle");
    const navLinks = document.querySelector(".nav-links");

    if (menuToggle && navLinks) {

        menuToggle.addEventListener("click", function () {

            navLinks.classList.toggle("active");

            const icon = menuToggle.querySelector("i");

            if (navLinks.classList.contains("active")) {
                icon.classList.remove("fa-bars");
                icon.classList.add("fa-xmark");
            } else {
                icon.classList.remove("fa-xmark");
                icon.classList.add("fa-bars");
            }
        });
    }

});
