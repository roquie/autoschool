$(function() {

    var cnt_click = 0;

    /**
     * выезжающая панель "Новости"
     */
    $("#slide-left").pageSlide({
        width : '260px'
    }).on('click', function(e) {
        e.preventDefault();
        if (!$(this).data('load')) {
            var action = $(this).data('url');
            $('#pageslide-content').load(action);
            $(this).data('load', true);
        }
    });

    $('#sign_in').popupWin({
        edgeOffset : 40,
        delay      : 400,
        width      : '200px'
    });

    /**
     * вход
     */
    $('#sign-in').on('submit', function(e) {
        e.preventDefault();
        if (isValidateEmail($('#email').val()) && $('#password').val() != '') {
            send_ajax($(this), function(response) {
                // Если получена ошибка
                if (response.status === 'error') {
                    noty({
                        type : response.status,
                        message : response.msg
                    });
                }
                // Если всё нормально
                if (response.status === 'success') {
                    window.location.href = response.msg;
                }
            });
        } else {
            noty({
                type : 'error',
                message : 'Ошибки заполнения полей'
            });
        }
    });

    /**
     * Обновление новостей
     */
    $('body').on('click', '#update-slide', function(e) {
        var action = $('#slide-left').data('url'),
            obj = $('#slide-left').attr('href');
        if (cnt_click < 5) {
            $('#pageslide-content').html($(obj).html()).load(action);
            $('#slide-left').data('load', true);
            cnt_click++;
        }
        return false;
    }).on('click', '#close-slide', function(e) { // Кнопка закрыть боковую панель новостей
        $("#slide-left").pageSlide('close');
        return false;
    });

    $(window).on('load', function() {
        $('.flexslider').flexslider({
            animation: "slide"
        });
    });
    $("[rel='tooltip']").tooltip();

});
