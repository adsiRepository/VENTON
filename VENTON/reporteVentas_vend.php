<!DOCTYPE html>
<!--			Etiqueta <datalist><option></option></datalist>      Una lista de Selecciones 

                                                <select required></select>  //obliga a que este campo sea diligenciado

-->



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
            include_once 'Recursos/FuncionEntorno_encabezado_vend.php';
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
                    <th>Articulos Vendidos</th>
                    <th>Total Venta</th>
                </tr>
             
            <?php
            
            $tabla="ventas";
            
            $conex=conectar_servidor();
            
            conectar_base($conex);
            
            $registros=extraer_datos($tabla);
            
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
                
            mysql_close($conex);
            
            
            
            generar_pie();