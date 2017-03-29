<?php
    session_start();
?>
<html>
    <head>
        <title>File upload</title>
    </head>
    <body>
        <?php if (isset ($_SESSION['upload_error'])){
                    echo "<p style='color:red;'>".$_SESSION['upload_error']."</p>";
                    unset($_SESSION['upload_error']);
             } else if (isset ($_SESSION['upload_success'])){
            
                    echo "<p style='color:green;'>".$_SESSION['upload_success']."</p>";
                    unset($_SESSION['upload_success']);
             }//ako nema unset ke pameti prethodna poraka, so unset se pecati ednas i se brise
              //samo sto ke se prikze da se izbrise
        ?>
        <form action="process_upload.php" method = "POST" enctype="multipart/form-data">
            <input type="file" name="uploaded_file"><!-- ime na nizata ja dava upload_file -->
            <button name="upload">Upload</button>
        </form>
         <ul>
        <?php
            $extensions = ['png','jpeg','jpg','gif'];
            $files = scandir('uploads');//vraka niza od site fajlovi vo direktoriumot
            //var_dump($files);//proverka sto ke vrati ili dali imame greska (. momentalen dir .. edno nivo pogore)
           
            foreach($files as $file){
                if($file != '.' && $file != '..'){//skokni gi
                    $pathinfo = pathinfo($file);//inf za cel soodveten file
                   // var_dump($pathinfo);
                    if(in_array ($pathinfo ['extension'], $extensions)){
                        echo "<li>"
                                 . "<img src='uploads/$file'>"
                                 . "<a href = 'delete_file.php?file=$file'>[x]</a>"
                                 . "</li>";
                    }else{
                        echo "<li>$file<a href = 'delete_file.php?file=$file'>[x]</a></li>";
                    }//imeto na koj fajl da se izbrise dopolnitelna inf so ?file=
                }//plus neso unikatno vo URL
            }
        ?>
         </ul>
    </body>
</html>