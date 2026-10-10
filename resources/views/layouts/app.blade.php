<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Default')</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;800;900&family=Poppins:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/hero.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
</head>

<body>
    <!-- Custom Cursor -->
    <div class="cursor-dot" data-cursor-dot></div>
    <div class="cursor-outline" data-cursor-outline></div>

    <!-- Preloader with Dhronix DBT Logo -->
    <div id="preloader">
        <div class="loader-logo-container">
            <img src="{{ asset('assets/logo.png') }}" alt="DBT Logo Loader" class="loader-logo">
        </div>
        <div class="loader-pulse"></div>
    </div>

    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')



    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {

            $('.services-carousel').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: false,
                dots: true,
                autoplay: true,
                autoplaySpeed: 3000,
                infinite: true,
                responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });

            $('.testimonial-carousel').slick({
                slidesToShow: 2,
                slidesToScroll: 1,
                arrows: true,
                prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
                nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>',
                dots: false,
                autoplay: true,
                autoplaySpeed: 4200,
                infinite: true,
                speed: 700,
                cssEase: 'cubic-bezier(0.22, 1, 0.36, 1)',
                responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 1,
                            arrows: false
                        }
                    }
                ]
            });

        });
    </script>

    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/carousel.js') }}"></script>
    <script>
        document.querySelectorAll('.service-feature-explorer').forEach((explorer) => {
            const items = explorer.querySelectorAll('.service-feature-item');
            const preview = explorer.querySelector('.service-feature-visual');
            const previewImage = preview.querySelector('img');
            const previewTitle = preview.querySelector('[data-feature-preview-title]');
            const previewDescription = preview.querySelector('[data-feature-preview-description]');
            let previewUpdateTimer;

            const activateFeature = (item) => {
                items.forEach((feature) => {
                    const isActive = feature === item;
                    feature.classList.toggle('is-active', isActive);
                    feature.setAttribute('aria-expanded', String(isActive));
                });

                preview.classList.add('is-changing');
                window.clearTimeout(previewUpdateTimer);
                previewUpdateTimer = window.setTimeout(() => {
                    if (item.dataset.featureImage) {
                        previewImage.src = item.dataset.featureImage;
                        previewImage.alt = item.dataset.featureImageAlt || item.querySelector('h4').textContent;
                    }
                    previewTitle.textContent = item.querySelector('h4').textContent;
                    previewDescription.textContent = item.querySelector('p').textContent;
                    preview.classList.remove('is-changing');
                }, 140);
            };

            items.forEach((item) => {
                item.setAttribute('aria-expanded', 'false');
                item.addEventListener('click', () => activateFeature(item));
                item.addEventListener('keydown', (event) => {
                    if (event.key === 'Enter' || event.key === ' ') {
                        event.preventDefault();
                        activateFeature(item);
                    }
                });

            });

            if (items.length) activateFeature(items[0]);
        });
    </script>
</body>

</html>
