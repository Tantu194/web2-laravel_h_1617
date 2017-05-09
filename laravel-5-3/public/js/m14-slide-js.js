$(document).ready(function () {
    var scrollTop = $(window).scrollTop();
    scrollActivity(".m14-banner > h1", scrollTop);

    $(window).bind("scroll", function () {
        show(".m14-banner > h1");
    });
});

function show(element) {
    var scrollTop = $(window).scrollTop();
    scrollActivity(element, scrollTop);
}

function scrollActivity(element, scrollTop) {
    var opacity = 0.6 + (-0.002 * scrollTop);
    if(scrollTop === 0){
        opacity = 1;
    }
    $(element).css("opacity", opacity);
    //alert(scrollTop);


}