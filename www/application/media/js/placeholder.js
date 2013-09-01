/**
 * placeholder Plugin
 * Copyright 2013 Viktor Melnikov
 * Version 2.0 - Updated: August, 8, 2013
 * --------------------------------------------------
 * Example:
 * <input type="text" class="placeholder" data-value="example" data-color="#ff0000">
 * $('.placeholder').placeholder();
 *
 * Для вызова отдельных методов:
 * 1. Создать метод:
 *      Plugin.prototype.message = function (msg) {
 *          alert(msg);
 *      }
 * 2. Вызов метода:
 *      $(element).placeholder('message', 'Hello world!');
 */
;(function ( $, window, document, undefined ) {

    "use strict";

    /**
     * Дефолтные параметры
     * @type {string}
     */
    var pluginName = 'placeholder',
        defaults = {
            value : '',
            color : '#999'
        };

    /**
     * Конструктор плагина
     * @param element - элемент, на котором вызван плагин
     * @param options - опции плагина
     * @constructor
     */
    function Plugin( element, options ) {
        this.element = element;
        this.metadata = $(this.element).data();
        this.options = $.extend( {}, defaults, options, this.metadata);
        this.init();
    }

    Plugin.prototype = {
        constructor : Plugin,
        init : function() {

            var el = $(this.element),
                $this = this.element,
                options = this.options;

            if (el.val() === '') {
                el.val(this.options.value).css({color : this.options.color});
            }
            el.on('focus', function() {
                el.css({color : '#000'});
                if(el.val() == options.value)
                {
                    el.val('');
                }
            }).on('blur', function() {
                    if ($.trim($this.value == ''))
                    {
                        this.value = ($this.value != '') ? el.val() : ($this.defaultValue != options.value) ? options.value : $this.defaultValue;
                    }
                    if($this.value == options.value) {
                        el.css({color: options.color});
                    } else {
                        el.css({color:'#000'});
                    }
            });
        },
        /**
         * Необходим после отправки формы, возвращает первичные значения в поля
         */
        default : function() {
            var el = $(this.element),
            $this = this.element,
            options = this.options;
            el.val(this.options.value).css({color : this.options.color});
        }

    };

    /**
     * Предотвращаем дублирование плагина
     * @param option
     * @returns {*}
     */
    $.fn[pluginName] = function ( option ) {
        return this.each(function () {
            var $this   = $(this),
                data    = $this.data('plugin_' + pluginName),
                options = typeof option == 'object' && option;
            if (!data) $this.data('plugin_' + pluginName, (data = new Plugin(this, options)));
            if (typeof option == 'string') data[option]();
        });
    }

})( jQuery, window, document );
$().ready(function() {
    $.each($('input, textarea'), function() {
        if ($(this).data('value')) {
            $(this).addClass('placeholder');
        }
    });
});