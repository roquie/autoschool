<?=HTML::style('css/lk_sttgs.css')?>
<script>

    $(function() {
        $('.ajax').ajaxForm({

            worked : function() {
                noty({
                    type:'error',
                    title:'Ошибка',
                    message:'Идёт обработка данных...'
                });
            },
            defaultCallback : function(response) { // дефолтный колбэк тупо при любом действии, хоть форма хоть ссылка, хочешь создать свою функцию, делается так.
                if (response.status == 'error' || response.status == 'success') {
                    noty({
                        type : response.status,
                        message : response.msg
                    });
                }
            },
            validate:false
        });
    });

</script>
<div class="row settingsContent">
    <div class="span4">
        <h2>Изменить пароль</h2>
        <form action="<?=URL::site('lk/ajax/changepass')?>" class="ajax" method="POST">
            <div class="input-prepend">
                <span class="add-on"><i class="icon-key"></i></span>
                <input id="password_old" name="password_old" placeholder="старый пароль" type="password">
            </div>
            <div class="input-prepend">
                <span class="add-on"><i class="icon-key"></i></span>
                <input id="password_new" name="password_new" placeholder="новый пароль" type="password">
            </div>
            <br>
            <input type="submit" value="Готово" class="btn btn-info pull-right"/>
        </form>
    </div>

    <div class="span4">
        <h2>Изменить email</h2>

        <form action="<?=URL::site('lk/ajax/check_pass')?>" method="POST" >
            <p>Подтвердите свои действия:</p>
            <div class="input-prepend">
                <span class="add-on"><i class="icon-key"></i></span>
                <input id="check_password" name="check_password" placeholder="ваш пароль" type="password">
            </div>
            <br>
            <input type="submit" value="Далее" class="btn btn-success pull-right"/>
        </form>

        <!--<form action="<?/*=URL::site('lk/ajax/change_email')*/?>" method="POST" style="padding-bottom: 50px">
            <div class="input-prepend">
                <span class="add-on"><b style="font-weight: 600">@</b></span>
                <input id="new_email" name="new_email" placeholder="новый email" type="email">
            </div>

            <input type="submit" value="Готово" class="btn btn-info pull-right"/>
        </form>-->
    </div>
</div>

