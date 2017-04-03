<?php

namespace FileManipulation;
class File {
    private $handle;
    private $mode;
    Private $path;
    public static $writeModes = ["r", "w", "w+","a", "a+"];
    public static $readModes=['r','r+','w+', 'a+'];
            function __construct($path, $mode) {
        $this->mode = $mode; 
        $this->path = $path;
        $this->handle=  fopen($path, $mode);
    }
    function write($row){
        if(in_array($this->mode, File::$writeModes)){
        fseek($this->handle, -1, SEEK_END);
        return fputcsv($this->handle, $row);
        
    }
    return false;
    }
    function read(){
        //check if the file is open for reading
        if(in_array($this->mode, self::$readModes)){
            rewind($this->handle);
            $result =[];
            while(!feof($this->handle)){
               $row = fgetcsv($this->handle);
               if($row && $row[0]!=null){
                   $result[] = $row;
               }
            }
            return $result;
        }
    }
            
    function __destruct() {
        fclose($this->handle);
    }
}
