<?=HTML::style('css/lk/newmsg.css')?>
<!--
    эта штука будет вылезать при нажатии на кнопку, так то она по умолчанию скрыта,
    для того, чтобы было видно больше истории сообщений.
-->
<!--<button class="enb_dis btn btn-info"><i class="icon-pencil"></i> Написать сообщение</button>-->

<div class="row sendmsg">
    <div class="span8">
        <h2>Написать сообщение</h2>
        <div class="span1">
            <?=HTML::image($userPhoto, array('class' => 'imgsend', 'width' => '60px', 'height' => '60px'))?>
        </div>
        <div class="span6">
            <form action="<?=URL::site('lk/ajax/')?>" class="_lk_form" method="POST">
                <input id="title" class="input-xlarge" name="title" placeholder="заголовок" type="text">
                <br>
                <textarea name="message" id="message" cols="10" rows="5" placeholder="текст сообщения"></textarea>
                <br>
                <input type="submit" value="Отправить" class="btn btn-info"/>
            </form>
        </div>
    </div>
</div>


<div class="row">
    <div class="span8 allmsg">
        <span class="label label-success pull-right">Новое</span>
        <div class="span1">
            <?=HTML::image($userPhoto, array('class' => 'imgsend', 'width' => '60px', 'height' => '60px'))?>
        </div>
        <p>Тема</p>
        <div class="span5">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
        </div>
    </div>
</div>
<div class="row">
    <div class="span8 allmsg">
        <span class="label pull-right">Прочитано</span>
        <div class="span1">
            <?=HTML::image($userPhoto, array('class' => 'imgsend', 'width' => '60px', 'height' => '60px'))?>
        </div>
        <p>Тема</p>
        <div class="span5">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
        </div>
    </div>
</div>