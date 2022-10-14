<?php

class AuthHelper {

    public function checkLoggedIn() {
        session_start();
        //var_dump($_SESSION);

    } 

    public function userRestrict() {
        session_start();
        if (!isset($_SESSION['IS_LOGGED'])) {
            header("Location: " . BASE_URL . "login"); 
            die();
        }
    }
}