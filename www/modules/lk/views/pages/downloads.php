<?=HTML::style('css/dwns.css')?>

<div class="row downloads">
    <div class="span4">
        <div class="dwn_block">
            <div class="row">
                <div class="span1">
                    <img src="<?=URL::site('img/lk/word.png')?>" alt="word"/>
                </div>
                <div class="span3" style="">
                    <a href="<?=URL::site('lk/downloadStatement')?>">Заявление</a>
                    <p class="muted">Размер: 12.5 кб; Формат: docx</p>
                </div>
            </div>

        </div>
        <div class="dwn_block">
            <div class="row">
                <div class="span1">
                    <img src="<?=URL::site('img/lk/word.png')?>" alt="word"/>
                </div>
                <div class="span3" style="">
                    <a href="<?=URL::site('lk/downloadContract')?>">Договор</a>
                    <p class="muted">Размер: 26.1 кб; Формат: docx</p>
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
                    <a href="<?=URL::site('lk/downloadZip')?>">Скачать все одним архивом</a><br>
                    <p class="muted">Размер: 36.1 кб; Формат: zip</p>
                </div>
            </div>

        </div>
    </div>
</div>


