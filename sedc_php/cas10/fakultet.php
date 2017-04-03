<?php
namespace Fakulteti;
require 'file.php';

class Fakultet {
    public $name;
    public $id;
    public static $numOfFaculties = 0;
    
    public function __construct($name) {
        $this->name = $name;
        self::$numOfFaculties++;
        $this->id = self::$numOfFaculties;
    }
    
    public function save() {
        
    }
}