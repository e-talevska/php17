<?php

header("Content-Type: application/csv");
header("Content-Disposition: attachment; fileName=Report.csv");
$fileName = "contacts.csv";
$handler = fopen ($fileName, "r+");


//while i come to the end od the file do this
while(!feof($handler)) {
  //skip empty lines
    $line = fgets($handler); 
    if($line !== FALSE) {
        echo $line;
    

    }
    
}
fclose($handler);