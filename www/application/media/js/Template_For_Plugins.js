;(function ( $, window, document, undefined ) {

    "use strict";

    var pluginName = '';

    function Plugin(element, options) {
        this.init(element, options);
    }

    Plugin.prototype = {
        constructor : Plugin,
        init : function(element, options) {

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

    };

})( jQuery, window, document );