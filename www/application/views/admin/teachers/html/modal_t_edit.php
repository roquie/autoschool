<!-- Modal for EDIT one prepod -->
<style type="text/css">
    form.edit_teacher div.modal-body {
        padding-left: 40px;
    }
    form.edit_teacher div.fio input {
        width: 123px;
    }
    form.edit_teacher textarea {
        width: 448px;
        resize: none;
    }
    form.edit_teacher input.ok {
        margin-left: 26px;
    }
</style>
<div id="t_edit" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h5>Редактировать преподавателя</h5>
    </div>
    <form class="edit_teacher" action="#" method="post" accept-charset="utf-8" novalidate>
        <div class="modal-body">
                <div class="row fio">
                    <div class="span2">
                        <label for="family_name">Фамилия</label>
                        <input id="family_name" type="text" name="family_name" placeholder="Петров"/>
                    </div>

                    <div class="span2">
                        <label for="first_name">Имя</label>
                        <input id="first_name" type="text" name="first_name" placeholder="Иван"/>
                    </div>

                    <div class="span2">
                        <label for="daddy_name">Отчество</label>
                        <input id="daddy_name" type="text" name="daddy_name" placeholder="Сидорович"/>
                    </div>
                </div>
                <div class="row">
                    <div class="span3">
                        <label for="tel">Телефон</label>
                        <input id="tel" type="text" name="tel" placeholder="89261234567"/>
                    </div>

                    <div class="span3">
                        <label for="address">Адрес</label>
                        <input id="address" type="text" name="address" placeholder="89261234567"/>
                    </div>
                </div>
                <label for="data">Данные</label>
                <textarea name="data" id="data" rows="5"></textarea>
            <input type="hidden" name="csrf" value="<?=Security::token()?>"/>
        </div>
        <div class="modal-footer">
            <input type="submit" name="submit" class="btn btn-primary pull-left ok" data-dismiss="modal" aria-hidden="true" value="Готово"/>
        </div>
    </form>
</div>