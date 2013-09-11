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
                        <span class="email"><a href="mailto:auto@mpt.ru?subject=придумать тему" class="<!--muted-->" target="_blank">auto@mpt.ru</a></span>
                    </div>
                </ul>
                <nav class="nav-collapse">
                    <ul class="nav pull-right" style="margin-right: 65px">
                        <li><a href="http://twitter.com/autompt" target="_blank"><i class="icon-comments"></i> Новости</a></li>
                        <li><a href="<?=URL::site('/#price')?>" id="ajax"><i class="icon-tags"></i> Цены</a></li>
                        <li><a href="<?=URL::site('/#contacts')?>" id="ajax"><i class="icon-book"></i> Контакты</a></li>
                        <!--<li><a href="<?/*=URL::site('/about')*/?>"><i class="icon-info-sign"></i> О нас</a></li>-->
                        <?php
                            $email = Session::instance()->get('email');
                            if(isset($email)):
                        ?>
                            <li><a href="<?=URL::site('/auth/logout')?>"><i class="icon-signin"></i> Выйти</a>
                        <?php else: ?>
                            <li><a href='<?=URL::site('/auth/google')?>'><i class="icon-lock"></i> Вход</a></li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>





