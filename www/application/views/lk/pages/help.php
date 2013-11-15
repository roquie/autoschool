<?=HTML::style('css/lk/chat.css')?>
<?=HTML::script('js/lk/help.js')?>

    <div class="write">
        <button class="enb_dis btn btn-info togl"><i class="icon-pencil"></i> Новая тема</button>
        <div class="row sendmsg hide togl">
            <div class="span8">
                <h2>Создать новую тему</h2>
                <div class="span1">
                    <?=HTML::image($userPhoto, array('class' => 'imgsend', 'width' => '60px', 'height' => '60px'))?>
                </div>
                <div class="span7">
                    <form action="<?=URL::site('lk/ajax/addTitle')?>" class="_lk_form" method="POST" data-callback="add_title">
                        <input id="title" class="input-xlarge" name="title" placeholder="заголовок" type="text">
                        <br>
                        <textarea name="message" id="message" cols="10" rows="5" placeholder="текст сообщения"></textarea>
                        <br>
                        <input type="submit" value="Отправить" class="btn btn-info"/>
                        <a class="btn btn-primary hideSend" href="#">Скрыть</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="messages hide" data-url="<?=URL::site('lk/ajax/addMessage')?>">

    </div>

    <div class="titles">
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

                    <div class="text"><?=$line['message']->message?></div>

                    <div class="clearfix"></div>

                    <small class="muted pull-right"><?=date('d.m.Y H:i:s', $datetime)?></small>
                </div>
            </div>
        </div>
    <?
        endforeach;
        if (count($messages) == 10) :
    ?>
        <a href="#" class="btn span8 load" data-url="<?=URL::site('lk/ajax/load')?>">Загрузить предыдущие сообщения</a>
    <?
        endif;
        else :
    ?>
        <div class="text-center" id="clear-block"><i class="icon-frown icon-large"></i> Переписка пуста</div>
    <? endif; ?>
    </div>