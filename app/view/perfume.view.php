<?php

require_once 'app/libs/smarty/libs/Smarty.class.php';

class perfumeView {
    
    
    function showPerfumes($perfumes) {
    
        $smarty = new Smarty();
        $smarty->assign('perfumes', $perfumes);
        $smarty->display('app/templates/header.tpl');
        $smarty->display('app/templates/show_perfumes.tpl');
        $smarty->display('app/templates/footer.tpl');

    }

    function showBrands($brands) {
 
        $smarty = new Smarty();
        $smarty->assign('brands', $brands);
        $smarty->display('app/templates/header.tpl');
        $smarty->display('app/templates/show_brands.tpl');
        $smarty->display('app/templates/footer.tpl');

    }

    function showAbout() {

        $smarty = new Smarty();
        $smarty->display('app/templates/header.tpl');
        $smarty->display('app/templates/show_about.tpl');
        $smarty->display('app/templates/footer.tpl');

    }

    function showLogin() {
        
        $smarty = new Smarty();
        $smarty->display('app/templates/header.tpl');
        $smarty->display('app/templates/show_login.tpl');
        $smarty->display('app/templates/footer.tpl');
        
    }
}
?>

