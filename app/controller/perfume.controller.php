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
        $perfumes = $this->model->getObject("perfumes");
        $this->view->showPerfumes($perfumes);
    }

    function showBrands() {
        $brands = $this->model->getObject("brands");
        $this->view->showBrands($brands);
    }

    function showAbout() {
        $this->view->showAbout();
    }

    function showLogin() {
        $this->view->showLogin();
    }

}