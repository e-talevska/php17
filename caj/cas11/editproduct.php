<?php

    if(!isset($_GET['product'])){
        header("location: index.php");
        exit;
    }
    require("models/product.php");
    
    try{
        $productModel = new Product();
    } catch(Exception $e){
        echo $e->getMessage();
    }
    
    $errors = [];
    if(isset($_POST['submit'])){
        
        $name = trim($_POST['productName']);
        $description = trim($_POST['productDescription']);
        $price = trim($_POST['productPrice']);
        
        if($name == ""){
            $errors['name'] = "Name is required";
        }
        if($description == ""){
            $errors['description'] = "Description is required";
        }
        if($price == ""){
            $errors['price'] = "Price is required";
        }
        else if(!is_numeric($price)){
            $errors['price'] = "Price invalid format";
        }
        
        if(empty($errors)){
            $result = $productModel->update($_GET['product'], $name, $description, $price);
        }
    }
    
    include("templates/header.php");
    
    $product = $productModel->fetchOne($_GET['product']);
    if(empty($product)){
        header("location: index.php");
        exit;
    }
    
?>
<html>
    <head>
        <title>Edit Product</title>
    </head>
    <body>
        <?php
            if(isset($result) && $result){
                echo '<div class="alert alert-success" role="alert">Product Updated good job</div>';
            }
        ?>
        <form method="POST">
            <div class="form-group <?php echo isset($errors['name']) ? "has-error" : ""; ?>">
              <label for="exampleInputEmail1">Product Name</label>
              <input type="text" name="productName" value="<?php echo $product['productName']; ?>" class="form-control" id="exampleInputEmail1">
              <p class="help-block"><?php echo isset($errors['name']) ? $errors['name'] : ""; ?></p>
            </div>
            <div class="form-group <?php echo isset($errors['description']) ? "has-error" : ""; ?>">
              <label for="exampleInputEmail1">Product Description</label>
              <textarea name="productDescription" class="form-control" rows="3"><?php echo $product['productDescription']; ?></textarea>
              <p class="help-block"><?php echo isset($errors['description']) ? $errors['description'] : ""; ?></p>
            </div>
            <div class="form-group <?php echo isset($errors['price']) ? "has-error" : ""; ?>">
              <label for="exampleInputEmail1">Product Price</label>
              <input type="text" name="productPrice" value="<?php echo $product['buyPrice']; ?>" class="form-control" id="exampleInputEmail1">
              <p class="help-block"><?php echo isset($errors['price']) ? $errors['price'] : ""; ?></p>
            </div>
            
            <button type="submit" name="submit" class="btn btn-default">Update Product</button>
          </form>
    </body>
</html>

<?php include("templates/footer.php");