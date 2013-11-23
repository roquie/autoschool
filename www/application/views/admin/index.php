<?=HTML::style('css/admin/index.css')?>
<?=HTML::script('js/admin/index.js')?>
<?=HTML::script('js/vendor/moment+langs.min.js')?>
<?=HTML::style('css/vendor/bootstrap-editable.css')?>
<?=HTML::script('js/vendor/bootstrap-editable.min.js')?>
<?=HTML::style('css/lk/lk_statement.css')?>
<?=HTML::style('css/vendor/select2.css')?>
<?=HTML::script('js/vendor/select2.min.js')?>
<?
    $status = 2;
?>
<div class="container">
    <h1><small>Не зачисленные слушатели</small></h1>
    <div class="block">
        <div class="row-fluid">
            <div class="span3 <?=empty($audience) ? 'hide' : null?>">
                <table class="table listener table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Фамилия И.О.</th>
                        </tr>
                    </thead>
                    <tbody id="slimScroll">
                        <?
                            $i = 0;
                            foreach ($audience as $k => $listener) :
                        ?>
                            <tr id="<?=$k?>" class="_listener_link" data-callback="get_user" data-url="<?=URL::site('admin/mainpage/user_data/'.$k)?>">
                                <td><?=++$i?></td>
                                <td><?=$listener?></td>
                            </tr>
                        <? endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div id="loader" class="hide">
                <div class="title">Загрузка данных... Пожалуйста, подождите</div>
                <div class="loader"><i class="icon-refresh icon-spin icon-large load"></i></div>
            </div>

            <div class="span9 right-block  <?=empty($audience) ? 'hide' : null?>"></div>

            <div class="span12 empty <?=!empty($audience) ? 'hide' : null?>">
                <div class="nolistener">
                    <h1>Новых слушателей нет. Все слушатели распределены по группам.</h1>
                </div>
            </div>
        </div>
    </div>

</div>