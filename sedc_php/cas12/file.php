<?php

namespace FileManipulation;

class File {
    
    private $handle;
    private $mode;
    private $path;
    public static $writeModes = ["r+", "w", "w+", "a", "a+"];
    public static $readModes = ["r", "r+", "w+", "a+"];
    
    
    function __construct($path, $mode){//otvaranje na konekcija
        
       $this->mode = $mode;
       $this->path = $path;
       $this->handle = fopen($path, $mode);
       
   }
   
   function write($row){//ispraka i se zapisuva vo csv file
       
       //check if file is open for writing
       if (in_array($this->mode, FILE::$writeModes)){//dali e otvoren so soodvetniot mode
       fseek ($this->handle, -1, SEEK_END);//go pomestuva file poenterot na krajot za da zapisuva nes
       return fputcsv($this->handle, $row);//zapisuva
       }
       return false;
   }
   
   function read(){
       //check if file is opened for reading
        if (in_array($this->mode, self::$readModes)){
            
            rewind($this->handle);
            $result = [];
            while(!feof($this->handle)){//end of file
                
                $row = fgetcsv($this->handle);
                if($row && $row[0]!=null){//!= false ke vrati true/ako imame prazen red (null)
                    $result[] = $row;//poradi greska boolean false prazen posleden red vo csv
                }
                
            }
            return $result;
        }
   }
   
   function __destruct(){
       
       fclose($this->handle);//da se zatvori konekcija
   }
   
}