<?php
//var_dump($_POST,$_SERVER['REQUEST_METHOD']);

if(isset($_POST['send'])){
    echo "you searched for: ".$_POST['search']."<br>";
    echo "your email is: ".$_POST['email'];
}

?>
<html>
    <head>
        <title>forms</title>
    </head>
    <body>

        <form method="post">
            <div>
                <label for="search">Search</label>
                <input id="search" type="text" name="search">
            </div>
            <div style="padding-top:10px;">
                <label for="email">email</label>
                <input id="email" type="text" name="email">
            </div>
            <div style="padding-top: 15px;">
                <button name="send" type="submit">GO</button>
            </div>
        </form>
        
    </body>
</html>
