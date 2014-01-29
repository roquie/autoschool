<div class="container">
    <div class="row">
        <div class="span5 pull-left">
            <h1><small>Список всех преподавателей</small></h1>
        </div>
        <div class="span7" style="margin-top: 20px">
            <div class="pull-right">
                <div class="btn-group">
                    <a href="<?=URL::site('/admin/teachers/pdf')?>" target="_blank" rel="tooltip" data-placement="bottom" title="Распечатать список преподавателей" class="btn"><i class="icon-print"></i></a>
                    <a href="<?=URL::site('/download/teachers/name')?>" rel="tooltip" data-placement="bottom" title="Загрузить список преподавателей" class="btn btn-success"><i class="icon-download"></i></a>
                    <a href="#" rel="tooltip" data-placement="bottom" title="Открыть список преподавателей" class="btn btn-info"><i class="icon-eye-open"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!--<input type="hidden" name="csrf" value="<?/*=Security::token()*/?>"/>-->
        <div class="span12">
            <div class="well">
                <h5 class="header_block">Вся информация</h5>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 20px">#</th>
                        <th style="width: 120px">Фамилия И.О.</th>
                        <th style="width: 120px">Телефон</th>
                        <th style="width: 240px">Адрес</th>
                        <th>Данные</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?for($i=1; $i<=10; ++$i):?>
                    <tr>
                        <td><?=$i?></td>
                        <td>Петров Г.А.</td>
                        <td>+7(926)987-88-07</td>
                        <td>г. Москва, ул. Малайка, д.5, корп.1</td>
                        <td>аллыалыл жылжаылжв д</td>
                    </tr>
                    <?endfor?>

                    </tbody>
                </table>
            </div>
        </div>


    </div>
</div>