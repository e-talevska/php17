<?php
$fullName="";
$number="";
$email="";
$message="";

$errors=[];
if(isset($_POST['sent'])){
    $fullName=  trim($_POST['name']);
    $number= trim($_POST['number']);
    $email=  trim($_POST['email']);
    $message=  trim($_POST['message']);
    
    if($fullName==""){
       $errors['fullName']= "full name is required!";
    }
    if($number==""){
       $errors['number']= "number is required!";
    }
     if($email==""){
       $errors['email']= "email is required!";
    }
     if($message==""){
       $errors['message']= "message is required!";
    }
}
?>

<?php include 'template/header.php'; ?>
    <!-- Page Content -->
 
    <div class="container">     

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h3>Send us a Message</h3>
                <form method="POST" name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input value="<?= $fullName; ?>" type="text" class="form-control" id="name" name="name" required data-validation-required-message="Please enter your name.">
                            <p style="color:red;"><?php echo (isset($errors['fullName']))? $errors['fullName']: ""; ?></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input value="<?= $number; ?>" type="tel" class="form-control" id="phone" name="number" required data-validation-required-message="Please enter your phone number.">
                            <p style="color:red;"><?php echo (isset($errors['number']))? $errors['number']: ""; ?></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input value="<?= $email; ?>" type="email" class="form-control" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                            <p style="color:red;"><?php echo (isset($errors['email']))? $errors['email']: ""; ?></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" name="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                            <p style="color:red;"><?php echo (isset($errors['message']))? $errors['message']: ""; ?></p>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary" name="sent" >Send Message</button>
                </form>
            </div>

        </div>
        <!-- /.row -->

 

 <?php include "template/footer.php"; ?>
    <!-- /.container -->

    <!-- jQuery -->
<!--    <script src="js/jquery.js"></script>

     Bootstrap Core JavaScript 
    <script src="js/bootstrap.min.js"></script>

     Contact Form JavaScript 
     Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. 
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>-->

</body>

</html>
