<?=HTML::style('css/admin/distrib.css')?>

<div class="container">
<div class="row">
    <div class="span7">
        <h1><small>Неутвержденные слушатели</small></h1>
    </div>
    <div class="span5 btn_actions">
        <!-- btn's maybe create ...-->
    </div>
</div>

<div class="row">
    <div class="span3 d_fio">
        <div class="well">
            <h5 class="header_block">Фамилия И.О.</h5>
            <div class="wrap">
                <?for($i=1;$i<=99;++$i):?>
                    <!-- http://stackoverflow.com/questions/9709209/html-select-only-one-checkbox-in-a-group -->
                    <input type="radio" name="listeners_names" style="margin-bottom: 6px"/><span> Петров Г.А. <?=$i?></span><br>
                <?endfor?>
            </div>

        </div>
    </div>
    <div class="span9">
        <div class="well d_status">
            <h5 class="header_block">Статус</h5>
            <div class="progress">
                <!-- status 0 -->
                <!--<div class="bar bar-danger" style="width: 2%;"></div>-->
                <!--остальное так-->
                <div class="bar" style="width: 63%;"></div>
            </div>
            <a href="#" class="btn"><i class="icon-ok"></i> Информация верна</a>
            <a href="#" class="btn" style="margin-left: 50px"> <i class="icon-ok"></i> Все документы сданы</a>
            <a href="#" class="btn pull-right"><i class="icon-remove"></i> Зачислен(а) в автошколу</a>


        </div>
        <div class="well d_info">
            <div class="header-wrap">
                <h5 class="header_block pull-left">Информация</h5>
                <div class="btns pull-right">
                    <!-- меняй класс active у кнопок + менять href'ы у кнопок редактирования и удаления (для того чтобы понять что удалять) statement_or_contract -->
                    <a id="l_statement" href="#tab1" class="btn active" data-toggle="tab">Заявление</a>
                    <a id="l_contract" href="#tab2" class="btn" data-toggle="tab">Договор</a>
                    <div class="btn-group">
                        <a id="l_edit" href="#statement_or_contract" data-url="<?=URL::site('')?>" class="enb_dis btn btn-info" rel="tooltip" title="Режим редактирования"><i class="icon-pencil"></i></a>
                        <a id="l_delete" href="#statement_or_contract" data-url="<?=URL::site('')?>" class="enb_dis btn btn-danger" rel="tooltip" title="Удалить слушателя"><i class="icon-trash"></i></a>
                    </div>

                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="tab1">

                    <table class="table table-striped statement">
                        <tbody>
                        <tr>
                            <td>Фамилия</td>
                            <td><a href="#" data-name="famil" data-url="http://autoschool.ru/lk/ajax/changeStatement/21" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">dsfjgghfasdnnnqwe</a></td>
                        </tr>
                        <tr>
                            <td>Имя</td>
                            <td><a href="#" data-name="imya" data-url="http://autoschool.ru/lk/ajax/changeStatement/21" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">Hидрwewr</a></td>
                        </tr>
                        <tr>
                            <td>Отчество</td>
                            <td><a href="#" data-name="ot4estvo" data-url="http://autoschool.ru/lk/ajax/changeStatement/21" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">Сидорович</a></td>
                        </tr>
                        <tr>
                            <td>Дата рождения</td>
                            <td><a href="#" class="data_rojdeniya editable editable-click editable-disabled" data-name="data_rojdeniya" data-url="http://autoschool.ru/lk/ajax/changeStatement/21" data-type="combodate" data-pk="" tabindex="-1">01.01.1974</a></td>
                        </tr>
                        <tr>
                            <td>Гражданство</td>
                            <td><a href="#" id="grajdanstvo" data-url="http://autoschool.ru/lk/ajax/changeStatement/21" data-action="http://autoschool.ru/lk/ajax/getNat" data-type="select2" data-pk="1" data-name="nationality_id" data-value="1" class="editable editable-click editable-disabled" tabindex="-1">РФ</a></td>
                        </tr>
                        <tr>
                            <td>Место рождения</td>
                            <td><a href="#" data-name="mesto_rojdeniya" data-url="http://autoschool.ru/lk/ajax/changeStatement/21" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">г. Москва, РФ</a></td>
                        </tr>
                        <tr>
                            <td>Адрес регистрации по паспорту</td>
                            <td><a href="#" data-name="adres_reg_po_pasporty" data-url="http://autoschool.ru/lk/ajax/changeStatement/21" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">г. Москва, ул. Петросяна, д.13, к.9</a></td>
                        </tr>
                        <tr>
                            <td>Временная регистрация</td>
                            <td><a href="#" data-type="text" data-url="http://autoschool.ru/lk/ajax/changeStatement/21" data-name="vrem_reg" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">г. Казань, ул. Матрёшкина, д.77</a></td>
                        </tr>
                        <tr>
                            <td>Паспорт серия</td>
                            <td><a href="#" data-name="pasport_seriya" data-url="http://autoschool.ru/lk/ajax/changeStatement/21" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">2937</a></td>
                        </tr>
                        <tr>
                            <td>Паспорт номер</td>
                            <td><a href="#" data-name="pasport_nome" data-url="http://autoschool.ru/lk/ajax/changeStatement/21" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">3453890</a></td>
                        </tr>
                        <tr>
                            <td>Дата выдачи паспорта</td>
                            <td><a href="#" class="pasport_data_vyda4i editable editable-click editable-disabled" data-name="pasport_data_vyda4i" data-url="http://autoschool.ru/lk/ajax/changeStatement/21" data-type="combodate" data-pk="" tabindex="-1">20.01.1989</a></td>
                        </tr>
                        <tr>
                            <td>Кем выдан паспорт</td>
                            <td><a href="#" data-name="pasport_kem_vydan" data-url="http://autoschool.ru/lk/ajax/changeStatement/21" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">ОВД Г.КАЗАНИ</a></td>
                        </tr>
                        <tr>
                            <td>Мобильный телефон</td>
                            <td><a href="#" data-name="mob_tel" data-url="http://autoschool.ru/lk/ajax/changeStatement/21" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">+79091234567</a></td>
                        </tr>
                        <tr>
                            <td>Домашний телефон</td>
                            <td><a href="#" data-name="dom_tel" data-url="http://autoschool.ru/lk/ajax/changeStatement/21" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">10238102487</a></td>
                        </tr>
                        <tr>
                            <td>Образование</td>
                            <td><a href="#" id="education" data-url="http://autoschool.ru/lk/ajax/changeStatement/21" data-action="http://autoschool.ru/lk/ajax/getEdu" data-type="select2" data-pk="1" data-name="education_id" data-value="1" class="editable editable-click editable-disabled" tabindex="-1">Высшее</a></td>
                        </tr>
                        <tr>
                            <td>Место работы</td>
                            <td><a href="#" data-name="mesto_raboty" data-url="http://autoschool.ru/lk/ajax/changeStatement/21" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">Гендиректор ООО АэроТрансКарго</a></td>
                        </tr>

                        </tbody>
                    </table>

                </div>

                <div class="tab-pane" id="tab2">

                    <table class="table table-striped contract">

                        <tbody>

                        <tr>
                            <td>Фамилия</td>
                            <td><a href="#" data-url="http://autoschool.ru/lk/ajax/changeContract/21" data-name="famil" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">Петрова</a></td>
                        </tr>
                        <tr>
                            <td>Имя</td>
                            <td><a href="#" data-url="http://autoschool.ru/lk/ajax/changeContract/21" data-name="imya" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">Анастасия</a></td>
                        </tr>
                        <tr>
                            <td>Отчество</td>
                            <td><a href="#" data-url="http://autoschool.ru/lk/ajax/changeContract/21" -name="ot4estvo" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">Агафьевна</a></td>
                        </tr>
                        <tr>
                            <td>Адрес регистрации по паспорту</td>
                            <td><a href="#" data-url="http://autoschool.ru/lk/ajax/changeContract/21" data-name="adres_reg_po_pasporty" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">г. Москва, ул. Петросяна, д.13, к.9</a></td>
                        </tr>
                        <tr>
                            <td>Паспорт серия</td>
                            <td><a href="#" data-url="http://autoschool.ru/lk/ajax/changeContract/21" data-name="pasport_seriya" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">4382</a></td>
                        </tr>
                        <tr>
                            <td>Паспорт номер</td>
                            <td><a href="#" data-url="http://autoschool.ru/lk/ajax/changeContract/21" data-name="pasport_nome" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">20934820</a></td>
                        </tr>
                        <tr>
                            <td>Кем выдан паспорт</td>
                            <td><a href="#" data-url="http://autoschool.ru/lk/ajax/changeContract/21" data-name="pasport_kem_vydan" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">ОВД Г.КАЗАНИ 2</a></td>
                        </tr>
                        <tr>
                            <td>Мобильный телефон</td>
                            <td><a href="#" data-url="http://autoschool.ru/lk/ajax/changeContract/21" data-name="phone" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">+79261195550</a></td>
                        </tr>

                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>
</div>

</div>

