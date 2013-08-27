<?=HTML::style('css/showTree.css')?>


<div class="container">
    <h1><small>Просмотр и загрузка</small></h1>
            <div class="well">
                <legend>Загруженные файлы</legend>
                <div class="row">
                    <ul class="unstyled">
                        <?foreach($downloadedFiles as $downloadedFile):?>
                        <li>
                            <a href="#" class="jquery-tree excel span5"><?=$downloadedFile?></a>
                            <a href="<?=URL::site('uploads_old/downloaded/'.$downloadedFile)?>" class="jquery-tree download" rel="tooltip" title="Скачать"></a>&nbsp;&nbsp;
                            <a href="<?=URL::site('admin/papers/view/?vedomost='.$downloadedFile)?>" class="jquery-tree excel-view" rel="tooltip" title="Открыть"></a>
                        </li>
                        <?endforeach?>
                    </ul>
                </div>
                <hr>
                <div id="upload" class="btn"><span class="icon-plus"></span></div><span id="status" ></span>
            </div>
</div>


<?=HTML::script('js/vendor/ajaxupload.3.5.js')?>
<?=HTML::script('js/papers.js')?>
<?=HTML::script('js/vendor/showtree.jquery.js')?>
<script>
    $().ready(function() {
        $('#tree_one').showTree();
        var btnUpload=$('#upload');
        var status=$('#status');
        new AjaxUpload(btnUpload, {
            action: '/admin/papers/upload_file',
            name: 'uploadfile',
            onSubmit: function(file, ext){
                if (! (ext && /^(xls,xlsx,doc,docx,rtf)$/.test(ext))){
                    // extension is not allowed
                    noty({
                        text : 'Файлы доступные для загрузки: *.xls, *.xlsx, *.doc, *.docx',
                        type : 'error'
                    });
                    return false;
                }
                status.text('Загрузка файла, пожалуйста подождите...');
            },
            onComplete: function(file, response){
                //On completion clear the status
                status.text('');
                //Add uploaded file to list
                if(response==="success"){
                    noty({
                        text : 'Excel документ: "'+file+'" успешно загружен',
                        type : 'success'
                    });
                } else{
                    noty({
                        text : 'Произошла ошибка при загрузке файла '+file,
                        type : 'error'
                    });
                }
            }
        });
    });
</script>