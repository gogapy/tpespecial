<?php
/* Smarty version 4.2.1, created on 2022-10-03 01:12:30
  from 'C:\xampp\htdocs\tpespecial\app\templates\show_create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633a1ade2f8749_80561244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '725aef5bb71920a9bd8efc0e68363bb8a3f8e241' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpespecial\\app\\templates\\show_create.tpl',
      1 => 1664751711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633a1ade2f8749_80561244 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="app/controller/perfume.controller.php" method="get" class="row g-3 mt-1">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Perfume name</label>
    <input type="email" class="form-control" id="inputEmail4" placeholder="Perfume name">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Notes</label>
    <input type="password" class="form-control" id="inputPassword4" placeholder="Notes">
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Qualification</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Qualification">
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Durability</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Durability">
  </div>
  <div class="col-md-12">
    <label for="inputCity" class="form-label">Brand</label>
    <input type="text" class="form-control" id="inputCity" placeholder="Brand">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form><?php }
}
