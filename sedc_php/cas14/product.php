<?php

if(!isset($_GET['id'])){
    header ("Location: index.php");//ne barame vo index  setiran product so id
    exit;
}
require 'db.php';
//$db = new DBAccess();//nova instanca od class DBAccess //se povikuva construct i da se konektira / vleguva vo if ako ima greska
try{
    $db = new DBAccess();
    $productLines = $db->readProductLines();
        $products = $db->readProductByLineName($_GET['id']);
} catch (Exception $e){
      echo $e->getMessage();
      $productLines = [];//ako ima error ke dojde do red 5 i natamu nema da se izvrse ke odi na catch i ke prodolzi nadolu
      //da se dozvoli da se izvrsi html
    }
//poinaku da se spravime kako ke se ispecati greskata

?>
<html>
    <head>
        <title></title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <ul class="nav nav-tabs">
                 <?php
                    foreach ($productLines as $productLine){
                        echo "<li><a href='product.php?id={$productLine['productLine']}'>{$productLine['productLine']}</a></li>";//{}da cita kako promenliva celoto
                        //za sekoj element da cita na koj product e kliknato
                        }
                 ?>
            </ul>
            <?php
                foreach ($products as $product){?>
                <div class="list-group">
                    <a href="#" class="list-group-item active">
                    <h4 class="list-group-item-heading"><?php echo $product['productName']; ?></h4>
                    <p class="list-group-item-text"><?php echo $product['productDescription']; ?></p>
                    </a>
                </div>    
               <?php } ?>
            
        </div>
    </body>
</html>
