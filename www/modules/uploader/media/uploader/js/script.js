$(function(){

    var ul = $('#uploadFiles ul'),
        html_from_textarea = '',
        tpl,
        url = $('#upload').data('url');

    $('#fileUpload i').on('click', function(e) {
        e.preventDefault();
        $(this).parent().find('input').click();
    });

    $('#upload').fileupload({
        url: url,
        dropZone: $('#editor'),
        dataType: 'json',
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
        maxFileSize: 5000000 // 5 MB
    }).on('fileuploadadd', function (e, data) {
        tpl = $('<li class="working"><input type="text" value="0" data-width="48" data-height="48"'+
            ' data-fgColor="#0788a5" data-readOnly="1" data-bgColor="#3e4043" /><p></p><span></span></li>');

        tpl.find('p').text(data.files[0].name).append('<i>' + formatFileSize(data.files[0].size) + '</i>');
        data.context = tpl.prependTo(ul);
        tpl.on('click', 'span', function(){
            var parent = $(this).parent('li');
            if(parent.hasClass('working')) {
                parent.find('i').before('<br>Загрузка остановлена.');
                data.abort();
            }
            parent.delay(2000).fadeOut(function() {
                parent.remove();
            });
        });
    }).on('fileuploadprocessalways', function (e, data) {
        var index = data.index,
            file = data.files[index],
            node = $(data.context[index]);
        if (file.error) {
            node.addClass('error').find('i').before('&nbsp;&nbsp;&nbsp;Неверный тип файла.');
        }
        if (index + 1 === data.files.length) {
            node.find('input').knob();
            //data.submit();
        }
    }).on('fileuploadprogress', function (e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        data.context.find('input').val(progress).change();
        if(progress == 100) {
            data.context.removeClass('working');
        }
    }).on('fileuploaddone', function (e, data) {
    }).on('fileuploadfail', function (e, data) {
        data.context.addClass('error');
    });

    $(document).on('drop dragover', function (e) {
        e.preventDefault();
        return false;
    });

    function formatFileSize(bytes) {
        if (typeof bytes !== 'number') {
            return '';
        }

        if (bytes >= 1000000000) {
            return (bytes / 1000000000).toFixed(2) + ' GB';
        }

        if (bytes >= 1000000) {
            return (bytes / 1000000).toFixed(2) + ' MB';
        }

        return (bytes / 1000).toFixed(2) + ' KB';
    }

});