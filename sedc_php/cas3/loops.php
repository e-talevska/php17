<?php
function zbir($a, $b) {
    return $a + $b;
}
$x = zbir(5, 3);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        th {
            background-color: #ccc;
        }
    </style>
</head>
<body>
    <?php
        while($x < 10) {
            echo "<p>$x</p>";
            $x++; 
            //$x = $x + 1;
            //$x += 1;
        }

        echo "<p>After while</p>";
    ?>
    <table>
        <tr>
            <th>Distance</th>
            <th>Cost</th>
        </tr>
        <?php
        $d = 50;
        while($d <= 250) { ?>
           <tr>
               <td><?php echo $d; ?></td>
               <td><?php echo $d/10; ?></td>
            </tr> 
        <?php
            $d += 50;
        }
        $d = 50;
        while($d <= 250) {
            $c = $d/10;
            echo "<tr>
                    <td>$d</td>
                    <td>$c</td>
                </tr>";
            $d += 50;
        }

        ?>
    </table>
</body>
</html>