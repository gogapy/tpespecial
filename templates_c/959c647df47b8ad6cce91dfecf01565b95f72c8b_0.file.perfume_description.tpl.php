<?php
/* Smarty version 4.2.1, created on 2022-10-10 20:05:47
  from 'C:\xampp\htdocs\Fragrantica\templates\perfume_description.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63445efbd16605_98922325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '959c647df47b8ad6cce91dfecf01565b95f72c8b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Fragrantica\\templates\\perfume_description.tpl',
      1 => 1665425144,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63445efbd16605_98922325 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['perfumes']->value, 'perfume');
$_smarty_tpl->tpl_vars['perfume']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['perfume']->value) {
$_smarty_tpl->tpl_vars['perfume']->do_else = false;
?>
    <img style='width: 300px' class='' src="<?php echo $_smarty_tpl->tpl_vars['perfume']->value->perfume_image;?>
" alt="">
    <h2><?php echo $_smarty_tpl->tpl_vars['perfume']->value->perfume_name;?>
 (<?php echo $_smarty_tpl->tpl_vars['perfume']->value->brand_name;?>
)</h2>
    <p><?php echo $_smarty_tpl->tpl_vars['perfume']->value->perfume_description;?>
</p>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
