<?php
/* Smarty version 4.2.1, created on 2022-10-10 20:07:52
  from 'C:\xampp\htdocs\Fragrantica\templates\show_about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63445f78135ac0_19302640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8f8a8e2ed453625f3c379fbd89a070872a6d3fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Fragrantica\\templates\\show_about.tpl',
      1 => 1665425270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63445f78135ac0_19302640 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2>About</h2>
<p>Parrafo del apartado about de la pagina con imagenes e informacion del desarrollador este es un apratado de la pagina publico, es decir accedible por cualquier usuaria aun asi no este logeado.</p>
<p><img style='width: 100px' class='img-thumbnail' src='templates/user_photo.png'> Nombre: ...</p>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
