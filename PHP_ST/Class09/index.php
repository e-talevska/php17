<?php
$fileName = 'example.txt';
$fileHandler = fopen($fileName,"a+");

fwrite($fileHandler, "abc");
fwrite($fileHandler, "123");
rewind($fileHandler);
// read the whole file
$content = fread($fileHandler, filesize($fileName));

fclose($fileHandler);
//rewrite existing content
file_put_contents($fileName, "sedc".PHP_EOL."php&mysql");

var_dump($content);

//short way for fopen, fread, fclose
$wholeContent = file_get_contents($fileName);

var_dump($wholeContent);
