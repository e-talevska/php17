<?php
namespace Fakulteti;
require 'file.php';
use \FileManipulation\File;

class Fakultet {
    public $name;
    public $id;
    public static $numbOfFaculties = 0;
    public function __construct($name) {
        $this->name= $name;
        self::$numbOfFaculties++;
        $this->id = self::$numbOfFaculties;
        
    }
    
    public function save(){
         $file = new File('db/db.csv', 'a+');
         $file->write([$this->id, $this->name]);
         
        
    }
    public static function readAll(){
        $file = new File('db/db.csv', 'r');
        return $file->read();
    }
}
