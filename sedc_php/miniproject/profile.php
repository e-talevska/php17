<?php  
    session_start(); 
    if(!isset($_SESSION['username'])){
        
        header("Location:login.php");
        exit;
    }
?>
<?php
include 'header.php';?>
<div class ="container">
    <h1>Profile</h1>
    
   <?php include 'footer.php';?>