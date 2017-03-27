<?php
session_start();

if(!isset($_SESSION['username']) && isset($_COOKIE['username'])) { 
    $_SESSION['username'] = $_COOKIE['username'];
}

if(isset($_SESSION['username'])) {
    header("Location: profile.php");
    exit;
}
$username = $pass ='';
$rememberme = false;
$errors = [];
if ($_SERVER['REQUEST_METHOD'] == "POST") { 
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $rememberme = isset($_POST['rememberme']) ? true : false;
    if(strlen(trim($username)) == 0) {
        $errors['username'] = "Username is requred";
    }
    if(strlen(trim($pass)) == 0 ) {
        $errors['pass'] = "Password is requred";
    }
    if (empty($errors)) {
        include 'db.php';
        foreach ($users as $u => $p) {
        if ($u == $username && $p == $pass){ 
            
            $_SESSION['username'] = $username;
            if($rememberme) {
          
            
            //set cookie valid one hour
            setcookie("username", $username, time() + 3600);
        }
            //redirect the user to profile page
            header("Location: profile.php");
            exit;
            } 
       } $errors['pass'] = "The combination of username/password does not match!";
    } 
}
 ?>
<?php $menuItem = 'login';    
?>
<?php include "tamplates/header.php"; ?>
    <div class="container">
<?php 
if(isset($result)) {
        echo "<div class='alert alert-info'>$result</div>";
} ?>
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Login</h1>
          
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Login</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
       
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <h3>Login</h3>
                <form method="POST" name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>User Name:</label>
                                <input value="<?=$username; ?>"  type="text" class="form-control" id="username" name="username" >
                            <p class="help-block"> <?php echo (isset($errors ['username'])) ? $errors['username'] : ''; ?></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Password:</label>
                            
                            <input type="tel" class="form-control" id="password" name="password" >
                        <p class="help-block"> <?php echo (isset($errors ['pass'])) ? $errors['pass'] : ''; ?></p>
                          </div>
                    </div>
                    <div class="checkbox">
                        <div class="controls">
                            <label>
                            <input <?php if($rememberme) {echo "checked='' ";} ?> value=""  type="checkbox" id="rememberme" name="rememberme" > 
                            Keep me logged in
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

 <?php include "tamplates/footer.php"; ?>