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
                        <a href="#" id="grajdanstvo" data-type="select2" data-pk="1" data-value="ru"></a>
                    </td>
                </tr>
                <tr>
                    <td>Место рождения</td>
                    <td><?=$info['mesto_rojdeniya']?></td>
                </tr>
                <tr>
                    <td>Адрес регистрации по паспорту</td>
                    <td><?=$info['adres_reg_po_pasporty']?></td>
                </tr>
                <tr>
                    <td>Временная регистрация</td>
                    <td><?=$info['vrem_reg']?></td>
                </tr>
                <tr>
                    <td>Паспорт серия</td>
                    <td><?=$info['pasport_seriya']?></td>
                </tr>
                <tr>
                    <td>Паспорт номер</td>
                    <td><?=$info['pasport_nomer']?></td>
                </tr>
                <tr>
                    <td>Дата выдачи паспорта</td>
                    <td><?=$info['pasport_data_vyda4i']?></td>
                </tr>
                <tr>
                    <td>Кем выдан паспорт</td>
                    <td><?=$info['pasport_kem_vydan']?></td>
                </tr>
                <tr>
                    <td>Мобильный телефон</td>
                    <td><?=$info['mob_tel']?></td>
                </tr>
                <tr>
                    <td>Домашний телефон</td>
                    <td><?=$info['dom_tel']?></td>
                </tr>
                <tr>
                    <td>Образование</td>
                    <td><?=$info['obrazovanie']?></td>
                </tr>
                <tr>
                    <td>Место работы</td>
                    <td><?=$info['mesto_raboty']?></td>
                </tr>

            </tbody>
        </table>
    </div>

</div>