<?php

$fileName = 'example.txt';
$fileHandler = fopen ($fileName, "a+");

fwrite($fileHandler, "abc");
fwrite($fileHandler, "123");
rewind($fileHandler);
//read the whole file
//fread($fileHandler, filesize($fileName));
$content = fread($fileHandler, filesize($fileName));


fclose($fileHandler);

var_dump($content);

file_put_contents($fileName, "phpcourse2017" .PHP_EOL. "php&mysql");

$wholeContent = file_get_contents($fileName);

var_dump($wholeContent);

