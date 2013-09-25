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
                        <span class="email"><a href="mailto:auto@mpt.ru?subject=Вопрос по Автошколе МПТ" class="<!--muted-->" target="_blank">auto@mpt.ru</a></span>
                    </div>
                </ul>
                <nav class="nav-collapse">
                    <ul class="nav pull-right" style="margin-right: 58px">
                        <li><a href="#secondary" id="slide-left" data-url="<?=URL::site('twitter/tweets')?>"><i class="icon-comments"></i> Новости</a></li><!--http://twitter.com/autompt-->
                        <li><a href="<?=URL::site('/#price')?>" id="ajax"><i class="icon-tags"></i> Цены</a></li>
                        <li><a href="<?=URL::site('/#contacts')?>" id="ajax"><i class="icon-book"></i> Контакты</a></li>
                        <!--<li><a href="<?/*=URL::site('/about')*/?>"><i class="icon-info-sign"></i> О нас</a></li>-->
                        <?
                            $email = Session::instance()->get('email');
                            if(isset($email)):
                        ?>
                            <li><a href="<?=URL::site('admin/auth/logout')?>"><i class="icon-signin"></i> Выйти</a></li>
                        <?else: ?>
                            <li><a href='<?=URL::site('admin/auth/login')?>'><i class="icon-lock"></i> Вход</a></li>
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






