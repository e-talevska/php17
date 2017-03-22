<?php
session_start()?>
<?php




if(isset($_COOKIE['username'])){
    header("Location: profile.php");
    exit;
}


$username = $pass= '';
$errors = [];
$rememberme= false;
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $rememberme= isset($_POST['rememberme'])? true : false;
        
              if(strlen(trim($username))==0){
                  $errors['username']="Username is required";
              }  
                if(strlen(trim($pass))==0){
                  $errors['pass']="Password is required";
              } 
    }
    if(empty($errors)){
        include 'db.php';
        foreach ($users as $u =>$p){
            if($u==$username && $p==$pass){
                
                setcookie("username", $username, time()+3600);
                //redirect the user to profile page
                header("Location: profile.php");
                exit;
                
            }  
               
        }
        $errors['pass'] = "The combination of username/password does not match";
    }


?>



<?php
$menuItem = 'login';
?>
<?php include 'templates/header.php'; ?>

    <!-- Page Content -->
    <div class="container">
       
        
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Login
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Login</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
                <!-- Embedded Google Map -->
                <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Contact Details</h3>
                <p>
                    3481 Melrose Place<br>Beverly Hills, CA 90210<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">P</abbr>: (123) 456-7890</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">E</abbr>: <a href="mailto:name@example.com">name@example.com</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                
                <form method='POST'>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Username:</label>
                            <input type="text" value="<?= $username; ?>" class="form-control" id="Username" name="username" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"><?php echo (isset($errors['username'])) ? $errors['username'] :' '; ?></p>
                           <?php
                            // if(isset($errors['name'])){
                               //  echo $errors['name'];
                            // }else {
                               // echo " ";
                            // } */
                            
                            ?>
                            
                        </div>
                    </div>
                    <div class="row">
            <div class="col-md-8">
               
                <form method='POST'>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Username:</label>
                            <input type="text" value="<?= $username; ?>" class="form-control" id="Username" name="username" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"><?php echo (isset($errors['username'])) ? $errors['username'] :' '; ?></p>
                           <?php
                            // if(isset($errors['name'])){
                               //  echo $errors['name'];
                            // }else {
                               // echo " ";
                            // } */
                            
                            ?>
                            
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>
                            Keep me logged in:  <input <?php if($rememberme){echo "checked=''";} ?> type="checkbox" value=""  class="form-control" id="rememberme" name="rememberme" >
                          
                            </label>
                        </div>
                    </div>
                    
                    
                    <!-- For success/fail messages -->
                </form>
            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <?php include 'templates/footer.php'; ?>

