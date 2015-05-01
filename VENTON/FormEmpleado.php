<!DOCTYPE html>
<!--			Etiqueta <datalist><option></option></datalist>      Una lista de Selecciones 

                                                <select required></select>  //obliga a que este campo sea diligenciado

-->

<?php session_start(); ?>

<html>
    <head>
        <title>Registro Empleado</title>
    
        <!--<script>
        
        window.onload=alert('!! Si Quieres Subirte una Fotografia \n\
        debes Cargarla de Antemano');
        
        </script>-->
        
<?php
            include_once 'Recursos/FuncionEntorno_encabezado_admin.php';
            include_once 'Recursos/FuncionEntorno_pie.php';
            include 'Recursos/ConexionBD.php';
            
            generar_encabezado();
            
            ?>
        
        
             <form action="FormEmpleado.php" id="foto" method="post" enctype="multipart/form-data"
          style="float:right;position:relative;
          ">
        
        <label>Cod. Empleado para Foto</label>
        
        <?php
            conex();
        $numempl = contar_registros("empleados");
        $n_empl = $numempl+1;
        
        echo "
        <input type='text' name='code' id='code' value='$n_empl'/>   
        ";
        
        ?>
        
        <label style="display:inline-block;">Cargar Fotografia del Empleado:</label>
        <input type="file" name="foto"
          style="display:inline-block;"/>
                        
    </form>
                         
                
                <?php
            
            if(!$nombre=$_FILES['foto']['name']){
                
                echo "no haz seleccionado foto";
                
            }  else {
            
                        $formats=array("image/jpg","image/jpeg","image/gif","image/x-icon","image/png");
                        
                        $long=13631488;//total peso de imagen en bytes permitido en la subida
                        
                        if(in_array($_FILES['foto']['type'],$formats) && $_FILES['foto']['size']<=$long){
                            $almacen="Imagenes/Fotos/".$_FILES['foto']['name'];
                            
                            //$lavadoImagen=mysql_real_escape_string(file_get_contents($_FILES["foto"]["tmp_name"]));
                            
    conex();
        
    //$sgtrmpl = $numempl+1;
    //$numempl
    
    $cd = $_REQUEST['code'];
    
    $campos="codempleado,fecharegistro,nomempleado,cedula,dircliente,ciudadcliente,telcliente,emailcliente,opcionsexo,"
                    . "desclient,contrato,clave,tipo,foto";
            
    $valores="'$cd','','','','','','','','','','','','',''";
    
    registrar_datos($valores, "empleados", $campos);
    
    $dialogo="update empleados set foto='".$_FILES['foto']['name']."' where codempleado='$cd'";
    
    $verify=mysql_query($dialogo);
                            
/*mysql_query("insert into empleados (codempleado,fecharegistro,nomempleado,cedula,dircliente,ciudadcliente,"
        . "telcliente,emailcliente,opcionsexo,desclient,contrato,clave,tipo,foto) where ");*/
     
    
    
     mysql_close();                    
                            
                            if(!file_exists($almacen)){
                                $moving_to_almacen=@move_uploaded_file($_FILES['foto']['tmp_name'],$almacen);
                            if($moving_to_almacen){
                                echo "<script>alert('Tu foto se ha Guardado en la Base de Datos')</script>";
                            }else{
                                echo "<script>alert('Error al Guardar la Imagen')</script>";
                            }
                            }else{
                                /*$almacen="Imagenes/Fotos".$_FILES['foto']['name']."(2)";
                                $moving_to_almacen=@move_uploaded_file($_FILES['foto']['tmp_name'],$almacen);
                            if($moving_to_almacen){
                                echo "<script>alert('el nombre de tu imagen ya existia, se le ha añadido (2) al final para diferenciarla')</script>";
                            }else{
                                echo "<script>alert('tu imagen no se ha podido guardar en la carpeta de almacenamiento')</script>";
                            }*/
                         echo "<script>alert('La foto ya Existe en la Base de Datos');</script>";    
                            }
                            }else{
                                echo "<script>alert('verifica que tu imagen sea .jpg, .jpeg, .ico, .png, .gif"
                                . "y el tamaño no exceda 13 MB\n')</script>";
                            }
                            
                            
                            
            }
                                
                                          
                                       //   ********************************    //             
                                             
                            
           /*                # Cogemos el formato de la imagen
	if ($_FILES["userfile"]["type"]=="image/jpeg" || $_FILES["userfile"]["type"]=="image/pjpeg" || $_FILES["userfile"]["type"]=="image/gif" || $_FILES["userfile"]["type"]=="image/bmp" || $_FILES["userfile"]["type"]=="image/png")
	{
		# Cogemos la anchura y altura de la imagen
		$info=getimagesize($_FILES["userfile"]["tmp_name"]);
		//echo "<BR>".$info[0]; //anchura
		//echo "<BR>".$info[1]; //altura
		//echo "<BR>".$info[2]; //1-GIF, 2-JPG, 3-PNG
		//echo "<BR>".$info[3]; //cadena de texto para el tag <img

		# Escapa caracteres especiales
		$imagenEscapes=mysql_real_escape_string(file_get_contents($_FILES["userfile"]["tmp_name"]));

		# Agregamos la imagen a la base de datos
		$result=mysql_query("INSERT INTO `imagephp` (anchura,altura,tipo,imagen) VALUES (".$info[0].",".$info[1].",'".$_FILES["userfile"]["type"]."','".$imagenEscapes."')",$link);
		# Cogemos el identificador con que se ha guardado
		$id=mysql_insert_id();

		# Mostramos la imagen agregada
		echo "Imagen agregada con el id ".$id."<BR>";
		echo "<img src='imagen_mostrar.php?id=".$id."' width='".$info[0]."' height='".$info[1]."'>";
	}else{
		$error="El formato de archivo tiene que ser JPG, GIF, BMP o PNG.";
	}
}else{
	$error="No ha seleccionado ninguna imagen...";
}

if ($error!="")  */   
        
        ?>
        
        
      
  
    
        


                <!--FormCliente-->

    <form id="FormEmpleado" action="newEmpleado.php" method="post" enctype="multipart/form-data" 
                                       oninput="
                                       var cd = codempleado.value;
                                       code.value = parseInt(codempleado.value);
                                       ';">
        
        <!--<p 
            style="
            font-family:monospace;
            position: relative;
            top: -20px;
            z-index: 4;
            
            ">
            Si Quieres Subirte una Fotografia debes Cargarla de Antemano            
        </p>-->
        
                    <table>
                        <caption>Registro de Empleado</caption>
                        <tr>
                            <!--<td colspan="2" rowspan="2"></td>-->
                            <td class="labelright">
                                <label>Codigo Empleado:</label>
                            </td>
                            <td>
                                <?php
                                
                                        conex();
                                        
                                        $n = contar_registros("empleados");
                                        $nm = $n+1;
                                        
                                echo "
                                <input class='insert' name='codempleado' type='text' value='$n_empl' id='codempleado'/>
                                ";
                                        
                                        mysql_close();
                                
                                ?>
                                
                                <script>
                                 var cd;
                                 document.getElementById('code').innerHTML = ''+cd+'';
                                </script>
                                
                            </td>
                            <td colspan="2" rowspan="2">
                        <center>
                            <label>DIOS BENDIGA TU EMPLEO</label>
                        </center>
                    </td>
                    
                    </tr>
                        <tr>
                            <td class="labelright">
                                <label>Fecha de registro:</label>
                            </td>
                            <td>
                                <input class="insert" name="fecharegistro" type="date"/>
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="labelright">
                                <label>Nombre:</label>
                            </td>
                            <td>
                                <input class="insert" name="nomempleado" type="text"/>
                            </td>
                            <td class="labelright">
                                <label>#cedula:</label>
                            </td>
                            <td>
                                <input class="insert" name="cedula" type="text"/>
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="labelright">
                                <label>Domicilio:</label>
                            </td>
                            <td>
                                <input class="insert" name="dirempl" type="text"/>
                            </td>
                            <td class="labelright">
                                <label>Ciudad:</label>
                            </td>
                            <td>
                                <input class="insert" name="ciudadempl" type="text"/>
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="labelright">
                                <label>Telefono(s):</label>
                            </td>
                            <td>
                                <input class="insert" name="telempl" type="text" value="  "/>
                            </td>
                            <td class="labelright">
                                <label>E-mail:</label>
                            </td>
                            <td>
                                <input class="insert" name="emailempl" type="email" placeholder="ejemplo@email.com"/>
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="labelright">Sexo:</td>
                            <td>
                                <input type="radio" name="opcionsexo" value="Maculino"/>masculino
                                <input type="radio" name="opcionsexo" value="Femenino"/>femenino
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="labelright">
                                <label>Observaciones:</label>
                            </td>
                            <td colspan="2">
                                <textarea name="desempl" cols="30" rows="5"></textarea>
                            </td>
                            <td id="contact" rowspan="4">
                        <center>
                            
                            
                            fotografia
                            
                            
                            <?php
                            
                                        echo "<div id='foto'>
                            
                    <img src='Imagenes/Fotos/$nombre' style='width:108px;height:159px;display:inline-block;'/>                                        

                                                </div>";
                            
                            ?>                          
                            
                            
                            
                            
                        </center>
                    </td>
                   
                    </tr>
                    
                    <tr>
                        <td colspan="3">
                            
                            <table id="empleados">
                                
                                <tr>
                                    
                                    <td class="labelright">
                                        <label>Tipo de Contrato:</label>
                                    </td>
                                    
                                    <td>
                                    <center>
                                        
                                        <select name="contrato">
                                        <option value="Indefinido">indefinido</option>
                                        <option value="Prueba">a prueba</option>
                                    	</select>
                                        
                                    </center>
                                    </td>
                                    <td>
                                        <label>Clave de Usuario:</label>
                                    </td>
                                    <td>
                                        <center>
                                       <input type="text" name="clave" style="width: 90%;"/> 
                                        </center>
                                    </td>
                                    <td>
                                        <label>Cargo Asignado:</label>
                                    </td>
                                    <td>
                                        <select name="cargo">
                                            <option value="administrador">Administrador</option>
                                            <option value="vendedor">Vendedor</option>
                                        </select>
                                    </td>
                                    </tr>
                                    
                                </table>
                    </td>
                    </tr>
                    <tr>
                        <td colspan="3">
						<center>
                            <div id="consola">
                                <input type="submit" name="guardar" value="Guardar" class="boton" id="guardar"/>
                                <input type="reset" name="borrar" value="Borrar" class="boton" id="borrar"/> 
                                <input type="button" name="buscar" value="Cargar Foto" class="boton" id="buscar"
                                       onclick="document.forms['foto'].submit();"/>
                                <input type="button" name="imprimir" value="Descargar Reporte" class="boton" id="imprimir"
                                       onclick="document.forms['go_report'].submit();"/>
                                <input type="button" name="regresar" value="Regresar" class="boton" id="regresar"
                                       onclick="window.location='indexAdmin.php'"/>
                            </div>
						</center>
                        </td>
                        <!--<td></td>-->
                    </tr>
                        

                    </table>
        
        
        
        <!--<div id="cambio_clave"
            style="
        position:absolute;
	/*background-color:#4AF72B;*/	
	float:right;
	min-width: 150px;
        max-width: 650px;
	height:30px;
	right:10px;					
	font-family:cursive;
	display:inline-block;
	bottom: 9.5%;
        padding-top: 4px;
            ">
            
            <table style="border:0;width: 500px;border-collapse: collapse;">
                <tr>
                    <td colspan="2">
            <p>Digite el Código del Empleado y aquí la Clave que desea asignarle</p>
                    </td>
                    <td rowspan="3">
                        <input type="submit" name="alter_clave" value="Definir"/>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        Clave de Acceso Asignada:
                    </td>
                    <td>
                        <input type="text" name="clave" style="width: 80px;"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Cargo Asignado:
                    </td>
                    <td>
                        <select name="cargo">
                    <option value="administrador">Administrador</option>
                    <option value="vendedor">Vendedor</option>
                    </select>
                    </td>
                </tr>
                
            </table>
        </div>-->  

                </form>
                
                <form action="Archivos/MadeFileVenton.php" method="post" id="go_report" name="go_report"
               style="
               top: -37px;
               position: absolute;
               right: 35%;
               display: none;
               "               
               >
        
        <input type="text" name="tabla" value="empleados" style="position:absolute;display:none;"/>
        <input type="text" name="nomFile" value="Empleados Vinculados" style="position:absolute;display:none;"/>
        <input type="text" name="post" value="FormEmpleado.php" style="position:absolute;display:none;"/>
    
 
                </form>
                
                

        
                
                
   <?php                         
                            
generar_pie();

