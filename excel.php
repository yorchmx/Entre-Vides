<?php 
header("Content-Type: application/xsl");
header("Content-Disposition: attachment; filename= Entre_Vides.xls");


?>

<table>
          
                  <tr>
                    <th >id</th>
                    <th >Empresa</th>
                    <th >Nombre de contacto</th>
                    <th >Fecha de contacto</th>
                    <th >Pagado</th>
                    <th >Método de pago</th>
                    <th >Factura</th>
                    <th >Estatus</th>
                    <th >Agente</th>
                   
                  </tr>
          
             

                    <?php 
                    include "modelo/conexion.php";
                    $sql="SELECT * FROM empresas";
                    $ejecutar=mysqli_query($conexion, $sql);
                    while ($datos=mysqli_fetch_array($ejecutar)) { 
                      
                    ?>
                    <tr>
             
                    <td><?php echo $datos[0] ?></td>
                    <td><?php echo $datos[1] ?></td>
                    <td><?php echo $datos[2] ?></td>
                    <td><?php echo $datos[3] ?></td>
                    <td><?php echo $datos[4] ?></td>
                    <td><?php echo $datos[5] ?></td>
                    <td><?php echo $datos[6] ?></td>
                    <td><?php echo $datos[7] ?></td>
                    <td><?php echo $datos[8] ?></td>
                    
                        
                    
                  </tr>
                  
                   <?php } ?>
                    
                 
               
              </table>