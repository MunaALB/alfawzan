"use strict"; // Start of use strict

/* OWL-CAROUSEL */
function owlCarouselActivation() {
    if($('.testimony').length) {
        $('.testimony').owlCarousel({
            autoplay: true,
            autoplayTimeout: 10000,
            navSpeed: 1000,
            loop: true,
            autoplayHoverPause: true,
            pagination: false,
            smartSpeed: 1000,
            margin: 35,
            stagePadding: 10,
            items: 3, 
            nav: true,
            navElement: "span",
            navText: [
                "<span class='icofont-long-arrow-right'></span>",
                "<span class='icofont-long-arrow-left'></span>"
            ],
            responsive : {
                0 : {
                    items: 1
                },
                992 : {
                    items: 2
                },
                1200 : {
                    items: 3
                }
            }
        });
    };
    if($('.blog-carousel').length) {
        $('.blog-carousel').owlCarousel({
            autoplay: true,
            autoplayTimeout: 5000,
            navSpeed: 1000,
            loop: true,
            autoplayHoverPause: true,
            pagination: false,
            smartSpeed: 1000,
            margin: 35,
            stagePadding: 15,
            items: 2,
            onInitialized: startProgressBar,
            onTranslate: resetProgressBar,
            onTranslated: startProgressBar,
            responsive : {
                0 : {
                    items: 1
                },
                992 : {
                    items: 1
                },
                1200 : {
                    items: 2
                }
            }
        });
        $('.blog-carousel-nav.btn-prev').on('click', function() {
           $('.blog-carousel').trigger('next.owl.carousel'); 
        });
        $('.blog-carousel-nav.btn-next').on('click', function() {
           $('.blog-carousel').trigger('prev.owl.carousel'); 
        });

        function startProgressBar() {
          $(".slide-progress").css({
            width: "100%",
            transition: "width 5000ms"
          });
        }

        function resetProgressBar() {
          $(".slide-progress").css({
            width: 0,
            transition: "width 0s"
          });
        }
    };
}

/* Sticky Sidebar */
function StickySidebar() {
    if (jQuery('.asideRightFixed').length) {
        jQuery('.asideRightFixed').theiaStickySidebar({
            'additionalMarginBottom': 30,
            'sidebarBehavior': 'stick-to-bottom'
        });
    } 
}

/* CounterUp */
function counterUpInit() {
    if (jQuery('.counter').length) {
        jQuery('.counter').counterUp({
            delay: 20,
            time: 2000
        });
    }
}

/* Sticky Header */
function stickyHeader() {
    if ($('.sticky').length) {
        var stickyScrollPos = 100;
        var sticky = $('.sticky');
        if ($(window).scrollTop() > stickyScrollPos) {         
            sticky.removeClass('slideIn animated');
            sticky.addClass('sticky-fixed slideInDown animated');
            $('.scroll-to-top').fadeIn(500);
        } else if ($(this).scrollTop() <= stickyScrollPos) {
            sticky.removeClass('sticky-fixed slideInDown animated');
            sticky.addClass('slideIn animated');
            $('.scroll-to-top').fadeOut(500);
        }
    };
}

/* Mobile Menu Button */
function menuButtonFocus() {
    if($('#main_menu').length){
        $(".site-content").on('click', function () {
            $("#main_menu").removeClass('show');
        });
    };
}

/* Back2Top button function */
function backToTop() {
    if($('.back2Top').length) {
        $('.back2Top').on('click', function () {
            $("html, body").animate({
                scrollTop: 0
            }, 500)
        });
    };
}

/* Back2Top button visibility */
function backToTopVisible() {
     if ($('.back2Top').length) {
        if ($(window).scrollTop() > 300) {
            $(".back2Top").addClass("totop");
        } else {
            $(".back2Top").removeClass("totop");
        }
    };
}

jQuery(document).on('ready', function() {
    (function($) {
        StickySidebar();
        menuButtonFocus();
        counterUpInit();
        owlCarouselActivation();
        backToTop();

        function toggleNavbarMethod() {
            if ($(window).width() > 992) {  
                $('.navbar .dropdown').on('mouseover', function(){  
                    $('.dropdown-toggle', this).trigger('click');   
                }).on('mouseout', function(){  
                    $('.dropdown-toggle', this).trigger('click').blur();  
                });  
            }  
            else {  
                $('.navbar .dropdown').off('mouseover').off('mouseout');  
            }  
        }  
        toggleNavbarMethod();  
        $(window).resize(toggleNavbarMethod);
    })(jQuery);
});

jQuery(window).on('scroll', function () {   
    (function ($) {
        backToTopVisible();
        stickyHeader();
    })(jQuery);
});