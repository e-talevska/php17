<?php
    if(isset($_POST['submit'])){
        if(isset($_FILES['avatar']) && $_FILES['avatar']['error'] == 0){
            if($_FILES['avatar']['type'] == "image/jpeg" || $_FILES['avatar']['type'] == "image/gif"){
                if($_FILES['avatar']['size'] <= 102400){
                    var_dump($_FILES);
                }
            }
        }
    }
?>