$(function() {
    $.fn.navigate.setDefaults({
        block : '#content',
        active : function(that) {
            var arrow = $('<i>', {
                class : 'icon-angle-right'
            });
            $('.' + that.options.classElement).parent().removeClass(that.options.classActive);
            if (!that.options.noactive || that.options.noactive == 'undefined') {
                that.$element.parent().addClass(that.options.classActive);
            }
            $('.' + that.options.classElement).find('i.icon-angle-right').remove();
            if (!that.options.noactive || that.options.noactive == 'undefined')
                that.$element.append(arrow);
        },
        beforeLoad : function(options, that) {
            $(options.block).html($('#loader').html());
        },
        afterLoad : function(options, that) {
            var arrow = $('<i>', {
                class : 'icon-angle-right'
            });
            if (!that.data('noactive') || that.data('noactive') == 'undefined') {
                that.parent().addClass(options.classActive);
                that.append(arrow);
            }
        },
        otherLoad : function(options) {
            var arrow = $('<i>', {
                    class : 'icon-angle-right'
                }),
                obj = $('#left_menu > li > a'),
                link;
            $.each(obj, function() {
                if ($(this).data('nav') && $(this).data('nav') != 'undefined') {
                    link = $(this).attr('href');
                    if (!$(this).data('noactive') || $(this).data('noactive') == 'undefined') {
                        $(this).parent().addClass(options.classActive);
                        $(this).append(arrow);
                    }
                    $(options.block).load(link);
                    return false;
                }
            });
        },
        defaultCallback : function(response, that) {
            $(that.options.block).html(response);
        }
    });

    $('.navigate').navigate();

    $(window).on('load', function() {
        $('.menu').css({'margin-top' : $('.profile').find('img').height() - $('.back1').height() + 20});
    });

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
            add_title : function(response, that) {
                if (response.status == 'error') {
                    noty({
                        type : response.status,
                        message : response.msg
                    });
                }
                if (response.status == 'success') {
                    $('.titles').prepend(response.msg);
                    $('.hideSend').trigger('click');
                    if ($('#clear-block').length)
                        $('#clear-block').remove();
                    that.$element[0].reset();
                }
            },
            add_message : function(response, that) {
                if (response.status == 'error') {
                    noty({
                        type : response.status,
                        message : response.msg
                    });
                    $('.hideSend').trigger('click');
                }
                if (response.status == 'success') {
                    var title = $('.titles').find('.row[id="'+$('#title_id').val()+'"]');
                    title.find('.text').text($('.msg').find('form textarea').val());
                    $('#mesg_with_title').prepend(response.msg);
                    that.$element[0].reset();
                    $('.hidemsg').trigger('click');
                }
            }
        },
        debug : true
    });

    $('._lk_form').ajaxForm({
        form : true
    });

});