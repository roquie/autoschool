/**
 * jQuery plugin placeholder
 *
 * @author Viktor Melnikov
 * @version v3.0
 * @copyright 2013 Viktor Melnikov
 * @update November, 3, 2013
 *
 * --------------------------------------------------
 * Example:
 * <input type="text" placeholder="example">
 * $('.placeholder').placeholder();
 */
;(function ( $, window, document, undefined ) {

    "use strict";

    var pluginName = 'placeholder',
        value = '';

    $(function() {
        $.each($('body').find('[placeholder]'), function() {
            $(this).addClass($.fn[pluginName].defaults.className);
        });
    });

    function Plugin(element, options) {
        this.init(element, options);
    }

    Plugin.prototype = {
        constructor : Plugin,

        init : function(element, options) {

            this.$element = $(element);
            this.block = (this.$element.css('display') == 'block' || this.$element.is('div')) ? true : false;

            if (this.support() && !this.block) {
                return;
            }
            this.metadata = this.$element.data();
            this.options = $.extend( {}, $.fn[pluginName].defaults, options, this.metadata);
            this.options.placeholder = this.$element.attr('placeholder');
            this.isPass = this.$element.is(':password');

            this.$element
                .on('focus', $.proxy(this.focus, this))
                .on('blur', $.proxy(this.blur, this));

            value = (this.block) ? this.$element.text() : this.$element.val();
            if (this.delSpace(value) === '') {
                (this.block) ? this.$element.text(this.options.placeholder) : this.$element.val(this.options.placeholder);
                if (this.isPass) {
                    this.$element.attr({type : 'text'});
                }
                this.$element.css({color : this.options.color});
            } else {
                this.$element.css({color : this.options.currentColor});
            }
        },

        support : function() {
            return 'placeholder' in document.createElement('input');
        },

        focus : function() {
            this.$element.css({color : this.options.currentColor});
            if (this.isPass) {
                this.$element.attr({type : 'password'});
            }
            value = (this.block) ? this.$element.text() : this.$element.val();
            if(value == this.options.placeholder)
            {
                (this.block) ? this.$element.text('') : this.$element.val('');
            }
        },

        blur : function() {
            value = (this.block) ? this.$element.text() : this.$element.val();
            value = (this.block) ? /*is block*/((this.delSpace(value) != '') ? value : this.options.placeholder) : /*isn't block*/((this.delSpace(value) != '') ? value : this.options.placeholder);
            (this.block) ? this.$element.text(value) : this.$element.val(value);
            if(value == this.options.placeholder) {
                if (this.isPass) {
                    this.$element.attr({type : 'text'});
                }
                this.$element.css({color : this.options.color});
            } else {
                if (this.isPass) {
                    this.$element.attr({type : 'password'});
                }
                this.$element.css({color : this.options.currentColor});
            }
        },

        delSpace : function( string ) {
            return string.replace(/\s/g, "");
        },

        reset : function() {
            if (this.support() && !this.block) {
                return;
            }
            (this.block) ? this.$element.text(this.options.placeholder) : this.$element.val(this.options.placeholder);
            if (this.isPass) {
                this.$element.attr({type : 'text'});
            }
            this.$element.css({color : this.options.color});
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
        color : '#c0c0c0',
        currentColor : '#555',
        className : 'placeholder',
        placeholder : ''
    };

})( jQuery, window, document );