<?php
$fileName = 'contacts.csv';
$handler = fopen($fileName, "r+");
$contacts = [];
//while i come to the end of the file do this
while (!feof($handler)){
    //read one line
    $line = fgetcsv($handler);
    //skip empty lines
    if($line !== FALSE){
    $contacts[] = $line;
    
    
    }
}

fclose($handler);
?>
<html>
    <head>
        <title>contacts</title>
    </head>
    <body>
        <table>
            <?php foreach ($contacts as $contact) {?>
            <tr>
                <?php foreach ($contact as $value){
                    echo "<td>$value</td>";
                } ?>
            </tr> 
           <?php } ?>
        </table>
        <a href="download_csv.php">download</a>
    </body>
</html>
