var navLinks = $("nav .navbar-nav .nav-link");
var theme = localStorage.getItem("theme");

$(document).ready(function () {
    // $(".navbar-nav li").on("click", function () {
    //     $(".navbar-nav li a").addClass("active-navbar");
    // });

    $("#course-video").on("play", function () {
        $(".overlay-video").addClass("d-none");
        $(".play-button").addClass("d-none");
    });

    $(".play-button").on("click", function () {
        $(".overlay-video").addClass("d-none");
        $(".play-button").addClass("d-none");
        $("#course-video").get(0).play();
    });

    setTheme(theme);

    $(".fa-moon").on("click", function () {
        setTheme("dark");
    });

    $(".fa-sun").on("click", function () {
        setTheme("light");
    });

    $(".active-bot").removeClass("d-none");
    $(".bot-archive").addClass("d-none");

    function showWalletTable() {
        if (
            $("#nav-wallet").hasClass("active") &&
            $("#nav-wallet").hasClass("show")
        ) {
            $("#wallet-table").removeClass("d-none");
        } else {
            $("#wallet-table").addClass("d-none");
        }
    }

    showWalletTable();

    $(".nav-link").on("click", function () {
        setTimeout(() => {
            showWalletTable();
        }, 200);
    });

    $("#WithRequest").on("click", (e) => {
        e.preventDefault();
        $("#WithRequest").addClass("active-nav");
        $("#withdrawal-request").removeClass("d-none");
        $("#withdrawal-history").addClass("d-none");
    });

    $("#nav-wallet-tab").on("click", () => {
        $("#WithRequest").removeClass("active-nav");
        $("#withdrawal-request").addClass("d-none");
        $("#withdrawal-history").removeClass("d-none");
    });

    $("#active-bot-archive").on("click", function () {
        $(".bot-archive").removeClass("d-none");
        $(".active-bot").addClass("d-none");
    });

    $("#nav-profile-tab").on("click", function () {
        $(".bot-archive").addClass("d-none");
        $(".active-bot").removeClass("d-none");
    });

    $(document).scroll(function () {
        // handleScroll();
        countup();
    });
    const handleScroll = () => {
        const navbar = $(".navbar");
        const url = location.origin;
        if ($(window).width() > 768) {
            if ($(document).scrollTop() > 730) {
                navbar
                    .addClass("position-fixed")
                    .addClass("w-100")
                    .addClass("z-3");
                navbar.css({
                    backgroundColor: "#009ee3",
                });
                $(".login-btn").addClass("login-scroll");
                $(".register-btn").addClass("register-scroll");
                navLinks.removeClass("text-dark");
                navLinks.addClass("text-light");
                navLinks.hover(function () {
                    $(this).addClass("nav-link-down");
                });
                $("svg g path").attr("stroke", "#fff");
                $(".navbar-brand img").attr(
                    "src",
                    `${url}/assets/img/logo-white.svg`
                );
                $("#Path_3").attr("fill", "#fff");
            } else {
                navbar.removeClass("position-fixed").removeClass("w-100");
                navbar.css({
                    backgroundColor: "unset",
                });
                navLinks.hover(function () {
                    $(this).removeClass("nav-link-down");
                });
                $(".login-btn").removeClass("login-scroll");
                $(".register-btn").removeClass("register-scroll");
                if (localStorage.getItem("theme") == "dark") {
                    navLinks.removeClass("text-dark");
                    navLinks.addClass("text-light");
                } else {
                    navLinks.removeClass("text-light");
                    navLinks.addClass("text-dark");
                }
                navLinks.hover(function () {
                    $(this).css("color", "#009ee3");
                });
                $("svg g path").attr("stroke", "#009ee3");
                $("#Path_3").attr("fill", "#009ee3");
                $(".navbar-brand img").attr(
                    "src",
                    `${url}/assets/img/logo.png`
                );
            }
        }
    };

    let w = 0;

    const countup = () => {
        if ($(document).scrollTop() >= 530 && w == 0) {
            w = 2;
            $(".counter").each(function () {
                var $this = $(this),
                    countTo = $this.attr("data-count");

                $({ countNum: $this.text() }).animate(
                    {
                        countNum: countTo,
                    },
                    {
                        duration: 1000,
                        easing: "linear",
                        step: function () {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function () {
                            $this.text("+ " + this.countNum);
                        },
                    }
                );
            });
        }
    };
});

// Function to switch themes
function setTheme(theme) {
    var body = $("body");

    var tabLink = $(".card nav .nav-link");

    if (theme === "dark") {
        body.attr("data-bs-theme", "dark");
        $(".fa-moon").addClass("d-none");
        $(".fa-sun").removeClass("d-none");
        navLinks.removeClass("text-dark");
        navLinks.addClass("text-light");
        tabLink.removeClass("text-dark");
        tabLink.addClass("text-light");
        $("input").css({
            backgroundColor: "#000",
            color: "#fff",
        });
        $("select").css({
            backgroundColor: "#000",
            color: "#fff",
        });
        $("textarea").css({
            backgroundColor: "#000",
            color: "#fff",
        });
        $("footer").css({
            backgroundColor: "#343C44",
        });
        $(".footer-mobile").css({
            backgroundColor: "#343C44",
        });
        $(".bg-fa").css({
            backgroundColor: "#343C44",
        });
        $(".faq-section .accordion-item").css({
            backgroundColor: "#343C44",
        });
        $(".faq-section .accordion-button").css({
            backgroundColor: "#343C44",
        });
        $(".subscriptions .circle").css({
            borderColor: "#343C44",
            backgroundColor: "#20242552",
            outline: "#504c4c 3px solid",
        });
        $(".subscriptions .circle .icon").css({
            backgroundColor: "#504c4c",
            borderColor: "gray",
        });
        $(".elite-clients .box").css({
            backgroundColor: "#343C44",
        });
        $(".elite-clients .curved").addClass("curved-dark");
        $(".comments .comment h4").removeClass("text-dark");
        $(".interactions .likes .interaction").css({
            backgroundColor: "#343C44",
        });
        localStorage.setItem("theme", "dark");
    } else {
        body.attr("data-bs-theme", "light");
        $(".fa-sun").addClass("d-none");
        $(".fa-moon").removeClass("d-none");
        navLinks.removeClass("text-light");
        navLinks.addClass("text-dark");
        tabLink.removeClass("text-light");
        tabLink.addClass("text-dark");
        $("input").css({
            backgroundColor: "#fff",
            color: "#000",
        });
        $("select").css({
            backgroundColor: "#fff",
            color: "#000",
        });
        $("textarea").css({
            backgroundColor: "#fff",
            color: "#000",
        });
        $("footer").css({
            backgroundColor: "#009ee3",
        });
        $(".footer-mobile").css({
            backgroundColor: "#fff",
        });
        $(".bg-fa").css({
            backgroundColor: "#fafafa",
        });
        $(".faq-section .accordion-item").css({
            backgroundColor: "#fff",
        });
        $(".faq-section .accordion-button").css({
            backgroundColor: "#fff",
        });
        $(".subscriptions .circle").css({
            borderColor: "#fff",
            backgroundColor: "#009ee352",
            outline: "1px solid #009ee3",
        });
        $(".subscriptions .circle .icon").css({
            backgroundColor: "#009ee3",
            borderColor: "#fff",
        });
        $(".elite-clients .box").css({
            backgroundColor: "#fff",
        });
        $(".elite-clients .curved").removeClass("curved-dark");
        $(".comments .comment h4").addClass("text-dark");
        $(".interactions .likes .interaction").css({
            backgroundColor: "#fff",
        });
        localStorage.setItem("theme", "light");
    }
}

// const objects = [
//     {
//         from_price: 1000,
//         to_price: 3000,
//         price_monthly: 25,
//         percentage: 30,
//     },
//     {
//         from_price: 1000,
//         to_price: 3000,
//         price_monthly: 25,
//         percentage: 30,
//     },
//     {
//         from_price: 1000,
//         to_price: 3000,
//         price_monthly: 25,
//         percentage: 30,
//     },
//     {
//         from_price: 1000,
//         to_price: 3000,
//         price_monthly: 25,
//         percentage: 30,
//     },
//     {
//         from_price: 1000,
//         to_price: 3000,
//         price_monthly: 25,
//         percentage: 30,
//     },
//     {
//         from_price: 1000,
//         to_price: 3000,
//         price_monthly: 25,
//         percentage: 30,
//     },
//     {
//         from_price: 1000,
//         to_price: 3000,
//         price_monthly: 25,
//         percentage: 30,
//     },
//     {
//         from_price: 1000,
//         to_price: 3000,
//         price_monthly: 25,
//         percentage: 30,
//     },
//     {
//         from_price: 1000,
//         to_price: 3000,
//         price_monthly: 25,
//         percentage: 30,
//     },
// ];

// function displayObjects(objectsArray) {
//     let startIndex = 0;
//     setInterval(() => {
//         const endIndex = startIndex + 4;
//         let currentGroup = objectsArray.slice(startIndex, endIndex);
//         if (currentGroup.length < 4) {
//             currentGroup = currentGroup.concat(
//                 objectsArray.slice(0, 4 - currentGroup.length)
//             );
//             startIndex = 4 - currentGroup.length;
//         } else {
//             startIndex += 4;
//             if (startIndex >= objectsArray.length) {
//                 startIndex = 0;
//             }
//         }
//         console.log(currentGroup);
//     }, 4000);
// }

// displayObjects(objects);
