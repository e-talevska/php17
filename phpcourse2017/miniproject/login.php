<?php

session_start();

if(!isset($_SESSION['username']) && isset ($_COOKIE['username'])) {
    $_SESSION['username'] = $_COOKIE['username'];
}

    if(isset($_SESSION['username'])) {
        header("Location: profile.php");
        exit;
    }

//form was submitted
$username = $pass ='';
$rememberme = false;
$errors = [];

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST ['username'];
    $pass = $_POST ['password'];
    $rememberme = isset($_POST['rememberme']) ? true : false;
    
    if (strlen(trim($username)) == 0) {
        $errors['username'] = "username is required";
    }
    if (strlen(trim($pass)) == 0) {
        $pass['pass'] = "password is required";
    }
    if(empty($errors)) {
        include 'db.php';
        foreach($users as $u => $p) {
            if($u == $username && $p == $pass) {
                
                $_SESSION['username'] = $username;
                
                if($rememberme) {
                //set cookie valid one hour
                setcookie ("username", $username, time() + 3600);
                //redirect the user to profile page
                }
                header("Location: profile.php");
                exit;
            }            
             
        }
            
            $errors['pass'] = "The combination does not match";
        }
    }

?>


<?php 
    $menuItem = "login";
?>
<?php include 'header.php';?>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            
            <?php
                if(isset($result)) {
                    echo "<div class='alert alert-info'>$result</div>";
                }
            ?>
            
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="services.php">Services</a>
                    </li>
                    <li class="active">
                        <a href="contact.php">Contact</a>
                    </li>
                   
                  
               
                        </ul>
                    
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Login
                    <small>Login</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
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
                <h3>Login</h3>
                <form name="sentMessage" id="contactForm" method="POST" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Username:</label>
                            <input value="<?=$username; ?>" type="text" class="form-control" id="username" name="username" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"><?php echo (isset($errors['username'])) ? $errors['username'] : ''; ?></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Password:</label>
                            <input value="<?=$pass; ?>" type="password" class="form-control" id="password" name="password" required data-validation-required-message="Please enter your password.">
                            <p class="help-block"><?php echo (isset($errors['pass'])) ? $errors['pass'] : ''; ?></p>
                        </div>
                    </div>
                    <div class="checkbox">
                        <div class="controls">
                            <label>
                            <input <?php if($rememberme) { echo "checked-";} ?> value="" type="checkbox" id="rememberme" name="rememberme" required data-validation-required-message="Please enter your password.">
                            Keep me logged in
                            </label>
                        </div>
                    </div>
                    
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" name="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
                    
                   

            
        <?php include 'footer.php';?>

