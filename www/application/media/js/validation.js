/**
 * ajaxForm Plugin
 * Copyright 2013, Viktor Melnikov
 * Version 1.0 - Updated: August, 27, 2013
 */
;(function ( $, window, document, undefined ) {

    "use strict";

    var pluginName = 'ajaxForm';

    /**
     * Конструктор
      * @param element
     * @param options
     * @constructor
     */
    function Plugin(element, options) {
        this.init(element, options);
    }

    Plugin.prototype = {
        constructor : Plugin,
        init : function(element, options) {
            this.$element = $(element);
            this.options = $.extend( {}, $.fn[pluginName].defaults, options);
            // вешает на форму обработчик отправки формы
            this.$element.on('submit', $.proxy(this.validation, this));
            if (this.options.trigger == 'blur') {
                this.blur();
            }
        },
        /**
         * Создание сообщения с ошибкой сбоку формы.
         * @param message
         * @param input
         */
        buildBalloon : function(message, input) {
            var balloon = $('<div>', {
                    class : 'formError arrow-left'
                }),
                inputTopPosition,
                inputLeftPosition,
                inputWidth;
            inputTopPosition = this.options.offsetTopBalloon;
            inputWidth = input.width();
            inputLeftPosition = inputWidth;
            balloon.html(message).css({
                top : inputTopPosition,
                left : inputLeftPosition
            }).addClass('in').insertAfter(input);
        },
        /**
         * Функция, которая вызывается чтобы повесить на элементы формы обработчик события потери фокуса
         */
        blur : function() {
            var form = this.$element,
                data = this.$element.serializeArray(),
                $this = this,
                element,
                blur = this.eventBlur;
            if (this.options.fields.length > 0) {
                data = this.options.fields.concat(data);
            }
            $.each(data, function(i, v) {
                if ( typeof v === 'object') {
                    element = form.find('input[name="'+ v.name+'"], textarea[name="'+ v.name+'"]');
                } else {
                    element = $('#'+v);
                }
                element.on('blur', $.proxy(blur, $this));
            });
        },
        /**
         * Событие возникает при потере фокуса объектом
         * @param e
         */
        eventBlur : function(e) {
            var el = $(e.target),
                empty = false,
                balloon = el.removeClass('error').next();
            if (el.data('req')) {
                switch (el.get(0).nodeName.toLowerCase()) {
                    case 'div' :
                        if (this.delSpace(el.text()) === '') {
                            empty = true;
                        }
                        break;
                    default :
                        if ( this.delSpace(el.val()) === '' || ( el.data('value') && this.delSpace(el.val()) === el.data('value') ) ) {
                            empty = true;
                        }
                        break;
                }
                if (empty) {
                    el.addClass('error');
                    if (balloon.length === 0)
                        this.buildBalloon(el.data('error'), el);
                } else {
                    el.removeClass('error').next().remove();
                }
            }
        },
        /**
         * Валидация формы, если всё заполнено - отправка данных формы ajax-запросом
         * @param e
         */
        validation : function(e) {
            e.preventDefault();
            var element,
                is_success = true,
                error = [],
                form = this.$element,
                data = this.$element.serializeArray(),
                func_del = this.delSpace,
                balloon = this.buildBalloon,
                field,
                empty = false;

            this.$element.find('input, textarea').removeClass('error').next('.formError').remove();

            if (this.options.fields.length > 0) {
                $.each(this.options.fields, function(i, v) {
                    field = $('#'+v);
                    field.removeClass('error').next().remove();
                });
                data = this.options.fields.concat(data);
            }
            $.each(data, function(i, v) {
                if ( typeof v === 'object') {
                    element = form.find('input[name="'+ v.name+'"], textarea[name="'+ v.name+'"]');
                } else {
                    element = $('#'+v);
                }
                if (element.data('req')) {
                    switch (element.get(0).nodeName.toLowerCase()) {
                        case 'div' :
                            if (func_del(element.text()) === '') {
                                empty = true;
                            }
                            break;
                        case 'input' :
                            if ( func_del(element.val()) === '' || ( element.data('value') && func_del(element.val()) === element.data('value') ) ) {
                                empty = true;
                            }
                            break;
                    }
                    if (empty) {
                        is_success = false;
                        element.addClass('error');
                        balloon(element.data('error'), element);
                        empty = false;
                    }
                }
            });
            if (is_success) {
                this.ajax();
            }
        },
        /**
         * ajax-отправка данных формы
         */
        ajax : function() {
            var action = this.$element.attr('action'),
                data = '' /*= this.$element.serialize()*/,
                field;
            if (this.options.fields.length > 0) {
                $.each(this.options.fields, function(i, v) {
                    field = $('#'+v);
                    data = data + field.data('name') + '=' + field.html() + '&';
                });
            }
            data = data + this.$element.serialize();
            $.post(
                action,
                data,
                this.options.callback,
                'json'
            );
        },
        /**
         * Функция для удаления пробелов в строке
         * @param string
         * @returns {XML|string|void}
         */
        delSpace : function(string) {
            return string.replace(/\s/g, "");
        }
    };

    $.fn[pluginName] = function(option) {
        return this.each(function() {
            var $this = $(this),
                data = $this.data('plugin_' + pluginName),
                options = typeof option == 'object' && option;
            if (!data) $this.data('plugin_' + pluginName, (data = new Plugin(this, options)));
            if (typeof option == 'string') data[option]();

        });
    };

    $.fn[pluginName].defaults = {
        callback : function() {},
        offsetTopBalloon : 0,
        trigger : 'submit', // submit|blur
        fields : []
    };

})( jQuery, window, document );