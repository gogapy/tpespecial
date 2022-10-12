<?php

class brandModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=perfume_shop;charset=utf8', 'root', '');
    }

    function getObject($column, $table) {
        $query = $this->db->prepare("SELECT $column FROM $table"); // SELECT notes FROM perfumes
        $query->execute();

        $object = $query->fetchAll(PDO::FETCH_OBJ);
        // var_dump($object);  

        return $object;
    }

    function createBrand($brand) {
        $query = $this->db->prepare("INSERT INTO brands (brand_name) VALUES (?)");
        $query->execute([$brand]);
        
        return $this->db->lastInsertId();
    }

    function deleteBrand($id) {
        $query = $this->db->prepare('DELETE FROM brands WHERE id_brand = ?');
        $query->execute([$id]);

    }

    
}