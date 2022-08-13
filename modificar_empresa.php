<?php 
include "modelo/conexion.php";
$id=$_GET["id"];

$sql=$conexion->query("select * from empresas where id=$id");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Entre Vides</title>
</head>
<body>
<form class="col-3 m-auto" method="POST">
         <h2 class="text-center text-secondary" >Modificar Empresa</h2>
         <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
            <?php 
            include "controlador/modificar_empresa.php";
            while($datos=$sql->fetch_object()){ ?>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre de la empresa</label>
            <input type="text" class="form-control" name="empresa" value="<?= $datos->empresa ?>">
         </div><div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre del contacto</label>
            <input type="text" class="form-control" name="nombre_contacto" value="<?= $datos->nombre_contacto ?>">
         </div><div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Fecha de contacto</label>
            <input type="date" class="form-control" name="fecha_contacto" value="<?= $datos->fecha_contacto ?>">
         </div><div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Pagado</label>
            <input type="text" class="form-control" name="pagado" value="<?= $datos->pagado ?>" >
         </div><div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Metodo de pago</label>
            <input type="text" class="form-control" name="metodo_pago" value="<?= $datos->metodo_pago ?>" >
         </div>
         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Factura</label>
            <input type="text" class="form-control" name="factura" value="<?= $datos->factura ?>">
         </div>
         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Estatus</label>
            <input type="text" class="form-control" name="estatus" value="<?= $datos->estatus ?>">
         </div>

            <?php }
            ?>         
            
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok" >Modificar empresa</button>
          </form>
</body>
</html>