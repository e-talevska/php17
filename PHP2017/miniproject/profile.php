<?php 
// if the user is logged in our site
if(!isset($_COOKIE['username'])){
    header("Location: login.php");
    exit;
}


?>



<?php include 'templates/header.php'; ?>


<div class='container'>
    <h1>Profile</h1>
</div>
<?php include 'templates/footer.php'; ?>