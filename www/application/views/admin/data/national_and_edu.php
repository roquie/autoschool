<?=HTML::style('css/admin/nat_and_edu.css')?>
<div class="container">
    <div class="row">
        <div class="span12 pull-left">
            <h1><small>Гражданство и образование</small></h1>
            <!--<div class="span8 offset2">
                <p style="text-align: center">Эта страница необходима для добавления одноименных полей в БД, для последующего их вывода на странице заполнения заявления.</p>
            </div>-->
        </div>
    </div>

    <div class="row">
        <div class="span6">
            <div class="well">
                <h5 class="header_block">Гражданство</h5>
                <form  action="<?=URL::site('admin/national/create')?>" class="_admins_form" data-callback="add_nat_edu" method="post" accept-charset="utf-8" novalidate>
                    <label for="national_add">Добавить</label>
                    <input id="national_add" type="text" name="grajdanstvo"/>
                    <input type="hidden" class="csrf" name="csrf" value="<?=Security::token()?>"/>
                    <input type="submit" style="margin-top: -10px" class="btn" value="OK"/>
                </form>
                <table class="table table_admins" id="national" data-url="<?=URL::site('admin/national/delete/')?>">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Наименование</th>
                        <th>Удалить</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?$i=0;foreach($national as $v):?>
                        <tr id="<?=$v->id?>">
                            <td><?=++$i?></td>
                            <td><?=$v->grajdanstvo?></td>
                            <td><a data-url="<?=URL::site('admin/national/delete/'.$v->id)?>" style="display: table; margin: 0 auto; width: 27px; height: 18px" href="#t_delete" data-toggle="modal" class="badge badge-important delete"><i class="icon-remove"></i></a></td>
                        </tr>
                    <?endforeach?>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="span6">
            <div class="well">
                <h5 class="header_block">Образование</h5>
                <form action="<?=URL::site('admin/edu/create')?>" class="_admins_form" data-callback="add_nat_edu" method="post" accept-charset="utf-8" novalidate>
                    <label for="edu_add">Добавить</label>
                    <input id="edu_add" type="text" name="obrazovanie"/>
                    <input type="hidden" class="csrf" name="csrf" value="<?=Security::token()?>"/>
                    <input type="submit" style="margin-top: -10px" class="btn" value="OK"/>
                </form>
                <table class="table" id="edu" data-url="<?=URL::site('admin/edu/delete/')?>">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Наименование</th>
                        <th>Удалить</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?$i=0;foreach($edu as $v):?>
                        <tr id="<?=$v->id?>">
                            <td><?=++$i?></td>
                            <td><?=$v->obrazovanie?></td>
                            <td><a data-url="<?=URL::site('admin/edu/delete/'.$v->id)?>" style="display: table; margin: 0 auto; width: 27px; height: 18px" href="#t_delete" data-toggle="modal" class="badge badge-important delete"><i class="icon-remove"></i></a></td>
                        </tr>
                    <?endforeach?>

                    </tbody>
                </table>
            </div>
        </div>


    </div>
</div>

<?=View::factory('admin/html/modal_t_delete')?>

<script>
    $(function() {
        $('body').on('click', '.delete', function() {
            $('#delete').data('url', $(this).data('url'));
        });
    });
</script>