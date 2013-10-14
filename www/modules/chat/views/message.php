<div id="message">
    <div class="time pull-right"><?=date('H:i:s')?></div>
    <div class="avatar pull-left">
        <?=HTML::image((!$admin) ? $userPhoto : $config['admin']['avatar'])?>
    </div>
    <div class="text pull-left">
        <?=$message?>
    </div>
    <div class="clearfix"></div>
</div>