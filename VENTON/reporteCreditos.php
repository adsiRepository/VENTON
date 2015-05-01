<!DOCTYPE html>
<!--			Etiqueta <datalist><option></option></datalist>      Una lista de Selecciones 

                                                <select required></select>  //obliga a que este campo sea diligenciado

-->

<?php  session_start();  ?>

<html>
    <head>
        <title>Reporte de Creditos</title>
        <style>
            #tabla_reporteCredito{
                border:1px solid darkgoldenrod;
                border-radius:6px;
                border-collapse:collapse;
                margin:auto;
            }
            #tabla_reporteCredito th, td{
                padding:0 10px 0 10px;
            }
            #tabla_reporteCredito th{
                background-color:#897575;
                color:cornsilk;
                height: 50px;
                border:3px solid burlywood;
                border-top:0;
            }
            #tabla_reporteCredito td{
                border:4px solid silver;
                border-radius:3px;
                text-align:center;
            }
        </style>
    

        
    <?php
            include 'Recursos/FuncionEntorno_encabezado_admin.php';
            include 'Recursos/FuncionEntorno_pie.php';
            include 'Recursos/ConexionBD.php';
            
            
            generar_encabezado();
            
            ?>

    <table id="tabla_reporteCredito">
        <tr>
            <th>id Cliente</th>
            <th>Nombre</th>
            <th>Usuario Vendedor</th>
            <th>Direccion</th>
            <th>Telefono</th>
        </tr>
        
        <?php
        
        $ip = conectar_servidor();
        
        conectar_base($ip);
        
        $tabla="ventas";
        
        $campo="sistemapago";
        
        $parametro="Credito";
        
        $request=seleccionar_registro($campo, $tabla, $parametro);
        
        
        
        while($field=mysql_fetch_array($request)){
            $idcli="$field[codcliente]";
            $name="$field[nombre]";
            $user="$field[usuario]";
            $home="$field[direccion]";
            $tel="$field[telefono]";
        
             
            
            echo "<tr>
        <td>$idcli</td> <td>$name</td> <td>$user</td> <td>$home</td>  <td>$tel</td> 
                  </tr>
            ";
            
        }        
                
        ?>      
        
        <tr>
            <td colspan="5">
                <a href="FormCobros.php">Efectuar Cobro</a>
            </td>
        </tr>
        
    </table>
        
        <?php
                
            mysql_close($ip);
            
            
            
            generar_pie();
