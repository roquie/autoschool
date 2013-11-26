<?
if (count($messages) > 0) :
    foreach($messages as $line) :
        ?>
        <? $datetime = strtotime($line['message']->datetime); ?>
        <div class="row" id="<?=$line['title']->id?>">
            <div class="span8 allmsg" data-url="<?=URL::site('lk/ajax/load_message/'.$line['title']->id)?>" data-callback="load_message">
                <div class="span1">
                    <?=HTML::image((!$line['message']->admin) ? $line['message']->user->photo : $admin_avatar, array('class' => 'imgsend', 'width' => '60px', 'height' => '60px'))?>
                </div>
                <div class="span7">
                    <? if ($line['message']->is_read) : ?>
                        <span class="label pull-right">Прочитано</span>
                    <? elseif ($line['message']->admin) : ?>
                        <span class="label label-success pull-right">Новое</span>
                    <? else : ?>
                        <span class="label label-warning pull-right">Отправлено</span>
                    <? endif; ?>

                    <p><?=$line['title']->title?></p>

                    <div class="text"><?=Text::limit_chars($line['message']->message, 200)?></div>

                    <div class="clearfix"></div>

                    <small class="muted pull-right"><?=date('d.m.Y H:i:s', $datetime)?></small>
                </div>
            </div>
        </div>
    <?
    endforeach;
endif;
?>