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
    <?=HTML::style('css/vendor/stylizationForm.css')?>
    <?=HTML::style('css/admin/admin.css')?>
    <?=HTML::style('css/general/popup.css')?>
    <?=HTML::style('css/vendor/chosen.css')?>

    <?=HTML::script('http://yandex.st/jquery/1.10.2/jquery.min.js')?>
    <?=HTML::script('http://yandex.st/jquery-ui/1.10.3/jquery-ui.min.js')?>
    <?=HTML::script('js/vendor/bootstrap/bootstrap.min.js')?>
    <?=HTML::script('js/vendor/jquery.slimscroll.min.js')?>
    <?=HTML::script('js/vendor/stylizationForm.js')?>
    <?=HTML::script('js/vendor/html5b/plugins.js')?>
    <?=HTML::script('js/general/placeholder.js')?>
    <?=HTML::script('js/general/notification.js')?>
    <?=HTML::script('js/vendor/chosen.jquery.min.js')?>
    <?=HTML::script('js/general/popup.js')?>
    <?=HTML::script('js/general/general_fns.js')?>
    <?=HTML::script('js/general/ajaxSend.js')?>
    <?=HTML::script('js/vendor/phpjs/date.js')?>
    <?=HTML::script('js/admin/admin.js')?>

    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


</head>
<body>

<!-- @todo: оформить модалкой -->
<!--[if lt IE 7]>
<p class="browsehappy container well">Вы используете <strong>устаревший</strong> браузер. Пожалуйста <a href="http://browsehappy.com/">обновите его</a>.</p>
<![endif]-->

<div id="wrap">
        <?=$navbar.PHP_EOL?>
        <?=$content.PHP_EOL?>
</div>

</body>
</html>