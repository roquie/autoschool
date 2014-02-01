/**
 * Developer: V. Melnikov
 * Date: 03.11.13
 * Time: 20:44
 */
$(function() {

    $.fn.ajaxForm.setDefaults({
        errorValidate : function() {
            noty({
                type : 'error',
                message : 'Ошибки заполнения полей'
            });
        },
        worked : function() {
            noty({
                type:'info',
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
        errorCallback : function(that, request, status, error) {
            if (request.status == '200') {
                console.log('Исключение: ' + request.responseText);
            } else {
                console.log(request.status + ' ' + request.statusText);
            }
        },
        functions : {
            add_admin : function(response) {
                if (response.status === 'error') {
                    noty({
                        type : response.status,
                        message : response.msg
                    });
                }
                if (response.status === 'success') {
                    var
                        url = $('#url').val() + '/' + response.data.id +'?return=true',
                        tr = $('<tr>'),
                        sharp = $('<td>', {
                            text : response.data.id
                        }),
                        Email = $('<td>', {
                            text : response.data.email
                        }),
                        dateTime = $('<td>', {
                            text : date('Y-m-d H:i:s', new Date())
                        }),
                        del = $('<td>', {
                            html : '<a data-callback="del_admin" class="_admins_link" data-url="'+url+'" href="#"><i class="icon-trash icon-large"></i></a>'
                        });
                    tr.append(sharp, Email, dateTime, del).prependTo('tbody', '#table_admins');
                    noty({
                        type : response.status,
                        message : response.msg
                    });
                }
            },
            del_admin : function(response, that) {

                if (response.status === 'error') {
                    noty({
                        type : response.status,
                        message : response.msg
                    });
                }
                if (response.status === 'success') {
                    that.$element.closest('tr').remove();
                    noty({
                        type : response.status,
                        message : response.msg
                    });
                }
            },
            get_user : function(response, that) {
                $('.right-block').html(response.msg);
                $('.listener').find('tbody').css('height', $('.block').css('height'));
                $('#slimScroll').slimScroll({
                    height: $('.listener').height(),
                    railVisible: true,
                    alwaysVisible: true
                });
            },
            change_status : function(response, that) {
                if (response.status === 'success') {
                    var listener = $('.listener'),
                        cur_listener = listener.find('tbody tr[id="'+that.$element.data('id')+'"]');
                    if (that.$element.hasClass('laststatus')) {
                        var prev = cur_listener.prev(),
                        next = cur_listener.next();
                        cur_listener.remove();
                        (next.length) ? next.trigger('click') : ((prev.length) ? prev.trigger('click') : (listener.find('tbody tr').first().length ? listener.find('tbody tr._admins_link').first().trigger('click') : $('.block').find('.span9').hide() && $('.block').find('.span3').hide() && $('.empty').show()));
                    } else {
                        listener.find('tbody tr[id="'+that.$element.data('id')+'"]').trigger('click');
                    }
                }
                if (response.status === 'error' || response.status === 'success') {
                    noty({
                        type : response.status,
                        message : response.msg
                    });
                }
            },
            add_group : function(response) {
                if (response.status === 'success') {
                    $('select#listeners option:selected').remove();
                    $('select#listeners').next('.lbjs').find('.lbjs-list').find('div.lbjs-item[selected="selected"]').remove();
                }
                if (response.status === 'error' || response.status === 'success') {
                    noty({
                        type : response.status,
                        message : response.msg
                    });
                }
            },
            smtp : function(response, that) {
                var smtp = $('.smtp');
                if (!that.isForm) {
                    smtp.removeClass('_ch_off_smtp');
                    $('._ch_data_smtp')[0].reset();
                    $('._ch_data_smtp').find('input').each(function() {
                        $(this).prop('disabled', true);
                    });
                } else {
                    if (response.status === 'success') {
                        if (!smtp.hasClass('_ch_off_smtp')) {
                            smtp.addClass('_ch_off_smtp');
                        }
                    }
                }
                if (response.status === 'error' || response.status === 'success') {
                    noty({
                        type : response.status,
                        message : response.msg
                    });
                }
            }
        },
        debug : true
    });

    $('._admins_link').ajaxForm();

    $('._admins_form').ajaxForm({
        form : true,
        validate: false
    });
    $('._file_up').ajaxForm({
        validate: false
    });

    $('._ch_off_smtp').ajaxForm({
        validate: false
    });

    $('._ch_data_smtp').ajaxForm({
        validate: false
    });

    $("[rel='tooltip']").tooltip({
        delay : 400
    });

    $('#user_name').popupWin({
        edgeOffset : 30,
        delay : 400
    });

    $('.placeholder').placeholder();

});