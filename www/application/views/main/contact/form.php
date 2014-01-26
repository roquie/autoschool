<form id="send" action="<?=URL::site('main/mail/send')?>" method="post" enctype="multipart/form-data" accept-charset="utf-8">
    <input id="c_name" name="name" type="text" class="span2 in-name" data-placement="top" data-req="true" placeholder="Имя">
    <input id="c_email" name="email" type="text" class="input-large" data-placement="top" data-req="true" placeholder="Email адрес">
    <span style="position: relative">
        <textarea id="c_msg" name="message" class="span5" rows="5" data-req="true" placeholder="Сообщение"></textarea>
    </span>
    <div class="row">
        <div class="span2">
            <?=$captcha?><br><input type="text" name="captcha" style="margin-top: 5px;width: 117px" placeholder="проверка" data-req="true"/>
        </div>
        <div class="span3 pull-left">
            <!--class="_file_up"-->
                <div class="fileupload fileupload-new" style="width: 100px" data-provides="fileupload">
                    <div class="input-append">
                        <div style="width: 110px" class="uneditable-input"><i class="icon-file fileupload-exists"></i>
                            <span class="fileupload-preview"></span>
                        </div>
                        <span class="btn btn-file">
                            <span class="fileupload-new"><i class="icon-upload-alt"></i></span>
                            <span class="fileupload-exists"><i class="icon-pencil"></i></span>
                            <input type="file" name="files"/>
                        </span>
                        <a href="#" class="btn fileupload-exists" data-dismiss="fileupload"><i class="icon-trash"></i></a>
                    </div>
                </div>
        </div>
        <button type="submit" style="margin-bottom: 4px; margin-left: 101px" class="btn btn-primary span2 btn_send">
            Отправить
        </button>
    </div>
</form>