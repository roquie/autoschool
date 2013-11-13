<button class="enb_dis btn btn-info back"><i class="icon-arrow-left"></i> Назад</button>
<?
foreach($messages as $line) :
?>
    <? $datetime = strtotime($line->datetime); ?>
    <div class="row">
        <div class="span8 allmsg">
            <div class="span1">
                <?=HTML::image((!$line->admin) ? $line->user->photo : $admin_avatar)?>
            </div>
            <div class="span7">
                <? if ($line->is_read) : ?>
                    <span class="label pull-right">Прочитано</span>
                <? elseif ($line->admin) : ?>
                    <span class="label label-success pull-right">Новое</span>
                <? else : ?>
                    <span class="label label-warning pull-right">Отправлено</span>
                <? endif; ?>

                <div class="text"><?=$line->message?></div>

                <div class="clearfix"></div>

                <small class="muted pull-right"><?=date('d.m.Y H:i:s', $datetime)?></small>
            </div>
        </div>
    </div>
<?
endforeach;
?>