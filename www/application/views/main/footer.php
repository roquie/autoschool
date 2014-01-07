<footer class="footer">
    <div class="container">
        <p class="text-block3">Разработано Ivanov M.V. &amp; Melnikov V.I. для Автошколы МПТ РГТЭУ</p>
        <p class="text-block3">© <?=date('Y')?>. All rights reserved, BSD License.</p>
        <ul>
            <li><a href="<?=URL::site('#price')?>" id="ajax">Цены</a></li>
            <li class="muted">·</li>
            <li><a href="<?=URL::site('#contacts')?>" id="ajax">Контакты</a></li>
            <li class="muted">·</li>
           <!-- <object data="<?/*=URL::site('download/other_files/license-0000540.pdf')*/?>" type="application/pdf">
                <a href="<?/*=URL::site('download/other_files/license-0000540.pdf')*/?>">Лицензия</a>
            </object>-->
            <li><a href="<?=URL::site('download/other_files/license-0000540.pdf')?>">Лицензия</a></li>
<!--            <li class="muted">·</li>
            <li><a href="<?/*=URL::site('/about')*/?>">О нас</a></li>-->
        </ul>
    </div>
</footer>