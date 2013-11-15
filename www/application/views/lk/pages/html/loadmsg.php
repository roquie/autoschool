<?=HTML::script('js/lk/newmsg.js')?>
<button class="btn btn-info back"><i class="icon-arrow-left"></i> Назад</button>
<button class="btn btn-info newmsg"><i class="icon-pencil"></i> Написать</button>

<input type="hidden" id="title_id" value="<?=$title_id?>">

<div class="row sendmsg msg hide">
    <div class="span8">
        <h2>Написать сообщение</h2>
        <div class="span1">
            <?=HTML::image($userPhoto, array('class' => 'imgsend', 'width' => '60px', 'height' => '60px'))?>
        </div>
        <div class="span7">
            <form action="<?=URL::site('lk/ajax/addMessage/'.$title_id)?>" class="_lk_form" method="POST" data-callback="add_message">
                <textarea name="message" id="message" cols="10" rows="5" placeholder="текст сообщения"></textarea>
                <br>
                <input type="submit" value="Отправить" class="btn btn-info"/>
                <a class="btn btn-primary hidemsg" href="#">Скрыть</a>
            </form>
        </div>
    </div>
</div>
<div id="mesg_with_title">
<?
foreach($messages as $line) :
?>
    <? $datetime = strtotime($line->datetime); ?>
    <div class="row">
        <div class="span8 allmsg">
            <div class="span1">
                <?=HTML::image((!$line->admin) ? $line->user->photo : $admin_avatar, array('class' => 'imgsend', 'width' => '60px', 'height' => '60px'))?>
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
</div>