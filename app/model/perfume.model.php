<?php
include_once "app/controller/perfume.controller.php";

class perfumeModel{

    function getDB() {
        $db = new PDO('mysql:host=localhost;'.'dbname=perfume_shop;charset=utf8', 'root', '');
        return $db;
    }
    
    function getObject($object) {
        $db = $this->getDB();
    
        $query = $db->prepare("SELECT * FROM $object");
        $query->execute();
    
        $object = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $object;
    }
    
    function getName() {
        $db = $this->getDB();

        $query = $db->prepare("SELECT * FROM brands WHERE brand_name = 'Azzaro'");
        $query->execute();

        //$object = $query->fetchAll(PDO::FETCH_OBJ);

        return $query;
    }

}
