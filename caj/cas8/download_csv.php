<?php
    
    header("Content-Type: application.csv");
    header("Content-Disposition: attachment; filename=table.csv");

    $filename = "contacts.csv";
    $fileHandler = fopen($filename, "r");
    while(!feof($fileHandler)){

        // Skip file empty lines
        $line = fgets($fileHandler);
        if($line !== FALSE){
            echo $line;
        }
    }

    fclose($fileHandler);
?>