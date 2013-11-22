/**
 * Developer: V. Melnikov
 * Date: 09.11.13
 * Time: 0:14
 */
$(function() {
    // @todo сделать выгрузку инфы первого слушателя в списке по-нормальному

    var tr = $('.listener').find('tbody tr');

    if (tr.length) {
        tr.first().trigger('click');
    }

    $('._listener_link').ajaxForm({
        debug : true,
        beforeSend : function() {
            $('.right-block').html($('#loader').html());
        }
    });
});