<?php
require_once 'app/model/perfume.model.php';
include_once "app/controller/perfume.controller.php";
include_once "app/view/perfume.view.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'perfumes'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

$controller = new perfumeController();

// tabla de ruteo
switch ($params[0]) {
    case 'perfumes':
        $controller->showPerfumes();
        break;

    case 'brands':
        $controller->showBrands();
        break;

    case 'about':
        $controller->showAbout();
        break;

    case 'login':
        $controller->showLogin();        
        break;
        
    case $controller->showNameBrand():  // 'brand_name'
        echo "adsdasdsa";
        break;
        
    default:
        echo('404 Page not found');
        break;
}
