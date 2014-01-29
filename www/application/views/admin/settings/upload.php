<div class="row" style="overflow-x: hidden">
    <div class="span8" >
        <div class="well" style="height: 300px;">
            <?=HTML::style('css/vendor/bootstrap-fileupload.css')?>
            <?=HTML::script('js/vendor/bootstrap-fileupload.min.js')?>
            <script type="text/javascript">
                $(function(){
                    $('.fileupload').fileupload();
                });
            </script>
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
        <div class="well" style="height: 300px;">
            <legend>Загрузить</legend>
            <p>Тут текст о том, что надо нажать сначала на тип файла слева, а потом его загрузить</p>
            <!--class="_file_up"-->    <form  action="<?=Route::url('admin.ajax', array('controller'=>'settings', 'action' =>'upload'))?>" method="post" enctype="multipart/form-data">
                <div class="fileupload fileupload-new" data-provides="fileupload">
                    <div class="input-append">
                        <div style="width: 170px" class="uneditable-input"><i class="icon-file fileupload-exists"></i>
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
                <input type="hidden" id="type_file" name="type_file"/>
                <input type="submit" id="submit" class="btn btn-success" value="Отправить"/>
            </form>
        </div>
    </div>
</div>



</div>