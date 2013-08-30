/**
 * Copyright 2013, Viktor Melnikov
 *
 * Обеспечение работы отправки почты
 */
$(function() {

    //$('#to').prop('disabled',true).css({backgroundColor : '#ffffff'});

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
    $('#send').ajaxForm({
        callback : function(response) {
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
            }
        },
        trigger : 'blur',
        offsetTopBalloon : -5,
        fields : ['editor']
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
        message.html('');
        to.val('');
        subj.val('');
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
});