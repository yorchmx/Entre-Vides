<?php 

    if (!empty($_GET["id"])) {
        $id=$_GET["id"];
        $sql->$conexion->query(" delete from empresas where id=$id ");
        if ($sql==1) {
            echo ''
        }
    }


?>