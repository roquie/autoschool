<div class="container" style="margin-top: 100px">
    <div class="span6">
        <div class="well">
            <h2>Изменить заявку</h2>
            <hr>
            <form action="<?=URL::site('lk/changeStatement')?>" method="POST">
                <label for="famil">Фамилия</label>
                <input name="famil" type="text" value="<?=$info['famil']?>"/>
                <label for="imya">Имя</label>
                <input name="imya" type="text" value="<?=$info['imya']?>"/>
                <label for="ot4estvo">Отчество</label>
                <input name="ot4estvo" type="text" value="<?=$info['ot4estvo']?>" />
                <label for="data_rojdeniya">Дата рождения</label>
                <input name="data_rojdeniya" type="date" value="<?=$info['data_rojdeniya']?>" />
                <label for="grajdanstvo">Гражданство</label>
                <input name="grajdanstvo" type="text" value="<?=$info['grajdanstvo']?>" />
                <label for="mesto_rojdeniya">Место рождения</label>
                <input name="mesto_rojdeniya" type="text" value="<?=$info['mesto_rojdeniya']?>" />
                <label for="adres_reg_po_pasporty">Адрес рег. по паспорту</label>
                <input name="adres_reg_po_pasporty" type="text" value="<?=$info['adres_reg_po_pasporty']?>" />
                <label for="vrem_reg">Врем рег</label>
                <input name="vrem_reg" type="text" value="<?=$info['vrem_reg']?>" />
                <label for="pasport_seriya">Паспорт серия</label>
                <input name="pasport_seriya" type="text" value="<?=$info['pasport_seriya']?>" />
                <label for="pasport_nomer">ПАспорт номер</label>
                <input name="pasport_nomer" type="text" value="<?=$info['pasport_nomer']?>" />
                <label for="pasport_data_vyda4i">Паспорт даты выдачи</label>
                <input name="pasport_data_vyda4i" type="date" value="<?=$info['pasport_data_vyda4i']?>" />
                <label for="pasport_kem_vydan">Паспорт кем выдан</label>
                <input name="pasport_kem_vydan" type="text" value="<?=$info['pasport_kem_vydan']?>"/>
                <label for="mob_tel">Моб тел</label>
                <input name="mob_tel" type="text" value="<?=$info['mob_tel']?>" />
                <label for="dom_tel">Дом тел</label>
                <input name="dom_tel" type="text" value="<?=$info['dom_tel']?>"/>
                <label for="obrazovanie">Образование</label>
                <input name="obrazovanie" type="text" value="<?=$info['obrazovanie']?>"/>
                <label for="mesto_raboty">Место работы</label>
                <input name="mesto_raboty" type="text" value="<?=$info['mesto_raboty']?>"/>
                <label for="about">От куда узнали</label>
                <input name="about" type="text" value="<?=$info['about']?>"/>
                <br>
                <input type="submit" value="Сохранить" class="btn btn-primary"/>
            </form>
        </div>

    </div>
</div>