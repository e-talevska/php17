<?php
session_start();

    //if user is logged in
    if(!isset($_COOKIE['username'])) {
        header('Location: login.php');
        exit;
    }
?>
<?php include 'header.php';?>

<div class="container">
    
    <h1>Profile</h1>
    
<?php include 'footer.php';?>

