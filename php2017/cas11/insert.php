<?php
namespace FileManipulation;

class File{
    private $handle;
    private $mode;
    private $path;
    public static $writeModes = ['w','w+','a','a+','r','r+'];
            
    function __construct($path,$mode) {
        $this->mode = $mode;
        $this->path = $path;
        $this->handle = fopen($path, $mode);
    }
    
    function write($row){
        //check if the file is open for writing
        if(in_array($this->mode, File::$writeModes)){
            // go to the end of file
            fseek($this->handle, -1,SEEK_END);
            return fputcsv($this->handle, $row);
            
        }
        return false;
    }
            
    function __destruct() {
        fclose($this->handle);
    }
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    if(trim($name) != ''){
        $file = new File("db/db.csv", "r+");
        $file->write([$name]);
    }
}
