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
        nextText: "&raquo;",
        prevText: "&laquo;",
        yearRange: "1960:2013",
        dateFormat: 'dd.mm.yy',
        changeMonth: true,
        changeYear: true
    });

    /**
     * Маски для ввода дат и телефонов
     */
    $("#telephone_m, #telephone_d ").mask("8 (999) 999-99-99");
    $('#data_rojdeniya, #pasport_data_vyda4i').mask('99.99.9999');

    /**
     * Переключение ввода регистрации между регистрацией по паспорту и временной регистрацией
     */
    $('body').on('click', '#toggleReg', function () {
        $('#reg div.control-group').toggle();
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
            $('#otherText').show();
        else
            $('#otherText').hide();
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
    $('#statement').on('submit', function (e) {
        e.preventDefault();
        var element,
            $this = $(this),
            action = $this.attr('action'),
            data = $this.serializeArray(),
            error = false;
        $('.slct, .drop').css({ 'border-color': '#cecece' });
        $('.control-group').removeClass('error');
        if ($('#select').val() === '') {
            $('.slct, .drop').css({ 'border-color': '#bd4247' });
            error = true;
        }
        //if (validation(data) && !error) {
            $.post(
                action,
                data,
                function (response) {
                    if (response.status === 'success') {
                        $('.well').html(response.msg);
                    }
                    if (response.status === 'error') {
                        $.each(response.msg, function (i, v) {
                            $('input[name="' + v + '"], textarea[name="' + v + '"]').closest('.control-group').addClass('error');
                        });
                    }
                },
                'json'
            );
        //}
    });
});