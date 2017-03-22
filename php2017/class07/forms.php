<?php 
 var_dump($_POST,$_SERVER['REQUEST METHOD']);
 
 IF ($_SERVER['REQUEST METHOD']=== "POST");
 ?>
<html>
    <head>
        <title>Building forms</title>
    </head>
    <body>
        <form method="POST ">
            <div>
                <label for="search">Search</label>
                <input id="search" type="text" name="search" >
            </div>
            <div>
                <label for="email">Email</label>
                <input id="email" type="text" name="email" >
            </div>
            <div>
                <button type="email">Go</button>
            </div>
            
        </form>
    </body>
</html>
