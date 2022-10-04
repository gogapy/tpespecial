<?php
/* Smarty version 4.2.1, created on 2022-10-04 15:04:03
  from 'C:\xampp\htdocs\tpespecial\templates\show_create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633c2f43cb9284_91012660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd23e9570e3a95cbad03b9a8629f24da93e61741' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpespecial\\templates\\show_create.tpl',
      1 => 1664888641,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633c2f43cb9284_91012660 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="add" method="POST" class="row g-3 mt-1">
  <div class="col-md-6">
    <label class="form-label">Perfume name</label>
    <input name="perfume" type="text" class="form-control" placeholder="Perfume name">
  </div>
  <div class="col-md-6">
    <label class="form-label">Notes</label>
    <input name="notes" type="text" class="form-control" placeholder="Notes">
  </div>
  <div class="col-6">
    <label class="form-label">Qualification</label>
    <input name="qualification" type="number" class="form-control" placeholder="Qualification">
  </div>
  <div class="col-6">
    <label class="form-label">Durability</label>
    <input name="longevity" type="text" class="form-control" placeholder="Durability">
  </div>
  <div class="col-md-12">
    <label class="form-label">Brand</label>
    <select name="brand" class="form-control">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand');
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?>
        <option value="brand"><?php echo $_smarty_tpl->tpl_vars['brand']->value->brand_name;?>
</option>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Create</button>
  </div>
</form><?php }
}
