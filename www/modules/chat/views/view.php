<script>
    $(function() {
        var text_message = $('#msg'),
            work = false,
            scroll = 2,
            end_scroll = false,
            work_scroll = false,
            clear_disable = false;

        $('#messages').slimScroll({
            height: $("#messages").height(),
            alwaysVisible : true,
            start: 'bottom'
        }).bind('slimscrolling', function(e, pos) {
                if (pos > 0) {
                    $('#header').addClass('shadow');
                } else if(pos == 0) {
                    $('#header').removeClass('shadow');
                    if (!end_scroll && !work_scroll) {
                        var block =  $('#messages'),
                            action = block.data('url');
                        work_scroll = true;
                        $.post(
                            action,
                            {
                                offset : scroll
                            },
                            function(response) {
                                work_scroll = false;
                                if (response.status == 'empty') {
                                    end_scroll = true;
                                }
                                if (response.status == 'success') {
                                    var el = block.find('#message').first();
                                    block.prepend(response.msg).slimscroll();
                                    //update(el);
                                }
                            },
                            'json'
                        );
                        scroll++;
                    }
                }
            });

        text_message.on('focusout', function() {
            if (text_message.text() != '') {
                if (text_message.hasClass('error')) {
                    text_message.removeClass('error');
                }
            }
        });

        text_message.on('keypress', function(e) {
            if ((e.which == 13) && e.shiftKey) {} // перенос строки
            if (e.which == 13 && !e.shiftKey) { // отправка сообщения
                e.preventDefault();
                if (work) {
                    return false;
                }
                var action = text_message.data('url');
                if (text_message.text() == '') {
                    text_message.addClass('error');
                } else {
                    work = true;
                    text_message.removeClass('error');
                    $.post(
                        action,
                        {
                            message : text_message.text()
                        },
                        function(response) {
                            work = false;
                            if (response.status == 'empty') {
                                text_message.addClass('error');
                            }
                            if (response.status == 'error') {
                                noty({
                                    type : response.status,
                                    message : response.msg
                                });
                            }
                            if (response.status == 'success') {
                                $('#messages').find('#clear-block').remove();
                                $('#messages').append(response.msg);
                                clear_disable = false;
                                update();
                                text_message.blur();
                                text_message.placeholder('default');
                            }
                        },
                        'json'
                    );
                }
                return false;
            }
        });

        $('#clear').on('click', function(e) {
            e.preventDefault();
            if (clear_disable) {
                return false;
            }
            $.post(
                $(this).data('url'),
                function(response) {
                    if (response.status == 'error') {
                        noty({
                            type : response.status,
                            message : response.msg
                        });
                    }
                    if (response.status == 'success') {
                        $('#messages').empty().html('<div class="text-center" id="clear-block"><i class="icon-frown icon-large"></i> Переписка пуста</div>');
                        clear_disable = true;
                    }
                },
                'json'
            );
        });

        function update(position) {
            $('.slimScrollBar').remove();
            $('.slimScrollRail').remove();
            if (typeof position == 'undefined') {
                position = 'bottom';
            }
            $('#messages').unwrap().slimScroll({
                height: $("#messages").height(),
                railVisible : true,
                alwaysVisible : true,
                start: position
            });
        }

        text_message.placeholder();
    });
</script>
<div class="row">
    <div class="span8">
        <div id="chat">
            <div id="header">
                Задайте ваш вопрос
                <a href="#" class="pull-right" id="clear" data-url="<?=URL::site('chat/clear')?>"><i class="icon-trash icon-large"></i> Удалить историю</a>
            </div>
            <div id="messages" data-url="<?=URL::site('chat/load')?>">
                <?=$messages?>
            </div>
            <div id="enter">
                <div id="enter-inner">
                    <div class="avatar pull-left">
                        <?=HTML::image($userPhoto)?>
                    </div>
                    <div contenteditable="true" class="message pull-left div-block" id="msg" title="Нажмите Enter для отправки сообщения и Shift+Enter для переноса" data-url="<?=URL::site('chat/add')?>" data-value="Введите ваше сообщение"></div>
                </div>
            </div>
        </div>
    </div>
</div>