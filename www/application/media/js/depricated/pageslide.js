(function($){
    $.fn.pageSlide = function(options) {
    
        var settings = $.extend({
                width     : "300px", // Accepts fixed widths
                duration  : "normal", // Accepts standard jQuery effects speeds (i.e. fast, normal or milliseconds)
                direction : "left" // default direction is left.
            }, options),
            pageslide_slide_wrap_css = {
                    position : 'absolute',
                    width    : '0',
                    top      : '0',
                    height   : '100%',
                    zIndex   : '999'
            },
            pageslide_body_wrap_css = {
                    position : 'relative',
                    zIndex   : '0'
            },

            _initialize = function (obj) {

                  // Создание блоков для слайда контента
                if ($("#pageslide-body-wrap, #pageslide-content, #pageslide-slide-wrap").size() == 0) {

                    var body = $("body"),
                        psBodyWrap = $('<div/>'),
                        psSlideContent = $('<div/>'),
                        psSlideWrap = $('<div/>');

                    psBodyWrap.css(pageslide_body_wrap_css).attr("id","pageslide-body-wrap").width( body.width() );
                    body.contents().wrapAll( psBodyWrap );

                    psSlideContent.attr("id","pageslide-content").width( settings.width );

                    psSlideWrap.css(pageslide_slide_wrap_css).attr("id","pageslide-slide-wrap").append( psSlideContent );
                    body.append( psSlideWrap );

                }
                psSlideContent.append($(obj.attr('href')).show()).hide();
                $('.jq-checkbox').each(function() {
                    if ($(this).is('.checked')) {
                        $(this).removeClass('checked');
                    }
                });

                // Callback events for window resizing
                $(window).resize(function(){
                    $("#pageslide-body-wrap").width( $("body").width() );
                });

            },
            _openSlide = function (obj) {

                var psSlideWrap    = $('#pageslide-slide-wrap'),
                    psBodyWrap     = $('#pageslide-body-wrap'),
                    psSlideContent = $('#pageslide-content'),
                    direction;

                if(psSlideWrap.width() != 0) return false;

                // Выбираем в какую сторону сдвигать контент на ширину блока
                if (settings.direction === "right") {
                    direction = {
                        right : "-" + settings.width
                    };
                    psSlideWrap.css({
                        left  : 0
                    });
                }
                else {
                    direction = {
                        left  : "-" + settings.width
                    };
                    psSlideWrap.css({
                        right : 0
                    });
                }
                psSlideContent.width( settings.width).show();
                psSlideWrap.animate({
                    width: settings.width
                }, settings.duration );
                psBodyWrap.animate( direction, settings.duration/*, function() {
                    psSlideContent.html($(obj.attr('href')).html());
                }*/);
            },

            _closeSlide = function () {
                if ($("#pageslide-slide-wrap").css('width') != '0px') { // if not right click.
                    $.fn.pageSlideClose(settings);
                }
            };

        // Initalize pageslide, if it hasn't already been done.
        _initialize($(this));

        return this.each(function(){
            $(this).unbind('click').bind("click", function(){
                _openSlide($(this));
                return false;
            });
            $("#pageslide-slide-wrap").unbind('click').bind('click', function(e){
                if(e.target.tagName != "A")
                    return false;
            });
            $(document).unbind('click').bind('click', function() {
                _closeSlide();
            });
        });
    
    };
})(jQuery);

// pageSlideClose allows the system to automatically close any pageslide that is currently open in the view.
(function($){
    $.fn.pageSlideClose = function(options) {

        var settings = $.extend({
                width:          "300px", // Accepts fixed widths
                duration:       "normal", // Accepts standard jQuery effects speeds (i.e. fast, normal or milliseconds)
                direction:      "left" // default direction is left.
            }, options),
            direction = (parseInt($("#pageslide-slide-wrap").css("left")) != 0) ? {left: "0"} : {right: "0"};

        $("#pageslide-body-wrap").animate(direction, settings.duration);
        $("#pageslide-slide-wrap").animate({width: "0"}, settings.duration, function() {
            $("#pageslide-content").css("width","0px").hide();
        });

    }
})(jQuery);