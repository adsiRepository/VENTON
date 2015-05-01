<!DOCTYPE html>
<!--			Etiqueta <datalist><option></option></datalist>      Una lista de Selecciones

                                                <select required></select>  //obliga a que este campo sea diligenciado

-->

<?php session_start(); ?>

<html>
    <head>
        <title>Configuracion</title>
        
<?php
            include_once 'Recursos/FuncionEntorno_encabezado_admin.php';
            include_once 'Recursos/FuncionEntorno_pie.php';
            
            generar_encabezado();
            
            ?>

    <form action="FormConfiguracion.php" method="post" enctype="multipart/form-data">

                <table>
                            <caption>Configuracion Logotipo</caption>
                            <tr>
                                <td>
                                <center>
                                <span>
                                    <input type="file" name="logo"/>
                                </span>
                                </center>
                                </td>
                            </tr>
                                
                                <tr>
                                    <td>
                                <!--<center>-->
                                    <div>
                                        <?php
                                        
                                          
                                       // NEW ALTER BY MIGUEL AT 16 SEP 2014    //  
                                      
                                       /*Que es lo que recibe la funcion $_FILES:

                        $_FILES['imagen_subida']['name']; //este es el nombre del archivo que acabas de subir
                        $_FILES['imagen_subida']['type']; //este es el tipo de archivo que acabas de subir
                        $_FILES['imagen_subida']['tmp_name'];//este es donde esta almacenado el archivo que acabas de subir.
                        $_FILES['imagen_subida']['size']; //este es el tamaño en bytes que tiene el archivo que acabas de subir.
                        $_FILES['imagen_subida']['error']; //este almacena el codigo de error que resultaría en la subida.                                              */
                                      
                                        if($_REQUEST['action']=='Aceptar'){
                                            //copy($_FILES['logo']['tmp_name'],$_FILES['logo']['name']);
                                            
                                            $nombre=$_FILES['logo']['name'];                                        
                                            $formats=array("image/jpg","image/jpeg","image/gif","image/x-icon","image/png");
                                            $long=13631488;//total peso de imagen en bytes permitido en la subida
                                            
                                            
                                            if(in_array($_FILES['logo']['type'],$formats) && $_FILES['logo']['size']<=$long){
                                                $almacen="Imagenes/".$_FILES['logo']['name'];
                                                if(!file_exists($almacen)){
                                                    $moving_to_almacen=@move_uploaded_file($_FILES['logo']['tmp_name'],$almacen);
                                                    if($moving_to_almacen){
                                                        echo "<script>alert('tu imagen se ha guardado en la carpeta de almacenamiento')</script>";
                                                    }else{
                                                        echo "<script>alert('tu imagen no se ha podido guardar en la carpeta de almacenamiento')</script>";
                                                    }
                                                }else{
                                                    $almacen="Imagenes/".$_FILES['logo']['name']."(2)";
                                                    $moving_to_almacen=@move_uploaded_file($_FILES['logo']['tmp_name'],$almacen);
                                                    if($moving_to_almacen){
                                                        echo "<script>alert('el nombre de tu imagen ya existia, se le ha añadido (2) al final para diferenciarla')</script>";
                                                    }else{
                                                        echo "<script>alert('tu imagen no se ha podido guardar en la carpeta de almacenamiento')</script>";
                                                    }
                                                }
                                            }else{
                                                echo "<script>alert('verifica que tu imagen sea .jpg, .jpeg, .ico, .png, .gif"
                                                . "y el tamaño no exceda 13 MB\n')</script>";
                                            }
                                            
                                       //   ********************************    //             
                                             
                                            
                                            
                                            echo "
                                                <center>
                                                <div id='logo' style='width:300px;height:200px;display:inline-block;'>
                                                <img src='Imagenes/$nombre' style='width:99%;height:99%;display:inline-block;'/>
                                                </div>
                                                </center>
                                                ";
                                                /*<div style='display:inline-block;'>
                                            <table>
                                            <tr><th>nombre</th><th>tipo</th><th>carpeta temp</th><th>tamaño bytes</th></tr>
                                            <tr>
                                            <td>".$_FILES['logo']['name']."</td>
                                            <td>".$_FILES['logo']['type']."</td>            // esta tabla es solo de verifocacion de los datos de la imagen 
                                            <td>".$_FILES['logo']['tmp_name']."</td>
                                            <td>".$_FILES['logo']['size']."</td>
                                                </tr>
                                                </table>
                                            </div>*/
                                                     
                                        }else{
                                        echo "
                                            <center>
                                        <div id='logo'>
                                        <img src='Imagenes/Sena.ico' style='width:300px;height:200px;'/>
                                        </div>
                                        </center>
                                        ";
                                        }

                                        ?>
                                        
                                    </div>
                                <!--</center>-->
                                
                        </td>
                        </tr>
                        
                        <tr>
                            <td>
                                
                        <table style="width:250px;">
                            
                                <tr>
                                    <td>
                                <center>
                                        <input type="radio" name="editarlogo" value="quitarlogo" class="radio"/>Quitar Logo
                                        <input type="radio" name="editarlogo" value="ajustarlogo" class="radio"/>Ajustar Tamano
                                </center>
                                    </td>
                                </tr>
                        </table>
                            
                        </td>
                        </tr>
                        
                        <tr> 
                            <td>
                        <center>
                            <input type="submit" name="action" value="Aceptar" class="boton"/>
                            <input type="button" name="action" value="Salir" class="boton"/>
                        </center>
                </td>
                </tr>


</table>
                
</form>


<?php
            
            generar_pie();
            
           