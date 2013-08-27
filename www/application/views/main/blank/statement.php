
<div class="container">
    <h1><small>Подача заявления</small></h1>
    <div class="well well-small">
        <p class="text-center" style="padding-top: 10px; font-size: 15pt;">
            Прошу принять меня в Автошколу "МПТ РГТЭУ"
        </p>
        <form class="form-horizontal" style="margin-bottom: 50px" id="statement" action="<?=URL::site('wordtemplate/zayavlenie')?>" method="post">
            <div class="row" style="padding-top: 20px">
                <div class="span4 offset2">
                    <div class="check">
                        Имею в/у категорию
                        <input type="checkbox" value="vik.melnikov@gmail.com" />
                    </div>
                </div>
                <br><br>
                <!--
                    Левая колонка
                -->
                <div class="span3 pull-left">
                    <div class="control-group">
                        <label class="control-label" for="famil">Фамилия</label>
                        <div class="controls">
                            <input type="text" id="famil" autofocus="autofocus" name="familiya" data-req="true" tabindex="1">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="imya">Имя</label>
                        <div class="controls">
                            <input type="text" name="imya" id="imya" data-req="true" tabindex="2">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="ot4estvo">Отчество</label>
                        <div class="controls">
                            <input type="text" name="ot4estvo" id="ot4estvo" data-req="true" tabindex="3">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="data_rojdeniya">Дата рождения</label>
                        <div class="controls">
                            <div class="input-append">
                                <input type="text" id="data_rojdeniya" name="data_rojdeniya" style="width: 93%;" class="placeholder" data-value=" " data-req="true" tabindex="4"/>
                                <span class="add-on"><i class="icon-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="grajdanstvo">Гражданство</label>
                        <div class="controls">
                            <input type="text" name="grajdanstvo" id="grajdanstvo" data-req="true" tabindex="5">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="mesto_rojdeniya">Место рождения</label>
                        <div class="controls">
                            <input type="text" name="mesto_rojdeniya" id="mesto_rojdeniya" data-req="true" tabindex="6">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls span3">
                            <div class="check" id="toggleReg">
                                Временная регистрация?
                                <input type="checkbox" id="sltReg" name="toggleReg">
                            </div>
                        </div>
                    </div>
                    <div id="reg">
                        <div class="control-group">
                            <label class="control-label" for="adres_reg_po_pasporty">Адрес регистрации по паспорту</label>
                            <div class="controls">
                                <input type="text" name="adres_reg_po_pasporty" id="adres_reg_po_pasporty" data-req="true" tabindex="7">
                            </div>
                        </div>
                        <div class="control-group" style="display: none">
                            <label class="control-label" for="vrem_reg">Временная регистрация</label>
                            <div class="controls">
                                <input type="text" name="vrem_reg" id="vrem_reg" tabindex="7">
                            </div>
                        </div>
                    </div>
                </div>
                <!--
                    Правая колонка
                -->
                <div class="span7 pull-right">
                    <div class="control-group">
                        <label class="control-label">Паспорт</label>
                        <div class="controls">
                            <input class="input-small placeholder" type="text" name="pasport_seriya" data-value="серия" data-req="true" tabindex="8">
                            <input class="input-small placeholder" type="text" name="pasport_nomer" data-value="номер" data-req="true" tabindex="9">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <div class="input-append">
                                <input type="text" id="pasport_data_vyda4i" name="pasport_data_vyda4i" class="placeholder" style="width: 90%" data-value="дата выдачи" data-req="true" tabindex="10">
                                <span class="add-on"><i class="icon-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <textarea name="pasport_kem_vydan" style="resize: none; width: 88%; height: 70px" class="placeholder" data-value="кем выдан" data-req="true" tabindex="11"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Телефон</label>
                        <div class="controls">
                            <input class="input-medium placeholder" type="text" id="telephone_m" name="dom_tel" data-req="true" data-value="мобильный" tabindex="12">
                            <input class="input-medium placeholder" type="text" id="telephone_d" name="mob_tel" data-req="true" data-value="домашний" tabindex="13">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="obrazovanie">Образование</label>
                        <div class="controls">
                            <input type="text" name="obrazovanie" id="obrazovanie" data-req="true" tabindex="14">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="mesto_raboty">Место работы</label>
                        <div class="controls">
                            <input type="text" name="mesto_raboty" id="mesto_raboty" data-req="true" tabindex="15">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <div class="select">
                                <a href="javascript:void(0);" class="slct">Как Вы узнали о нас</a>
                                <ul class="drop">
                                    <li>Интернет</li>
                                    <li>Знакомые</li>
                                    <li>Листовка у метро</li>
                                    <li id="other">Другое</li>
                                </ul>
                                <input type="hidden" id="select" name="about" />
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <div style="display: none" id="otherText">
                                <textarea style="resize: none; width: 88%; height: 70px" class="placeholder" data-value="Как вы узнали о нас"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <input type="submit" class="btn btn-success">
                </div>
            </div>
        </form>
    </div><br><br>
