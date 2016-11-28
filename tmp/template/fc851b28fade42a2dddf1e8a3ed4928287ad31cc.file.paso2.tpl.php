<?php /* Smarty version Smarty-3.1.8, created on 2016-11-28 22:23:03
         compiled from "C:\xampp\htdocs\pananabe\modules\administrador\views\prenda\paso2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16581583ca037578663-86888334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc851b28fade42a2dddf1e8a3ed4928287ad31cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pananabe\\modules\\administrador\\views\\prenda\\paso2.tpl',
      1 => 1480353056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16581583ca037578663-86888334',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'producto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_583ca0375d14e2_34771856',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583ca0375d14e2_34771856')) {function content_583ca0375d14e2_34771856($_smarty_tpl) {?>
<h2> Cargar Producto - Paso 2 / 4 </h2>

<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
administrador/prenda/paso2" enctype="multipart/form-data">  
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
    
    Foto Frente:
  	<input id="fbBrowseBtn" type="file" name="imagen"  multiple>
 	<input type="submit" name="Siguiente" value="Siguiente" >
</form><?php }} ?>