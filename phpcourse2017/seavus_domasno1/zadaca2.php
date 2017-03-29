<?php 
        date_default_timezone_set('Europe/Skopje');
        echo date('F H:i:s');
        echo "<br>";
        if (date('F') == 'August') {
            echo "It's August, so it's really hot.";
        } else {
            echo "Not August, so at least not in the peak of the heat.";
        }
?>