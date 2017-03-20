<?php
    $fridayCash = 23;
    $result = "";
    // if ($fridayCash >= 50) {
    //     $result = "Cinema + dinner";
    // } else if($fridayCash >= 35) {
    //     $result = "Dinner";
    // } else if ($fridayCash >= 12) {
    //     $result = "Cinema";
    // } else {
    //     $result = "Stay home";
    // }

    if($fridayCash < 12) {
        $result = "Stay home";
    } else if ($fridayCash >= 12 && $fridayCash < 35) {
        $result = "Cinema";
    } else if ($fridayCash >= 35 && $fridayCash < 50) {
         $result = "Dinner";
    } else {
        $result = "Cinema + dinner";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h4><?php echo $result; ?></h4>
    <p>
    <?php
        $broj = rand(10, 100);
        switch ($broj%2) {
            case 0:
                echo "Brojot $broj e paren";
                break;
            case 1:
                echo "Brojot $broj e neparen";
                break;
        }
    ?>
    </p>
</body>
</html>