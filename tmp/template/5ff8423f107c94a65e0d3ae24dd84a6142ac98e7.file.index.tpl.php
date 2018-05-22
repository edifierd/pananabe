<?php /* Smarty version Smarty-3.1.8, created on 2018-05-22 00:42:23
         compiled from "C:\xampp\htdocs\pananabe\modules\administrador\views\configuracion\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36515b0346d6ef3c09-87401094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ff8423f107c94a65e0d3ae24dd84a6142ac98e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pananabe\\modules\\administrador\\views\\configuracion\\index.tpl',
      1 => 1526941558,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36515b0346d6ef3c09-87401094',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5b0346d6f1eeb7_37141135',
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0346d6f1eeb7_37141135')) {function content_5b0346d6f1eeb7_37141135($_smarty_tpl) {?><h3>Configuración del sistema</h3>


<div class="row">
	<form enctype="multipart/form-data" action="" method="post">
		<div class="col-sm-4 col-md-4" >
			<div class="panel panel-primary">
				<div class="panel-heading">
					Opciones
				</div>
				<div class="panel-body">
					<input type="hidden" value="1" name="enviar" />
					<div class="form-group">
						<label for="exampleInputEmail1">Dirección Comercial</label>
						<input type="text" class="form-control" name="direccion" id="direccion" placeholder="Dirección" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['direccion'];?>
" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Teléfono</label>
						<input type="text" class="form-control" name="telefono" id="telefono" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['telefono'];?>
" placeholder="Teléfono" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Email</label>
						<input type="email" class="form-control" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['email'];?>
" placeholder="Email" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">URL Facebook:</label>
						<input type="text" class="form-control" name="dir_facebook" id="dir_facebook" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['dir_facebook'];?>
" placeholder="Facebook" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">URL Instagram:</label>
						<input type="text" class="form-control" name="dir_instagram" id="dir_instagram"  value="<?php echo $_smarty_tpl->tpl_vars['config']->value['dir_instagram'];?>
" placeholder="Instagram" required>
					</div>

					<button type="submit" class="btn btn-default">Guardar</button>
				</form>
			</div>
		</div>
	</div>
	<div class="col-sm-4 col-md-4">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Foto de portada hombre
			</div>
			<div class="panel-body">
				<form enctype="multipart/form-data" method="post" action="">
					<div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;">
						<input id="portada_hombre" name="imagen[]" type="file" accept="image/*">
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-sm-4 col-md-4">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Foto de portada mujer
			</div>
			<div class="panel-body">
				<input id="portada_mujer" name="imagen[]" type="file" accept="image/*">
			</div>
		</div>
	</div>

	<div class="col-sm-12 col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Fotos Slider
			</div>
			<div class="panel-body">
				<input id="slider" name="imagen[]" type="file" accept="image/*" multiple>
			</div>
		</div>
	</div>


</div>
<?php }} ?>