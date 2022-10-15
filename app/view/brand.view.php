<?php

require_once 'libs/smarty/libs/Smarty.class.php';

class brandView {

    function showBrands($brands, $error = null) {
        $smarty = new Smarty();
        $smarty->assign('brands', $brands);
        $smarty->assign('error', $error);
        $smarty->display('templates/show_brands.tpl');

    }

    function showUpdateBrand($brands) {
        $smarty = new Smarty();
        $smarty->assign('brands', $brands);
        $smarty->display('templates/update_brand.tpl');
        
    }
}