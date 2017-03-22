<?php 
    session_start();
    $active = "login"; 
    if(isset($_COOKIE['username'])){
        header("location: profile.php");
        exit;
    }
?>
<?php 
    include("inc/header.php"); 
        $username = "";
        $password = "";
        $errors = array();
        $rememberme = false;
        
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $rememberme = isset($_POST['rememberme']) ? true : false;
        if(strlen(trim($username)) == 0){
            $errors['username'] = "Your username is required";
        }
        if(strlen(trim($password)) == 0){
            $errors['password'] = "Your password is required";
        }
    }
    //var_dump(basename($_SERVER['REQUEST_URI']));
    
    if(empty($errors)){
        include("users.php");
        foreach($users as $user => $pass){
            if($user == $username && $pass == $password){
                // set cookie for one hour
                setcookie("username", $username, time() + 3600);
                
                // redirect user to user profile
                header("location: profile.php");
                exit;
            }
            $errors['password'] = "Username or Password do not match with our database";
        }
    }
?>
<body>

    <?php include("inc/main-menu.php"); ?>

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

        <!-- Login Form -->
        <div class="row">
            <div class="col-md-6">
                <form name="sentMessage" id="contactForm" novalidate method="POST">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label for="username">Username:</label>
                            <input type="text" value="<?php echo $username; ?>" name="username" class="form-control" id="username" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"><?php echo isset($errors['username']) ? $errors['username'] : ""; ?></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label for="password">Password:</label>
                            <input type="password" value="<?php echo $username; ?>" name="password" class="form-control" id="password" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"><?php echo isset($errors['password']) ? $errors['password'] : ""; ?></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label for="remember">Remember Me?</label> <input <?php if($rememberme){echo "checked=\"\"";} ?> type="checkbox" id="remember" name="rememberme" value="">
                        </div>
                    </div>
                    
                    <!-- For success/fail messages -->
                    <button type="submit" name="submit" class="btn btn-primary">Login</button>
                </form>
            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <?php include("inc/footer.php"); ?>