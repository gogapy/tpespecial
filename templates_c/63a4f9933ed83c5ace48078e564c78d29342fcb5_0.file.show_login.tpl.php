<?php
/* Smarty version 4.2.1, created on 2022-10-03 00:10:41
  from 'C:\xampp\htdocs\tpespecial\app\templates\show_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633a0c61412275_19031574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63a4f9933ed83c5ace48078e564c78d29342fcb5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpespecial\\app\\templates\\show_login.tpl',
      1 => 1664748329,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633a0c61412275_19031574 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="post">
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
