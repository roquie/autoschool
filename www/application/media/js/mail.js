/**
 * Copyright 2013, Viktor Melnikov
 *
 * Обеспечение работы отправки почты
 */
$(function() {

    $('#to').prop('disabled',true).css({backgroundColor : '#ffffff'});

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
     * Отправка письма
     */
    $('#send').submit(function(event) {
        event.preventDefault();
        var to = $('#to'),
            subj = $('#subject'),
            message = $('#editor'),
            err = 0,
            data = {};
        if ( to.val() === '' || to.val() === to.data('value') ) {
            noty({
                text   : 'Заполните поле "Кому"',
                type   : 'error'
            });
            err++;
        }
        if ( subj.val() === '' || subj.val() === subj.data('value') ) {
            noty({
                text   : 'Заполните поле "Тема"',
                type   : 'error'
            });
            err++;
        }
        if ( message.html() === '' ) {
            noty({
                text   : 'Заполните поле "Сообщение"',
                type   : 'error'
            });
            err++;
        }
        data.to = to.val().slice(0, -2);
        data.subject = subj.val();
        data.msg = message.html();
        if (err != 0) { exit(); }
        $.post(
            '/admin/send_mail',
            data,
            function (response)
            {
                noty({
                    text   : response.msg,
                    type   : response.status
                });
                $('#reset').trigger('click');
            },
            'json'
        );
    });
    /**
     * Кнопка "Очистить" в форме отправки письма
     */
    $('#reset').on('click', function() {
        var to = $('#to'),
            subj = $('#subject'),
            message = $('#editor');
        $.each( $('.checkboxes .check'), function() {
            $(this).removeClass('active');
            $(this).find('input').removeProp('checked');
        });
        to.val('').blur();
        subj.val('').blur();
        message.html('');
    });

    /**
     * Отображение выбранного e-mail адреса в поле ввода "Кому"
     */
    $('body').on('click', '.check', function() {
        var $this = $(this),
            to = $('#to'),
            val = '';
        if ( to.val() === to.data('value') ) {
            to.val('');
        }
        val = to.val();
        if ( $this.find('input').prop('checked') ) {
            val += $this.find('input').val() + ', ';
        } else {
            val = val.replace($this.find('input').val()+', ', '');
        }
        to.val(val).css({color:'#000'});
        if ( to.val() === '' ) {
            to.val(to.data('value')).css({color : '#999'});
        }
    });
});