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
        $this->helper->userRestrict();

        $brand = $_GET['brand'];
        $this->model->createBrand($brand);
        
        header("Location: " . BASE_URL . "brands"); 

    }

    function deleteBrand($id) {
        $this->helper->userRestrict();
        $this->model->deleteBrand($id);
        // $brands = $this->model->getObject('*', "brands");
        // $this->view->showBrands($brands, 'To eliminate a brand first you need to delete all the perfumes with that brand. (THIS IS FOR DATABASE SECURITY)');

    }
   
    function showUpdateBrand($id) {
        $this->helper->checkLoggedIn();
        $brands = $this->model->interactionWithTables('*', 'brands', 'id_brand', $id);
        $this->view->showUpdateBrand($brands);

    }

    function updateBrand($id) {
        $name = $_POST['perfume'];
        $this->model->updatePerfume($id, $name);
        header("Location: " . BASE_URL . "brands"); 

    }
}