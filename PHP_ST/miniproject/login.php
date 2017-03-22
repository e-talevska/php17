<?php
session_start();

if (isset($_COOKIE['username'])) {
    header("Location: profile.php");
    exit;
}

//form was submited
$Username = $pass = '';
$errors = [];
$rememberme = false;
   
if($_SERVER['REQUEST_METHOD']== "POST") {
    $Username = $_POST['Username'];
    $pass = $_POST['password'];
    $rememberme = isset($_POST['rememberme']) ? true : false;
        
    if(strlen (trim($Username))== 0){
        $errors['Username']="Username is required";
        }
        if(strlen (trim($pass))== 0){
        $errors['pass']="Password is required";
         }
    
    if(empty($errors)) {
        include 'db.php';
            foreach ($users as $u => $p) {
             if($u == $Username && $p == $pass){
                //set cookie valid 1hr
            setcookie("username", $Username, time()+3600);
        //redirect the user to profile page
            header("Location: profile.php");
            exit;
            }
         }
   $errors['pass'] = "The combination of username/password does not match";
    }
}

?>

<?php

$menuItem = 'login';
include 'header.php';
?>
    <!-- Page Content -->
    <div class="container">
       
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact
                    <small>Subheading</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

         <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <form method="POST" name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Username:</label>
                            <input value="<?=$Username;?>" type="text" class="form-control" id="Username" name="Username">
                      <p class="help-block"><?php echo (isset($errors['Username'])) ? $errors['Username'] :''; ?></p>
                        </div>
                    </div>
                    
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Password:</label>
                           <input value= "<?=$pass;?>" type="password" class="form-control" id="password" name="password">
                <p class="help-block"><?php echo (isset($errors['pass'])) ? $errors['pass'] :''; ?></p>
                        </div>
                    </div>
                <div class="checkbox">
                        <div class="controls">
                            <label>
                           <input  <?php if($rememberme) {echo "checked=''";}?>  value= "" type="checkbox" id="rememberme" name="rememberme">
                             Keep me loged in!
                            </label>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" name="submit" class="btn btn-primary">Login</button>
                </form>
            </div>

        </div>
        <!-- /.row -->
     <?php include 'Foother.php';?>