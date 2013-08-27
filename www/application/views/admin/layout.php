<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="ru" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="ru" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="ru" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="ru" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title><?=$title?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?=$title?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?=HTML::style('css/bstrap.html5b.fawesome.min.css')?>
    <?=HTML::style('css/vendor/jquery.noty.css')?>
    <?=HTML::style('css/vendor/stylizationForm.css')?>
    <?=HTML::style('css/style.css')?>
    <?=HTML::style('css/popup.css')?>
    <?=HTML::script('http://yandex.st/jquery/1.10.2/jquery.min.js')?>
    <?=HTML::script('http://yandex.st/jquery-ui/1.10.3/jquery-ui.min.js')?>

    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


</head>
<body style="overflow:hidden">

<!-- @todo: оформить модалкой -->
<!--[if lt IE 7]>
<p class="browsehappy container well">Вы используете <strong>устаревший</strong> браузер. Пожалуйста <a href="http://browsehappy.com/">обновите его</a>.</p>
<![endif]-->

<?=$navbar.PHP_EOL?>
<div id="wrap">
    <div id="MainBlok_slimScroll">
        <?=$content.PHP_EOL?>
        <div id="push"></div>
    </div>
</div>
<?//=$footer.PHP_EOL?>


<?=HTML::script('js/vendor/bootstrap/bootstrap.min.js')?>
<?=HTML::script('js/vendor/jquery.slimscroll.min.js')?>
<?=HTML::script('js/vendor/stylizationForm.js')?>
<?=HTML::script('js/vendor/html5b/plugins.js')?>
<?=HTML::script('js/placeholder.js')?>
<?=HTML::script('js/vendor/jquery.noty.js')?>
<?=HTML::script('js/equalHeight.js')?>
<?=HTML::script('js/popup.js')?>

<script>

    $().ready(function() {


        $('#slimScroll').slimScroll({
            height: $("#slimScroll").height(),
            railVisible: true,
            alwaysVisible: true
        });

        var navbarH = $('.navbar').outerHeight(),
            footerH = $('#footer').outerHeight(),
            windowH = $(window).outerHeight();

        $('#MainBlok_slimScroll').slimScroll({
            height: windowH-navbarH-footerH,
            alwaysVisible: true
        });


        $(window).resize(function() {
            $('#MainBlok_slimScroll').css("height", windowH-navbarH-footerH+'px');
            $("#MainBlok_slimScroll").parent().css("height", windowH-navbarH-footerH+'px');
            //$(".slimScrollBar").css({ height: height + 'px' });
        });



        $("[rel='tooltip']").tooltip({
            delay : 400
        });

        $('#user_name').popupWin({
            edgeOffset : 49,
            delay : 400
        });

    });
</script>

</body>
</html>