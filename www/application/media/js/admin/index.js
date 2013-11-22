/**
 * Developer: V. Melnikov
 * Date: 09.11.13
 * Time: 0:14
 */
/**
 * Developer: V. Melnikov
 * Date: 06.10.13
 * Time: 0:15
 */
$(function() {
    // @todo сделать выгрузку инфы первого слушателя в списке по-нормальному

    $('._listener_link').ajaxForm({
        debug : true,
        beforeSend : function() {
            $('.right-block').html($('#loader').html());
        }
    });

    var tr = $('.listener').find('tbody tr');

    if (tr.length) {
        tr.first().trigger('click');
    }

    /*
    * Initialization Editable
    */
/*    $('.table').find('a').each(function() {
        if ($(this).attr('id') == null) {
            $(this).editable('disable');
        }
    }).on('click', function(e) {
            e.preventDefault();
        });

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

    getData($('#education'));
    getData($('#grajdanstvo'));

    $('#pasport_data_vyda4i').editable({
        format: 'DD.MM.YYYY',
        viewformat: 'DD.MM.YYYY',
        combodate: {
            firstItem: 'name',
            minYear: 1960,
            maxYear: 2013
        }
    });

    $('body').on('click', '#enableSt', function() {
        $(this).hide();
        $('#disable').show();
        $('.editable').editable('enable');
    }).on('click', '#disable', function() {
            $('.editable').editable('disable');
            $(this).hide();
            $('#enable').show();
        }).on('click', '.editable-submit', function() {
            var field = $(this).closest('tr').find('a').data('name'),
                input = $(this).closest('.control-group').find('input.input-medium');
            switch (field) {
                case 'imya' :
                    $('#userName').text(input.val());
                    break;
                case 'famil' :
                    $('#userFamil').text(input.val());
                    break;
            }
        });

    function getData(obj) {
        var project = [];
        $.post(
            obj.data('action'),
            function(data)
            {
                project = data.results;
                obj.editable({
                    source: project,
                    select2 : {
                        width: 200
                    }
                });
                obj.editable('disable');
            },
            'json'
        );
    }*/
});