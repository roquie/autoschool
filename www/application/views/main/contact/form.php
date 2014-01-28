<style>
    .b-button {
        display: inline-block;
        *display: inline;
        *zoom: 1;
        position: relative;
        overflow: hidden;
        cursor: pointer;
    }
    .b-button__input {
        cursor: pointer;
        opacity: 0;
        filter:progid:DXImageTransform.Microsoft.Alpha(opacity=0);
        top: 0px;
        right: -50px;
        font-size: 50px;
        position: absolute;
    }
</style>
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
        <div class="span2 file_upload" style="display: none; margin-bottom: 4px;">
            <div class="input-append">
                <div style="width: 170px" class="uneditable-input">
                    <i class="icon-file"></i>
                    <span class="text"></span>
                </div>
                <a href="#" class="btn clearFile"><i class="icon-trash"></i></a>
            </div>
        </div>
        <div class="b-button js-fileapi-wrapper" style="margin-bottom: 10px; margin-left: 101px">
            <a class="b-button__text btn" href="#" data-url="<?=URL::site('main/mail/upload')?>">Загрузить файл</a>
            <input name="files" class="b-button__input" type="file"/>
            <input type="hidden" name="file_name" id="file_name"/>
        </div>

        <button type="submit" style="margin-bottom: 4px; margin-left: 101px" class="btn btn-primary span2 btn_send">
            Отправить
        </button>
    </div>
</form>
<script type="text/javascript">
    jQuery(function ($) {
        if( !(FileAPI.support.cors || FileAPI.support.flash) ) {
            $('.b-button').hide();
        }

        $(document).on('mouseenter mouseleave', '.b-button', function (evt) {
            $(evt.currentTarget).toggleClass('b-button_hover', evt.type == 'mouseenter');
        });

/*        $('.btn').on('click', function() {
            onFiles(FileAPI.getFiles($('input[type="file"]')));
            FileAPI.reset(evt.currentTarget);
        });*/

        $('input[type="file"]').on('change', function (evt) {
            $('.b-button').hide();
            var f = FileAPI.getFiles(evt);
            $('.file_upload').show().find('.text').text(f[0].name);
            $('#file_name').val(f[0].name);
        });

        $('body').on('click', '.clearFile', function(e) {
            e.preventDefault();
            FileAPI.reset($('input[type="file"]'));
            $('.b-button').show();
            $('.file_upload').hide();
            $('#file_name').val('');
        });

        $('#send').on('submit', function(evt) {
            evt.preventDefault();
            if (validate($(this), true)) {
                var btn = $('.btn_send');
                btn.html('<i class="icon icon-refresh icon-spin"></i> Отправка');

                //@todo сюда всунуть загрузку файлов
                onFiles(FileAPI.getFiles($('input[type="file"]')), $('.b-button__text'));
            }
        });

        var FU = {
            files: [],
            index: 0,
            active: false,
            url : '',
            add: function (file, url) {
                FU.files.push(file);
                if (FU.url == '') {
                    FU.url = url;
                }
            },
            start: function (){
                if( !FU.active && (FU.active = FU.files.length > FU.index) ) {
                    FU._upload(FU.files[FU.index]);
                }
            },
            _upload: function (file) {
                if( file ) {
                    file.xhr = FileAPI.upload({
                        url: FU.url,
                        files: { file: file },
                        complete: function (err, xhr) {
                            var res = JSON.parse(xhr.responseText);
                            if (res.status == 'success') {
                                send_ajax($('#send'), function(response) {
                                    var $this = $('#send');
                                    // Если пустые поля
                                    if (response.status === 'empty') {
                                        var element;
                                        $.each(response.data, function(i, v) {
                                            element = $this.find('input[name="'+ v +'"], textarea[name="'+ v +'"]').addClass('error');
                                        });
                                        $('.btn_send').html('Отправка');
                                    }
                                    // Если получена ошибка или всё нормально
                                    if (response.status === 'error') {
                                        noty({
                                            type : response.status,
                                            message : response.msg
                                        });
                                        $('.btn_send').html('Отправка');
                                    }
                                    if (response.status === 'success') {
                                        noty({
                                            type : response.status,
                                            message : response.msg
                                        });
                                        reload();
                                        $this[0].reset();
                                        FileAPI.reset($('input[type="file"]'));
                                        $('.b-button').show();
                                        $('.file_upload').hide();
                                        $('#file_name').val('');
                                        $this.find('.placeholder').placeholder('reset');
                                        $('.btn_send').html('Отправка');
                                    }
                                });
                            }
                            if (res.status == 'error') {
                                noty({
                                    type : res.status,
                                    message : 'Ошибка при загрузке файла'
                                });
                                $('.btn_send').html('Отправка');
                            }
                            FU.index++;
                            FU.active = false;
                            FU.start();
                        }
                    });
                }
            }
        };
        function onFiles(files, obj) {
            FileAPI.each(files, function (file) {
                if( file.size >= 5*FileAPI.MB ){
                    alert('Sorrow.\nMax size 5MB')
                }
                else if( file.size === void 0 ) {
                    $('.b-button').hide();
                }
                else {
                    FU.add(file, obj.data('url'));
                    FU.start();
                    //FU.url = obj.data('url');//'http://autoschool.ru/main/mail/upload'
                    alert(FU.url);
                }
            });
        }
    });
</script>