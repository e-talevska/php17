<?php

if(!isset($_GET['id'])){
    header ("Location: index.php");//ne barame vo index  setiran product so id
    exit;
}

include 'templates/header.php';
require 'models/product.php';
try{
    $productModel = new Product();
    $products = $productModel->fetchByLineName($_GET['id']);
} catch (Exception $e){
      echo $e->getMessage();
    }
    
//option 2
 //if (isset($db)){
     //$products = $db->readProductByLineName($_GET['id']);
// } else {
     //$products = [];
// }
?>
<?php
        $i = 1;
        foreach ($products as $product){?>
            <div class="list-group <?php if ($i%3==0) {echo 'new-class';}?>">
                <a href="editProduct.php?product=<?= $product['productCode']//nesto unikatno da se znae koj produkt e kliknat da se editira ?>" class="list-group-item active">
                    <h4 class="list-group-item-heading"><?php echo $product['productName']; ?></h4>
                    <p class="list-group-item-text"><?php echo $product['productDescription']; ?></p>
                </a>
            </div>    
    <?php $i++; }//na sekoj tret product dodadi nova klasa koja ke ima dr css ?>
            
<?php include 'templates/footer.php';   ?>