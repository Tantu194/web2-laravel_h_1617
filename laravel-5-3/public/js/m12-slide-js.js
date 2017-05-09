$(document).ready(function () {
    var scrollTop = $(window).scrollTop();
    scrollActivity(".m12-text-shadow", scrollTop);
    scrollActivity(".m12-banner-caption", scrollTop);
    scrollActivity(".m12-banner-caption-line", scrollTop);
    scrollActivity(".m12-banner-caption-desc", scrollTop);

    $(window).bind("scroll", function () {
        show(".m12-text-shadow");
        show(".m12-banner-caption");
        show(".m12-banner-caption-line");
        show(".m12-banner-caption-desc");
    });

});

function show(element) {
    var scrollTop = $(window).scrollTop();
    scrollActivity(element, scrollTop);
}

function scrollActivity(element, scrollTop) {
    var opacity = 0.3 + (0.0015 * scrollTop);
  
    if(element === ".m12-banner-caption-line" || element === ".m12-banner-caption-desc"){
        var y = (0.1 * scrollTop);
        if(y >= 30){
            y = 30;
        }
        $(element).css("transform", "translateY(" + y + "px)");
    }
    if (element === ".m12-banner-caption-line") {
        var widthLine = 120 + (-0.5 * scrollTop);
        $(element).css("width", widthLine + "px");
        
    }
    if (element !== ".m12-banner-caption-line" && element !== ".m12-banner-caption-desc"){
        if (element === ".m12-banner-caption") {
            opacity = 0.6 + (-0.002 * scrollTop);
        }

        if (scrollTop === 0) {
            opacity = 0.3;
            if (element === ".m12-banner-caption") {
                opacity = 1;
            }
        }

        if (opacity >= 0.7 && element === ".m12-text-shadow") {
            opacity = 0.7;
        }

        $(element).css("opacity", opacity);
        //alert(scrollTop);
    }
    
}