/**
 * Developer: V. Melnikov
 * DateTime: 1.09.13 22:27
 * Current file name: init.php
 *
 * All rights reserved (c)
 */
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

    // Отображение календаря о иконке календаря
    $('body').on('click', '#calendar', function() {
        $(this).closest('.input-append').find('input').datepicker( "show" );
    });

    /**
     * Маски для ввода дат и телефонов
     */
    $("#telephone_m, #telephone_d").mask("8 (999) 999-99-99");
    $("#seriya, #nomer").mask("99.99");
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
        trigger : 'blur',
        offsetTopBalloon : -4,
        balloon : false,
        placement : 'right'
    });
/*
    $('#statement').on('submit', function (e) {
        e.preventDefault();
        var element,
            $this = $(this),
            action = $this.attr('action'),
            data = $this.serializeArray(),
            error = false;
        $('.slct, .drop').css({ 'border-color': '#cecece' });
        if ($('#select').val() === '' || $('#select').val() === 'Другое') {
            $('.slct, .drop').css({ 'border-color': '#bd4247' });
            if ($('#otherText').data('req')) {
                $('#otherText').addClass('error');
            }
            error = true;
        }
        if (validation(data) && !error) {
            $('.send').prop('disabled', true);
            $.post(
                action,
                data,
                function (response) {
                    if (response.status === 'success') {
                        $('.well').html(response.msg);
                    }
                    if (response.status === 'error') {
                        $.each(response.data, function (i, v) {
                            $('input[name="' + v + '"], textarea[name="' + v + '"]').addClass('error');
                        });
                    }
                    $('.send').prop('disabled', false);
                },
                'json'
            );
        }
    });
*/
    /**
     * Подсказки в полях ввода
     */
    $('.placeholder').placeholder();
});
/**
 * Функция для валидации полей формы
 * @param data - массив со значениями формы
 * @returns {boolean}
 */
function validation(data)
{
    var element,
        is_success = true,
        error = [];
    $.each(data, function(i, v) {
        element = $('input[name="'+ v.name+'"], textarea[name="'+ v.name+'"]');
        element.removeClass('error');
        if (element.data('req')) {
            if (removeWhitespaces(v.value) === '' || v.value === element.data('value')) {
                is_success = false;
                element.addClass('error');
            }
        }
    });
    return is_success;
}
/**
 * Функция удаления пробелов из строки
 * @param str
 * @returns {XML|string|void}
 */
function removeWhitespaces(str)
{
    return str.replace(/\s/g, "");
}