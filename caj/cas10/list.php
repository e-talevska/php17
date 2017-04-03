<?php
    require_once("fakultet.php");
    use Fakulteti\Fakultet;
    $fakultet = Fakultet::readAll();
    var_dump($fakultet);
?>
<html>
    <head>
        <title>Listings</title>
    </head>
    <body>
        <ul>
        <?php
           foreach($fakultet as $fab){
               echo $fab[0] . " - " . $fab[1] . "<br>";
           } 
        ?>
        </ul>
    </body>
</html>