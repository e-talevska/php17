<?php
namespace Fakulteti;
require 'file.php';
// use \FileManipulation\File; -> dole \FileManipulation\File = File

class Fakultet {
    public $name;
    public $id;
    public static $numOfFaculties = 0;


    public function __construct($name) {
        $this->name = $name;
        //Fakultet:: = self::
        self::$numOfFaculties++;
        $this->id = self::$numOfFaculties;
    }
    
    public function save() {
        $file = new \FileManipulation\File('db/db.csv', 'a+');
        $file->write([$this->id, $this->name]);
    }
    public static function readAll() {
        $file = new \FileManipulation\File('db/db.csv', 'r');
        return $file->read();
    }
}

