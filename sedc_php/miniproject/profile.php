<?php
//if the user is logged in our site
if(!isset($_COOKIE['username'])) {
    header("Location: login.php");
    exit;
}
?>
<?php include 'templates/header.php'; ?>

    <!-- Page Content -->
    <div class="container">
        <h1>Profile</h1>
<?php include 'templates/footer.php'; ?>