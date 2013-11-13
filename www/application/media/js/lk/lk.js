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
        $('#content').html(obj.html()).load(action);
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
            isset = false;
        if (location.hash != '') {
            url = location.hash.replace('#', '');
            if (url === 'settings') {
                $('#content').html($('#loader').html()).load($('.settings').find('a#ajaxLink').attr('href'));
            } else {
                $('#left_menu > li > a').each(function() {
                    link = $(this).attr('href').split('/');
                    if (link[link.length-1] === url) {
                        $(this).parent().addClass('active').find('a').append(arrow);
                        $('#content').html($('#loader').html()).load($(this).attr('href'));
                    }
                });
            }
        } else {
            var obj = $('#left_menu > li').eq(0);
            link = obj.find('a').attr('href');
            obj.addClass('active').find('a').append(arrow);
            $('#content').load(link);
        }
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
            },
            add_message : function(response, that) {
                if (response.status == 'error') {
                    noty({
                        type : response.status,
                        message : response.msg
                    });
                }
                if (response.status == 'success') {
                    $('.titles').prepend(response.msg);
                    that.$element[0].reset();
                }
            }
        },
        debug : true
    });

    //$('._lk_link').ajaxForm();
    //$('._lk_form').ajaxForm();
});