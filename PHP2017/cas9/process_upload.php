<?php
session_start();
$errors = [ 
    UPLOAD_ERR_INI_SIZE =>'Larger than max upload size',
    UPLOAD_ERR_FORM_SIZE => 'Larger than max post size',
    UPLOAD_ERR_PARTIAL => 'File partialy uploaded',
    UPLOAD_ERR_NO_FILE => 'No file selected',
    UPLOAD_ERR_NO_TMP_DIR => 'no tmp dir',
    UPLOAD_ERR_CANT_WRITE => 'upload folder permission error',
    UPLOAD_ERR_EXTENSION => 'Extension not suported'
];
// var_dump($_FILES); exit;
if(isset($_POST['upload'])){
    if(isset($_FILES['uploaded_file']) && $_FILES['uploaded_file']['error']==0){
        move_uploaded_file($_FILES['uploaded_file']['tmp_name'], 'uploads/'. $_FILES['uploaded_file']['name']);
        $_SESSION['upload_success']= "file uploaded successfully";
    } else if($_FILES['uploaded_file']['error']!= 0 ){
        $_SESSION['upload_error'] = $errors[$_FILES['uploaded_file']['error']!= 0];
    
    }
    header("Location: upload.php");
}

