<div class="row">
    <div class="span8 allmsg">
        <div class="span1">
            <?=HTML::image($userPhoto, array('class' => 'imgsend', 'width' => '60px', 'height' => '60px'))?>
        </div>
        <div class="text span5"><?=$message?></div>
        <small class="muted span2" style="text-align: center"><?=date('d.m.Y H:i:s')?></small>
    </div>
</div>