<?=HTML::style('css/admin/index.css')?>
<?=HTML::script('js/admin/index.js')?>
<?
    $status = 2;
?>
<div class="container">
    <h1><small>Не зачисленные слушатели</small></h1>
    <div class="block">
        <div class="row-fluid">
            <div class="span3">
                <table class="table listener table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Фамилия И.О.</th>
                        </tr>
                    </thead>
                    <tbody id="slimScroll">
                        <?
                            $i = 0;
                            foreach ($audience as $listener) :
                        ?>
                            <tr class="_admins_link" data-callback="get_user" data-url="<?=URL::site('Users')?>">
                                <td><?=++$i?></td>
                                <td><?=$listener?></td>
                            </tr>
                        <? endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="span9 right-block">

                <h1>Статус слушателя</h1>

                <div class="row-fluid">
                    <div class="span4 status">
                        <span>Данные введены верно</span>
                        <? if ($status >= 1) : ?>
                            <a href="#" data-url="<?=URL::site('qwe')?>" class="_admins_link btn btn-success btn-circle"><i class="icon-ok"></i></a>
                        <? else : ?>
                            <a href="#"  data-url="<?=URL::site('qwe')?>" class="_admins_link btn btn-danger btn-circle"><i class="icon-remove"></i></a>
                        <? endif; ?>
                    </div>
                    <div class="span4 status">
                        <span>Все документы сданы</span>
                        <? if ($status >= 2) : ?>
                            <a href="#" data-url="<?=URL::site('qwe')?>" class="_admins_link btn btn-success btn-circle"><i class="icon-ok"></i></a>
                        <? else : ?>
                            <a href="#" data-url="<?=URL::site('qwe')?>" class="_admins_link btn btn-danger btn-circle"><i class="icon-remove"></i></a>
                        <? endif; ?>
                    </div>
                    <div class="span4 status">
                        <span>Зачислен в автошколу</span>
                        <? if ($status == 3) : ?>
                            <a href="#" data-url="<?=URL::site('qwe')?>" class="_admins_link btn btn-success btn-circle"><i class="icon-ok"></i></a>
                        <? else : ?>
                            <a href="#" data-url="<?=URL::site('qwe')?>" class="_admins_link btn btn-danger btn-circle"><i class="icon-remove"></i></a>
                        <? endif; ?>
                    </div>
                </div>

                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab1" data-toggle="tab">Данные заявления</a></li>
                    <li><a href="#tab2" data-toggle="tab" id="act" >Данные договора</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="tab1">
                        <table class="table table-striped statement">
                            <tbody>

                            <tr>
                                <td>Фамилия</td>
                                <td>Мельников</td>
                            </tr>
                            <tr>
                                <td>Имя</td>
                                <td>Виктор</td>
                            </tr>
                            <tr>
                                <td>Отчество</td>
                                <td>Игоревич</td>
                            </tr>
                            <tr>
                                <td>Дата рождения</td>
                                <td>08.10.1980</td>
                            </tr>
                            <tr>
                                <td>Гражданство</td>
                                <td>РФ</td>
                            </tr>
                            <tr>
                                <td>Место рождения</td>
                                <td>Москва</td>
                            </tr>
                            <tr>
                                <td>Адрес регистрации по паспорту</td>
                                <td>Адрес регистрации по паспорту</td>
                            </tr>
                            <tr>
                                <td>Временная регистрация</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Паспорт серия</td>
                                <td>123123</td>
                            </tr>
                            <tr>
                                <td>Паспорт номер</td>
                                <td>11231231</td>
                            </tr>
                            <tr>
                                <td>Дата выдачи паспорта</td>
                                <td>02.10.2013</td>
                            </tr>
                            <tr>
                                <td>Кем выдан паспорт</td>
                                <td>ОВД ЧЕРТАНОВО</td>
                            </tr>
                            <tr>
                                <td>Мобильный телефон</td>
                                <td>8 (312) 312-31-21</td>
                            </tr>
                            <tr>
                                <td>Домашний телефон</td>
                                <td>8 (123) 123-12-31</td>
                            </tr>
                            <tr>
                                <td>Образование</td>
                                <td>Высшее</td>
                            </tr>
                            <tr>
                                <td>Место работы</td>
                                <td>Фриланс</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                    <div class="tab-pane" id="tab2">
                        <table class="table table-striped contract">
                            <tbody>

                            <tr>
                                <td>Фамилия</td>
                                <td>Мельников</td>
                            </tr>
                            <tr>
                                <td>Имя</td>
                                <td>Виктор</td>
                            </tr>
                            <tr>
                                <td>Отчество</td>
                                <td>Игоревич</td>
                            </tr>
                            <tr>
                                <td>Адрес регистрации по паспорту</td>
                                <td>Адрес регистрации по паспорту</td>
                            </tr>
                            <tr>
                                <td>Паспорт серия</td>
                                <td><a href="#" data-name="pasport_seriya" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">123123</a></td>
                            </tr>
                            <tr>
                                <td>Паспорт номер</td>
                                <td><a href="#" data-name="pasport_nome" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">11231231</a></td>
                            </tr>
                            <tr>
                                <td>Кем выдан паспорт</td>
                                <td><a href="#" data-name="pasport_kem_vydan" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">ОВД ЧЕРТАНОВО</a></td>
                            </tr>
                            <tr>
                                <td>Мобильный телефон</td>
                                <td><a href="#" data-name="phone" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">8 (312) 312-31-21</a></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>