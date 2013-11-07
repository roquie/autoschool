/**
 * setting.js
 * Viktor Melnikov
 * Version 5.0 - Updated: May, 11, 2013
 *
 */
$(document).ready(function() {
    var project = [];
    /**
     * Создание массива для autocomplete
     */
    $.post(
        '/admin/settings/autocomplete',
        function(data)
        {
            project = data.source;
            $('#autocomplete').autocomplete({
                source: project,
                select: function( event, ui ) {
                    // вывод выбранного в комплите
                    // alert(ui.item.value);
                }
            });
        },
        'json'
    );

   /* $.ajax(
        url : '/admin/settings/autocomplete',
        success : function(data) {
        $('#autocomplete').
    }
    );*/

    /**
     * Одинаковая высота блоков: Новый пользователь и Редактировать пользователя; Аккаунт Google Drive и История изменений
     */
    equalHeight($('.newUser'), $('.editUser'));
    /**
     * Форма добавления нового пользователя
     */
    var work_form1 = false,
        work_form2 = false,
        work_form3 = false,
        work_form4 = false;
    $('#form1').submit(function(event) {
        event.preventDefault();
        if (work_form1 === true) {
            return false;
        }
        var mail = $(this).find('#email');
        if(mail.val() != '' && mail.val() != mail.data('value')){
            if( isValidateEmail(mail.val()) ) {
                var data = $(this).serialize(),
                    action = $(this).data('url');
                work_form1 = true;
                $.post(
                    action,
                    data,
                    function (response)
                    {
                        noty({
                            text   : response.msg,
                            type   : response.status
                        });
                        work_form1 = false;
                    },
                    'json'
                );
            } else {
                noty({
                    text   : 'Можно использовать только E-mail адрес от Google',
                    type   : 'error'
                });
            }
        } else {
            noty({
                text   : 'Поле e-mail не может быть пустым',
                type   : 'error'
            });
        }
    });

    /**
     * Форма для перехода к форме редактирования
     */
    $('#form2').submit(function(event) {
        event.preventDefault();
        if (work_form2 === true) {
            return false;
        }
        var email = $('#autocomplete');
        if(email.val() != '' && email.val() != email.data('value')){
            if ($.inArray(email.val(), project) > -1) {
                var action = $(this).data('url');
                work_form2 = true;
                $.post(
                    action,
                    { email : email.val() },
                    function (response)
                    {
                        $('#name').val(response.msg.first_name).css({color:'#000'});
                        $('#fam').val(response.msg.last_name).css({color:'#000'});
                        $('#editEmail').val(response.msg.email).css({color:'#000'});
                        $('#rights').val(response.msg.right);
                        $('#groups').val(response.msg.group);
                        $('#id').val(response.msg.id);
                        work_form2 = false;
                    },
                    'json'
                );
                $(this).animate({opacity:0}, 'slow', function() {
                    $(this).addClass('hide');
                    $('#form3').removeClass('hide').css({opacity:0}).animate({opacity:1}, 'slow');
                });
            } else {
                noty({
                    text   : 'Пользователь с таким e-mail адресом отсутствует',
                    type   : 'info'
                });
            }
        } else {
            noty({
                text   : 'Поле e-mail не может быть пустым',
                type   : 'error'
            });
        }
    });
    /**
     * Кнопка отмены на форме редактирования
     */
    $('#reset').on('click', function(event) {
        event.preventDefault();
        $('#form3').animate({opacity:0}, 'slow', function() {
            $('#form3').addClass('hide');
            $('#autocomplete').val('');
            $('#form2').removeClass('hide').css({opacity:0}).animate({opacity:1}, 'slow');
        });
    });
    /**
     * Форма редактирования
     */
    $('#form3').submit(function(event) {
        event.preventDefault();
        if (work_form3 === true) {
            return false
        }
        var arr = $(this).find('input'),
            cnt = 0;
        for (var i = 0; i < arr.length; i++) {
            if ( $(this).find('input').eq(i).val() === '' ) {
                cnt++;
            }
        }
        if (cnt != 0) {
            noty({
                text   : 'Заполните все поля для редактируемого пользователя',
                type   : 'error'
            });
        }
        var mail = $(this).find('#editEmail');
        if(mail.val() != '' && mail.val() != mail.data('value')) {
            if( isValidateEmail(mail.val()) ) {
                var data = $(this).serialize(),
                    action = $(this).data('url');
                work_form3 = true;
                $.post(
                    action,
                    data,
                    function (response)
                    {
                        if (response.success === 1) {
                            noty({
                                text   : response.msg,
                                type   : response.status
                            });
                            var i = 0,
                                td = $('#tableUser tr[id='+response.data.id+'] td');
                            if (response.is_user === 1) {
                                $('.login').text(response.data.name+' '+response.data.fam);
                            }
                            $.each(response.data, function(k,v) {
                                td.eq(i).text(v);
                                i++;
                            });
                            $('#reset').trigger('click');
                        } else {
                            noty({
                                text   : response.msg,
                                type   : response.status
                            });
                        }
                        work_form3 = false;
                    },
                    'json'
                );
            } else {
                noty({
                    text   : 'Можно использовать только E-mail адрес от Google',
                    type   : 'error'
                });
            }
        } else {
            noty({
                text   : 'Поле e-mail не может быть пустым',
                type   : 'error'
            });
        }
    });
    /**
     * Нажатие на иконку корзины в таблице пользователей
     */
    $('table').on('click', 'a.del', function(event) {
        event.preventDefault();
        $('#yes').data('id', $(this).data('id'));
        $('.modal').modal('show');
    });
    /**
     * Кнопка "Да" в модальном окне подтверждения удаления
     */
    $('#yes').on('click', function(event) {
        event.preventDefault();
        var id = $(this).data('id'),
            action = $(this).data('url');
        $.post(
            action,
            { id :  id },
            function(response) {
                $('.modal').modal('hide');
                $("#tableUser tr[id="+response.msg+"]").remove();
                noty({
                    text   : 'Пользователь с id = '+response.msg+' удалён!',
                    type   : response.status
                });
            },
            'json'
        );
    });
    /**
     * Кнопка "Нет" в модальном окне подтверждения удаления
     */
    $('#no').on('click', function(event) {
        event.preventDefault();
        $('.modal').modal('hide');
    });
    /**
     * Форма изменения аккаунта для доступа к Google SpreadSheets
     */
    $('#form4').submit(function(event) {
        event.preventDefault();
        if (work_form4 === true) {
            return false;
        }
        var data = $(this).serialize(),
            action = $(this).data('url'),
            mail = $(this).find('#login'),
            pass = $(this).find('#password');
        if(mail.val() != '' && mail.val() != mail.data('value') && pass.val() != '') {
            if( isValidateEmail(mail.val()) ) {
                work_form4 = true;
                $.post(
                    action,
                    data,
                    function(response) {
                        noty({
                            text   : response.msg,
                            type   : response.status
                        });
                        work_form4 = false;
                    },
                    'json'
                );
            } else {
                noty({
                    text   : 'Можно использовать только E-mail адрес от Google',
                    type   : 'error'
                });
            }
        } else {
            noty({
                text   : 'Все поля обязательны для заполнения',
                type   : 'error'
            });
        }
    });
    /**
     * Нажатие на e-mail адрес в таблице истории изменений
     */
    $('td #emailHistory').on('click', function() {
        var login = $('#login');
        if ( login.prop ('disabled') ) {
            noty({
                text   : 'Поле E-mail заблокировано на ввод, разблокируйте его.',
                type   : 'info'
            });
        } else {
            login.val($(this).text()).css({color:'#000'});
        }
    });
    /**
     * Нажатие на кнопку Заблокировать/Разблокировать
     */
    $('.block').on('click', function() {
        $('#login').prop('disabled', true);
        $('#password').prop('disabled', true);
    });
    $('.unblock').on('click', function() {
        $('#login').prop('disabled', false);
        $('#password').prop('disabled', false);
    });
    $('#block input').on('click', function(event) {
        event.preventDefault();
        $('#block input').toggle();
    });
    /**
     * Редактирование группы
     */
    $('#editGroup').on('click', function(event) {
        event.preventDefault();
        if ( $("#selectGroup :selected").val() ) {
            $('#nameGroup').val($("#selectGroup :selected").text()).prop('disabled', false);
            $('#saveGroup').removeClass('disabled');
        } else {
            noty({
                text   : 'Нет ниодной группы',
                type   : 'info'
            });
        }
    });
    /**
     * Удаление группы
     */
    $('#removeGroup').on('click', function(event) {
        event.preventDefault();
        var id  = $("#selectGroup :selected").val(),
            action = $(this).data('url');
        if ( id ) {
            $.post(
                action,
                { id : id },
                function(response) {
                    noty({
                        text   : response.msg,
                        type   : response.status
                    });
                    $('#nameGroup').val('').prop('disabled', true);
                    $('#saveGroup').addClass('disabled');
                    $("#selectGroup option[value="+response.id+"]").remove();
                },
                'json'
            );
        } else {
            noty({
                text   : 'Нет ниодной группы',
                type   : 'info'
            });
        }
    });
    $('#addGroup').on('click', function(event) {
        event.preventDefault();
        var name = $('#nameGr'),
            action = $(this).data('url');
        if(name.val() != '' && name.val() != name.data('value')) {
            $.post(
                action,
                { name : name.val() },
                function(response) {
                    if (response.success === 1) {
                        noty({
                            text   : response.msg,
                            type   : response.status
                        });
                        $('#selectGroup').append(
                            '<option value='+response.data.id+'>'+name.val()+'</option>'
                        );
                        name.val('');
                    } else {
                        noty({
                            text   : response.msg,
                            type   : response.status
                        });
                    }
                },
                'json'
            );
        } else {
            noty({
                text   : 'Заполните поле "Группа"',
                type   : 'error'
            });
        }
    });
    /**
     * Кнопка сохранить при редактировании группы
     */
    $('#saveGroup').on('click', function(event) {
        event.preventDefault();
        var name = $('#nameGroup'),
            id  = $("#selectGroup :selected").val(),
            action = $(this).data('url');
        if ( name.val() != '') {
            $.post(
                action,
                {
                    name : name.val(),
                    id   : id
                },
                function (response) {
                    if ( response.success === 1) {
                        noty({
                            text   : response.msg,
                            type   : response.status
                        });
                        $("#selectGroup option[value="+id+"]").text(name.val());
                        $('#nameGroup').val('').prop('disabled', true);
                        $('#saveGroup').addClass('disabled');
                    } else {
                        noty({
                            text   : response.msg,
                            type   : response.status
                        });
                    }
                },
                'json'
            );
        }
    });


    /**
     * Редактирование Отделения
     */
    $('#editDep').on('click', function(event) {
        event.preventDefault();
        if ( $("#selectDep :selected").val() ) {
            $('#nameDep').val($("#selectDep :selected").text()).prop('disabled', false);
            $('#saveDep').removeClass('disabled');
        } else {
            noty({
                text   : 'Нет ниодного отделения',
                type   : 'info'
            });
        }
    });
    /**
     * Удаление группы
     */
    $('#removeDep').on('click', function(event) {
        event.preventDefault();
        var id  = $("#selectDep :selected").val(),
            action = $(this).data('url');
        if ( id ) {
            $.post(
                action,
                { id : id },
                function(response) {
                    noty({
                        text   : response.msg,
                        type   : response.status
                    });
                    $('#nameDep').val('').prop('disabled', true);
                    $('#saveDep').addClass('disabled');
                    $("#selectDep option[value="+response.id+"]").remove();
                },
                'json'
            );
        } else {
            noty({
                text   : 'Нет ниодного отделения',
                type   : 'info'
            });
        }
    });
    $('#addDep').on('click', function(event) {
        event.preventDefault();
        var name = $('#nameD'),
            action = $(this).data('url');
        if(name.val() != '' && name.val() != name.data('value')) {
            $.post(
                action,
                { name : name.val() },
                function(response) {
                    if (response.success === 1) {
                        noty({
                            text   : response.msg,
                            type   : response.status
                        });
                        $('#selectDep').append(
                            '<option value='+response.data.id+'>'+name.val()+'</option>'
                        );
                        name.val('');
                    } else {
                        noty({
                            text   : response.msg,
                            type   : response.status
                        });
                    }
                },
                'json'
            );
        } else {
            noty({
                text   : 'Заполните поле "Отделение"',
                type   : 'error'
            });
        }
    });
    /**
     * Кнопка сохранить при редактировании группы
     */
    $('#saveDep').on('click', function(event) {
        event.preventDefault();
        var name = $('#nameDep'),
            id  = $("#selectDep :selected").val(),
            action = $(this).data('url');
        if ( name.val() != '') {
            $.post(
                action,
                {
                    name : name.val(),
                    id   : id
                },
                function (response) {
                    if ( response.success === 1) {
                        noty({
                            text   : response.msg,
                            type   : response.status
                        });
                        $("#selectDep option[value="+id+"]").text(name.val());
                        $('#nameDep').val('').prop('disabled', true);
                        $('#saveDep').addClass('disabled');
                    } else {
                        noty({
                            text   : response.msg,
                            type   : response.status
                        });
                    }
                },
                'json'
            );
        }
    });
});
/**
 * Проверка e-mail адреса на соответствие
 * @param email введённый e-mail адрес
 * @returns {boolean} результат выполнения функции (правильный ли e-mail)
 */
function isValidateEmail(email)
{
    var pattern = /^[\w\d\._-]+@+gmail+\.+com$/i;
    return pattern.test(email);
}