<?=HTML::style('css/lk.css')?>
<style type="text/css">

</style>
<div class="container lk">
    <div class="row">
        <div class="imgprofile">
            <div class="profile">
                <?=HTML::image($userPhoto, array('width' => '180px', 'height' => '180px'))?>
            </div>
        </div>

        <div class="span12 back1">
            <div class="span9 pull-right">
                <div class="row">
                    <div class="span4">
                        <h1><?=$statement['famil'].' '.$statement['imya']?></h1>
                    </div>
                    <div class="span5">
                        <h1 class="group pull-right" title="твоя группа" >01431</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="span4 settings">
                        <i class="icon-envelope-alt"></i> <?=$userEmail?>, <a href="<?=URL::site('#')?>"><i class="icon-cog"></i> Настройки</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
            <div class="span3 menu">
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#"><i class="icon-comments"></i>Сообщения<i class="icon-angle-right"></i></a></li>
                    <li><a href="#"><i class="icon-file"></i><span>Заявление</span></a></li>
                    <li><a href="#"><i class="icon-file"></i><span>Договор</span></a></li>
                    <li><a href="#"><i class="icon-cloud-download"></i>Загрузки</a></li>
                </ul>
            </div>
            <div class="span9">

                <div class="row msg">
                    <div class="span4">
                        <b>Тема сообщения</b>
                    </div>
                    <div class="span8">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                    </div>
                </div>
                <div class="row msg">
                    <div class="span4">
                        <b>Тема сообщения</b>
                    </div>
                    <div class="span8">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                    </div>
                </div>
                <div class="row msg">
                    <div class="span4">
                        <b>Тема сообщения</b>
                    </div>
                    <div class="span8">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                    </div>
                </div>
            </div>
    </div>
</div>