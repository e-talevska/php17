<?php

    // FILES
    // Where the file is located
    // __FILE__
    // Where the folder is located
    // dirname(__FILE__)

    // Check if file exist
    //file_exists();
    // Check if its file or folder
    //is_file(); is_dir();
    // Check file size
    //filesize();
    
    // INFO - Directory, basename, extension, filename
    //pathinfo();
    
    // Resources 
    // r - read from start - r+ Read & write
    // w - truncate / write from start - w+
    // a - Append / write from end - a+
    // x - Write from start ( cant exist ) - x+
    //fopen($file, r);
    //fclose();
    
    $filename = "example.txt";
    $fileHandler = fopen($filename, "a+");
    
    // Go vraka pointerot na pocetokot od fajlot
    rewind($fileHandler);
    
    // Read whole file
    $content = fread($fileHandler, filesize($filename));
    
    fwrite($fileHandler, "abcd");
    fclose($fileHandler);
    
    // Shortcut of fopen, fread and fclose but truncate the file if exists
    $wholeContent = file_put_contents($filename, "sedc". PHP_EOL ."phpmysqli");
    
    // Shortcut for fopen, fread and fclose
    $wholeContent = file_get_contents($filename);
    
    
    var_dump($wholeContent);
    
    