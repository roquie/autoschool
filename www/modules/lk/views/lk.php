<?=HTML::style('css/lk.css')?>
<?=HTML::script('js/lk.js')?>
<?
    $reg = Session::instance()->get('after_register');
    if (!is_null($reg)) :
        Session::instance()->delete('after_register');
?>
        <script>
            $(function() {
                $(window).on('load', function() {
                    alert('Вы были успешно зарегистрированы. На вашу почту отправлены данные для входа.');
                });
            });
        </script>
<? endif; ?>
<div class="container lk">
    <div class="row">
        <div class="imgprofile">
            <div class="profile">
                <?=HTML::image($userPhoto, array('width' => '180px', 'height' => '180px'))?>
            </div>
        </div>

        <div class="span12 back1">
            <div class="span9 pull-right">
                <div class="row">
                    <div class="span4">
                        <h1><?=$statement['famil'].' '.$statement['imya']?></h1>
                    </div>
                    <div class="span5">
                        <h1 class="group pull-right" title="твоя группа" >01431</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="span4 settings">
                        <i class="icon-envelope-alt"></i> <?=$userEmail?>, <a href="<?=URL::site('#')?>"><i class="icon-cog"></i> Настройки</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="span3 menu">
            <ul class="nav nav-pills nav-stacked" id="left_menu">
                <li><a href="<?=URL::site('lk/ajax/messages')?>"><i class="icon-comments"></i>Сообщения</a></li>
                <li><a href="<?=URL::site('lk/ajax/statement')?>"><i class="icon-file"></i>Заявление</a></li>
                <li><a href="<?=URL::site('lk/ajax/contract')?>"><i class="icon-file"></i>Договор</a></li>
                <li><a href="<?=URL::site('lk/ajax/download')?>"><i class="icon-cloud-download"></i>Загрузки</a></li>
            </ul>
        </div>
        <div class="span9" id="content"></div>
    </div>
</div>