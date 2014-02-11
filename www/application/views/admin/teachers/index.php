<?=HTML::style('css/admin/teachers.css')?>

<div class="container">
    <div class="row">
        <div class="span4 pull-left">
            <h1><small>Преподаватели</small></h1>
        </div>
        <div class="span8 btn_actions">
            <div class="pull-right">
                <a href="<?=URL::site('/admin/teachers/all')?>" class="btn" rel="tooltip" data-placement="bottom" title="Вся информация"><i class="icon-th-list"></i></a>
                <div class="btn-group">
                    <a href="<?=URL::site('/admin/teachers/pdf')?>" target="_blank" rel="tooltip" data-placement="bottom" title="Распечатать список преподавателей" class="btn"><i class="icon-print"></i></a>
                    <a href="<?=URL::site('/download/teachers/name')?>" rel="tooltip" data-placement="bottom" title="Загрузить список преподавателей" class="btn btn-success"><i class="icon-download"></i></a>
                    <a href="#" rel="tooltip" data-placement="bottom" title="Открыть список преподавателей" class="btn btn-info"><i class="icon-eye-open"></i></a>
                </div>
            </div>
        </div>
    </div>
        <div class="row">
           <div class="span6 t_list">
               <div class="well">
                   <h5 class="header_block">Список всех</h5>
                   <!--@todo: ЗАМЕНИТЬ прокрутку, чтобы хэдер в табл был на месте-->
                   <div style="overflow-y: scroll; height: 330px; padding-right: 18px">
                       <table class="table table-bordered">
                           <thead>
                           <tr>
                               <th>#</th>
                               <th>Выбор</th>
                               <th style="width: 170px">Фамилия И.О.</th>
                               <th>Редакт.</th>
                               <th>Удал.</th>
                           </tr>
                           </thead>
                           <tbody>
                           <?for($i=1; $i<=20; ++$i):?>
                               <tr>
                                   <td><?=$i?></td>
                                   <!-- http://stackoverflow.com/questions/9709209/html-select-only-one-checkbox-in-a-group -->
                                   <td><input style="display: block; margin: 5px auto" type="checkbox"/></td>
                                   <td>Петров Г.А.</td>
                                   <td><a href="#t_edit" data-toggle="modal" style="display: table; margin: 0 auto" class="badge"><i class="icon-pencil"></i></a></td>
                                   <td><a href="#t_delete" data-toggle="modal" style="display: table; margin: 0 auto" class="badge badge-important"><i class="icon-remove"></i></a></td>
                               </tr>
                           <?endfor?>
                           <!--<tr>
                               <td colspan="4" style="text-align: center">Преподаватели не найдены, используйте форму справа от вас для добавления</td>
                           </tr>-->
                           </tbody>
                       </table>
                   </div>

               </div>

           </div>
            <div class="span6 t_add">
                <div class="well">
                    <h5 class="header_block">Добавить нового</h5>

                    <form action="<?=URL::site('/admin/teachers/pdd')?>" method="post" accept-charset="utf-8" novalidate>
                        <div class="row">
                            <div class="span3">
                                <label for="teacher_opmt">Профиль:</label>
                                <div class="input-append">
                                    <select class="t_opmt" name="teacher_opmt" id="teacher_opmt"> <!--вставь select наш кастомный-->
                                        <option value="all" selected> Выводить всех </option>
                                        <option value="pdd">Преподаватели ПДД</option>
                                        <option value="tu_and_to">Преподаватели ТУ и ТО</option>
                                        <option value="opmt">Преподаватели ОПМТ</option>
                                        <option value="drivers">Водители - инструкторы</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row t_names">
                            <div class="span2">
                                <label for="t_famil">Фамилия:</label>
                                <input type="text" name="famil" id="t_famil" placeholder="Петров"/>
                            </div>
                            <div class="span2">
                                <label for="t_name">Имя:</label>
                                <input type="text" name="name" id="t_name" placeholder="Иван"/>
                            </div>
                            <div class="span2">
                                <label for="t_ot4estvo">Отчество:</label>
                                <input type="text" name="ot4estvo" id="t_ot4estvo" placeholder="Андреевич"/>
                            </div>
                        </div>
                        <div class="row t_contacts">
                            <div class="span3">
                                <label for="t_address">Адрес:</label>
                                <input type="text" name="address" id="t_address" placeholder="Москва, ул. Малайка д.3"/>
                            </div>
                            <div class="span2">
                                <label for="t_tel">Телефон:</label>
                                <input type="text" name="tel" id="t_tel"/> <!--вставь ту маску с подачи заявки-->
                            </div>
                        </div>

                        <label for="t_data">Данные:</label>
                        <textarea name="data" id="t_data" rows="3"></textarea>

                        <input type="hidden" name="csrf" value="<?=Security::token()?>"/>

                        <input type="submit" class="btn btn-success" value="Добавить"/>
                        <input type="reset" class="btn" value="Очистить форму"/>
                    </form>
                </div>

            </div>
        </div>
</div>

<?=View::factory('admin/html/modal_t_delete')?>
<?=View::factory('admin/teachers/html/modal_t_edit')?>




