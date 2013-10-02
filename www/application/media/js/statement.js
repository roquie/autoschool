$(function() {

    var body = $('body');

    /**
     * Настройки для календаря
     * @type {{monthNames: Array, monthNamesShort: Array, dayNames: Array, dayNamesMin: Array}}
     */
    $.datepicker.regional['ru'] = {
        monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
            'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
        monthNamesShort: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн',
            'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек'],
        dayNames: ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'],
        dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб']
    };
    $.datepicker.setDefaults($.datepicker.regional['ru']);
    $('#data_rojdeniya, #pasport_data_vyda4i').datepicker({
        maxDate: "+0D",
        nextText: "&raquo;",
        prevText: "&laquo;",
        yearRange: "1960:2013",
        dateFormat: 'dd.mm.yy',
        changeMonth: true,
        changeYear: true
    });

    $('#grajdanstvo').chosen();

    // Отображение календаря при нажатии на иконку календаря
    body.on('click', '#calendar', function() {
        $(this).closest('.input-append').find('input').datepicker( "show" );
    });

    /**
     * Маски для ввода
     */
    $("#telephone_m, #telephone_d, #phoneCustomer").mask("8 (999) 999-99-99");
    $('#data_rojdeniya, #pasport_data_vyda4i').mask('99.99.9999');

    /**
     * Переключение ввода регистрации между регистрацией по паспорту и временной регистрацией
     */
    body.on('click', '#toggleReg', function () {
        $('#reg').toggle();
        if ($(this).find('input').prop('checked')) {
            $('#vrem_reg').data('req', true);
        } else {
            $('#vrem_reg').data('req', false);
        }
    });

    /**
     * Выбор заказчика
     */
    body.on('click', '#customer', function() {
        if ($(this).find('input').prop('checked')) {
            $('#contract')[0].reset();
            $(this).closest('.tab-pane').find('.placeholder').placeholder('default');
        } else {
            $('#familCustomer').val($('#famil').val());
            $('#imyaCustomer').val($('#imya').val());
            $('#ot4estvoCustomer').val($('#ot4estvo').val());
            $('#adres_reg_po_pasportyCustomer').val($('#adres_reg_po_pasporty').val());
            $('#pasport_seriyaCustomer').val($('#seriya').val());
            $('#pasport_nomerCustomer').val($('#nomer').val());
            $('#fromCustomer').val($('#from').val());
            $('#phoneCustomer').val($('#telephone_m').val());
        }
    });

    /**
     * Отображение поля для ввода другого значения
     */
    $('.drop').on('click', 'li', function () {
        if ($(this).attr('id') === 'other') {
            $('#otherText').show();
        } else {
            $('#otherText').hide();
        }
    });
    /**
     * Заносим значение введённое в поле "Другое" в поле, откуда берётся значение для заявки
     */
    $('#otherText > textarea').on('blur', function () {
        $('#select').val($(this).val());
    });

    /**
     *
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
        if (phone.val() === phone.data('value')) {
            phone.val('');
        }
        $.each($('#statement').serializeArray(), function(k, v) {
            statement[v.name] = v.value;
        });
        $.each($('#contract').serializeArray(), function(k, v) {
            contract[v.name] = v.value;
        });
        action = $(this).data('url');
        $.post(
            action,
            {
                statement : statement,
                contract  : contract
            },
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
                            field = $('input[name="' + v + '"], textarea[name="' + v + '"]');
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