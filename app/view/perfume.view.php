<?php

require_once 'libs/smarty/libs/Smarty.class.php';

class perfumeView {
    
    function showPerfumes($perfumes, $brands) {
        $smarty = new Smarty();
        $smarty->assign('perfumes', $perfumes);
        $smarty->assign('brands', $brands);
        $smarty->assign('count', count($perfumes));
        $smarty->display('templates/show_perfumes.tpl');

    }

    function showUpdate($perfumes, $brands) {
        $smarty = new Smarty();
        $smarty->assign('perfumes', $perfumes);
        $smarty->assign('brands', $brands);
        $smarty->display('templates/show_update.tpl');

    }

    function showPerfumeFilter($perfumes) {
        $smarty = new Smarty();
        $smarty->assign('perfumes', $perfumes);
        $smarty->display('templates/perfume_description.tpl');

    }
}
?>

