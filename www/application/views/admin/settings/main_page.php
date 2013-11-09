<div class="row" style="overflow-x: hidden">
    <div class="span4">
        <div class="well" style="height: 300px;">
            <div style="padding: 15px">
                <form action="<?=URL::site('admin/settings/noSmtp')?>" method="POST" data-url="">
                    <div class="check active emails">
                        Использовать SMTP
                        <input type="checkbox" name="smtp" checked/>
                    </div>
                </form>
                <form style="padding: 0 20px 20px 0; width: 220px; padding-bottom: 50px" action="<?=URL::site('admin/settings/smtp')?>" method="post" > <!-- id="form4" data-url="" -->
                    <label for="login">E-mail:</label>
                    <input name="login" id="login" type="text" placeholder="example@gmail.com">
                    <label for="password">Пароль:</label>
                    <input name="password" id="password" type="password" placeholder="Пароль"><br>
                    <input type="submit" class="btn btn-info pull-right" value="Готово">
                </form>
            </div>

        </div>
    </div>

    <div class="span4" >
        <div class="well" style="height: 300px;">
            <?=HTML::style('css/vendor/bootstrap-fileupload.css')?>
            <?=HTML::script('js/vendor/bootstrap-fileupload.min.js')?>
            <script type="text/javascript">
                $(function(){
                    $('.fileupload').fileupload();
                });
            </script>
            <div style="padding: 15px">
                <p style="margin: 0">Вы можете <b>заменить</b> следующие файлы для скачивания:</p>
                <ol style="list-style: none">
                    <li>Zaivlenie.doc</li>
                    <li>Dogovor.doc</li>
                    <li>kvitanciya.doc</li>
                    <li>license-0000540.pdf</li>
                </ol>
                <div class="fileupload fileupload-new" data-provides="fileupload">
                    <div class="input-append">
                        <div style="width: 170px" class="uneditable-input"><i class="icon-file fileupload-exists"></i>
                            <span class="fileupload-preview"></span>
                        </div>
                                    <span class="btn btn-file">
                                        <span class="fileupload-new"><i class="icon-upload-alt"></i></span>
                                        <span class="fileupload-exists"><i class="icon-pencil"></i></span>
                                        <input type="file" />
                                    </span>
                        <a href="#" class="btn fileupload-exists" data-dismiss="fileupload"><i class="icon-trash"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="span4">
        <div class="well" style="height: 300px;">

        </div>
    </div>


</div>