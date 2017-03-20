<?php
$email = "name@example.com";
if(($pos = strpos($email, '@')) !== false) {
    $name = strstr($email, '@', true);
    // $domain = substr(strstr($email, '@'), 1);
    $domain = substr($email, $pos+1);

    echo "User: $name <br> Domain: $domain";

    $email = [
        'emilija',
        'example.com'
    ];
    echo implode("@", $email); //emilija@example.com
}


?>