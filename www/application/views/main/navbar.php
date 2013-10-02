<header class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">

                <ul class="nav">
                    <a href="<?=URL::site()?>"><img src="<?=URL::site('img/main/logo.png')?>" alt="Автошкола МПТ"/></a>
                    <div class="text">
                        <div class="phone">
                            <span>+7 (925) 800 10 24</span>
                            <span>+7 (499) 317 04 09</span><br>
                        </div>
                        <span class="email">
                            <?=HTML::mailto('&#97;&#117;&#116;&#111;&#64;&#109;&#112;&#116;&#46;&#114;&#117;?subject=Вопрос по Автошколе МПТ', '&#97;&#117;&#116;&#111;&#64;&#109;&#112;&#116;&#46;&#114;&#117;', array(
                                'target' => '_blank'
                            ))?>
                        </span>
                    </div>
                </ul>
                <nav class="nav-collapse">
                    <ul class="nav pull-right" style="margin-right: 58px">
                        <li><a href="#secondary" id="slide-left" data-url="<?=URL::site('twitter/tweets')?>"><i class="icon-twitter"></i> Новости</a></li><!--http://twitter.com/autompt-->
                        <li><a href="<?=URL::site('/#price')?>" id="ajax"><i class="icon-tags"></i> Цены</a></li>
                        <li><a href="<?=URL::site('/#contacts')?>" id="ajax"><i class="icon-book"></i> Контакты</a></li>
                        <!--<li><a href="<?/*=URL::site('/about')*/?>"><i class="icon-info-sign"></i> О нас</a></li>-->
                        <?
                            //$email = Session::instance()->get('email');
                            $email = Cookie::get('userEmail');
                            if(isset($email)):
                        ?>
                            <li><a href="<?=URL::site('lk/logout')?>"><i class="icon-signin"></i> Выйти</a></li>
                        <?else: ?>
                            <li style="position: relative">
                                <a href='#' id="sign_in"><i class="icon-lock"></i> Вход <strong class="caret" style="margin-left: 2px;margin-top: 8px;"></strong></a>
                                <div id="popup" class="hide">
                                    <form method="post" action="<?=URL::site('lk/ajax/login')?>" id="sign-in">
                                        <div class="input-prepend">
                                            <span class="add-on"><i class="icon-envelope"></i></span>
                                            <input type="text" id="email" name="email" placeholder="Email">
                                        </div>
                                        <div class="input-prepend">
                                            <span class="add-on"><i class="icon-key"></i></span>
                                            <input type="password" id="password" name="password" placeholder="Пароль">
                                        </div>
                                        <div class="check">
                                            <span class="label-check">Запомнить</span>
                                            <input type="checkbox" name="remember">
                                        </div>
                                        <input type="submit" value="Войти" class="btn btn-info btn-block"/>
                                    </form>
                                </div>
                            </li>
                        <?endif ?>
                    </ul>
                </nav>
            </div>
        </div>
</header>

<div id="secondary">
    <div class="title">Последние твиты загружаются... Пожалуйста, подождите</div><br>
    <div class="loader"><i class="icon-refresh icon-spin icon-large"></i></div>
</div>






