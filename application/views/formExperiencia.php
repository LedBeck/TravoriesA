<style>
	.file-preview-image {
	    height: auto !important;
	    width: 100% !important;
	}
	.file-caption-name {
    	display: none;
	}
	.file-preview-frame {
	    float: left !important;
	    height: 186px;
	    margin: 5px !important;
	    width: 93px;
	}
	.file-preview-frame {
	    float: left !important;
	    height: 95px;
	    margin: 5px !important;
	    width: 90px;
	}
</style>
<div class="box box-primary col-sm-12">
	<div class="box-header">
		<h3 class="box-title">Nueva Experiencia</h3>
	</div><!-- /.box-header -->
	<!-- form start -->
	<form role="form" enctype="multipart/form-data" id="register">
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
							<option value="<?php echo ucfirst($value) ?>"><?php echo ucfirst($value) ?></option>
						<?php endforeach ?>
					</select>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Seleccione Moneda</label>
					<select name="moneda" data-chosen="1" data-placeholder="Seleccione Moneda" id="" class="form-control">
						<option value=""></option>
						<?php foreach ($moneda as $key => $value): ?>
							<option value="<?php echo ucfirst($value) ?>"><?php echo ucfirst($value) ?></option>
						<?php endforeach ?>
					</select>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Huso horario</label>
					<select name="idioma" data-chosen="1" data-placeholder="Seleccione Huso Horario" id="" class="form-control">
						<option value=""></option>
						<?php foreach ($husosHorarios as $key => $value): ?>
							<option value="<?php echo ucfirst($value) ?>"><?php echo ucfirst($value) ?></option>
						<?php endforeach ?>
					</select>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Dirección</label>
					<input type="text" placeholder="Enter dirección"  name="direccion" class="form-control">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Religión</label>
					<select name="religion" data-chosen="1" data-placeholder="Seleccione Religión" id="" class="form-control" multiple>
						<option value=""></option>
						<?php foreach ($religion as $key => $value): ?>
							<option value="<?php echo ucfirst($value) ?>"><?php echo ucfirst($value) ?></option>
						<?php endforeach ?>
					</select>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Tipo de Viaje</label>
					<input type="text" placeholder="Enter tipo de viaje"  name="tipo" class="form-control">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Compañia de viaje</label>
					<input type="text" data-sugerido placeholder="Enter compañia"  name="compania" class="form-control">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="exampleInputEmail1">Lugares Visitados</label>
					<input type="text" data-sugerido placeholder="Enter visitados"  name="visitados" class="form-control">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Sitios a aconsejar</label>
					<input type="text" data-sugerido placeholder="Enter sitios"  name="sitios" class="form-control">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Platos tipicos</label>
					<input type="text" data-sugerido placeholder="Enter platos"  name="platos" class="form-control">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Animales</label>
					<input type="text" data-sugerido placeholder="Enter animales"  name="animales" class="form-control">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">¿Que llevarse?</label>
					<input type="text" data-sugerido placeholder="Enter que llevar"  name="llevar" class="form-control">
				</div>
				<div class="form-group has-feedback">
					<label for="exampleInputEmail1">Seleccione Imagen principal para la experiencia</label>
					<input type="file" class="form-control" name="fotoPrincipal" placeholder="Seleccione Fotos" required/>
					<div id="errorBlock43" class="help-block"></div>
				</div>
				<div class="form-group has-feedback">
					<label for="exampleInputEmail1">Seleccione fotos para la galeria</label>
					<input type="file" class="form-control" name="foto" placeholder="Seleccione Fotos" multiple required/>
					<div id="errorBlock43" class="help-block"></div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-12">
				<div class="form-group">
					<label for="exampleInputEmail1">Cuentenos su viaje</label>
					<textarea placeholder="Viaje" cols="80" rows="10" name="desViaje" data-editor class="form-control"></textarea>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Consejos</label>
					<textarea placeholder="Consejos" cols="80" rows="10" name="consejos" data-editor class="form-control"></textarea>
				</div>
			</div>
			
		</div><!-- /.box-body -->
		<div class="col-sm-12">
			<div class="box-footer ">
				<button class="btn btn-primary pull-right" type="submit">Guardar</button>
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
	allow_single_deselect: true,
	width:"100%"
});
$('input[name="foto"],[name="fotoPrincipal"]').fileinput({
	showUpload: false,
	browseClass: "btn btn-primary",
	language: 'es',
	allowedFileExtensions: ['jpg', 'png', 'gif'],
    elErrorContainer: "#errorBlock43",
	previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
});
$('[data-editor]').wysihtml5();
$('input[data-sugerido="1"]').tagsinput();
// $.getJSON(base_url+'exp/getCatalogo/religion', function(json, textStatus) {
// 	// $('input[name="religion"]').tags({
//  //        suggestions:,
//  //    });
// 	// $(?)
// 	// $('input[name="religion"]').tagsinput({
// 	// 	typeahead: {
// 	//     	source: ['Amsterdam', 'Washington', 'Sydney', 'Beijing', 'Cairo']
// 	//   	},
//  //  		freeInput: true
// 	// }).typeahead();
// 	// $('input[name="religion"]').tokenfield({
// 	//   typeahead: json
// 	// });
// });

</script>
