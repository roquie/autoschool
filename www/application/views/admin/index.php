<?=HTML::style('css/admin/listeners.css')?>

<div class="container">
    <div class="row">
        <div class="span4">
            <h1><small>Слушатели</small></h1>
        </div>
        <div class="span8 btn_actions">
            <a href="<?=URL::site('/admin/listeners/distrib')?>" class="btn btn-success pull-right" data-placement="left" rel="tooltip" title="Распределение слушателей подавших заявку по группам">Подавшие заявку</a>
        </div>
    </div>

    <div class="row">
        <div class="span3 l_select_group">
            <div class="well">
                <h5 class="header_block">Номер группы</h5>
                <label for="">Выберите:</label>
                <select name="select2">
                    <option selected="selected">Все ...</option>
                    <option>01-13</option>
                    <option>02-13</option>
                    <option>03-13</option>
                    <option>04-13</option>
                    <option>05-13</option>
                </select>
            </div>
        </div>
        <div class="span9 l_sort">
            <div class="well">
                <h5 class="header_block">Сортировка</h5>
                <form action="#" method="post" accept-charset="utf-8" novalidate>
                    <div class="row">
                        <div class="span2">
                            <label for="contract_from">Договор от:</label>
                            <div class="input-append">
                                <input id="contract_from" name="contract_from" type="text" class="input-small" placeholder="01.01.13">
                                <span class="add-on"><i class="icon-calendar"></i></span>
                            </div>
                        </div>
                        <div class="span2">
                            <label for="">Группа №:</label>
                            <select name="group_num">
                                <option selected="selected"> --- </option>
                                <option>01-13</option>
                                <option>02-13</option>
                                <option>03-13</option>
                                <option>04-13</option>
                                <option>05-13</option>
                            </select>
                        </div>
                        <div class="span2">
                            <label for="">Водитель-инстр.</label>
                            <select class="teacher_driver" name="teacher_driver" id="l_teacher_driver">
                                <option selected> --- </option>
                                <option>Самозванцев Л.Л</option>
                                <option>Шацкий И.А.</option>
                                <option>Коротков С.А.</option>
                                <option>Шуверов В.В.</option>
                            </select>
                        </div>
                        <div class="span2 pull-right ok">
                            <input type="submit" class="btn" rel="tooltip" title="Применить фильтр" value="OK"/>
                            <a href="#" class="btn" rel="tooltip" title="Сброс фильтра">Сбросить</a>
                        </div>
                    </div>


                </form>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="span3 l_fio">
            <div class="well" >
                <h5 class="header_block">Фамилия И.О.</h5>
                <div class="wrap">
                    <?for($i=1;$i<=99;++$i):?>
                        <!-- http://stackoverflow.com/questions/9709209/html-select-only-one-checkbox-in-a-group -->
                        <input type="radio" name="listeners_names" style="margin-bottom: 6px"/><span> Петров Г.А. <?=$i?></span><br>
                    <?endfor?>
                </div>

            </div>
        </div>
        <div class="span9 l_info">
            <div class="well">
                <div class="header-wrap">
                    <h5 class="header_block pull-left">Информация</h5>
                    <div class="btns pull-right">
                        <button id="enable" class="enb_dis btn" rel="tooltip" title="Режим редактирования"><i class="icon-pencil"></i></button>
                        <button id="enable" class="enb_dis btn btn-danger" rel="tooltip" title="Удалить информ. о слушателе"><i class="icon-trash"></i></button>
                    </div>
                </div>


                    <table class="table table-hover">
                        <tbody>

                        <tr>
                            <td>Фамилия</td>
                            <td><a href="#" data-name="famil" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">dsfjgghfasdnnnqwe</a></td>
                        </tr>
                        <tr>
                            <td>Имя</td>
                            <td><a href="#" data-name="imya" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">Hидрwewr</a></td>
                        </tr>
                        <tr>
                            <td>Отчество</td>
                            <td><a href="#" data-name="ot4estvo" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">Сидорович</a></td>
                        </tr>
                        <tr>
                            <td>Дата рождения</td>
                            <td><a href="#" class="data_rojdeniya editable editable-click editable-disabled" data-name="data_rojdeniya" data-type="combodate" data-pk="" tabindex="-1">01.01.1974</a></td>
                        </tr>
                        <tr>
                            <td>Гражданство</td>
                            <td><a href="#" id="grajdanstvo" data-action="http://autoschool.ru/lk/ajax/getNat" data-type="select2" data-pk="1" data-name="nationality_id" data-value="1" class="editable editable-click editable-disabled" tabindex="-1">РФ</a></td>
                        </tr>
                        <tr>
                            <td>Место рождения</td>
                            <td><a href="#" data-name="mesto_rojdeniya" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">г. Москва, РФ</a></td>
                        </tr>
                        <tr>
                            <td>Адрес регистрации по паспорту</td>
                            <td><a href="#" data-name="adres_reg_po_pasporty" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">г. Москва, ул. Петросяна, д.13, к.9</a></td>
                        </tr>
                        <tr>
                            <td>Временная регистрация</td>
                            <td><a href="#" data-type="text" data-name="vrem_reg" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">г. Казань, ул. Матрёшкина, д.77</a></td>
                        </tr>
                        <tr>
                            <td>Паспорт серия</td>
                            <td><a href="#" data-name="pasport_seriya" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">2937</a></td>
                        </tr>
                        <tr>
                            <td>Паспорт номер</td>
                            <td><a href="#" data-name="pasport_nome" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">3453890</a></td>
                        </tr>
                        <tr>
                            <td>Дата выдачи паспорта</td>
                            <td><a href="#" class="pasport_data_vyda4i editable editable-click editable-disabled" data-name="pasport_data_vyda4i" data-type="combodate" data-pk="" tabindex="-1">20.01.1989</a></td>
                        </tr>
                        <tr>
                            <td>Кем выдан паспорт</td>
                            <td><a href="#" data-name="pasport_kem_vydan" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">ОВД Г.КАЗАНИ</a></td>
                        </tr>
                        <tr>
                            <td>Мобильный телефон</td>
                            <td><a href="#" data-name="mob_tel" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">+79091234567</a></td>
                        </tr>
                        <tr>
                            <td>Домашний телефон</td>
                            <td><a href="#" data-name="dom_tel" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">10238102487</a></td>
                        </tr>
                        <tr>
                            <td>Образование</td>
                            <td><a href="#" id="education" data-action="http://autoschool.ru/lk/ajax/getEdu" data-type="select2" data-pk="1" data-name="education_id" data-value="1" class="editable editable-click editable-disabled" tabindex="-1">Высшее</a></td>
                        </tr>
                        <tr>
                            <td>Место работы</td>
                            <td><a href="#" data-name="mesto_raboty" data-type="text" data-pk="" class="editable editable-click editable-disabled" tabindex="-1">Гендиректор ООО АэроТрансКарго</a></td>
                        </tr>

                        </tbody>


                    </table>
            </div>
        </div>
    </div>

</div>

