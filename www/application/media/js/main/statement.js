$(function() {

    var body = $('body');

    /**
     * Отображение первой вкладки
     */
    $('.tab-pane').hide().eq(0).show();
    $('ul#tabs').find('li').eq(0).data('resolve', true);
    /**
     * Переход по вкладкам
     */
    $('ul#tabs').on('click', 'li', function(e) {
        e.preventDefault();
        if ($(this).data('resolve')) {
            var tab = $(this).find('a').attr('href');
            $('.tab-pane').hide();
            $('ul#tabs').find('li').removeClass('active');
            $(this).addClass('active');
            $(tab).show();
        }
    });
    /**
     * Кнопка "далее"
     */
    body.on('click', 'button#next', function(e) {
        e.preventDefault();
        var tab = $('#tabs'),
            new_tab = $(this).closest('.tab-pane').next('.tab-pane'),
            cur_tab = $(this).closest('.tab-pane'),
            nav = new_tab.attr('id'),
            form = $(this).closest('form'),
            is_success = false;
        if (cur_tab.index() === 1) {
            $('.slct, .drop').css({ 'border-color': '#cecece' });
            if ($('#select').val() === '' || $('#select').val() === 'Другое') {
                $('.slct, .drop').css({ 'border-color': '#bd4247' });
                is_success = false;
            } else {
                is_success = true;
            }
        }
        var $link = tab.find('a[href^=#'+cur_tab.attr('id')+']');
        $link.next('.error').remove();
        if (validate(form) && is_success) {
            $('.tab-pane').hide();
            new_tab.show();
            tab.find('li').removeClass('active');
            tab.find('a[href^=#'+nav+']').parent('li').data('resolve', true).addClass('active');
        } else {
            $('<span>', {
                class : 'error'
            }).insertAfter($link);
        }
    });

    /**
     * Отправка заявки
     */
    $('#send').on('click', function(e) {
        e.preventDefault();
        var statement = {},
            contract = {},
            action,
            field,
            phone = $('#telephone_d');
        if (phone.val() === phone.attr('placeholder')) {
            phone.val('');
        }
        $.each($('#statement').serializeArray(), function(k, v) {
            statement[v.name] = v.value;
        });
        $.each($('#contract').serializeArray(), function(k, v) {
            contract[v.name] = v.value;
        });

        $.extend(true, statement, contract);

        action = $(this).data('url');
        $.post(
            action,
            statement,
            function(response) {
                if (response.status === 'success') {
                    $('#result').html(response.msg);
                }
                if (response.status === 'error') {
                    noty({
                        type : response.status,
                        message : response.msg
                    });
                }
                if (response.status === 'empty') {
                    var tab, nav, $link;
                    $.each(response.data, function (key, value) {
                        $.each(value, function(k, v) {
                            field = $('input[name="' + key + '[' + v + ']"], textarea[name="' + v + '"]');
                            field.addClass('error');
                        });
                        tab = $('#'+key).closest('.tab-pane');
                        nav = tab.attr('id');
                        $link = $('#tabs').find('a[href^=#'+nav+']');
                        $link.next('.error').remove();
                        $('<span>', {
                            class : 'error'
                        }).insertAfter($link);
                    });
                }
            },
            'json'
        );
    });

    /**
     * Подсказки в полях ввода
     */
    $('.placeholder').placeholder();
});