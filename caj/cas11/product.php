<?php
    if(!isset($_GET['id'])){
        header("location: index.php");
        exit;
    }
    
    include("templates/header.php");
    require("models/product.php");
    try{
        $productModel = new Product();
        $products = $productModel->fetchByLineName($_GET['id']);
    } catch(Exception $e){
        echo $e->getMessage();
    }
    
//    Option 2
//    if(isset($db)){
//        try{
//            $products = $DB->readProductByLineName($_GET['id']);
//        } catch(Exception $e){
//            echo $e->getMessage();
//            $products = [];
//        }
//    }
?>  
    <div class="row">
        <?php 
            $i = 1;
        foreach($products as $product){ ?>
        <?php if($i%4==0){ echo '<div class="row">'; }?>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img style="width: 100%; height: 200px; display: block;" alt="100%x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgMjQyIDIwMCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSBtZWV0IiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvMTAwJXgyMDAKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+I2hvbGRlcl8xNWI4Nzg5Y2FhMSB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEycHQgfSA8L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1Yjg3ODljYWExIj48cmVjdCBmaWxsPSIjZWVlZWVlIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgLz48Zz48dGV4dCB4PSI4OS44NSIgeT0iMTA1LjUyIj4yNDJ4MjAwPC90ZXh0PjwvZz48L2c+PC9zdmc+" data-src="holder.js/100%x200" data-holder-rendered="true">
                <div class="caption">
                  <h3><?php echo $product['productName']; ?></h3>
                  <p><?php echo $product['productDescription']; ?></p>
                  <p><a href="editproduct.php?product=<?php echo $product['productCode']; ?>" class="btn btn-primary" role="button">Edit Product</a></p>
                </div>
            </div>
        </div>
        <?php if($i%4==0){ echo '</div>'; }?>
        <?php $i ++; } ?>
    </div>       
<?php include("templates/footer.php"); ?>
