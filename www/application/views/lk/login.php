<div class="container" style="margin-top: 100px">
    <div class="span6">
        <div class="well">
            <h2>Авторизация</h2>
            <a href="<?=URL::site('lk/registration')?>">рега</a><br>
            <a href="<?=URL::site('lk/forgot')?>">Сбросить пароль</a>
            <hr>
            <form action="<?=URL::site('lk/login')?>" method="POST">
                <label for="email">Email</label>
                <input name="email" type="email" placeholder="you@gmail.com"/>
                <label for="password">Пароль</label>
                <input name="password" type="password" placeholder="*********"/>
                <br>
                <input type="checkbox" name="remember_me"/> Запомнить?
                <br><br>
                <input type="submit" value="Войти" class="btn btn-primary"/>
            </form>
        </div>

    </div>
</div>