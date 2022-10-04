<?php

require_once 'libs/smarty/libs/Smarty.class.php';

class perfumeView {
    
    
    function showPerfumes($perfumes) {

        // $controller = new perfumeController();
        // echo 'asd '.$controller->showNameBrand();
        $smarty = new Smarty();
        $smarty->assign('perfumes', $perfumes);
        $smarty->assign('count', count($perfumes));
        $smarty->display('templates/show_perfumes.tpl');
        $smarty->display('templates/footer.tpl');
        
    }

    function showBrands($brands) {
 
        $smarty = new Smarty();
        $smarty->assign('brands', $brands);
        $smarty->display('templates/header.tpl');
        $smarty->display('templates/show_brands.tpl');
        $smarty->display('templates/footer.tpl');

    }

    function showAbout() {

        $smarty = new Smarty();
        $smarty->display('templates/header.tpl');
        $smarty->display('templates/show_about.tpl');
        $smarty->display('templates/footer.tpl');

    }

    function showLogin() {
        
        $smarty = new Smarty();
        $smarty->display('templates/header.tpl');
        $smarty->display('templates/show_login.tpl');
        $smarty->display('templates/footer.tpl');
        
    }

    function showCreate($brands) {

        $smarty = new Smarty();
        $smarty->assign('brands', $brands);
        $smarty->display('templates/header.tpl');
        $smarty->display('templates/show_create.tpl');

    }
}
?>

