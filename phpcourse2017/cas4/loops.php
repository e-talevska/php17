<?php

//print every second number starting from 50 till 100
for($i=50; $i<=100; $i += 2) {
    echo $i . "<br>";
}

$suma = 0;
$multi = 1;
$concat = '';
for($i=101; $i<=150; $i++) {
    $suma += pow($i, 2);
    $multi *= pow($i, 2);
    $concat .= pow($i, 2);
}

echo "<p>Sumata na kvadratite na broevite od 101 do 150 e $suma</p>";

for($i=1; $i<=300; $i++) {
    // if($i%3 == 0) {
    //     continue;
    // }

    // echo $i . ", ";

    if($i%3 != 0) {
        echo $i . ", ";
    }
}

$i = 1;
while($i <= 300) {
    if($i%3 == 0) {
        $i++;
        continue;
    }

    echo $i . ", ";
    $i++;
}

$i = 0;
while($i < 300) {
    $i++;
    if($i%3 == 0) {
        continue;
    }

    echo $i . ", ";
}
echo "<br><br>";
while(true) {
    $rand = rand(50,100);
    if($rand >= 90 && $rand <= 100) {
        echo $rand . " pred break <br>";
        break;
    }

    echo $rand . "<br>";
}

echo "after while";
?>