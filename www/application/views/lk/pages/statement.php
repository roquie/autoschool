<?=($status < 3) ? View::factory('lk/pages/html/button')->render() : null?>

<div class="row data" data-url="<?=URL::site('lk/ajax/changeStatement')?>" >

    <div class="span8">
        <table class="table table-hover">
            <? if($info): ?>
                <tbody>

                <tr>
                    <td>Фамилия</td>
                    <td><a href="#" data-name="famil" data-type="text" data-pk=""><?=$info->famil?></a></td>
                </tr>
                <tr>
                    <td>Имя</td>
                    <td><a href="#" data-name="imya" data-type="text" data-pk=""><?=$info->imya?></a></td>
                </tr>
                <tr>
                    <td>Отчество</td>
                    <td><a href="#" data-name="ot4estvo" data-type="text" data-pk=""><?=$info->ot4estvo?></a></td>
                </tr>
                <tr>
                    <td>Дата рождения</td>
                    <td><a href="#" class="data_rojdeniya" data-name="data_rojdeniya" data-type="combodate" data-pk=""><?=$info->data_rojdeniya?></a></td>
                </tr>
                <tr>
                    <td>Гражданство</td>
                    <td><a href="#" id="grajdanstvo" data-action="<?=URL::site('lk/ajax/getNat')?>" data-type="select2" data-pk="1" data-name="nationality_id" data-value="<?=$info->nationality_id?>"></a></td>
                </tr>
                <tr>
                    <td>Место рождения</td>
                    <td><a href="#" data-name="mesto_rojdeniya" data-type="text" data-pk=""><?=$info->mesto_rojdeniya?></a></td>
                </tr>
                <tr>
                    <td>Адрес регистрации по паспорту</td>
                    <td><a href="#" data-name="adres_reg_po_pasporty" data-type="text" data-pk=""><?=$info->adres_reg_po_pasporty?></a></td>
                </tr>
                <tr>
                    <td>Временная регистрация</td>
                    <td><a href="#" data-type="text" data-name="vrem_reg" data-pk=""><?=$info->vrem_reg?></a></td>
                </tr>
                <tr>
                    <td>Паспорт серия</td>
                    <td><a href="#" data-name="pasport_seriya" data-type="text" data-pk=""><?=$info->pasport_seriya?></a></td>
                </tr>
                <tr>
                    <td>Паспорт номер</td>
                    <td><a href="#" data-name="pasport_nome" data-type="text" data-pk=""><?=$info->pasport_nomer?></a></td>
                </tr>
                <tr>
                    <td>Дата выдачи паспорта</td>
                    <td><a href="#" class="pasport_data_vyda4i" data-name="pasport_data_vyda4i" data-type="combodate" data-pk=""><?=$info->pasport_data_vyda4i?></a></td>
                </tr>
                <tr>
                    <td>Кем выдан паспорт</td>
                    <td><a href="#" data-name="pasport_kem_vydan" data-type="text" data-pk=""><?=$info->pasport_kem_vydan?></a></td>
                </tr>
                <tr>
                    <td>Мобильный телефон</td>
                    <td><a href="#" data-name="mob_tel" data-type="text" data-pk=""><?=$info->mob_tel?></a></td>
                </tr>
                <tr>
                    <td>Домашний телефон</td>
                    <td><a href="#" data-name="dom_tel" data-type="text" data-pk=""><?=$info->dom_tel?></a></td>
                </tr>
                <tr>
                    <td>Образование</td>
                    <td><a href="#" id="education" data-action="<?=URL::site('lk/ajax/getEdu')?>" data-type="select2" data-pk="1" data-name="education_id" data-value="<?=$info->nationality_id?>"></a></td>
                </tr>
                <tr>
                    <td>Место работы</td>
                    <td><a href="#" data-name="mesto_raboty" data-type="text" data-pk=""><?=$info->mesto_raboty?></a></td>
                </tr>

                </tbody>
            <?else:?>
                <p>Ошибка, данные не найдены. Обратитесь к администратору.</p>
            <?endif?>


        </table>
    </div>

</div>
<?=HTML::script('js/lk/editable.js')?>