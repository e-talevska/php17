<?php

define('DEBUG', true);

if('DEBUG' == true) {
    ini_set("display_errors", true);
} else {
    ini_set("display_errors", false);
}

echo "Echo variable that does not exists";

?>
