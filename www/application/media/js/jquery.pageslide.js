/**
 * pageSlide Plugin
 * Copyright 2013, Viktor Melnikov
 * Version 1.0 - Updated: September, 15, 2013
 * --------------------------------------------------
 * Example (minimum settings):
 * <a href="#secondary" id="example"></a>
 * <div id="secondary" style="display: none"></div>
 *
 * $('#example').pageSlide();
 */
;(function ( $, window, document, undefined ) {

    "use strict";

    var pluginName = 'pageSlide';

    function Plugin(element, options) {
        this.init(element, options);
    }

    Plugin.prototype = {
        constructor : Plugin,
        init : function(element, options) {
            var pageslide_wrap_css = {
                    position : 'fixed',
                    width    : '0',
                    top      : '60px',
                    height   : '100%',
                    zIndex   : '999'
                },
                body_wrap_css = {
                    position : 'relative',
                    zIndex   : '0'
                },
                body = $('body');
            this.$element = $(element);
            this.options = $.extend( {}, $.fn[pluginName].defaults, options);
            if ($("#pageslide-body-wrap, #pageslide-content, #pageslide-slide-wrap").size() == 0) {
                var psBodyWrap = $('<div/>', {
                        id : 'pageslide-body-wrap'
                    }),
                    psSlideContent = $('<div/>', {
                        id : 'pageslide-content'
                    }),
                    psSlideWrap = $('<div/>', {
                        id : 'pageslide-slide-wrap'
                    });
                psBodyWrap.css(body_wrap_css).width( body.width() );
                body.contents().wrapAll( psBodyWrap ); // оборчиваем всё содержимое body
                //psSlideContent.width( this.options.width );
                psSlideWrap.css(pageslide_wrap_css).append( psSlideContent );
                body.append( psSlideWrap );
            }
            psSlideContent.html($(this.$element.attr('href')).html()).hide();
            $(window).on('resize', function() {
                psBodyWrap.width( body.width() );
            });
            this.$element.on('click', $.proxy(this.open, this));

        },
        open : function(e) {
            e.preventDefault();
            var psSlideWrap    = $('#pageslide-slide-wrap'),
                psBodyWrap     = $('#pageslide-body-wrap'),
                psSlideContent = $('#pageslide-content'),
                pos_animate;

            if(psSlideWrap.width() != 0) return false;
            psSlideContent.show();

            switch (this.options.location) {
                case 'right' :
                    pos_animate = {
                        right : "-" + this.options.width
                    };
                    psSlideWrap.css({
                        left  : 0
                    });
                    break;
                case 'left' :
                    pos_animate = {
                        left  : "-" + this.options.width
                    };
                    psSlideWrap.css({
                        right : 0
                    });
                    break;
            }
            psSlideWrap.stop(true, true).animate({
                width: this.options.width
            }, this.options.delay );
            psBodyWrap.stop(true, true).animate( pos_animate, this.options.delay);
            $(document).on('click', $.proxy(this.documentClick, this));
        },
        documentClick : function (e) {
            var el = $('#pageslide-slide-wrap')
                , self = $(e.target);
            if(self.closest('#pageslide-slide-wrap').length === 0) {
                this.close();
            }
        },
        close : function() {
            var pos_animate = (this.options.location === 'left') ? {left: "0"} : {right: "0"};
            if ($("#pageslide-slide-wrap").css('width') != '0px') {
                $("#pageslide-body-wrap").animate(pos_animate, this.options.delay);
                $("#pageslide-slide-wrap").animate({width: "0"}, this.options.delay, function() {
                    //$("#pageslide-content").hide();
                });
            }
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
        width     : '300px',
        delay  : 'normal',
        location : 'left' // left|right
    };

})( jQuery, window, document );