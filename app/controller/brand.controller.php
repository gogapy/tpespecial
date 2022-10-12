<?php

// Importo lo necesario
include_once "app/model/brand.model.php";
include_once "app/view/brand.view.php";
require_once 'app/helper/auth.helper.php';

class brandController {

    private $model;
    private $view; 
    private $helper;

    function __construct() {
        $this->model = new brandModel();
        $this->view = new brandView();
        //security
        $this->helper = new AuthHelper();
    }

    function showBrands() {
        $brands = $this->model->getObject('*', "brands");
        $this->helper->checkLoggedIn();
        $this->view->showBrands($brands);

    }

    function createBrand() {
        $brand = $_GET['brand'];
        $this->model->createBrand($brand);

        header("Location: " . BASE_URL . "brands"); 

    }

    function deleteBrand($id) {
        try {
            $this->model->deleteBrand($id);
        }
        catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
            $this->view->showBrands($e);
        }
        header("Location: " . BASE_URL . "brands"); 
    }
}