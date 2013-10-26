/**
 * Developer: V. Melnikov
 * Date: 24.10.13
 * Time: 20:34
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
         * Инициализация данных объекта
         * @param element
         * @param options
         */
        init : function(element, options) {
            this.$element = $(element);
            this.metadata = this.$element.data(); // data массив элемента
            this.options = $.extend( {}, $.fn[pluginName].defaults, options, this.metadata);
            this.isForm = (this.$element.is('form')) ? true : false; // проверка соответствия элемента тегу "form"
            this.work = false; // защита от повторного нажатия во время обработки запроса
            this.options.noreq = this.options.noreq.split(this.options.separator);
            this.options.params = this.options.params.split(this.options.separator);
            if (this.isForm) {
                this.$element.on('submit', $.proxy(this.process, this));
            } else {
                this.$element.on('click', $.proxy(this.process, this));
            }
        },
        /**
         * Обработка события на выбранном событии
         * @param e
         * @returns {boolean}
         */
        process : function(e) {
            e.preventDefault();
            if (this.options.validate) {
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
                i;

            $.each(this.options.noreq, function(i, v) {
                no_required.push(v);
            });

            if (this.isForm) {
                data = this.$element.serializeArray();
                for (i = 0; i < data.length; i++) {
                    element = $this.$element.find('[name="'+ data[i].name+'"]');
                    if (!$this.array_value_exists(data[i].name, no_required)) {
                        switch ( element.attr('type') ) {
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
                        } else
                            element.removeClass('error');
                    }
                }
            } else {
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
                    this.options.errorValidate(error);
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
                return false;
            }
            this.work = true;

            $.ajax({
                type : (this.isForm) ? this.$element.attr('method') : this.options.method,
                url  : (this.isForm) ? this.$element.attr('action') : this.options.url,
                data : {
                    data : this.fields(),
                    noreq : this.options.noreq
                },
                dataType : this.options.type,
                beforeSend : function() {
                    that.options.beforeSend();
                },
                success : function(response, textStatus, jqXHR){
                    // если callback не передан, то будет использован callback по-умолчанию
                    if (!that.options.functions[that.options.callback] && typeof that.options.functions[that.options.callback] != "function") {
                        that.options.defaultCallback(response);
                    }
                    else
                        that.options.functions[that.options.callback](response);
                    that.work = false;
                },
                statusCode: {
                    404: function() {
                        that.options.statusCode[404]();
                    },
                    505 : function() {
                        that.options.statusCode[505]();
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
                this.action = this.$element.attr('action');
            } else {
                this.action = this.options.url;
                $.each(this.options.params, function(k, v) {
                    if ($('#'+v).attr('name')) {
                        field = $('#'+v).val();
                    } else {
                        field = $('#'+v).text();
                    }
                    data[v] = field;
                });
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
        return this.each(function() {
            var $this = $(this),
                data = $this.data('plugin_' + pluginName),
                options = typeof option == 'object' && option;
            if (!data) $this.data('plugin_' + pluginName, (data = new Plugin(this, options)));
            if (typeof option == 'string') data[option]();

        });
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
        validate : true // нужно делать валидацию формы или нет
    };

})( jQuery, window, document );