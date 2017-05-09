$(document).ready(function () {
    var k = 0;
    $('.modul-9').css("opacity", "0");
    var top = $(window).scrollTop();
    loadding(".modul-9");
    
    $(window).bind("scroll", function () {
        top = $(window).scrollTop();   
        loadding(".modul-9");
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
});