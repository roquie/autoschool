<?=HTML::style('css/lk/downloads.css')?>
<?=HTML::style('css/lk/view_doc.css')?>

<div class="row downloads">
    <div class="span4">
        <div class="dwn_block">
            <div class="row">

                    <div class="span1">
                        <img src="<?=URL::site('img/lk/w.png')?>" alt="word"/>
                    </div>
                    <div class="span3 pull-left">
                        <h2>Заявление</h2>
                        <div class="buttons_gr">
                            <a class="btn btn-info" href="<?=URL::site('lk/downloadStatement')?>">Скачать</a>
                            <a class="btn btn-success view_doc_createtmpfile" href="#view_doc_modal" data-url="<?=URL::site('lk/ajax/create_tmp_file/statement')?>" data-toggle="modal">Просмотр</a>
                        </div>
                    </div>
            </div>
        </div>

        <div class="dwn_block">
            <div class="row">
                <div class="span1">
                    <img src="<?=URL::site('img/lk/w.png')?>" alt="word"/>
                </div>
                <div class="span3 pull-left">
                    <h2>Договор</h2>
                    <div class="buttons_gr">
                        <a class="btn btn-info" href="<?=URL::site('lk/downloadContract')?>">Скачать</a>
                        <a class="btn btn-success view_doc_createtmpfile" href="#view_doc_modal" data-url="<?=URL::site('lk/ajax/create_tmp_file/contract')?>" data-toggle="modal">Просмотр</a>
                    </div>
            </div>
            </div>
        </div>

        <div class="dwn_block">
            <div class="row">
                <div class="span1">
                    <img src="<?=URL::site('img/lk/w.png')?>" alt="word"/>
                </div>
                <div class="span3 pull-left">
                    <h2>Квитанция</h2>
                    <div class="buttons_gr">
                        <a class="btn btn-info" href="<?=URL::site('lk/downloadTicket')?>">Скачать</a>
                        <a class="btn btn-success view_doc_createtmpfile" href="#view_doc_modal" data-url="<?=URL::site('lk/ajax/create_tmp_file/ticket')?>" data-toggle="modal">Просмотр</a>
                    </div>
            </div>
            </div>
        </div>
    </div>

    <div class="span4">
        <div class="dwn_block">
            <div class="row">
                <div class="span1">
                    <img style="height: 60px; padding-left: 18px" src="<?=URL::site('img/lk/z.png')?>" alt="zip"/>
                </div>
                <div class="span3 pull-left">
                    <h2>Скачать все архивом</h2>
                    <div class="buttons_gr">
                        <a class="btn btn-info" href="<?=URL::site('lk/downloadZip')?>">Скачать</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<script>
    $(function() {
        /**
         * post запрос на создание временного документа
         * -
         * формирование ссылки для просмотра документа в браузере
         */
        $('.view_doc_createtmpfile').on('click', function() {
            $.post(
                $(this).data('url'),
                {
                    data : {
                        csrf : $('.csrf').val()
                    }
                },
                function(response) {
                    $('#docs_viewer').attr('src', "http://view.officeapps.live.com/op/view.aspx?src="+response.data.url+"/"+response.data.file);
                    $('.csrf').val(response.csrf);
                },
                'json'
            );
        });

        /**
         * Перенос модального окна за пределы видимости div#wrap
         */
        $('#view_doc_modal').appendTo($('body'));
    });
</script>

<?=View::factory('view_doc')->render()?>

