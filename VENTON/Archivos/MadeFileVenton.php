<!DOCTYPE html>
<!--			Etiqueta <datalist><option></option></datalist>      Una lista de Selecciones 

                                                <select required></select>  //obliga a que este campo sea diligenciado

-->
<html>
    <head>
        <title>Descarga</title>
     <link href='../Recursos/ProyectoTrimestre3.css' rel='stylesheet' type='text/css'/>
      
<?php
            include 'FuncionEntorno_encabezado_r.php';
            include '../Recursos/FuncionEntorno_pie.php';
            include '../Recursos/ConexionBD.php';
            
            
            generar_encabezado();
   
            if(isset($_REQUEST['load'])){
                if($_REQUEST['load']=="Reporte de Ventas"){
                    $tabla=$_REQUEST['tabla1'];
                    $nomArchivo=$_REQUEST['nomFile1'];
                    $post = $_REQUEST['post1'];
                }
                if($_REQUEST['load']=="Reporte de Empleados"){
                    $tabla=$_REQUEST['tabla2'];
                    $nomArchivo=$_REQUEST['nomFile2'];
                    $post = $_REQUEST['post2'];
                }
                if($_REQUEST['load']=="Reporte de Productos"){
                    $tabla=$_REQUEST['tabla3'];
                    $nomArchivo=$_REQUEST['nomFile3'];
                    $post = $_REQUEST['post3'];
                }
            }else{
            
          $tabla=$_REQUEST['tabla'];
          $nomArchivo=$_REQUEST['nomFile'];
          $post = $_REQUEST['post'];
          
          }
          
       echo "
    <center> 
        <form action='../$post' method='post'>
            
            <input type='submit' value='Volver' 
                   style='
                   width:250px;
                   height:250px;
                   top:25%;
                   left:38%;
                   position:absolute;
                   border-radius:100%;
                   box-shadow:0px 2px 8px 4px gray;
                   padding: 5px;
                   //width: 90px;
                   min-width: 90px;
                   background-color:#55A9D0;
            '/> 
            
        </form>
    </center> 
            
       ";     
            
            
            date_default_timezone_set("America/Bogota");
            setlocale(LC_TIME, "spanish");
            
            $fecha_rep = strftime("%A %d de %B de %Y");
            
             //date("d-m-Y, h:i:s");
            
            conex();
            
        if ($tabla==="ventas"){
            
            $n = 13;
            
            $obtenido = extraer_datos($tabla);

            
            //si es a continua escribiendo el archivo
            //si es w borra y escribe de nuevo
$file = fopen("Biblioteca/$nomArchivo.txt","w") or die("Problemas en la creacion");

fputs($file,PHP_EOL."\t \t \t \t \t \t \t VENTON ".PHP_EOL.""
          . "\t \t \t \t \t \t Tu Tienda Digital".PHP_EOL."".PHP_EOL
        . "\t \t \t Santiago de Cali, $fecha_rep".PHP_EOL."".PHP_EOL."".PHP_EOL);


$lbl = array("Consecutivo de Venta:","Fecha Venta:","Vendedor(a):","Cliente:","Nombre","Ident.:",
    "Direccion:","Telefono:","Modo de Pago:","Plazo:","Pago","Lista Compra:","Total Venta");

            
            while ($dato = mysql_fetch_array($obtenido)){
                
                for($u=0;$u<$n;$u++){
                    
                    $td[$u]="$dato[$u]";
                
                }
                
                
                for($u=0;$u<$n;$u++){
                    
                    fputs($file,"
                            $lbl[$u]
                            \t \t$td[$u]
                             -----".PHP_EOL);
                         
                }
                
                 PHP_EOL;
                 
            fputs($file,"\t-------------------------------------------------------------".PHP_EOL."".PHP_EOL);        
            }
            
fputs($file,"\t \t \t \t \t \t \t *** FIN REPORTE, $fecha_rep ***"
        . "".PHP_EOL."
        ");



    echo "  <!--<script>
alert('Archivo Generado');
</script>-->

<form action='Biblioteca/generar_descarga.php' method='post' id='descargar'>

<input type='text' name='file' value='$nomArchivo' style='display:none;position:absolute;'/>

</form>

<script>
document.forms['descargar'].submit();
</script>";

        }
        
        //SI ES REPORTE DE EMPLEADOS:
        
        if($tabla==="empleados"){
        
         $n = 13;
            
            $obtenido = extraer_datos($tabla);

            
            //si es a continua escribiendo el archivo
            //si es w borra y escribe de nuevo
$file = fopen("Biblioteca/$nomArchivo.txt","w") or die("Problemas en la creacion");

fputs($file,PHP_EOL."\t \t \t \t \t \t \t VENTON ".PHP_EOL.""
           . "\t \t \t \t \t \t Tu Tienda Digital".PHP_EOL."".PHP_EOL
        . "\t \t \t Santiago de Cali, $fecha_rep".PHP_EOL."".PHP_EOL."".PHP_EOL);


$lbl = array("Codigo:","Fecha de Vinculacion:","Nombre:","Cedula:","Direccion","Ciudad:",
    "Telefono:","Email:","Genero:","Observaciones:","Tipo de Contrato:","Clave de Ingreso",
    "Cargo:");

            
            while ($dato = mysql_fetch_array($obtenido)){
                
                for($u=0;$u<$n;$u++){
                    
                    $td[$u]="$dato[$u]";
                
                }
                
                
                for($u=0;$u<$n;$u++){
                    
                    fputs($file,"
                            $lbl[$u]
                            \t \t$td[$u]
                             -----".PHP_EOL);
                         
                }
                
                 PHP_EOL;
                 
            fputs($file,"\t----------------------------------------------------------".PHP_EOL."".PHP_EOL);        
            }
            
fputs($file,"\t \t \t \t \t \t \t *** FIN REPORTE, $fecha_rep ***"
        . "".PHP_EOL."
        ");



    echo "  <!--<script>
alert('Archivo Generado');
</script>-->

<form action='Biblioteca/generar_descarga.php' method='post' id='descargar'>

<input type='text' name='file' value='$nomArchivo' style='display:none;position:absolute;'/>

</form>

<script>
document.forms['descargar'].submit();
</script>";
    
    
        }
        
        
        
        if($tabla==="articulos"){
        
         $n = 6;
            
            $obtenido = extraer_datos($tabla);

            
            //si es a continua escribiendo el archivo
            //si es w borra y escribe de nuevo
$file = fopen("Biblioteca/$nomArchivo.txt","w") or die("Problemas en la creacion");

fputs($file,PHP_EOL."\t \t \t \t \t \t \t VENTON ".PHP_EOL.""
          . "\t \t \t \t \t \t Tu Tienda Digital".PHP_EOL."".PHP_EOL
        . "\t \t \t Santiago de Cali, $fecha_rep".PHP_EOL."".PHP_EOL."".PHP_EOL);


$lbl = array("Codigo:","Descripcion:","Cantidad:","Costo Compra:","Preventa:","Proveedor:");

            
            while ($dato = mysql_fetch_array($obtenido)){
                
                for($u=0;$u<$n;$u++){
                    
                    $td[$u]="$dato[$u]";
                
                }
                
                
                for($u=0;$u<$n;$u++){
                    
                    fputs($file,"
                            $lbl[$u]
                            \t \t$td[$u]
                             -----".PHP_EOL);
                         
                }
                
                 PHP_EOL;
                 
            fputs($file,"\t-------------------------------------------------------------".PHP_EOL."".PHP_EOL);        
            }
            
fputs($file,"\t \t \t \t \t \t \t *** FIN REPORTE, $fecha_rep ***"
        . "".PHP_EOL."
        ");



    echo "  <!--<script>
alert('Archivo Generado');
</script>-->

<form action='Biblioteca/generar_descarga.php' method='post' id='descargar'>

<input type='text' name='file' value='$nomArchivo' style='display:none;position:absolute;'/>

</form>

<script>
document.forms['descargar'].submit();
</script>";
    
    
        }
        
    
//window.location='../reporteVentas.php';

    /*$file_down = filter_var("Biblioteca/$nomArchivo.txt", FILTER_SANITIZE_STRING);

    if ( file_exists( $file_down ) ) {
        header ( "Content-type: octet/stream" );
        header ( "Content-disposition: attachment; filename=$file_down;" );
        header ( "Content-Length: ". filesize( $file_down ) );
        readfile( $file_down );
    } else {
        echo "<script>
        alert('El archivo no existe');
        </script>";
    }

    exit;*/
  
    /*function esperar(){
        sleep(5);
        echo "<script>window.location='../reporteVentas.php';</script>";
    }
    
    esperar();*/
        
        
        
        
         if ($tabla==="clientes"){
            
            $n = 14;
            
            $obtenido = extraer_datos($tabla);

            
            //si es a continua escribiendo el archivo
            //si es w borra y escribe de nuevo
$file = fopen("Biblioteca/$nomArchivo.txt","w") or die("Problemas en la creacion");

fputs($file,PHP_EOL."\t \t \t \t \t \t \t VENTON ".PHP_EOL.""
          . "\t \t \t \t \t \t Tu Tienda Digital".PHP_EOL."".PHP_EOL
        . "\t \t \t Santiago de Cali, $fecha_rep".PHP_EOL."".PHP_EOL."".PHP_EOL);


$lbl = array("Cod:","Nombre:","Nip:","Direccion:","Ciudad","Telefono:",
    "Email:","Fecha:","Obs:","Sistema Pago:","Cuenta:","Contacto:","Telefono","Parentesco");

            
            while ($dato = mysql_fetch_array($obtenido)){
                
                for($u=0;$u<$n;$u++){
                    
                    $td[$u]="$dato[$u]";
                
                }
                
                
                for($u=0;$u<$n;$u++){
                    
                    fputs($file,"
                            $lbl[$u]
                            \t \t$td[$u]
                             -----".PHP_EOL);
                         
                }
                
                 PHP_EOL;
                 
            fputs($file,"\t-------------------------------------------------------------".PHP_EOL."".PHP_EOL);        
            }
            
fputs($file,"\t \t \t \t \t \t \t *** FIN REPORTE, $fecha_rep ***"
        . "".PHP_EOL."
        ");



    echo "  <!--<script>
alert('Archivo Generado');
</script>-->

<form action='Biblioteca/generar_descarga.php' method='post' id='descargar'>

<input type='text' name='file' value='$nomArchivo' style='display:none;position:absolute;'/>

</form>

<script>
document.forms['descargar'].submit();
</script>";

        }
        
        
        
    
generar_pie();





