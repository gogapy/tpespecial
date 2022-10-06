<?php
/* Smarty version 4.2.1, created on 2022-10-06 17:12:18
  from 'C:\xampp\htdocs\tpespecial\templates\perfume_description.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633ef052417940_90126182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec67fa68a77bb3a8e1f147d4f870401c19e4c367' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpespecial\\templates\\perfume_description.tpl',
      1 => 1665069135,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633ef052417940_90126182 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['perfumes']->value, 'perfume');
$_smarty_tpl->tpl_vars['perfume']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['perfume']->value) {
$_smarty_tpl->tpl_vars['perfume']->do_else = false;
?>
    <img style='width: 300px' class='img-thumbnail' src="<?php echo $_smarty_tpl->tpl_vars['perfume']->value->perfume_image;?>
" alt="">
    <h2><?php echo $_smarty_tpl->tpl_vars['perfume']->value->perfume_name;?>
 (<?php echo $_smarty_tpl->tpl_vars['perfume']->value->brand_name;?>
)</h2>
    <p><?php echo $_smarty_tpl->tpl_vars['perfume']->value->perfume_description;?>
</p>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
