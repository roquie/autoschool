/**
 * Валидация формы (проверка полей)
 * @param form
 * @param fields
 * @param options
 * @returns {boolean}
 */
function validate(form, is_balloon, options, fields) {
    var element,
        is_success = true,
        data = form.serializeArray(),
        field,
        empty = false;

    if (!is_balloon) {
        is_balloon = false;
    }

    form.find('input, textarea').removeClass('error').next('.formError').remove();

    if (typeof fields === 'object' && fields.length > 0) {
        $.each(fields, function(i, v) {
            field = $('#'+v);
            field.removeClass('error').next().remove();
        });
        data = fields.concat(data);
    }
    for (var i = 0; i < data.length; i++) {
        if ( typeof data[i] === 'object') {
            element = form.find('input[name="'+ data[i].name+'"], textarea[name="'+ data[i].name+'"]');
        } else {
            element = $('#'+data[i]);
        }
        if (element.data('req')) {
            switch (element.get(0).nodeName.toLowerCase()) {
                case 'div' :
                    if (delSpace(element.text()) === '') {
                        empty = true;
                    }
                    break;
                case 'input' :
                    if ( delSpace(element.val()) === '' || ( element.data('value') && (element.val() === element.data('value')) ) ) {
                        empty = true;
                    }
                    break;
                case 'textarea' :
                    if ( delSpace(element.val()) === '' || ( element.data('value') && (element.val() === element.data('value')) ) ) {
                        empty = true;
                    }
                    break;
            }
            if (empty) {
                is_success = false;
                element.addClass('error');
                if (is_balloon)
                    balloon(element, options);
                empty = false;
            }
        }
    }
    return is_success;
}
/**
 * Если валидация прошла успешно, то ajax отправка формы на сервер
 * @param form
 * @param callback
 * @param fields
 * @param addData
 */
function send_ajax( form, callback, fields, addData) {
    var action,
        data = '',
        field,
        value,
        i;
    if (typeof fields === 'object' && fields.length > 0) {
        $.each(fields, function(i, v) {
            field = $('#'+v);
            value = (field.html()) ? field.html() : field.val();
            data += v + '=' + value + '&';
        });
    }
    if (!callback && typeof(callback) != "function") {
        callback = function(){};
    }
    action = (form.data('url')) ? form.data('url') : form.attr('action');
    if ( typeof addData === 'object') {
        $.each(addData, function(key, value) {
            if (value != '')
                data += key + '=' + value + '&';
        });
    }
    data += form.serialize();
    $.post(
        action,
        data,
        callback,
        'json'
    );
}
/**
 * Добавление к полю Balloona'a
 * @param input
 * @param options
 */
function balloon(input, options) {
    var balloon,
        placement = 'right',
        inputTopPosition,
        inputLeftPosition,
        inputWidth,
        arrowClass,
        message,
        pos;

    options = $.extend({}, {
        placement : 'right',
        offsetTopBalloon : 0,
        hideBalloon : 20
    }, options);

    arrowClass = (input.data('placement')) ? input.data('placement') : options.placement;
    balloon = $('<div>', {
        class : 'formError arrow-'+arrowClass
    });

    pos = $.extend({}, (typeof input[0].getBoundingClientRect == 'function') ? input[0].getBoundingClientRect() : {
        width: input[0].offsetWidth,
        height: input[0].offsetHeight
    }, input.offset());

    switch (arrowClass) {
        case 'top' :
            inputTopPosition = pos.top - options.offsetTopBalloon;
            inputLeftPosition = pos.left - 18;
            break;
        case 'right' :
            inputTopPosition = pos.top - options.offsetTopBalloon;
            inputLeftPosition = input.offset().left + input.width() + 18;
            break;
        case 'bottom' :
            inputTopPosition = pos.top + input.height() + options.offsetTopBalloon;
            inputLeftPosition = pos.left - 18;
            break;
    }


    message = (input.data('error')) ? input.data('error') : 'Заполните поле';
    balloon.html(message).offset({
        top : inputTopPosition,
        left : inputLeftPosition
    }).addClass('in').insertAfter(input);
    balloon.delay( options.hideBalloon * 1000).animate({opacity : 0}, 'slow').queue(function() { $(this).remove(); });
}
/**
 * Удаление всех пробелов из строки
 * @param string
 * @returns {XML|string|void}
 */
function delSpace (string) {
    return string.replace(/\s/g, "");
}
/**
 * Функция проверки корректности e-mail адреса
 * @param email
 * @returns {boolean}
 */
function isValidateEmail(email)
{
    var pattern = /^([\w\d\._-]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return pattern.test(email);
}
/**
 * Делает два блока одинаковой высоты
 *
 * @param div1 первый блок
 * @param div2 второй блок
 */
function equalHeight (div1, div2) {
    var tallest = div1.height();
    if ( tallest < div2.height() )
    {
        tallest = div2.height();
    }
    div1.css({minHeight:tallest});
    div2.css({minHeight:tallest});
}