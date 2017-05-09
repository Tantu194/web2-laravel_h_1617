$(document).ready(function () {
    $('.m12-navi-icon-mobile-btn').click(function () {
        $('.m12-navi-menus').toggleClass('toggle-transition');
        $('.m12-navi-menus').toggle('slow');
    });

    $(window).bind("scroll", function(){
       var scrollTop = $(window).scrollTop();
        if (scrollTop >= 300) {
            $('.m12-navi-boder').addClass('m12-navi-scrollTop');
        } else {
            $('.m12-navi-boder').removeClass('m12-navi-scrollTop');
        } 
    });

    var basicScroll = 0;
    $(window).scroll(function () {
        var scrollTop = $(window).scrollTop();
        if (scrollTop > basicScroll) {
            $('.m12-navi-boder').slideUp('1000');
        } else {
            $('.m12-navi-boder').slideDown('1000');
        }
        basicScroll = scrollTop;
    });

    $('header').css("opacity", "0");


    loadding('header', 0);

    function loadding(element, deplay) {
        $(element).each(function () {
            $(this).delay(deplay).animate({'opacity': '1'}, 1000);
        });
    }
});