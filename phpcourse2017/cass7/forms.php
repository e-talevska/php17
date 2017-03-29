<?php
    var_dump($_POST, $_SERVER['REQUEST_METHOD']);
    if ($_SERVER['REQUEST_METHOD']=="POST"){
    
}
    
    if (isset($_POST['submit'])){
        //validacija na inputi
}
?>
<html>
    <head>
        <title>Building forms</title>
    </head>
    <body>
        <form method="POST">
            <div>
                <labela for = "search">Search</labela>
                <input id="search" type ="text" name="q" >
            </div>
             <div>
                <labela for = "email">Email</labela>
                <input id="email" type ="text" name="email" >
            </div>
            
            <div>
                <button name="ok" type="submit">Go</button>
            </div>
        </form>
    </body>
</html>


