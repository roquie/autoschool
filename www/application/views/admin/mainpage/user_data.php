<? if(isset($status) && isset($statement) && isset($contract)):?>

<h1>Статус слушателя</h1>

<div class="row-fluid statuses">
    <div class="span4 status">
        <span>Данные введены верно</span>
        <? if ($status >= 1) : ?>
            <a href="#" data-id="<?=$user_id?>" data-callback="change_status" data-url="<?=URL::site('admin/mainpage/change_status/'.$user_id.'-0')?>" class="_admins_link btn btn-success btn-circle"><i class="icon-ok"></i></a>
        <? else : ?>
            <a href="#" data-id="<?=$user_id?>" data-callback="change_status" data-url="<?=URL::site('admin/mainpage/change_status/'.$user_id.'-1')?>" class="_admins_link btn btn-danger btn-circle"><i class="icon-remove"></i></a>
        <? endif; ?>
    </div>
    <div class="span4 status">
        <span>Все документы сданы</span>
        <? if ($status >= 2) : ?>
            <a href="#" data-id="<?=$user_id?>" data-callback="change_status" data-url="<?=URL::site('admin/mainpage/change_status/'.$user_id.'-1')?>" class="_admins_link btn btn-success btn-circle"><i class="icon-ok"></i></a>
        <? else : ?>
            <a href="#" data-id="<?=$user_id?>" data-callback="change_status" data-url="<?=URL::site('admin/mainpage/change_status/'.$user_id.'-2')?>" class="_admins_link btn btn-danger btn-circle"><i class="icon-remove"></i></a>
        <? endif; ?>
    </div>
    <div class="span4 status">
        <span>Зачислен в автошколу</span>
        <? if ($status == 3) : ?>
            <a href="#" onclick="return false;" class="btn btn-success btn-circle"><i class="icon-ok"></i></a>
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

        <button id="enableSt" class="enb_dis btn btn-info"><i class="icon-pencil"></i> Режим редактирования</button>
        <button id="disableSt" class="enb_dis btn btn-info" style="display: none"><i class="icon-eye-open"></i> Режим просмотра</button>

        <table class="table table-striped statement">
            <tbody>
            <tr>
                <td>Фамилия</td>
                <td><a href="#" data-name="famil" data-url="<?=URL::site('lk/ajax/changeStatement/'.$user_id)?>" data-type="text" data-pk=""><?=$statement->famil?></a></td>
            </tr>
            <tr>
                <td>Имя</td>
                <td><a href="#" data-name="imya" data-url="<?=URL::site('lk/ajax/changeStatement/'.$user_id)?>" data-type="text" data-pk=""><?=$statement->imya?></a></td>
            </tr>
            <tr>
                <td>Отчество</td>
                <td><a href="#" data-name="ot4estvo" data-url="<?=URL::site('lk/ajax/changeStatement/'.$user_id)?>" data-type="text" data-pk=""><?=$statement->ot4estvo?></a></td>
            </tr>
            <tr>
                <td>Дата рождения</td>
                <td><a href="#" class="data_rojdeniya" data-name="data_rojdeniya" data-url="<?=URL::site('lk/ajax/changeStatement/'.$user_id)?>" data-type="combodate" data-pk=""><?=$statement->data_rojdeniya?></a></td>
            </tr>
            <tr>
                <td>Гражданство</td>
                <td><a href="#" id="grajdanstvo" data-url="<?=URL::site('lk/ajax/changeStatement/'.$user_id)?>" data-action="<?=URL::site('lk/ajax/getNat')?>" data-type="select2" data-pk="1" data-name="nationality_id" data-value="<?=$statement->nationality_id?>"></a></td>
            </tr>
            <tr>
                <td>Место рождения</td>
                <td><a href="#" data-name="mesto_rojdeniya" data-url="<?=URL::site('lk/ajax/changeStatement/'.$user_id)?>" data-type="text" data-pk=""><?=$statement->mesto_rojdeniya?></a></td>
            </tr>
            <tr>
                <td>Адрес регистрации по паспорту</td>
                <td><a href="#" data-name="adres_reg_po_pasporty" data-url="<?=URL::site('lk/ajax/changeStatement/'.$user_id)?>" data-type="text" data-pk=""><?=$statement->adres_reg_po_pasporty?></a></td>
            </tr>
            <tr>
                <td>Временная регистрация</td>
                <td><a href="#" data-type="text" data-url="<?=URL::site('lk/ajax/changeStatement/'.$user_id)?>" data-name="vrem_reg" data-pk=""><?=$statement->vrem_reg?></a></td>
            </tr>
            <tr>
                <td>Паспорт серия</td>
                <td><a href="#" data-name="pasport_seriya" data-url="<?=URL::site('lk/ajax/changeStatement/'.$user_id)?>" data-type="text" data-pk=""><?=$statement->pasport_seriya?></a></td>
            </tr>
            <tr>
                <td>Паспорт номер</td>
                <td><a href="#" data-name="pasport_nome" data-url="<?=URL::site('lk/ajax/changeStatement/'.$user_id)?>" data-type="text" data-pk=""><?=$statement->pasport_nomer?></a></td>
            </tr>
            <tr>
                <td>Дата выдачи паспорта</td>
                <td><a href="#" class="pasport_data_vyda4i" data-name="pasport_data_vyda4i" data-url="<?=URL::site('lk/ajax/changeStatement/'.$user_id)?>" data-type="combodate" data-pk=""><?=$statement->pasport_data_vyda4i?></a></td>
            </tr>
            <tr>
                <td>Кем выдан паспорт</td>
                <td><a href="#" data-name="pasport_kem_vydan" data-url="<?=URL::site('lk/ajax/changeStatement/'.$user_id)?>" data-type="text" data-pk=""><?=$statement->pasport_kem_vydan?></a></td>
            </tr>
            <tr>
                <td>Мобильный телефон</td>
                <td><a href="#" data-name="mob_tel" data-url="<?=URL::site('lk/ajax/changeStatement/'.$user_id)?>" data-type="text" data-pk=""><?=$statement->mob_tel?></a></td>
            </tr>
            <tr>
                <td>Домашний телефон</td>
                <td><a href="#" data-name="dom_tel" data-url="<?=URL::site('lk/ajax/changeStatement/'.$user_id)?>" data-type="text" data-pk=""><?=$statement->dom_tel?></a></td>
            </tr>
            <tr>
                <td>Образование</td>
                <td><a href="#" id="education" data-url="<?=URL::site('lk/ajax/changeStatement/'.$user_id)?>" data-action="<?=URL::site('lk/ajax/getEdu')?>" data-type="select2" data-pk="1" data-name="education_id" data-value="<?=$statement->nationality_id?>"></a></td>
            </tr>
            <tr>
                <td>Место работы</td>
                <td><a href="#" data-name="mesto_raboty" data-url="<?=URL::site('lk/ajax/changeStatement/'.$user_id)?>" data-type="text" data-pk=""><?=$statement->mesto_raboty?></a></td>
            </tr>

            </tbody>
        </table>

    </div>

    <div class="tab-pane" id="tab2">

        <button id="enableCn" class="enb_dis btn btn-info"><i class="icon-pencil"></i> Режим редактирования</button>
        <button id="disableCn" class="enb_dis btn btn-info" style="display: none"><i class="icon-eye-open"></i> Режим просмотра</button>

        <table class="table table-striped contract">

            <tbody>

            <tr>
                <td>Фамилия</td>
                <td><a href="#" data-url="<?=URL::site('lk/ajax/changeContract/'.$user_id)?>" data-name="famil" data-type="text" data-pk=""><?=$contract->famil?></a></td>
            </tr>
            <tr>
                <td>Имя</td>
                <td><a href="#" data-url="<?=URL::site('lk/ajax/changeContract/'.$user_id)?>" data-name="imya" data-type="text" data-pk=""><?=$contract->imya?></a></td>
            </tr>
            <tr>
                <td>Отчество</td>
                <td><a href="#" data-url="<?=URL::site('lk/ajax/changeContract/'.$user_id)?>" -name="ot4estvo" data-type="text" data-pk=""><?=$contract->ot4estvo?></a></td>
            </tr>
            <tr>
                <td>Адрес регистрации по паспорту</td>
                <td><a href="#" data-url="<?=URL::site('lk/ajax/changeContract/'.$user_id)?>" data-name="adres_reg_po_pasporty" data-type="text" data-pk=""><?=$contract->adres_reg_po_pasporty?></a></td>
            </tr>
            <tr>
                <td>Паспорт серия</td>
                <td><a href="#" data-url="<?=URL::site('lk/ajax/changeContract/'.$user_id)?>" data-name="pasport_seriya" data-type="text" data-pk=""><?=$contract->pasport_seriya?></a></td>
            </tr>
            <tr>
                <td>Паспорт номер</td>
                <td><a href="#" data-url="<?=URL::site('lk/ajax/changeContract/'.$user_id)?>" data-name="pasport_nome" data-type="text" data-pk=""><?=$contract->pasport_nomer?></a></td>
            </tr>
            <tr>
                <td>Кем выдан паспорт</td>
                <td><a href="#" data-url="<?=URL::site('lk/ajax/changeContract/'.$user_id)?>" data-name="pasport_kem_vydan" data-type="text" data-pk=""><?=$contract->pasport_kem_vydan?></a></td>
            </tr>
            <tr>
                <td>Мобильный телефон</td>
                <td><a href="#" data-url="<?=URL::site('lk/ajax/changeContract/'.$user_id)?>" data-name="phone" data-type="text" data-pk=""><?=$contract->phone?></a></td>
            </tr>

            </tbody>
        </table>

    </div>
</div>

<? else:?>
    <p>Ошибка, данные не найдены. Обратитесь к администратору.</p>
<?endif?>

<?=HTML::script('js/admin/editable.js')?>