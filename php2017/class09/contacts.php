<?php
$fileName = "contacts.csv";
$handler = fopen ($fileName, "r+");
$contacs = [];

//while i come to the end od the file do this
while(!feof($handler)) {
  //skip empty lines
    $line = fgetcsv($handler); 
    if($line !== FALSE) {
    
//read one letter
$contacts[] = fgetcsv($handler);
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
            <?php foreach ($contacts as $contact) { ?>
            <tr>
                <?php foreach ($contacts as $value) {
                        echo "<td>$value</td>";
                }
                ?>
            </tr>
          <?php   } ?>
        </table>
        <a href="download_csv.php">download</a>
    </body>
</html>

