require('./bootstrap');


$(document).ready(function() {
    $('.menu-icon-wrapper').click(function(event) {
        $('.menu-icon').toggleClass('menu-icon-active');
    });
});