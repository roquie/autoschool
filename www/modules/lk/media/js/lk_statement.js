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
$.fn.editable.defaults.emptytext = 'Пусто';
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
    });
/*    var project = [];
    $('#grajdanstvo').editable({
        //source: project,
        select2: {
            ajax: {
                url: "http://autoschool.ru/lk/ajax/getNat",
                dataType: 'json',
                results: function (data, page) {
                    return {results: data.results};
                }

            },
            width: 200
        }
    }); // сделать плагин select2*/
    var project = [];
    $.post(
        'http://autoschool.ru/lk/ajax/getNat',
        function(data)
        {
            project = data.results;
            $('#grajdanstvo').editable({
                source: project,
                select2 : {
                    width: 200
                }
            }); // сделать плагин select2
            $('#grajdanstvo').editable('disable');
        },
        'json'
    );
    $('#mesto_rojdeniya').editable();
    $('#adres_reg_po_pasporty').editable();
    $('#vrem_reg').editable();
    $('#pasport_seriya').editable();
    $('#pasport_nomer').editable();
    $('#pasport_data_vyda4i').editable({
        format: 'DD.MM.YYYY',
        viewformat: 'DD.MM.YYYY',
        combodate: {
            firstItem: 'name',
            minYear: 1960,
            maxYear: 2013
        }
    });
    $('#pasport_kem_vydan').editable();
    $('#mob_tel').editable();
    $('#dom_tel').editable();
    $.post(
        'http://autoschool.ru/lk/ajax/getEdu',
        function(data)
        {
            project = data.results;
            $('#education').editable({
                source: project,
                select2 : {
                    width: 200
                }
            }); // сделать плагин select2
            $('#education').editable('disable');
        },
        'json'
    );
    $('#mesto_raboty').editable();


    $('.editable').on('click', function(e) {
        e.preventDefault();
    });

    $('.editable').editable('disable');

    $('body').on('click', '#enable', function() {
        $('.enb_dis').toggle();
        $('.editable').editable('toggleDisabled');
    });

});
