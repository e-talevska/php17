<?php
namespace Fakulteti;
require 'file.php';

class Fakultet {
    public $name;
    public $id;
    public static $numOfFakulties = 0;
    
    public function __construct($name) {
        $this->name = $name;
        self::$numOfFakulties++;
        $this->id = self::$numOfFakulties;
    }
    
    public function writeToFile() {
        
    }
    public function save(){
        $file = new \FileManipulation\File('db/db.csv' ,'a+');
        $file->write([$this->id, $this->name]);
    }
    
    public static function readALL(){
        $file = new \FileManipulation\File('db/db.csv', 'r');
        return $file->read();
    }
}