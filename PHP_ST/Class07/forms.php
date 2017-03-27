<?php
 
var_dump($_POST, $_SERVER['REQUEST_METHOD']);
//check if form is submited
if($_SERVER['REQUEST_METHOD']==="POST") {
    
}
//other way to do the same
if(isset($_POST['submit'])) {
    //validacija na inputi
}
?>

<html>
    <head>
        <title>Building forms</title>
    </head>
    <body>
<!--          <form action="form1.php"-->
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
                <button type="submit">Go</button>
            </div>
        </form>
    </body>
</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

