<div class="container" style="margin-top: 100px">
    <div class="span6">
        <div class="well">
            <h2>Смена пароля</h2>
            <hr>
            <form action="<?=URL::site('lk/ajax/changepass')?>" method="POST">
                <label for="password_old">Старый пароль</label>
                <input name="password_old" type="password" placeholder="*********"/>
                <label for="password_new">Новый пароль</label>
                <input name="password_new" type="password" placeholder="*********"/>
                <br>
                <input type="submit" value="Сохранить" class="btn btn-primary"/>
            </form>
        </div>

    </div>
</div>
