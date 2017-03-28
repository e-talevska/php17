<?php
    
    $file = "players.txt";
    $fileHandler = fopen($file, "r+");
    $online_players = fread($fileHandler, filesize($file));
    fclose($fileHandler);
    echo $online_players;
    
    $content = file_get_contents("players.txt");
    echo $content;
    
?>