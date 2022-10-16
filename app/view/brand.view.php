<?php

require_once 'libs/smarty/libs/Smarty.class.php';

class brandView {

    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
        
    }

    function showBrands($brands, $error = null) {
        $this->smarty->assign('brands', $brands);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/show_brands.tpl');

    }

    function showUpdateBrand($brands) {
        $this->smarty->assign('brands', $brands);
        $this->smarty->display('templates/update_brand.tpl');
        
    }
}