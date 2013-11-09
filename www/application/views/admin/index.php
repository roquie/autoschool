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
<!--                        <?/* foreach ($audience as $listener) : */?>
                        --><?/* endforeach; */?>
                    <? for ($i=0;$i<40;$i++) : ?>
                        <tr class="_admins_link" data-callback="get_user" data-url="<?=URL::site('Users')?>">
                            <td><?=$i?></td>
                            <td>Слушатель <?=$i?></td>
                        </tr>
                    <? endfor; ?>
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
                                <td><a href="#" data-name="famil" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">Мельников</a></td>
                            </tr>
                            <tr>
                                <td>Имя</td>
                                <td><a href="#" data-name="imya" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">Виктор</a></td>
                            </tr>
                            <tr>
                                <td>Отчество</td>
                                <td><a href="#" data-name="ot4estvo" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">Игоревич</a></td>
                            </tr>
                            <tr>
                                <td>Дата рождения</td>
                                <td><a href="#" data-name="data_rojdeniya" data-type="combodate" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">08.10.1980</a></td>
                            </tr>
                            <tr>
                                <td>Гражданство</td>
                                <td><a href="#" id="grajdanstvo" data-action="http://autoschool.ru/lk/ajax/getNat" data-type="select2" data-pk="1" data-name="nationality_id" data-value="1" class="editable editable-click editable-disabled" tabindex="-1">РФ</a></td>
                            </tr>
                            <tr>
                                <td>Место рождения</td>
                                <td><a href="#" data-name="mesto_rojdeniya" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">Москва</a></td>
                            </tr>
                            <tr>
                                <td>Адрес регистрации по паспорту</td>
                                <td><a href="#" data-name="adres_reg_po_pasporty" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">Адрес регистрации по паспорту</a></td>
                            </tr>
                            <tr>
                                <td>Временная регистрация</td>
                                <td><a href="#" data-type="text" data-name="vrem_reg" data-pk="" class="editable editable-click editable-disabled" tabindex="-1"></a></td>
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
                                <td>Дата выдачи паспорта</td>
                                <td><a href="#" data-name="pasport_data_vyda4i" data-type="combodate" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">02.10.2013</a></td>
                            </tr>
                            <tr>
                                <td>Кем выдан паспорт</td>
                                <td><a href="#" data-name="pasport_kem_vydan" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">ОВД ЧЕРТАНОВО</a></td>
                            </tr>
                            <tr>
                                <td>Мобильный телефон</td>
                                <td><a href="#" data-name="mob_tel" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">8 (312) 312-31-21</a></td>
                            </tr>
                            <tr>
                                <td>Домашний телефон</td>
                                <td><a href="#" data-name="dom_tel" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">8 (123) 123-12-31</a></td>
                            </tr>
                            <tr>
                                <td>Образование</td>
                                <td><a href="#" id="education" data-action="http://autoschool.ru/lk/ajax/getEdu" data-type="select2" data-pk="1" data-name="education_id" data-value="1" class="editable editable-click editable-disabled" tabindex="-1">Высшее</a></td>
                            </tr>
                            <tr>
                                <td>Место работы</td>
                                <td><a href="#" data-name="mesto_raboty" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">Фриланс</a></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                    <div class="tab-pane" id="tab2">
                        <table class="table table-striped statement">
                            <tbody>

                            <tr>
                                <td>Фамилия</td>
                                <td><a href="#" data-name="famil" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">Мельников</a></td>
                            </tr>
                            <tr>
                                <td>Имя</td>
                                <td><a href="#" data-name="imya" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">Виктор</a></td>
                            </tr>
                            <tr>
                                <td>Отчество</td>
                                <td><a href="#" data-name="ot4estvo" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">Игоревич</a></td>
                            </tr>
                            <tr>
                                <td>Адрес регистрации по паспорту</td>
                                <td><a href="#" data-name="adres_reg_po_pasporty" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">Адрес регистрации по паспорту</a></td>
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