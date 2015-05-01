<!doctype html>

<?php   session_start();    ?>

<html>
    <head>
        <title>Administrador</title>
        
        <link rel="shortcut icon" href="Imagenes/admin.png"/>
        
        <style>
            h1{
                font-family: monospace;
                font-size: 300%;
                margin: 0px 0px 4% 10px;
            }
            #form{
                padding: 30px;
            }
            .im{
                top: 40%;
            }
            .hid{
                position: absolute;
                float: left;
                display: none;
            }
            .link{
                padding: 4px;
                width: 150px;
            }
            #down form{
                position: absolute;
                left: 40%;
                z-index: 4;
                display: none;
            }
            #down:hover > form{
                display: block;
            }
            
        </style>
 <?php
            include_once 'Recursos/FuncionEntorno_encabezado_admin.php';
            include_once 'Recursos/FuncionEntorno_pie.php';
            include 'Recursos/ConexionBD.php';
            
            
            generar_encabezado();
?>      
 
  <h1 
      style="
      display:inline-block;
      margin-left: 10%;
      "
  >
      Bienvenid@
 <?php echo $_SESSION['usuario']; ?> 
      
  </h1>      
        
        
        
<?php 

conex();

$qst=mysql_query("select foto from empleados where nomempleado='".$_SESSION['usuario']."'");


while($f=mysql_fetch_array($qst)){
    $picture="$f[foto]";
}

?>
        
    <img src='Imagenes/Fotos/<?php echo "$picture"; ?>' 
          style="
          width:108px;
          height:159px;
          display:inline-block;
          position: relative;
          float: right;
          right: 25%;
          top: -3%;
          "
    />   
        
     
        
        
        
    <h3 
        style="
        margin: 0px 20px 15px 30px;
        font-family: monospace;
        font-size: 150%;
        ">
        Que Accion Desea Realizar?
    </h3>
        
     
    
    
    <a href="FormVenta.php" class="im"
       style="float:left;left:10%;position:absolute;">
        <img src="Imagenes/venta.png" title="Realizar Venta"/>
    </a>
    
    
    <div id="down">
    <a href="" class="im"
       style="position:absolute;left:33%;">
        <img src="Imagenes/reporte_venta.png" title="Descargar Reportes"/>
    </a>
    
    
    <form action="Archivos/MadeFileVenton.php" method="post">
        <ul>
            <li>
                <input type="submit" name="load" value="Reporte de Ventas" class="link"/>
                <input type="text" name="tabla1" value="ventas" class="hid"/>
                <input type="text" name="nomFile1" value="Reporte de Ventas" class="hid"/>
                <input type="text" name="post1" value="indexAdmin.php" class="hid"/>
            </li>
        </ul>
        <ul>
            <li>
                <input type="submit" name="load" value="Reporte de Empleados" class="link"/>
                <input type="text" name="tabla2" value="empleados" class="hid"/>
                <input type="text" name="nomFile2" value="Empleados Vinculados" class="hid"/>
                <input type="text" name="post2" value="indexAdmin.php" class="hid"/>
            </li>
        </ul>
        <ul>
            <li>
                <input type="submit" name="load" value="Reporte de Productos" class="link"/>
                <input type="text" name="tabla3" value="articulos" class="hid"/>
                <input type="text" name="nomFile3" value="Articulos en Stock" class="hid"/>
                <input type="text" name="post3" value="indexAdmin.php" class="hid"/>
            </li>
        </ul>
    </form>
    </div>
    
    
    
    
    <a href="Recursos/CerrarSession.php" class="im"
       style="float:right;right:5%;position:absolute;top:35%">
        <img src="Imagenes/puerta1.png" title="Cerrar Session"/>
    </a>
    
    
    <video controls height="150" width="300">
        <source src="Videos/comercialCali.mp4"/>
    </video>
    
    
        <?php

               generar_pie();