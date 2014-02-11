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
                <form  action="<?=URL::site('admin/national/create')?>" method="post" accept-charset="utf-8" novalidate>
                    <label for="national_add">Добавить</label>
                    <input id="national_add" type="text" name="data[grajdanstvo]"/>
                    <input type="hidden" name="csrf" value="<?=Security::token()?>"/>
                    <input type="submit" style="margin-top: -10px" class="btn" value="OK"/>
                </form>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 20px">#</th>
                        <th style="width: 120px">Наименование</th>
                        <th style="width: 50px">Редакт.</th>
                        <th style="width: 50px">Удал.</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?$i=0;foreach($national as $v):?>
                        <tr>
                            <td><?=++$i?></td>
                            <td><?=$v->grajdanstvo?></td>
                            <td><a data-url="<?=URL::site('admin/national/edit/'.$v->id)?>" style="display: table; margin: 0 auto" href="#" class="badge"><i class="icon-pencil"></i></a></td>
                            <td><a data-url="<?=URL::site('admin/national/delete/'.$v->id)?>" style="display: table; margin: 0 auto"  href="#" class="badge badge-important"><i class="icon-remove"></i></a></td>
                        </tr>
                    <?endforeach?>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="span6">
            <div class="well">
                <h5 class="header_block">Образование</h5>
                <form action="<?=URL::site('admin/edu/create')?>" method="post" accept-charset="utf-8" novalidate>
                    <label for="national_add">Добавить</label>
                    <input id="national_add" type="text" name="data[obrazovanie]"/>
                    <input type="hidden" name="csrf" value="<?=Security::token()?>"/>
                    <input type="submit" style="margin-top: -10px" class="btn" value="OK"/>
                </form>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 20px">#</th>
                        <th style="width: 120px">Наименование</th>
                        <th style="width: 50px">Редакт.</th>
                        <th style="width: 50px">Удал.</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?$i=0;foreach($edu as $v):?>
                        <tr>
                            <td><?=++$i?></td>
                            <td><?=$v->obrazovanie?></td>
                            <td><a data-url="<?=URL::site('admin/edu/edit/'.$v->id)?>" style="display: table; margin: 0 auto" href="#" class="badge"><i class="icon-pencil"></i></a></td>
                            <td><a data-url="<?=URL::site('admin/edu/delete/'.$v->id)?>" style="display: table; margin: 0 auto"  href="#" class="badge badge-important"><i class="icon-remove"></i></a></td>
                        </tr>
                    <?endforeach?>

                    </tbody>
                </table>
            </div>
        </div>
        <!--<input type="hidden" name="csrf" value="<?/*=Security::token()*/?>"/>-->


    </div>
</div>