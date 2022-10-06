<?php

class perfumeModel{

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

    function perfumeDescription($column, $table, $name) {
        $query = $this->db->prepare("SELECT $column FROM $table WHERE perfume_name = '$name'");    
        $query->execute();

        $object = $query->fetchAll(PDO::FETCH_OBJ);
        // var_dump($object);  

        return $object;
    }

    function filterPerfumes($column, $table, $name) {
        $query = $this->db->prepare("SELECT $column FROM $table WHERE brand_name = '$name'");    
        $query->execute();

        $object = $query->fetchAll(PDO::FETCH_OBJ);
        // var_dump($object);  

        return $object;
    }

    function createPerfume($name, $notes, $longevity, $qualification, $brand, $description, $image) {
        $query = $this->db->prepare("INSERT INTO perfumes (perfume_name, notes, longevity, qualification, brand_name, perfume_description, perfume_image) VALUES (?,?,?,?,?,?,?)");
        $query->execute([$name, $notes, $longevity, $qualification, $brand, $description, $image]);
        
        return $this->db->lastInsertId();
    }

    function deletePerfume($id) {
        $query = $this->db->prepare('DELETE FROM perfumes WHERE id_perfume = ?');
        $query->execute([$id]);
    }
}
