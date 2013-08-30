<header class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <div class="row">
                <ul class="nav">
                    <a href="<?=URL::site()?>"><img src="<?=URL::site('img/main/logo.png')?>" alt="Автошкола МПТ"/></a>
                </ul>
                <nav class="nav-collapse">
                    <ul class="nav pull-right" style="margin-right: 73px">
                        <li><a href="<?=URL::site('/forum')?>"><i class="icon-comments"></i> Форум</a></li>
                        <li><a href="price" id="link"><i class="icon-tags"></i> Цены</a></li>
                        <li><a href="contacts" id="link"><i class="icon-book"></i> Контакты</a></li>
                        <!--<li><a href="<?/*=URL::site('/about')*/?>"><i class="icon-info-sign"></i> О нас</a></li>-->
                        <li><a href='<?=URL::site('/auth/google')?>'>
                                <?$email = Session::instance()->get('email');
                                if(isset($email)):?>
                                Перейти в систему <li><a href="<?=URL::site('/auth/logout')?>">Выйти</a>
                                    <?else:?>
                                        <i class="icon-lock"></i> Вход
                                    <?endif?>
                            </a></li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>





