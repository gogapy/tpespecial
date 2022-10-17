<?php
/* Smarty version 4.2.1, created on 2022-10-18 01:15:49
  from 'C:\xampp\htdocs\Fragrantica\templates\create_brands.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634de225cc1a12_63672500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8e0ae0a222703ec336a462299617cad464ba774' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Fragrantica\\templates\\create_brands.tpl',
      1 => 1666027094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634de225cc1a12_63672500 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form class="row g-3 mt-1" action="create" method="get">
    <div class="col-4">
        <label class="form-label" for="">Brand</label>
        <input class="form-control" type="text" name="brand" placeholder="Brand" id="" required>
    </div>
    <div class="col-12">
        <button class="btn btn-primary">Create</button>
    </div>
</form>
<?php }
}
