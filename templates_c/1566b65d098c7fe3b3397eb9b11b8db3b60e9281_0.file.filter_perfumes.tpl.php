<?php
/* Smarty version 4.2.1, created on 2022-10-01 21:51:45
  from 'C:\xampp\htdocs\tpespecial\app\templates\filter_perfumes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63389a51a3ee91_13888697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1566b65d098c7fe3b3397eb9b11b8db3b60e9281' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpespecial\\app\\templates\\filter_perfumes.tpl',
      1 => 1664653831,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63389a51a3ee91_13888697 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="table">
    <tr>
        <th>Name</th>
        <th>Notes</th>
        <th>Qualification</th>
        <th>Durability</th>
        <th>Brand</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['perfumes']->value, 'perfume');
$_smarty_tpl->tpl_vars['perfume']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['perfume']->value) {
$_smarty_tpl->tpl_vars['perfume']->do_else = false;
?>
        <tr>
            <span><td><?php echo $_smarty_tpl->tpl_vars['perfume']->value->perfume_name;?>
</td></span>
            <span><td><?php echo $_smarty_tpl->tpl_vars['perfume']->value->notes;?>
</td></span>
            <span><td><?php echo $_smarty_tpl->tpl_vars['perfume']->value->qualification;?>
</td></span>
            <span><td><?php echo $_smarty_tpl->tpl_vars['perfume']->value->durability;?>
</td></span>
            <span><td><?php echo $_smarty_tpl->tpl_vars['perfume']->value->brand_name;?>
</td></span>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</table><?php }
}
