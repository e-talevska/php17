<?php
if(!isset($_GET['product'])){
    header('Location: index.php'); exit;
}
require 'models/product.php';
$errors = [];
//validacija za edit
if(isset($_POST['submit'])) {
    $name = trim($_POST['productName']);
    $desc = trim($_POST['productDescription']);
    $price = trim($_POST['productPrice']);
    
    if($name == ''){
        $errors['name'] = "Name is required";
    }
    if($desc == ''){
        $errors['desc'] = "Description is required";
    }
    if($price == ''){
        $errors["price"] = "Price is required";
    } else if(!is_numeric($price)) {
        $errors['price'] = "Invalid price format";
    }
    
    // validation ok
    //we need to update the product
    if(empty($errors)){
        $productModel = new Product();
        $result = $productModel->update($_GET['product'],$name, $desc, $price);
    }
}

?>
<?php include 'templates/header.php'; ?>
<?php 

try{
    $productModel = new Product();
    $product = $productModel->fetchOne($_GET['product']);
} catch (Exception $ex) {
    echo $exc->getMessage;
}

if(empty($product)){
    header("Location: index.php");
}



?>
<?php 
if(isset($result) && $result){
    echo '<div class="alert alert-success" role="alert">Product Successfuly updated</div>';
} else if(isset($result) && !$result) {
    echo '<div class="alert alert-danger" role="alert">Product Not updated</div>';
}
?>
<form method="POST">
  <div class="form-group <?php echo isset($errors['name']) ? 'has-error' : '';?>">
    <label for="productName">Name</label>
    <input name="productName" type="text" class="form-control" id="productName" placeholder="Name" value="<?= $product['productName'];?>">
    <p class="help-block"><?php echo isset($errors['name']) ? $errors['name'] : '';?></p>
  </div>
  <div class="form-group <?php echo isset($errors['desc']) ? 'has-error' : '';?>">
    <label for="productDescription">Description</label>
    <textarea name="productDescription" class="form-control" rows="3" id="productDescription" placeholder="Description" ><?= $product['productDescription'];?></textarea>
    <p class="help-block"><?php echo isset($errors['desc']) ? $errors['desc'] : '';?></p>
  </div>
  <div class="form-group <?php echo isset($errors['price']) ? 'has-error' : '';?>">
    <label for="productPrice">Price</label>
    <input name="productPrice" type="text" class="form-control" id="productPrice" placeholder="Price" value="<?= $product['buyPrice']?>">
    <p class="help-block"><?php echo isset($errors['price']) ? $errors['price'] : '';?></p>
  </div>
    <button name="submit" type="submit" class="btn btn-default">Update Product</button>
</form>
<?php include 'templates/footer.php'; ?>