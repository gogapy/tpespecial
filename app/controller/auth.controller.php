<?php

include_once "app/model/user.model.php";
include_once "app/view/auth.view.php";

class authController {
    
    private $model;
    private $view; 

    function __construct() {
        $this->model = new userModel();
        $this->view = new authView();

    }

    function showLogin() {
        $this->view->showLogin();

    }
    
    public function validateUser() {
        //entran los datos ingresados por el usuario
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $this->model->getUserByEmail($email);

        //si $user es true y la contraseña ingresada por el usuario es igual a la del $user entonces crea una sesion
        if ($user && password_verify($password, $user->password)) {
            session_start();
            $_SESSION['USER_ID'] = $user->id;
            $_SESSION['USER_EMAIL'] = $user->email;
            $_SESSION['IS_LOGGED'] = true;

            header("Location: " . BASE_URL);

        } 
        //en caso contrario muestra el siguiente mensaje
        else {
           $this->view->showLogin("El usuario o la contraseña no existe.");
        } 
        
    }

    public function logout() {
        //para cerrar una sesion primero hay que iniciarla
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
        
    }
}