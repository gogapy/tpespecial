<?php
/* Smarty version 4.2.1, created on 2022-10-04 15:03:30
  from 'C:\xampp\htdocs\tpespecial\templates\show_perfumes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633c2f22cea399_91735677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fdc63b8428e1f8293b194a27dfec4f0262e1ca9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpespecial\\templates\\show_perfumes.tpl',
      1 => 1664888446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633c2f22cea399_91735677 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="table">
    <tr>
        <th>Name</th>
        <th>Notes</th>
        <th>Qualification</th>
        <th>Longevity</th>
        <th>Brand</th>
        <th></th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['perfumes']->value, 'perfume');
$_smarty_tpl->tpl_vars['perfume']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['perfume']->value) {
$_smarty_tpl->tpl_vars['perfume']->do_else = false;
?>
        <tr>
            <td><a style="text-decoration: none" href="<?php echo $_smarty_tpl->tpl_vars['perfume']->value->perfume_name;?>
"><?php echo $_smarty_tpl->tpl_vars['perfume']->value->perfume_name;?>
</a></td>
            <td><?php echo $_smarty_tpl->tpl_vars['perfume']->value->notes;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['perfume']->value->qualification;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['perfume']->value->longevity;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['perfume']->value->brand_name;?>
</td>
            <td><a href='delete/<?php echo $_smarty_tpl->tpl_vars['perfume']->value->id_perfume;?>
'><button type="button" class="btn-close" aria-label="Close"></button></a></td>

        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</table>
<p class="mt-3"><small>Perfumes quantity: <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</small></p>
<?php }
}
