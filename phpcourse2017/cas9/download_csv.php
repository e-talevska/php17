<?php

header ("Content-Type: application/csv");
header ("Content-Disposition: attachment; filename=Report.csv");
$fileName = "contacts.csv";
    $handler = fopen($fileName, "r+");

    // while I come to the end of file
    while(!feof($handler)) {
        //read one line
        $line = fgets($handler);
        //skip empty lines
        if($line !== FALSE) {
        echo $line;
        }
    }
    fclose($handler);
