<?php 
if(!isset($_COOKIE['username'])) {
    header('Location: login.php');  
}
?>
 <?php include 'tamplates/header.php'; ?>
    <!-- Page Content -->
    <div class="container">
        <h1>Profile</h1>
  <?php include 'tamplates/footer.php'; ?>      


