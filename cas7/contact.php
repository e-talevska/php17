<?php include 'include/header.php';
$fullName = '';
$phone = '';
$email = '';
$message = '';
$errors = array();
if(isset($_POST['submit'])) {
    $fullName = trim($_POST['name']);
        if($fullName == ""){
            $errors['name'] = "Full name is required";
        }
}
if(isset($_POST['phone'])){
    if(!empty($_POST['phone'])){
    if(is_numeric($_POST['phone'])){
            $phone = trim($_POST['phone']);
            if($phone == ''){
                $errors['phone'] = "Phone is required";
            }
        else{
            $errors['phone'] = "Phone number is required";
        }
    }
    else{
        $errors['phone'] = "Phone number must be numeric";
    }
    }
}
if(isset($_POST['email'])){
    if(strlen($_POST['email']) <= 20){
        $email = trim($_POST['email']);
        if($email == ''){
            $errors['email'] = "Email is required";
        }
    }
    else{
        $errors['email'] = "Email can't be more than 20 characters";
    }
}
if(isset($_POST['message'])){
    
}
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
                            <input value="<?= $fullName; ?>" type="text" class="form-control" id="name" name="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"><?php echo (isset($errors['name'])) ? $errors['name'] : ''; ?></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input value="<?= $phone; ?>" type="tel" class="form-control" id="phone" name="phone" required data-validation-required-message="Please enter your phone number.">
                            <p class="help-block"><?php echo (isset($errors['phone'])) ? $errors['phone'] : ''; ?></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input value="<?= $email; ?>" type="email" class="form-control" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                       <p class="help-block"><?php echo (isset($errors['email'])) ? $errors['email'] : ''; ?></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" name="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>

        </div>
        <!-- /.row -->

<?php include 'include/footer.php';?>