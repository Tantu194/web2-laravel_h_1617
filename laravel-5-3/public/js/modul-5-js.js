$(document).ready(function () {
    var k = 0;
    var position = $('.m5').offset().top - $('.m5').height();
    $('.m5').css("opacity", "0");
    
    paralax(".m5-parallax");
    var top = $(window).scrollTop();
    loadding(".m5");
    
    $(window).bind("scroll", function () {
        paralax(".m5-parallax");

        top = $(window).scrollTop();
        
        loadding(".m5");

    });

    function loadding(element) {
        $(element).each(function () {
            position = $(this).offset().top - $(this).height();
            if (top >= position && k == 0) {

                $(this).animate({'opacity': '1'}, 2000);
                k = 1;
            }
        });
    }

    function paralax(element) {
        var scrollTop = $(window).scrollTop();
        position += $('.m5').height();
        $(element).css("transform", "translateY("+ ((-position + scrollTop)*0.3) + "px)");
    }
});