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
    <?=HTML::script('js/vendor/jquery.scrollTo-min.js')?>
    <?=HTML::script('js/vendor/stylizationForm.js')?>
    <?=HTML::script('js/placeholder.js')?>
    <?=HTML::script('js/vendor/bootstrap/bootstrap-formhelpers-phone.js')?>
    <?=HTML::script('js/vendor/jquery.flexslider-min.js')?>
    <?=HTML::script('js/vendor/js/jquery.maskedinput.min.js')?>
    <script>
        $(function() {

            $(window).load(function() {
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


            $('.nav').on('click', '#link', function(e) {
                e.preventDefault();
                var href = $(this).attr("href");
                if (href == currentState){
                    return false;
                }
                $('html, body').animate({
                    scrollTop: $('#'+href).offset().top -navbarH
                }, 300, function() {
                    location.hash = href;
                });
                //alert($(this).attr('href'));
            });

            /**
             * Подсказки в полях ввода
             */
            $('.placeholder').placeholder();

        });
    </script>

</head>
<body>

<?=$navbar.PHP_EOL?>
<?=$content.PHP_EOL?>

<?=$footer.PHP_EOL?>
</body>
</html>


