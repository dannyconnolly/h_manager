$(document).ready(function($) {

    $(".table").tablesorter();

    $('.nav-list li').on('click', function() {
        $('.nav-list li').removeClass('on');
        $(this).addClass('on');
    });
});