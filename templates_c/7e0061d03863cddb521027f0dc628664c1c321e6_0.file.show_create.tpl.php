<?php
/* Smarty version 4.2.1, created on 2022-10-17 19:20:41
  from 'C:\xampp\htdocs\Fragrantica\templates\show_create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d8ee9395546_44697899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e0061d03863cddb521027f0dc628664c1c321e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Fragrantica\\templates\\show_create.tpl',
      1 => 1666027223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634d8ee9395546_44697899 (Smarty_Internal_Template $_smarty_tpl) {
?> 
  <form action="add" method="POST" class="row g-3 mt-1" enctype="multipart/form-data">
    <div class="col-md-6">
      <label class="form-label">Perfume name</label>
      <input name="perfume" type="text" class="form-control" placeholder="Perfume name" required>
    </div>
    <div class="col-md-6">
      <label class="form-label">Notes</label>
      <input name="notes" type="text" class="form-control" placeholder="Notes" required>
    </div>
    <div class="col-6">
      <label class="form-label">Qualification</label>
      <input name="qualification" type="number" class="form-control" placeholder="Qualification" required>
    </div>
    <div class="col-6">
      <label class="form-label">Longevity</label>
      <input name="longevity" type="text" class="form-control" placeholder="Longevity" required>
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
      <input name="image" type="text" class="form-control" placeholder="Image" required>
    </div>
    <div class="col-12">
      <label class="form-label">Description</label>
      <textarea style="max-height: 250px;" name="description" placeholder="Description" class="form-control" cols="30" rows="10" required></textarea>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Create</button>
    </div>
  </form>
<?php }
}
