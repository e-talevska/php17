<?php

    namespace FileManipulation;
 
    class File {
        private $fileHandler;
        private $mode;
        private $path;
        public static $writeModes = array("r+", "w", "w+", "a", "a+");
        function __construct($path, $mode){
            $this->mode = $mode;
            $this->path = $path;
            $this->fileHandler = fopen($path, $mode);
        }
        
        function write($row){
            // Check if file is open for writing
            if(in_array($this->mode, File::$writeModes)){
                // Go to end of file then write
                fseek($this->fileHandler, -1, SEEK_END);
                return fputcsv($this->fileHandler, $row);
            }
            return false;
        }
        
        function __destruct(){
            fclose($this->fileHandler);
        }
    }
    
    if(isset($_POST['submit'])){
        if(isset($_POST['fakultet'])){
            $fakultet = trim($_POST['fakultet']);
            $file = new File("db/db.csv", "a+");
            $file->write([$fakultet]);
        }
    }