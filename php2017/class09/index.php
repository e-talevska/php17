<?php
$fileName = 'example.txt';
$fileHandler = fopen($fileName, "a+");

fwrite($fileHandler, "abc");
fwrite($fileHandler, "123");
rewind($fileHandler);

//read the whole file 
$content = fread($fileHandler, filesize($gileName)) ; 

fclose($fileHandler);

var_dump($content);

file_put_contents($fileName, "sedc".PHP_EOL."nphp&mysql");

//short way for fopen fread fclose
$wholeContent = file_get_contents($fileName);

var_dump($wholeContent);