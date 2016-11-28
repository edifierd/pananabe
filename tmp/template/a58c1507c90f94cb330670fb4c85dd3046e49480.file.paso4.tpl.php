<?php /* Smarty version Smarty-3.1.8, created on 2016-11-28 22:23:34
         compiled from "C:\xampp\htdocs\pananabe\modules\administrador\views\prenda\paso4.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3879583ca056ee0db1-72210629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a58c1507c90f94cb330670fb4c85dd3046e49480' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pananabe\\modules\\administrador\\views\\prenda\\paso4.tpl',
      1 => 1480356774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3879583ca056ee0db1-72210629',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'producto' => 0,
    'fotoPerfil' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_583ca056f30960_28941294',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583ca056f30960_28941294')) {function content_583ca056f30960_28941294($_smarty_tpl) {?><h2> Cargar Producto - Paso 4 / 4 </h2>

<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
administrador/prenda/paso4" enctype="multipart/form-data">  
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
    <input type="hidden" name="fotoFrente" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['fotoFrente'];?>
">
    <input type="hidden" name="fotoPerfil" value="<?php echo $_smarty_tpl->tpl_vars['fotoPerfil']->value;?>
">
    
    Foto Atras:
  	<input id="fbBrowseBtn" type="file" name="imagen"  multiple>
 	<input type="submit" name="Finalizar" value="Finalizar" >
</form><?php }} ?>