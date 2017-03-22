<?php $active = "profile"; ?>
<?php 
    // If user is logged in
    if(!isset($_COOKIE['username'])){
        header("location: login.php");
        exit;
    }
    include("inc/header.php"); 
    
    
?>
<body>

    <?php include("inc/main-menu.php"); ?>

    <!-- Page Content -->
    <div class="container">
        
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Profile
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Profile</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Login Form -->
        <div class="row">
            <div class="col-md-6">
                
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