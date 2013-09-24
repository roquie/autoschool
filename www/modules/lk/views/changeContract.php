<div class="container" style="margin-top: 100px">
    <div class="span6">
        <div class="well">
            <h2>Изменить договор</h2>
            <hr>
            <form action="<?=URL::site('lk/changeContract')?>" method="POST">
                <label for="famil">Фамилия</label>
                <input name="famil" type="text" value="<?=$info['famil']?>"/>
                <label for="imya">Имя</label>
                <input name="imya" type="text" value="<?=$info['imya']?>"/>
                <label for="ot4estvo">Отчество</label>
                <input name="ot4estvo" type="text" value="<?=$info['ot4estvo']?>" />
                <label for="adres_reg_po_pasporty">Адрес рег. по паспорту</label>
                <input name="adres_reg_po_pasporty" type="text" value="<?=$info['adres_reg_po_pasporty']?>"/>
                <label for="pasport_seriya">Паспорт серия</label>
                <input name="pasport_seriya" type="text" value="<?=$info['pasport_seriya']?>"/>
                <label for="pasport_nomer">ПАспорт номер</label>
                <input name="pasport_nomer" type="text" value="<?=$info['pasport_nomer']?>"/>
                <label for="pasport_kem_vydan">Паспорт кем выдан</label>
                <input name="pasport_kem_vydan" type="text" value="<?=$info['pasport_kem_vydan']?>"/>
                <label for="phone">Тел</label>
                <input name="phone" type="text" value="<?=$info['phone']?>"/>
                <br>
                <input type="submit" value="Сохранить" class="btn btn-primary"/>
            </form>
        </div>

    </div>
</div>