<?php
include_once "app/controller/perfume.controller.php";
include_once "app/controller/brand.controller.php";
include_once "app/controller/auth.controller.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'perfumes'; // default action
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

$perfumeController = new perfumeController();
$brandController = new brandController();
$authController = new authController();

// tabla de ruteo
switch ($params[0]) {
    case 'login':
        $authController->showLogin();        
        break;

    case 'validate':
        $authController->validateUser();
        break;
        
    case 'perfumes':
        if(isset($params[1])) {
            $brand = $params[1];
            $perfumeController->perfumeDescription($brand); 
        } 
        else {
            $perfumeController->showPerfumes();
        }
        break;

    case 'brands':
        if(isset($params[1])) {
            $perfume = $params[1];
            $perfumeController->filterPerfumes($perfume);
        } 
        else {
            $brandController->showBrands();
        }
        break;

    case 'add':
        $perfumeController->addPerfume();
        break;
    
    case 'create':
        $brandController->createBrand();
        break;
    
    case 'deleteperfume':
        $id = $params[1];
        $perfumeController->deletePerfume($id);
        break;

    case 'deletebrand':
        $id = $params[1];
        $brandController->deleteBrand($id);
        break;

    case 'updateperfume':
        $id = $params[1];
        $perfumeController->showUpdate($id);
        break;

    case 'perfumeupdated':
        $id = $params[1];
        $perfumeController->updatePerfume($id);
        break;

    case 'updatebrand':
        $id = $params[1];
        $brandController->showUpdateBrand($id);
        break;

    case 'brandupdated':
        $id = $params[1];
        $brandController->updateBrand($id);
        break;

    case 'logout':
        $authController->logout();
        break;

    default:
        echo('404 Page not found');
        break;
}
