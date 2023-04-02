$(document).ready(function () {
    $(".owl-number").owlCarousel({
        loop: true,
        rtl: true,
        drag: true,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3.5,
            },
            1000: {
                items: 3.5,
            },
        },
    });

    $(".owl-blogs").owlCarousel({
        loop: true,
        rtl: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 2,
            },
        },
    });

    $(".next-blog").click(function () {
        $(".owl-blogs").trigger("next.owl.carousel");
    });

    $(".prev-blog").click(function () {
        $(".owl-blogs").trigger("prev.owl.carousel");
    });

    $(".owl-courses").owlCarousel({
        loop: true,
        rtl: true,
        autoplay: true,
        responsiveClass: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        margin: 50,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 2,
            },
        },
    });

    $(".next-course").click(function () {
        $(".owl-courses").trigger("next.owl.carousel");
    });

    $(".prev-course").click(function () {
        $(".owl-courses").trigger("prev.owl.carousel");
    });

    $(".owl-clients").owlCarousel({
        loop: true,
        rtl: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 4.5,
            },
            1600: {
                items: 5.5,
            },
        },
    });

    $(".owl-posts").owlCarousel({
        loop: true,
        rtl: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 1,
            },
        },
    });

    $(".next-post").click(function () {
        $(".owl-posts").trigger("next.owl.carousel");
    });

    $(".prev-post").click(function () {
        $(".owl-posts").trigger("prev.owl.carousel");
    });
});
