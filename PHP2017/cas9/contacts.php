<?php
$fileName = "contacts.csv";
$handler = fopen($fileName, "r+");
$contacts = [];
//while i come to the edn of the file, do this
while (!feof($handler)){
    var_dump(fgetcsv($handler));
    //skip empty lines
    $line = fgetcsv($handler);
   if($line!== FALSE){
    $contacts[]=  $line;
   }
        
        
        }
fclose($handler);
var_dump($contacts);
?>
<html>
    <head>
        <title>Contacts</title>
    </head>
    <body>
        <table>
            <?php foreach ($contacts as $contact){ ?>
            <tr>
                <?php 
                 foreach ($contact as $value){
                     echo "<td>$value </td>";
                 }
                
                
                ?>
            </tr>
                
                
           <?php } ?>
        </table>
        <a href="downloadcsv.php"> Download</a>
    </body>
</html>
