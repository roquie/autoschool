<?=HTML::style('css/admin/sendmsg.css')?>
<?=HTML::style('media/css/style.css')?>
<?=HTML::style('css/vendor/chosen.css')?>
<?=HTML::script('media/js/jquery.ui.widget.js')?>
<?=HTML::script('js/mail.js')?>
<?=HTML::script('js/vendor/chosen.jquery.min.js')?>
<?//=HTML::script('js/equalHeight.js')?>

<script>
    $(function() {

        //equalHeight($('#formSend'), $('#listStd'));

        $('#grajdanstvo').chosen({
            no_results_text: "Ничего не найдено"
        });


    });

</script>
<div class="container">
    <div class="span12">

        <h1><small>Рассылка писем</small></h1>
        <div class="row">
            <!--
                короче мы все обсудили
            -->
            <div class="span4" style="height: 450px">
                <div class="well" id="listStd">
                    <div class="container-fluid">
                        <legend>Список адресатов</legend>
                        <!--  rel='tooltip' title="Кликните для добавления адресата"  -->
                        <div class="check emails">
                            Чат со слушателем
                            <input type="checkbox" value="vik.melnikov@gmail.com" />
                        </div>
                        <p style="margin: 10px 0 0 0">Выберите группу</p>
                        <select id="grajdanstvo" name="statement[nationality_id]" style="width: 219px" data-req="true">
                            <?for($i = 0; $i <= 40; $i++):?>
                                <option>Группа - <?=$i?></option>
                            <?endfor?>
                        </select>
                        <p style="margin: 0">тут та штука с поиском</p>
                        <div id="slimScroll" class="checkboxes" style="height: 341px; overflow: hidden">
                            <? for($i = 0; $i <= 99; $i++):
                                if ($i % 2 === 0): ?>
                                    <div class="check emails">
                                        <?=$i?> Мельников В.И.
                                        <input type="checkbox" value="vik.melnikov@gmail.com" />
                                    </div>
                                    <?//else:?>
                                    <div class="check emails">
                                        Иванов М.В.
                                        <input type="checkbox" value="roquie0@gmail.com" />
                                    </div>
                                <?endif?>
                            <?endfor?>
                        </div>

                    </div>
                </div>
            </div>

            <div class="span8">

                <div class="well" id="formSend">
                    <form action="<?=URL::site('admin/mail/send_mail')?>" method="post" id="send">
                        <legend>Сообщение</legend>
                        <!--контейнер с инпутами Кому, Тема-->
                        <div>
                            <input style="width: 98%"  type="text" name="to" id="to" data-req="true" data-error="Заполните поле Кому" data-value="Кому" >
                        </div>
                        <div>
                            <input style="width: 98%" type="text" id="subject" name="subject" data-req="true" data-error="Заполните поле Тема" data-value="Тема" >
                        </div>
                        <!-- Редактор -->
                        <?=View::factory('admin/mail/editor')
                            ->set('id_div_editor', 'editor')
                            ->set('script_load', true)
                            ->render()?>

                        <div style="margin-top: 10px">
                            <input type="submit" class="btn btn-success" value="Отправить">
                    </form>

                            <button type="button" id="reset" class="btn">Очистить</button>
                            <div class="pull-right">
                                <div class="btn-group dropup">
                                    <a href="<?=URL::site('admin/tpl/')?>" class="btn">Шаблоны</a>
                                    <button class="btn dropdown-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" id="tpl" data-url="<?=URL::site('admin/admin/tpl/select')?>">
                                        <?foreach ($titles as $title): ?>
                                            <li><a href="#" data-id="<?=$title->id?>"><?=Security::xss_clean($title->title)?></a></li>
                                        <?endforeach;?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                </div>
            </div>


        </div>

    </div>
</div>

