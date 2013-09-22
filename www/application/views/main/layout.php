<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title><?=$title?></title>
    <?//=$less?>
    <?=HTML::style('css/bstrap.html5b.fawesome.min.css')?>
    <?=HTML::style('css/vendor/stylizationForm.css')?>
    <?=HTML::style('css/style.css')?>
    <?=HTML::style('css/main.css')?>
    <?=HTML::style('css/datepicker.css')?>
    <?=HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&subset=latin,cyrillic')?>
    <?=HTML::style('css/vendor/flexslider.css')?>
    <?=HTML::style('css/validation.css')?>
    <?=HTML::style('css/pageslide.css')?>
    <?=HTML::style('media-twitter/css/twitter.css')?>

    <!--[if IE 9]>
        <link rel="stylesheet" href="css/ie.css"/>
    <![endif]-->

    <!-- css3-mediaqueries.js for IE less than 9 -->
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    <?=HTML::script('http://yandex.st/jquery/1.10.2/jquery.min.js')?>
    <?=HTML::script('http://yandex.st/jquery-ui/1.10.3/jquery-ui.min.js')?>
    <?=HTML::script('js/vendor/bootstrap/bootstrap.min.js')?>
    <?=HTML::script('js/vendor/jquery.slimscroll.min.js')?>
    <?=HTML::script('js/vendor/stylizationForm.js')?>
    <?=HTML::script('js/placeholder.js')?>
    <?=HTML::script('js/vendor/bootstrap/bootstrap-formhelpers-phone.js')?>
    <?=HTML::script('js/vendor/jquery.flexslider-min.js')?>
    <?=HTML::script('js/vendor/jquery.maskedinput.min.js')?>
    <?=HTML::script('js/validation.js')?>
    <?=HTML::script('js/general_fns.js')?>
    <?=HTML::script('js/notification.js')?>
    <?=HTML::script('js/jquery.pageslide.js')?>

    <script>
        var cnt_click = 0; // кол-во обновлений новостей за 1 раз
        $(function(){
            $(window).load(function() {
                first_load();
                $('.flexslider').flexslider({
                    animation: "slide"
                });
            });

            $('#slimScroll').slimScroll({
                height: $("#slimScroll").height(),
                railVisible: true,
                alwaysVisible: true
            });

            var navbarH = $('.navbar').outerHeight(),
                footerH = $('#footer').outerHeight(),
                currentState = '';


            $('#MainBlok_slimScroll').slimScroll({
                height: $(window).height()-navbarH-footerH,
                alwaysVisible: true
            });


            $(window).resize(function() {
                $('#MainBlok_slimScroll').css("height", $(window).height()-navbarH-footerH+'px');
                $("#MainBlok_slimScroll").parent().css("height", $(window).height()-navbarH-footerH+'px');
                //$(".slimScrollBar").css({ height: height + 'px' });
            });

            $("[rel='tooltip']").tooltip();

            /**
             * Сдвиг контента, выдвигающаяся панель сбоку
             */
            $("#slide-left").pageSlide({
                width : '260px'
            });

            $('#slide-left').on('click', function(e) {
                e.preventDefault();
                if (!$(this).data('load')) {
                    var action = $(this).data('url');
                    $('#pageslide-content').load(action);
                    $(this).data('load', true);
                }
            });

            /**
             * Обновление новостей
             */
            $('body').on('click', '#update-slide', function(e) {
                var action = $('#slide-left').data('url'),
                    obj = $('#slide-left').attr('href');
                if (cnt_click < 5) {
                    $('#pageslide-content').html($(obj).html()).load(action);
                    $('#slide-left').data('load', true);
                    cnt_click++;
                }
                return false;
            });
            /**
             * Кнопка закрыть боковую панель новостей
             */
            $('body').on('click', '#close-slide', function(e) {
                $("#slide-left").pageSlide('close');
                return false;
            });
        });
        function first_load() {
            if (location.hash != '') {
                var url = location.hash.replace('#', '');
                $('body,html').delay(100).animate({
                    scrollTop: $('section[target="'+url+'"]').offset().top
                }, 500);
            }
        }
    </script>
</head>
<body>
<?=$navbar.PHP_EOL?>

<div id="wrap">
    <?=$content.PHP_EOL?>
    <div id="push"></div>
</div>

<?=$footer.PHP_EOL?>
</body>
</html>


