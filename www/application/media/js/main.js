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




    $.fn.ajaxForm.setDefaults({
        errorValidate : function() {
            noty({
                type : 'error',
                message : 'Ошибки заполнения полей'
            });
        },
        worked : function() {
            noty({
                type:'error',
                title:'Ошибка',
                message:'Идёт обработка данных...'
            });
        },
        defaultCallback : function(response) {
            if (response.status == 'error' || response.status == 'success') {
                noty({
                    type : response.status,
                    message : response.msg
                });
            }
        },
        functions : {
            sign_in : function(response) {
                if (response.status === 'error') {
                    noty({
                        type : response.status,
                        message : response.msg
                    });
                }
                if (response.status === 'success') {
                    window.location.href = response.msg;
                }
            },
            forgot : function(response) {
                if (response.status == 'error' || response.status == 'success') {
                    noty({
                        type : response.status,
                        message : response.msg
                    });
                }
                if (response.status == 'success') {
                    $('#popup').find('form').toggle('slow');
                }
            }
        }
    });
    /**
     * вход/забыли пароль
     */
    $('._mains_link').ajaxForm();
    $('._mains_form').ajaxForm();

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
    }).on('click', '#forgot', function(e) {
        e.preventDefault();
        $(this).closest('#popup').find('form').toggle();
    });

    $("[rel='tooltip']").tooltip();

    $('.placeholder').placeholder();

});
