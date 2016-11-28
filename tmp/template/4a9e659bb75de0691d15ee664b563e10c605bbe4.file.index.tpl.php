<?php /* Smarty version Smarty-3.1.8, created on 2016-11-28 17:01:29
         compiled from "C:\xampp\htdocs\pananabe\views\contacto\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29162583c54aa1bd2e4-27260200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a9e659bb75de0691d15ee664b563e10c605bbe4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pananabe\\views\\contacto\\index.tpl',
      1 => 1480348886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29162583c54aa1bd2e4-27260200',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_583c54aa229553_80606044',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'campos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583c54aa229553_80606044')) {function content_583c54aa229553_80606044($_smarty_tpl) {?>
<div class="row">
	<div class="col-xs-12" style="text-align:center;">
		<h2><b>CONTACTO</b></h2>
    </div>
</div>

<div class="row panel panel-default" style="margin-bottom: 60px; border:none;">
	<div class="panel-body" style="background-color: #FFF; color: #000;">
    
    	<div class=" col-xs-12 col-sm-12 col-md-7" style="margin-bottom:40px;">
        	<div class="row" style="font-weight: bold; font-size:19px;">
            	<u>Datos de contacto:</u> <br /><br />
            	<div class="col-md-6" title="Datos Contacto">
                	<i class="fa fa-map-marker fa-1x" style="margin:3px;" title="Brandsen, Buenos Aires, Argentina"></i> Brandsen, Buenos Aires, Argentina <br />
           			<i class="fa fa-mobile fa-2x" style="margin:3px;" ></i> +54 221 15 5980127<br />
            		<i class="fa fa-envelope fa-1x" style="margin:3px;" title="correo: info@pananabe.com.ar"></i> info@pananabe.com.ar<br />  
                </div>
                <div class="col-md-6">
                	<a href="https://www.instagram.com/pananabeok/" target="_blank" title="Seguinos en Instagram" >
                    	<i class="fa fa fa-instagram fa-1x" style="margin:3px;" ></i> Seguinos en Instagram 
                    </a>  <br />
                    <a href="https://www.facebook.com/pananabeok" target="_blank" title="Seguinos en Facebook">
                    	<i class="fa fa-facebook fa-1x" style="margin:3px;" ></i> Seguinos en Facebook 
                    </a>
                </div>
            </div>
        </div>
        
		<div class="col-xs-12 col-sm-12 col-md-5" style="font-size:16px;">
        	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
contacto/enviar" enctype="multipart/form-data">  
            
            <div class="form-group">
				<label class="control-label" for="nombre" >*Apellido</label><br />
                <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingrese su apellido" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['campos']->value['apellido'])===null||$tmp==='' ? '' : $tmp);?>
" style="border-radius: 0px;">
                <span class="help-block"></span>
			</div>
            
            <div class="form-group">
  				<label class="control-label" for="nombre">*Nombre</label><br />
  				<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su nombre" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['campos']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
" style="border-radius: 0px;">
                <span class="help-block"></span>
			</div>
            
            <div class="form-group">
  				<label class="control-label" for="nombre">*Localidad</label><br />
  				<input type="text" class="form-control" name="localidad" id="localidad" placeholder="Ingrese su localidad" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['campos']->value['localidad'])===null||$tmp==='' ? '' : $tmp);?>
" style="border-radius: 0px;">
                <span class="help-block"></span>
			</div>
            
            <div class="form-group">
            	<label class="control-label" for="nombre">*Correo</label><br />
                <input type="email" class="form-control" name="correo" id="correo" placeholder="Ingrese su correo" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['campos']->value['correo'])===null||$tmp==='' ? '' : $tmp);?>
" style="border-radius: 0px;">
                <span class="help-block"></span>
			</div>   
            
            <div class="form-group">
  				<label class="control-label" for="nombre">Teléfono</label><br />
                <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Ingrese su teléfono" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['campos']->value['telefono'])===null||$tmp==='' ? '' : $tmp);?>
" style="border-radius: 0px;">
                <span class="help-block"></span>
			</div>
            
            <div class="form-group">
  				<label class="control-label" for="nombre">Consulta</label><br />
                <textarea class="form-control"  name="consulta" style="resize:none;" style="border-radius: 0px;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['campos']->value['consulta'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                <span class="help-block"></span>
		 	</div>
		
        	<div class="col-xs-2" style="color:red; font-size:12px; padding:7px;"> * Campos obligatorios </div>
        	<div class="col-xs-10">
         		<div class="form-group" style="text-align:center">
                	<button class="btn btn-primary" id="btnvalidar"><i class="icon-ok icon-white"></i>ENVIAR</button>
        	 	</div>
             
        	</div>
        	</form>
        </div>
	</div> 
</div>

<?php }} ?>