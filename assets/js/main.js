(function ($) {
    "use strict";

    /* 1. Preloder (готовый код, можно использовать в любом проекте) */
    $(window).on("load", function () {
        $("#preloader-active").delay(450).fadeOut("slow");
        $("body").delay(450).css({
            overflow: "visible",
        });
    });

    /* 2. Sticky And Scroll UP */
    $(window).on("scroll", function () {
        var scroll = $(window).scrollTop();
        if (scroll < 400) {
            $(".header-sticky").removeClass("sticky-bar");
            $("#back-top").fadeOut(500);
        } else {
            $(".header-sticky").addClass("sticky-bar");
            $("#back-top").fadeIn(500);
        }
    });

    // Scroll Up
    $("#back-top a").on("click", function () {
        $("body,html").animate(
            {
                scrollTop: 0,
            },
            800
        );
        return false;
    });
})(jQuery);

// HOMETASK

$(".nav-item").on("click", function () {
    let currTab = $(this).index();
    $(".nav-item").removeClass("active");
    $(this).addClass("active");

    $(".tab-pane").removeClass("active");
    $(".tab-pane").eq(currTab).addClass("active show");
});

// PARALLAX

const scene = document.getElementById("scene");
const parallaxInstance = new Parallax(scene);

// SWIPER

const mySwiper = new Swiper(".swiper-container", {
    direction: "horizontal",
    // spaceBetween: 50,
    slidesPerView: 1,
    loop: true,
    stopOnLastSlide: false,
    autoplay: {
        delay: 3000,
    },
    breakpoints: {
        991: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
    },
});

// HAMBURGER

$(".slicknav_btn").on("click", function () {
    $(".main-menu, .menu-close").toggleClass("active");
});

$("#closeMenu").on("click", function () {
    $(".main-menu, .menu-close").toggleClass("active");
});

// MODAL WINDOW

const btnOpen = document.getElementById("btn-open");
const modalWindow = document.getElementById("window-wrapper");
const btnClose = document.getElementById("btn-close");

$("#btn-open").on("click", function () {
    $("#window-wrapper").toggleClass("active");
});

$("#btn-close").on("click", function () {
    $("#window-wrapper").toggleClass("active");
});

$(document).on("click", function (event) {
    if (event.target.id === "window-wrapper") {
        $("#window-wrapper").removeClass("active");
    }
});

// VALIDATION
$.validator.addMethod(
    "regex",
    function (value, element, regexp) {
        let regExsp = new RegExp(regexp);
        return this.optional(element) || regExsp.test(value);
    },
    "Please, check your input!"
);

function valEl(el) {
    el.validate({
        rules: {
            firstName: {
                required: true,
                regex: "[A-Za-z]{1,26}",
            },
            userPhone: {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 13,
                regex: "[0-9]+",
            },
            userEmail: {
                required: true,
                regex: "[@]",
            },
        },
        messages: {
            firstName: "Please, enter correct name.",
            userPhone: "Please, enter correct number.",
            userEmail: "Please, enter correct e-mail.",
        },

        submitHandler: function (form) {
            var $form = $(form);
            var $formId = $(form).attr("id");
            switch ($formId) {
                case "form-order":
                    $.ajax({
                        type: "POST",
                        url: $form.attr("action"),
                        data: $form.serialize(),
                    })
                        .done(function () {
                            location.href = "https://google.com";
                        })
                        .failed(function () {
                            console.log("something went wrong...");
                        });
                    break;

                case "form-book":
                    $.ajax({
                        type: "POST",
                        url: $form.attr("action"),
                        data: $form.serialize(),
                    })
                        .done(function () {
                            location.href = "https://google.com";
                        })
                        .failed(function () {
                            console.log("something went wrong...");
                        });
                    break;
                default:
                    return null;
            }
        },
    });
}

$(".js-form").each(function () {
    valEl($(this));
});

console.log("Hello, world!");
