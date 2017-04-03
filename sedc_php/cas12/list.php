<?php 
    require 'fakultet.php';
    use \Fakulteti\Fakultet;
    
    $fakulteti = Fakultet::readALL();//procitaj gi site fakulteti

?>
<html>
    <head>
        <title>List Faculties</title>
    </head>
    <body>

        <ul>
            <?php
                foreach($fakulteti as $fakultet){
                    echo "<li>{$fakultet[0]}.{$fakultet[1]}</li>";// 1.feit
                   //{}celoto ime na edna promeliva
                }
            ?>
        </ul>
        
    </body>
</html>