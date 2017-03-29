<?php
header("Content-Type: application/csv");
header("Content-Disposition: attachment; filename=Report.csv");//treba da se simne
//header sekogas najgore

    $fileName ="contacts.csv";
    $handler = fopen($fileName, "r+");// cita i pisuva
    
    //while i come to the end of file do this
    while (!feof($handler)){
        
         //read one line
        $line = fgets($handler);
         //skip empty lines
        if($line !== FALSE){
       echo $line;//fgetcsv avtomatski ke vrati niza
        }
    }
    fclose($handler);
