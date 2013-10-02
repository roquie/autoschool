<form id="send" action="<?=URL::site('main/mail/send')?>" method="post" accept-charset="utf-8">
    <input name="name" type="text" class="span2 in-name" data-placement="top" data-req="true" data-value="Имя">
    <input name="email" type="text" class="input-large" data-placement="top" data-req="true" data-value="Email адрес">
    <span style="position: relative">
        <textarea name="message" class="span5" rows="5" data-req="true" data-value="Сообщение"></textarea>
    </span>
    <input type="submit" class="btn btn-primary span2" value="Отправить">
</form>