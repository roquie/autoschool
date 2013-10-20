<?=($is_approved == 0) ? View::factory('lk/pages/html/button')->render() : null?>

<div class="row data" data-url="<?=URL::site('lk/ajax/changeContract')?>" >

    <div class="span8">
        <table class="table table-hover">
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
                <td>Адрес регистрации по паспорту</td>
                <td><a href="#" data-name="adres_reg_po_pasporty" data-type="text" data-pk=""><?=$info->adres_reg_po_pasporty?></a></td>
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
                <td>Кем выдан паспорт</td>
                <td><a href="#" data-name="pasport_kem_vydan" data-type="text" data-pk=""><?=$info->pasport_kem_vydan?></a></td>
            </tr>
            <tr>
                <td>Мобильный телефон</td>
                <td><a href="#" data-name="phone" data-type="text" data-pk=""><?=$info->phone?></a></td>
            </tr>

            </tbody>
        </table>
    </div>

</div>
<?=HTML::script('js/editable.js')?>