<?php
/* Smarty version 4.2.1, created on 2022-10-10 20:27:56
  from 'C:\xampp\htdocs\Fragrantica\templates\show_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6344642cdacc33_86671397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f45e3787855396efab674c356158bc4793da960' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Fragrantica\\templates\\show_login.tpl',
      1 => 1665426474,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6344642cdacc33_86671397 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form method="post" action="validate">
    <div class="form-floating mt-3 mb-3">
        <input type="email" class="form-control" name="email" placeholder="Email">
        <label for="floatingInput">Email</label>
      </div>
      <div class="form-floating mb-3">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
      <div>
        <button class="btn">Login</button>
      </div>
      <?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
        <div class="alert alert-danger mt-3">
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        </div>
      <?php }?>
</form>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
