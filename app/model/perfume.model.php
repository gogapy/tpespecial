<?php

class perfumeModel{

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=perfume_shop;charset=utf8', 'root', '');
    }
    
    function getObject($row, $object) {
        $query = $this->db->prepare("SELECT $row FROM $object"); // SELECT notes FROM perfumes
        $query->execute();

        $object = $query->fetchAll(PDO::FETCH_OBJ);
        // var_dump($object);  

        return $object;
    }

    function filterPerfumes($table, $object, $name) {
        $query = $this->db->prepare("SELECT $table FROM $object WHERE brand_name = '$name'");    
        $query->execute();

        $object = $query->fetchAll(PDO::FETCH_OBJ);
        var_dump($object);  

        return $object;
    }

    function createPerfume($name, $notes, $longevity, $qualification, $brand) {
        $query = $this->db->prepare("INSERT INTO perfumes (perfume_name, notes, longevity, qualification, brand_name) VALUES (?,?,?,?,?)");
        $query->execute([$name, $notes, $longevity, $qualification, $brand]);
        
        return $this->db->lastInsertId();
    }

    function deletePerfume($id) {
        $query = $this->db->prepare('DELETE FROM perfumes WHERE id_perfume = ?');
        $query->execute([$id]);
    }
}
