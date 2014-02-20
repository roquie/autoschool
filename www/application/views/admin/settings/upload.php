<div class="row" style="overflow-x: hidden">
    <div class="span8" >
        <div class="well" style="height: 300px;">
            <legend>Файлы сайта</legend>
            <table class="table">
                <thead>
                <tr>
                    <td style="width: 10px">
                        <strong>#</strong>
                    </td>
                    <td style="padding-left: 40px;width: 20px">
                        <strong>Выбрать</strong>
                    </td>
                    <td style="padding-left: 60px; width: 60px">
                        <strong>Имя</strong>
                    </td>
                    <td style="padding-left: 150px; width: 60px">
                        <strong>Описание</strong>
                    </td>
                </tr>
                </thead>

                <tbody>

                <?foreach ($upload_files as $file):?>
                    <tr>
                        <td><?=$file->id?></td>

                        <td style="padding-left: 45px;width: 20px">
                            <input type="radio" value="<?=$file->id?>" id="rd_file" name="rd_file" />
                        </td>
                        <td>
                            <?=$file->filename?>
                        </td>
                        <td>
                            <?=$file->desc?>
                        </td>
                    </tr>
                <?endforeach?>


                </tbody>


            </table>


        </div>

    </div>
    <div class="span4">
        <script type="text/javascript">
            $(function(){
                $('body').on('click', '#rd_file', function(){
                    $('#type_file').val(
                        $('#rd_file:checked').val()
                    );
                });
            });
        </script>
        <script>
            var FileAPI = {
                debug: true
                , staticPath: '<?=URL::site('js/FileAPI-dev/dist')?>'
            };
        </script>
        <script src="<?=URL::site('js/FileAPI-dev/dist/FileAPI.js')?>"></script>
        <script src="<?=URL::site('js/FileAPI-dev/plugins/FileAPI.id3.js')?>"></script>
        <script src="<?=URL::site('js/FileAPI-dev/plugins/FileAPI.exif.js')?>"></script>
        <style>
            .b-button {
                display: inline-block;
                *display: inline;
                *zoom: 1;
                position: relative;
                overflow: hidden;
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
            .b-button .progress-bar {
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                opacity: .5;
                position: absolute;
            }
            .b-button .progress-bar .bar {
                width: 0;
                top: 0;
                left: 0;
                bottom: 0;
                position: absolute;
                background-color: #fff;
            }
        </style>
        <div class="well" style="height: 300px;">
            <legend>Загрузить</legend>
            <div class="b-button js-fileapi-wrapper" style="margin-bottom: 10px; margin-left: 60px">
                <div class="browse">
                    <a class="b-button__text btn btn-success" href="#" data-url="<?=Route::url('admin.ajax', array('controller'=>'settings', 'action' =>'upload'))?>">Загрузить файл</a>
                    <input name="files" class="b-button__input" type="file"/>
                    <input type="hidden" id="type_file" name="type_file"/>
                </div>
                <div class="js-upload btn btn-success" style="display: none">
                    <div class="progress-bar">
                        <div class="js-progress bar"></div>
                    </div>
                    <span class="btn-txt">Загрузка (<span class="js-size"></span>)</span>
                </div>
            </div>

            <script>
                jQuery(function ($) {
                    if( !(FileAPI.support.cors || FileAPI.support.flash) ) {
                        $('.b-button').hide();
                    }

                    $('input[type="file"]').on('change', function (evt) {
                        var files = FileAPI.getFiles(evt);
                        onFiles(files, $('.b-button__text'));
                        FileAPI.reset(evt.currentTarget);
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
                        start: function () {
                            if( !FU.active && (FU.active = FU.files.length > FU.index) ) {
                                FU._upload(FU.files[FU.index]);
                            }
                        },
                        _upload: function (file) {
                            if( file ) {
                                file.xhr = FileAPI.upload({
                                    url: FU.url,
                                    files: {
                                        file: file
                                    },
                                    data : {
                                        type_file : $('#type_file').val(),
                                        csrf : $('.csrf').val()
                                    },
                                    upload: function () {
                                        $('.browse').hide();
                                        $('.js-upload').css({ opacity: 0 }).show().animate({ opacity: 1 }, 100);
                                    },
                                    fileprogress: function (evt) {
                                        $('.js-progress').css('width', evt.loaded/evt.total*100+'%');
                                        $('.js-size').text((evt.loaded/evt.total*100).toFixed(2));
                                    },
                                    complete: function (err, xhr) {
                                        var res = JSON.parse(xhr.responseText);
                                        if (res.status == 'error' || res.status == 'success') {
                                            noty({
                                                type : res.status,
                                                message : res.msg
                                            });
                                        }
                                        $('.csrf').val(res.csrf);
                                        $('.browse').show();
                                        $('.js-upload').hide();
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
                                noty({
                                    type : 'error',
                                    message : 'Максимальный размер 5Мб'
                                });
                            }
                            else if( file.size === void 0 ) {
                                $('.b-button').hide();
                            }
                            else {
                                FU.add(file, obj.data('url'));
                                FU.start();
                            }
                        });
                    }
                });
            </script>
        </div>
    </div>
</div>