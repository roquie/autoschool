<!-- Modal for DELETE -->
<div id="t_delete" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h5>Удаление</h5>
    </div>
    <div class="modal-body">
        <p>Вы действительно этого хотите?</p>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn btn-danger pull-left _admins_link" data-callback="delete_nat_edu" data-params="csrf" id="delete" data-dismiss="modal" aria-hidden="true">Удалить</a>
        <input type="hidden" name="csrf" value="<?=Security::token()?>" id="csrf" class="csrf"/>
        <a href="#" class="btn pull-left" data-dismiss="modal" aria-hidden="true">Отмена</a>
    </div>
</div>