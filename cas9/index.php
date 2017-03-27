<?php
$fileName = 'example.txt';
$fileHandler = fopen($fileName, "a+");

fwrite($fileHandler, "ABC");
fwrite($fileHandler, "123");
rewind($fileHandler);
//read the whole file
//fread($fileHandler, filesize($fileName));
$content = fread($fileHandler, filesize($fileName));

fclose($fileHandler);

var_dump($content);
// rewrite existing content
file_put_contents($fileName, "sedc".PHP_EOL."PHP&mySQL");

// short way for fopen fread fclose
$wholeContent = file_get_contents($fileName);
var_dump($wholeContent);


?>