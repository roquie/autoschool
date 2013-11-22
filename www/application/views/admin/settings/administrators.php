<div class="row admins">
    <div class="span4">

        <!--вкладка пользователи-->

        <div class="well well-large newUser">
            <!--
                FORM NEW USER
            -->
            <form class="_admins_form" data-callback="add_admin"  action="<?=URL::site('admin/administrators/create')?>" method="post" novalidate> <!--id="form1" data-url=""-->
                <legend>Новый администратор</legend>
                <label>Введите E-mail</label>
                <input name="email" type="email" class="placeholder" placeholder="example@gmail.com" id="email">
                <input type="submit" class="btn btn-success" value="Добавить">
            </form>

        </div>
    </div>
    <div class="span8">
        <div class="well well-large" style="height: 280px">
            <legend>Список администраторов</legend>
            <table id="table_admins" class="table">
                <thead>
                <tr>
                    <td style="">
                        <strong>#</strong>
                    </td>
                    <td>
                        <strong>Email</strong>
                    </td>
                    <td>
                        <strong>Дата и время</strong>
                    </td>
                    <td>
                        <strong>Удалить</strong>
                    </td>
                </tr>
                </thead>

                <tbody>
                <input type="hidden" id="url" value="<?=URL::site('admin/administrators/delete/')?>"/>
                <?foreach ($all_admins as $admins):?>
                    <tr>
                        <td><?=$admins->id?></td>

                        <td>
                            <?=Security::xss_clean($admins->email)?>
                        </td>
                        <td>
                            <?=$admins->datetime?>
                        </td>
                        <td>
                            <a data-callback="del_admin" class="_admins_link" data-url="<?=URL::site('admin/administrators/delete/'.$admins->id)?>" href="#"><i class="icon-trash icon-large"></i></a>
                        </td>
                    </tr>
                <?endforeach?>
                </tbody>


            </table>

        </div>
    </div>



</div>