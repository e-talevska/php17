<?php
namespace FileManipulation;

class File {
    private $handle;
    private $mode;
    private $path;
    public static $writeModes = ["w", "w+", "a", "a+", "r+"];
    public static $readModes = ["r", "r+", "w+" , "a+"];
            function __construct($path, $mode) {
        $this->mode = $mode;
        $this->path = $path;
        $this->handle = fopen($path, $mode);
    }
    
    function write($row){
        //check if the file is open for writing
        if (in_array($this->mode, File::$writeModes)){
            //go to the end of the file
        fseek($this->handle, -1, SEEK_END);
        return fputcsv($this->handle, $row);
        }
        return false;
    }
    
    function read(){
        //check if the file is open for reading 
        if(in_array($this->mode, self::$readModes)){
            rewind($this->handle);
            $result = [];
        while(!feof($this->handle)){
            $row = fgetcsv($this->handle);
            if($row && $row[0] != NULL){ // za da se isfiltriraat prazni redovi
                $result[]= $row;
            }
        }
        return $result;
        }
    }
    
    function __destruct() {
        
        fclose($this->handle);
    }
}