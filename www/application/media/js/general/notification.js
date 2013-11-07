/**
 * notification using Bootstrap
 * Copyright 2013, Viktor Melnikov
 * Version 1.0 - Updated: August, 25, 2013
 *
 * Example (minimum settings):
 * noty({
 *      message : 'text'
 * });
 */
;(function ( $, window, document, undefined ) {
    "use strict";
    var pluginName = 'notification';
    function Plugin(options) {
        this.init(options);
    }
    Plugin.prototype = {
        constructor : Plugin,
        /**
         * Создание сообщения с уведомлением и добавление в обший блок нотификации
         * @param options
         */
        init : function(options) {
            var notification = $("#notification"),
                notification_inner;
            this.options = $.extend( {}, $.fn[pluginName].defaults, options);
            notification_inner = $('<div>', {
                class : 'alert alert-' + this.options.type
            }).css({ 'max-height' : this.options.width });
            if ( !this.options.permanent ) {
                $('<a>', {
                    class : 'close',
                    href : '#',
                    html : '&times;'
                }).prependTo(notification_inner);
                $(document).on('click', 'a.close', $.proxy(this.close, this));
            }
            if ( this.options.title != '') {
                $('<h4>', {
                    text : this.options.title
                }).appendTo(notification_inner);
            }
            notification.prepend(notification_inner.append(this.options.message));
            if ( !this.options.permanent ) {
                if ( this.options.timeout != 0 ) {
                    if (this.options.fade) {
                        notification_inner.delay( this.options.timeout * 1000).animate({ opacity : 0, 'margin-right' : '-'+this.options.width+'px' }, 'slow').queue(function() {$(this).remove()});
                    } else {
                        notification_inner.delay( this.options.timeout * 1000).queue(function() { $(this).remove(); });
                    }
                }
            }
        },
        /**
         * Смахнуть сообщение, вызывается при клике на крестик сообщения
         * @param e
         */
        close : function(e) {
            e.preventDefault();
            var self = $(e.currentTarget);
            self.parent().clearQueue().animate({ opacity : 0, 'margin-right' : '-'+this.options.width+'px' }, 'slow').queue(function() {$(this).remove()});
        }
    };
    $.fn[pluginName] = function(option) {
        var $this = $(this),
            data = $this.data('plugin_' + pluginName),
            options = typeof option == 'object' && option;
        if (!data) this.data('plugin_' + pluginName, new Plugin(options));
    };
    $.fn[pluginName].defaults = {
        title : '',
        message : '',
        type : 'info', // тип сообщения (info, error, success)
        permanent : false, // сообщение видно постоянно
        timeout : 2, // время через которое надо скрыть сообщение
        fade : true, // выцветание
        width : 300 // ширина блока
    };
})( jQuery, window, document );
// Если блок нотификации отсутствует, он создаётся
$(document).ready(function() {
    if ($('#notification').length == 0) {
        $('body').append($('<div>', {
            id : 'notification'
        }));
    }
});
// Облегчённый вызов
function noty(options) {
    $.fn.notification(options);
}