/* fix vertical when not overflow
 call fullscreenFix() if .fullscreen content changes */
function fullscreenFix() {
    var h = $('body').height();
    // set .fullscreen height
    $(".content-b").each(function (i) {
        if ($(this).innerHeight() <= h) {
            $(this).closest(".fullscreen").addClass("not-overflow");
        }
    });
}
$(window).resize(fullscreenFix);
fullscreenFix();

/* resize background images */
function backgroundResize() {
    var windowH = $(window).height();
    $(".background").each(function (i) {
        var path = $(this);
        // variables
        var contW = path.width();
        var contH = path.height();
        var imgW = path.attr("data-img-width");
        var imgH = path.attr("data-img-height");
        var ratio = imgW / imgH;
        // overflowing difference
        var diff = parseFloat(path.attr("data-diff"));
        diff = diff ? diff : 0;
        // remaining height to have fullscreen image only on parallax
        var remainingH = 0;
        if (path.hasClass("parallax")) {
            var maxH = contH > windowH ? contH : windowH;
            remainingH = windowH - contH;
        }
        // set img values depending on cont
        imgH = contH + remainingH + diff;
        imgW = imgH * ratio;
        // fix when too large
        if (contW > imgW) {
            imgW = contW;
            imgH = imgW / ratio;
        }
        //
        path.data("resized-imgW", imgW);
        path.data("resized-imgH", imgH);
        path.css("background-size", imgW + "px " + imgH + "px");
    });
}
$(window).resize(backgroundResize);
$(window).focus(backgroundResize);
backgroundResize();

Pace.on("start", function () {
    $(".pace-activity").html("<div class=\"fullscreen background not-overflow\" style=\"background-image: url(webassets\/images\/loading-bg.jpg);\" data-img-width=\"1398\" data-img-height=\"856\" ><div class=\"content-a\"><div class=\"content-b\"><h1>STYLE</h1><div class=\"css-slider\"><div class=\"css-slide-container\"><p>Doesn't need a ramp to stand out</p><p>Can hold the audience with an entry</p><p>Makes the world swing to your tunes</p><p>Is an attitude that leaves an impression</p><p>CAN GRAB ATTENTION WITHOUT ASKING FOR IT</p></div></div></h1></div></div></div>");
    fullscreenFix();
    backgroundResize();
});

Pace.on("done", function () {
    $(".pace").fadeOut(500);
});