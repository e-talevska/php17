<?php include 'include/header.php' ?>
<?php 
    $name = '';
    $phone = '';
    $email = '';
    $message = '';
    $errors = array();
    
        if(isset($_POST['submit'])){
            $name = trim($_POST['name']);
                if($_POST['name'] == ''){
                    $errors['name'] = "Your name is required";
                }
        }
        if(isset($_POST['submit'])){
            $phone = trim($_POST['phone']);
                if(is_numeric($_POST['phone'])){ 
            }
            else{
                $errors['phone'] = "Phone number must be numeric";
            }
        }
        if(isset($_POST['submit'])){
            $email = trim($_POST['email']);
                if($_POST['email'] == ''){
                    $errors['email'] = "Your email is required";
        }
        elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $errors['email'] = "Your email is invalid";
            }
        }
        if(isset($_POST['submit'])){
                $message = trim($_POST['message']);
                if($_POST['message'] == ''){
                    $errors['message'] = "Write your message";
                }
        //no errors found//
        if(empty($errors)){
            include 'mail.php';
            $result = sendMail($email, $name, $message);
        }
        }
?>

    <!-- Page Content -->
    <div class="container">
        
        <?php 
            if(isset($result)){
                echo "<div class='alert alert-info'>$result</div>";
            }
        ?>
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact
                    <small>Subheading</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <h3>Send us a Message</h3>
                <form method="POST" name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input value="<?= $name; ?>" type="text" class="form-control" id="name" name="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"><?php echo isset($errors['name']) ? $errors['name'] : $erros = ''; ?></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input value="<?= $phone; ?>" type="tel" class="form-control" id="phone" name="phone" required data-validation-required-message="Please enter your phone number.">
                            <p class="help-block"><?php echo isset($errors['phone']) ? $errors['phone'] : $erros = ''; ?></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input value="<?= $email; ?>" type="email" class="form-control" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                            <p class="help-block"><?php echo isset($errors['email']) ? $errors['email'] : $erros = ''; ?></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea value="<?= $email; ?>" rows="10" cols="100" class="form-control" id="message" name="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                            <p class="help-block"><?php echo isset($errors['message']) ? $errors['message'] : $erros = ''; ?></p>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary" name="submit">Send Message</button>
                </form>
            </div>

        </div>
        <!-- /.row -->

<?php include 'include/footer.php' ?>