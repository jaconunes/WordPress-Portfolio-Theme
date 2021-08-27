$(document).ready(function () {

    var nav = $('#menu - scroll');

    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            nav.slideDown('30');
        } else {
            nav.slideUp('30');
        }
    });
});