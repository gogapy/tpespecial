<?php
/* Smarty version 4.2.1, created on 2022-10-14 18:35:23
  from 'C:\xampp\htdocs\Fragrantica\templates\update_brand.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63498fcb9411b7_92326441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '622c7e065f390b427a2007d939aeeb43c1834ab9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Fragrantica\\templates\\update_brand.tpl',
      1 => 1665765321,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63498fcb9411b7_92326441 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand');
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?>
  <form action="brandupdated/<?php echo $_smarty_tpl->tpl_vars['brand']->value->id_brand;?>
" method="POST" class="row g-3 mt-1" enctype="multipart/form-data">
    <div class="col-md-6">
      <label class="form-label">Brand name</label>
      <input name="perfume" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['brand']->value->brand_name;?>
" placeholder="Brand name">
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
