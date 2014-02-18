<div class="container">
    <div class="row">
        <div class="span7">
            <h1><small>Добавить в БД или создать документы</small></h1>
        </div>
        <div class="span5 btn_actions">
            <!-- btn's maybe create ...-->
        </div>
    </div>

    <!--css-->
    <?=HTML::style('css/vendor/stylizationForm.css')?>
    <?=HTML::style('css/main/datepicker.css')?>
    <?=HTML::style('css/main/statement.css')?>
    <?=HTML::style('css/vendor/chosen.css')?>
    <!--js-->
    <?=HTML::script('js/vendor/chosen.jquery.min.js')?>
    <?=HTML::script('js/vendor/jquery.maskedinput.min.js')?>
    <?=HTML::script('js/general/put_doc.js')?>
    <script>
        $(function() {
            /**
             * Переход по вкладкам
             */
            $('.tab-pane').hide().eq(0).show();
            $('ul#tabs').on('click', 'li', function(e) {
                e.preventDefault();
                var tab = $(this).find('a').attr('href');
                $('.tab-pane').hide();
                $('ul#tabs').find('li').removeClass('active');
                $(this).addClass('active');
                $(tab).show();
            });
            /**
             * Отправка формы договор
             */
            $('#contract').on('submit', function() {
                var famil = $('#famil').val(),
                    imya = $('#imya').val(),
                    ot4estvo = $('#ot4estvo').val(),
                    pasport_seriya = $('#seriya').val(),
                    pasport_nomer = $('#nomer').val(),
                    pasport_kem_vydan = $('#from').val(),
                    adres_reg_po_pasporty = $('#adres_reg_po_pasporty').val(),
                    mob_tel = $('#telephone_m').val();
                $('#familListener').val(famil);
                $('#imyaListener').val(imya);
                $('#ot4estvoListener').val(ot4estvo);
                $('#pasport_seriyaListener').val(pasport_seriya);
                $('#pasport_nomerListener').val(pasport_nomer);
                $('#pasport_kem_vydan').val(pasport_kem_vydan);
                $('#adres_reg_po_pasportyListener').val(adres_reg_po_pasporty);
                $('#mob_telListener').val(mob_tel);
            });

            $('#send').on('click', function(event) {
                event.stopPropagation();
                event.preventDefault();
                if ($('#toggleEmail').find('input').prop('checked') && $('#v_email').val() != '' ) {
                    var statement = {},
                        contract = {},
                        action,
                        field,
                        phone = $('#telephone_d');
                    if (phone.val() === phone.attr('placeholder')) {
                        phone.val('');
                    }
                    $.each($('#statement').serializeArray(), function(k, v) {
                        statement[v.name] = v.value;
                    });
                    $.each($('#contract').serializeArray(), function(k, v) {
                        contract[v.name] = v.value;
                    });

                    var obj = $.extend(true, contract, statement);

                    action = $(this).data('url');

                    obj['csrf'] = $('.csrf').val();
                    obj['email'] = $('#v_email').val();

                    $.post(
                        action,
                        obj,
                        function(response) {
                            if (response.status === 'success') {
                                $('#statement')[0].reset();
                                $('#contract')[0].reset();
                                $('#v_email').val('');
                                $('#toggleEmail').trigger('click');
                            }
                            if (response.status === 'error' || response.status === 'success') {
                                noty({
                                    type : response.status,
                                    message : response.msg
                                });
                            }
                            $('.csrf').val(response.csrf);
                        },
                        'json'
                    );
                } else {
                    noty({
                        type : 'error',
                        message : 'Для добавления в базу данных необходимо ввести e-mail пользователя'
                    });
                }
            });

            /**
             * Переключение ввода e-mail для регистрации (admin)
             */
            $('body').on('click', '#toggleEmail', function () {
                $('#email').toggle();
            });

            $('#generateContract').on('click', function() {
                $('#contract').trigger('submit');
            });
        });
    </script>

    <div class="well well-small form-block">

        <ul id="tabs" class="nav nav-tabs">
            <li class="active"><a href="#tab1">Заявление</a></li>
            <li><a href="#tab2">Договор</a></li>
        </ul>

        <div class="tab-pane active" id="tab1">
            <form id="statement" action="<?=Route::to('admin.ajax', 'listeners#statement_gen')?>" method="post">
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

                <div class="line"></div>

                <div class="row pull-right">
                    <div class="span3">
                        <input type="submit" class="btn btn-success " name="ok" value="Сгенерировать"/>
                    </div>
                </div>

                <input type="hidden" name="csrf" class="csrf" value="<?=Security::token()?>"/>

            </form>
        </div>

        <div class="tab-pane" id="tab2">
            <form id="contract" action="<?=Route::to('admin.ajax', 'listeners#contract_gen')?>" method="post">
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
                                <input type="hidden" id="familListener" name="statement[famil]">
                                <input type="hidden" id="imyaListener" name="statement[imya]">
                                <input type="hidden" id="ot4estvoListener" name="statement[ot4estvo]">
                                <input type="hidden" id="pasport_seriyaListener" name="statement[pasport_seriya]">
                                <input type="hidden" id="pasport_nomerListener" name="statement[pasport_nomer]">
                                <input type="hidden" id="pasport_kem_vydanListener" name="statement[pasport_kem_vydan]">
                                <input type="hidden" id="adres_reg_po_pasportyListener" name="statement[adres_reg_po_pasporty]">
                                <input type="hidden" id="mob_telListener" name="statement[mob_tel]">

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

                    <input type="hidden" name="csrf" class="csrf" value="<?=Security::token()?>"/>

                    <!-- пока уродливо ... -->

                </div>
            </form>

            <div class="check" id="toggleEmail">
                <span class="label-check">Ввести e-mail для регистрации</span>
                <input type="checkbox">
            </div>

            <br>

            <div id="email" style="display: none">
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-envelope"></i></span>
                    <input type="text" name="email" id="v_email" placeholder="Email">
                </div>
            </div>

            <div class="row pull-right">
                <div class="span3">
                    <input type="button" id="generateContract" class="btn btn-success " name="ok" value="Сгенерировать"/>
                </div>
                <div class="span3">
                    <input type="button" class="btn btn-info" id="send" value="Сохранить в базе" data-url="<?=URL::site('admin/listeners/g_add')?>">
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
</div>