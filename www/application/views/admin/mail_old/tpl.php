<?=HTML::style('css/admin/send.css')?>

<div class="container">
    <h1><small>Шаблоны сообщений</small></h1>
    <div class="tabbable"> <!-- Only required for left/right tabs -->
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab1" data-toggle="tab">Добавление</a></li>
            <li><a href="#tab2" data-toggle="tab">Редактирование</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab1">
                <div class="row" style="overflow: hidden">
                    <div class="span8">
                        <div class="well well-large" id="tplForm">
                            <form action="#" method="post">
                                <legend>Текст</legend>
                                <input style="width: 98%"  type="text" name="to" id="title" class="placeholder" placeholder="Название шаблона">
                                <!-- Редактор -->
                                <?=View::factory('admin/mail/editor')
                                    ->set('id_div_editor', 'editorTpl')
                                    ->set('script_load', false)
                                    ->render()?>

                                <div class="btn-block" style="margin-top: 10px">
                                    <button type="submit" id="add" class="btn btn-success" data-url="<?=URL::site('/send/tpl/add')?>">Сохранить</button>
                                    <button type="button" id="cancel" class="btn">Отмена</button>
                                    <a href="<?=URL::site('admin/mail')?>" rel="tooltip" title="Вернуться к сообщениям" class="btn pull-right">
                                        <i class="icon-reply"> </i>
                                        <i class="icon-envelope"></i>
                                    </a>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="well well-large" style="height: 473px"> <!--говнокод, надо чтобы оно было === span8-->
                            <legend>Зачем нужны шаблоны?</legend>
                            <p style="text-indent: 20px; text-align: justify">Это очень удобно в тех случаях, когда вам часто приходится набирать по нескольку
                            одинаковых или очень похожих писем. </p>
                            <p style="text-indent: 20px; text-align: justify">    Например, еженедельно рассылая рассылку своим ученикам Вы для каждой группы не придумываете индивидуальное сообщение, а пишите всегда что-то одно.
                            Именно для таких случаев и необходимы шаблоны.</p>
                            <p style="text-indent: 20px; text-align: justify">Вы просто загружаете свой сохраненный шаблон и отправляете
                                его всем, кому необходимо.</p>
                        </div>

                    </div>
                </div>
            </div> <!-- end tab1 -->

            <div class="tab-pane" id="tab2">
                <div class="row" style="overflow: hidden">
                    <div class="span8">
                        <div class="well well-large" id="tplForm">

                            <form action="#" method="post">
                                <legend>Текст</legend>
                                <input style="width: 98%"  type="text" name="to" id="titleTpl" placeholder="Название шаблона">

                                <!-- Редактор -->
                                <?=View::factory('admin/mail/editor')
                                        ->set('id_div_editor', 'editor')
                                        ->set('script_load', true)
                                        ->render()?>

                                <div class="btn-block" style="margin-top: 10px">
                                    <button type="submit" id="save" class="btn btn-success" data-url="<?=URL::site('send/tpl/edit')?>" disabled>Сохранить</button>
                                    <button type="button" id="reset" class="btn" disabled="">Отмена</button>
                                    <a href="<?=URL::site('admin/mail')?>" rel="tooltip" title="Вернуться к сообщениям" class="btn pull-right">
                                        <i class="icon-reply"> </i>
                                        <i class="icon-envelope"></i>
                                    </a>

                                </div>
                            </form>

                        </div> <!-- end .well -->
                    </div>  <!-- end .span8 -->

                    <div class="span4">
                        <div class="well well-large" id="listTpl">
                            <legend>Список созданных</legend>
                            <div class="checkboxes" style="height: 360px; overflow-y: auto">
                                <?foreach ($titles as $title): ?>
                                    <label class="radio" id="<?=$title->id?>">
                                        <input type="radio" name="radioTpl" value="<?=$title->id?>">
                                        <span><?=Security::xss_clean($title->title)?></span>
                                    </label>
                                <?endforeach;?>
                            </div>

                            <button type="button" class="btn" id="edit" rel="tooltip" title="Редактировать шаблон" data-url="<?=URL::site('send/tpl/select')?>"><i class="icon-edit"></i></button>
                            <button class="btn" id="remove" rel="tooltip" title="Удалить шаблон"><i class="icon-trash"></i></button>

                        </div>
                    </div> <!-- end .editUser -->
                </div>
            </div> <!-- end tab2 -->
        </div>
    </div>
</div>

<!--
    Модальное окно подтверждения удаления шаблона
-->
<div class="modal hide fade">
    <div class="modal-header">
        <h3>Удаление шаблона</h3>
    </div>
    <div class="modal-body">
        <p>Вы действительно хотите удалить шаблон сообщения?</p>
    </div>
    <div class="modal-footer">
        <a href="#" id="yes" class="btn btn-primary" data-url="<?=URL::site('send/tpl/remove')?>">Да</a>
        <a href="#" id="no" class="btn">Нет</a>
    </div>
</div>


<?=HTML::script('js/admin/tpl.js')?>
<script>
    $().ready(function() {
        equalHeight($('#tplForm'), $('#listTpl'));
        $('#btn-tpl').css({display:'none'});
        $('.placeholder').placeholder();
    });
</script>

