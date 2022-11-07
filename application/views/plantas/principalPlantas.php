<div class="container">

<h4><center>Información de la planta </center></h4>
<a class="btn btn-success" href="<?=base_url('index.php/PlantasC/insertPlanta') ?>">Agregar planta</a>
<table class="table table-striped table-boedered">
<thead>
//no estan todos los atributos 
    <th>Número de planta</th>
    <th>Nombre </th>
    <th>Alias </th>
    <th>Teléfono</th>
    <th>Dirección</th>
<th>Operaciones</th>

</thead>
<tbody>
<?php  foreach ($plantas as $key): ?>

    <tr>
     <td> <?=$key->id_Planta ?> </td>
     <td> <?=$key->planta ?> </td>
     <td> <?=$key->alias ?> </td>
     <td> <?=$key->telefono ?> </td>
     <td> <?=$key->domicilio ?> </td>

     <td><a class="btn btn-success" href="<?= base_url ('index.php/PlantasC/detallePlanta/').$key->id_Planta?>">Administrar</a> </td>
     <td><a class="btn btn-danger" href="<?= base_url ('index.php/PlantasC/updatePlanta/').$key->id_Planta?>">Editar </a> </td>
     <td><a class="btn btn-danger" href="<?= base_url ('index.php/PlantasC/borrarPlanta/').$key->id_Planta?>">Borrar </a> </td>
    </tr>
   

   <?php endforeach ?>
</tbody>

</table>    
</div>