<?php
var_dump($_POST, $_SERVER['REQUEST_METHOD']);

    if($_SERVER['REQUEST_METHOD'] === "POST") {
        
    }
    if(isset($_POST['submit'])){
        
    }
?>
<html>
    <head>
        <title>Building Forms</title>
    </head>
    <body>
        <form>
            <div>
                <label for="search">Search</label>
                <input id="search" type="text" name="q">
                <br>
                <label for="email">Email</label>
                <input id="email" name="email">
            </div>
            <div>
                <button type="submit">Go</button>
            </div>
        </form>
    </body>
</html>