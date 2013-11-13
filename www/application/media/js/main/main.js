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
            },
            contact_form : function(response) {
                if (response.status == 'error') {
                    noty({
                        type : response.status,
                        message : response.msg
                    });
                }

                if (response.status == 'success') {
                var form = $('#send');
                    $.post(
                        form.attr('action'),
                        form.serialize(),
                        function (response) {
                            if (response.status == 'error') {
                                noty({
                                    type : response.status,
                                    message : response.msg
                                });
                            }
                            if (response.status == 'success') {
                                $('#myModal')
                                    .css({display:'none'})
                                    .attr('aria-hidden', true)
                                    .removeClass('in');

                                $('.modal-backdrop')
                                    .remove();

                                noty({
                                    type : response.status,
                                    message : response.msg
                                });

                            }
                        },
                        'json'
                    );



                }
            },
            upd_captcha : function(response) {
               if (response.status == 'success') {
                   //$('captcha_img').attr({src: 'captcha/default'});
                    //alert(1);
                   /*$('#myModal')
                       .css({display:'block'})
                       .attr('aria-hidden', false)
                       .toggleClass('in');
                    $('body').append('<div class="modal-backdrop fade in"></div>');*/

                   $('._contacts').prepend(response.data);
                }
            }

        }
    });
    /**
     * вход/забыли пароль
     */
    $('._mains_link').ajaxForm();
    $('._mains_form').ajaxForm();

    $('._contacts').ajaxForm();
    $('._upd_captcha').ajaxForm();
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
