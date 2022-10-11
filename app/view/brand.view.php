<?php

require_once 'libs/smarty/libs/Smarty.class.php';

class brandView {

    function showBrands($brands) {
        $smarty = new Smarty();
        $smarty->assign('brands', $brands);
        $smarty->display('templates/show_brands.tpl');

    }

}