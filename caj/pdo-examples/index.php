<?php

    try{
        $db = new PDO("mysql:$host;dbname=mysql", $username, $password);
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }

    // INSERT, UPDATE, DELETE - NO SELECT
    $count = $db->exec("INSERT INTO animals");
    
    $sql = "SELECT * FROM animals";
    $result = $db->query($sql);
    
    // PREPARE
    $final = $db->prepare("SELECT * FROM animas WHERE animal_id = :animal_id AND animal_name= :animal_name");
    $final->bindParam(':animal_id', $animal_id, PDO::PARAM_INT);
    $final->bindParam(':animal_name', $animal_name, PDO::PARAM_STR);
    $final->execute();
    
    // MISSING FETCH
    $db = null;

?>