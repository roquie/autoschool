/**
 * ajaxForm Plugin
 * Copyright 2013, Viktor Melnikov
 * Version 1.0 - Updated: August, 27, 2013
 */
;(function ( $, window, document, undefined ) {

    "use strict";

    var pluginName = 'ajaxForm';

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
                field;
            this.$element.find('input, textarea').removeClass('error');

            if (this.options.fields.length > 0) {
                $.each(this.options.fields, function(i, v) {
                    field = $('#'+v);
                    field.removeClass('error');
                });
                $.each(this.options.fields, function(i, v) {
                    field = $('#'+v);
                    if (field.data('req')) {
                        // this is govnocode
                        if ($.trim(field.html()) == '<br>' || $.trim(field.html()) == '') {
                            is_success = false;
                            field.addClass('error');
                        }
                    }
                });
            }

            $.each(data, function(i, v) {
                element = form.find('input[name="'+ v.name+'"], textarea[name="'+ v.name+'"]');
                if (element.data('req')) {
                    if ((func_del(v.value) === '') || (element.data('value') && func_del(v.value) === element.data('value'))) {
                        is_success = false;
                        element.addClass('error');
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
                    data += field.data('name') + '=' + field.html() + '&';
                });
            }
            data += this.$element.serialize();
            //=================================== тут надо вернуть отправку ajax
            alert(data);
/*
            $.post(
                action,
                data,
                this.options.callback,
                'json'
            );
*/
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
        fields : []
    };

})( jQuery, window, document );