<?php session_start(); ?>

<?php
    if(isset($_SESSION['upload_error'])){
        echo "<p style='color:red;'>{$_SESSION['upload_error']}</p>";
    }
    elseif(isset($_SESSION['upload_success'])){
        echo "<p style='color:green'>{$_SESSION['upload_success']}</p>";
    }
?>
<form action="upload_action.php" enctype="multipart/form-data" method="POST">
    <input type="file" name="avatar">
    <input type="submit" name="submit" value="Upload File">
</form>
<ul>
<?php 
    $extensions = array("png", "jpg", "jpeg", "gif");
    $files = scandir("avatars");
    foreach($files as $file){
        if($file != "." && $file != ".."){
            $pathinfo = pathinfo($file);
            if(in_array($pathinfo['extension'], $extensions)){
                echo "<li><img src=\"avatars/$file\"> <a href='delete_file.php?file=$file'>Delete File</a></li>";
            }
            else{
                echo "<li>$file <a href='delete_file.php?file=$file'>Delete File</a></li>";
            }
        }
    }
?>
</ul>
<?php 
    unset($_SESSION['upload_error']);
    unset($_SESSION['upload_success']);
?>