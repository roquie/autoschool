<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title><?=$title?></title>
    <?//=$less?>
    <?=HTML::style('css/bstrap.html5b.fawesome.min.css')?>
    <?=HTML::style('css/vendor/stylizationForm.css')?>
    <?=HTML::style('css/style.css')?>
    <?=HTML::style('css/main.css')?>
    <?=HTML::style('css/datepicker.css')?>
    <?=HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&subset=latin,cyrillic')?>
    <?=HTML::style('css/vendor/flexslider.css')?>


    <!--[if IE 9]>
        <link rel="stylesheet" href="css/ie.css"/>
    <![endif]-->

    <!-- css3-mediaqueries.js for IE less than 9 -->
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

</head>
<body>

<?=$navbar.PHP_EOL?>
<?=$content.PHP_EOL?>

<?=$footer.PHP_EOL?>

<?=HTML::script('http://yandex.st/jquery/1.10.2/jquery.min.js')?>
<?=HTML::script('http://yandex.st/jquery-ui/1.10.3/jquery-ui.min.js')?>
<?=HTML::script('js/vendor/bootstrap/bootstrap.min.js')?>
<?=HTML::script('js/vendor/jquery.slimscroll.min.js')?>
<?=HTML::script('js/vendor/stylizationForm.js')?>
<?=HTML::script('js/placeholder.js')?>
<?=HTML::script('js/vendor/bootstrap/bootstrap-formhelpers-phone.js')?>
<?=HTML::script('js/vendor/jquery.flexslider-min.js')?>
<?=HTML::script('js/vendor/js/jquery.maskedinput.min.js')?>
    <script>
        $(function() {
            $(window).load(function() {
                $('.flexslider').flexslider({
                    animation: "slide",
                });
            });

            $('#slimScroll').slimScroll({
                height: $("#slimScroll").height(),
                railVisible: true,
                alwaysVisible: true
            });

            var navbarH = $('.navbar').outerHeight(),
                footerH = $('#footer').outerHeight(),
                windowH = $(window).outerHeight();

            $('#MainBlok_slimScroll').slimScroll({
                height: windowH-navbarH-footerH,
                alwaysVisible: true
            });


            $(window).resize(function() {
                $('#MainBlok_slimScroll').css("height", windowH-navbarH-footerH+'px');
                $("#MainBlok_slimScroll").parent().css("height", windowH-navbarH-footerH+'px');
                //$(".slimScrollBar").css({ height: height + 'px' });
            });

            $("[rel='tooltip']").tooltip();



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
</body>
</html>


