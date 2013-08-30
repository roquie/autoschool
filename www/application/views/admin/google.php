<div class="container">
    <h1><small>Загрузить файлы в Google Drive</small></h1>
    <div class="well">
        <a href="<?=URL::site('/updownload/google')?>" class="btn">Отправить файл в диск*</a>
        <br>
        <small>*Пока не работает ))</small> <br><br>
        <?foreach($statements as $statement):?>
            <ul style="list-style: none">
                <li><a href="#" data-url="<?=URL::site('/updownload/google')?>"><?=$statement?></a></li>
            </ul>
        <?endforeach?>
    </div>
</div>