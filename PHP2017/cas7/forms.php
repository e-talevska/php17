<?php 
var_dump($_POST, $_SERVER['REQUEST_METHOD']);


if($_SERVER['REQUEST_METHOD']==="POST"){
    
}
if(isset($_POST['submit'])){
    
}
?> 


<html>
    <head>
        <title>Building forms</title>
    </head>
    <body>
        <form method="POST">
        <form>
            <div>
                <label for="search">Search</label>
                <input id="search" type="text" name="q">
                
            </div>
            <div>
                <label for="email">Email</label>
                <input id="email" type="text" name="e">
                
                
            </div>
            <div>
                <button name="submit" type="submit">GO</button>
            </div>
        </form>

    </body>
</html>
