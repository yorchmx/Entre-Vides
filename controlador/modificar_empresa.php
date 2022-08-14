<?php 

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["empresa"]) and !empty($_POST["nombre_contacto"]) and !empty($_POST["fecha_contacto"]) and !empty($_POST["pagado"]) and !empty($_POST["metodo_pago"]) and !empty($_POST["factura"]) and !empty($_POST["estatus"]) and !empty($_POST["agente"])) {
        $id=$_POST["id"];
        $empresa=$_POST["empresa"];
        $nombre_contacto=$_POST["nombre_contacto"];
        $fecha_contacto=$_POST["fecha_contacto"];
        $pagado=$_POST["pagado"];
        $metodo_pago=$_POST["metodo_pago"];
        $factura=$_POST["factura"];
        $estatus=$_POST["estatus"];
        $agente=$_POST["agente"];
        $sql=$conexion->query("update empresas set empresa='$empresa', nombre_contacto='$nombre_contacto', fecha_contacto='$fecha_contacto', pagado='$pagado', metodo_pago='$metodo_pago', factura='$factura', estatus='$estatus', agente='$agente' where id=$id ");
        if ($sql==1) {
            header("location:index.php");
        } else {
            echo "<div class='alert alert-danger'>Error al modificar empresa</div>";
        }
        
    }else{
        echo "<div class='alert alert-warning'>Campos vacios</div>";
    }
}
