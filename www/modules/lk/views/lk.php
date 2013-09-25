<div class="container" style="margin-top: 100px">
    <div class="span12">
        <h2>Данные о тебе</h2> <a href="<?=URL::site('lk/logout')?>" class="btn btn-success">Выйти</a>
        <hr>
        <div class="row">
            <div class="span4">
                <div class="well">
                    <a href="<?=URL::site('lk/downloadStatement')?>">Скачать заявку</a><br>
                    <a href="<?=URL::site('lk/changeStatement')?>">Изменить заявку</a><br>
                    <?foreach($statement as $value):?>
                        <?=$value?><br>
                    <?endforeach;?>
                </div>

            </div>
            <div class="span4">
                <div class="well">
                    <a href="<?=URL::site('lk/downloadContract')?>">Скачать договор</a><br>
                    <a href="<?=URL::site('lk/changeContract')?>">Изменить договор</a><br>
                    <?foreach($contract as $value):?>
                        <?=$value?><br>
                    <?endforeach;?>
                </div>

            </div>
            <div class="span3">
                <div class="well">
                    <a href="<?=URL::site('lk/changepass')?>">Изменить пароль</a><br>
                   <?=$userEmail?><br>
                    <?=HTML::image($userPhoto)?>


                </div>
            </div>
        </div>

    </div>

</div>