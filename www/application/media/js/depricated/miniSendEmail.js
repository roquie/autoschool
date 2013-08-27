(function(b){
    b.fn.miniSendEmail = function(options) {
        var settings = b.extend({
                width     : '550px',
                height    : '550px',
                element   : b(this).attr('href'),
                duration  : 'normal' // Accepts standard jQuery effects speeds (i.e. fast, normal or milliseconds)
            }, options),
            dataSendMail = {},
            close = function() {
                if (b(settings.element).css('bottom') == '0px') { // if not right click.
                    b.fn.closeMiniSendEmail(settings);
                }
            };
        return this.each(function(){
            b(settings.element).css({bottom : '-'+settings.height});
            dataSendMail = b(settings.element).data('sendMail');
            if ( ! dataSendMail ) {
                b(settings.element).data('sendMail', {
                    width  : settings.width,
                    height : settings.height
                });
            }
            b(this).on('click', function(e)
            {
                e.preventDefault();
                b(settings.element).width(settings.width).height(settings.height).show();
                if (b('#toggle').hasClass('up')){
                    b('#toggle').removeClass('up');
                }
                if (!(b('#toggle').hasClass('down'))){
                    b('#toggle').addClass('down');
                }
                b(settings.element).animate({
                    bottom : 0
                }, settings.duration);
            });
            b('#toggle').on('click',function(){
                var direction = 0;
                if((b('#toggle').hasClass('down'))) {
                    direction = '-'+(parseInt(settings.height)-parseInt(b('#header').outerHeight())+1);
                }
                b(settings.element).animate({
                    bottom : direction }, settings.duration,function(){
                    b('#toggle').toggleClass('down up');
                });
            });
        });
    };
})(jQuery);
(function(j){
    j.fn.closeMiniSendEmail = function(options) {
        var settings = j.extend({
                element   : '',
                duration  : 'normal' // Accepts standard jQuery effects speeds (i.e. fast, normal or milliseconds)
            }, options),
            dataSendMail = j(settings.element).data('sendMail');
        if ( !dataSendMail )
        {
            return false;
        }
        j(settings.element).animate({
            bottom : '-'+dataSendMail.height
        }, settings.duration, function() {
            j(settings.element).hide();
        });
    }
})(jQuery);