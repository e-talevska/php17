<?php
namespace Fakulteti;
require 'file.php';
use \FileManipulation\File;//klasata file da se najde od namespace

class Fakultet {
    
    public $name;
    public $id;
    public static $numOfFaculties = 0;//ne se vrzuva so objektot tuku si klasata, site objekti ke pristapuvaat
    //so sekoe povik na const ke se zgolemuva bidejki se kreira objekt
    //kako globalna promenliva ne se kopira kaj sekoj objekt, samo na 1 request
    
    public function __construct($name){
        
        $this->name = $name;
        //Faklutet::
        self::$numOfFaculties++;//isto sto i Fakultet bidejki e vo ramkite na klasata
        //sekogas ke e 1 bidejki ednas se izvrsuva skriptata, se si pocnuva od 0
        $this->id = self::$numOfFaculties;//kako se kreira boject ke se zgolemuva
        
    }
    
    public function save(){
        
        $file = new File("db/db.csv", "a+");//i tuka moze samo file ako ima gore use
        //ako nema use treba $file = new \FileManipulation\File;
        $file->write([$this->id, $this->name]);//da prati niza i se cuva kako red
        
    }
    
    public static function readAll(){
        
        $file = new File("db/db.csv", "r");
        return $file->read();
    }

}