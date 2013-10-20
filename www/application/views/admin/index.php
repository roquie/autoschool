<?=HTML::style('css/admin/settings.css')?>
<div class="container">
    <h1><small>Слушатели подавшие заявку</small></h1>
    <div class="row">
        <div class="span12">
            <div class="well">

                <table class="table" style="height: 350px; width: 550px">
                    <thead>
                    <tr>
                        <td style="">
                            <strong>#</strong>
                        </td>
                        <td>
                            <strong>ФИО</strong>
                        </td>
                        <td>
                            <strong>Дата</strong>
                        </td>
                        <td>
                            <strong>Зачислить</strong>
                        </td>
                        <td>
                            <strong>Удалить</strong>
                        </td>
                    </tr>
                    </thead>

                    <tbody style="height: 350px;">
                    <?for ($i = 0; $i <= 99; $i++):?>
                        <tr>
                            <td><?=$i?></td>

                            <td>
                                <?='Петров П.С.'.$i?>
                            </td>
                            <td>
                                <?=date('Y-m-d')?>
                            </td>
                            <td>
                                <i class="icon-plus icon-large"></i>
                            </td>
                            <td>
                                <i class="icon-trash icon-large"></i>
                            </td>
                        </tr>
                    <?endfor?>
                    </tbody>


                </table>
            </div>
        </div>
    </div>

</div>