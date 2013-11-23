<div class="row" style="overflow-x: hidden">
    <div class="span4">
        <div class="well" style="height: 300px;">
            <div style="">
                <script type="text/javascript">
                    $(function(){
                        // ну тута надо disable form когда галочка не стоит
                    });
                </script>

                <?if ($smtp === 0):?>
                    <div class="check emails">
                        Использовать SMTP
                        <input class="_ch_off_smtp" type="checkbox" name="smtp" data-url="<?=Route::url('admin.ajax', array('controller' => 'settings', 'action' => 'off_smtp'))?>"/>
                    </div>
                <?else:?>
                    <div class="check active emails">
                        Использовать SMTP
                        <input type="checkbox" name="smtp" checked/>

                    </div>
                <?endif?>

                <form class="_ch_data_smtp" style="padding: 5px 10px 10px 0; width: 220px; padding-bottom: 0" action="<?=Route::url('admin.ajax', array('controller' => 'settings', 'action' => 'smtp'))?>" method="post" >
                    <label for="server">Сервер:</label>
                    <input name="server" id="server" type="text" placeholder="smtp.gmail.com" value="<?=isset($smtp['server'])?$smtp['server']:null?>">
                    <label for="port">Порт:</label>
                    <input name="port" id="port" type="text" placeholder="25" value="<?=isset($smtp['port'])?$smtp['port']:null?>">
                    <label for="login">E-mail:</label>
                    <input name="login" id="login" type="text" placeholder="example@gmail.com" value="<?=isset($smtp['login'])?$smtp['login']:null?>">
                    <label for="password">Пароль:</label>
                    <input name="password" id="password" type="password" placeholder="Пароль" value="<?=isset($smtp['password'])?'*************':null?>"><br>
                    <input type="submit" class="btn btn-info pull-right" value="Готово">
                </form>
            </div>

        </div>
    </div>

    <div class="span8" >
        <div class="well" style="height: 300px;">
            Lorem ipsum dolar sit amet ...
        </div>
    </div>
</div>