<? if(isset($status) && isset($statement) && isset($contract)):?>

<h1>Статус слушателя</h1>

<div class="row-fluid">
    <div class="span4 status">
        <span>Данные введены верно</span>
        <? if ($status >= 1) : ?>
            <a href="#" class="btn btn-success btn-circle"><i class="icon-ok"></i></a>
        <? else : ?>
            <a href="#" data-callback="change_status" data-url="<?=URL::site('admin/mainpage/change_status/'.$user_id.'-1')?>" class="_admins_link btn btn-danger btn-circle"><i class="icon-remove"></i></a>
        <? endif; ?>
    </div>
    <div class="span4 status">
        <span>Все документы сданы</span>
        <? if ($status >= 2) : ?>
            <a href="#" class="btn btn-success btn-circle"><i class="icon-ok"></i></a>
        <? else : ?>
            <a href="#" data-callback="change_status" data-url="<?=URL::site('admin/mainpage/change_status/'.$user_id.'-2')?>" class="_admins_link btn btn-danger btn-circle"><i class="icon-remove"></i></a>
        <? endif; ?>
    </div>
    <div class="span4 status">
        <span>Зачислен в автошколу</span>
        <? if ($status == 3) : ?>
            <a href="#" class="btn btn-success btn-circle"><i class="icon-ok"></i></a>
        <? else : ?>
            <a href="#" data-id="<?=$user_id?>" data-callback="change_status" data-url="<?=URL::site('admin/mainpage/change_status/'.$user_id.'-3')?>" class="_admins_link btn btn-danger btn-circle laststatus"><i class="icon-remove"></i></a>
        <? endif; ?>
    </div>
</div>


<ul class="nav nav-tabs">
    <li class="active"><a href="#tab1" data-toggle="tab">Заявление</a></li>
    <li><a href="#tab2" data-toggle="tab" id="act" >Договор</a></li>
</ul>

<div class="tab-content">
    <div class="tab-pane active" id="tab1">

        <table class="table table-striped statement">
            <tbody>

            <tr>
                <td>Фамилия</td>
                <td><?=$statement->famil?></td>
            </tr>
            <tr>
                <td>Имя</td>
                <td><?=$statement->imya?></td>
            </tr>
            <tr>
                <td>Отчество</td>
                <td><?=$statement->ot4estvo?></td>
            </tr>
            <tr>
                <td>Дата рождения</td>
                <td><?=$statement->data_rojdeniya?></td>
            </tr>
            <tr>
                <td>Гражданство</td>
                <td><?=$statement->nationality_id?></td>
            </tr>
            <tr>
                <td>Место рождения</td>
                <td><?=$statement->mesto_rojdeniya?></td>
            </tr>
            <tr>
                <td>Адрес регистрации по паспорту</td>
                <td><?=$statement->adres_reg_po_pasporty?></td>
            </tr>
            <tr>
                <td>Временная регистрация</td>
                <td><?=$statement->vrem_reg?></td>
            </tr>
            <tr>
                <td>Паспорт серия</td>
                <td><?=$statement->pasport_seriya?></td>
            </tr>
            <tr>
                <td>Паспорт номер</td>
                <td><?=$statement->pasport_nomer?></td>
            </tr>
            <tr>
                <td>Дата выдачи паспорта</td>
                <td><?=$statement->pasport_data_vyda4i?></td>
            </tr>
            <tr>
                <td>Кем выдан паспорт</td>
                <td><?=$statement->pasport_kem_vydan?></td>
            </tr>
            <tr>
                <td>Мобильный телефон</td>
                <td><?=$statement->mob_tel?></td>
            </tr>
            <tr>
                <td>Домашний телефон</td>
                <td><?=$statement->dom_tel?></td>
            </tr>
            <tr>
                <td>Образование</td>
                <td><?=$statement->nationality_id?></td>
            </tr>
            <tr>
                <td>Место работы</td>
                <td><?=$statement->mesto_raboty?></td>
            </tr>


            </tbody>
        </table>

    </div>

    <div class="tab-pane" id="tab2">
        <table class="table table-striped contract">

            <tbody>

            <tr>
                <td>Фамилия</td>
                <td><?=$contract->famil?></td>
            </tr>
            <tr>
                <td>Имя</td>
                <td><?=$contract->imya?></td>
            </tr>
            <tr>
                <td>Отчество</td>
                <td><?=$contract->ot4estvo?></td>
            </tr>
            <tr>
                <td>Адрес регистрации по паспорту</td>
                <td><?=$contract->adres_reg_po_pasporty?></td>
            </tr>
            <tr>
                <td>Паспорт серия</td>
                <td><?=$contract->pasport_seriya?></td>
            </tr>
            <tr>
                <td>Паспорт номер</td>
                <td><?=$contract->pasport_nomer?></td>
            </tr>
            <tr>
                <td>Кем выдан паспорт</td>
                <td><?=$contract->pasport_kem_vydan?></td>
            </tr>
            <tr>
                <td>Мобильный телефон</td>
                <td><?=$contract->phone?></td>
            </tr>


            </tbody>
        </table>

    </div>
</div>

<?else:?>
    <p>Ошибка, данные не найдены. Обратитесь к администратору.</p>
<?endif?>