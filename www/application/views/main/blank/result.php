<h2 class="info">
    Обработка завершена. Скачайте и распечатайте документы. После этого прочтите их, поставьте подписи в нужных местах и отнесите их к нам в Автошколу &laquo;МПТ РГТЭУ&raquo;<br>
    <? if ($age < 18) : ?>
        Т.к. вы ещё не достигли совершеннолетия, вы не сможете сдавать экзамен в ГИБДД.
    <? endif; ?>
</h2>
<br>
<div class="well well-small form-block">
    <h1>Документы для загрузки</h1>
    По вашим данным были сформированы следующие документы:
    <ul class="dash" style="margin-top: 10px">
        <li><span>Заявление о принятии в Автошколу &laquo;МПТ РГТЭУ&raquo;</span></li>
        <li><span>Договор об указании платных образовательных услуг</span></li>
    </ul>

    <div class="clearfix"></div>
    <div class="line"></div>

    <div class="row-fluid">
        <div class="span6 pull-left">
            <a class="btn btn-success btn-block" href="<?=$statement?>"><i class="icon-file-text"></i> Заявление</a>
        </div>
        <div class="span6 pull-right">
            <a class="btn btn-primary btn-block" href="<?=$contract?>"><i class="icon-file-text"></i> Договор</a>
        </div>
    </div>
</div>