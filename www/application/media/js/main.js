$(function() {
    $('#slide-left').on('click', function(e) {
        e.preventDefault();
        if (!$(this).data('load')) {
            var action = $(this).data('url');
            $('#pageslide-content').load(action);
            $(this).data('load', true);
        }
    });

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
    });
    /**
     * Кнопка закрыть боковую панель новостей
     */
    $('body').on('click', '#close-slide', function(e) {
        $("#slide-left").pageSlide('close');
        return false;
    });
});
