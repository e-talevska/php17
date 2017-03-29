<?php
    $fileName = "contacts.csv";
    $handler = fopen($fileName, "r+");
    $contacts = [];
    // while I come to the end of file
    while(!feof($handler)) {
        //read one line
        $line = fgetcsv($handler);
        //skip empty lines
        if($line !== FALSE) {
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
        <table>
            <?php foreach($contacts as $contact) { ?>
            <tr>
                <?php foreach ($contact as $value) {
                    echo "<td>$value</td>";
                }?>
            </tr>
            <?php } ?>
        </table>
        
        <a href="download_csv.php">Download</a>
    </body>
</html>




