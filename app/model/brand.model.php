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

        return $object;

    }

    function interactionWithTables($columns, $table, $column, $name) {
        $query = $this->db->prepare("SELECT $columns FROM $table WHERE $column = ?");    
        $query->execute([$name]);
        $object = $query->fetchAll(PDO::FETCH_OBJ);

        return $object; 

    }

    function createBrand($brand) {
        $query = $this->db->prepare("INSERT INTO brands (brand_name) VALUES (?)");
        $query->execute([$brand]);
        
        return $this->db->lastInsertId();

    }

    function deleteBrand($id) {
        try {
            $query = $this->db->prepare('DELETE FROM brands WHERE id_brand = ?');
            $query->execute([$id]);

        }
        catch(Exception) {
            header('Location:' . BASE_URL . 'brands');

        }

    }

    function updatePerfume($id, $name) {
        $query = $this->db->prepare("UPDATE brands SET brand_name=? WHERE id_brand=?");
        $query->execute([$name, $id]);
          
        return $this->db->lastInsertId();

    }
    
}