</div>

<script>
    $(function () {
        /**
         * Настройки для календаря
         * @type {{monthNames: Array, monthNamesShort: Array, dayNames: Array, dayNamesMin: Array}}
         */
        $.datepicker.regional['ru'] = {
            monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
                'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
            monthNamesShort: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн',
                'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек'],
            dayNames: ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'],
            dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб']
        };
        $.datepicker.setDefaults($.datepicker.regional['ru']);
        $('#data_rojdeniya, #pasport_data_vyda4i').datepicker({
            nextText: "&raquo;",
            prevText: "&laquo;",
            yearRange: "1960:2013",
            dateFormat: 'dd.mm.yy',
            changeMonth: true,
            changeYear: true
            //$('.ui-datepicker').find('td').removeClass('ui-datepicker-today');
        });

        /**
         * Маски для ввода дат и телефонов
         */
        $("#telephone_m, #telephone_d ").mask("8 (999) 999-99-99");
        $('#data_rojdeniya, #pasport_data_vyda4i').mask('99.99.9999');

        /**
         * Переключение ввода регистрации между регистрацией по паспорту и временной регистрацией
         */
        $('body').on('click', '#toggleReg', function () {
            $('#reg div.control-group').toggle();
            if ($('#sltReg').prop('checked')) {
                $('#adres_reg_po_pasporty').data('req', false);
                $('#vrem_reg').data('req', true);
            } else {
                $('#adres_reg_po_pasporty').data('req', true);
                $('#vrem_reg').data('req', false);
            }
        });

        /**
         * Отображение поля для ввода другого значения
         */
        $('.drop').on('click', 'li', function () {
            if ($(this).attr('id') === 'other')
                $('#otherText').show();
            else
                $('#otherText').hide();
        });
        /**
         * Заносим значение введённое в поле "Другое" в поле, откуда берётся значение для заявки
         */
        $('#otherText > textarea').on('blur', function () {
            $('#select').val($(this).val());
        });

        /**
         * Отправка заявки
         */
        $('#statement').on('submit', function (e) {
            e.preventDefault();
            var element,
                $this = $(this),
                action = $this.attr('action'),
                data = $this.serializeArray(),
                error = false;
            $('.slct, .drop').css({ 'border-color': '#cecece' });
            $('.control-group').removeClass('error');
            if ($('#select').val() === '') {
                $('.slct, .drop').css({ 'border-color': '#bd4247' });
                error = true;
            }
            if (validation(data) && !error) {
                console.log(data);
                $.post(
                    action,
                    data,
                    function (response) {
                        if (response.status === 'success') {
                            $('.well').html(response.msg);
                        }
                        if (response.status === 'error') {
                            $.each(response.msg, function (i, v) {
                                $('input[name="' + v + '"], textarea[name="' + v + '"]').closest('.control-group').addClass('error');
                            });
                        }
                    },
                    'json'
                );
            }
        });
        /**
         * Подсказки в полях ввода
         */
        $('.placeholder').placeholder();
    });
    /**
     * Функция для валидации полей формы
     * @param data - массив со значениями формы
     * @returns {boolean}
     */
    function validation(data)
    {
        var element,
            is_success = true,
            error = [];
        $.each(data, function(i, v) {
            element = $('input[name="'+ v.name+'"], textarea[name="'+ v.name+'"]');
            if (element.data('req')) {
                if (removeWhitespaces(v.value) === '' || v.value === element.data('value')) {
                    is_success = false;
                    element.closest('.control-group').addClass('error');
                }
            }
        });
        return is_success;
    }
    /**
     * Функция удаления пробелов из строки
     * @param str
     * @returns {XML|string|void}
     */
    function removeWhitespaces(str)
    {
        return str.replace(/\s/g, "");
    }
</script>