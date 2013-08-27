/**
 * Copyright 2013, Viktor Melnikov
 *
 * Обеспечение работы пункта меню "Ведомости"
 */
$(function() {
    /**
     * Выбор ведомости из списка экспорта
     */
    $('li').on('click', '#export', function(event) {
        event.preventDefault();
        var url = $(this).attr('href'),
            action = $(this).data('url');
        $.post(
            action,
            { url : url },
            function(response) {
                $.pnotify({
                    text   : response.msg,
                    type   : response.status
                });
            },
            'json'
        );
    });
    /**
     * Отмена стандартного действия при нажатии на ссылку с class="excel"
     */
    $('li').on('click', 'a.excel', function(event) {
        event.preventDefault();
    });
    var data = [];
    $.post(
        '/data.php',
        function(resp)
        {
            $("#dataTable").handsontable({
                data: resp.source,
                rowHeaders: false,
                colHeaders: false,
                scrollH: 'auto',
                scrollV: 'auto'
            });
        },
        'json'
    );
    /**
     * Обработка click по кнопкам: сохранить и экспорт, при добавлении ведомости
     */
    $('#save, #export_data').on('click', function(event) {
        event.preventDefault();
        var dump = $(this).data('dump'),
            $container = $(dump),
            action = $(this).data('url');
        $.post(
            action,
            { 'array[]' :  $container.handsontable('getData')},
            function(response) {
                if (response.success === 1) {
                    $.pnotify({
                        text   : response.msg,
                        type   : response.status
                    });
                } else {
                    $.pnotify({
                        text   : response.msg,
                        type   : response.status
                    });
                }
            },
            'json'
        );
    });
});