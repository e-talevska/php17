<?php
require_once './db.php';
class ProductLine extends DBAccess {
    private $table = "productlines";
    
    function fetchAll() {
        // productlines e imeto na tabelata vo baza
        return parent::read($this->table);
    }
}