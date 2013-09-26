<div class="container" style="margin-top: 100px">
    <div class="span6">
        <div class="well">
            <h2>рега</h2>
            <hr>

            <script src="//ulogin.ru/js/ulogin.js"></script> <!--http%3A%2F%2Fautoschool.ru%2Flk%2Flol-->
            <div id="uLogin" data-ulogin="display=panel;fields=email;optional=photo_big;providers=google,vkontakte,odnoklassniki,mailru,facebook;hidden=;redirect_uri=<?=URL::site('lk/ajax/register')?>"></div>
            <!--<form action="<?/*=URL::site('lk/registration')*/?>" method="POST">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="email@email.con"/>
                <label for="photo">Foto</label>
                <input type="file"/>
            </form>-->
        </div>

    </div>
</div>