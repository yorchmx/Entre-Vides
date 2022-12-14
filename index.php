<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;600&display=swap" rel="stylesheet">
    <script src="./jquery-3.6.0.min.js" ></script>
    <script class="./materialize/js/materialize.js" ></script>
    <link rel="stylesheet" href="./materialize/css/materialize.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
   <script src="https://kit.fontawesome.com/504bc46ce6.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="style.css">
    <title>Entre Vides</title>
</head>

<body>
   <script>
      function eliminar(){
         var respuesta=confirm("¿Estas seguro que deseas eliminar?");
         return respuesta
      }
   </script>
      <br>
    <h1 class="text-center">Entre Vides</h1>
    <br>
    <?php 
    include "modelo/conexion.php";
    include "controlador/eliminar_empresa.php";
    ?>
    <div class="container-fluid row">
        <form class="col-3" method="POST">
         <h2 class="text-center text-secondary" >Registro de Empresas</h2>
            <?php 
            
            include "controlador/registro_persona.php";  
            ?>
            <br><br>
         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre de la empresa</label>
            <input type="text" class="form-control" name="empresa">
         </div>
         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre del contacto</label>
            <input type="text" class="form-control" name="nombre_contacto">
         </div><div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Fecha de contacto</label>
            <input type="date" class="form-control" name="fecha_contacto">
         </div>
         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Pagado</label>
            <select class="form-select" name="pagado" aria-label="Default select example">
            <option selected></option>
               <option >Anticipo</option>
               <option >Sí</option>
               <option >No</option> 
            </select>
         </div>
         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Método de pago</label>
            <select class="form-select" name="metodo_pago" aria-label="Default select example">
            <option selected></option>
               <option >Por confirmar</option>
               <option >Transferencia</option>
               <option >Tarjeta</option>
               <option >Efectivo</option>
               <option >Cortesía</option>   
            </select>
         </div>
         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Factura</label>
            <select class="form-select" name="factura" aria-label="Default select example">
            <option selected></option>
               <option >Por confirmar</option>
               <option >Sí</option>
               <option >No</option> 
            </select>
         </div>
         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Estatus</label>
            <select class="form-select" name="estatus" aria-label="Default select example">
            <option selected></option>
               <option >Confirmado</option>
               <option >En espera</option>
               <option >Correo enviado</option>
               <option >Sin contactar</option>
               <option >No participa</option>
            </select>
         </div>
         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Agente</label>
            <select class="form-select" name="agente" aria-label="Default select example">
            <option selected></option>
               <option >Balam</option>
               <option >Claudia</option>
               <option >Erick</option>
               <option >Estela</option>  
               <option >Marina</option>  
               <option >Nadia</option>
               <option >Neddy</option>  
               <option >Sergio</option>  
               <option >Sonia</option> 
            </select>
         </div>
            
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok" >Registrar</button>
          </form>
          <br><br>
          <div class="col-8 p-1">
            <table class="table">
                <thead class="bg-info">
                  <tr>
                    <th scope="col" class="columna">id</th>
                    <th scope="col" class="columna">Empresa</th>
                    <th scope="col" class="columna">Nombre de contacto</th>
                    <th scope="col" class="columna">Fecha de contacto</th>
                    <th scope="col" class="columna">Pagado</th>
                    <th scope="col" class="columna">Método de pago</th>
                    <th scope="col" class="columna">Factura</th>
                    <th scope="col" class="columna">Estatus</th>
                    <th scope="col" class="columna">Agente</th>
                    <th scope="col" class="columna">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                    include "modelo/conexion.php";
                    $sql = $conexion->query(" select * from empresas ");
                    while ($datos = $sql->fetch_object()) { ?>
                      <tr>
             
                    <td class="datos"><?= $datos->id ?></td>
                    <td class="datos"><?= $datos->empresa ?></td>
                    <td class="datos"><?= $datos->nombre_contacto ?></td>
                    <td class="datos"><?= $datos->fecha_contacto ?></td>
                    <td class="datos"><?= $datos->pagado ?></td>
                    <td class="datos"><?= $datos->metodo_pago ?></td>
                    <td class="datos"><?= $datos->factura ?></td>
                    <td class="datos"><?= $datos->estatus ?></td>
                    <td class="datos"><?= $datos->agente ?></td>
                    <td>
                        <a href="modificar_empresa.php?id=<?= $datos->id ?>" class="btn btn small-btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a onclick="return eliminar()" href="index.php?id=<?= $datos->id ?>" class="btn btn small-btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                        
                    </td>
                  </tr>
                   <?php }
                    ?>
                 
                </tbody>
              </table>

              <br><br>
              <a href="excel.php" class="btn-small blue  ">Descargar Excel</a>

          </div>
    </div>



<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>