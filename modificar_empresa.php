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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
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
         </div>
         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre del contacto</label>
            <input type="text" class="form-control" name="nombre_contacto" value="<?= $datos->nombre_contacto ?>">
         </div><div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Fecha de contacto</label>
            <input type="date" class="form-control" name="fecha_contacto" value="<?= $datos->fecha_contacto ?>">
         </div>
         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Pagado</label>
            <select class="form-select" name="pagado" aria-label="Default select example">
               <option ><?= $datos->pagado ?></option>
               <option >Sí</option>
               <option >No</option>
            </select>
         </div>
         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Método de pago</label>
            <select class="form-select" name="metodo_pago" aria-label="Default select example">
            <option ><?= $datos->metodo_pago ?></option>
               <option >Transferencia</option>
               <option >Cheque</option>
               <option >Efectivo</option>
               <option >Especie</option>
            </select>
         </div>
         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Factura</label>
            <select class="form-select" name="factura" aria-label="Default select example">
            <option ><?= $datos->factura ?></option>
               <option >Sí</option>
               <option >No</option>
            </select>
         </div>
         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Estatus</label>
            <select class="form-select" name="estatus" aria-label="Default select example">
            <option ><?= $datos->estatus ?></option>
               <option >Confirmado</option>
               <option >Pendiente</option>
               <option >No acepta</option>
            </select>
         </div>
         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Agente</label>
            <select class="form-select" name="agente" aria-label="Default select example">
            <option ><?= $datos->agente ?></option>
               <option >Nadia</option>
               <option >Estela</option>
               <option >Aldo</option>
               <option >Erick</option>  
               <option >Neddy</option>  
               <option >Sonia</option>  
               <option >Balam</option>  
               <option >Claudia</option> 
            </select>
         </div>

            <?php }
            ?>         
            
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok" >Modificar empresa</button>
          </form>
</body>
</html>