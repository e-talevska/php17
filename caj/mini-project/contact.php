<?php $active = "contact"; ?>
<?php 
    include("inc/header.php"); 
    //var_dump(basename($_SERVER['REQUEST_URI']));
    
    $name = "";
    $phone = "";
    $email = "";
    $message = "";
    
    $errors = array();
    // Check if button is submitted
    // make validation of inputs
    if(isset($_POST['submit'])){
        $name = trim($_POST['name']);
        
        if($name == ""){
            $errors['name'] = "full name required";
        }
        
        $phone = trim($_POST['phone']);
        if(empty($phone)){
            $errors['phone'] = "Phone field is required";
        }
        
        $email = trim($_POST['email']);
        if(empty($email)){
            $errors['email'] = "E-mail field is required";
        }
        
        $message = trim($_POST['message']);
        if(empty($message)){
            $errors['message'] = "Your message is required";
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

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <h3>Send us a Message</h3>
                <form name="sentMessage" id="contactForm" novalidate method="POST">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" value="<?php echo $name; ?>" name="name" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"><?php echo isset($errors['name']) ? $errors['name'] : ""; ?></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" value="<?php echo $phone; ?>" name="phone" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                            <?php echo isset($errors['phone']) ? $errors['phone'] : ""; ?>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" value="<?php echo $email; ?>" name="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                            <?php echo isset($errors['email']) ? $errors['email'] : ""; ?>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" name="message" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"><?php echo $message; ?></textarea>
                            <?php echo isset($errors['message']) ? $errors['message'] : ""; ?>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
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