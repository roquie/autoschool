<div class="container">
    <h1><small>Загрузить файлы в Google Drive</small></h1>
    <div class="well">
        <?foreach($statements as $statement):?>
            <ul style="list-style: none">
                <li><a href="#" data-url="<?=URL::site('/updownload/google')?>"><?=$statement?></a></li>
            </ul>
        <?endforeach?>
    </div>
</div>