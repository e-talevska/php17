<?php
header("Content-Type: application/csv");
header("Content-Disposition: attachment; filename=Report.csv");

$fileName = "contacts.csv";
$handler = fopen($fileName, "r");

//while i come to the end of the file do this :D
while(!feof($handler)){
    //read one line
    $line = fgets($handler);
    //skip empty lines
    if($line !== false){
        
    echo $line; 
    }
}
fclose($handler);
?>