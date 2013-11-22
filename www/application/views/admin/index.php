<?=HTML::style('css/admin/index.css')?>
<?=HTML::script('js/admin/index.js')?>
<?
    $status = 2;
?>
<div class="container">
    <h1><small>Не зачисленные слушатели</small></h1>
    <div class="block">
        <div class="row-fluid">
            <div class="span3">
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

            <div class="span9 right-block"></div>
        </div>
    </div>

</div>