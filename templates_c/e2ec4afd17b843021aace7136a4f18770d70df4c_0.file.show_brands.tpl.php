<?php
/* Smarty version 4.2.1, created on 2022-10-18 01:15:49
  from 'C:\xampp\htdocs\Fragrantica\templates\show_brands.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634de225aaea03_17120886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2ec4afd17b843021aace7136a4f18770d70df4c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Fragrantica\\templates\\show_brands.tpl',
      1 => 1666048537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:create_brands.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634de225aaea03_17120886 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ((isset($_SESSION['USER_ID']))) {?>
    <?php $_smarty_tpl->_subTemplateRender('file:create_brands.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<table class="table">
    <tr>
        <th>Brand</th>
    </tr>
        <?php if ((isset($_SESSION['USER_ID']))) {?>
        <div class="alert alert-warning mt-3">
            To eliminate a brand first you need to delete all the perfumes with that brand. (THIS IS FOR DATABASE SECURITY)
        </div>
    <?php }?>
    <div class="alert alert-warning mt-3">
        Click on a brand name to see all the perfumes of that brand
    </div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand');
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?>
            <tr>
                <td>
                    <a href='brands/<?php echo $_smarty_tpl->tpl_vars['brand']->value->brand_name;?>
' style='text-decoration:none'>
                        <?php echo $_smarty_tpl->tpl_vars['brand']->value->brand_name;?>

                    </a>
                </td>
                <?php if ((isset($_SESSION['USER_ID']))) {?>

                    <td>
                        <a href='deletebrand/<?php echo $_smarty_tpl->tpl_vars['brand']->value->id_brand;?>
'>
                            <button type="button" class="btn-close" aria-label="Close"></button>
                        </a>
                    </td>
                    <td>
                        <a href='updatebrand/<?php echo $_smarty_tpl->tpl_vars['brand']->value->id_brand;?>
'>
                            <button type="button" class="btn btn-success">Update</button>
                        </a>
                    </td>
                <?php }?>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>


<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
