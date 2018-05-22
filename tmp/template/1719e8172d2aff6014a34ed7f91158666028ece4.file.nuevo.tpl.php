<?php /* Smarty version Smarty-3.1.8, created on 2018-05-22 00:42:19
         compiled from "C:\xampp\htdocs\pananabe\modules\administrador\views\prendas\nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:233985b03453b63e933-41683793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1719e8172d2aff6014a34ed7f91158666028ece4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pananabe\\modules\\administrador\\views\\prendas\\nuevo.tpl',
      1 => 1526941640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '233985b03453b63e933-41683793',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5b03453b6c5947_27428207',
  'variables' => 
  array (
    'id_prenda' => 0,
    'categorias' => 0,
    'curr_c' => 0,
    'datos' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b03453b6c5947_27428207')) {function content_5b03453b6c5947_27428207($_smarty_tpl) {?><h2> Cargar Datos de la prenda </h2>

<form enctype="multipart/form-data" method="post" action="">

	<div class="well">
		<span id="id_prenda" value="<?php echo $_smarty_tpl->tpl_vars['id_prenda']->value;?>
"></span>
		<div class="row" style=" border-bottom: 1px solid #CCC; padding-bottom:5px;">
			<form enctype="multipart/form-data" method="post" action="">
				<div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;">
					<input id="file-3" name="imagen[]" type="file" accept="image/*" multiple>
				</div>
			</form>
		</div>

		<form enctype="multipart/form-data" method="post" action="">
			<div class="row">
				<div class="col-sm-6">
					<h3><u>Información</u></h3>
					<table style="margin-left:8%;">
						<tr>
							<td><h4 style="margin-right:8px;">Categorias:</h4></td>
							<td>
								<select id="categorias[]" name="categorias[]" class="selectpicker" title="Seleccione multiples categorias..." multiple>
									<?php  $_smarty_tpl->tpl_vars['curr_c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['curr_c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['curr_c']->key => $_smarty_tpl->tpl_vars['curr_c']->value){
$_smarty_tpl->tpl_vars['curr_c']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['curr_c']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['curr_c']->value['nombre'];?>
 - <?php echo $_smarty_tpl->tpl_vars['curr_c']->value['genero'];?>
</option>
									<?php } ?>
								</select>
							</td>
						</tr>

						<tr>
							<td><h4 style="margin-right:8px;">Nombre:</h4></td>
							<td>
								<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese el titulo" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
" style="border-radius: 0px;">
							</td>
						</tr>

						<tr>
							<td><h4 style="margin-right:8px;">Temporada:</h4></td>
							<td>
								<input type="number" class="form-control" name="temporada" id="temporada" placeholder="Ingrese la temporada" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['temporada'])===null||$tmp==='' ? '' : $tmp);?>
" style="border-radius: 0px;">
							</td>
						</tr>

						<tr>
							<td><h4 style="margin-right:8px;">Precio:</h4></td>
							<td>
								<input type="number" class="form-control" name="precio" id="precio" placeholder="Ingrese el precio" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['precio'])===null||$tmp==='' ? '' : $tmp);?>
" style="border-radius: 0px;">
							</td>
						</tr>
					</table>
				</div>

				<div class="col-sm-6">
					<h3><u>Stock de talles</u></h3>
					<table style="margin-left:8%;">
						<tr>
							<td><h4 style="margin-right:8px;">S:</h4></td>
							<td>
								<input type="number" class="form-control" name="s" id="s" placeholder="Stock talle S" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['s'])===null||$tmp==='' ? "0" : $tmp);?>
" style="border-radius: 0px; ">
							</td>
						</tr>

						<tr>
							<td><h4 style="margin-right:8px;">M:</h4></td>
							<td>
								<input type="number" class="form-control" name="m" id="m" placeholder="Stock talle M" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['m'])===null||$tmp==='' ? "0" : $tmp);?>
" style="border-radius: 0px; ">
							</td>
						</tr>

						<tr>
							<td><h4 style="margin-right:8px;">L:</h4></td>
							<td>
								<input type="number" class="form-control" name="l" id="l" placeholder="Stock talle L" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['l'])===null||$tmp==='' ? "0" : $tmp);?>
" style="border-radius: 0px; ">
							</td>
						</tr>

						<tr>
							<td><h4 style="margin-right:8px;">XL:</h4></td>
							<td>
								<input type="number" class="form-control" name="xl" id="xl" placeholder="Stock talle XL" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['xl'])===null||$tmp==='' ? "0" : $tmp);?>
" style="border-radius: 0px;">
							</td>
						</tr>

						<tr>
							<td><h4 style="margin-right:8px;">XXL:</h4></td>
							<td>
								<input type="number" class="form-control" name="xxl" id="xxl" placeholder="Stock talle XXL" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['xxl'])===null||$tmp==='' ? "0" : $tmp);?>
" style="border-radius: 0px;">
							</td>
						</tr>
					</table>
				</div>

				<div class="col-sm-12" style="padding-top:15px;">
					<h4>Descripcion:</h4>
					<textarea name="descripcion" id="descripcion" style="width:100%; min-height:100px;"/><?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['descripcion'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
				</div>

				<div class="col-sm-12" style="text-align:center; padding-top:15px;">
					<input type="hidden" name="guardar" value="1">
					<button class="btn btn-primary" id="btnvalidar"><i class="icon-ok icon-white"></i>Guardar</button>
					<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
administrador/prendas" style="margin-left:5%;" class="btn btn-warning">Cancelar</a>
				</div>
			</div>

		</form>

	</div>
<?php }} ?>