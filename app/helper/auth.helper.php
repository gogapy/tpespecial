<?php

class AuthHelper {

    public function checkLoggedIn() {
        session_start();
        if (!isset($_SESSION['IS_LOGGED'])) {
        }
    } 
}