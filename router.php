<?php
include_once "app/controller/perfume.controller.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'perfumes'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

$controller = new perfumeController();
$admin = true;

// tabla de ruteo
switch ($params[0]) {
    case 'perfumes':
        if($admin) {
            $controller->showInsert();
        }
        $controller->showPerfumes();
        break;

    case 'add':
        $controller->addPerfume();
        break;

    case 'delete':
        $id = $params[1];
        $controller->deletePerfume($id);
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

    case $params[0]:  // 'brand_name'
        $controller->filterPerfumes($params[0]);
        $controller->perfumeDescription($params[0]);
        break;

    default:
        echo('404 Page not found');
        break;
}
