/**
 * Copyright 2013, Viktor Melnikov
 *
 * Обеспечение работы отправки почты
 */
$(function() {
    var ul = $('#uploadFiles ul'),
        tpl,
        url = $('#upload').data('url'),
        attache = '';

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
                if (response.status === 'success') {
                    $('#editor').html(response.data.text);
                }
                if (response.status === 'error') {
                    noty({
                        type   : response.status,
                        text   : response.msg
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
        alert(attache.slice(0, -1));
/*        send_ajax($(this), function(response) {
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
        }, {offsetTopBalloon : 5}, ['editor'], {'files' : attache.slice(0, -1)});*/
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
    /**
     * Обработка перехода по папкам
     */
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
            }, function() {
                $.each($('.files > li > .check'), function(k, v) {
                    if (attache.indexOf($(this).find('input').val()) + 1) {
                        $(this).addClass('active');
                        $(this).find('input').prop('checked', true);
                    }
                });
            });
        }
    });

    /**
     * При нажатии на файл появляется кнопка прикрепить
     */
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
        var $this = $(this),
            text = $this.find('input').val();
        if( !$this.find('input').prop('checked') ) {
            attache = attache.replace(text + ',', '');
        }
    });

    /**
     * Нажатие на кнопку прикрепить
     */
    $('body').on('click', '#attache', function(e) {
        e.preventDefault();
        var list = '';
        $('#file:checked').each(function() {
            if (attache.indexOf($(this).val()) === -1)
                list += $(this).val() + ',';
        });
        attache += list;
    });

    /**
     * При нажатии на кнопку "Прикрепить файлы", загружаем их в модальное окно
     */
    $('#attacheModal').on('click', function() {
        var action = $(this).data('url');
        $('.modal-body').load(action);
    });

    /**
     * Нажатие на кнопку загрузить файл
     */
    $('#fileUpload i').on('click', function(e) {
        e.preventDefault();
        $(this).parent().find('input').click();
    });

    /**
     * Загрузка файлов, также имеется drag&drop
     */
    $('#upload').fileupload({
        url: url,
        dropZone: $('#editor'),
        dataType: 'json',
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
        maxFileSize: 5000000 // 5 MB
    }).on('fileuploadadd', function (e, data) {
            tpl = $('<li class="working"><input type="text" value="0" data-width="48" data-height="48"'+
                ' data-fgColor="#0788a5" data-readOnly="1" data-bgColor="#3e4043" /><p></p><span></span></li>');

            tpl.find('p').text(data.files[0].name).append('<i>' + formatFileSize(data.files[0].size) + '</i>');
            data.context = tpl.prependTo(ul);
            tpl.on('click', 'span', function(){
                var parent = $(this).parent('li');
                if(parent.hasClass('working')) {
                    parent.find('i').before('<br>Загрузка остановлена.');
                    data.abort();
                }
                parent.delay(2000).fadeOut(function() {
                    parent.remove();
                });
            });
        }).on('fileuploadprocessalways', function (e, data) {
            var index = data.index,
                file = data.files[index],
                node = $(data.context[index]);
            if (file.error) {
                node.addClass('error').find('i').before('&nbsp;&nbsp;&nbsp;Неверный тип файла.');
            }
            if (index + 1 === data.files.length) {
                node.find('input').knob();
                //data.submit();
            }
        }).on('fileuploadprogress', function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            data.context.find('input').val(progress).change();
            if(progress == 100) {
                data.context.removeClass('working');
                if (attache != '') {
                    attache += ',';
                }
                attache += 'uploads/' + data.files[0].name;
                alert(attache);
            }
        }).on('fileuploaddone', function (e, data) {
        }).on('fileuploadfail', function (e, data) {
            data.context.addClass('error');
        });

    /**
     * Отменяем стандартное поведение при событии переноса файлов в поле браузера
     */
    $(document).on('drop dragover', function (e) {
        e.preventDefault();
        return false;
    });

    /**
     * вспомогательная функция, которая форматирует размер файла
     * @param bytes
     * @returns {string}
     */
    function formatFileSize(bytes) {
        if (typeof bytes !== 'number') {
            return '';
        }

        if (bytes >= 1000000000) {
            return (bytes / 1000000000).toFixed(2) + ' GB';
        }

        if (bytes >= 1000000) {
            return (bytes / 1000000).toFixed(2) + ' MB';
        }

        return (bytes / 1000).toFixed(2) + ' KB';
    }

});