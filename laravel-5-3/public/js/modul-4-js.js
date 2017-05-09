$(document).ready(function () {
    var k = 0;
    
   // $('.m4_2').css("opacity", "0"); 
    var top = $(window).scrollTop();
    //loadding(".m4_2");
    
    $(window).bind("scroll", function () {
        top = $(window).scrollTop();       
        
       // loadding(".m4_2");
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