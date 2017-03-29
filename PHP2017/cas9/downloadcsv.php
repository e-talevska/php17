<?php
header("Content-Type: application/csv");
header("Content-Disposition : attachment; filename=Report.csv");
$fileName = "contacts.csv";
$handler = fopen($fileName, "r+");

//while i come to the edn of the file, do this
while (!feof($handler)){
    $line = fgets($handler);
    
   if($line!== FALSE){
    echo $line;
   }
        
        
        }
fclose($handler);

?>

