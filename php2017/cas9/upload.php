<?php session_start(); ?>
<html>
    <head>
        <title>upload</title>
    </head>
    <body>
        <?php if(isset($_SESSION['upload_error'])){
            echo "<p style='color:red'>{$_SESSION['upload_error']}</p>";
            unset($_SESSION['upload_error']);
        }  else if(isset($_SESSION['upload_succsess'])){
            echo "<p style='color:green'>{$_SESSION['upload_succsess']}</p>";
             unset($_SESSION['upload_succsess']);
        } ?>
        <form action="process_upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="uploaded_file"><br><br>
            <button name="upload" >upload</button>
        </form>
        <ul>
        <?php 
        $extensions = ['png','jpeg','jpg','gif'];
        $files = scandir('uploads');
            foreach ($files as $file) {
                if($file != '.' && $file != '..'){
                    $pathinfo = pathinfo($file);
                    if(in_array($pathinfo['extension'],$extensions)){
                        echo "<li>" 
                        . "<img src='uploads/$file'>"
                        . "<a href='delete_file.php?file=$file'>[x]</a>"
                        . "</li>";
                    }else{
                        echo "<li>$file<a href='delete_file.php?file=$file'>[x]</a></li>";
                    }
                }
            }
        ?>
        </ul>
    </body>
</html>
