var currentState = '';
$(function() {

    $(window).on('load', function() {
        first_load();
        $('.flexslider').flexslider({
            animation: "slide"
        });
    });
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

    /**
     * Подсказки в полях ввода
     */
    $('.placeholder').placeholder();
});

/**
 * Обновление captcha
 */
function reload() {
    $("img.captcha").attr("src","/captcha/default");
}

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
function first_load() {
    if (location.hash != '') {
        var url = location.hash.replace('#', '');
        $('body,html').delay(100).animate({
            scrollTop: $('section[target="'+url+'"]').offset().top
        }, 500);
    }
}