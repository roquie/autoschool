$(function() {
    /**
     * Клик по названию шаблона отображает внизу кнопки редактирования и удаления
     */
    var work_edit = false,
        work_del  = false,
        work_add  = false;
    /**
     * Нажатие на название шаблона сохраняет его id в данные кнопок редактирования и удаления
     */
    $('.checkboxes').on('click', '.radio', function() {
        $('#edit').data('id',$(this).attr('id'));
        $('#remove').data('id',$(this).attr('id'));
        if ( $('#btn-tpl').css('display') == 'none' ) {
            $('#btn-tpl').css({display:'block'});
        }
    });


    /**
     * Форма добавления нового шаблона
     */
    $('#add').on('click', function(event) {
        event.preventDefault();
        var regexp = /([<|(]("[^"]*"|'[^']*'|[^'">])*[>|)])/gi;
        if ( work_add === true ) {
            return false;
        }
        var name = $('#title'),
            tpl = $('#editorTpl'),
            action = $(this).data('url'),
            data = {};
        data.title = name.val().replace(regexp,"");
        data.text  = tpl.html().replace(regexp,"");
        if ( name.val() != '' && name.val() != name.attr('placeholder') && tpl.text() != '' ) {
            work_add = true;
            $.post(
                action,
                data,
                function(response) {
                    if (response.success === 1) {
                        $('.checkboxes').prepend(
                            "<label class='radio' id='"+response.data.id+"'>" +
                                "<input type='radio' name='radioTpl' value='"+response.data.id+"'>" +
                                "<span>"+response.data.title+"</span>" +
                            "</label>"
                        );
                        noty({
                            text   : response.msg,
                            type   : response.status
                        });
                        $('#cancel').trigger('click');
                    } else {
                        noty({
                            text   : response.msg,
                            type   : response.status
                        });
                    }
                    work_add = false;
                },
                'json'
            );
        } else {
            noty({
                text   : 'Все поля обязательны для заполнения',
                type   : 'error'
            });
        }
    });
    /**
     * Кнопка отмены при добавлении нового шаблона
     */
    $('#cancel').on('click', function() {
        var name = $('#title'),
            tpl = $('#editorTpl');
        name.val('').blur();
        tpl.html('');
    });
    /**
     * Сохранение отредактированного шаблона
     */
    $('#save').on('click', function(event) {
        event.preventDefault();
        var regexp = /([<|(]("[^"]*"|'[^']*'|[^'">])*[>|)])/gi;
        if ( work_edit === true) {
            return false;
        }
        var name = $('#titleTpl'),
            tpl = $('#editor'),
            action = $(this).data('url'),
            data = {};
        data.title = name.val().replace(regexp,"");
        data.text  = tpl.html().replace(regexp,"");
        data.id    = $('#edit').data('id');
        if ( name.val() != '' && tpl.html() != '' ) {
            work_edit = true;
            $.post(
                action,
                data,
                function(response) {
                    if (response.success === 1) {
                        var td = $(".radio[id="+response.data.id+"]");
                        td.find('span').text(response.data.title);
                        noty({
                            text   : response.msg,
                            type   : response.status
                        });
                        $('#reset').trigger('click');
                    } else {
                        noty({
                            text   : response.msg,
                            type   : response.status
                        });
                    }
                    work_edit = false;
                },
                'json'
            );
        } else {
            noty({
                text   : 'Все поля обязательны для заполнения',
                type   : 'error'
            });
        }
    });
    /**
     * Кнопка отмены при редактировании
     */
    $('#reset').on('click', function() {
        var name = $('#titleTpl'),
            tpl = $('#editor');
        name.val('').blur();
        tpl.html('');
        disable(true, [$('#save'), $('#reset')]);
        disable(false, $('#remove'));
    });
    /**
     * Кнпока редактирования
     */
    $('#edit').on('click', function(event) {
        event.preventDefault();
        var action = $(this).data('url'),
            id = $(this).data('id');
        if ( id ) {
            disable(false, [$('#save'), $('#reset')]);
            disable(true, $('#remove'));
            $.post(
                action,
                { id :  id },
                function(response) {
                    if (response.success === 1) {
                        $('#titleTpl').val(response.data.title);
                        $('#editor').html(response.data.text);
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
                text   : 'Выберите шаблон для редактирования',
                type   : 'info'
            });
        }
    });
    /**
     * Кнопка удаления
     */
    $('#remove').on('click', function(event) {
        event.preventDefault();
        var id = $(this).data('id');
        if ( id ) {
            $('.modal').modal('show');
        } else {
            noty({
                text   : 'Выберите шаблон для удаления',
                type   : 'info'
            });
        }
    });
    /**
     * Кнопка "Да" в модальном окне подтверждения удаления
     */
    $('#yes').on('click', function(event) {
        event.preventDefault();
        if ( work_del === true) {
            return false;
        }
        var id = $('#remove').data('id'),
            action = $(this).data('url');
        work_del = true;
        $.post(
            action,
            { id :  id },
            function(response) {
                $('.modal').modal('hide');
                $(".radio[id="+response.id+"]").remove();
                noty({
                    text   : response.msg,
                    type   : response.status
                });
                $('#remove').removeData("id");
                $('#edit').removeData("id");
                work_del = false;
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
});
function disable(flag, el) {
    if ( $.isArray(el) ) {
        $.each(el, function() {
            $(this).prop('disabled', flag);
        });
    } else {
        el.prop('disabled', flag);
    }
}