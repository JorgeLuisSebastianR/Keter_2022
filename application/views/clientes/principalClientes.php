<div class="container">
<a class="btn btn-success" href="<?=base_url('index.php/ClientesC/insertCliente') ?>">Regresar</a><br><br>
<a class="btn btn-success" href="<?=base_url('index.php/ClientesC/insertCliente') ?>">Agregar Cliente</a>
<table class="table table-striped table-boedered">
<thead>

    <th>Id</th>
    <th>RFC</th>
    <th>Razon social</th>
    <th>Telefono</th>
    <th>Correo Electronico</th>
<th>Operaciones</th>

</thead>
<tbody>
   
    <?php  foreach ($clientes as $key): ?>
        <tr>
            <td> <?=$key->id_Cliente ?> </td>
            <td> <?=$key->rfc?> </td>
            <td> <?=$key->razonSocial	 ?> </td>
            <td> <?=$key->telefono ?> </td>
            <td> <?=$key->correoElectronico ?> </td>

            <td><a class="btn btn-success" href="<?= base_url ('index.php/ClientesC/detalleCliente/').$key->id_Cliente?>">Ver detalle </a> </td>
            <td><a class="btn btn-danger" href="<?= base_url ('index.php/ClientesC/borrarCliente/').$key->id_Cliente?>">Borrar </a> </td>
            <td><a class="btn btn-danger" href="<?= base_url ('index.php/ClientesC/updateCliente/').$key->id_Cliente?>">Editar </a> </td>
        </tr>
    <?php endforeach ?>
</tbody>

</table>    
</div>