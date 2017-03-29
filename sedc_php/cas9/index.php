<?php
$fileName = 'example.txt';
$fileHeandler = fopen($fileName, "a+");//otvaranje konekcija kade ke zapiseme

fwrite($fileHeandler, "abc");
fwrite($fileHeandler, "123");// abc123
rewind($fileHeandler);//vraka kursor na pocetok

//read the whole file
$content = fread($fileHeandler, filesize($fileName));//cita, problem so kirilicni bukvi

fclose($fileHeandler);

var_dump($content);//C:\wamp64\www\php17\sedc_php\cas9\index.php:14:string 'abc123abc123abc123' (length=18)
// so x se kreira nov file bara da ne posti takov file (proverka dali postoi so exist so w ako ne so x)

//rewrtite existing content
file_put_contents($fileName, "sedc\r\nphp&mysql");//"sedc".PHP_EOL."nphp&mysql"
//C:\wamp64\www\php17\sedc_php\cas9\index.php:22:string 'sedc
//php&mysql' (length=15)


//short way for fopen fread fclose
$wholeContent = file_get_contents($fileName);
var_dump($wholeContent);//C:\wamp64\www\php17\sedc_php\cas9\index.php:20:string 'abc123abc123abc123abc123' (length=24)


