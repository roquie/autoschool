/**
 * popupWin Plugin
 * Copyright 2013, Viktor Melnikov
 * Version 2.0 - Updated: August, 21, 2013
 *
 * Example (minimum settings):
 * <a href="#" id="example"></a>
 * <div id="popup" style="display: none"></div>
 *
 *  $('#example').popupWin({
 *      edgeOffset : 49
 *  });
 */
;(function ( $, window, document, undefined ) {
    "use strict";
    var pluginName = 'popupWin';

    function Plugin( element, options ) {
        this.init(element, options)
    }
    Plugin.prototype = {
          constructor : Plugin
        , init : function(element, options) {
            this.$element = $(element);
            var trigger
              , i;
            this.options = $.extend( {}, $.fn[pluginName].defaults, options);
            trigger = this.options.trigger;
            /**
             * Событие при котором будет срабатывать popup
             */
            switch (trigger) {
                case 'click':
                    this.$element.on('click', $.proxy(this.toggle, this));
                    break;
                case 'hover':
                    this.$element.on('mouseenter', $.proxy(this.enter, this));
                    $(this.options.container).parent().on('mouseleave', $.proxy(this.leave, this));
                    break;
            }
            /**
             * При клике вне области popup скрыть его
             */
            $(document).on('click', $.proxy(this.documentClick, this));
          }
        /**
         * Функция обработки клика вне области popup
         */
        , documentClick : function (e) {
            var el = this.$element
              , self = $(e.target)
              , li = el.closest('li');
            if(self.closest(el.parent()[0]).length == 0) {
                if ( !$(this.options.container).hasClass('hide') ) {
                    this.hide();
                    li.hasClass('active') ? li.removeClass('active') : li.addClass('active');
                }
            }
          }
        /**
         * Событие возникающее при клике на родителя popup,
         * либо скрывает, либо отображает popup
         */
        , toggle: function (e) {
            e.preventDefault();
            var self = $(e.currentTarget)
              , li = self.closest('li');
            li.hasClass('active') ? li.removeClass('active') : li.addClass('active');
            $(this.options.container).hasClass('hide') ? this.show() : this.hide();
          }
        /**
         * Для события hover. Когда курсор находится над родителем popup'a
         */
        , enter: function (e) {
            var self = $(e.currentTarget)
                , li = self.closest('li');
            if ($(this.options.container).hasClass('hide')) {
                li.addClass('active');
                this.show();
            }
          }
        /**
         * Для события hover. Когда родитель popup'a теряет фокус
         */
        , leave: function (e) {
            var el = this.$element
                , self = $(e.target)
                , li = el.closest('li');

            if (!$(this.options.container).hasClass('hide')) {
                this.hide();
                li.removeClass('active');
            }
          }
        /**
         * Для события click. Отображение popup
         */
        , show: function () {
            var container = $(this.options.container)
              , placement
              , top = this.$element.offset()['top']
              , left = this.$element.offset()['left']
              , t_class = '';

            placement = this.options.location;
            switch (placement) {
                case 'bottom' :
                    top = (top + this.options.edgeOffset + 10) + 'px';
                    t_class = "_bottom";
                    break;
                case 'top' :
                    top = '-' + (top + this.options.edgeOffset + 10) + 'px';
                    t_class = "_top";
                    break;
                case 'left' :
                    top = (top + this.options.edgeOffset + 10) + 'px';
                    t_class = "_left";
                    break;
                case 'right' :
                    top = (top + this.options.edgeOffset + 10) + 'px';
                    t_class = "_right";
                    break;
            }
            this.top = top;
            container.addClass('popup'+t_class);
            container.css({ top : top});
            container.removeClass('hide').css({opacity:0}).animate({top : '-='+10, opacity:1}, this.options.delay).show();
          }
        /**
         * Для события click. Скрывает элемент
         */
        , hide: function () {
            var container = $(this.options.container);
            container.animate({top : this.top, opacity:0}, this.options.delay, function() {
                container.addClass('hide').hide()
            });
          }

    };
    $.fn[pluginName] = function ( option ) {
        return this.each(function () {
            var $this   = $(this),
                data    = $this.data('plugin_' + pluginName),
                options = typeof option == 'object' && option;
            if (!data) $this.data('plugin_' + pluginName, (data = new Plugin(this, options)));
            if (typeof option == 'string') data[option]();
        });
    };
    $.fn.popupWin.defaults = {
        container      : '#popup' // появляющийся блок
    ,   location    : 'bottom'    // расположение блока, относительно родителя
    ,   edgeOffset  : 3           // отступ блока от родителя
    ,   delay       : 300 // скорость выполнения анимации
    ,   trigger     : 'click' // событие для появления блока
    };
})( jQuery, window, document );