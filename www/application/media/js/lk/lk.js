$(function() {

    first_load();

    $('body').on('click', '#ajaxLink', function(e) {
        e.preventDefault();

        if ($(this).attr('ajax') === 'false') {
            return false;
        }

        var $this = $(this),
            action = $this.attr('href'),
            nav = $('#left_menu').find('li'),
            arrow = $('<i>', {
                class : 'icon-angle-right'
            }),
            link,
            obj = $('#loader');
        $('#content').html(obj.html());
        load_content(action);
        if ($this.closest('#left_menu').length != 0) {
            nav.removeClass('active').find('a > i.icon-angle-right').remove();
            $this.parent().addClass('active').find('a').append(arrow);
        }
        link = action.split('/');
        location.hash = link[link.length-1];
    });

    $(window).on('load', function() {
        $('.menu').css({'margin-top' : $('.profile').find('img').height() - $('.back1').height() + 20});
    });

    function first_load() {
        var url,
            link,
            arrow = $('<i>', {
                class : 'icon-angle-right'
            }),
            content = $('#content'),
            isset = false;
        content.html($('#loader').html());
        if (location.hash != '') {
            url = location.hash.replace('#', '');
            if (url === 'settings') {
                load_content($('.settings').find('a#ajaxLink').attr('href'));
                isset = true;
            } else {
                $('#left_menu > li > a').each(function() {
                    link = $(this).attr('href').split('/');
                    if (link[link.length-1] === url) {
                        $(this).parent().addClass('active').find('a').append(arrow);
                        load_content($(this).attr('href'));
                        isset = true;
                    }
                });
            }
        }
        if (location.hash == '' || !isset) {
            var obj = $('#left_menu > li').eq(0);
            link = obj.find('a').attr('href');
            obj.addClass('active').find('a').append(arrow);
            load_content(link);
            link = link.split('/');
            location.hash = link[link.length-1];
        }
    }

    function load_content(url) {
        var content = $('#content');
        $.post(
            url,
            {
                data : {
                    csrf : $('.csrf').val()
                }
            },
            function(response) {
                content.html(response.data);
                $('.csrf').val(response.csrf);
            },
            'json'
        );
    }

    $.fn.ajaxForm.setDefaults({
        errorValidate : function() {
            noty({
                type : 'error',
                message : 'Ошибка заполнения полей'
            });
        },
        worked : function() {
            noty({
                type:'error',
                title:'Ошибка',
                message:'Идёт обработка данных...'
            });
        },
        defaultCallback : function(response, that) {
            if (response.status == 'error' || response.status == 'success') {
                noty({
                    type : response.status,
                    message : response.msg
                });
            }
            if (that.isForm && response.status == 'success') {
                that.$element[0].reset();
            }
            $('.csrf').val(response.csrf);
        },
        functions : {
            check_pass : function(response, that) {
                if (response.status == 'error') {
                    noty({
                        type : response.status,
                        message : response.msg
                    });
                }
                if (response.status == 'success') {
                    if (that.isForm) {
                        that.$element[0].reset();
                    }
                    $('form#toggle_pass_email').toggle('slow');
                }
                $('.csrf').val(response.csrf);
            },
            change_email : function(response, that) {
                if (response.status == 'error') {
                    noty({
                        type : response.status,
                        message : response.msg
                    });
                }
                if (response.status == 'success') {
                    noty({
                        type : response.status,
                        message : response.msg
                    });
                    $('#userEmail').text($('#new_email').val());
                    if (that.isForm) {
                        that.$element[0].reset();
                    }
                    $('form#toggle_pass_email').toggle('slow');
                }
                $('.csrf').val(response.csrf);
            },
            add_message : function(response, that) {
                if (response.status == 'error') {
                    noty({
                        type : response.status,
                        message : response.msg
                    });
                }
                if (response.status == 'success') {
                    $('#messages').prepend(response.data);
                    that.$element[0].reset();
                    $('.hidemsg').trigger('click');
                }
                $('.csrf').val(response.csrf);
            }
        },
        errorCallback : function(that, request, status, error) {
            if (request.status == '200') {
                console.log('Исключение: ' + request.responseText);
            } else {
                console.log(request.status + ' ' + request.statusText);
            }
        },
        debug : true
    });

    $('._lk_form').ajaxForm({
        form : true
    });

/*    $('.placeholder').placeholder();*/

});