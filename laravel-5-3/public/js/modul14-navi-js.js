$(document).ready(function () {
    $('.m14-navi-icon-mobile-btn').click(function () {
        $('.m14-navi-menus').toggleClass('toggle-transition');
        $('.m14-navi-menus').toggle('slow');
    });

    $(window).bind("scroll", function(){
       var scrollTop = $(window).scrollTop();
        if (scrollTop >= 300) {
            $('.m14-navi-boder').addClass('m14-navi-scrollTop');
        } else {
            $('.m14-navi-boder').removeClass('m14-navi-scrollTop');
        } 
    });

    var basicScroll = 0;
    $(window).scroll(function () {
        var scrollTop = $(window).scrollTop();
        if (scrollTop > basicScroll) {
            $('.m14-navi-boder').slideUp('1000');
        } else {
            $('.m14-navi-boder').slideDown('1000');
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