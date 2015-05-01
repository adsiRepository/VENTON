<!DOCTYPE html>
<!--			Etiqueta <datalist><option></option></datalist>      Una lista de Selecciones 

                                                <select required></select>  //obliga a que este campo sea diligenciado

-->

<?php session_start(); ?>

<html>
    <head>
        <title>Reporte de Ventas</title>
        <style>
            #tabla_reporteProveedor{
                border:1px solid darkgoldenrod;
                border-radius:6px;
                border-collapse:collapse;
                width: 150%;
                background-color: darkseagreen;; 
            }
            #tabla_reporteProveedor th{
                background-color:#897575;
                color:cornsilk;
                height: 50px;
                border:3px solid burlywood;
                border-top:0;
            }
            #tabla_reporteProveedor td{
                border:4px solid silver;
                border-radius:3px;
                text-align:center;
            }
            #tabla_reporteProveedor .key{
                width:15px;
            }
        </style>
    

        
    <?php
            include_once 'Recursos/FuncionEntorno_encabezado_admin.php';
            include_once 'Recursos/FuncionEntorno_pie.php';
            include 'Recursos/ConexionBD.php';
            
            
            generar_encabezado();
            
            ?>
            
            <table id="tabla_reporteProveedor">
                <tr>
                    <th class="key">Cod.</th>
                    <th>Nombre</th>
                    <th>Nip</th>
                    <th>Direccion</th>
                    <th>Ciudad</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Fecha Vinculacion</th>
                    <th>Observaciones</th>
                    <th>Sistema de Pago</th>
                    <th>Cuenta Actual</th>
                    <th>Contacto</th>
                    <th>Telefono contacto</th>
                    <th>Parentesco</th>
                    
                </tr>
             
            <?php
            
            $tabla="clientes";
            
            $conex=conectar_servidor();
            
            conectar_base($conex);
            
            $registros=extraer_datos($tabla);
            
            while ($dato = mysql_fetch_array($registros)){
                
                for($u=0;$u<14;$u++){
                    
                    $td[$u]="$dato[$u]";
                
                }
                
                echo "<tr>";
                
                for($u=0;$u<14;$u++){
                    
                    echo "<td>
                        $td[$u]
                      </td>
                     ";
                
                 }
                
                echo "</tr>";
            }
            
            ?>
            
            </table>
    
    
     <form action="Archivos/MadeFileVenton.php" method="post"
               style="
               top: -37px;
               position: absolute;
               right: 35%;
               "               
               >
        
        <input type="text" name="tabla" value="clientes" style="position:absolute;display:none;"/>
        <input type="text" name="nomFile" value="Clientes Venton" style="position:absolute;display:none;"/>
        <input type="text" name="post" value="reporteClientes.php" style="position:absolute;display:none;"/>
        
        <input type="submit" name="ventas" value="Generar Archivo Descargable"
               style="
               padding: 15px;
               background-color: black;
               color: papayawhip;
               font-weight: bolder;
               font-size: 110%;
               border: 6px outset papayawhip;
               "
               />
        
    </form>
    
    
            
            <?php
                
            mysql_close($conex);
            
            
            
            generar_pie();

