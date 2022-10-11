<?php
/* Smarty version 4.2.1, created on 2022-10-11 17:50:23
  from 'C:\xampp\htdocs\Fragrantica\templates\create_brands.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634590bfb11f14_07735759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8e0ae0a222703ec336a462299617cad464ba774' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Fragrantica\\templates\\create_brands.tpl',
      1 => 1665503422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634590bfb11f14_07735759 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form class="row g-3 mt-1" action="create" method="get">
    <div class="col-4">
        <label class="form-label" for="">Brand</label>
        <input class="form-control" type="text" name="brand" placeholder="Brand" id="">
    </div>
    <div class="col-12">
        <button class="btn btn-primary">Create</button>
    </div>
</form>
<?php }
}
