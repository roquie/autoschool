<?=HTML::style('css/lk/lk.css')?>
<?=HTML::style('css/chat.css')?>
<?=HTML::script('js/lk/lk.js')?>
<?=HTML::script('js/vendor/moment+langs.min.js')?>
<?=HTML::style('css/vendor/bootstrap-editable.css')?>
<?=HTML::script('js/vendor/bootstrap-editable.min.js')?>
<?=HTML::style('css/lk/lk_statement.css')?>
<?=HTML::style('css/vendor/select2.css')?>
<?=HTML::script('js/vendor/select2.min.js')?>
<?
    $reg = Session::instance()->get('after_register');
    if (!is_null($reg)) :
        Session::instance()->delete('after_register');
?>
        <script>
            $(function() {
                $(window).on('load', function() {
                    $('.reg').show();
                    setTimeout(function() {
                        $('.reg').hide();
                    }, 5000);
                });
            });
        </script>
<? endif; ?>

<div class="container" style="margin-top: 110px;">


    <div class="row">
        <div class="span12 reg hide">
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <h4>Поздравляем!</h4>
                Вы были успешно зарегистрированы. На вашу почту отправлены данные для входа.
            </div>
        </div>
    </div>

    <div class="lk">
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
                            <h1><span id="userFamil"><?=$statement->famil?></span>&nbsp;<span id="userName"><?=$statement->imya?></span></h1>
                        </div>
                        <div class="span5">
                            <h1 class="group pull-right"
                                title="Группа">
                                <?= ($group === 0) ? 'Не определен (а)' : $group->name?>
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="span6 settings">
                            <i class="icon-envelope-alt"></i> <span id="userEmail"><?=$userEmail?></span>, <a href="<?=URL::site('lk/ajax/settings')?>" id="ajaxLink"><i class="icon-cog"></i> Настройки</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="span3 menu">
                <ul class="nav nav-pills nav-stacked" id="left_menu">
                    <li><a href="<?=URL::site('lk/ajax/messages')?>" id="ajaxLink"><i class="icon-comments"></i>Группа</a></li>
                    <li><a href="<?=URL::site('lk/ajax/statement')?>" id="ajaxLink"><i class="icon-file"></i>Заявление</a></li>
                    <li><a href="<?=URL::site('lk/ajax/contract')?>" id="ajaxLink"><i class="icon-file"></i>Договор</a></li>
                    <li><a href="<?=URL::site('lk/ajax/download')?>" id="ajaxLink"><i class="icon-cloud-download"></i>Загрузки</a></li>
                    <li><a href="<?=URL::site('chat/help')?>" id="ajaxLink">&nbsp;<i class="icon-info"></i>&nbsp;Помощь</a></li>
                </ul>
            </div>

            <div id="loader">
                <div class="title">Загрузка данных... Пожалуйста, подождите</div>
                <div class="loader"><i class="icon-refresh icon-spin icon-2x load"></i></div>
            </div>
            <div class="span9" id="content">
            </div>
        </div>
    </div>

</div>