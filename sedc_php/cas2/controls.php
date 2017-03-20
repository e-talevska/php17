<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        date_default_timezone_set('Europe/Skopje');
        echo date('Y-m-d H:i:s');
        if (date('H') >= 20) {
            echo "<h3>Dobro vecer</h3>";
        } else if( (date('H') >= 7) && (date('H') < 11)) {
            echo "<h3>Dobro utro</h3>";
        } else {
            echo "<h3>Dobar den</h3>";
        }
    ?>
    <p></p>
    <?php $role = 'admin'; ?>
    <?php if($role == "admin" || $role == "professor") { ?>
        <ul>
            <li>Students
                    <ul>
                        <li>Grades</li>
                    </ul>
            </li> 
            <li>School Schedule</li>
        </ul>
    <?php } else if ($role == "student") { ?>
        <ul>
            <li>Grades</li> 
            <li>School Schedule</li>
        </ul>
    <?php } else { 
         echo "<ul>
            <li>School Schedule</li>
        </ul>";
     } ?>
     
     <?php
        switch($role) {
            case 'student':
                echo "<ul>
                        <li>Grades</li> 
                        <li>School Schedule</li>
                    </ul>";
                break;
            case 434:
                echo "brojce";
                break;
            case 'admin':
            case 'professor': ?>
                <ul>
                        <li>Students
                                <ul>
                                    <li>Grades</li>
                                </ul>
                        </li> 
                        <li>School Schedule</li>
                    </ul>
            <?php
                break;
            default:
                 echo "<ul>
                        <li>School Schedule</li>
                    </ul>";
                    break; //optional
        }
     
     ?>
</body>
</html>