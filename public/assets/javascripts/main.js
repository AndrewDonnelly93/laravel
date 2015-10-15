function ifFooterFixed() {
    if ($("footer").length && ($("body").height <= $("window").height)) {
        $("footer").addClass("fixed");
    } else {
        $("footer").removeClass("fixed");
    }
}

function ifModalActive() {
    if ($(".window-overlay").hasClass("active")) {
        $("header").addClass("blur");
        $(".content").addClass("blur");
        $("footer").addClass("blur");
    }
}

$(function() {
    ifFooterFixed();
    ifModalActive();
});

$(function() {
    $(window).resize(function() {
        ifFooterFixed();
        ifModalActive();
    });
});