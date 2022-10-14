<?php
  require_once("controllers/estudiante_controllers.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parcial 1</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>

<div class="container-fluid">
  <table class="table">
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Calificación</th>
      <th>Nota</th>
      <th>Ver</th>
    </tr>
    
    <?php 
    $i = 1;
    foreach (estudiante_controllers::verData() as $data){
    ?>
    <tr class="text-<?php echo $data->getColor()?>">
      <td><?php echo $data->getId()?></td>
      <td><?php echo $data->getNombre()?></td>
      <td><?php echo $data->getApellido()?></td>
      <td><?php echo $data->getCalificacion()?></td>
      <td><?php echo $data->getNota()?></td>
      <td>
        
        <button type="button" class="btn btn-<?php echo $data->getColor()?>" data-toggle="modal" data-target="#verDatos<?php echo $i?>">
        <i class="bi bi-credit-card-2-front"></i> Ver Datos
        </button>

        <div class="modal fade" id="verDatos<?php echo $i?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Datos del Estudiante</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <?php echo $data->getNombre()." ".$data->getApellido()." obtuvo la siguiente calificación: ".$data->getNota()?>
              </div>
               
            </div>
          </div>
        </div>
        
      </td>
    </tr>
  <?php 
  $i++;
  }?>
  </table>
</div>

</body>
</html>