<?php

header("Content-Type: aplication/csv");
header("Content-Disposition: attacment; filename=Report.csv");


$fileName = 'contacts.csv';
$handler = fopen($fileName, "r+");

//while i come to the end of the file do this
while (!feof($handler)){
    //read one line
    $line = fgets($handler);
    //skip empty lines
    if($line !== FALSE){
    echo $line;
    
    
    }
}

fclose($handler);