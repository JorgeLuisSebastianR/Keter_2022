<div class="container">

    <a class="btn btn-success" href="<?=base_url('index.php/ProductosC/insertProducto') ?>">Agregar color</a>
<table class="table table-striped table-boedered">
<thead>

    <th>Id</th>
    <th>Nombre</th>
    <th>Descripcion</th>
    <th>Costo</th>
<th>Operaciones</th>


</thead>
<tbody>
   
    <?php  foreach ($color as $key): ?>
        <tr>
            <td> <?=$key->id_Color ?> </td>
            <td> <?=$key->nombreColor ?> </td>
            <td> <?=$key->abreviaturaColor ?> </td>

            <td><a class="btn btn-success" href="<?= base_url ('index.php/ProductosC/detalleProducto/').$key->IdProducto?>">Ver detalle </a> </td>
            <td><a class="btn btn-danger" href="<?= base_url ('index.php/ProductosC/borrarProducto/').$key->IdProducto?>">Borrar </a> </td>
            <td><a class="btn btn-danger" href="<?= base_url ('index.php/ProductosC/updateProducto/').$key->IdProducto?>">Editar </a> </td>
        </tr>
    <?php endforeach ?>
</tbody>

</table>    
</div>