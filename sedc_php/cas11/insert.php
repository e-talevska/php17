<?php
namespace FileManipulation;

class File {
    
    private $handle;
    private $mode;
    private $path;
    public static $writeModes = ["r+", "w", "w+", "a", "a+"];
    
    
    function __construct($path, $mode){
        
       $this->mode = $mode;
       $this->path = $path;
       $this->handle = fopen($path, $mode);
       
   }
   
   function write($row){
       
       //check if file is open for writing
       if (in_array($this->mode, FILE::$writeModes)){//dali e otvoren so soodvetniot mode
       fseek ($this->handle, -1, SEEK_END);//go pomestuva file poenterot na krajot za da zapisuva nes
       return fputcsv($this->handle, $row);//zapisuva
       }
       return false;
   }
   
   function __destruct(){
       
       fclose($this->handle);
   }
   
}
if (isset($_POST['submit'])){
    
    $name = $_POST['name'];
    
    if (trim($name) != ""){
        $file = new File("db/db.csv", "a+");
        $file->write([$name]);
    }
}