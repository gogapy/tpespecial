<?php

class userModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=perfume_shop;charset=utf8', 'root', '');
        
    }
    
    public function getUserByEmail($email) {
        $query = $this->db->prepare("SELECT * FROM user WHERE email = ?");
        $query->execute([$email]);
        return $query->fetch(PDO::FETCH_OBJ);
        
    }

    
}