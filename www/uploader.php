<?php
if(move_uploaded_file($_FILES["file"]["tmp_name"], 'upl/'.$_FILES['file']['name'])) {
    echo json_encode(array(
        'filename' => $_FILES['file']['name']
    ));
}