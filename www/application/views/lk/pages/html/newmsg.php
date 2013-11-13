<div class="row">
    <div class="span8 allmsg">
        <div class="span1">
            <?=HTML::image($userPhoto, array('class' => 'imgsend', 'width' => '60px', 'height' => '60px'))?>
        </div>
        <div class="span7">
            <span class="label label-warning pull-right">Отправлено</span>
            <p><?=$title?></p>

            <div class="text"><?=$message?></div>

            <div class="clearfix"></div>

            <small class="muted pull-right"><?=date('d.m.Y H:i:s')?></small>
        </div>
    </div>
</div>