/**
 * Developer: V. Melnikov
 * Date: 07.11.13
 * Time: 23:31
 */
$(function() {
    var text_message = $('#msg');
    $('#messages').slimScroll({
        height: $("#messages").height(),
        railVisible: true,
        alwaysVisible: true,
        start: 'bottom'
    }).bind('slimscrolling', function(e, pos) {
        if (pos > 0) {
            $('#header').addClass('shadow');
        } else if(pos == 0) {
            var el = $('#messages').find('#message').first();
            $('#messages').prepend(
                '<div id="message">' +
                    '<div class="time pull-right">17:30:48</div>' +
                    '<div class="avatar pull-left">' +
                    '<img src="https://lh5.googleusercontent.com/-sUhzn4o5Wc4/AAAAAAAAAAI/AAAAAAAAFuI/3UlHj3ZH2NA/photo.jpg">' +
                    '</div>' +
                    '<div class="text pull-left">' +
                    'sdfsdfsdfdsdfsdfsdfdsdfsdfsdfdsdfsdfsdfdsdfsdfsdfdsdfsdfsdfdsdfsdfsdfdsdfsdfsdfdsdfsdfsdfdsdfsdfsdfdsdfsdfsdfdsdfsdfsdfdsdfsdfsdfdsdfsdfsdfd' +
                    '</div>' +
                    '<div class="clearfix"></div>' +
                    '</div>'
            );
            update(el);
        }
    });
    text_message.on('keypress', function(e) {
        if ((e.which == 13) && e.shiftKey) {} // перенос строки
        if (e.which == 13 && !e.shiftKey) { // отправка сообщения
            e.preventDefault();
            $('#messages').append(
                '<div id="message">' +
                    '<div class="time pull-right">17:30:48</div>' +
                    '<div class="avatar pull-left">' +
                    '<img src="https://lh5.googleusercontent.com/-sUhzn4o5Wc4/AAAAAAAAAAI/AAAAAAAAFuI/3UlHj3ZH2NA/photo.jpg">' +
                    '</div>' +
                    '<div class="text pull-left">' +
                    'sdfsdfsdfdsdfsdfsdfdsdfsdfsdfdsdfsdfsdfdsdfsdfsdfdsdfsdfsdfdsdfsdfsdfdsdfsdfsdfdsdfsdfsdfdsdfsdfsdfdsdfsdfsdfdsdfsdfsdfdsdfsdfsdfdsdfsdfsdfd' +
                    '</div>' +
                    '<div class="clearfix"></div>' +
                    '</div>'
            );
            update();
            return false;
        }
    });

    function update(position) {
        $('.slimScrollBar').remove();
        $('.slimScrollRail').remove();
        if (typeof position == 'undefined') {
            position = 'bottom';
        }
        $('#messages').unwrap().slimScroll({
            height: $("#messages").height(),
            railVisible: true,
            alwaysVisible: true,
            start: position
        });
    }

    text_message.placeholder();
});