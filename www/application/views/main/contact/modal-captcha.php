<div class="modal hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <h3 id="myModalLabel">Введите код с картинки</h3>
    </div>
    <div class="modal-body">
        <form class="_contacts" data-callback="contact_form" style="margin-left: 180px" action="<?=URL::site('main/mail/check_captcha')?>" method="post">
            <br>
            <input style="margin-top: 5px; width: 137px" name="captcha" type="text" />
            <br>
            <input class="btn btn-primary" type="submit" value="Отправить" />
        </form>
    </div>
</div>