<!DOCTYPE html>
<!--			Etiqueta <datalist><option></option></datalist>      Una lista de Selecciones 

                                                <select required></select>  //obliga a que este campo sea diligenciado

-->

<?php session_start(); ?>

<html>
    <head>
        <title>Registro de Clientes</title>
    

    <?php
            include_once 'Recursos/FuncionEntorno_encabezado_admin.php';
            include_once 'Recursos/FuncionEntorno_pie.php';
            include 'Recursos/ConexionBD.php';
            
            
            generar_encabezado();
            
 
/*if(isset($_REQUEST['foto'])){            
            
if($_FILES['foto']['name']){
    
    $lavadoImagen=mysql_real_escape_string(file_get_contents($_FILES['foto']['tmp_name']));
    
    conex();
    
    mysql_query("insert into empleados (foto) where codempleado='".$_REQUEST['codempleado']."' "
            . "values ('$lavadoImagen')");
 
    close_conex("FormEmpleado.php");
    
    $nombre=$_FILES['foto']['name'];
    
    $formats=array("image/jpg","image/jpeg","image/gif","image/x-icon","image/png");
    
    $long=13631488;//total peso de imagen en bytes permitido en la subida
    
    if(in_array($_FILES['foto']['type'],$formats) && $_FILES['foto']['size']<=$long){
                            $almacen="Imagenes/Fotos/".$_FILES['foto']['name'];
                            
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
                            }//
                         echo "<script>alert('La foto ya Existe en la Base de Datos');</script>";    
                            }
                            }else{
                                echo "<script>alert('verifica que tu imagen sea .jpg, .jpeg, .ico, .png, .gif"
                                . "y el tamaño no exceda 13 MB\n')</script>";
                            }
                                            
                                       //   ********************************    //  

                            }else {
                            echo "<script>alert('no haz seleccionado imagen')</script>";
                            }
}*/


# Cogemos el formato de la imagen
/*	if ($_FILES["userfile"]["type"]=="image/jpeg" || $_FILES["userfile"]["type"]=="image/pjpeg" || $_FILES["userfile"]["type"]=="image/gif" || $_FILES["userfile"]["type"]=="image/bmp" || $_FILES["userfile"]["type"]=="image/png")
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

if ($error!="")     
        
 */           
            
            
            
            
            
  
            if(isset($_REQUEST['guardar'])){
            
            
            $cod=$_REQUEST['codempleado'];
            $fecha=$_REQUEST['fecharegistro'];
            $nombre=$_REQUEST['nomempleado'];
            $cc=$_REQUEST['cedula'];
            $resid=$_REQUEST['dirempl'];
            $ciudad=$_REQUEST['ciudadempl'];
            $tel=$_REQUEST['telempl'];
            $email=$_REQUEST['emailempl'];
            $sex=$_REQUEST['opcionsexo'];
            $obs=$_REQUEST['desempl'];
            $tipocontrato=$_REQUEST['contrato'];
            $cargo=$_REQUEST['cargo'];
            $clave=$_REQUEST['clave'];
            
            //$require = strlen($cod$.fecha.$nombre.$cc.$resid.$ciudad.$tel.$email.$sex.$cargo);
            
            $require = strlen($fecha)*strlen($nombre)*strlen($cc)
                    *strlen($resid)*strlen($ciudad)*strlen($tel)*strlen($email)*strlen($sex.$cargo);
            
            if($require>0){
       
                
                
                conex();
                
$dialogo="update empleados set fecharegistro='$fecha',nomempleado='$nombre',cedula='$cc',dircliente='$resid',"
        . "ciudadcliente='$ciudad',telcliente='$tel',emailcliente='$email',opcionsexo='$sex',desclient='$obs',"
        . "contrato='$tipocontrato',clave='$clave',tipo='$cargo' where codempleado='$cod'";
    
$verify=mysql_query($dialogo); 
             

                close_conex("FormEmpleado.php");

/*       
            $tabla="empleados";// 
            
            $campos="codempleado,fecharegistro,nomempleado,cedula,dircliente,ciudadcliente,telcliente,emailcliente,opcionsexo,"
                    . "desclient,contrato,clave,tipo,foto";
            
            $valores="'','$fecha','$nombre','$cc','$resid','$ciudad','$tel','$email','$sex','$obs','$tipocontrato',"
                    . "'$clave','$cargo',''";*/
           
            
//Conexion mysql 
            /*$conex=conectar_servidor();
            conectar_base($conex);*/
            
            //mysql_query("insert into empleados ($campos) values ($valores) where codempleado='$key'");
            
            /*registrar_datos($valores, $tabla, $campos);*/
            
            
            
            }
 else {
                echo "<script>alert('No haz diligenciado los campos')
                        window.location='FormEmpleado.php';
                        </script>";
 }
            
            }
            
            //  }
            
            /*else if (isset ($_REQUEST['alter_clave'])) {
                
                if(strlen($_REQUEST['clave'])>0){
                    
                $conex = conectar_servidor();
                conectar_base($conex);
                
                $tabla="empleadosventon";
                
                $colum_alter="clave";
                
                $colreferencia="codempleado";
                
                $dato_ref=$_REQUEST['codempleado'];
                
                $nuevo_dato=$_REQUEST['clave'];                              
                
                modificar_dato($tabla, $colum_alter, $colreferencia, $dato_ref, $nuevo_dato);
                
                $colum_alter_2="tipo";
                
                $nuevo_cargo=$_REQUEST['cargo'];
                
                modificar_dato($tabla, $colum_alter_2, $colreferencia, $dato_ref, $nuevo_cargo);
                
                romper_conexion($conex, "FormEmpleado.php");
                
                }
                
                }*/

            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            generar_pie();
            
            