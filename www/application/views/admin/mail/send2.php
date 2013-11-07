<?=HTML::style('css/admin/send.css')?>
<?=HTML::style('media/css/style.css')?>
<?=HTML::script('media/js/jquery.knob.js')?>
<?=HTML::script('media/js/jquery.ui.widget.js')?>
<?=HTML::script('media/js/jquery.iframe-transport.js')?>
<?=HTML::script('media/js/jquery.fileupload.js')?>
<?=HTML::script('media/js/jquery.fileupload-process.js')?>
<?=HTML::script('media/js/jquery.fileupload-validate.js')?>
<?=HTML::script('js/admin/mail.js')?>
<script>
    $(function() {
        equalHeight($('#formSend'), $('#listStd'));
    });
</script>
<div class="container">
    <div class="span12">

        <h1><small>Рассылка писем</small></h1>
        <div class="row">

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
                        <!---->
                        <div id="uploadFiles">
                            <ul></ul>
                        </div>
                        <!--контейнер с кнопками Отправить и Очистить-->
                        <div style="margin-top: 10px">
                            <input type="submit" class="btn btn-success" value="Отправить">
                    </form>

                            <button type="button" id="reset" class="btn">Очистить</button>
                            <div class="pull-right">
                                <div class="btn-group dropup">
                                    <span class="btn" id="fileUpload">
                                        <i class="icon-upload-alt"></i>
                                        <input id="upload" type="file" name="upl" data-url="<?=URL::site('uploadifive')?>" multiple>
                                    </span>
                                    <!--<button  type="button" class="btn"></i></button>-->
                                    <a href="#upload_files" rel="tooltip" data-toggle="modal" data-url="<?=URL::site('admin/mail/getFiles')?>" title="Прикрепить файл к письму" id="attacheModal" class="btn"><i class="icon-file-alt"></i></a>
                                </div>
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


            <div class="span4">
                <div class="well" id="listStd">
                    <div class="container-fluid">
                        <legend>Список адресатов</legend>
                        <!--  rel='tooltip' title="Кликните для добавления адресата"  -->
                        <div id="slimScroll" class="checkboxes" style="height: 390px; overflow: hidden">
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
    <div class="modal-body"></div>
    <div class="modal-footer">
        <button data-dismiss="modal" aria-hidden="true" class="pull-left btn btn-primary">Готово</button>
    </div>
</div>
<!-- end Modal -->