/**
 * Developer: V. Melnikov
 * Date: 09.11.13
 * Time: 0:14
 */
$(function() {

    // @todo сделать выгрузку инфы первого слушателя в списке по-нормальному
    $('.listener').find('tbody tr._admins_link').first().trigger('click');

    $('body').on('click', '.btn-success.btn-circle', function(e) {
        e.preventDefault();
    });
});