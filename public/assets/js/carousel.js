$(document).ready(function () {

    var slides = $('.slide-window .slide');
    var dots = $('.slider-dot');

    var current = 0;
    var total = slides.length;
    var timer;


    function showSlide(index) {

        if (index >= total) {
            index = 0;
        }

        if (index < 0) {
            index = total - 1;
        }

        current = index;

        // Sab hide
        slides.stop(true, true).fadeOut(600);

        // Current show
        slides.eq(current).stop(true, true).fadeIn(600);

        // Dots
        dots.removeClass('active');
        dots.eq(current).addClass('active');
    }


    function startSlider() {

        clearInterval(timer);

        timer = setInterval(function () {
            showSlide(current + 1);
        }, 4000);

    }


    // First slide
    slides.hide();
    slides.eq(0).show();

    dots.removeClass('active');
    dots.eq(0).addClass('active');


    // Start
    startSlider();


    // Dot click
    dots.on('click', function () {

        var index = $(this).index();

        showSlide(index);

        startSlider();

    });


    // Pause
    $('.slide-window').on('mouseenter', function () {
        clearInterval(timer);
    });


    // Resume
    $('.slide-window').on('mouseleave', function () {
        startSlider();
    });

});