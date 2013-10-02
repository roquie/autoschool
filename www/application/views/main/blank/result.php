<h2 class="info">
    Обработка завершена. Скачайте и распечатайте документы. После этого прочтите их, поставьте подписи в нужных местах и отнесите их к нам в Автошколу<br>
    <? if ($age < 18) : ?>
        Т.к. вы ещё не достигли совершеннолетия, вы не сможете сдавать экзамен в ГИБДД.
    <? endif; ?>
</h2>
<br>
<div class="well well-small form-block">
    <div class="row-fluid">
        <div class="span6">
            <h1>Документы для загрузки</h1>
            Для вас были сформированы следующие документы:
            <ul class="dash" style="margin-top: 10px">
                <li><span>Заявление о принятии в Автошколу &laquo;МПТ РГТЭУ&raquo;</span></li>
                <li><span>Договор об указании платных образовательных услуг</span></li>
            </ul>
            <div class="clearfix"></div>
            <div class="line"></div>

            <div class="row-fluid">
                <div class="span6 pull-left">
                    <a class="btn btn-success btn-block" href="<?=$statement?>"><i class="icon-file-text"></i> Заявление</a>
                </div>
                <div class="span6 pull-right">
                    <a class="btn btn-primary btn-block" href="<?=$contract?>"><i class="icon-file-text"></i> Договор</a>
                </div>
            </div>
        </div>
        <div class="span6">
            <h1>Регистрация</h1>
            Для создания вашего личного кабинета, нам необходимо узнать ваш e-mail адрес. Выберите любую из соц сетей, либо введите свой e-mail самостоятельно.
            <br><br>
            <div class="clearfix"></div>
            <div class="line"></div>
            <script src="//ulogin.ru/js/ulogin.js"></script>
            <div id="uLogin" data-ulogin="display=panel;fields=email;optional=photo;providers=google,vkontakte,odnoklassniki,mailru,facebook;hidden=;redirect_uri=;callback=auth"></div>
        </div>
    </div>
</div>
<script>
    var data = '';
    function auth(token) {
        var host = encodeURIComponent(location.toString());
        $.get(
            'http://ulogin.ru/token.php',
            {
                token : token,
                host  : host
            },
            function(response) {
                getData(response);
            },
            'jsonp'
        );
    }
    function getData(resp) {
        $.post(
            'http://autoschool.ru/lk/lol',
            {
                data : resp
            },
            function(res) {
                alert('Email: ' + res.email + ' Photo: ' + res.photo);
            },
            'json'
        );
    }
</script>