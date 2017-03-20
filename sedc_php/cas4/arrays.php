<?php
    $godini = [23,34,24,18,45];
    echo "<pre>";
    print_r($godini);
    echo "</pre>";

    echo $godini[3] . "<br>";

    for($i=0; $i <= count($godini)-1; $i++){
        echo $godini[$i] . "<br>";
    }

     echo "<br><br>";

    $godini[] = 20;

    echo "<pre>";
    print_r($godini);
    echo "</pre>";

    $godini[2] = 100;

    // $godini[] = 30;
    // $godini[] = 12;
    // $godini[] = 34;
    array_push($godini, 30, 12, 34);

    $sumaGodini = 0;
    for($i=0; $i< count($godini); $i++) {
        $sumaGodini += $godini[$i];
    }

    echo "Prosek:". ($sumaGodini/$i);

    $info = [
        "name" => "Emilija", 
        "lastName" => "Talevska", 
        "position" => "PHP Developer"
    ];
    echo $info["name"];
    echo "<br><br>";

    foreach($info as $value) {
        echo $value . "<br>";
    }

    $info["age"] = 50; //add
    $info["name"] = "Emi"; //modify

    $people = array(
        array(
            "name" => "John",
            "lastName" => "Doe",
            "age" => 20
        ),
        array(
            "name" => "Jane",
            "lastName" => "Doe",
            "age" => 30
        ),
        array(
            "name" => "Mike",
            "lastName" => "Doe",
            "age" => 35
        )
    );

    for($i=0; $i<count($people); $i++) {
        echo "People ".($i+1).": ";
        foreach($people[$i] as $key => $value){
            echo "$key: $value <br>";
        }
        echo "<br>";
    }

    foreach($people as $i => $person) {
        echo "People ".($i+1).": ";
        foreach($person as $key => $value){
            echo "$key: $value <br>";
        }
        echo "<br>";
    }


    $numbers = [1,46,89,3567];
    echo "<pre>";
    print_r($numbers);
    echo "</pre>";

    unset($numbers[2]);
// isset($numbers[2]);
    echo "<pre>";
    print_r($numbers);
    echo "</pre>";
?>