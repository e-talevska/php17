<?php
    require_once("./db.php");
    
    class ProductLine extends DBAccess{
        private $table = "productlines";
        function fetchAll(){
            return parent::read($this->table);
        }
    }
    
?>