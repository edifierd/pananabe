<?php /* Smarty version Smarty-3.1.8, created on 2016-11-28 19:15:41
         compiled from "C:\xampp\htdocs\pananabe\modules\administrador\views\prenda\paso3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11347583c64d48980b1-47899564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f39c3ed0c1c4f5112b0aa330e264e407dda5f73d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pananabe\\modules\\administrador\\views\\prenda\\paso3.tpl',
      1 => 1480356866,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11347583c64d48980b1-47899564',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_583c64d48f59e0_12084795',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'producto' => 0,
    'fotoFrente' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583c64d48f59e0_12084795')) {function content_583c64d48f59e0_12084795($_smarty_tpl) {?>
<h2> Cargar Producto - Paso 3 / 4 </h2>

<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
administrador/prenda/paso3" enctype="multipart/form-data">  
	<input type="hidden" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
">
    <input type="hidden" name="descripcion" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['descripcion'];?>
">
    <input type="hidden" name="precio" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['precio'];?>
">
    <input type="hidden" name="s" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['s'];?>
">
    <input type="hidden" name="m" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['m'];?>
">
    <input type="hidden" name="l" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['l'];?>
">
    <input type="hidden" name="xl" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['xl'];?>
">
    <input type="hidden" name="fotoFrente" value="<?php echo $_smarty_tpl->tpl_vars['fotoFrente']->value;?>
">
    
    Foto Perfil:
  	<input id="fbBrowseBtn" type="file" name="imagen"  multiple>
 	<input type="submit" name="Siguiente" value="Siguiente" >
</form>
<?php }} ?>