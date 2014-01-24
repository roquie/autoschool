/**
 * setting.js
 * Viktor Melnikov
 * Updated: January, 21, 2014
 *
 */
$(document).ready(function() {

    $(window).on('load', function() {
        var hash = '';
        if (location.hash != '') {
            hash = location.hash;
            $('.nav-tabs li a').each(function() {
                if ($(this).attr('href') == hash) {
                    $(this).parent('li').addClass('active');
                } else {
                    $(this).parent('li').removeClass('active');
                }
            });
            $('.tab-pane').each(function() {
                if ($(this).attr('id') == hash.slice(1)) {
                    $(this).addClass('active');
                } else {
                    $(this).removeClass('active');
                }
            });
        } else {
            $('.nav-tabs li').last().addClass('active');
            $('.tab-pane').first().addClass('active');
        }
    });

    $('.nav-tabs').on('click', 'li a',function() {
        location.hash = $(this).attr('href').slice(1);
    });

});