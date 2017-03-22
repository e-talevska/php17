<?php 
    if(!isset($active)){
        $active = "";
    }
?>
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
            <a class="navbar-brand" href="index.php">Start Bootstrap</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li <?php if($active == "index"){echo "class=\"active\"";} ?>>
                    <a href="index.php">Home</a>
                </li>
                <li <?php if($active == "login"){echo "class=\"active\"";} ?>>
                    <a href="login.php">Login</a>
                </li>
                <li <?php if($active == "about"){echo "class=\"active\"";} ?>>
                    <a href="about.php">About</a>
                </li>
                <li <?php if($active == "services"){echo "class=\"active\"";} ?>>
                    <a href="services.php">Services</a>
                </li>
                <li <?php if($active == "contact"){echo "class=\"active\"";} ?>>
                    <a href="contact.php">Contact Us</a>
                </li>
                <?php if(isset($_COOKIE['username'])) { ?>
                <li>
                    <a href="logout.php">Logout</a>
                </li>
                <?php } ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>