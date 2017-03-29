<?php
    session_start(); 
    setcookie("username", NULL);
    session_destroy();
    //unset($_SESSION['$username']); ke izbrise edno 
    header("Location:login.php");
    //nema potreba od exit nema nadolu kod
?>

