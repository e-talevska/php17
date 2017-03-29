<?php
session_start();//mora da ima na pocetok za da se startuva session
//var_dump($_FILES);//niza od nizi
 $errors = [
     UPLOAD_ERR_INI_SIZE => 'Larger then max upload size',
     UPLOAD_ERR_FORM_SIZE => 'Larger then max post size',
     UPLOAD_ERR_PARTIAL =>'File partialy uploaded',
     UPLOAD_ERR_NO_FILE =>'No file selected',//ova se pecati kako poraka so crveno
     UPLOAD_ERR_NO_TMP_DIR =>'No tmp dir',
     UPLOAD_ERR_CANT_WRITE =>'Uoload folder permissions error',
     UPLOAD_ERR_EXTENSION =>'Extension not supported'
     
 ];
//var_dump($_FILES);
 if (isset($_POST['upload'])){//name of button upload dali e sabmit
     if (isset($_FILES['uploaded_file']) && $_FILES['uploaded_file']['error']==0){
         move_uploaded_file($_FILES['uploaded_file']['tmp_name'],'uploads/'.$_FILES['uploaded_file']['name']);
     //se premestuva od privremeno tmp_name do folder uploads so sooedvetno ime, se zema originalnoto ime ne se menuva
     $_SESSION['upload_success'] = "File uploaded successfully";
 
 } else if ($_FILES['uploaded_file']['error']!=0) { 
         //echo $errors[$_FILES['uploaded_file']['error']]; ne e prakticno za korisnikot zatoa so session
         $_SESSION['upload_error'] = $errors[$_FILES['uploaded_file']['error']];
     }//kreiranje sesija bidejki mora da go vrati korisnikot nazad
     header ("Location: upload.php");
 }//ako se prenesuva nes od edna vo druga skripta se koristi session