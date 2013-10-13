<?
    if (count($messages) > 0) :
        for ($i = count($messages) -1; $i >= 0; $i--) :
?>
        <div id="message">
            <? $datetime = strtotime($messages[$i]->datetime); ?>
            <div class="time pull-right"><?=(date('d', $datetime) < date('d')) ? date('d.m.y', $datetime) : date('H:i:s', $datetime)?></div>
            <div class="avatar pull-left">
                <?=HTML::image((!$messages[$i]->admin) ? $messages[$i]->user->photo : $config['admin']['avatar'])?>
            </div>
            <div class="text pull-left">
                <?=$messages[$i]->message?>
            </div>
            <div class="clearfix"></div>
        </div>
<?
        endfor;
    else :
?>
        <div class="text-center" id="clear-block"><i class="icon-frown icon-large"></i> Переписка пуста</div>
<? endif; ?>