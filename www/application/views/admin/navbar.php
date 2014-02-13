<div class="navbar navbar-fixed-top navbar-inverse">
    <div class="navbar-inner">
        <div class="nav-collapse">
            <ul class="nav">
                <li><a href="<?=URL::site()?>"><i class="icon-home"></i> Главная</a></li>
                <li class="active"><a href="<?=URL::site('/admin')?>"><i class="icon-bar-chart"></i> Админка</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-briefcase"></i> Данные<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?=URL::site('admin/data/groups')?>"> Группы</a></li>
                        <li><a href="<?=URL::site('admin/data/national_and_edu')?>"> Гражданство и образование</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-submenu">
                            <a tabindex="-1" href="<?=URL::site('admin/teachers')?>">Преподаватели</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?=URL::site('admin/teachers')?>"> Общий список</a></li>
                                <li><a href="<?=URL::site('admin/teachers#pdd')?>"> Преподаватели ПДД</a></li>
                                <li><a href="<?=URL::site('admin/teachers#tu_and_to')?>"> Преподаватели ТУ и ТО</a></li>
                                <li><a href="<?=URL::site('admin/teachers#opmt')?>"> Преподаватели ОПМТ</a></li>
                                <li><a href="<?=URL::site('admin/teachers#driver_instructor')?>"> Водители - инструкторы</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-tasks"></i> Печать<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?=URL::site('admin/print/all')?>"> Список всех файлов</a></li>
                        <li class="divider"></li>
                        <li><a href="<?=URL::site('admin/print/driver_card')?>"> Водительская карточка</a></li>
                        <li><a href="<?=URL::site('admin/print/statement_in_gibdd')?>"> Заявление в ГИБДД</a></li>
                        <li><a href="<?=URL::site('admin/print/mail_in_mreo_gibdd')?>"> Письмо в МРЭО ГИБДД</a></li>
                        <li><a href="<?=URL::site('admin/print/exam_protocol')?>"> Экзаменационный протокол</a></li>
                        <li><a href="<?=URL::site('admin/print/listeners_group')?>"> Список слушателей группы (образ. и место раб.)</a></li>
                        <li><a href="<?=URL::site('admin/print/listeners_md')?>"> Список слушателей группы (медсправка)</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">Пустые бланки</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?=URL::site('/download/index/other_files/Zaivlenie.doc')?>"> Заявление в АШ</a></li>
                                <li><a href="<?=URL::site('/download/index/other_files/Dogovor.doc')?>"> Договор</a></li>
                                <li><a href="<?=URL::site('/download/index/other_files/kvitanciya.doc')?>"> Квитанция</a></li>
                                <li><a href="<?=URL::site('admin/blanks/driver_card')?>"> Водительская карточка</a></li>
                                <li><a href="<?=URL::site('admin/blanks/statement_in_gibdd')?>"> Заявление в ГИБДД</a></li>
                                <li><a href="<?=URL::site('admin/blanks/contract')?>"> Договор со слушателем</a></li>
                                <li><a href="<?=URL::site('admin/blanks/driving_rec')?>"> Карточка учета вождения</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="<?=URL::site('admin/messages')?>"><i class="icon-envelope"></i> Сообщения</a></li>
                <!--<li><a href="<?/*=URL::site('admin/sync')*/?>"><i class="icon-random"></i> Cинхронизация</a></li>-->
                <li><a href="<?=URL::site('admin/help')?>"><i class="icon-question-sign"></i> Справка</a></li>
            </ul>
            <style type="text/css">
                .selected_listener {
                    margin-right: 40px;
                    color: #ffffff;
                }
                .selected_listener > span {
                    font-size: 10pt;
                }
            </style>
            <ul class="nav pull-right">
                <li class="selected_listener"><span>Выбран слушатель:</span> <p>Петров Г.А.</p></li>
                <li class="divider-vertical"></li>
                <li style="position: relative">
                    <a href="#" id="user_name"><span class="login"><i class="icon-bolt"></i> <?=$session->get('first_name').'&nbsp;'.$session->get('last_name')?></span><strong class="caret" style="margin-left: 5px;margin-top: 8px; border-top: 4px solid #ffffff;"></strong></a>
                    <div id="popup" class="hide">
                        <div class="pull-left">
                            <img class="img-login" style="width: 95px; height: 95px" src="<?=$session->get('photo')?>"/>
                        </div>
                        <div class="pull-right" style="width: 170px">
                            <span style="font-weight: bolder"">  <?=$session->get('first_name').'&nbsp;'.$session->get('last_name')?></span><br>
                            <span class="muted"><?=$session->get('email')?></span><br>
                            Администратор
                            <div class="buttons">
                                <a href="<?=URL::site('admin/settings#administrators')?>"><button class="btn">Настройки</button></a>
                                <a href="<?=URL::site('admin/auth/logout')?>"><button class="btn">Выйти</button></a>
                            </div>
                        </div>
                    </div>
                <li class="divider-vertical"></li>
                </li>
            </ul>
        </div><!-- /.nav-collapse -->
    </div><!-- /navbar-inner -->
</div><!-- /navbar -->

