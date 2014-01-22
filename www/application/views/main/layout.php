<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="ru" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="ru" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="ru" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="ru" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title><?=$title?></title>

    <meta name="description" content="<?=$title?>">

    <?=HTML::style('css/bstrap.html5b.fawesome.min.css')?>
    <?=HTML::style('css/vendor/stylizationForm.css')?>
    <?=HTML::style('css/main/datepicker.css')?>
    <?=HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&subset=latin,cyrillic')?>
    <?=HTML::style('css/general/validation.css')?>
    <?=HTML::style('css/general/pageslide.css')?>
    <?=HTML::style('css/general/popup.css')?>
    <?=HTML::style('css/twitter.css')?>
    <?=HTML::style('css/main/main.css')?>

    <!--[if IE 9]>
        <?=HTML::style('css/ie.css')?>
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
    <?=HTML::script('js/general/placeholder.js')?>
    <?=HTML::script('js/main/validation.js')?>
    <?=HTML::script('js/general/general_fns.js')?>
    <?=HTML::script('js/general/popup.js')?>
    <?=HTML::script('js/general/notification.js')?>
    <?=HTML::script('js/main/jquery.pageslide.js')?>
    <?=HTML::script('js/general/ajaxSend.js')?>
    <?=HTML::script('js/general/nav.js')?>
    <?=HTML::script('js/main/main.js')?>

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


