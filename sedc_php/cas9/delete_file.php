<?php
    if (isset($_GET['file'])){//zema od URL
        $fileName = $_GET ['file'];//go smestuva vo nova promenliva
        if(file_exists("uploads/$fileName")){//proverka dali postoi
            unlink("uploads/$fileName");//delete a file
        }
}
header ("Location:upload.php");