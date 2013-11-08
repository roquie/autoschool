/**
 * Developer: V. Melnikov
 * Date: 09.11.13
 * Time: 0:14
 */
$(function() {

    $('.listener').find('tbody').css('height', $('.block').css('height'));
    $('#slimScroll').slimScroll({
        height: $('.listener').height() - 70,
        railVisible: true,
        alwaysVisible: true
    });

});