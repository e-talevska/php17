<?php
    
    namespace FileManipulation;
    
    class File {
        private $fileHandler;
        private $mode;
        private $path;
        public static $writeModes = array("r+", "w", "w+", "a", "a+");
        public static $readModes = array("r", "r+", "w+", "a+");
        
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
        
        function read(){
            if(in_array($this->mode, self::$readModes)){
                rewind($this->fileHandler);
                $result = array();
                
                while(!feof($this->fileHandler)){
                    $row = fgetcsv($this->fileHandler);
                    if($row && $row[0] != null){
                        $result[] = $row;
                    } 
                }
                return $result;
            }
        }

        function __destruct(){
            fclose($this->fileHandler);
        }
    }
?>