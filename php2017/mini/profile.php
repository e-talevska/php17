<?php
    //if the user is loged in 
    if(!isset($_COOKIE['username'])){
        header('Location: login.php');
        exit;
    }
?>
<?php include 'template/header.php'; ?>

<h1>Profile </h1>

<?php include 'template/footer.php'; ?>