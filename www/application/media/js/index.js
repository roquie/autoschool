var currentState = '';
$(function() {
    /**
     * Прокрутка до блока при нажатии на ссылки в Footer
     */
    $('.footer').find('ul').on('click', 'li > a#ajax', function(e) {
        e.preventDefault();
        var href = $(this).attr('href');
        if (href == currentState){
            return false;
        }
        scrollToElement(href);
    });
    /**
     * Прокрутка до блока при нажатии на ссылки в Header-NavigationMenu
     */
    $('.nav').on('click', 'li > a#ajax', function(e) {
        e.preventDefault();
        var href = $(this).attr('href');
        if (href == currentState){
            return false;
        }
        scrollToElement(href);
    });

    $('#send').ajaxForm({
        callback : function(response) {
            var $this = $('#send');
            // Если пустые поля
            if (response.status === 'empty') {
                var element;
                $.each(response.data, function(i, v) {
                    element = $this.find('input[name="'+ v +'"], textarea[name="'+ v +'"]').addClass('error');
                });
            }
            // Если получена ошибка или всё нормально
            if (response.status === 'error') {
                noty({
                    type : response.status,
                    message : response.msg
                });
            }
            if (response.status === 'success') {
                noty({
                    type : response.status,
                    message : response.msg
                });
                $('.placeholder').placeholder('default');
            }
        },
        trigger : 'blur',
        offsetTopBalloon : 20
    });

    /**
     * Подсказки в полях ввода
     */
    $('.placeholder').placeholder();
});
function scrollToElement(href) {
    if (href.indexOf('#')+1) {
        href = href.split('#');
        $('html, body').animate({
            scrollTop: $('section[target="'+href[1]+'"]').offset().top - $('.navbar').height()
        }, 500, function() {
            location.hash = href[1];
        });
        currentState = href;
    }
}