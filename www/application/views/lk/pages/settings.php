<?=HTML::style('css/lk/lk_sttgs.css')?>
<div class="row settingsContent">
    <div class="span4">
        <h2>Изменить пароль</h2>
        <form action="<?=URL::site('lk/ajax/changepass')?>" class="_lk_form" method="POST">
            <div class="input-prepend">
                <span class="add-on"><i class="icon-key"></i></span>
                <input id="password_old" name="password_old" placeholder="старый пароль" type="password">
            </div>
            <div class="input-prepend">
                <span class="add-on"><i class="icon-key"></i></span>
                <input id="password_new" name="password_new" placeholder="новый пароль" type="password">
            </div>
            <br>
            <input type="hidden" name="csrf" class="csrf" value="<?=Security::token()?>" id="csrf"/>
            <input type="submit" value="Готово" class="btn btn-info pull-right"/>
        </form>
    </div>

    <div class="span4">
        <h2>Изменить email</h2>

        <form id="toggle_pass_email" action="<?=URL::site('lk/ajax/check_pass')?>" class="_lk_form" data-callback="check_pass" method="POST" >
            <p>Подтвердите свои действия:</p>
            <div class="input-prepend">
                <span class="add-on"><i class="icon-key"></i></span>
                <input id="check_password" name="check_password" placeholder="ваш пароль" type="password">
            </div>
            <br>
            <input type="hidden" name="csrf" class="csrf" value="<?=Security::token()?>" id="csrf"/>
            <input type="submit" value="Далее" class="btn btn-success pull-right"/>
        </form>

        <form id="toggle_pass_email" action="<?=URL::site('lk/ajax/change_email')?>" data-callback="change_email" method="POST" class="_lk_form" style="padding-top: 40px; display: none" novalidate>
            <div class="input-prepend">
                <span class="add-on"><b style="font-weight: 600">@</b></span>
                <input id="new_email" name="new_email" placeholder="новый email" type="email">
            </div>
            <input type="hidden" name="csrf" class="csrf" value="<?=Security::token()?>" id="csrf"/>
            <input type="submit" value="Готово" class="btn btn-info pull-right"/>
        </form>
    </div>
</div>

