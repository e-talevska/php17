
<?php
    if(!isset($_GET['product'])){//line 28 product.php cas 15
        header ("Location: index.php");
        exit;
    }
    
    require 'models/product.php';
    $errors = [];
    if(isset($_POST['submit'])){//post request
        $name = trim($_POST['productName']) ;//name od formata bitno da se procitaat informaciite
        $desc = trim($_POST['productDescription']) ;
        $price = trim($_POST['productPrice']) ;
        
        if($name ==''){
            $errors ['name'] = "Name is reqiured";
    }
        if($desc ==''){
            $errors ['desc'] = "Description is reqiured";
    }
        if($price ==''){
            $errors ['price'] = "Price is reqiured";
    } else if (!is_numeric($price)){
            $errors ['price'] = "Invalid price format";
    }
    
    if(empty($errors)){//validation ok //we need to update product
       $productModel = new Product();
       $result = $productModel->update($_GET['product'], $name, $desc, $price);
    }
 } 
 
?>
<?php include 'templates/header.php';?>
<?php

    try{
    $productModel = new Product();
    $product = $productModel->fetchOne($_GET['product']);
} catch (Exception $e){
      echo $e->getMessage();
    }
    
    if(empty($product)){//ako e prazen nema takvo id nema potreba da se editira odi na idex.php
        header ("Location: index.php");
        exit;
    }
    

?>
<?php 
    if(isset($result) && $result){//ako e setirana-definirana i ako rezultatot e true
        echo '<div class="alert alert-success" role="alert">Product successfully updated</div>';
    } else if(isset($result) && !$result) {//linija 38 product.php models
        echo '<div class="alert alert-danger" role="alert">Product not updated</div>'; 
    }
?>
<form method="POST">
  <div class="form-group <?php echo isset($errors['name']) ? 'has-error' : '';?>">
    <label for="productName">Name</label>
    <input name="productName" type="text" class="form-control" id="productName" placeholder="Name" value="<?= $product['productName'] ?>">
    <p class="help-block"><?php echo isset($errors['name']) ? $errors['name'] : '';?></p>
  </div>
  <div class="form-group <?php echo isset($errors['desc']) ? 'has-error' : '';?>">
    <label for="productDescription">Description</label>
    <textarea name="productDescription" class="form-control" rows= "3" id="productDescription" placeholder="Description"><?= $product['productDescription'] ?></textarea>
    <p class="help-block"><?php echo isset($errors['desc']) ? $errors['desc'] : '';?></p>
  </div>
  <div class="form-group <?php echo isset($errors['price']) ? 'has-error' : '';?>">
    <label for="productPrice">Price</label>
    <input name="productPrice" type="text" class="form-control" id="productPrice" placeholder="Price" value="<?= $product['buyPrice']//nema potreba ; bidejki e edna linija na kod ?>">
    <p class="help-block"><?php echo isset($errors['price']) ? $errors['price'] : '';?></p>
  </div>

 
  <button type="submit" class="btn btn-default" name="submit">Update Product</button>
</form>

<?php
    include 'templates/footer.php';//for treba da e isto so id vo formata
?>
