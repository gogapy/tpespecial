<?php
/* Smarty version 4.2.1, created on 2022-10-01 21:26:24
  from 'C:\xampp\htdocs\tpespecial\app\view\perfume.view.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63389460af8e15_86138037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '495585cc71371e5ab6a9a466a8e2e03121a22c06' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpespecial\\app\\view\\perfume.view.php',
      1 => 1664652327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63389460af8e15_86138037 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php'; ?>


require_once 'app/libs/smarty/libs/Smarty.class.php';

class perfumeView {
    
    
    function showPerfumes($perfumes) {

        // $controller = new perfumeController();
        // echo 'asd '.$controller->showNameBrand();
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

    function showInsert() {

        $smarty = new Smarty();
        $smarty->display('app/templates/header.tpl');
        $smarty->display('app/templates/show_insert.tpl');
        $smarty->display('app/templates/footer.tpl');

    }

    function filterPerfumes($perfumes) {

        $smarty = new Smarty();
        $smarty->assign('perfumes', $perfumes);
        $smarty->display('app/templates/header.tpl');
        $smarty->display('app/templates/filter_perfumes.tpl');
        $smarty->display('app/templates/footer.tpl');

    }
}
<?php echo '?>'; ?>


<?php }
}
