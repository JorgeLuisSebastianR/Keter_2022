<div class="container">
	<?php echo validation_errors(); ?>
	<form action="<?=base_url('index.php/ClientesC/insertCliente') ?>" method="POST">

				<label>Razón social</label>
				<input type="text" class="form-control" name="razonSocial">

				<label>Alias</label>
				<input type="text" class="form-control" name="alias">
			
				
				<label>RFC</label>
				<input type="text" class="form-control" name="rfc">

				<label>Calle</label>
				<input type="text" class="form-control" name="calle">
				
				<label>Colonia</label>
				<input type="text" class="form-control" name="colonia">

				<label>Número exterior</label>
				<input type="text" class="form-control" name="numeroExterior">
				
				
				<label>Número interior</label>
				<input type="text" class="form-control" name="numeroInterior">

				<label>Código postal</label>
				<input type="text" class="form-control" name="codigoPostal">

				<label>Ciudad</label>
				<input type="text" class="form-control" name="ciudad">

				<label>Estado</label>
				<input type="text" class="form-control" name="estado">

				<label>Teléfono</label>
				<input type="text" class="form-control" name="telefono">

				<label>Correo Electronico</label>
				<input type="text" class="form-control" name="correoElectronico">
				
				<label>Dirección alternativa</label>
				<input type="text" class="form-control" name="direccionEnvioAlternativa">

				<input type="submit">
	</form>

</div>