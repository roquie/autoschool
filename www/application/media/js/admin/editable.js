/**
 * Developer: V. Melnikov
 * Date: 22.11.13
 * Time: 23:52
 */
$.fn.editable.defaults.mode = 'inline';
$.fn.editable.defaults.ajaxOptions = {
    dataType: 'json'
};
$.fn.editable.defaults.emptytext = 'Пусто';
$.fn.editableform.defaults.success = function(response, newValue) {
    if (response.status === 'empty') return response.msg;
    if (response.status === 'error') noty({
        type : response.status,
        message : response.msg
    });
};
$(function() {

    var statement = $('.table.statement'),
        contract = $('.table.contract');

    moment.lang('ru');

    statement.find('.data_rojdeniya').editable({
        format: 'DD.MM.YYYY',
        viewformat: 'DD.MM.YYYY',
        combodate: {
            firstItem: 'name',
            minYear: 1960,
            maxYear: 2013
        }
    });

    getData(statement.find('#education'));
    getData(statement.find('#grajdanstvo'));

    statement.find('.pasport_data_vyda4i').editable({
        format: 'DD.MM.YYYY',
        viewformat: 'DD.MM.YYYY',
        combodate: {
            firstItem: 'name',
            minYear: 1960,
            maxYear: 2013
        }
    });

    $('.table').find('a').each(function() {
        if ($(this).attr('id') == null) {
            $(this).editable('disable');
        }
    }).on('click', function(e) {
        e.preventDefault();
    });

    $('body').on('click', '#enableSt', function() {
        $(this).fadeOut(function() {
            $('#disableSt').fadeIn('fast');
        });
        $('.table.statement').find('.editable').editable('enable');
    }).on('click', '#enableCn', function() {
        $(this).fadeOut(function() {
            $('#disableCn').fadeIn('fast');
        });
        $('.table.contract').find('.editable').editable('enable');
    }).on('click', '#disableSt', function() {
        $('.table.statement').find('.editable').editable('disable');
        $(this).fadeOut(function() {
            $('#enableSt').fadeIn('fast');
        });
    }).on('click', '#disableCn', function() {
        $('.table.contract').find('.editable').editable('disable');
        $(this).fadeOut(function() {
            $('#enableCn').fadeIn('fast');
        });
    }).off('click', '.statement .editable-submit')
    .on('click', '.statement .editable-submit', function() {
        var field = $(this).closest('tr').find('a').data('name'),
            input = $(this).closest('.control-group').find('input.input-medium'),
            id = $('.statuses').find('.status a').first().data('id'),
            cur_listener = $('.listener').find('tbody tr[id="'+id+'"]'),
            data = cur_listener.find('td').last().text().split(' '),
            name = data[1].split('.');
        switch (field) {
            case 'imya' :
                cur_listener.find('td').last().text(data[0] + ' ' + input.val().slice(0, 1) + '.' + name[1] + '.');
                break;
            case 'famil' :
                cur_listener.find('td').last().text(input.val() + ' ' + data[1]);
                break;
            case 'ot4estvo' :
                cur_listener.find('td').last().text(data[0] + ' ' + name[0] + '.' + input.val().slice(0, 1) + '.');
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
    }

});