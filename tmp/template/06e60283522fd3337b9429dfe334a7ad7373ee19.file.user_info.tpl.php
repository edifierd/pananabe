<?php /* Smarty version Smarty-3.1.8, created on 2016-11-29 18:33:43
         compiled from "C:\xampp\htdocs\pananabe\views\compra\user_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19024583dbbf7201f98-35950061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06e60283522fd3337b9429dfe334a7ad7373ee19' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pananabe\\views\\compra\\user_info.tpl',
      1 => 1480373680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19024583dbbf7201f98-35950061',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
    'talle' => 0,
    'cantidad' => 0,
    'total' => 0,
    'email' => 0,
    'campos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_583dbbf72b0730_53276114',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583dbbf72b0730_53276114')) {function content_583dbbf72b0730_53276114($_smarty_tpl) {?>
<h1>Estas por comprar: </h1>

<div class="row" style="border: double #000000; margin:15px; padding:10px; font-size:18px;">
	<div class=" col-sm-12 col-md-2">
    	<img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/prendas/thumb/thumb_<?php echo $_smarty_tpl->tpl_vars['datos']->value['foto_frente'];?>
" class="img-responsive"
        		style="max-height:150px; margin-right:auto; margin-left:auto;">
    </div>
    <div class="col-sm-12 col-md-10">
    	<h2><?php echo $_smarty_tpl->tpl_vars['datos']->value['nombre'];?>
, talle <?php echo $_smarty_tpl->tpl_vars['talle']->value;?>
</h2>
        <p><?php echo $_smarty_tpl->tpl_vars['datos']->value['descripcion'];?>
</p><br />
        <p style="font-family:Arial"><b><?php echo $_smarty_tpl->tpl_vars['cantidad']->value;?>
 x $<?php echo $_smarty_tpl->tpl_vars['datos']->value['precio'];?>
 = $<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</b></p>
    </div>
</div>

<h3>Es su primera vez por aqui. Complete el resto de sus datos:</h3> <br />


<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
compra/registrarUsuario" enctype="multipart/form-data">  
	<input type="hidden" name="idProducto" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
">
    <input type="hidden" name="talle" value="<?php echo $_smarty_tpl->tpl_vars['talle']->value;?>
">
    <input type="hidden" name="cantidad" value="<?php echo $_smarty_tpl->tpl_vars['cantidad']->value;?>
">
    <input type="hidden" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
">
    
    <div class="row">
    	<div class="col-xs-12 col-sm-12 col-md-7">
    		<div class="form-group">
			<label class="control-label" for="nombre" >Correo</label><br />
			<input type="email" class="form-control" name="correo" id="correo" placeholder="Ingrese su correo" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" disabled="disabled"
    		style="border-radius: 0px;" >
    		</div>
   		</div>
    </div>
    
    <div class="row">
    	<div class="col-xs-12 col-sm-12 col-md-7">
    		<div class="form-group ">
    		<label class="control-label" for="nombre" >*Nombre</label><br />
    		<input type="text" class="form-control" name="name" id="name" placeholder="Ingrese su nombre" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['campos']->value['name'])===null||$tmp==='' ? '' : $tmp);?>
" 
    		style="border-radius: 0px;">
    		<span class="help-block"></span>
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-xs-12 col-sm-12 col-md-7">
    		<div class="form-group">
    		<label class="control-label" for="nombre" >*Apellido</label><br />
    		<input type="text" class="form-control" name="surname" id="surname" placeholder="Ingrese su apellido" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['campos']->value['surname'])===null||$tmp==='' ? '' : $tmp);?>
" 
   			style="border-radius: 0px;">
    		<span class="help-block"></span>
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-xs-12 col-sm-12 col-md-7">
    		<div class="form-group">
    		<label class="control-label" for="nombre" >*Documento</label><br />
    		<input type="text" class="form-control" name="document_number" id="document_number" placeholder="Ingrese su documento" 
    		value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['campos']->value['document_number'])===null||$tmp==='' ? '' : $tmp);?>
" style="border-radius: 0px;">
    		<span class="help-block"></span>
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-xs-5 col-sm-5 col-md-2">
    		<div class="form-group">
    		<label class="control-label" for="nombre" >*Codigo de Área</label><br />
    		<input type="text" class="form-control" name="area_phone_code" id="area_phone_code" placeholder="Cód. Área" 
    		value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['campos']->value['area_phone_code'])===null||$tmp==='' ? '' : $tmp);?>
" style="border-radius: 0px;">
    		<span class="help-block"></span>
    		</div>
    	</div>
        <div class="col-xs-7 col-sm-7 col-md-5">
    		<div class="form-group">
    		<label class="control-label" for="nombre" >*Teléfono</label><br />
    		<input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="Ingrese su teléfono" 
            value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['campos']->value['phone_number'])===null||$tmp==='' ? '' : $tmp);?>
" style="border-radius: 0px;">
    		<span class="help-block"></span>
    		</div>
    	</div>
    </div>
        
    <div class="row">
    	
    </div>
            
    <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center; margin-top:17px; margin-bottom:35px;">
    	<button class="btn btn-primary" id="btnvalidar" style="color:#FFF; width:25%; padding:10px;"><b>Siguiente</b></button>
    </div>
</form>
<?php }} ?>