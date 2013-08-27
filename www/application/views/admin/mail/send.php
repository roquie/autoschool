<?=HTML::style('css/send.css')?>

<div class="container">
    <div class="span12">

        <h1><small>Рассылка писем</small></h1>
        <div class="row">

            <div class="span8">

                <div class="well" id="formSend">
                    <form action="#" method="post" id="send">
                        <legend>Сообщение</legend>
                        <!--контейнер с инпутами Кому, Тема-->

                        <input style="width: 98%"  type="text" name="to" id="to" class="placeholder" data-value="Кому"><br>
                        <input style="width: 98%" type="text" id="subject" class="placeholder" name="subject" data-value="Тема">

                        <!-- Редактор -->
                        <?=View::factory('admin/mail/editor')
                            ->set('id_div_editor', 'editor')
                            ->set('script_load', true)
                            ->render()?>

                        <!---->
                        <!--контейнер с кнопками Отправить и Очистить-->
                        <div style="margin-top: 10px">
                            <button type="submit" class="btn btn-success">Отправить</button>
                            <button type="button" id="reset" class="btn">Очистить</button>
                            <div class="pull-right">
                                <div class="btn-group dropup">

                                    <a href="#upload_files" role="button" rel="tooltip" title="Загрузить файл" class="btn" data-toggle="modal"><i class="icon-upload-alt"></i></a>

                                    <!--<button  type="button" class="btn"></i></button>-->
                                    <a href="#" rel="tooltip" title="Прикрепить файл к письму" class="btn"><i class="icon-file-alt"></i></a>
                                </div>
                                <div class="btn-group dropup">
                                    <a href="<?=URL::site('admin/tpl/')?>" class="btn">Шаблоны</a>
                                    <button class="btn dropdown-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" id="tpl" data-url="<?=URL::site('admin/send/tpl/select')?>">
                                        <?foreach ($titles as $title): ?>
                                            <li><a href="#" data-id="<?=$title->id?>"><?=Security::xss_clean($title->title)?></a></li>
                                        <?endforeach;?>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </form>

                </div>
            </div>


            <div class="span4">
                <div class="well" id="listStd">
                    <div class="container-fluid">
                        <legend>Список адресатов</legend>
                        <!--  rel='tooltip' title="Кликните для добавления адресата"  -->
                        <div id="slimScroll" class="checkboxes" style="height: 390px; overflow: hidden">
                            <? for($i = 0; $i <= 99; $i++):
                                if ($i % 2 === 0): ?>
                            <div class="check">
                                <?=$i?> Мельников В.И.
                                <input type="checkbox" value="vik.melnikov@gmail.com" />
                            </div>
                                    <?//else:?>
                            <div class="check">
                                 Иванов М.В.
                                <input type="checkbox" value="roquie0@gmail.com" />
                            </div>
                            <?endif?>
                            <?endfor?>
                        </div>
                        <div style="margin-top: 10px">
                            <button rel='tooltip' title="Добавить" class="btn"><i class="icon-plus"></i></button>
                            <button rel='tooltip' title="Редактировать" class="btn"><i class="icon-edit"></i></button>
                            <button rel='tooltip' title="Удалить" class="btn"><i class="icon-trash"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Modal -->
<div id="upload_files" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Загрузить файлы</h3>
    </div>
    <div class="modal-body">
        <?Uploader::factory()->getUploadForm()?>
    </div>
    <div class="modal-footer">
        <!--<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>-->
        <button data-dismiss="modal" aria-hidden="true" class="pull-left btn btn-primary">Готово</button>
    </div>
</div>
<!-- end Modal -->


<?=HTML::script('js/mail.js')?>
<script>
    $().ready(function() {
        equalHeight($('#formSend'), $('#listStd'));
        $('.placeholder').placeholder();
    });
</script>