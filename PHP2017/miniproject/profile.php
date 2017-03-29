<?php 
session_start();
// if the user is logged in our site
if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit;
}


?>



<?php include 'templates/header.php'; ?>


<div class='container'>
    <h1>Profile</h1>
</div>
<?php include 'templates/footer.php'; ?>