<?php 
$fileName = "contacts.csv";
$handler = fopen($fileName, "r");
$contacts= [];
//while i come to the end of the file do this :D
while(!feof($handler)){
    //read one line
    $line = fgetcsv($handler);
    //skip empty lines
    if($line !== false){
        
    $contacts[] = $line; 
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
        <table border="1px">
            <?php foreach($contacts as $contact){ ?>
            <tr>
                <?php foreach($contact as $value) {
                    echo "<td>$value</td>";
                }?>
            </tr>
            <?php } ?>
        </table>
        <a href="download_csv.php">Download</a>
    </body>
</html>
