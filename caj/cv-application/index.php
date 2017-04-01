<?php
    session_start();
    $errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : array();
?>
<html>
    <head>
        <title>CV Application</title>
    </head>
    <body>
        <form action="cv_action.php" method="POST" enctype="multipart/form-data">
            <label for="name">Name: </label>
            <input type="text" id="name" name="name">
            <br>
            <label for="email">E-mail: </label>
            <input type="e-mail" name="email" id="email">
            <br>
            <label for="picture">Picture: </label>
            <input type="file" id="picture" name="picture">
            <br>
            <label for="message">Message: </label>
            <textarea></textarea>
            <br>
            <label for="cv">CV: </label>
            <input type="file" name="cv" id="cv">
            <br>
            <input type="submit" name="submit" value="Send CV">
        </form>
    </body>
</html>
<?php
    if(isset($errors) && !empty($errors)){
        foreach($errors as $error){
            echo $error ."<br>";
        }
    }
    unset($_SESSION['errors']);
?>
