<?=HTML::script('http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css')?>
<?=HTML::script('js/settings.js')?>

<div class="container">

    <h1><small>Настройки</small></h1>
    <div class="tabbable"> <!-- Only required for left/right tabs -->
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab1" data-toggle="tab">Пользователи</a></li>
            <li><a href="#tab3" data-toggle="tab" id="act" >Аккаунт Google Drive</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab1">
                <div class="row" style="overflow: hidden">
                    <div class="span4">

                        <!--вкладка пользователи-->

                        <div class="well well-large newUser">
                            <!--
                                FORM NEW USER
                            -->
                            <form action="" method="post" id="form1" data-url="<?=URL::site('admin/settings/newUser/')?>">
                                <legend>Новый пользователь</legend>
                                <label>Введите E-mail</label>
                                <input name="email" type="email" class="placeholder" data-value="example@gmail.com" id="email">
                                <input type="submit" class="btn btn-success" value="Добавить">
                            </form>

                        </div>
                    </div>
                    <div class="span8">
                        <div class="well well-large editUser">
                            <legend>Редактировать пользователя</legend>
                            <div class="row">
                                <div class="span7" style="padding-left: 27%;">
                                    <!--
                                        FORM 1 EDIT USER
                                    -->
                                    <form action="" method="post" id="form2" data-url="<?=URL::site('admin/settings/selectUser/')?>">
                                        <label>Введите E-mail</label>
                                        <input name="email" type="email" id="autocomplete" class="placeholder" data-value="example@gmail.com">
                                        <br>
                                        <input type="submit" class="btn btn-success" value="ОК">
                                    </form>
                                </div>

                                <div class="span7">
                                    <!--
                                        FORM 2 EDIT USER
                                    -->
                                    <form action="" method="post" id="form3" class="hide" data-url="<?=URL::site('admin/settings/editUser/')?>">
                                        <div class="span3">
                                            <label>Имя</label>
                                            <input name="name" id="name" type="text" class="placeholder" data-value="Текущее имя">
                                            <br>
                                            <label>Фамилия</label>
                                            <input name="fam" id="fam" type="text" class="placeholder" data-value="Текущая фамилия">
                                        </div>
                                        <div class="span3" style="padding-left: 40px">
                                            <label>E-mail пользователя</label>
                                            <input name="email" id="editEmail" type="text" class="placeholder" data-value="Текущее мыло">
                                            <input type="hidden" name="id" id="id">

                                            <div class="pull-left" style="margin-top: 0px">

                                                <button class="btn btn-success">Применить</button>
                                                <button id="reset" class="btn">Отменить</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="span12">
                        <div class="well well-large">
                            <legend>Список администраторов</legend>
                            <table class="table table-bordered" id="tableUser" style="width: 100%">
                                <thead>
                                <tr>
                                    <td>
                                        <strong>#</strong>
                                    </td>
                                    <td>
                                        <strong>Имя</strong>
                                    </td>
                                    <td>
                                        <strong>Фамилия</strong>
                                    </td>

                                    <td>
                                        <strong>Email</strong>
                                    </td>
                                    <td>
                                        <strong>Удалить</strong>
                                    </td>
                                </tr>
                                </thead>
                                <tbody>
                                <?foreach($all_users as $user):?>
                                    <tr id="<?=$user->id?>">
                                        <td>
                                            <?=$user->id?>
                                        </td>
                                        <td>
                                            <?=$user->first_name?>
                                        </td>
                                        <td>
                                            <?=$user->last_name?>
                                        </td>
                                        <td>
                                            <?=$user->email?>
                                        </td>

                                        <td style="text-align: center">
                                            <a href="#" class="del" data-id="<?=$user->id?>"><i class="icon-trash"></i></a>
                                        </td>
                                    </tr>
                                <?endforeach?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

            <!-- конец вкладке  пользователи-->

            <!--вкладка гугло драйва-->
            <div class="tab-pane" id="tab3" style="position: relative">
                <div class="row" style="overflow: hidden">
                    <div class="span4">
                        <div class="well well-large" style="height: 300px;">
                            <!--
                                FORM Account Google Drive
                            -->
                            <form action="#" method="post" id="form4" data-url="<?=URL::site('admin/settings/account_google')?>">
                                <legend>Аккаунт для Google Drive</legend>
                                <label for="login">Введите ваш E-mail</label>
                                <input name="login" id="login" type="text" class="placeholder" style="width: 89%" data-value="<?=$googleAccount['login']?>" disabled>
                                <label for="password">Введите ваш пароль</label>
                                <input name="password" id="password" style="width: 89%" type="password" class="placeholder" data-value="<?=$googleAccount['password']?>" disabled><br>
                                <input type="submit" class="btn btn-success" value="Применить">
                                <span id="block">
                                    <input type="button" class="btn unblock" value="Разблокировать">
                                    <input type="button" class="btn block" value="Заблокировать" style="display: none;">
                                </span>
                            </form>

                        </div>
                    </div>

                    <div class="span8"  style="position: relative">
                        <div class="well well-large" id="history" style="height: 301px">
                            <legend>История изменений</legend>
                            <style>
                                .tbody-scroll {
                                    height: 200px;
                                    overflow-y: scroll;
                                    padding-bottom: 0;
                                    margin-top: -20px;
                                }
                            </style>
                            <table class="table">
                                <thead class="thead-fix">
                                <tr>
                                    <td style="width: 15px">
                                        <strong>#</strong>
                                    </td>
                                    <td style="width: 200px; text-align: center">
                                        <strong>Дата и время</strong>
                                    </td>

                                    <td style="width: 300px; text-align: center">
                                        <strong>Email</strong>
                                    </td>
                                </tr>
                                </thead>
                            </table>
                            <div class="tbody-scroll">
                                <table class="table" id="tableUser">
                                    <tbody>
                                    <?foreach ($googleAccountAllRecords as $googleAccountAllRecord):?>
                                    <tr>
                                        <td style="width: 15px"><?=$googleAccountAllRecord->id?></td>
                                        <td style="width: 200px; text-align: center">
                                            <?=$googleAccountAllRecord->date.' '.$googleAccountAllRecord->time?>
                                        </td>
                                        <td style="width: 288px; text-align: center; cursor: pointer">
                                            <span id="emailHistory"><?=Security::xss_clean($googleAccountAllRecord->login)?></span>
                                        </td>
                                    </tr>
                                    <?endforeach?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- конец вкладке гугло драйва-->



        </div>
    </div>

</div>

<!--модалка -->
<div class="modal hide fade">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3>Удаление пользователя</h3>
    </div>
    <div class="modal-body">
        <p>Вы действительно хотите удалить пользователя?</p>
    </div>
    <div class="modal-footer">
        <a href="#" id="yes" class="btn btn-success" data-url="<?=URL::site('admin/settings/delUser/')?>">Да</a>
        <a href="#" id="no" class="btn">Нет</a>
    </div>
</div>
<!-- конец модалке -->

<script>
    $().ready(function() {
        $('.placeholder').placeholder();
    });
</script>