$(function() {
    $('#slide-left').on('click', function(e) {
        e.preventDefault();
        if (!$(this).data('load')) {
            var action = $(this).data('url');
            $('#pageslide-content').load(action);
            $(this).data('load', true);
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
