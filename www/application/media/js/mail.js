/**
 * Copyright 2013, Viktor Melnikov
 *
 * Обеспечение работы отправки почты
 */
$(function() {

    var attache = '';

    /**
     * Загрузка в поле "сообщение" текста из выбранного шаблона
     */
    $('#tpl').on('click', 'li a', function(event) {
        event.preventDefault();
        var id = $(this).data('id'),
            action = $(this).closest('ul').data('url');
        $.post(
            action,
            { id :  id },
            function(response) {
                if (response.success === 1) {
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
    });
    /**
     * Отправка письма (также с прикреплением файлов)
     */
    $('#send').on('submit', function(e) {
        e.preventDefault();
        send_ajax($(this), function(response) {
            // Если пустые поля
            if (response.status === 'empty') {
                var element,
                    $this = $('#send');
                $.each(response.data, function(i, v) {
                    if ($this.find('input[name="'+ v +'"], textarea[name="'+ v +'"]').length > 0) {
                        element = $this.find('input[name="'+ v +'"], textarea[name="'+ v +'"]');
                    } else {
                        element = $('#'+v);
                    }
                    element.addClass('error');
                });
            }
            // Если получена ошибка
            if (response.status === 'error') {
                noty({
                    type : response.status,
                    message : response.msg
                });
            }
            // Если всё нормально
            if (response.status === 'success') {
                noty({
                    type : response.status,
                    message : response.msg
                });
                $('#reset').trigger('click');
                attache = '';
            }
        }, {offsetTopBalloon : 3}, ['editor'], {'files' : attache});
    });

    /**
     * Кнопка "Очистить" в форме отправки письма
     */
    $('#reset').on('click', function() {
        var message = $('#editor');
        $.each( $('.checkboxes .check'), function() {
            $(this).removeClass('active');
            $(this).find('input').removeProp('checked');
        });
        $('.placeholder').placeholder('default');
        message.html('');
    });

    /**
     * Отображение выбранного e-mail адреса в поле ввода "Кому"
     */
    $('body').on('click', '.emails', function() {
        var $this = $(this),
            to = $('#to'),
            val = '';
        if ( to.val() === to.data('value') ) {
            to.val('');
        }
        val = to.val();
        if ( $this.find('input').prop('checked') ) {
            to.removeClass('error');
            if (to.next().length > 0)
                to.next().remove();
            if (val != '') {
                if (to.val().slice(-2) != ', ') {
                    val += ', ';
                }
            }
            val += $this.find('input').val() + ', ';
        } else {
            val = val.replace($this.find('input').val()+', ', '');
        }
        to.val(val).css({color:'#000'});
        if ( to.val() === '' ) {
            to.val(to.data('value')).css({color : '#999'});
        }
    });

    // Обработка перехода по папкам
    $('body').on('click', '.files li > a', function(e) {
        e.preventDefault();
        var dot = true;
        if ($.trim($(this).text()) == '..' || $.trim($(this).text()) == '.') {
            dot = false;
        }
        if ($(this).attr('type') != 'file') {
            $('.modal-body').load($('#attacheModal').data('url'), {
                path : $(this).attr('href'),
                dot  : dot
            });
        }
    });
    // При нажатии на файл появляется кнопка прикрепить
    $(document).on('click', '.file', function() {
        var ul = $('.modal-body').find('#attache');
        if (ul.length === 0) {
            $('.modal-body').append($('<a>', {
                href : '#',
                id : 'attache',
                text : 'Прикрепить',
                class : 'btn'
            }));
        }
    });

    // Нажатие на кнопку прикрепить
    $('body').on('click', '#attache', function(e) {
        e.preventDefault();
        var list = '';
        $('#file:checked').each(function() {
            list += $(this).val() + ',';
        });
        attache = list.slice(0, -1)
    });

    // При нажатии на кнопку "Прикрепить файлы", загружаем их в модальное окно
    $('#attacheModal').on('click', function() {
        var action = $(this).data('url');
        $('.modal-body').load(action);
    });

});