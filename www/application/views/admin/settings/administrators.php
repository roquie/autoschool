<?=HTML::script('js/ajax.js')?>
<script>


    $(function() {

        $('._admins').ajaxForm({
            errorValidate : function() {
                noty({
                    type : 'error',
                    message : 'Ошибки заполнения полей'
                });
            },
            worked : function() {
                noty({
                    type:'error',
                    title:'Ошибка',
                    message:'Идёт обработка данных...'
                });
            },
            defaultCallback : function(response) {
                if (response.status == 'error' || response.status == 'success') {
                    noty({
                        type : response.status,
                        message : response.msg
                    });
                }
            },
            functions : {
                add_admin : function(response) {
                    if (response.status === 'error') {
                        noty({
                            type : response.status,
                            message : response.msg
                        });
                    }
                    if (response.status === 'success') {

                        var
                            date = new Date(),
                            tr = $('<tr></tr>'),
                            sharp = $('<td></td>').append(response.data.id),
                            Email = $('<td></td>').append(response.data.email),
                            dateTime = $('<td></td>').append(date.toLocaleString()), //
                            del = $('<td></td>').append('<a data-callback="del_admin" class="_admins" data-url="<?=URL::site('admin/administrators/delete/')?>/'+ response.data.id +'?return=true" href="#"><i class="icon-trash icon-large"></i></a>');

                        tr.append(sharp)
                        tr.append(Email)
                        tr.append(dateTime)
                        tr.append(del)
                        tr.prependTo('tbody', '#table_admins')

                        noty({
                            type : response.status,
                            message : response.msg
                        });
                    }
                },
                del_admin : function(response) {
                    if (response.status === 'error') {
                        noty({
                            type : response.status,
                            message : response.msg
                        });
                    }
                    if (response.status === 'success') {

                        console.log(response.data.id);
                        //$('tr:eq(1)').remove();

                        noty({
                            type : response.status,
                            message : response.msg
                        });
                    }
                }
            }
        });


    });


</script>
<div class="row admins">
    <div class="span4">

        <!--вкладка пользователи-->

        <div class="well well-large newUser">
            <!--
                FORM NEW USER
            -->
            <form class="_admins" data-callback="add_admin"  action="<?=URL::site('admin/administrators/create|check-email?return=true')?>" method="post" novalidate> <!--id="form1" data-url=""-->
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
                            <a data-callback="del_admin" class="_admins" data-url="<?=URL::site('admin/administrators/delete/'.$admins->id.'?return=true')?>" href="#"><i class="icon-trash icon-large"></i></a>
                        </td>
                    </tr>
                <?endforeach?>
                </tbody>


            </table>

        </div>
    </div>



</div>