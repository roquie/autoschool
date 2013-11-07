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
            check_pass : function(response) {
                if (response.status == 'error') {
                    noty({
                        type : response.status,
                        message : response.msg
                    });
                }
                if (response.status == 'success') {
                    $('#check_pass').css(
                        {
                            display: 'none'
                        }
                    );
                    $('#change_email').css(
                        {
                            display: 'block'
                        }
                    );

                }
            }
        }
    });

    $('._admins_link').ajaxForm();

    $('._admins_form').ajaxForm();

    $('#slimScroll').slimScroll({
        height: $("#slimScroll").height(),
        railVisible: true,
        alwaysVisible: true
    });

    var navbarHeight = $('.navbar').height();

    $('#MainBlok_slimScroll').slimScroll({
        height: $(window).height(),
        alwaysVisible: true
    });
    $(window).resize(function(){
        $('#MainBlok_slimScroll').css("height",$(window).height()-navbarHeight+'px');
        $("#MainBlok_slimScroll").parent().css("height",$(window).height()-navbarHeight+'px');
        //$(".slimScrollBar").css({ height: height + 'px' });
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