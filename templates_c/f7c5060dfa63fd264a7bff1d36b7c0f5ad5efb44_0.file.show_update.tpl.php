<?php
/* Smarty version 4.2.1, created on 2022-10-12 20:43:38
  from 'C:\xampp\htdocs\Fragrantica\templates\show_update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63470adad6f4a7_85965306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7c5060dfa63fd264a7bff1d36b7c0f5ad5efb44' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Fragrantica\\templates\\show_update.tpl',
      1 => 1665600215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63470adad6f4a7_85965306 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['perfumes']->value, 'perfume');
$_smarty_tpl->tpl_vars['perfume']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['perfume']->value) {
$_smarty_tpl->tpl_vars['perfume']->do_else = false;
?>
  <form action="update/<?php echo $_smarty_tpl->tpl_vars['perfume']->value->id_perfume;?>
" method="POST" class="row g-3 mt-1" enctype="multipart/form-data">
    <div class="col-md-6">
      <label class="form-label">Perfume name</label>
      <input name="perfume" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['perfume']->value->perfume_name;?>
" placeholder="Perfume name">
    </div>
    <div class="col-md-6">
      <label class="form-label">Notes</label>
      <input name="notes" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['perfume']->value->notes;?>
" placeholder="Notes">
    </div>
    <div class="col-6">
      <label class="form-label">Qualification</label>
      <input name="qualification" type="number" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['perfume']->value->qualification;?>
" placeholder="Qualification">
    </div>
    <div class="col-6">
      <label class="form-label">Longevity</label>
      <input name="longevity" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['perfume']->value->longevity;?>
" placeholder="Longevity">
    </div>
    <div class="col-md-6">
      <label class="form-label">Brand</label>
      <select name="brand"  class="form-control">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand');
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?>
          <option name="brand"><?php echo $_smarty_tpl->tpl_vars['brand']->value->brand_name;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </select>
    </div>
    <div class="col-6">
      <label class="form-label">Image</label>
      <input name="image" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['perfume']->value->perfume_image;?>
" placeholder="Image">
    </div>
    <div class="col-12">
      <label class="form-label">Description</label>
      <textarea style="max-height: 250px;" name="description" placeholder="Description" value="<?php echo $_smarty_tpl->tpl_vars['perfume']->value->perfume_description;?>
" class="form-control" cols="30" rows="10"><?php echo $_smarty_tpl->tpl_vars['perfume']->value->perfume_description;?>
</textarea>
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
