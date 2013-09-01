$(function() {
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

    // Отображение календаря при нажатии на иконку календаря
    $('body').on('click', '#calendar', function() {
        $(this).closest('.input-append').find('input').datepicker( "show" );
    });

    /**
     * Маски для ввода
     */
    $("#telephone_m, #telephone_d").mask("8 (999) 999-99-99");
    $("#seriya").mask("99 99");
    $("#nomer").mask("999 999");
    $('#data_rojdeniya, #pasport_data_vyda4i').mask('99.99.9999');

    /**
     * Переключение ввода регистрации между регистрацией по паспорту и временной регистрацией
     */
    $('body').on('click', '#toggleReg', function () {
        $('#reg div.block').toggle();
        if ($('#sltReg').prop('checked')) {
            $('#adres_reg_po_pasporty').data('req', false);
            $('#vrem_reg').data('req', true);
        } else {
            $('#adres_reg_po_pasporty').data('req', true);
            $('#vrem_reg').data('req', false);
        }
    });

    /**
     * Отображение поля для ввода другого значения
     */
    $('.drop').on('click', 'li', function () {
        if ($(this).attr('id') === 'other')
            $('#otherText').show().data('req', true);
        else
            $('#otherText').hide().data('req', false);
    });
    /**
     * Заносим значение введённое в поле "Другое" в поле, откуда берётся значение для заявки
     */
    $('#otherText > textarea').on('blur', function () {
        $('#select').val($(this).val());
    });

    /**
     * Отправка заявки
     */
    $('#statement').ajaxForm({
        before   : function() {
            $('.slct, .drop').css({ 'border-color': '#cecece' });
            if ($('#select').val() === '' || $('#select').val() === 'Другое') {
                $('.slct, .drop').css({ 'border-color': '#bd4247' });
                if ($('#otherText').data('req')) {
                    $('#otherText').addClass('error');
                }
                return false;
            }
            return true;
        },
        callback : function(response) {
            if (response.status === 'success') {
                $('#result').html(response.msg);
            }
            if (response.status === 'error') {
                $.each(response.data, function (i, v) {
                    $('input[name="' + v + '"], textarea[name="' + v + '"]').addClass('error');
                });
            }
        },
        balloon : false,
        placement : 'right'
    });
    /**
     * Подсказки в полях ввода
     */
    $('.placeholder').placeholder();
});