<?php
//check if submitted
//make validation of inputs
//var_dump($_POST);
$fullName = '';
$eMail = '';
$phoneNumber = '';
$message = '';
$errors = [];
if(isset($_POST['submit'])){
    $fullName = $_POST['name'];
    $eMail = $_POST['email'];
    $phoneNumber = $_POST['phone'];
    $message = $_POST['message'];
    //if full name left empty show error
    if($message == ''){
        $errors['message'] = "Please Enter Message";
    }
    if($eMail == ''){
        $errors['email'] = "E-Mail is Required";
    }
    if($phoneNumber == ''){
        $errors['phone'] = "Phone Number is Required";
    }
    if($fullName == ''){
        $errors['name'] = "Full Name is Required";
    }
}//var_dump($fullName);
?>
<?php 
$menuItem = 'contact';
?>
<?php include 'nav.php';?>

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <h3>Send us a Message</h3>
                <form method="POST" name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input value ="<?= $fullName; ?>" type="text" class="form-control" id="name" name="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"><?php echo (isset($errors['name'])) ? $errors['name'] : '';?> </p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input value="<?= $phoneNumber; ?>" type="tel" class="form-control" id="phone" name="phone" required data-validation-required-message="Please enter your phone number.">
                            <p class="help-block"><?php echo (isset($errors['phone'])) ? $errors['phone'] : '';?> </p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input value=" <?= $eMail; ?>" type="email" class="form-control" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                            <p class="help-block"><?php echo (isset($errors['phone'])) ? $errors['phone'] : '';?> </p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" name="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"><?= $message; ?></textarea>
                            <p class="help-block"><?php echo (isset($errors['message'])) ? $errors['message'] : '';?> </p>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>

        </div>
        <!-- /.row -->

       <?php include 'footer.php';?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <!--<script src="js/contact_me.js"></script>-->

</body>

</html>
