<?php
$fileName = 'example.txt';
$filehandler = fopen($fileName, "a+");

fwrite($filehandler, "abc");
fwrite($filehandler, "123");
rewind($filehandler);
//read the whole file
$content = fread($filehandler, filesize($fileName));

fclose($filehandler);
var_dump($content);
file_put_contents($fileName, "PHP2017".PHP_EOL. "nphp&mysql");



$wholeContent = file_get_contents($fileName);

var_dump($wholeContent);

