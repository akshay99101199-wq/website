$(document).ready(function () {
    const carousel = document.querySelector('[data-vertical-carousel]');

    if (carousel) {
        const slides = Array.from(carousel.querySelectorAll('[data-vertical-slide]'));
        const dots = Array.from(carousel.querySelectorAll('[data-carousel-index]'));
        const previousButton = carousel.querySelector('[data-carousel-prev]');
        const nextButton = carousel.querySelector('[data-carousel-next]');
        const rotationButton = carousel.querySelector('[data-carousel-rotation]');
        const currentCounter = carousel.querySelector('[data-carousel-current]');
        const controls = [...dots, previousButton, nextButton, rotationButton].filter(Boolean);
        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        let currentIndex = slides.findIndex((slide) => slide.classList.contains('is-active'));
        let rotationTimer;
        let transitionTimer;
        let isTransitioning = false;
        let isRotationPaused = false;

        if (currentIndex < 0) currentIndex = 0;

        const updateControls = () => {
            if (currentCounter) currentCounter.textContent = String(currentIndex + 1).padStart(2, '0');

            dots.forEach((dot, index) => {
                const isActive = index === currentIndex;
                dot.classList.toggle('is-active', isActive);
                dot.setAttribute('aria-current', String(isActive));
            });
        };

        const canRotate = () => (
            !prefersReducedMotion
            && !document.hidden
            && !isRotationPaused
            && !carousel.matches(':hover')
            && !carousel.contains(document.activeElement)
            && !isTransitioning
            && slides.length > 1
        );

        const scheduleRotation = () => {
            window.clearInterval(rotationTimer);
            if (canRotate()) {
                rotationTimer = window.setInterval(() => showSlide(currentIndex + 1), 7000);
            }
        };

        const showSlide = (requestedIndex) => {
            if (isTransitioning || slides.length < 2) return;

            const nextIndex = (requestedIndex + slides.length) % slides.length;
            if (nextIndex === currentIndex) return;

            window.clearInterval(rotationTimer);
            window.clearTimeout(transitionTimer);
            isTransitioning = true;

            const outgoingSlide = slides[currentIndex];
            const incomingSlide = slides[nextIndex];

            outgoingSlide.classList.remove('is-active');
            outgoingSlide.classList.add('is-exiting-down');
            outgoingSlide.setAttribute('aria-hidden', 'true');

            incomingSlide.classList.add('is-entering');
            incomingSlide.setAttribute('aria-hidden', 'false');
            void incomingSlide.offsetHeight;
            incomingSlide.classList.add('is-active');
            incomingSlide.classList.remove('is-entering');

            currentIndex = nextIndex;
            updateControls();
            controls.forEach((control) => {
                control.disabled = true;
            });

            transitionTimer = window.setTimeout(() => {
                outgoingSlide.classList.remove('is-exiting-down');
                controls.forEach((control) => {
                    control.disabled = false;
                });
                isTransitioning = false;
                scheduleRotation();
            }, prefersReducedMotion ? 0 : 1100);
        };

        slides.forEach((slide, index) => {
            const isActive = index === currentIndex;
            slide.classList.toggle('is-active', isActive);
            slide.setAttribute('aria-hidden', String(!isActive));
        });
        updateControls();

        if (previousButton) {
            previousButton.addEventListener('click', () => showSlide(currentIndex - 1));
        }

        if (nextButton) {
            nextButton.addEventListener('click', () => showSlide(currentIndex + 1));
        }

        if (rotationButton) {
            rotationButton.addEventListener('click', () => {
                isRotationPaused = !isRotationPaused;
                rotationButton.setAttribute('aria-pressed', String(isRotationPaused));
                rotationButton.setAttribute(
                    'aria-label',
                    isRotationPaused ? 'Resume slide rotation' : 'Pause slide rotation'
                );
                const icon = rotationButton.querySelector('i');
                if (icon) {
                    icon.classList.toggle('fa-pause', !isRotationPaused);
                    icon.classList.toggle('fa-play', isRotationPaused);
                }
                scheduleRotation();
            });
        }

        dots.forEach((dot) => {
            dot.addEventListener('click', () => {
                const nextIndex = Number(dot.dataset.carouselIndex);
                showSlide(nextIndex);
            });
        });

        carousel.addEventListener('mouseenter', () => window.clearInterval(rotationTimer));
        carousel.addEventListener('mouseleave', scheduleRotation);
        carousel.addEventListener('focusin', () => window.clearInterval(rotationTimer));
        carousel.addEventListener('focusout', (event) => {
            if (!carousel.contains(event.relatedTarget)) scheduleRotation();
        });
        document.addEventListener('visibilitychange', scheduleRotation);
        scheduleRotation();
    }

    const heroCarousel = document.querySelector('[data-hero-carousel]');

    if (heroCarousel) {
        const heroSlides = Array.from(heroCarousel.querySelectorAll('[data-hero-slide]'));
        const heroDots = Array.from(heroCarousel.querySelectorAll('[data-hero-index]'));
        const heroPreviousButton = heroCarousel.querySelector('[data-hero-prev]');
        const heroNextButton = heroCarousel.querySelector('[data-hero-next]');
        const heroCurrentCounter = heroCarousel.querySelector('[data-hero-current]');
        const heroViewport = heroCarousel.querySelector('.hero-carousel-viewport');
        const heroContents = heroSlides.map((slide) => slide.querySelector('.hero-content'));
        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        let currentHeroIndex = heroSlides.findIndex((slide) => slide.classList.contains('is-active'));
        let heroRotationTimer;
        let heroTransitionTimer;
        let isHeroTransitioning = false;

        if (currentHeroIndex < 0) currentHeroIndex = 0;

        const alignHeroContent = () => {
            if (!heroViewport || heroContents.some((content) => !content)) return;

            heroContents.forEach((content) => content.style.removeProperty('--hero-content-offset'));

            const viewportRect = heroViewport.getBoundingClientRect();
            const baselineRect = heroContents[1].getBoundingClientRect();
            const baselineGap = viewportRect.bottom - baselineRect.bottom;
            const tallestContent = Math.max(...heroContents.map((content) => content.offsetHeight));
            const targetGap = Math.min(baselineGap + 20, Math.max(0, heroViewport.clientHeight - tallestContent));

            heroContents.forEach((content) => {
                const contentRect = content.getBoundingClientRect();
                const currentGap = viewportRect.bottom - contentRect.bottom;
                content.style.setProperty('--hero-content-offset', `${currentGap - targetGap}px`);
            });
        };

        const updateHeroControls = () => {
            if (heroCurrentCounter) {
                heroCurrentCounter.textContent = String(currentHeroIndex + 1).padStart(2, '0');
            }

            heroDots.forEach((dot, index) => {
                dot.classList.toggle('is-active', index === currentHeroIndex);
                dot.setAttribute('aria-current', String(index === currentHeroIndex));
            });
        };

        const canRotateHero = () => (
            !prefersReducedMotion
            && !document.hidden
            && heroCarousel.classList.contains('is-ready')
            && !isHeroTransitioning
            && heroSlides.length > 1
        );

        const scheduleHeroRotation = (delay = 7000) => {
            window.clearTimeout(heroRotationTimer);
            if (canRotateHero()) {
                heroRotationTimer = window.setTimeout(
                    () => showHeroSlide(currentHeroIndex + 1),
                    delay
                );
            }
        };

        const showHeroSlide = (requestedIndex) => {
            if (isHeroTransitioning || heroSlides.length < 2) return;

            const nextHeroIndex = (requestedIndex + heroSlides.length) % heroSlides.length;
            if (nextHeroIndex === currentHeroIndex) return;

            window.clearTimeout(heroRotationTimer);
            window.clearTimeout(heroTransitionTimer);
            isHeroTransitioning = true;

            const outgoingSlide = heroSlides[currentHeroIndex];
            const incomingSlide = heroSlides[nextHeroIndex];

            outgoingSlide.classList.remove('is-active');
            outgoingSlide.classList.add('is-exiting-down');
            outgoingSlide.setAttribute('aria-hidden', 'true');
            outgoingSlide.inert = true;

            incomingSlide.classList.add('is-entering');
            incomingSlide.setAttribute('aria-hidden', 'false');
            incomingSlide.inert = false;
            void incomingSlide.offsetHeight;

            window.requestAnimationFrame(() => {
                incomingSlide.classList.add('is-active');
                incomingSlide.classList.remove('is-entering');
                document.dispatchEvent(new CustomEvent('dhronix:hero-slide-change', {
                    detail: { index: nextHeroIndex, slide: incomingSlide }
                }));
            });

            currentHeroIndex = nextHeroIndex;
            updateHeroControls();

            heroTransitionTimer = window.setTimeout(() => {
                outgoingSlide.classList.remove('is-exiting-down');
                isHeroTransitioning = false;
                scheduleHeroRotation(5900);
            }, prefersReducedMotion ? 0 : 1100);
        };

        heroSlides.forEach((slide, index) => {
            const isActive = index === currentHeroIndex;
            slide.classList.toggle('is-active', isActive);
            slide.setAttribute('aria-hidden', String(!isActive));
            slide.inert = !isActive;
        });
        updateHeroControls();
        alignHeroContent();
        window.addEventListener('resize', alignHeroContent, { passive: true });
        if (heroViewport && heroContents.every(Boolean)) {
            const heroAlignmentObserver = new ResizeObserver(alignHeroContent);
            heroAlignmentObserver.observe(heroViewport);
            heroContents.forEach((content) => heroAlignmentObserver.observe(content));
        }
        if (document.fonts) document.fonts.ready.then(alignHeroContent);

        if (heroPreviousButton) {
            heroPreviousButton.addEventListener('click', () => showHeroSlide(currentHeroIndex - 1));
        }

        if (heroNextButton) {
            heroNextButton.addEventListener('click', () => showHeroSlide(currentHeroIndex + 1));
        }

        heroDots.forEach((dot) => {
            dot.addEventListener('click', () => {
                showHeroSlide(Number(dot.dataset.heroIndex));
            });
        });

        document.addEventListener('dhronix:hero-ready', () => {
            alignHeroContent();
            scheduleHeroRotation();
        }, { once: true });
        if (heroCarousel.classList.contains('is-ready')) scheduleHeroRotation();
        document.addEventListener('visibilitychange', () => {
            if (document.hidden) {
                window.clearTimeout(heroRotationTimer);
            } else {
                scheduleHeroRotation();
            }
        });
    }

    const backToTopButton = document.querySelector('[data-back-to-top]');
    const homepageHero = document.querySelector('[data-hero-carousel]');

    if (backToTopButton && homepageHero) {
        const heroVisibilityObserver = new IntersectionObserver(([entry]) => {
            const heroHasPassed = !entry.isIntersecting && entry.boundingClientRect.bottom <= 0;
            backToTopButton.classList.toggle('is-visible', heroHasPassed);
        });

        heroVisibilityObserver.observe(homepageHero);
        backToTopButton.addEventListener('click', () => {
            const behavior = window.matchMedia('(prefers-reduced-motion: reduce)').matches ? 'auto' : 'smooth';
            window.scrollTo({ top: 0, behavior });
        });
    }

    const slides = $('.slide-window .slide');
    if (!slides.length) return;

    const dots = $('.slider-dot');
    let current = 0;
    let timer;

    function showLegacySlide(index) {
        current = (index + slides.length) % slides.length;
        slides.stop(true, true).fadeOut(600);
        slides.eq(current).stop(true, true).fadeIn(600);
        dots.removeClass('active').eq(current).addClass('active');
    }

    function startLegacySlider() {
        clearInterval(timer);
        timer = setInterval(function () {
            showLegacySlide(current + 1);
        }, 4000);
    }

    slides.hide().eq(0).show();
    dots.removeClass('active').eq(0).addClass('active');
    startLegacySlider();

    dots.on('click', function () {
        showLegacySlide($(this).index());
        startLegacySlider();
    });

    $('.slide-window').on('mouseenter', function () {
        clearInterval(timer);
    });

    $('.slide-window').on('mouseleave', startLegacySlider);
});
