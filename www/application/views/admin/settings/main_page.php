<div class="row" style="overflow-x: hidden">
    <div class="span4">
        <div class="well" style="height: 346px">
            <div>
                <script type="text/javascript">
                    $(function() {
                        $('body').on('click', '.check', function() {
                            var $this = $(this);
                            if (!$('.smtp').hasClass('_ch_off_smtp')) {
                                if( $this.find('input').prop('checked') ) {
                                    $('._ch_data_smtp').find('input').each(function() {
                                        $(this).prop('disabled', false);
                                    });
                                } else {
                                    $('._ch_data_smtp').find('input').each(function() {
                                        $(this).prop('disabled', true);
                                    });
                                }
                            }
                        });
                    });
                </script>
                <h5 class="header_block">Настройки SMTP</h5>
                <div style="margin-left: 20px; margin-bottom: 10px">
                    <div class="check <?=(!empty($smtp)) ? 'active _ch_off_smtp ' : null?>smtp" data-url="<?=Route::url('admin.ajax', array('controller' => 'settings', 'action' => 'off_smtp'))?>" data-callback="smtp" data-params="csrf">
                        Использовать SMTP
                        <input type="checkbox" name="smtp" <?=(!empty($smtp)) ? 'checked' : null?>/>
                    </div>
                </div>
                <form class="_ch_data_smtp" style="margin-left: 20px"  action="<?=Route::url('admin.ajax', array('controller' => 'settings', 'action' => 'smtp'))?>" method="post" data-callback="smtp">
                    <label for="server">Сервер:</label>
                    <input name="server" id="server" type="text" placeholder="smtp.gmail.com" value="<?=isset($smtp['server'])?$smtp['server']:null?>" <?=(empty($smtp)) ? 'disabled' : null?>>
                    <label for="port">Порт:</label>
                    <input name="port" id="port" type="text" placeholder="25" value="<?=isset($smtp['port'])?$smtp['port']:null?>" <?=(empty($smtp)) ? 'disabled' : null?>>
                    <label for="login">E-mail:</label>
                    <input name="login" id="login" type="text" placeholder="example@gmail.com" value="<?=isset($smtp['login'])?$smtp['login']:null?>" <?=(empty($smtp)) ? 'disabled' : null?>>
                    <label for="password">Пароль:</label>
                    <input name="password" id="password" type="password" placeholder="Пароль" value="<?=isset($smtp['password'])?'*************':null?>" <?=(empty($smtp)) ? 'disabled' : null?>><br>
                    <input type="submit" class="btn btn-info pull-right" value="Готово" style="margin-right: 20px" <?=(empty($smtp)) ? 'disabled' : null?>>
                    <input type="hidden" name="csrf" value="<?=Security::token()?>" class="csrf"/>
                </form>
            </div>

        </div>
    </div>

    <div class="span8">
        <div class="well" style="height: 346px">
            <div class="row-fluid" style="text-align: center">
                <div class="span4"><h5 class="header_block">Google</h5></div>
                <div class="span4"><h5 class="header_block">Yandex</h5></div>
                <div class="span4"><h5 class="header_block">Mail</h5></div>
            </div>
            <div class="row-fluid">
                <div class="span4"><strong>Сервер:</strong> sslv3://smtp.gmail.com<br><strong>Порт:</strong> 465</div>
                <div class="span4"><strong>Сервер:</strong> ssl://smtp.yandex.ru<br><strong>Порт:</strong> 465</div>
                <div class="span4"><strong>Сервер:</strong> <br/>ssl://smtp.mail.ru<br><strong>Порт:</strong> 465</div>
            </div>
            <br><br>
            <div class="alert alert-info">
                В таблице указаны данные для настройки отправки почты по протоколу SMTP трёх часто используемых почтовых сервисов.
            </div>
        </div>
    </div>
</div>