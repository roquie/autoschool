$(function() {

    first_load();

    $('#left_menu').on('click', 'li > a', function(e) {
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
        lin,
        obj = $('#loader');
    $('#content').html(obj.html()).load(action);
    nav.removeClass('active').find('a > i.icon-angle-right').remove();
    $this.parent().addClass('active').find('a').append(arrow);
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
            });
        if (location.hash != '') {
            url = location.hash.replace('#', '')
            $('#left_menu > li > a').each(function() {
                link = $(this).attr('href').split('/');
                if (link[link.length-1] === url) {
                    $(this).parent().addClass('active').find('a').append(arrow);
                    $('#content').html($('#loader').html()).load($(this).attr('href'));
                }
            });
        } else {
            var obj = $('#left_menu > li').eq(0);
            link = obj.find('a').attr('href');
            obj.addClass('active').find('a').append(arrow);
            $('#content').load(link);
        }
    }
});