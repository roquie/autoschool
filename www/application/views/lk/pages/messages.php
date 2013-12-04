<?foreach($messages as $msg):?>
<div class="row msg">
    <div class="span5">
        <b><?=$msg['title']?></b>
    </div>
    <div class="span8">
        <?=$msg['message']?>
    </div>
</div>
<?endforeach?>
