/**
 * Developer: V. Melnikov
 * Date: 07.11.13
 * Time: 23:31
 */
$(function() {

    var scroll = 2,
        work = false;

    $('.hidemsg').on('click', function(e) {
        e.preventDefault();
        $('.write .togl').toggle('slow');
    });

    /**
     * Кнопка написать сообщение
     */
    $('.newmsg').on('click', function(e) {
        e.preventDefault();
        $('.write .togl').toggle('slow');
    });
    /**
     * Дозагрузка сообщений
     */
    $('.load').on('click', function(e) {
        e.preventDefault();
        var $this = $(this),
            action = $this.data('url');
        work = true;
        $.post(
            action,
            {
                data : {
                    offset : scroll,
                    csrf : $('.csrf').val()
                }
            },
            function(response) {
                work = false;
                if (response.status == 'error') {
                    noty({
                        type : response.status,
                        message : response.msg
                    });
                }
                if (response.status == 'empty') {
                    $this.remove();
                }
                if (response.status == 'success') {
                    $this.before(response.data);
                }
                $('.csrf').val(response.csrf);
            },
            'json'
        );
        scroll++;
    });


});