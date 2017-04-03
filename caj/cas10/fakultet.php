<?php
    
    namespace Fakulteti;
    
    require_once("file.php");
    use \FileManipulation\File;
    
    class Fakultet{
        public $name;
        public $id;
        public static $numberOfFakultet = 0;
        
        public function __construct($name){
            $this->name = $name;
            self::$numberOfFakultet++;
            $this->id = self::$numberOfFakultet;
        }
        
        public function save(){
            $file = new File("db/db.csv", "a+");
            $file->write([$this->id, $this->name]);
        }
        
        public static function readAll(){
            $file = new File("db/db.csv", "r");
            return $file->read();
        }
    }
    
?>