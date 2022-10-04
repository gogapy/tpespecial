<?php
/* Smarty version 4.2.1, created on 2022-10-03 04:53:24
  from 'C:\xampp\htdocs\tpespecial\templates\show_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633a4ea4812cd4_90104830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecbe63bc5256be05cc37bf766796157efc139a95' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpespecial\\templates\\show_login.tpl',
      1 => 1664749086,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633a4ea4812cd4_90104830 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="">
    <div class="form-floating mt-3 mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Username">
        <label for="floatingInput">Username</label>
      </div>
      <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
      <div>
        <button class="btn">Login</button>
      </div>
</form><?php }
}
