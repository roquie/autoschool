<div class="container">
    <div class="row">
        <div class="span3 pull-left">
            <h1><small>Группы</small></h1>
        </div>
        <div class="span9" style="margin-top: 20px">
            <div class="pull-right">
                <a href="#tab1" class="btn active" data-toggle="tab">Просмотр/Редакт.</a>
                <a href="#tab2" class="btn" data-toggle="tab">Добавление</a>
                <div class="btn-group">
                    <a href="<?=URL::site('/print/pdf')?>" target="_blank" rel="tooltip" title="Распечатать список слушателей" class="btn"><i class="icon-print"></i></a>
                    <a href="<?=URL::site('/download/print/name')?>" rel="tooltip" title="Загрузить документ со списоком слушателей" class="btn btn-success"><i class="icon-download"></i></a>
                    <a href="#" rel="tooltip" title="Открыть список слушателей" class="btn btn-info"><i class="icon-eye-open"></i></a>
                </div>
                <a href="#" class="btn btn-success" data-placement="left" rel="tooltip" title="Распределение слушателей подавших заявку по группам">Кнопка</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="span3">
            <div class="well" >
                <h5 class="header_block">Наименование группы</h5>
                <div style="overflow-x: auto; height: 634px; padding-left: 2px; padding-right: 25px">
                    <ul class="unstyled">
                        <?for($i=1;$i<=99;++$i):?>
                            <!-- http://stackoverflow.com/questions/9709209/html-select-only-one-checkbox-in-a-group -->
                            <li style="padding: 5px 0 5px 0">
                                <input type="radio" name="listeners_names" style="margin-bottom: 6px"/>
                                <span> <?=$i?>-13</span>
                                <div class="pull-right">
                                    <!--<a style="margin-right: 5px" href="#"><span class="badge"><i class="icon-pencil"></i></span></a>-->
                                    <a href="#"><span class="badge badge-important"><i class="icon-trash"></i></span></a>
                                </div>
                            </li>
                        <?endfor?>
                    </ul>
                </div>

            </div>
        </div>

        <style type="text/css">
            .custom_p {
                margin-bottom: 3px;
            }
        </style>
        <div class="tab-content">
            <!-- просмотр/редактирование (режим редактирования по умолчанию включен) -->
            <div class="tab-pane active" id="tab1">
                <div class="span9">
                    <div class="well">
                        <div class="row">
                            <div class="span3">
                                <p class="custom_p">Начало занятий:</p>
                                <a href="#">01.01.13</a>
                            </div>
                            <div class="span3">
                                <p class="custom_p">Окончание занятий:</p>
                                <a href="#">01.01.13</a>
                            </div>
                            <div class="span2">
                                <p class="custom_p">Начало вождения:</p>
                                <a href="#">01.01.13</a>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px">
                            <div class="span3">
                                <p class="custom_p">Преподаватель ПДД</p>
                                <a href="#">Шуверов В.В.</a>
                            </div>
                            <div class="span3">
                                <p class="custom_p">Преподаватель ТУ и ТО:</p>
                                <a href="#">Самозванцев Л.Л</a>
                            </div>
                            <div class="span2" style="width: 155px">
                                <p class="custom_p">Преподаватель ОПМТ:</p>
                                <a href="#">Самозванцев Л.Л</a>
                            </div>
                        </div>
                    </div>
                    <div class="well">
                        <div class="row">
                            <div class="span4">
                                <p class="custom_p">Директор автошколы:</p>
                                <a href="#">Самозванцев Л.Л</a>
                            </div>
                            <div class="span4">
                                <p class="custom_p">Водители - инструкторы:</p>
                                <a href="#">Шацкий И.А.</a>
                            </div>
                        </div>

                    </div>

                    <div class="well">
                        <div class="row">
                            <div class="span4">
                                <h5 class="header_block">Расписание занятий</h5>
                            </div>
                            <div class="span4">
                                <h5 class="header_block">Экзамен</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="span4">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>День недели</th>
                                        <th>С</th>
                                        <th>До</th>
                                        <th>Предмет</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><a href="#">Понедельник</a></td>
                                        <td><a href="#">17:00</a></td>
                                        <td><a href="#">20:00</a></td>
                                        <td><a href="#">ПДД</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Четверг</a></td>
                                        <td><a href="#">17:00</a></td>
                                        <td><a href="#">20:00</a></td>
                                        <td><a href="#">ТУ и ТО</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Пятница</a></td>
                                        <td><a href="#">17:00</a></td>
                                        <td><a href="#">20:00</a></td>
                                        <td><a href="#">ОПМТ</a></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" style="text-align: center">Расписание для группы не создано</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="span4">
                                <div class="row">
                                    <div class="span2">
                                        <label for="predatel">Пред. экз. комиссии</label>
                                        <input type="text" name="predatel" id="predatel" style="width: 130px"/>
                                        <label for="hui">Члены комиссии</label>
                                        <input type="text" name="hui1" id="hui" style="width: 130px"/>
                                        <input type="text" name="hui2" id="hui" style="width: 130px"/>

                                    </div>
                                    <div class="span2">
                                        <label for="predatel">Секретарь</label>
                                        <input type="text" name="predatel" id="predatel" style="width: 130px"/>
                                        <label for="predatel">Протокол номер</label>
                                        <input type="text" name="predatel" id="predatel" style="width: 130px"/>
                                        <div class="form-inline">
                                            <label for="predatel">от</label>
                                            <div class="input-append">
                                                <input id="end_driving" name="end_driving" type="text" style="width: 81px" placeholder="01.01.13">
                                                <span class="add-on"><i class="icon-calendar"></i></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>


            <!-- добавление -->
            <div class="tab-pane" id="tab2">
                <form action="#" method="post" accept-charset="utf-8" style="margin-bottom: 0" novalidate>
                    <div class="span9">
                        <div class="well">
                            <div class="row">
                                <div class="span3">
                                    <label for="start_lessons">Начало занятий:</label>
                                    <div class="input-append">
                                        <input id="start_lessons" name="start_lessons" type="text" style="width: 124px" placeholder="01.01.13">
                                        <span class="add-on"><i class="icon-calendar"></i></span>
                                    </div>
                                </div>
                                <div class="span3">
                                    <label for="end_driving">Окончание занятий:</label>
                                    <div class="input-append">
                                        <input id="end_driving" name="end_driving" type="text" style="width: 124px" placeholder="01.01.13">
                                        <span class="add-on"><i class="icon-calendar"></i></span>
                                    </div>
                                </div>
                                <div class="span2">
                                    <label for="start_drive">Начало вождения:</label>
                                    <div class="input-append">
                                        <input id="start_drive" name="start_drive" type="text" style="width: 124px" placeholder="01.01.13">
                                        <span class="add-on"><i class="icon-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="span3">
                                    <label for="teacher_pdd">Преподаватель ПДД</label>
                                    <select style="width: 165px" name="teacher_pdd" id="teacher_pdd">
                                        <option selected> --- </option>
                                        <option>Шуверов В.В.</option>
                                        <option>Шацкий И.А.</option>
                                        <option>Коротков С.А.</option>
                                        <option>Самозванцев Л.Л</option>
                                    </select>
                                </div>
                                <div class="span3">
                                    <label for="teacher_tu_and_to">Преподаватель ТУ и ТО:</label>
                                    <select style="width: 165px" name="teacher_tu_and_to" id="teacher_tu_and_to">
                                        <option selected> --- </option>
                                        <option>Самозванцев Л.Л</option>
                                        <option>Шацкий И.А.</option>
                                        <option>Коротков С.А.</option>
                                        <option>Шуверов В.В.</option>
                                    </select>
                                </div>
                                <div class="span2" style="width: 155px">
                                    <label for="teacher_opmt">Преподаватель ОПМТ:</label>
                                    <select style="width: 165px" name="teacher_opmt" id="teacher_opmt">
                                        <option selected> --- </option>
                                        <option>Шуверов В.В.</option>
                                        <option>Шацкий И.А.</option>
                                        <option>Коротков С.А.</option>
                                        <option>Самозванцев Л.Л</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="well">
                            <div class="row">
                                <div class="span4">
                                    <label for="start_lessons">Директор автошколы:</label>
                                    <div class="input-append">
                                        <input id="start_lessons" name="start_lessons" type="text" style="width: 205px" placeholder="">
                                        <span class="add-on"><i class="icon-user"></i></span>
                                    </div>
                                </div>
                                <div class="span4">
                                    <label for="start_lessons">Водители - инструкторы:</label>
                                    <div class="input-append">
                                        <select style="width: 225px" name="teacher_opmt" id="teacher_opmt">
                                            <option selected> --- </option>
                                            <option>Шуверов В.В.</option>
                                            <option>Шацкий И.А.</option>
                                            <option>Коротков С.А.</option>
                                            <option>Самозванцев Л.Л</option>
                                        </select>
                                        <a href="#" class="btn" style="margin-left: 15px"><i class="icon-plus"> Добавить</i></a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="well">
                            <div class="row">
                                <div class="span4">
                                    <h5 style="margin-top: 0">Расписание занятий</h5>
                                </div>
                                <div class="span4">
                                    <h5 style="margin-top: 0">Экзамен</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="span4">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>День недели</th>
                                            <th>С</th>
                                            <th>До</th>
                                            <th>Предмет</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Понедельник</td>
                                            <td>17:00</td>
                                            <td>20:00</td>
                                            <td>ПДД</td>
                                        </tr>
                                        <tr>
                                            <td>Четверг</td>
                                            <td>17:00</td>
                                            <td>20:00</td>
                                            <td>ТУ и ТО</td>
                                        </tr>
                                        <tr>
                                            <td>Пятница</td>
                                            <td>17:00</td>
                                            <td>20:00</td>
                                            <td>ОПМТ</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" style="text-align: center">Расписание для группы не создано</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="span4">
                                    <div class="row">
                                        <div class="span2">
                                            <label for="predatel">Пред. экз. комиссии</label>
                                            <input type="text" name="predatel" id="predatel" style="width: 130px"/>
                                            <label for="hui">Члены комиссии</label>
                                            <input type="text" name="hui1" id="hui" style="width: 130px"/>
                                            <input type="text" name="hui2" id="hui" style="width: 130px"/>

                                        </div>
                                        <div class="span2">
                                            <label for="predatel">Секретарь</label>
                                            <input type="text" name="predatel" id="predatel" style="width: 130px"/>
                                            <label for="predatel">Протокол номер</label>
                                            <input type="text" name="predatel" id="predatel" style="width: 130px"/>
                                            <div class="form-inline">
                                                <label for="predatel">от</label>
                                                <div class="input-append">
                                                    <input id="end_driving" name="end_driving" type="text" style="width: 80px" placeholder="01.01.13">
                                                    <span class="add-on"><i class="icon-calendar"></i></span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <!-- <input type="hidden" name="csrf" value="<?/*=Security::token()*/?>"/>-->
                </form>
            </div>
        </div>


    </div>

</div>

