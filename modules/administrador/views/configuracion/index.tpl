<h3>Configuración del sistema</h3>


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
						<input type="text" class="form-control" name="direccion" id="direccion" placeholder="Dirección" value="{$config.direccion}" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Teléfono</label>
						<input type="text" class="form-control" name="telefono" id="telefono" value="{$config.telefono}" placeholder="Teléfono" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Email</label>
						<input type="email" class="form-control" name="email" id="email" value="{$config.email}" placeholder="Email" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">URL Facebook:</label>
						<input type="text" class="form-control" name="dir_facebook" id="dir_facebook" value="{$config.dir_facebook}" placeholder="Facebook" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">URL Instagram:</label>
						<input type="text" class="form-control" name="dir_instagram" id="dir_instagram"  value="{$config.dir_instagram}" placeholder="Instagram" required>
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
						<!--<input id="file-3" name="imagen[]" type="file" accept="image/*" multiple>-->
						<input id="file-3" name="portada_hombre[]" type="file" accept="image/*" class="portada" multiple>
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
				<input id="portada_mujer" name="portada_mujer" type="file" accept="image/*" class="file portada">
			</div>
		</div>

	</div>


</div>
