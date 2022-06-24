(function ($) {
    "use strict";
    $(".main-banner").owlCarousel({
        loop: true,
        margin: 5,
        responsiveClass: true,
        slideSpeed: 2000,
        smartSpeed: 2500,
        nav: true,
        autoplay: true,
        autoplayTimeout: 5000,
        responsiveRefreshRate: 200,
        rewind: true,
        responsive: {
            0: {
                items: 1,
                nav: false,
                navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
            },
            600: {
                items: 1,
                nav: false,
                navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
            },
            1000: {
                items: 1,
                nav: false,
                navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
                loop: true
            }
        }
    });
    var owl = $('.testimonials');
    owl.owlCarousel({
        items: 1,
        loop: true,
        margin: 5,
        autoplay: true,
        smartSpeed: 4000,
        autoplayTimeout: 5000,
        autoplayHoverPause: true
    });
    $(".our-staff-page").owlCarousel({
        loop: true,
        margin: 15,
        responsiveClass: true,
        autoplay: true,
        smartSpeed: 4000,
        slideSpeed: 2000,
        smartSpeed: 2500,
        nav: true,
        responsiveRefreshRate: 200,
        rewind: true,
        responsive: {
            0: {
                items: 1,
                nav: false,
                navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
            },
            600: {
                items: 2,
                nav: false,
                navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
            },
            1000: {
                items: 4,
                nav: false,
                navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
                loop: true
            }
        }
    });
    $('.animated').appear(function () {
        var elem = $(this);
        var animation = elem.data('animation');
        if (!elem.hasClass('visible')) {
            var animationDelay = elem.data('animation-delay');
            if (animationDelay) {
                setTimeout(function () {
                    elem.addClass(animation + " visible");
                }, animationDelay);
            } else {
                elem.addClass(animation + " visible");
            }
        }
    });
    $(window).on("load", function () {
        $("body").addClass("loaded");
        $(".preloader").html("");
        $(".preloader").css("display", "none");
    });
    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 1000) {
            $("#top").fadeIn();
        } else {
            $("#top").fadeOut();
        }
    });
    $("#top").on("click", function () {
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
        return false;
    });
    $("#top").on("click", function (event) {
        event.stopPropagation();
        var idTo = $(this).attr("data-atr");
        var Position = $("[id='" + idTo + "']").offset();
        $("html, body").animate({
            scrollTop: Position
        }, "slow");
        return false;
    });
    $(document).ready(function () {
        $('.video-preview').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });
    });
    $(window).on('scroll', function () {
        var b = $(window).scrollTop();
        if (b > 350) {
            $(".sticky-navigation").addClass("fixed-top");
        } else {
            $(".sticky-navigation").removeClass("fixed-top");
        }
    });
    $(document).ready(function () {
        $('.portfolio-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1]
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                titleSrc: function (item) {
                    return item.el.attr('title') + '<small>Education Buddy</small>';
                }
            }
        });
    });
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
})(jQuery);
(function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o), m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
ga('create', 'UA-62711679-1', 'auto');
ga('send', 'pageview');
var isNS = (navigator.appName == "Netscape") ? 1 : 0;
if (navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN || Event.MOUSEUP);

function mischandler() {
    return false;
}

function mousehandler(e) {
    var myevent = (isNS) ? e : event;
    var eventbutton = (isNS) ? myevent.which : myevent.button;
    if ((eventbutton == 2) || (eventbutton == 3)) return false;
}
// document.oncontextmenu = mischandler;
// document.onmousedown = mousehandler;
// document.onmouseup = mousehandler;
// document.onkeydown = function (e) {
//     if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 || e.keyCode === 117)) {
//         alert('not allowed');
//         return false;
//     } else {
//         return true;
//     }
// };