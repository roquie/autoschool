/**
 * Developer: V. Melnikov
 * Date: 03.11.13
 * Time: 13:33
 */
;(function ( $, window, document, undefined ) {

    "use strict";

    var pluginName = 'ajaxForm';

    function Plugin(element, options) {
        this.init(element, options);
    }

    Plugin.prototype = {
        constructor : Plugin,
        /**
         * Создание обработчиков событий
         * @param element
         * @param options
         */
        init : function(element, options) {
            var isForm = ($(element).is('form')) ? true : false;

            if (options.debug || $.fn[pluginName].defaults.debug) {
                console.log('Включён режим debug для элементов: "' + $(element).selector + '"');
            }

            if (options.debug || $.fn[pluginName].defaults.debug) {
                if (isForm)
                    console.log('элемент '+$(element).selector+' форма');
                else
                    console.log('элемент '+$(element).selector+' ссылка');
            }

            if (options.delegate || $.fn[pluginName].defaults.delegate) {
                if (options.debug || $.fn[pluginName].defaults.debug) {
                    console.log('выбрана делегированная обработка');
                }
                if (isForm)
                    $('body')
                        .off('submit.'+pluginName, $(element).selector, options, $.proxy(this.process, this))
                        .on('submit.'+pluginName, $(element).selector, options, $.proxy(this.process, this));
                else
                    $('body')
                        .off('click.'+pluginName, $(element).selector, options, $.proxy(this.process, this))
                        .on('click.'+pluginName, $(element).selector, options, $.proxy(this.process, this));
            } else {
                if (options.debug || $.fn[pluginName].defaults.debug) {
                    console.log('выбрана неделегированная обработка');
                }
                if (isForm)
                    $(element)
                        .off('submit.'+pluginName, options, $.proxy(this.process, this))
                        .on('submit.'+pluginName, options, $.proxy(this.process, this));
                else
                    $(element)
                        .off('click.'+pluginName, options, $.proxy(this.process, this))
                        .on('click.'+pluginName, options, $.proxy(this.process, this));
            }
        },
        process : function(e) {
            e.stopPropagation();
            e.preventDefault();
            this.$element = $(e.currentTarget);
            this.metadata = this.$element.data();
            this.options = $.extend( {}, $.fn[pluginName].defaults, e.data, this.metadata);
            this.isForm = (this.$element.is('form')) ? true : false;
            if (this.work == 'undefined') {
                this.work = false;
            }
            this.options.noreq = this.options.noreq.split(this.options.separator);
            this.options.params = this.options.params.split(this.options.separator);
            if (this.options.validate) {
                if (this.options.debug) {
                    console.log('выбрана валидация данных');
                }
                if (!this.validate())
                    return false;
            }
            this.ajax();
        },
        /**
         * Валидация данных
         * @returns {boolean}
         */
        validate : function() {
            var is_success = true,
                data,
                empty = false,
                error = [],
                $this = this,
                no_required = [],
                element,
                i,
                type = '';

            $.each(this.options.noreq, function(i, v) {
                no_required.push(v);
            });

            if (this.options.debug) {
                console.log('Необязательные поля для заполнения: ' + no_required);
            }

            if (this.isForm) {
                data = this.$element.serializeArray();
                if (this.options.debug) {
                    console.log('Данные формы: ');
                    console.log(data);
                }

                for (i = 0; i < data.length; i++) {
                    element = $this.$element.find('[name="'+ data[i].name+'"]');
                    if (this.options.debug) {
                        console.log('Элемент формы: ');
                        console.log(element);
                    }
                    if (!$this.array_value_exists(data[i].name, no_required)) {
                        type = element.attr('type') ? element.attr('type') : 'text';
                        switch ( type ) {
                            case 'email' :
                                if (!$this.isEmail(data[i].value) || $this.delSpace(data[i].value) == '')
                                    empty = true;
                                break;
                            case 'text' :
                                if ($this.delSpace(data[i].value) == '')
                                    empty = true;
                                break;
                            case 'password' :
                                if ($this.delSpace(data[i].value) == '')
                                    empty = true;
                                break;
                        }
                        if (empty) {
                            element.addClass('error');
                            is_success = false;
                            empty = false;
                            error.push(data[i].name);
                        } else {
                            error.splice(error.indexOf(data[i].name), 1);
                            element.removeClass('error');
                        }
                    }
                }
                if (error.length != 0) {
                    if (this.options.debug) {
                        console.log('Были допущены ошибки: ' + error);
                    }
                    this.options.errorValidate(error, $this);
                }
            } else {
                if (this.options.debug) {
                    console.log('Данные ссылки: ' + this.options.params);
                }
                for (i = 0; i < this.options.params.length; i++) {
                    element = $('#'+ this.options.params[i]);
                    if (!$this.array_value_exists(this.options.params[i], no_required)) {

                        var value = '';

                        if (element.attr('name')) {
                            value = element.val();
                        } else {
                            value = element.text();
                        }

                        switch ( element.attr('type') ) {
                            case 'email' :
                                if (!$this.isEmail(value) || $this.delSpace(value) == '')
                                    empty = true;
                                break;
                            case 'text' :
                                if ($this.delSpace(value) == '')
                                    empty = true;
                                break;
                            case 'password' :
                                if ($this.delSpace(value) == '')
                                    empty = true;
                                break;
                        }
                        if (empty) {
                            error.push(element.attr('title'));
                            is_success = false;
                            empty = false;
                        } else
                            error.splice(error.indexOf(element.attr('title')), 1);
                    }
                }
                if (error.length != 0) {
                    if (this.options.debug) {
                        console.log('Были допущены ошибки: ' + error);
                    }
                    this.options.errorValidate(error, $this);
                }
            }
            return is_success;
        },
        /**
         * Ajax-отправка данных формы методом POST
         * @returns {boolean}
         */
        ajax : function() {
            var that = this;
            if (this.work) {
                this.options.worked();
                if (this.options.debug) {
                    console.log('форма уже отправлена, ждём ответ');
                }
                return false;
            }
            this.work = true;

            if (this.options.debug) {
                console.log('URL: ' +(this.isForm) ? this.$element.attr('action') : this.options.url);
            }
            if (that.options.debug) {
                console.log('Отправка данных на сервер');
            }

            $.ajax({
                type : (this.isForm) ? this.$element.attr('method') : this.options.method,
                url  : (this.isForm) ? this.$element.attr('action') : this.options.url,
                data : {
                    data : this.fields(),
                    noreq : this.options.noreq
                },
                dataType : this.options.type,
                beforeSend : function() {
                    that.options.beforeSend(that);
                },
                success : function(response, textStatus, jqXHR){
                    that.work = false;
                    if (that.options.debug) {
                        console.log('Данные получены: ' + response);
                    }
                    // если callback не передан, то будет использован callback по-умолчанию
                    if (!that.options.functions[that.options.callback] && typeof that.options.functions[that.options.callback] != "function") {
                        that.options.defaultCallback(response, that);
                    }
                    else
                        that.options.functions[that.options.callback](response, that);
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
        },
        /**
         * Формирование строки с данными для отправки на сервер
         * @returns {string}
         */
        fields : function() {
            var data = {},
                field;
            if (this.isForm) {
                $.each(this.$element.serializeArray(), function(k, v) {
                    data[v.name] = v.value;
                });
            } else {
                $.each(this.options.params, function(k, v) {
                    if ($('#'+v).attr('name')) {
                        field = $('#'+v).val();
                    } else {
                        field = $('#'+v).text();
                    }
                    data[v] = field;
                });
            }
            if ( typeof this.options.addFields === 'object') {
                $.each(this.options.addFields, function(k, v) {
                    data[k] = v;
                });
            }

            if (this.options.debug) {
                console.log('Массив данных для передачи: ' + data);
            }

            return data;
        },
        /**
         * Удаление всех пробелов из строки
         * @param string
         * @returns {XML|string|void}
         */
        delSpace : function( string ) {
            return string.replace(/\s/g, "");
        },
        /**
         * Проверка корректности e-mail адреса
         * @param email
         * @returns {boolean}
         */
        isEmail : function( email ) {
            var pattern = /^([\w\d\._-]+@([\w-]+\.)+[\w-]{2,4})?$/;
            return pattern.test(email);
        },
        /**
         * Проверка существования значения в массиве
         * @param key
         * @param search
         * @returns {boolean}
         */
        array_value_exists : function( key, search ) {
            for(var i = 0; i < search.length; i++)
            {
                if(search[i] == key) return true;
            }
            return false;
        }

    };

    $.fn[pluginName] = function(option) {
        var $this = $(this),
            data = $this.data('plugin_' + pluginName),
            options = typeof option == 'object' && option;
        if (!data) $this.data('plugin_' + pluginName, (data = new Plugin(this, options)));
        if (typeof option == 'string') data[option]();
    };

    $.fn[pluginName].setDefaults = function(options) {
        $.fn[pluginName].defaults = $.extend( {}, $.fn[pluginName].defaults, options);
    };

    $.fn[pluginName].defaults = {
        worked : function() {}, // вывод сообщения при повторной отправке формы до получения ответа на запрос
        errorValidate : function() {}, // вывод сообщения при ошибке валидации данных
        /**
         * Настройка Ajax
         */
        type : 'json', // тип передаваемых данных
        method : 'post', // метод передачи данных
        cache : false, // кэширование запроса
        functions : {}, // массив callback
        defaultCallback : function() {}, // default callback
        beforeSend: function (){}, // вызывается до отправки запроса
        statusCode : {},

        separator : ',', // разделитель значений строки
        noreq : '', // необязательные поля
        params : '', // данные для отправки при нажатии на ссылку
        validate : true, // нужно делать валидацию формы или нет
        delegate : true,
        addFields : [],

        debug : false
    };

})( jQuery, window, document );