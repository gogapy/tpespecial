<?php
/* Smarty version 4.2.1, created on 2022-10-13 20:13:51
  from 'C:\xampp\htdocs\Fragrantica\templates\show_perfumes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6348555f81bae2_46951097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fa25eb9ec1e96beb412039508ceea30348c9e68' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Fragrantica\\templates\\show_perfumes.tpl',
      1 => 1665684815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:show_create.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6348555f81bae2_46951097 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ((isset($_SESSION['USER_ID']))) {?>
    <?php $_smarty_tpl->_subTemplateRender('file:show_create.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
<table class="table">
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
            <td><a style="text-decoration: none" href="perfumes/<?php echo $_smarty_tpl->tpl_vars['perfume']->value->perfume_name;?>
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
            <?php if ((isset($_SESSION['USER_ID']))) {?>
                <td><a href='deleteperfume/<?php echo $_smarty_tpl->tpl_vars['perfume']->value->id_perfume;?>
'><button type="button" class="btn-close" aria-label="Close"></button></a></td>
                <td><a href='updateperfume/<?php echo $_smarty_tpl->tpl_vars['perfume']->value->id_perfume;?>
'><button type="button" class="btn btn-success">Update</button></a></td>
            <?php }?>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</table>
<p class="mt-3"><small>Perfumes quantity: <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</small></p>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  <?php }
}
