<h2> Cargar Datos de la prenda </h2>

<form enctype="multipart/form-data" method="post" action="">

	<div class="well">
		<span id="id_prenda" value="{$id_prenda}"></span>
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
									{foreach from=$categorias item=curr_c}
									<option value="{$curr_c.id}" >{$curr_c.nombre} - {$curr_c.genero}</option>
									{/foreach}
								</select>
							</td>
						</tr>

						<tr>
							<td><h4 style="margin-right:8px;">Nombre:</h4></td>
							<td>
								<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese el titulo" value="{$datos.nombre|default:""}" style="border-radius: 0px;">
							</td>
						</tr>

						<tr>
							<td><h4 style="margin-right:8px;">Temporada:</h4></td>
							<td>
								<input type="number" class="form-control" name="temporada" id="temporada" placeholder="Ingrese la temporada" value="{$datos.temporada|default:""}" style="border-radius: 0px;">
							</td>
						</tr>

						<tr>
							<td><h4 style="margin-right:8px;">Precio:</h4></td>
							<td>
								<input type="number" class="form-control" name="precio" id="precio" placeholder="Ingrese el precio" value="{$datos.precio|default:""}" style="border-radius: 0px;">
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
								<input type="number" class="form-control" name="s" id="s" placeholder="Stock talle S" value="{$datos.s|default:"0"}" style="border-radius: 0px; ">
							</td>
						</tr>

						<tr>
							<td><h4 style="margin-right:8px;">M:</h4></td>
							<td>
								<input type="number" class="form-control" name="m" id="m" placeholder="Stock talle M" value="{$datos.m|default:"0"}" style="border-radius: 0px; ">
							</td>
						</tr>

						<tr>
							<td><h4 style="margin-right:8px;">L:</h4></td>
							<td>
								<input type="number" class="form-control" name="l" id="l" placeholder="Stock talle L" value="{$datos.l|default:"0"}" style="border-radius: 0px; ">
							</td>
						</tr>

						<tr>
							<td><h4 style="margin-right:8px;">XL:</h4></td>
							<td>
								<input type="number" class="form-control" name="xl" id="xl" placeholder="Stock talle XL" value="{$datos.xl|default:"0"}" style="border-radius: 0px;">
							</td>
						</tr>

						<tr>
							<td><h4 style="margin-right:8px;">XXL:</h4></td>
							<td>
								<input type="number" class="form-control" name="xxl" id="xxl" placeholder="Stock talle XXL" value="{$datos.xxl|default:"0"}" style="border-radius: 0px;">
							</td>
						</tr>
					</table>
				</div>

				<div class="col-sm-12" style="padding-top:15px;">
					<h4>Descripcion:</h4>
					<textarea name="descripcion" id="descripcion" style="width:100%; min-height:100px;"/>{$datos.descripcion|default:""}</textarea>
				</div>

				<div class="col-sm-12" style="text-align:center; padding-top:15px;">
					<input type="hidden" name="guardar" value="1">
					<button class="btn btn-primary" id="btnvalidar"><i class="icon-ok icon-white"></i>Guardar</button>
					<a href="{$_layoutParams.root}administrador/prendas" style="margin-left:5%;" class="btn btn-warning">Cancelar</a>
				</div>
			</div>

		</form>

	</div>
