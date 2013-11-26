/**
 * Developer: V. Melnikov
 * Date: 26.11.13
 * Time: 14:36
 */
$(function() {

    $('select#listeners').listbox({
        searchbar : true
    }).on('change', function() {
        $('#inp_listeners').val($(this).val());
    });
    $('select#groups').listbox();

    equalHeight($('.span3'), $('.span1'));

});