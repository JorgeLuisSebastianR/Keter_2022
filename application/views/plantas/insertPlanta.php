<div class="container">
<a class="btn btn-success" href="<?=base_url('index.php/PlantasC/show') ?>">Regresar</a>
	<?php echo validation_errors(); ?>
	<form action="<?=base_url('index.php/PlantasC/insertPlanta') ?>" method="POST">

				<label>Nombre</label>
				<input type="text" class="form-control" name="Nombre">

				<label>Alias</label>
				<input type="text" class="form-control" name="alias">

                <label>Telefono</label>
				<input type="text" class="form-control" name="telefono">

                <label>Domicilio</label>
				<input type="text" class="form-control" name="domicilio">
 

				<input type="submit">
	</form>

</div>