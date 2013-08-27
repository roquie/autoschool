/**
 * Copyright 2013, Viktor Melnikov
 *
 * Стилизация элементов формы
 * Checkbox, radio, select
 */
$(function() {

/* ========== CheckBox ========== */
    $('body').on('click', '.check', function() {
        var $this = $(this);
        if( $this.find('input').prop('checked') ) {
            $this.removeClass('active');
            $this.find('input').removeProp('checked');
        } else {
            $this.addClass('active');
            $this.find('input').prop('checked', true);
        }
    });
/* ========== Radio ========== */
    $('.radioblock').find('.radio').each(function() {
        $(this).on('click', function() {
            var valueRadio = $(this).html();
            $(this).parent().find('.radio').removeClass('active');
            $(this).addClass('active');
            $(this).parent().find('input').val(valueRadio);
        });
    });
/* ========== Select ========== */
    $('body').on('click', '.slct', function() {
        /* Заносим выпадающий список в переменную */
        var dropBlock = $(this).parent().find('.drop');

        /* Делаем проверку: Если выпадающий блок скрыт то делаем его видимым*/
        if( dropBlock.is(':hidden') ) {
            dropBlock.slideDown();

            /* Выделяем ссылку открывающую select */
            $(this).addClass('active');

            /* Работаем с событием клика по элементам выпадающего списка */
            $('.drop').find('li').click(function(){

                /* Заносим в переменную HTML код элемента
                 списка по которому кликнули */
                var selectResult = $(this).html();

                /* Находим наш скрытый инпут и передаем в него
                 значение из переменной selectResult */
                $(this).parent().parent().find('input').val(selectResult);
                /* Передаем значение переменной selectResult в ссылку которая
                 открывает наш выпадающий список и удаляем активность */
                $(this).parent().parent().find('.slct').removeClass('active').html(selectResult);

                /* Скрываем выпадающий блок */
                dropBlock.slideUp();
            });

            /* Продолжаем проверку: Если выпадающий блок не скрыт то скрываем его */
        } else {
            $(this).removeClass('active');
            dropBlock.slideUp();
        }

        /* Предотвращаем обычное поведение ссылки при клике */
        return false;
    });
});
