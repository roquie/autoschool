<div class="row admins">
    <div class="span4">

        <!--вкладка пользователи-->

        <div class="well well-large newUser">
            <!--
                FORM NEW USER
            -->
            <form action="<?=URL::site('admin/administrators/create|check-email')?>" method="post" > <!--id="form1" data-url=""-->
                <legend>Новый администратор</legend>
                <label>Введите E-mail</label>
                <input name="email" type="email" class="placeholder" data-value="example@gmail.com" id="email">
                <input type="submit" class="btn btn-success" value="Добавить">
            </form>

        </div>
    </div>
    <div class="span8">
        <div class="well well-large" style="height: 280px">
            <legend>Список администраторов</legend>
            <table class="table">
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
                            <!-- data-url=""--> <a href="<?=URL::site('admin/administrators/delete/'.$admins->id)?>"><i class="icon-trash icon-large"></i></a>
                        </td>
                    </tr>
                <?endforeach?>
                </tbody>


            </table>

        </div>
    </div>



</div>