<?foreach($messages as $msg):?>
<div class="row msg">
    <div class="span4">
        <b><?=$msg->title?></b>
    </div>
    <div class="span8">
        <?=$msg->message?>
    </div>
</div>
<?endforeach?>
