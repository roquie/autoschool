$(function() {

    first_load();

    $('body').on('click', '#ajaxLink', function(e) {
        e.preventDefault();

        if ($(this).attr('ajax') === 'false') {
            return false;
        }

        var $this = $(this),
        action = $this.attr('href'),
        nav = $('#left_menu').find('li'),
        arrow = $('<i>', {
            class : 'icon-angle-right'
        }),
        link,
        obj = $('#loader');
        $('#content').html(obj.html()).load(action);
        if ($this.closest('#left_menu').length != 0) {
            nav.removeClass('active').find('a > i.icon-angle-right').remove();
            $this.parent().addClass('active').find('a').append(arrow);
        }
        link = action.split('/');
        location.hash = link[link.length-1];
    });

    $(window).on('load', function() {
        $('.menu').css({'margin-top' : $('.profile').find('img').height() - $('.back1').height() + 20});
    });

    function first_load() {
        var url,
            link,
            arrow = $('<i>', {
                class : 'icon-angle-right'
            }),
            isset = false;
        if (location.hash != '') {
            url = location.hash.replace('#', '');
            if (url === 'settings') {
                $('#content').html($('#loader').html()).load($('.settings').find('a#ajaxLink').attr('href'));
            } else {
                $('#left_menu > li > a').each(function() {
                    link = $(this).attr('href').split('/');
                    if (link[link.length-1] === url) {
                        $(this).parent().addClass('active').find('a').append(arrow);
                        $('#content').html($('#loader').html()).load($(this).attr('href'));
                    }
                });
            }
        } else {
            var obj = $('#left_menu > li').eq(0);
            link = obj.find('a').attr('href');
            obj.addClass('active').find('a').append(arrow);
            $('#content').load(link);
        }
    }
});