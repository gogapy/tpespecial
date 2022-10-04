<?php
/* Smarty version 4.2.1, created on 2022-10-01 23:17:09
  from 'C:\xampp\htdocs\tpespecial\app\templates\show_brands.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6338ae559d2435_02736917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0a3fc51bec9bfb91096781c1242abb3925b7664' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpespecial\\app\\templates\\show_brands.tpl',
      1 => 1664659028,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6338ae559d2435_02736917 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="table">
    <tr>
        <th>Brand</th>
    </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand');
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?>
            <tr>
                <td>
                    <a href='<?php echo $_smarty_tpl->tpl_vars['brand']->value->brand_name;?>
' style='text-decoration:none'>
                        <?php echo $_smarty_tpl->tpl_vars['brand']->value->brand_name;?>

                    </a>
                </td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

<?php }
}
