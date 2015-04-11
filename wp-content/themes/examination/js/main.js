jQuery(function ($) {
    var $container = $('#container');

    $container.masonry({
        columnWidth: 1,
        itemSelector: '.item',
        isAnimated: true,
        isFitWidth: true
    });


});
