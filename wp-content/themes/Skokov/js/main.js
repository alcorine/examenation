jQuery(function ($) {


    $("#main-slider").owlCarousel({
        autoPlay: 300000,
        slideSpeed: 2000,
        singleItem: true,
        stopOnHover: true,
        navigation: true,
        pagination: true
//        paginationNumbers: true
    });

    var $container = $('#container');

    $container.masonry({
        columnWidth:  5,
        itemSelector: '.item',
        isAnimated: true,
        isFitWidth: true
    });

    $("#client-slider").owlCarousel({
        autoPlay: 3000,
        slideSpeed: 2000,
        stopOnHover: true,
        navigation: true,
        pagination: false,
        navigationText : ["prev","next"],
        items : 8, //10 items above 1000px browser width

        itemsDesktop : [1200,5], //5 items between 1000px and 901px
        itemsDesktopSmall : [900,3], // betweem 900px and 601px
        itemsTablet: [600,2], //2 items between 600 and 0
        itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option

//        paginationNumbers: true

    });



});