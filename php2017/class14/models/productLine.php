<?php
require_once './db.php';
class ProductLine extends DBAccess {
    private $table = "productlines";
    //override parent`s method
    function fetchAll() {
        return parent::read($this->table);
    }
}

