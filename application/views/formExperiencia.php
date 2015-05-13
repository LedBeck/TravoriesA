<div class="box box-primary col-sm-12">
	<div class="box-header">
		<h3 class="box-title">Nueva Experiencia</h3>
	</div><!-- /.box-header -->
	<!-- form start -->
	<form role="form">
		<div class="box-body col-sm-12">
			<div class="col-sm-6">
				<div class="form-group">
					<label for="exampleInputEmail1">Nombre</label>
					<input type="text" placeholder="Enter Nombre de la Experiencia" name="nombre" class="form-control">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Fecha de la Experiencia</label>
					<input type="text" name="fechaRango" placeholder="Fecha de Experiencia" class="form-control">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Estación del Año</label>
					<select name="estacion" data-chosen="1" data-placeholder="Seleccione Estación" id="" class="form-control">
						<option value=""></option>
						<option value="Primavera">Primavera</option>
						<option value="Verano">Verano</option>
						<option value="Otoño">Otoño</option>
						<option value="Invierno">Invierno</option>
					</select>
					<!-- <input type="text" name="estacion" placeholder="estacion" class="form-control"> -->
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Seleccione Idioma</label>
					<select name="idioma" data-chosen="1" data-placeholder="Seleccione Idioma" id="" class="form-control">
						<option value=""></option>
						<?php foreach ($idiomas as $key => $value): ?>
							<option value="<?php echo $value ?>"><?php echo $value ?></option>
						<?php endforeach ?>
					</select>
					<!-- <input type="text" name="estacion" placeholder="estacion" class="form-control"> -->
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Dirección</label>
					<input type="text" placeholder="Enter dirección"  name="direccion" class="form-control">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" placeholder="Enter email" class="form-control">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" placeholder="Password" id="exampleInputPassword1" class="form-control">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="exampleInputFile">File input</label>
					<input type="file" id="exampleInputFile">
					<p class="help-block">Example block-level help text here.</p>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox"> Check me out
					</label>
				</div>
			</div>
		</div><!-- /.box-body -->
		<div class="col-sm-12">
			<div class="box-footer ">
				<button class="btn btn-primary pull-right" type="submit">Submit</button>
			</div>
		</div>
	</form>
</div>
<script>
$('[name="fechaRango"]').daterangepicker({
	showDropdowns: true,
	format: 'YYYY-MM-DD'
});
$('[data-chosen="1"]').chosen({
	allow_single_deselect: true
});
</script>
