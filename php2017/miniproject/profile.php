<?php
        // if the user is logged //
    if(!isset($_COOKIE['username'])) {
        header("location: login.php");
        exit;
    }

?>
<?php include 'include/header.php'; ?>
<h1> Profile </h1>
<a href="logout.php">Logout</a>
<?php include 'include/footer.php'; ?>