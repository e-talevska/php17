<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    
    if(trim($name) != "") {
        $file = new File("db/db.csv", "a+");
        $file->write([$name]);
    }
}
