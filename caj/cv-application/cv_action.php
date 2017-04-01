<?php
    session_start();
    $errors = array();
    $extensions = array("txt", "doc", "docx", "pdf");
    $picture_extension = array("jpg", "jpeg", "png", "gif", "bmp");
    
    $file_errors = array(
        UPLOAD_ERR_INI_SIZE => "File is larger than maximum upload size.",
        UPLOAD_ERR_FORM_SIZE => "File is larger than max post size.",
        UPLOAD_ERR_PARTIAL => "File partialy uploaded",
        UPLOAD_ERR_NO_FILE => "No files selected",
        UPLOAD_ERR_NO_TMP_DIR => "No tmp dir",
        UPLOAD_ERR_CANT_WRITE => "Upload folder permission errors",
        UPLOAD_ERR_EXTENSION => "Extension not supported",
    );
    
    if(isset($_POST['submit'])){
        if(!empty($_POST['name']) && !empty($_POST['email'])){
            $email = trim($_POST['email']);
            $name = trim($_POST['name']);
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                if(strlen($name) > 3){
                    var_dump($_FILES);
                    if(isset($_FILES['picture']) && $_FILES['picture']['error'] == 0){
                        if(isset($_FILES['cv']) && $_FILES['cv']['error'] == 0){
                            $picture = pathinfo($_FILES['picture']['name']);
                            $cv = pathinfo($_FILES['cv']['name']);
                            if(in_array($picture['extension'], $picture_extension)){
                                if(in_array($cv['extension'], $extensions)){
                                    // MOVE FILES AND COUNT FILES
                                }
                                else{
                                    $errors[] = "Please provide valid CV";
                                }
                            }
                            else{
                                $errors[] = "Please provide valid picture";
                            }
                        }
                        else{
                            $errors[] = "Your CV is required.";
                        }
                    }
                    elseif($_FILES['picture']['error'] != 0 || $_FILES['cv']['error'] != 0){
                        $_SESSION['errors'] = $file_errors[$_FILES['picture']['error']];
                        $_SESSION['errors'] = $file_errors[$_FILES['cv']['error']];
                    }
                    //Problem with preg_match
//                    if(preg_match('/^[a-zA-Z0-9]$/', $name)){
//                    }
//                    else{
//                        $errors[] = "Your name contains invalid characters, please correct your name";
//                    }
                }
                else{
                    $errors[] = "Your name is too short, please enter valid name";
                }
            }
            else{
                $errors[] = "E-mail is not valid, please enter valid email";
            }
        }
        else{
            $errors[] = "Name and E-mail are required fields";
        }
    }
    $_SESSION['errors'] = $errors;
    
//    $file = pathinfo($_FILES['picture']['name']);
//    echo "<pre>";
//    var_dump($file);
//    var_dump($_FILES['cv']);
//    var_dump($_FILES['picture']);
//    echo "</pre>";
    
    header("location: index.php");
?>