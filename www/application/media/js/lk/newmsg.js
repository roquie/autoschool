/**
 * Developer: V. Melnikov
 * Date: 15.11.13
 * Time: 21:30
 */
$(function() {
    $('.back').on('click', function(e) {
        $('.messages').fadeOut(function() {
            $(this).empty().addClass('hide');
            $(".titles").fadeIn();
            $('.write').fadeIn();
        });
    });
    $('.newmsg').on('click', function(e) {
        e.preventDefault();
        $(this).hide();
        $('.msg').removeClass('hide').fadeIn();
    });
    $('.hidemsg').on('click', function(e) {
        e.preventDefault();
        $('.msg').fadeOut();
        $('.newmsg').show();
    });
});