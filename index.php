<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/504bc46ce6.js" crossorigin="anonymous"></script>
    <title>Entra Vides</title>
</head>
<body>
    <h1 class="text-center">Entre Vides</h1>
    <div class="container-fluid row">
        <form class="col-3">
            <h2 class="text-center text-secondary" >Registro de Empresas Entre Vides</h2>
         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre de la empresa</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
         </div><div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre del contacto</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
         </div><div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Fecha de contacto</label>
            <input type="date" class="form-control" id="name" aria-describedby="emailHelp">
         </div><div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Pagado</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
         </div><div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Metodo de pago</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
         </div>
         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Factura</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
         </div>
         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Estatus</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
         </div>
            
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok" >Registrar</button>
          </form>
          <div class="col-9 p-4">
            <table class="table">
                <thead class="bg-info">
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">Nomre de contacto</th>
                    <th scope="col">Fecha de contacto</th>
                    <th scope="col">Pagado</th>
                    <th scope="col">Metodo de pago</th>
                    <th scope="col">Factura</th>
                    <th scope="col">Estatus</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                    include "modelo/conexion.php";
                    $sql = $conexion->query(" select * from empresas ");
                    while ($datos = $sql->fetch_object()) { ?>
                      <tr>
             
                    <td><?= $datos->id ?></td>
                    <td><?= $datos->empresa ?></td>
                    <td><?= $datos->nombre_contacto ?></td>
                    <td><?= $datos->fecha_contacto ?></td>
                    <td><?= $datos->pagado ?></td>
                    <td><?= $datos->metodo_pago ?></td>
                    <td><?= $datos->factura ?></td>
                    <td><?= $datos->estatus ?></td>
                    <td>
                        <a href="" class="btn btn small-btn btn-warning" ><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="" class="btn btn small-btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                        
                    </td>
                  </tr>
                   <?php }
                    ?>
                 
                </tbody>
              </table>

          </div>
    </div>



<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>