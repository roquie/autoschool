<?//=View::factory('main/blank/statement')->set('Nationality', $Nationality)->set('Educations', $Educations)?>

<div class="container">
    <div class="row">
        <div class="span7">
            <h1><small>Добавить в БД или создать документы</small></h1>
        </div>
        <div class="span5 btn_actions">
            <!-- btn's maybe create ...-->
        </div>
    </div>
    <style>
        input.hasDatepicker {
            width: 399px !important;
        }
    </style>
    <div id="result">
        <!--css-->
        <?=HTML::style('css/vendor/stylizationForm.css')?>
        <?=HTML::style('css/main/datepicker.css')?>
        <?=HTML::style('css/main/statement.css')?>
        <?=HTML::style('css/vendor/chosen.css')?>
        <!--js-->
        <?=HTML::script('js/vendor/chosen.jquery.min.js')?>
        <?=HTML::script('js/vendor/jquery.maskedinput.min.js')?>
        <?=HTML::script('js/main/statement.js')?>
        <?=HTML::script('js/general/put_doc.js')?>
        <script>
            $(function() {
                $('#tabs a').click(function (e) {
                    e.preventDefault();
                    $(this).tab('show');
                })
            });
        </script>
        <div class="well well-small form-block">

            <ul id="tabs" class="nav nav-tabs">
                <li class="active"><a href="#tab1">Заявление</a></li>
                <li><a href="#tab2">Договор</a></li>
            </ul>

            <div class="tab-pane" id="tab1">
                <form style="margin-bottom: 50px" id="statement" action="<?=URL::site('admin/listeners/statement_gen')?>" method="post">
                    <div class="row-fluid">

                        <div class="span6 pull-left">

                            <label for="famil">Фамилия</label>
                            <input type="text" id="famil" autofocus="autofocus" name="statement[famil]" data-placement="top" data-req="true" tabindex="1">

                            <label for="imya">Имя</label>
                            <input type="text" name="statement[imya]" id="imya" data-req="true" tabindex="2">

                            <label for="ot4estvo">Отчество</label>
                            <input type="text" name="statement[ot4estvo]" id="ot4estvo" tabindex="3">

                            <label for="data_rojdeniya">Дата рождения</label>
                            <div class="input-append input-block-level">
                                <input type="text" id="data_rojdeniya" name="statement[data_rojdeniya]" data-req="true" tabindex="4"/>
                                <span class="add-on btn" id="calendar"><i class="icon-calendar"></i></span>
                            </div>

                            <label for="grajdanstvo">Гражданство</label>
                            <select id="grajdanstvo" name="statement[nationality_id]" style="width: 440px" data-req="true" tabindex="5">
                                <option>Ввести самому</option>
                                <? foreach ($Nationality as $value): ?>
                                    <option value="<?=$value->id?>"><?=$value->grajdanstvo?></option>
                                <? endforeach ?>
                            </select>

                            <label for="mesto_rojdeniya" style="margin-top: 12px">Место рождения</label>
                            <input type="text" name="statement[mesto_rojdeniya]" id="mesto_rojdeniya" data-req="true" tabindex="6">

                            <label for="adres_reg_po_pasporty">Адрес регистрации по паспорту</label>
                            <input type="text" name="statement[adres_reg_po_pasporty]" id="adres_reg_po_pasporty" data-req="true" tabindex="7">

                            <div class="check" id="toggleReg">
                                <span class="label-check">Временная регистрация?</span>
                                <input type="checkbox" name="statement[toggleReg]">
                            </div>

                            <div id="reg" style="display: none">
                                <label for="vrem_reg">Временная регистрация</label>
                                <input type="text" name="statement[vrem_reg]" id="vrem_reg" tabindex="7">
                            </div>


                        </div>

                        <div class="span6 pull-right">

                            <label>Паспорт</label>
                            <input class="span6" type="text" name="statement[pasport_seriya]" id="seriya" placeholder="серия" data-req="true" tabindex="8">
                            <input class="span6 pull-right" type="text" name="statement[pasport_nomer]" id="nomer" placeholder="номер" data-req="true" tabindex="9">

                            <label for="pasport_data_vyda4i">Дата выдачи паспорта</label>
                            <div class="input-append input-block-level">
                                <input type="text" id="pasport_data_vyda4i" name="statement[pasport_data_vyda4i]" data-req="true" tabindex="10">
                                <span class="add-on btn" id="calendar"><i class="icon-calendar"></i></span>
                            </div>

                            <label for="from">Кем выдан паспорт</label>
                            <input type="text" id="from" name="statement[pasport_kem_vydan]" data-req="true" tabindex="11">

                            <label>Телефон</label>
                            <input class="span6" type="text" id="telephone_m" name="statement[mob_tel]" placeholder="мобильный" data-req="true"  tabindex="12">
                            <input class="span6 pull-right" type="text" id="telephone_d" name="statement[dom_tel]" placeholder="домашний" tabindex="13">

                            <label for="obrazovanie">Образование</label>
                            <select id="obrazovanie" name="statement[education_id]" style="width: 440px" data-req="true" tabindex="14">
                                <?foreach ($Educations as $value):?>
                                    <option value="<?=$value->id?>"><?=$value->obrazovanie?></option>
                                <?endforeach?>
                            </select>

                            <label for="mesto_raboty" style="margin-top: 12px">Место работы</label>
                            <input type="text" name="statement[mesto_raboty]" id="mesto_raboty" data-req="true" tabindex="15">

                            <label for="about">Как Вы узнали о нас</label>
                            <select id="about" name="statement[about]" style="width: 440px" data-req="true" tabindex="16">
                                <option value="Интернет">Интернет</option>
                                <option value="Знакомые">Знакомые</option>
                                <option value="Листовка у метро">Листовка у метро</option>
                                <option value="other">Другое</option>
                            </select>

                            <div style="display: none; margin-top: 12px" id="otherText">
                                <label for="about_us">Укажите, как Вы узнали о нас</label>
                                <textarea id="about_us"></textarea>
                            </div>

                        </div>

                    </div>

                    <input type="hidden" name="csrf" value="<?=Security::token()?>"/>

                    <!-- пока уродливо ... -->
                    <div class="row pull-right">
                        <div class="span2">
                            <input type="submit" class="btn btn-success " name="ok" value="Сгенерировать"/>
                        </div>
                        <div class="span1">
                            <p>или</p>
                        </div>
                        <div class="span2">
                            <button class="btn btn-info pull-right" id="next">Добавить в БД</button>
                        </div>
                    </div>


                </form>
            </div>

            <div class="tab-pane" id="tab2">
                <form style="margin-bottom: 50px" id="contract" action="#" method="post">
                    <div class="row-fluid">
                        <div class="span12">

                            <div class="check active" id="customer">
                                <span class="label-check">Заказчиком будет родитель (опекун)</span>
                                <input type="checkbox" name="contract[parent]" checked>
                            </div>

                            <legend>Заказчик</legend>

                            <div class="row-fluid">

                                <div class="span6 pull-left">

                                    <label for="familCustomer">Фамилия</label>
                                    <input type="text" id="familCustomer" name="contract[famil]" tabindex="16">

                                    <label for="imyaCustomer">Имя</label>
                                    <input type="text" name="contract[imya]" id="imyaCustomer" tabindex="17">

                                    <label for="ot4estvoCustomer">Отчество</label>
                                    <input type="text" name="contract[ot4estvo]" id="ot4estvoCustomer" tabindex="18">

                                    <label for="adres_reg_po_pasportyCustomer">Адрес места жительства</label>
                                    <input type="text" name="contract[adres_reg_po_pasporty]" id="adres_reg_po_pasportyCustomer" tabindex="19">

                                </div>

                                <div class="span6 pull-right">

                                    <label>Паспорт</label>
                                    <input class="span6" type="text" name="contract[pasport_seriya]" id="pasport_seriyaCustomer" placeholder="серия" tabindex="20">
                                    <input class="span6 pull-right" type="text" name="contract[pasport_nomer]" id="pasport_nomerCustomer" placeholder="номер" tabindex="21">

                                    <label for="fromCustomer">Кем выдан паспорт</label>
                                    <input type="text" id="fromCustomer" name="contract[pasport_kem_vydan]" tabindex="22">

                                    <label for="phoneCustomer">Телефон</label>
                                    <input class="span6" type="text" id="phoneCustomer" name="contract[phone]" tabindex="23">

                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                        <div class="line"></div>

                        <input type="button" class="btn btn-success span12 send" id="send" value="Отправить заявку" data-url="<?=URL::site('lk/ajax/addPapers')?>">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>