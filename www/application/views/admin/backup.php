<div class="container">
    <h1><small>Запилить бэкап</small></h1>
    <div class="well">
        <a href="<?=URL::site('/admin/backup/create')?>" class="btn">Сделать бэкап заявлений</a>
        <br> <br>
        <p>Список бэкапов в папке APPPATH.'backups/':</p>
        <?foreach($backupFiles as $backupFile):?>
        <ul style="list-style: none">
            <li><?=basename($backupFile)?></li>
        </ul>
        <?endforeach?>
    </div>

</div>