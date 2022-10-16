<?php

require_once 'libs/smarty/libs/Smarty.class.php';

class perfumeView {
    
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
        
    }

    function showPerfumes($perfumes, $brands) {
        $this->smarty->assign('perfumes', $perfumes);
        $this->smarty->assign('brands', $brands);
        $this->smarty->assign('count', count($perfumes));
        $this->smarty->display('templates/show_perfumes.tpl');

    }

    function showUpdate($perfumes, $brands) {
        $this->smarty->assign('perfumes', $perfumes);
        $this->smarty->assign('brands', $brands);
        $this->smarty->display('templates/show_update.tpl');

    }

    function showPerfumeFilter($perfumes) {
        $this->smarty->assign('perfumes', $perfumes);
        $this->smarty->display('templates/perfume_description.tpl');

    }
}
?>

