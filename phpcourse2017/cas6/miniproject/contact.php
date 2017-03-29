<?php
    //check if submitted
    //make validation of inputs
$fullName = '';
$errors = [];
if(isset($POST['submit'])) {
    $fullName =($_POST['name']);
        
    //if full name left empty show error
    if(trim($fullName == "")) {
        $errors['name'] = "Full name is required";
    }
}

$phoneN = '';
if(isset($POST['submit'])) {
    $phoneN =($_POST['name']);
        
    //if full name left empty show error
    if(trim($phoneN == "")) {
        $errors['name'] = "Phone is required";
    }
}
?>

<?php
$menuItem ='contact';
?>
<?php include 'templates/header.php'; ?>



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
                            <input value=" <?php $fullName ?>" type="text" class="form-control" id="name" name="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"><?php echo (isset($errors['name'])) ? $errors['name'] : ''; ?></p>
                           
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input value=" <?php $phoneN ?>"  type="text" class="form-control" id="phone" name="phone" required data-validation-required-message="Please enter your phone number.">
                            <p class="help-block"><?php echo (isset($errors['name'])) ? $errors['name'] : ''; ?></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="text" class="form-control" id="email" name="email" required data-validation-required-message="Please enter your email address.">
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
                    <button type="submit" class="btn btn-primary" name="submit">Send Message</button>
                </form>
            </div>

        </div>
        <!-- /.row -->


    
    <?php include 'templates/footer.php'?>
