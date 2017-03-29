<?php
    if(isset($_GET['file'])){
        $filename = $_GET['file'];
        if(file_exists("avatars/$filename")){
            unlink("avatars/$filename");
        }
    }
    header("location: upload.php");
?>