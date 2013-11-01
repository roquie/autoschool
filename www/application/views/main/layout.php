<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="ru" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="ru" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="ru" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="ru" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title><?=$title?></title>

    <meta name="description" content="<?=$title?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?=HTML::style('css/bstrap.html5b.fawesome.min.css')?>
    <?=HTML::style('css/vendor/stylizationForm.css')?>
    <?=HTML::style('css/datepicker.css')?>
    <?=HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&subset=latin,cyrillic')?>
    <?=HTML::style('css/validation.css')?>
    <?=HTML::style('css/pageslide.css')?>
    <?=HTML::style('css/popup.css')?>
    <?=HTML::style('css/twitter.css')?>
    <?=HTML::style('css/main.css')?>

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
    <?=HTML::script('js/validation.js')?>
    <?=HTML::script('js/general_fns.js')?>
    <?=HTML::script('js/popup.js')?>
    <?=HTML::script('js/notification.js')?>
    <?=HTML::script('js/jquery.pageslide.js')?>
    <?=HTML::script('js/ajax.js')?>
    <?=HTML::script('js/main.js')?>
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


