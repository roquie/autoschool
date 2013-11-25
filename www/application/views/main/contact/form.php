<form id="send" action="<?=URL::site('main/mail/send')?>" method="post" accept-charset="utf-8">
    <input id="c_name" name="name" type="text" class="span2 in-name" data-placement="top" data-req="true" placeholder="Имя">
    <input id="c_email" name="email" type="text" class="input-large" data-placement="top" data-req="true" placeholder="Email адрес">
    <span style="position: relative">
        <textarea id="c_msg" name="message" class="span5" rows="5" data-req="true" placeholder="Сообщение"></textarea>
    </span>
    <?=$captcha?><br><input type="text" name="captcha" style="margin-top: 5px;width: 117px" placeholder="проверка" data-req="true"/>
    <input type="submit" class="btn btn-primary span2" style="margin-bottom: 4px; margin-left: 120px" value="Отправить">
    <!--<a style="margin-left: 215px" href="#myModal" data-toggle="modal" class="btn btn-primary span2 _upd_captcha" data-url="<?/*=URL::site('main/mail/upd_captcha')*/?>" data-callback="upd_captcha">Отправить</a>-->
</form>

<!--<a style="margin-left: 215px" href="#myModal" data-toggle="modal" class="btn btn-primary">Отправить</a>-->