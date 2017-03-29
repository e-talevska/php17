<?php session_start();
$errors = [
    UPLOAD_ERR_INI_SIZE => 'larger than max upload size',
    UPLOAD_ERR_FORM_SIZE => 'larger than max post size',
    UPLOAD_ERR_PARTIAL => 'file partialy selected',
    UPLOAD_ERR_NO_FILE => 'no file selected',
    UPLOAD_ERR_NO_TMP_DIR => 'no tmp dir',
    UPLOAD_ERR_CANT_WRITE => 'upload folder permition error',
    UPLOAD_ERR_EXTENSION => 'extension not suported'
];
if(isset($_POST['upload'])){
    if(isset($_FILES['uploaded_file']) && $_FILES['uploaded_file']['error'] == 0){
        move_uploaded_file($_FILES['uploaded_file']['tmp_name'], 'uploads/'.$_FILES['uploaded_file']['name']);
        $_SESSION['upload_succsess'] = 'file uploaded succsessfully';
    }  elseif($_FILES['uploaded_file']['error'] != 0) {
        $_SESSION['upload_error'] = $errors[$_FILES['uploaded_file']['error']];
    }
    header("Location: upload.php");
}