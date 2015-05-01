<!DOCTYPE html>
<!--			Etiqueta <datalist><option></option></datalist>      Una lista de Selecciones

                                                <select required></select>  //obliga a que este campo sea diligenciado

-->



<html>
    <head>
        <title>Pon tu Logo</title>
        
<?php
            include_once 'Recursos/FuncionEntorno_encabezado.php';
            include_once 'Recursos/FuncionEntorno_pie.php';
            
            generar_encabezado();
            
            ?>
            
                <form action="configuracion.php" method="post" enctype="multipart/form-data">

                <table>
                            <caption>Configuracion Logotipo</caption>
                            <tr>
                                <td>
                                <center>
                                <span>
                                    <input type="file" name="foto"/>
									
                                </span>
                                </center>
                                </td>
                            </tr>
							

                                
                                <tr>
                                    <td>
                                <center>
                                    <div style="max-width: 250px;max-height: 200px;">
                                   <center>
								   <div>
								   <?php

copy($_FILES['foto']['tmp_name'],$_FILES['foto']['name']);
$nombre=$_FILES['foto']['name'];
echo "<center><img src=\"$nombre\" style=\"width:300px;height:200px;\"></center><br>";
/*echo$_FILES['foto']['name'];
echo$_FILES['foto']['type'];*/

?>
								   </div>
								   </center>
                                    </div>
                                </center>
                                
                        </td>
                        </tr>
                        
                        <tr>
                            <td>
                                
                       
                            
                        </td>
                        </tr>
                        
                        <tr> 
                            <td>
                        <center>
                            <input type="submit" name="ponerlogo" value="Aceptar" class="boton"/>
                           
                        </center>
                </td>
                </tr>


</table>
                
</form>
            
    <?php
    
    
generar_pie();