/**
 * popupWin Plugin
 * Copyright 2013, Viktor Melnikov
 * Version 1.3 - Updated: May, 16, 2013
 *
 * Example:
 *  $('#example').popupWin({
 *      width      : '280px',
 *      popWin      : '#popup',
 *      edgeOffset : 35,
 *      left_right : {'right' : '-10px'}
 *  });
 */
(function($){
    $.fn.popupWin = function(options) {
        var settings = $.extend({
                popWin      : '#popup', //Имя блока который будет появляться
                location    : 'bottom', //расположение блока относительно контента
                width       : '270px',  //ширина
                edgeOffset  : 3,        //расстояние между блоком и контентом
                delay       : 400,
                fadeIn      : 200,
                fadeOut     : 200,
                left_right  : { 'right' : 0} //отступ блока (задается отступ либо слева, либо справа)
            }, options),

            countOfOject = function (obj) {
                var t = typeof(obj);
                var i = 0;
                if (t != "object" || obj==null) return 0;
                for (x in obj) i++;
                return i;
            },

            _initialize = function() {

                var error = [];
                $.each(settings, function(key, value) {
                    if (typeof  key === 'object') {
                        countOfOject(key) === 0 ? error.push('- Введите значение ' + key) : null;
                    } else if( ! value ) {
                        error.push('- Введите значение ' + key)
                    }
                });
                if ( error.length != 0) {
                    var str = '';
                    $.each(error, function(key, value) {
                        str += value + '\n';
                    });
                    alert('В ходе инициализации окна было допущено ' + error.length + ' ошибки (-ок): \n' + str);
                    exit();
                }
            },

            popupcreatewin = function(obj) {
                var top = obj.offset()['top'],
                    left = obj.offset()['left'],
                    t_class = '',
                    popupStyle = {},
                    dataPop = {};

                dataPop = obj.data('popup');

                if(settings.location == "bottom"){
                    top = (top + settings.edgeOffset + 10) + 'px';
                    t_class = "_bottom";
                } else if(settings.location == "top"){
                    top = '-' + (top + settings.edgeOffset + 10) + 'px';
                    t_class = "_top";
                } else if(settings.location == "left"){
                    top = (top + settings.edgeOffset + 10) + 'px';
                    t_class = "_left";
                } else if(settings.location == "right"){
                    top = (top + settings.edgeOffset + 10) + 'px';
                    t_class = "_right";
                }

                popupStyle = $.extend({
                    'width' : settings.width,
                    'top'   : top
                }, settings.left_right);

                $(settings.popWin).addClass('popup'+t_class);
                $(settings.popWin).css(popupStyle);
                if ( ! dataPop ) {
                    //Установка значений в переменную popup
                    obj.data('popup', {
                        location   : settings.location,
                        properties : popupStyle
                    });
                }
            },
            show = function(element) {
                var data = element.data('popup');
                $(settings.popWin).toggleClass('hide').css({opacity:0}).animate({top : '-='+10, opacity:1}, 'normal').show();
            },
            hide = function(element) {
                var obj = $(settings.popWin),
                    data = element.data('popup');
                obj.animate({top : data.properties['top'], opacity:0}, 'normal', function() {
                    obj.toggleClass('hide').hide()
                });
            };

        return this.each(function() {
            var object = $(this);
            //Инициализация объекта
            _initialize();
            //Свойства появляющего объекта
            popupcreatewin(object);
            object.unbind().bind("click", function(){
                var li = $(this).closest('li');
                li.hasClass('active') ? li.removeClass('active') : li.addClass('active');
                $(settings.popWin).hasClass('hide') ? show($(this)) : hide($(this));
            });
            $(document).bind('click', function(e) {
                if($(e.target).closest(object.parent()[0]).length == 0) {
                    var li = $(settings.popWin).closest('li');
                    if ( !$(settings.popWin).hasClass('hide') ) {
                        hide(object);
                        li.hasClass('active') ? li.removeClass('active') : li.addClass('active');
                    }
                }
            });
        });
    }
})(jQuery);