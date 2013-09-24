<div class="container" style="margin-top: 100px">
    <div class="span6">
        <div class="well">
            <h2>Сброс пароля</h2>
            <hr>
            <form action="<?=URL::site('lk/forgot')?>" method="POST">
                <label for="email">Email</label>
                <input name="email" type="email" placeholder="you@gmail.com"/>
                <br>
                <input type="submit" value="Сбросить" class="btn btn-primary"/>
            </form>
        </div>

    </div>
</div>