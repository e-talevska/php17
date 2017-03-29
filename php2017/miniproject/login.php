<?php 
session_start();
if(isset($_COOKIE['username'])){
    header("location: profile.php");
    exit;
}
    // form was submited // 
$username = $pass = '';
$rememberme = false;
$errors = [];

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $username = $_POST['username'];
        $pass = $_POST['password'];
        $rememberme = isset($_POST['rememberme']) ? true : false;
        
        if(strlen(trim($username)) == 0) {
            $errors['username'] = "Username is required";
        }
        if(strlen(trim($pass)) == 0) {
            $errors['pass'] = "Password is required";
        }
        if(empty($errors)) {
            include 'db.php';
            foreach($users as $u => $p) {
                if($u == $username && $p == $pass) {
                    // set cookie vlid one hour //
                    setcookie("username", $username, time() + 3600);
                    // redirect the user to profile page //
                    header("location: profile.php");
                    exit;
                    
                } 
            }
            $errors['pass'] = "Username or password doesn't match in database";
            
        }
    }


?>


<?php include 'include/header.php' ?>

    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Login</h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Login</li>
                </ol>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4">
                <form method="POST" name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Username:</label>
                            <input value="<?=$username;?>" type="text" class="form-control" id="username" name="username" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"><?php echo isset($errors['username']) ? $errors['username'] : $erros = ''; ?></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Password:</label>
                            <input value="<?=$pass;?>" type="password" class="form-control" id="password" name="password" required data-validation-required-message="Please enter your phone number.">
                            <p class="help-block"><?php echo isset($errors['pass']) ? $errors['pass'] : $erros = ''; ?></p>
                        </div>
                    </div>
                     <div class="checkbox">
                        <div class="controls">
                            <label>
                            <input <?php if($rememberme){ echo "checked=''";} ?>value="" type="checkbox" id="rememberme" name="rememberme" required data-validation-required-message="Please enter your phone number.">
                                Keep me logged in:
                            </label>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary" name="submit">Login</button>
                </form>
            </div>

        </div>
        <!-- /.row -->

<?php include 'include/footer.php' ?>