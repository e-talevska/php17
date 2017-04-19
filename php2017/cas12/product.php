<?php

require 'conectingDB.php';

try{
    $db = new DBAccess();
    $productLines = $db->readProductLines();
    $products = $db->readProductsByLineName($_GET['id']);
            
} catch (Exception $e){
    echo $e->getMessage();
}


?>

<html>
    <head>
        <title>title</title>
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
                <?php foreach ($productLines as $productLine){ 
                    echo "<li><a href='product.php?id={$productLine['productLine']}'>{$productLine['productLine']}</a></li>";
                }?>
            </ul>
            
            <?php foreach ($products as $product){ ?>            
            <div class="list-group">
                <a href="#" class="list-group-item active" >
                  
                    <h5 class="list-group-item-heading"><?php echo $product['productName']; ?></h5>                       
                  
                    <p class="list-group-item-text"><?php echo $product['productDescription']; }?></p>
                  
                </a>
            </div>
            
        </div>
        
    </body>
</html>
