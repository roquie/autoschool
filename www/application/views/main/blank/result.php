<h2 class="info">
    Обработка завершена. Осталось только выполнить действия указанные ниже и вы сможете полноценно пользоваться данной системой.<br>
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
                <li><span>Договор об указании платных образовательных услуг;</span></li>
                <li><span>Квитанция на оплату.</span></li>
            </ul>
            Загрузить данные документы вы можете в своём личном кабинете, для этого пройдите процедуру регистрации.
        </div>
        <div class="span6">
            <h1>Регистрация</h1>
            Для создания вашего личного кабинета, нам необходимо узнать ваш e-mail адрес. Выберите любую из соц сетей, либо введите свой e-mail самостоятельно.
            <br><br>
            <div class="check" id="enter-email">
                <span class="label-check">Ввести e-mail</span>
                <input type="checkbox" name="your_email">
            </div>
            <br>
            <script src="//ulogin.ru/js/ulogin.js"></script>
            <div id="uLogin" data-ulogin="display=panel;fields=email;optional=photo_big;providers=google,vkontakte,odnoklassniki,mailru,facebook;hidden=;redirect_uri=;callback=auth"></div>
            <div class="hide" id="b_email">
                <form action="<?=URL::site('lk/ajax/register')?>" id="reg">
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-envelope"></i></span>
                        <input type="text" name="email" id="v_email" placeholder="Email">
                    </div>
                    <input type="submit" class="btn btn-info btn-block" value="Зарегистрироваться"/>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(function() {
        var body = $('body');
        body.on('click', '#enter-email', function () {
            $('#b_email').toggle();
            $('#uLogin').toggle();
        });
        $('#reg').on('submit', function(e) {
            e.preventDefault();
            var action = $(this).attr('action'),
                data  = $(this).serialize();
            if ($('#enter-email').find('input').prop('checked')) {
                data += '&your_email=yes';
            }
            if ($('#v_email').val() === '') {
                noty({
                    type : 'error',
                    message : 'Заполните поле e-mail'
                });
            } else {
                data += '&csrf='+$('.csrf').val();
                $.post(
                    action,
                    data,
                    function(res) {
                        if (res.status === 'success') {
                            window.location.href = res.data.redirect;
                        }
                        if (res.status === 'error') {
                            console.log(res);
                            noty({
                                type   : res.status,
                                message   : res.msg
                            });
                        }
                    },
                    'json'
                );
            }
        });
    });
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
        var action = $('#reg').attr('action');
        $.post(
            action,
            {
                data : resp
            },
            function(res) {
                if (res.status === 'success') {
                    window.location.href = res.data.redirect;
                }
                if (res.status === 'error') {
                    noty({
                        type   : res.status,
                        message   : res.msg
                    });
                }
            },
            'json'
        );
    }
</script>