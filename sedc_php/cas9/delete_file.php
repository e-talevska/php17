<?php
if(isset($_GET['file'])) {
    $fileName = $_GET['file'];
    if(file_exists("uploads/$fileName")) {
        unlink("uploads/$fileName");
    }
}
header("Location: upload.php");