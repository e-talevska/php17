<?php
    session_start();
    $errors = array();
    if(isset($_POST['submit'])){
        if(!empty($_POST['name']) && !empty($_POST['email'])){
            $email = trim($_POST['email']);
            $name = trim($_POST['name']);
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                if(strlen($name) > 3){
                    var_dump($_FILES);
                    if(isset($_FILES['picture']) && $_FILES['picture']['error'] == 0){
                        if(isset($_FILES['cv']) && $_FILES['cv']['error'] == 0){
                            
                        }
                        else{
                            $errors[] = "Your CV is required.";
                        }
                    }
                    else{
                        $errors[] = "Picture is required, please re-upload your picture.";
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
    
    header("location: index.php");
?>