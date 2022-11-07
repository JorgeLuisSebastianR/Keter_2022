<div class="container">

    <a class="btn btn-success" href="<?=base_url('index.php/ProductosC/insertProducto') ?>">Agregar Producto</a>
<table class="table table-striped table-boedered">
<thead>

    <th>Id</th>
    <th>Nombre</th>
    <th>Descripcion</th>
    <th>Costo</th>
<th>Operaciones</th>


</thead>
<tbody>
   
    <?php  foreach ($productos as $key): ?>
        <tr>
            <td> <?=$key->IdProducto ?> </td>
            <td> <?=$key->Nombre ?> </td>
            <td> <?=$key->Descripcion ?> </td>
            <td> <?=$key->Costo ?> </td>

            <td><a class="btn btn-success" href="<?= base_url ('index.php/ProductosC/detalleProducto/').$key->IdProducto?>">Ver detalle </a> </td>
            <td><a class="btn btn-danger" href="<?= base_url ('index.php/ProductosC/borrarProducto/').$key->IdProducto?>">Borrar </a> </td>
            <td><a class="btn btn-danger" href="<?= base_url ('index.php/ProductosC/updateProducto/').$key->IdProducto?>">Editar </a> </td>
        </tr>
    <?php endforeach ?>
</tbody>

</table>    
</div>