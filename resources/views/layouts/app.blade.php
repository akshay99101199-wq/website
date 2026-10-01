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
            <img src="assets/logo.png" alt="DBT Logo Loader" class="loader-logo">
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

        });
    </script>

    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/carousel.js') }}"></script>
</body>

</html>
