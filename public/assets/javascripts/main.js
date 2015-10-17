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
    if ($(".delete-record").length) {
        $(".delete-record").on('click', function () {
            return confirm("Are you sure to delete this user?");
        });
    }
});

$(function() {
    $(window).resize(function() {
        ifFooterFixed();
        ifModalActive();
    });
});