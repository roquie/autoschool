<!--бар с кнопками-->
<div class="btn-toolbar" data-role="editor-toolbar" data-target="#editor">
    <div class="btn-group">
        <a class="btn dropdown-toggle" rel='tooltip' data-toggle="dropdown" id="font" title="Шрифт"><i class="icon-font"></i><b class="caret"></b></a>
        <ul class="dropdown-menu">
        </ul>
    </div>
    <div class="btn-group">
        <a class="btn dropdown-toggle" rel='tooltip' data-toggle="dropdown" title="Размер"><i class="icon-text-height"></i>&nbsp;<b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a data-edit="fontSize 5"><font size="5">Huge</font></a></li>
            <li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li>
            <li><a data-edit="fontSize 1"><font size="1">Small</font></a></li>
        </ul>
    </div>
    <div class="btn-group">
        <a class="btn" rel='tooltip' data-edit="bold" title="Жирный (Ctrl+B)"><i class="icon-bold"></i></a>
        <a class="btn" rel='tooltip' data-edit="italic" title="Курсив (Ctrl+I)"><i class="icon-italic"></i></a>
        <a class="btn" rel='tooltip' data-edit="underline" title="Подчёркнутый (Ctrl+U)"><i class="icon-underline"></i></a>
    </div>
    <div class="btn-group">
        <a class="btn" rel='tooltip' data-edit="insertunorderedlist" title="Маркированный список list"><i class="icon-list-ul"></i></a>
        <a class="btn" rel='tooltip' data-edit="insertorderedlist" title="Нумерованный список list"><i class="icon-list-ol"></i></a>
    </div>
    <div class="btn-group">
        <a class="btn" rel='tooltip' data-edit="justifyleft" title="Выравнить по левому краю (Ctrl+L)"><i class="icon-align-left"></i></a>
        <a class="btn" rel='tooltip' data-edit="justifycenter" title="Выравнить по центру (Ctrl+E)"><i class="icon-align-center"></i></a>
        <a class="btn" rel='tooltip' data-edit="justifyright" title="Выравнить по правому краю (Ctrl+R)"><i class="icon-align-right"></i></a>
        <a class="btn" rel='tooltip' data-edit="justifyfull" title="Выравнить по ширине (Ctrl+J)"><i class="icon-align-justify"></i></a>
    </div>
    <div class="btn-group">
        <a class="btn dropdown-toggle" rel='tooltip' data-toggle="dropdown" title="Добавить ссылку"><i class="icon-link"></i></a>
        <div class="dropdown-menu input-append"  style="padding: 5px">
            <input class="span3" value="http://" id="appendedInputButton" type="text" data-edit="createLink" style="margin-right: -5px">
            <button class="btn" type="button">Добавить</button>
        </div>
    </div>
    <div class="btn-group">
        <a class="btn" data-edit="undo" rel='tooltip' title="Отменить (Ctrl+Z)"><i class="icon-undo"></i></a>
    </div>

</div>

<div id="<?=$id_div_editor?>" class="div-block" data-req="true" data-name="message" data-error="Заполните поле Сообщение"></div>

<?if($script_load):?>

<?=HTML::script('js/vendor/bootstrap/bootstrap-wysiwyg.js')?>
<?=HTML::script('js/vendor/jquery.hotkeys.js')?>
    <script>
        $().ready(function() {
            initToolbarBootstrapBindings();
            $('#editor').wysiwyg();
        });
        function initToolbarBootstrapBindings() {
            var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
                    'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
                    'Times New Roman', 'Verdana'],
                fontTarget = $('#font').siblings('.dropdown-menu');
            $.each(fonts, function (idx, fontName) {
                fontTarget.append($('<li><a data-edit="fontName ' + fontName +'" style="font-family:\''+ fontName +'\'">'+fontName + '</a></li>'));
            });
            $('.dropdown-menu input').click(function() {return false;})
                .change(function () {$(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');})
                .keydown('esc', function () {this.value='';$(this).change();});
        }
    </script>
<?endif?>