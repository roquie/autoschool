<?=HTML::style('css/lk.css')?>
<style type="text/css">
    .imglk {
        border-radius: 2px;
        position: relative;
        z-index: -2;
    }
    .profile {
        box-shadow: inset 0 0 8px 3px rgba(0,0,0,0.25);
        border-radius: 2px;
    }
    .imgprofile {
        position: absolute;
        z-index: 1;
        left: 180px;
        top: 15px;
        height: 180px;
        width: 180px;
    }
</style>
<div class="container" style="margin-top: 110px; background-color: #ffffff; height: 700px; border-top: 2px solid rgba(0,0,0,0.1); border-radius: 2px;  box-shadow: 0 0 0 0, 0 5px 5px rgba(0,0,0, 0.2)">
    <div class="row">
        <div class="imgprofile">
            <div class="profile">
                <?=HTML::image($userPhoto, array('width' => '180px', 'height' => '180px', 'class' => 'imglk'))?>
            </div>
        </div>

        <div class="span12 back1" style="height: 90px; border-bottom: 1px solid #ccc;">

        </div>
       

    </div>

    <div class="row">
            <div class="span3 menu" style="margin-top: 110px">
                <ul class="nav nav-pills nav-stacked" style="width: 180px; margin-left: 18px">
                    <li class="active"><a href="#"><i class="icon-comments"></i>Сообщения</a></li>
                    <li><a href="#"><i class="icon-file"></i>Заявление</a></li>
                    <li><a href="#"><i class="icon-file"></i>Договор</a></li>
                    <li><a href="#"><i class="icon-cloud-download"></i>Загрузки</a></li>
                </ul>
            </div>
            <div class="span9" style="background-color: #008000">
uu
            </div>
    </div>

</div>

<!--<div class="span12">
    <h2>Данные о тебе</h2> <a href="<?/*=URL::site('lk/logout')*/?>" class="btn btn-success">Выйти</a>
    <hr>
    <div class="row">
        <div class="span4">
            <div class="well">
                <a href="<?/*=URL::site('lk/downloadStatement')*/?>">Скачать заявку</a><br>
                <a href="<?/*=URL::site('lk/changeStatement')*/?>">Изменить заявку</a><br>
                <?/*foreach($statement as $value):*/?>
                    <?/*=$value*/?><br>
                <?/*endforeach;*/?>
            </div>

        </div>
        <div class="span4">
            <div class="well">
                <a href="<?/*=URL::site('lk/downloadContract')*/?>">Скачать договор</a><br>
                <a href="<?/*=URL::site('lk/changeContract')*/?>">Изменить договор</a><br>
                <?/*foreach($contract as $value):*/?>
                    <?/*=$value*/?><br>
                <?/*endforeach;*/?>
            </div>

        </div>
        <div class="span3">
            <div class="well">
                <a href="<?/*=URL::site('lk/changepass')*/?>">Изменить пароль</a><br>
                <?/*=$userEmail*/?><br>
                <?/*=HTML::image($userPhoto)*/?>


            </div>
        </div>
    </div>

</div>-->