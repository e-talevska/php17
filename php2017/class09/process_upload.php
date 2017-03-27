<?php
 $errors = [
     UPLOAD_ERR_INI_SIZE => 'Larger than max upload size',
     UPLOAD_ERR_FORM_SIZE => 'Larger than max post size',
     UPLOAD_ERR_PARTIAL => 'File partially uploaded',
     UPLOAD_ERR_NO_FILE => 'No file selected',
     UPLOAD_ERR_NO_TMP_DIR => 'No tmp dir',
     UPLOAD_ERR_CANT_WRITE => 'Upload folder permissions error',
     UPLOAD_ERR_EXTENSION => 'Extension not supported'
 ];
 if(isset($_POST['upload'])) {
     if(isset($_FILES['uploaded_file']) && $_FILES['uploaded_file']['error'] == 0) {
             move_uploaded_file($_FILES['uploaded_file']['tmp_name'], 'uploads/'. 
                     $_FILES['uploaded_file']['name']);
           }
 }