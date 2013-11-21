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
        statusCode : { // Это не обязательно, просто так по сути))
            404 : function(that) {
                alert( 'Неверный url: ' + that.options.url );
            },
            505 : function() {
                alert( 'Ошибка выполнения запроса' );
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
                alert(response.data.famil);
            }
        }
    });

    $('._admins_link').ajaxForm({
        debug : true
    });

    $('._admins_form').ajaxForm();

    $("[rel='tooltip']").tooltip({
        delay : 400
    });

    $('#user_name').popupWin({
        edgeOffset : 30,
        delay : 400
    });

    $('.placeholder').placeholder();

});