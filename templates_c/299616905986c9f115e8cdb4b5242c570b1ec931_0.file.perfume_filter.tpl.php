<?php
/* Smarty version 4.2.1, created on 2022-10-01 20:46:29
  from 'C:\xampp\htdocs\tpespecial\app\templates\perfume_filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63388b050fad53_79226631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '299616905986c9f115e8cdb4b5242c570b1ec931' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpespecial\\app\\templates\\perfume_filter.tpl',
      1 => 1664649955,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63388b050fad53_79226631 (Smarty_Internal_Template $_smarty_tpl) {
?><table>
    <tr>
        <th>Perfume name</th>
        <th>Brand name</th>
    </tr>
    <tr>
        <td></td>
        <td><?php echo $_smarty_tpl->tpl_vars['brands']->value->{$_smarty_tpl->tpl_vars['brand_name']->value};?>
</td>
    </tr>
</table><?php }
}
