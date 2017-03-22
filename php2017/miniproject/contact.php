<?PHP
// CHECK IF SUBMITTED
//make vadlidation of inputs
$fullName = $phone = $message = $email = '';
$errors = [];

if(isset($_POST['submit'])) { 
       $fullName = $_POST['name'];
         $phone = $_POST['phone'];
           $email = $_POST['email']; 
             $message = $_POST['message'];
           
       if (trim($fullName) == "") {
           //if full name left emty show error  
           
           $errors['name'] = "Full Name is required!";   
       }
       $phone = $_POST['phone'];
       if (trim($phone) == "") {
           //if full name left emty show error  
           
           $errors['phone'] = "Phone Number is required!";   
       }
       $email = $_POST['email'];
       if (trim($email) == "") {
           //if full name left emty show error  
           
           $errors['email'] = "Email Adress is required!";   
       } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
           $errors ['email'] = "Email is invalid!";
          
       }
       // no errors found
       if(empty($errors)){
           include 'mail.php';
           $result = sendMail($email, $name, $message);
       }
       $message = $_POST['message'];
       if (trim($message) == "") {
           //if full name left emty show error  
           
           $errors['message'] = "Message is required!";   
       } 
}
?>
<?php
$menuItem = 'contact';    
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

        <!-- Content Row -->
       
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <h3>Send us a Message</h3>
                <form method="POST" name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                                <input value="<?= $fullName;?>"  type="text" class="form-control" id="name" name="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"> <?php echo (isset($errors ['name'])) ? $errors['name'] : ''; ?></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            
                            <input type="tel" class="form-control" id="phone" name="phone" required data-validation-required-message="Please enter your phone number.">
                        <p class="help-block"> <?php echo (isset($errors ['phone'])) ? $errors['phone'] : ''; ?></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            
                            <input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                       <p class="help-block"> <?php echo (isset($errors ['email'])) ? $errors['email'] : ''; ?></p> </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            
                            <textarea rows="10" cols="100" class="form-control" id="message" name="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        <p class="help-block"> <?php echo (isset($errors ['message'])) ? $errors['message'] : ''; ?></p>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>

        </div>
        <!-- /.row -->

 <?php include "tamplates/footer.php"; ?>