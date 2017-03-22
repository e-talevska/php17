<?php
//if the user is loged in our site
if(!isset($_COOKIE['username'])){
    header("Location: login.php");
    exit;
}
?>
<?php include 'header.php';?>
    <!-- Page Content -->
    <div class="container">
        <h1>profile</h1>
<?php include 'Foother.php';?>