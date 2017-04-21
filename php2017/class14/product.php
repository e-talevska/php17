<?php
if (!isset($_GET['id'])) {
    header("Location:index.php"); exit;
}
include 'templates/header.php';
require 'models/product.php';
try {
        $productModel = new Product();
    $products = $productModel->fetchByLineName ($_GET['id']);
    
} catch (Exception $e) {
    echo $e->getMessage();
    $products = [];
   
}

?>
            <?php foreach ($products as $product) { ?>
                <div class="list-group">
                  <a href="editProduct.php?product=<?= $product['productCode'] ?>" class="list-group-item active">
                    <h4 class="list-group-item-heading"><?php echo $product['productName']; ?></h4>
                    <p class="list-group-item-text"><?php echo $product['productDescription']; ?></p>
                 </a>
                </div>
            <?php } ?>
<?php include 'templates/footer.php'; ?>