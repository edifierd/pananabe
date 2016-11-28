<?php /* Smarty version Smarty-3.1.8, created on 2016-11-28 22:22:51
         compiled from "C:\xampp\htdocs\pananabe\modules\administrador\views\prenda\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18890583ca02b20a3d8-40415183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5acf8551c08459932d45d7fd5772deec54438bad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pananabe\\modules\\administrador\\views\\prenda\\index.tpl',
      1 => 1480351768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18890583ca02b20a3d8-40415183',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'campos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_583ca02b2381a4_08866493',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583ca02b2381a4_08866493')) {function content_583ca02b2381a4_08866493($_smarty_tpl) {?><h2> Cargar Producto - Paso 1 / 4 </h2>

<form enctype="multipart/form-data" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
administrador/prenda/paso1">
	Nombre:<br>
	<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese el titulo" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['campos']->value['apellido'])===null||$tmp==='' ? '' : $tmp);?>
" style="border-radius: 0px;">
    Descripcion:<br>
    <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Ingrese la descripcion" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['campos']->value['apellido'])===null||$tmp==='' ? '' : $tmp);?>
" style="border-radius: 0px;">
    Precio:<br>
    <input type="number" class="form-control" name="precio" id="precio" placeholder="Ingrese el precio" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['campos']->value['apellido'])===null||$tmp==='' ? '' : $tmp);?>
" style="border-radius: 0px;">
    S:<br>
    <input type="number" class="form-control" name="s" id="s" placeholder="Stock talle S" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['campos']->value['apellido'])===null||$tmp==='' ? '' : $tmp);?>
" style="border-radius: 0px;">
    M:<br>
    <input type="number" class="form-control" name="m" id="m" placeholder="Stock talle M" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['campos']->value['apellido'])===null||$tmp==='' ? '' : $tmp);?>
" style="border-radius: 0px;">
    L:<br>
    <input type="number" class="form-control" name="l" id="l" placeholder="Stock talle L" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['campos']->value['apellido'])===null||$tmp==='' ? '' : $tmp);?>
" style="border-radius: 0px;">
    XL:<br>
    <input type="number" class="form-control" name="xl" id="xl" placeholder="Stock talle XL" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['campos']->value['apellido'])===null||$tmp==='' ? '' : $tmp);?>
" style="border-radius: 0px;">
    
    <button class="btn btn-primary" id="btnvalidar"><i class="icon-ok icon-white"></i>Siguiente</button>
</form>

<!--
Form demo:
<form enctype="multipart/form-data" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
administrador/index/cargarFoto">
  Foto Frente:
  <input id="fbBrowseBtn" type="file" name="imagen1"  multiple>
  Foto Atras:
  <input id="fbBrowseBtn" type="file" name="imagen2"  multiple>
  Foto Perfil:
  <input id="fbBrowseBtn" type="file" name="imagen3"  multiple>
  <input type="submit" name="Submit" value="upload" >
</form>--><?php }} ?>