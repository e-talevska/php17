<?php
    $fileName ="contacts.csv";
    $handler = fopen($fileName, "r+");// cita i pisuva
    $contacts = [];//nova niza prazna
    
    //while i come to the end of file do this
    while (!feof($handler)){
        
         //read one line
        $line = fgetcsv($handler);
         //skip empty lines
        if($line !== FALSE){
       
        $contacts[]= $line;//fgetcsv avtomatski ke vrati niza
        }
    }
    fclose($handler);
    //var_dump($contacts);
?>
<html>
    <head>
        <title>Contacts</title>
    </head>
    <body>
        <table>
            <?php 
                foreach ($contacts as $contact){?> 
            <tr>
                <?php
                    foreach($contact as $value){
                        echo "<td>$value</td>";
                    }
                ?>
            </tr> 
              <?php   } ?>
        </table> 
        <a href ="download_csv.php ">Download</a>
    </body>
</html>
