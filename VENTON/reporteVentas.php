<!DOCTYPE html>
<!--			Etiqueta <datalist><option></option></datalist>      Una lista de Selecciones 

                                                <select required></select>  //obliga a que este campo sea diligenciado

-->

<?php session_start(); ?>

<html>
    <head>
        <title>Reporte de Ventas</title>
        <style>
            #tabla_reporteVenta{
                border:1px solid darkgoldenrod;
                border-radius:6px;
                border-collapse:collapse;
                width: 160%;
                background-color: darkseagreen;
            }
            #tabla_reporteVenta th{
                background-color:#897575;
                color:cornsilk;
                height: 50px;
                border:3px solid burlywood;
                border-top:0;
            }
            #tabla_reporteVenta td{
                border:4px solid silver;
                border-radius:3px;
                text-align:center;
                padding: 4px;
            }
            #tabla_reporteVenta .iventa{
                width:15px;
            }
        </style>
    

        
    <?php
            include_once 'Recursos/FuncionEntorno_encabezado_admin.php';
            include_once 'Recursos/FuncionEntorno_pie.php';
            include 'Recursos/ConexionBD.php';
            
            
            generar_encabezado();
            
            ?>
            
            <table id="tabla_reporteVenta">
                <tr>
                    <th class="iventa">Consecutivo de Venta</th>
                    <th>Fecha</th>
                    <th>Vendedor</th>
                    <th>Cod. de Cliente</th>
                    <th>Nombre Cliente</th>
                    <th>C.C. / NIT</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Sistema de Pago</th>
                    <th>Plazo de Credito</th>
                    <th>Cuota</th>
                    <th>Cods. Art Adquiridos</th>
                    <th>Total Venta</th>
                </tr>
             
            <?php
            
            $tabla="ventas";
            
            conex();
            
            $registros = extraer_datos($tabla);
            
            while ($dato = mysql_fetch_array($registros)){
                
                for($u=0;$u<13;$u++){
                    
                    $td[$u]="$dato[$u]";
                
                }
                
                echo "<tr>";
                
                for($u=0;$u<13;$u++){
                    
                    echo "<td>
                        $td[$u]
                      </td>
                     ";
                
                 }
                
                echo "</tr>";
            }
            
            ?>
            
            </table>
            
            <?php
                
            mysql_close();
            
            ?>
    
    <form action="Archivos/MadeFileVenton.php" method="post"
               style="
               top: -37px;
               position: absolute;
               right: 35%;
               "               
               >
        
        <input type="text" name="tabla" value="ventas" style="position:absolute;display:none;"/>
        <input type="text" name="nomFile" value="Reporte de Ventas" style="position:absolute;display:none;"/>
        <input type="text" name="post" value="reporteVentas.php" style="position:absolute;display:none;"/>
        
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
            
            generar_pie();