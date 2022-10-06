<?php
# Importo todo los necesario
include_once "app/model/perfume.model.php";
include_once "app/view/perfume.view.php";


class perfumeController{

    private $model;
    private $view; 

    function __construct() {
        $this->model = new perfumeModel();
        $this->view = new perfumeView();
    }

    function showPerfumes() {
        $perfumes = $this->model->getObject('*', "perfumes");
        $this->view->showPerfumes($perfumes);
    }

    function showBrands() {
        $brands = $this->model->getObject('*', "brands");
        $this->view->showBrands($brands);
    }

    function showAbout() {
        $this->view->showAbout();
    }

    function showLogin() {
        $this->view->showLogin();
    }

    function showNameBrand() {
        $this->model->getObject('brand_name', 'perfumes');
    }

    function showInsert() {
        $brands = $this->model->getObject('brand_name', 'brands');
        $this->view->showCreate($brands);
    }

    function filterPerfumes($name) {
        $perfumes = $this->model->filterPerfumes("*", "perfumes", $name);
        $this->view->showPerfumes($perfumes);    
    }

    function perfumeDescription($name) {
        $perfumes = $this->model->perfumeDescription("*", "perfumes", $name);
        //var_dump($perfumes);
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

        header("Location: " . BASE_URL); 
    }

    function deletePerfume($id) {
        $this->model->deletePerfume($id);
        header("Location: " . BASE_URL); 
    }
}