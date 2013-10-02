<?=HTML::style('css/dwns.css')?>
<div class="row downloads">
    <div class="span4">
        <div class="dwn_block">
            <div class="row">
                <div class="span1">
                    <img src="<?=URL::site('img/lk/word.png')?>" alt="word"/>
                </div>
                <div class="span3" style="">
                    <a href="<?=URL::site('lk/ajax/downloadStatement')?>">Заявление</a>
                    <p class="muted">Формат: docx</p>
                </div>
            </div>

        </div>
        <div class="dwn_block">
            <div class="row">
                <div class="span1">
                    <img src="<?=URL::site('img/lk/word.png')?>" alt="word"/>
                </div>
                <div class="span3" style="">
                    <a href="<?=URL::site('lk/ajax/downloadContract')?>">Договор</a>
                    <p class="muted">Формат: docx</p>
                </div>
            </div>

        </div>
        <!--<div class="dwn_block">
            <div class="row">
                <div class="span1">
                    <img src="<?/*=URL::site('img/lk/word.png')*/?>" alt="word"/>
                </div>
                <div class="span3" style="">
                    <a href="<?/*=URL::site('')*/?>">Квитанция</a>
                    <p class="muted">Формат: docx</p>
                </div>
            </div>

        </div>-->
    </div>

    <div class="span4">
        <div class="dwn_block">
            <div class="row">
                <div class="span1">
                    <img src="<?=URL::site('img/lk/zip.png')?>" alt="zip"/>
                </div>
                <div class="span3">
                    <a href="<?=URL::site('lk/ajax/downloadZip')?>">Скачать все одним архивом</a><br>
                    <p class="muted">Формат: zip</p>
                </div>
            </div>

        </div>
    </div>
</div>


