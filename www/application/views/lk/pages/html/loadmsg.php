<? foreach($messages as $line) : ?>
    <? $datetime = strtotime($line->datetime); ?>
    <div class="row">
        <div class="span8 allmsg">
            <div class="span1">
                <?=HTML::image((!$line->admin) ? $line->user->photo : $admin_avatar, array('class' => 'imgsend', 'width' => '60px', 'height' => '60px'))?>
            </div>
            <div class="text span5"><?=$line->message?></div>
            <small class="muted span2" style="text-align: center"><?=date('d.m.Y H:i:s', $datetime)?></small>
        </div>
    </div>
<? endforeach; ?>