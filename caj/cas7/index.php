<?php 
    var_dump($_SERVER['REQUEST_METHOD']);
    // Check if form is submitted
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        
    }
    
    // Other way
    if(isset($_POST['submit'])){
        
    }
?>
<html>
    <head>
        <title>Forms</title>
    </head>
    <body>
        <form method="POST">
            <label for="user">Username:</label><br>
            <input type="text" id="user" name="user"><br>
            <label for="password">Password:</label> <br>
            <input type="password" id="password" name="pass">
            <br>
            <input type="submit" value="Login">
        </form>
    </body>
</html>
