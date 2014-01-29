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
                <form  action="#" method="post" accept-charset="utf-8" novalidate>
                    <label for="national_add">Добавить</label>
                    <input id="national_add" type="text" name="add"/>
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
                    <?for($i=1; $i<=5; ++$i):?>
                        <tr>
                            <td><?=$i?></td>
                            <td>РФ</td>
                            <td><a style="display: table; margin: 0 auto" href="#" class="badge"><i class="icon-pencil"></i></a></td>
                            <td><a style="display: table; margin: 0 auto"  href="#" class="badge badge-important"><i class="icon-remove"></i></a></td>
                        </tr>
                    <?endfor?>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="span6">
            <div class="well">
                <h5 class="header_block">Образование</h5>
                <form  action="#" method="post" accept-charset="utf-8" novalidate>
                    <label for="national_add">Добавить</label>
                    <input id="national_add" type="text" name="add"/>
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
                    <?for($i=1; $i<=5; ++$i):?>
                        <tr>
                            <td><?=$i?></td>
                            <td>Высшее</td>
                            <td><a style="display: table; margin: 0 auto" href="#" class="badge"><i class="icon-pencil"></i></a></td>
                            <td><a style="display: table; margin: 0 auto"  href="#" class="badge badge-important"><i class="icon-remove"></i></a></td>
                        </tr>
                    <?endfor?>

                    </tbody>
                </table>
            </div>
        </div>
        <!--<input type="hidden" name="csrf" value="<?/*=Security::token()*/?>"/>-->


    </div>
</div>