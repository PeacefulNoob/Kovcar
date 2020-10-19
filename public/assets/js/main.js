window.jQuery(document).ready(function ($) {

    'use strict';

    // Script for Header Background - Height 100% //
    if ($(document).width() >= 769) {
        $(window).on("resize", function () {
            if ($(window).width() < 769) {
                $('.header-content').height("auto"); // Mobile version size "auto"
            } else {
                var height = $(window).height(); //Get the height of the browser window
                $('.header-content').height(height - 150); //Resize the videocontainer div, with a size of 64 - page height.
            }
        }).resize();
    } else {}
    // End Script for Header Background - Height 100% //


    /*     // jQuery smooth scrolling //
        $('a[href*="#"]').on('click', function (e) {
            e.preventDefault();
            var target = this.hash;
            var $target = $(target);
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top
            }, 900, 'swing', function () {
                window.location.hash = target;
            });
        });
        // End jQuery smooth scrolling // */

    jQuery(document).ready(function ($) {
        // Scroll to top button
        // browser window scroll (in pixels) after which the "back to top" link is shown
        var offset = 300,
            //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
            offset_opacity = 1200,
            //duration of the top scrolling animation (in ms)
            scroll_top_duration = 700,
            //grab the "back to top" link
            $back_to_top = $('.cd-top');

        //hide or show the "back to top" link
        $(window).scroll(function () {
            ($(this).scrollTop() > offset) ? $back_to_top.addClass('cd-is-visible'): $back_to_top.removeClass('cd-is-visible cd-fade-out');
            if ($(this).scrollTop() > offset_opacity) {
                $back_to_top.addClass('cd-fade-out');
            }
        });

        //smooth scroll to top
        $back_to_top.on('click', function (event) {
            event.preventDefault();
            $('body,html').animate({
                scrollTop: 0,
            }, scroll_top_duration);
        });
        // End Scroll to top

        // Mobile Menu Show Hide Submenu
        $('#header .navbar-default li.subnav ul').after('<div class="nav__expand"><i class="fas fa-chevron-down"></i></div>');
        $("#header .navbar-default li.subnav .nav__expand").on('click', function () {
            $(this).prev("ul").slideToggle("slow");
        });
    });


    // Navigation menu scrollspy to anchor section //
    $('body').scrollspy({
        target: '#navigation .navbar-collapse',
        offset: parseInt($('#navigation').height(), 0)
    });
    // End navigation menu scrollspy to anchor section //


    // sticky-menu on scroll
    $(window).on('scroll', function () {
        var scroll = $(window).scrollTop();
        if (scroll < 245) {
            $("#header").removeClass("sticky-menu");
        } else {
            $("#header").addClass("sticky-menu");
        }
    });
    // End sticky-menu on scroll






    // jQuery tooltips //
    $('.btn-tooltip').tooltip();
    $('.btn-popover').popover();
    // End jQuery tooltips //


    // Projects Slider Slick
    $('.carousel-slider.projects-slider').slick({
        arrows: true,
        dots: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 6000,
        draggable: true,

        responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                    draggable: true
                }
            },
            {
                breakpoint: 990,
                settings: {
                    slidesToShow: 2,
                    draggable: true
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    draggable: true
                }

            }
        ]
    });
    // End Projects Slider Slick
    // Projects Slider Slick
    $('.carousel-slider.projects-slider-alfa').slick({
        arrows: false,
        dots: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 6000,
        draggable: true,
        responsive: [{
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                draggable: true
            }

        }]
    });
    // End Projects Slider Slick




    $(document).ready(function () {
        setTimeout(function () {
            $("body").addClass("loaded");
        }, 200);
    });


    // Navigation Burger animation //
    $('.burger-icon').on('click touchstart', function (e) {
        $(this).toggleClass('change');
        $("#navbarCollapse").slideToggle();
        e.preventDefault();
    });
    // END Navigation Burger animation //




    // Slider Home 2
    $('.home_owl').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        touchDrag: true,
        mouseDrag: true,
        autoplay: true,
        autoplayTimeout: 5000,
        smartSpeed: 1000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            }
        }
    });
    // Slider End
    $('.slider_owl').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        touchDrag: true,
        mouseDrag: true,
        autoplay: true,
        autoplayTimeout: 9000,
        smartSpeed: 1000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            }
        }
    });
    $('.gallery_owl').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        touchDrag: true,
        mouseDrag: true,
        autoplay: false,
        autoplayTimeout: 5000,
        smartSpeed: 1000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },

            850: {
                items: 2,
                nav: true,
            }
        }


    });

    $('.tabgroup > div').hide();
    $('.tabgroup > div:first-of-type').show();
    $('.tabs a').click(function (e) {
        e.preventDefault();
        var $this = $(this),
            tabgroup = '#' + $this.parents('.tabs').data('tabgroup'),
            others = $this.closest('li').siblings().children('a'),
            target = $this.attr('href');
        others.removeClass('active');
        $this.addClass('active');
        $(tabgroup).children('div').hide();
        $(target).show();

    });

    $('.sticky-cta ul').hover(
        function () {
            $('.sticky-cta-item-info').css("display", "block");
        });
    $(window).scroll(function () {
        $('.sticky-cta-item-info').css("display", "none");
    });

});
$(window).on("scroll", function () {
    if ($(window).scrollTop() > 60) {
        $("#header").addClass("active");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
        $("#header").removeClass("active");
    }
});

$(document).ready(function () {
    $("a").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).position().top
            }, 400, function () {
                window.location.hash = hash;
            });
        }
    });
});
