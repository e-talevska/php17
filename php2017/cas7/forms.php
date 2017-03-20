<?php 
var_dump($_POST, $_SERVER['REQUEST_METHOD']);
// check if form is submitted
if($_SERVER['REQUEST_METHOD'] === "POST"){
    
}
//other waY
if(isset($post['submit'])){
    
}
?>
<html>
    <head>
        <title>Building Forms</title>
    </head>
    <body>
        <form method="POST">
            <div>
                <label for="search">Search</label>
                <input id="search" type="text" name="q" >
            </div>
            <div>
                <label for="email">Email</label>
                <input id="email" type="text" name="email" >
            </div>
            <div>
                <button name="submit" type="submit">Go</button>
            </div> 
        </form>

    </body>
</html>
