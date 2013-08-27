<?=HTML::script('media/js/jquery.uploadifive.min.js')?>
<?=HTML::style('media/css/uploadifive.css')?>


	<form>
		<div id="queue"></div>
		<input id="file_upload" name="file_upload" type="file" multiple="true">
		<a  class="btn" href="javascript:$('#file_upload').uploadifive('upload')"> Загрузить</a>
	</form>

	<script type="text/javascript">
		<?php $timestamp = time();?>
		$(function() {
			$('#file_upload').uploadifive({
				'auto'             : <?=$cfg['auto']?>,
				'checkScript'      : '<?=$cfg['check_script']?>',
				'formData'         : {
									   'timestamp' : '<?=$timestamp;?>',
									   'token'     : '<?=md5(md5($cfg['salt'] . $timestamp));?>'
				                     },
				'queueID'          : 'queue',
				'uploadScript'     : '<?=$cfg['upload_script']?>',
                'buttonText'       : '<button class="btn">Добавить</button>',
                'uploadLimit'      : <?=$cfg['upload_limit']?>,
                'fileSizeLimit'    : <?=$cfg['file_size_limit']?>,
                'dnd'              : <?=$cfg['drag-n-drop']?>,
               // 'fileType'         : 0


				//'onUploadComplete' : function(file, data) { console.log(data); }
			});
		});
	</script>
