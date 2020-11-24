"use strict";
function owlCarouselActivation() {
    if ($(".testimony").length) {
        $(".testimony").owlCarousel({
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
            navText: ["<span class='icofont-long-arrow-right'></span>", "<span class='icofont-long-arrow-left'></span>"],
            responsive: { 0: { items: 1 }, 992: { items: 2 }, 1200: { items: 3 } },
        });
    }
    if ($(".blog-carousel").length) {
        $(".blog-carousel").owlCarousel({
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
            onInitialized: b,
            onTranslate: a,
            onTranslated: b,
            responsive: { 0: { items: 1 }, 992: { items: 1 }, 1200: { items: 2 } },
        });
        $(".blog-carousel-nav.btn-prev").on("click", function () {
            $(".blog-carousel").trigger("next.owl.carousel");
        });
        $(".blog-carousel-nav.btn-next").on("click", function () {
            $(".blog-carousel").trigger("prev.owl.carousel");
        });
        function b() {
            $(".slide-progress").css({ width: "100%", transition: "width 5000ms" });
        }
        function a() {
            $(".slide-progress").css({ width: 0, transition: "width 0s" });
        }
    }
}
function StickySidebar() {
    if (jQuery(".asideRightFixed").length) {
        jQuery(".asideRightFixed").theiaStickySidebar({ additionalMarginBottom: 30, sidebarBehavior: "stick-to-bottom" });
    }
}
function counterUpInit() {
    if (jQuery(".counter").length) {
        jQuery(".counter").counterUp({ delay: 20, time: 2000 });
    }
}
function stickyHeader() {
    if ($(".sticky").length) {
        var b = 100;
        var a = $(".sticky");
        if ($(window).scrollTop() > b) {
            a.removeClass("slideIn animated");
            a.addClass("sticky-fixed slideInDown animated");
            $(".scroll-to-top").fadeIn(500);
        } else {
            if ($(this).scrollTop() <= b) {
                a.removeClass("sticky-fixed slideInDown animated");
                a.addClass("slideIn animated");
                $(".scroll-to-top").fadeOut(500);
            }
        }
    }
}
function menuButtonFocus() {
    if ($("#main_menu").length) {
        $(".site-content").on("click", function () {
            $("#main_menu").removeClass("show");
        });
    }
}
function backToTop() {
    if ($(".back2Top").length) {
        $(".back2Top").on("click", function () {
            $("html, body").animate({ scrollTop: 0 }, 500);
        });
    }
}
function backToTopVisible() {
    if ($(".back2Top").length) {
        if ($(window).scrollTop() > 300) {
            $(".back2Top").addClass("totop");
        } else {
            $(".back2Top").removeClass("totop");
        }
    }
}

function fileInputFunction() {
	var inputs = document.querySelectorAll('.file-input')

	for (var i = 0, len = inputs.length; i < len; i++) {
		customInput(inputs[i])
	}

	function customInput(el) {
		const fileInput = el.querySelector('[type="file"]')
		const label = el.querySelector('[data-js-label]')

		fileInput.onchange =
			fileInput.onmouseout = function () {
				if (!fileInput.value) return

				var value = fileInput.value.replace(/^.*[\\\/]/, '')
				el.className += ' -chosen'
				label.innerText = value
			}
	}
}
jQuery(document).on("ready", function () {
 $('#summernote').summernote({
	 placeholder: 'تفاصيل المنتج او الوصف',
	 lang: 'ar-AR',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],

          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
    (function (b) {
        StickySidebar();
        menuButtonFocus();
        counterUpInit();
        owlCarouselActivation();
		backToTop();
		fileInputFunction()
        function a() {
            if (b(window).width() > 992) {
                b(".navbar .dropdown")
                    .on("mouseover", function () {
                        b(".dropdown-toggle", this).trigger("click");
                    })
                    .on("mouseout", function () {
                        b(".dropdown-toggle", this).trigger("click").blur();
                    });
            } else {
                b(".navbar .dropdown").off("mouseover").off("mouseout");
            }
        }
        a();
        b(window).resize(a);
    })(jQuery);
});
jQuery(window).on("scroll", function () {
    (function (a) {
        backToTopVisible();
        stickyHeader();
    })(jQuery);
});
