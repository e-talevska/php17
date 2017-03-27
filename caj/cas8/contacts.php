<?php
    $contacts = array();

    $filename = "contacts.csv";
    $fileHandler = fopen($filename, "r");
    while(!feof($fileHandler)){
        
        // Skip file empty lines
        $line = fgetcsv($fileHandler);
        if($line !== FALSE){
            $contacts[] = $line;
        }
    }
    
    fclose($fileHandler);
    
    var_dump($contacts);
?>
<html>
    <head>
        <title>Contacts all</title>
    </head>
    <body>
        <table>
            <?php foreach($contacts as $contact) { ?>
            <tr>
                <?php foreach($contact as $value){
                    echo "<td>$value</td>";
                }
                ?>
            </tr>
            <?php } ?>
        </table>    
    </body>
    
    <a href="download_csv.php">Download CSV Table</a>
</html>
