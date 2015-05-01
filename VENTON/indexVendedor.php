<!doctype html>

<?php   session_start();    ?>

<html>
    <head>
        <title>Administrador</title>
        
        <link rel="shortcut icon" href="Imagenes/seller.png"/>
        
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
        </style>
 <?php
            include_once 'Recursos/FuncionEntorno_encabezado_vend.php';
            include_once 'Recursos/FuncionEntorno_pie.php';
            
            
            
            generar_encabezado();
?>      
    
<?php 

echo "          
             
<center><h1>Bienvenid@  ".$_SESSION['usuario']." </h1> </center>
    
<img />

";           
?>
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
    
    
    
    <a href="" class="im"
       style="position:absolute;left:33%;">
        <img src="Imagenes/reporte_venta.png" title="Generar Reportes"/>
    </a>
    
    
    <a href="Recursos/CerrarSession.php" class="im"
       style="float:right;right:5%;position:absolute;top:35%">
        <img src="Imagenes/puerta1.png" title="Cerrar Session"/>
    </a>
    
    
    
    
        <?php

               generar_pie();