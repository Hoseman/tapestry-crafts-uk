jQuery(".toggle").on("click", () => {
    if (jQuery(window).width() <= 1100) {
        jQuery(".toggle").toggleClass("toggle--open");
        jQuery(".navigation").toggleClass("navigation--open");
        jQuery(".header").toggleClass("header--toggle-active");
        jQuery("body").toggleClass("body--menu-fixed");
        jQuery(".carousel").toggleClass("carousel--menu-fixed");
    }
});

jQuery(window).on("resize", function () {
    if (jQuery(window).width() > 1100) {
        // Remove all the classes when width is greater than 1100px
        jQuery(".toggle").removeClass("toggle--open");
        jQuery(".navigation").removeClass("navigation--open");
        jQuery(".header").removeClass("header--toggle-active");
        jQuery("body").removeClass("body--menu-fixed");
        jQuery(".carousel").removeClass("carousel--menu-fixed");
    }
});

function disableMenuItem() {
    if (jQuery(window).width() > 1100) {
        jQuery("#menu-item-610 > a").on("click", function (e) {
            e.preventDefault(); // Disable the click event
        });
    } else {
        jQuery("#menu-item-610 > a").off("click"); 
    }
}

jQuery(document).ready(function () {
    disableMenuItem();
});

jQuery(window).on("resize", function () {
    disableMenuItem();
});

jQuery(function() {
    var owl = jQuery(".owl-carousel-news");
    owl.owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay: false,
        navText: [
            '<img src="/wp-content/themes/tapestry-crafts-uk/dist/img/prev-black.svg">',
            '<img src="/wp-content/themes/tapestry-crafts-uk/dist/img/next-black.svg">',
          ],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    });
});

jQuery(function() {
    var owl = jQuery(".owl-carousel-main");
    owl.owlCarousel({
        autoplayTimeout: 15000,
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        autoplay: true,
        autoPlaySpeed: 5000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        navText: [
            '<img src="/wp-content/themes/tapestry-crafts-uk/dist/img/prev.svg">',
            '<img src="/wp-content/themes/tapestry-crafts-uk/dist/img/next.svg">',
          ],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
});


jQuery(function() {
    var owl = jQuery(".owl-carousel-popular-products");
    owl.owlCarousel({
        autoplayTimeout: 15000,
        loop:true,
        margin:0,
        nav:true,
        dots:false,
        autoplay: true,
        autoPlaySpeed: 5000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        navText: [
            '<img src="/wp-content/themes/tapestry-crafts-uk/dist/img/prev-black.svg">',
            '<img src="/wp-content/themes/tapestry-crafts-uk/dist/img/next-black.svg">',
          ],
        responsive:{
            0:{
                items:1
            },
            560:{
                items:2
            },
            768:{
                items:3
            },
            1250:{
                items:4
            }
        }
    });
});

jQuery(function() {
    var owl = jQuery(".owl-carousel-small");
    owl.owlCarousel({
        autoplayTimeout: 10000,
        loop:true,
        margin:10,
        nav:false,
        dots:false,
        autoplay: true,
        autoPlaySpeed: 5000,
        navText: [
            '<img src="/wp-content/themes/tapestry-crafts-uk/dist/img/prev.svg">',
            '<img src="/wp-content/themes/tapestry-crafts-uk/dist/img/next.svg">',
          ],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
});