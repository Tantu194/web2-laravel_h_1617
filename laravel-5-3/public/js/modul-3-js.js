$(document).ready(function () {
    var k = 0;
    $('.m3-container').css("opacity", "0");
    
    paralax(".m3-background");
    var top = $(window).scrollTop();
    loadding(".m3-container");
    
    $(window).bind("scroll", function () {
        paralax(".m3-background");

        top = $(window).scrollTop();
        
        loadding(".m3-container");

    });

    function loadding(element) {
        $(element).each(function () {
            var position = $(this).offset().top - $(this).height();
            if (top >= position && k == 0) {

                $(this).animate({'opacity': '1'}, 3000);
                k = 1;
            }
        });
    }

    function paralax(element) {
        var scrollTop = $(window).scrollTop();
        $(element).css("transform", "translateY(" + (-620 + (0.2 * scrollTop)) + "px)");
    }
});