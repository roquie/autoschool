/**
 * Developer: V. Melnikov
 * Date: 06.10.13
 * Time: 0:15
 */
$.fn.editable.defaults.mode = 'inline';
$.fn.editable.defaults.ajaxOptions = {
    dataType: 'json'
};
$.fn.editableform.defaults.url = $('.data').data('url');
$.fn.editableform.defaults.success = function(response, newValue) {
    console.log(response.data);
    if (response.status === 'error') return response.msg;
};
$(function() {

    $('#famil').editable();
    $('#imya').editable();
    $('#ot4estvo').editable();

    moment.lang('ru');
    $('#data_rojdeniya').editable({
        format: 'DD.MM.YYYY',
        viewformat: 'DD.MM.YYYY',
        combodate: {
            firstItem: 'name',
            minYear: 1960,
            maxYear: 2013
        }
    }); // сделать датой

    $('#grajdanstvo').editable({
        source: [
            {id: 'gb', text: 'Great Britain'},
            {id: 'us', text: 'United States'},
            {id: 'ru', text: 'Russia'}
        ],
        select2: {
            width: 200
        }
    }); // сделать плагин select2

    $('.editable').on('click', function(e) {
        e.preventDefault();
    });

    $('.editable').editable('disable');

    $('body').on('click', '#enable', function() {
        $('.enb_dis').toggle();
        $('.editable').editable('toggleDisabled');
    });

});
