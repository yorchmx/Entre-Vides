<?php 

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["empresa"]) and !empty($_POST["nombre_contacto"]) and !empty($_POST["fecha_contacto"]) and !empty($_POST["pagado"]) and !empty($_POST["metodo_pago"]) and !empty($_POST["factura"]) and !empty($_POST["estatus"])) {
       
       $empresa=$_POST["empresa"];
       $nombre_contacto=$_POST["nombre_contacto"];
       $fecha_contacto=$_POST["fecha_contacto"];
       $pagado=$_POST["pagado"];
       $metodo_pago=$_POST["metodo_pago"];
       $factura=$_POST["factura"];
       $estatus=$_POST["estatus"];

       $sql=$conexion->query(" insert into empresas(empresa,nombre_contacto,fecha_contacto,pagado,metodo_pago,factura,estatus) values('$empresa','$nombre_contacto','$fecha_contacto','$pagado','$metodo_pago','$factura','$estatus') ");
       if ($sql==1) {
        echo '<div class="alert alert-succes">Empresa registrada correctamente</div>';
       } else {
        echo '<div class="alert alert-danger">Error al registrar empresa</div>';
       }
       

    }else{
        echo '<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
    }
}

?>