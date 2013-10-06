<?=HTML::script('js/lk_statement.js')?>
<div class="row">
    <div class="span8">
        <button id="enable" class="enb_dis btn btn-info"><i class="icon-pencil"></i> Режим редактирования</button>
        <button id="enable" class="enb_dis btn btn-info" style="display: none"><i class="icon-eye-open"></i> Режим просмотра</button>
    </div>
</div>

<div class="row data" data-url="<?=URL::site('lk/ajax/changeStatement')?>" >

    <div class="span8">
        <table class="table table-hover">
            <tbody>

                <tr>
                    <td>Фамилия</td>
                    <td><a href="#" id="famil" data-type="text" data-pk=""><?=$info['famil']?></a></td>
                </tr>
                <tr>
                    <td>Имя</td>
                    <td><a href="#" id="imya" data-type="text" data-pk=""><?=$info['imya']?></a></td>
                </tr>
                <tr>
                    <td>Отчество</td>
                    <td><a href="#" id="ot4estvo" data-type="text" data-pk=""><?=$info['ot4estvo']?></a></td>
                </tr>
                <tr>
                    <td>Дата рождения</td>
                    <td><a href="#" id="data_rojdeniya" data-type="combodate" data-pk=""><?=$info['data_rojdeniya']?></a></td>
                </tr>
                <tr>
                    <td>Гражданство</td>
                    <td>
                        <!--<a href="#" id="grajdanstvo" data-type="select2" data-pk="" data-value="<?/*=$info['grajdanstvo']*/?>"></a>-->
                        <a href="#" id="grajdanstvo" data-type="select2" data-pk="1" data-name="nationality_id" data-value="<?=$info['nationality_id']?>"></a>
                    </td>
                </tr>
                <tr>
                    <td>Место рождения</td>
                    <td><a href="#" id="mesto_rojdeniya" data-type="text" data-pk=""><?=$info['mesto_rojdeniya']?></a></td>
                </tr>
                <tr>
                    <td>Адрес регистрации по паспорту</td>
                    <td><a href="#" id="adres_reg_po_pasporty" data-type="text" data-pk=""><?=$info['adres_reg_po_pasporty']?></a></td>
                </tr>
                <tr>
                    <td>Временная регистрация</td>
                    <td><a href="#" id="vrem_reg" data-type="text" data-pk=""><?=$info['vrem_reg']?></a></td>
                </tr>
                <tr>
                    <td>Паспорт серия</td>
                    <td><a href="#" id="pasport_seriya" data-type="text" data-pk=""><?=$info['pasport_seriya']?></a></td>
                </tr>
                <tr>
                    <td>Паспорт номер</td>
                    <td><a href="#" id="pasport_nomer" data-type="text" data-pk=""><?=$info['pasport_nomer']?></a></td>
                </tr>
                <tr>
                    <td>Дата выдачи паспорта</td>
                    <td><a href="#" id="pasport_data_vyda4i" data-type="combodate" data-pk=""><?=$info['pasport_data_vyda4i']?></a></td>
                </tr>
                <tr>
                    <td>Кем выдан паспорт</td>
                    <td><a href="#" id="pasport_kem_vydan" data-type="text" data-pk=""><?=$info['pasport_kem_vydan']?></a></td>
                </tr>
                <tr>
                    <td>Мобильный телефон</td>
                    <td><a href="#" id="mob_tel" data-type="text" data-pk=""><?=$info['mob_tel']?></a></td>
                </tr>
                <tr>
                    <td>Домашний телефон</td>
                    <td><a href="#" id="dom_tel" data-type="text" data-pk=""><?=$info['dom_tel']?></a></td>
                </tr>
                <tr>
                    <td>Образование</td>
                    <td><a href="#" id="education" data-type="select2" data-pk="1" data-name="education_id" data-value="<?=$info['nationality_id']?>"></a></td>
                </tr>
                <tr>
                    <td>Место работы</td>
                    <td><a href="#" id="mesto_raboty" data-type="text" data-pk=""><?=$info['mesto_raboty']?></a></td>
                </tr>

            </tbody>
        </table>
    </div>

</div>