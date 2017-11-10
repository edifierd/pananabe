<h3>Configuración del sistema</h3>


<div class="row">
	<div class="col-sm-6 col-md-6" >
		<div class="panel panel-primary">
			<div class="panel-heading">
				Opciones
			</div>
			<div class="panel-body">
				<form action="" method="post">
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
	<div class="col-sm-6 col-md-6">


		portada_hombre
		portada_mujer
	</div>
</div>
