<?php /* Smarty version Smarty-3.1.8, created on 2016-11-26 21:42:54
         compiled from "C:\xampp\htdocs\pananabe\views\compra\user_email.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138415839f3ce0d9071-56520843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e69afca05e3b9a5023aab506cea8e39500cf509' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pananabe\\views\\compra\\user_email.tpl',
      1 => 1477622066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138415839f3ce0d9071-56520843',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
    'campos' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5839f3ce175f66_79852720',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5839f3ce175f66_79852720')) {function content_5839f3ce175f66_79852720($_smarty_tpl) {?>
<h1>Estas por comprar: </h1>

<div class="row" style="border: double #000000; margin:15px; padding:10px; font-size:18px;">
	<div class=" col-sm-12 col-md-2">
    	<img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/prendas/<?php echo $_smarty_tpl->tpl_vars['datos']->value['foto_frente'];?>
.jpg" class="img-responsive"
        		style="max-height:150px; margin-right:auto; margin-left:auto;">
    </div>
    <div class="col-sm-12 col-md-10">
    	<h2><?php echo $_smarty_tpl->tpl_vars['datos']->value['nombre'];?>
, talle <?php echo $_smarty_tpl->tpl_vars['campos']->value['talle'];?>
</h2>
        <p><?php echo $_smarty_tpl->tpl_vars['datos']->value['descripcion'];?>
</p><br />
        <p style="font-family:Arial"><b><?php echo $_smarty_tpl->tpl_vars['campos']->value['cantidad'];?>
 x $<?php echo $_smarty_tpl->tpl_vars['datos']->value['precio'];?>
 = $<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</b></p>
    </div>
</div>

<h2>Ingrese su correo para continuar: </h2>

<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
compra/user_email/<?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
" enctype="multipart/form-data">  
	<input type="hidden" name="idProducto" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
">
    <input type="hidden" name="talle" value="<?php echo $_smarty_tpl->tpl_vars['campos']->value['talle'];?>
">
    <input type="hidden" name="cantidad" value="<?php echo $_smarty_tpl->tpl_vars['campos']->value['cantidad'];?>
">
    <div class="row">
    	<div class="col-xs-12 col-sm-12 col-md-6">
        <div class="form-group">
		<input type="email" class="form-control" name="correo" id="correo" placeholder="Ingrese su correo" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['campos']->value['correo'])===null||$tmp==='' ? '' : $tmp);?>
" >
        <span class="help-block"></span>
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center; margin-top:17px;">
    		<button class="btn btn-primary" id="btnvalidar" style="color:#FFF; width:25%;"><b>Siguiente</b></button>
        </div>
    </div>
</form><?php }} ?>