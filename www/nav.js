/**
 * Developer: V. Melnikov
 * Date: 17.11.13
 * Time: 14:34
 * Version: 1.0
 */
;(function ( $, window, document, undefined ) {

    "use strict";

    var pluginName = 'navigate';

    function Plugin(element, options) {
        this.init(element, options);
    }

    $(function() {
        $.each($('body').find('a'), function() {
            if (!$(this).data('nonav') || $(this).data('nonav') == 'undefined') {
                $(this).addClass($.fn[pluginName].defaults.classElement);
            }
        });
        $(window).on('load', function() {
            var url = '',
                link;
            if (location.hash != '') {
                $.each($('.' + $.fn[pluginName].defaults.classElement), function() {
                    url = location.hash.replace('#', '');
                    link = $(this).attr('href').split('/');
                    if (url === link[link.length-1]) {
                        $.fn[pluginName].defaults.beforeLoad($.fn[pluginName].defaults, $(this));
                        $($.fn[pluginName].defaults.block).load($(this).attr('href'));
                        $.fn[pluginName].defaults.afterLoad($.fn[pluginName].defaults, $(this));
                    }
                });
            } else {
                $.fn[pluginName].defaults.otherLoad($.fn[pluginName].defaults);
            }
        });
    });

    Plugin.prototype = {
        constructor : Plugin,
        init : function(element, options) {
            this.$element = $(element);
            this.metadata = this.$element.data();
            this.options = $.extend( {}, $.fn[pluginName].defaults, options, this.metadata);
            this.$element.on('click', $.proxy(this.work, this));
            this.work = false;
        },
        work : function(e) {
            e.preventDefault();
            e.stopPropagation();
            $('.' + this.options.classElement).removeClass(this.options.classActive);
            if (!this.options.noactive || this.options.noactive == 'undefined') {
                this.$element.addClass(this.options.classActive);
            }
            this.options.active(this);
            this.ajax();
        },
        ajax : function() {
            var that = this,
                link = this.$element.attr('href') ? this.$element.attr('href') : this.options.url;
            if (this.work) {
                this.options.worked();
                if (this.options.debug) {
                    console.log('форма уже отправлена, ждём ответ');
                }
                return false;
            }
            this.work = true;

            if (this.options.debug) {
                console.log('URL: ' +(this.$element.attr('href')) ? this.$element.attr('href') : this.options.url);
            }
            if (that.options.debug) {
                console.log('Отправка данных на сервер');
            }

            $.ajax({
                type : this.options.method,
                url  : this.$element.attr('href') ? this.$element.attr('href') : this.options.url,
                dataType : this.options.type,
                beforeSend : function() {
                    that.options.beforeSend(that);
                },
                success : function(response, textStatus, jqXHR){
                    if (that.options.debug) {
                        console.log('Данные получены: ' + response);
                    }

                    link = link.split('/');
                    location.hash = link[link.length-1];

                    // если callback не передан, то будет использован callback по-умолчанию
                    if (!that.options.functions[that.options.callback] && typeof that.options.functions[that.options.callback] != "function") {
                        that.options.defaultCallback(response, that);
                    }
                    else
                        that.options.functions[that.options.callback](response, that);
                    that.work = false;
                },
                statusCode: {
                    404: function() {
                        that.options.statusCode[404](that);
                    },
                    505 : function() {
                        that.options.statusCode[505](that);
                    }
                }
            });
            return false;
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

    $.fn[pluginName].setDefaults = function(options) {
        $.fn[pluginName].defaults = $.extend( {}, $.fn[pluginName].defaults, options);
    };

    $.fn[pluginName].defaults = {
        worked : function() {}, // вывод сообщения при повторной отправке формы до получения ответа на запрос
        active : function() {},
        beforeLoad : function() {},
        afterLoad : function() {},
        otherLoad : function() {},
        /**
         * Настройка Ajax
         */
        type : 'html', // тип передаваемых данных
        method : 'post', // метод передачи данных
        cache : false, // кэширование запроса
        functions : {}, // массив callback
        defaultCallback : function() {}, // default callback
        beforeSend: function (){}, // вызывается до отправки запроса
        statusCode : {},

        classActive : 'active',
        classElement : 'navigate',
        block : '.content',
        debug : false
    };

})( jQuery, window, document );