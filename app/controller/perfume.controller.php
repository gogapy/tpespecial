<?php
// Importo todo los necesario
include_once "app/model/perfume.model.php";
include_once "app/view/perfume.view.php";
require_once 'app/helper/auth.helper.php';

class perfumeController{

    private $model;
    private $view; 
    private $helper;

    function __construct() {
        $this->model = new perfumeModel();
        $this->view = new perfumeView();
        
        //security
        $this->helper = new AuthHelper();
    }

    function showPerfumes() {
        $perfumes = $this->model->getObject('*', "perfumes");
        $brands = $this->model->getObject('*', "brands");
        $this->helper->checkLoggedIn();

        $this->view->showPerfumes($perfumes, $brands);

    }

    function filterPerfumes($name) {
        $perfumes = $this->model->interactionWithTables("*", "perfumes", "brand_name", $name);
        $brands = $this->model->interactionWithTables("*", "brands", "brand_name", $name);
        $this->helper->checkLoggedIn();

        $this->view->showPerfumes($perfumes, $brands);  
        

    }

    function perfumeDescription($name) {
        $perfumes = $this->model->interactionWithTables("*", "perfumes", "perfume_name", $name);
        //var_dump($perfumes);
        $this->helper->checkLoggedIn();
        $this->view->showPerfumeFilter($perfumes);  

    }

    function addPerfume() {
        $name = $_POST['perfume'];
        $notes = $_POST['notes'];
        $longevity = $_POST['longevity'];
        $qualification = $_POST['qualification'];
        $brand = $_POST['brand'];
        $description = $_POST['description'];
        $image = $_POST['image'];

        $id = $this->model->createPerfume($name, $notes, $longevity, $qualification, $brand, $description, $image);

        header("Location: " . BASE_URL . "perfumes"); 
    }

    function deletePerfume($id) {
        $this->model->deletePerfume($id);
        header("Location: " . BASE_URL . "perfumes"); 
    }
}