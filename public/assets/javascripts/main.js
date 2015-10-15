function ifFooterFixed() {
    if ($("footer").length && ($("body").height <= $("window").height)) {
        $("footer").addClass("fixed");
    } else {
        $("footer").removeClass("fixed");
    }
}

$(function() {
    ifFooterFixed();
});

$(function() {
    $(window).resize(function() {
        ifFooterFixed();
    });
});