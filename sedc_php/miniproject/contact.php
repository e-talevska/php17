<?php
//check if submited 
//make validation of inputs
$fullName="";
$phone="";
$email="";
$message="";
$errors = [];
if(isset($_POST['submit'])){
    
    $fullName = trim($_POST['name']);
    if($fullName ==""){//if full name empty show error
        $errors['name'] = "Full name is required";
    }
    
    $phone = ($_POST['phone']);
    if($phone ==""){
        $errors['phone'] = "Phone is required";
    }
    
    $email = ($_POST['email']);
    if($email ==""){
        $errors['email'] = "Email is required";
    }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    
        $errors['email'] = "Email is invalid";
    }
    
    $message = ($_POST['message']);
    if($message ==""){
        $errors['message'] = "Message is required";
    }
    
    if(empty($errors)){
        include 'mail.php';
 
    $result = sendMail ($email, $fullName, $message);
    
      }
}
?>

<?php 
    $menuItem = "Contact";
?>
<?php include 'header.php';?>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="services.php">Services</a>
                    </li>
                    <li class="active">
                        <a href="contact.php">Contact</a>
                    </li>
                   
                  
               
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        
        <?php
        if (isset($result)){
            
            echo "<div class = 'alert alert-info'>$result</div>";
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
        <!-- /.row -->

    

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <h3>Send us a Message</h3>
                <form name="sentMessage" id="contactForm" method="POST" novalidate>
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
                            <p class="help-block"><?php echo (isset($errors['message'])) ? $errors['message'] : ''; ?></p>
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