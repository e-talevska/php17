<?php if(!isset($_GET['product'])){
header("Location:index.php"); exit; } 
 require 'models/product.php';

$errors = [];
if(isset($_POST['submit'])){
    $name = trim($_POST['productName']);
    $desc = trim($_POST['productDescription']);
    $price = trim($_POST['productPrice']);
    
    if($name == ""){
        $errors['name'] = "name is required";
    }
    if($desc == ""){
        $errors['desc'] = "description is required";
    }
    if($price == ""){
        $errors['price'] = "price is required";
    }elseif (!is_numeric($price)) {
        $errors['price'] = "invalid price form";
    }
    //validation ok updating the product
    if(empty($errors)){
        $productModel = new Product();
        $result = $productModel->update($_GET['product'], $name, $desc, $price);
    }
}

include 'templates/header.php';?>
<?php 

try{
    $productModel = new Product();
    $product = $productModel->fetchOne($_GET['product']);
    
} catch (Exception $exc) {
    echo $exc->getMessage();
}

if(empty($product)){
    header("Location: index.php");
}

?>
<?php 
if(isset($result) && $result){
    echo '<div class="alert alert-success">Product updated successfully</div>';
}elseif (isset($result) && (!$result)) {
    echo '<div class="alert alert-danger">Product not updated successfully</div>';
}
?>

<form method="POST" action="" >
  <div class="form-group <?php echo isset($errors['name']) ? 'has-error' : "" ;?>">
    <label for="productName">Name</label>
    <input name="productName" type="text" class="form-control" id="productName" value="<?= $product['productName']; ?>">
    <p class="help-block"><?php echo isset($errors['name']) ? $errors['name'] : ""; ?></p>
  </div>
  <div class="form-group <?php echo isset($errors['desc']) ? 'has-error' : "" ;?>">
    <label for="productDescription">productDescription</label>
    <textarea name="productDescription" class="form-control" rows="3" id="productDescription" ><?= $product['productDescription']; ?></textarea>   
    <p class="help-block"><?php echo isset($errors['desc']) ? $errors['desc'] : ""; ?></p>
  </div>
 <div class="form-group <?php echo isset($errors['price']) ? 'has-error' : "" ;?>">
    <label for="productPrice">Price</label>
    <input name="productPrice" type="text" class="form-control" id="productPrice" value="<?= $product['buyPrice']; ?>" >
    <p class="help-block"><?php echo isset($errors['price']) ? $errors['price'] : ""; ?></p>
 </div>
    <button name="submit" type="submit" class="btn btn-default">Update Product</button>
</form>

<?php include 'templates/footer.php'; ?>