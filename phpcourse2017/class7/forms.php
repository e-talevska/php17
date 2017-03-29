<?php
var_dump($_POST, $_SERVER['REQUEST_METHOD']);

//check if form is submitted
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    
}
//other way
if(isset($_POST['submit'])) {
    //validacija na input
}

?>

<html>
    <head>
        <title>Building forms</title>
    </head>
    <body>
        <form method="POST">
            <div>
                <label for="search">Search</label>
                <input id="search" type="text" name="q">
            </div>
            <div>
                <label for="email">Email</label>
                <input id="email" type="text" name="email">
            </div>
            <div>
                <button type="submit">Go</button>
            </div>
        </form>
    </body>
</html>


