<!DOCTYPE html>
<!--			Etiqueta <datalist><option></option></datalist>      Una lista de Selecciones 

                                                <select required></select>  //obliga a que este campo sea diligenciado

-->

<?php  session_start(); ?>

<html>
    <head>
        <title>Cobros</title>
        
        
        
    <?php
            include_once 'Recursos/FuncionEntorno_encabezado_admin.php';
            include_once 'Recursos/FuncionEntorno_pie.php';
            include 'Recursos/ConexionBD.php';
            
            generar_encabezado();
            
            $cod = "Venta Particular";
            
            if (isset($_REQUEST['consult_clnt'])){
                $key = $_REQUEST['cod_direct'];
                $camp= "codcliente";
                $cod = $key;
            }
            
            if (isset($_REQUEST['consult_list'])){
                $key = $_REQUEST['list'];
                $camp = "id_cliente";
            }
            
            conex();
            
            $datos_clnt = seleccionar_registro($camp, "ventas", $key);//columna, tabla en la que va a buscar, valor de referencia
            
            while($f=mysql_fetch_array($datos_clnt)){
                $nom_clnt="$f[nombre]";
                $fecha="$f[fecha]";
                $stmpago="$f[sistemapago]";
                $list_comp="$f[lista_compra]";
                $fecha_limit="$f[plazo]";
            }
            
            ?>
        
           
            <!--                        FORM DE CONSULTA DE DEUDORES                        -->
            
            
    <form action="Cobrando.php" method="post" id="FormCobros"> 
                  <!--style="/*display: inline-block;*/
                  margin: auto; position: relative; width: 98%; height: 90%;
                  padding: 0;"-->
                
                <!--<style>
                    #FormCobros td{
                        border: 1px solid #FF6347;
                    }
                </style>-->
                
                
                
                <!-- TABLA PRINCIPAL DE ESTE FORM CON FINES ORGANIZATIVOS-->
                
                 <!--style="width: 100%; height: 100%; margin: 0; padding: 0; border: 1px dashed #FF7F50;
                       position: relative;"-->
                <table> 
                    <caption>Cuenta de Cobro</caption>
                    <tr>
                        <td>
                            <strong>Cuentas por Cobrar</strong>
                        </td>
                        
                        <td rowspan="2" style='width:50%'>
                            
                            
                <!--        TABLA DERECHA DE RESULTADOS DE CONSULTA             -->
                            
                            <table id="tabla_cobros">
                    
                    <!--<style>style="border: 2px solid green; margin: auto; padding: 0; width: 95%; height: 85%;"
                        #tabla_cobros td{
                            border: 1px solid mediumaquamarine;
                            width: 50%;
                            height: 19px;
                            text-align: end;
                        }
                    </style>-->
                    
                    <tr>
                        <td class='tdcobro'>
                            <label>Cod. Cliente:</label>
                        </td>
                        <td class='tdcobro'>
                            <?php   echo $cod;    ?>
                        </td>
                    </tr>
                    <tr>
                        <td class='tdcobro'>
                            <label>Nombre:</label>
                        </td>
                        <td class='tdcobro'>
                            <?php   echo $nom_clnt;    ?>
                        </td>
                    </tr>
                    <tr>
                        <td class='tdcobro'>
                            <label>Fecha Transaccion:</label>
                        </td>
                        <td class='tdcobro'>
                            <?php   echo $fecha;    ?>
                        </td>
                    </tr>
                    <tr>
                        <td class='tdcobro'>
                            <label>Fecha Limite:</label>
                        </td>
                        <td class='tdcobro'>
                            <?php   echo $fecha_limit;    ?>
                        </td>
                    </tr>
                    <tr>
                        <td class='tdcobro'>
                            <label>Modalidad de Pago:</label>
                        </td>
                        <td class='tdcobro'>
                            <?php   echo $stmpago;    ?>
                        </td>
                    </tr>
                    <!--<tr>
                        <td colspan="2" style="width:100%;text-align:center;"> <!--max-height: 300px;->
                      
                             DETALLE DE LA DEUDA  ->
                            
                            <style>
                                            
#tabla_cobros table .num{
    max-width:10%;
    min-width: 10%;
    height: 17px;
    /*border: 1px solid snow;*/
    padding: 0 3px 0 3px;
    text-align: right;
    background-color: snow;
}
#tabla_cobros table .text{
    min-width: 30px;
}
#tabla_cobros table th{
    text-align: center;
}

                                        </style>
                            
                            <table style="width: 100%;">
                                <!--<style>
                                    #tabla_cobros table td{
                                        width: 10px;
                                        height: 19px;
                                    }
                                    #tabla_cobros table th{
                                        
                                    }
                                </style>->
                                <caption>Detalle de la Deuda</caption>
                                <tr>
                                    <th>Articulo</th>
                                    <th>Descripcion</th>
                                    <th>Cantidad</th>
                                    <th>Total</th>
                                </tr>
                                <!--<tr>
                                    <td colspan='4'>-->
                                    <!--<table id='det_deuda' style='border:0;'>->
                                <tr>
                                    <td class="num"></td>
                                    <td class="text"></td>
                                    <td class="num"></td>
                                    <td class="num"></td>
                                </tr>
                                <tr>
                                    <td class="num"></td>
                                    <td class="text"></td>
                                    <td class="num"></td>
                                    <td class="num"></td>
                                </tr>
                                <tr>
                                    <td class="num"></td>
                                    <td class="text"></td>
                                    <td class="num"></td>
                                    <td class="num"></td>
                                </tr>
                                <tr>
                                    <td class="num"></td>
                                    <td class="text"></td>
                                    <td class="num"></td>
                                    <td class="num"></td>
                                </tr>
                                        <!--</table>->
                            </table>
                            <!-- --------------------------------------- 
                            
                        </td>
                    </tr>-->
                </table>
                
                <table style="min-height:50%;">
                    <tr>
                        <td>
                            
                       <?php
                       
                       echo "$list_comp";
                       
                       ?>
                        
                        </td>
                    </tr>
                </table>
                        
                        </td>
                    </tr>
                    
                    <tr><td>
                
                            <!--                    TABLA LADO IZQ PARA CONSULTAR                         -->
                            
                <table>
                    
                    <!--<style>
                        
                    </style>-->
                    
                <tr>
                    <td colspan="1">
                        <fieldset><legend>Consulta Específica</legend>
                            <label>Cod. Cliente</label>
                            <input name="cod_direct" type="text" id="consulta_cliente" style="width:30%;"/>
                            <input type="submit" name="consult_clnt" value="Consultar" class="boton"/>
                        </fieldset>
                    </td>
                </tr>
                <tr><td>General</td></tr>
                <tr>
                    <td>Pendientes</td><!--<td>Cancelados</td>-->
                </tr>
                
                <tr style="height: 150px; padding: 0;">
                    <td class="list" colspan="1">               <!---->
                        
                        <?php
                        
                        conex();
                                        
                        $info = seleccionar_registro("sistemapago", "ventas", "Credito");
                        
                        ?>
                        
                        <select name="list" size="5" style="margin: 0; width: 100%; height: 100%;">
                            
                        <?php
                        
                        while ($f = mysql_fetch_array($info)){
                            echo "<option value='$f[id_cliente]'>$f[nombre]</option>";
                        }
                        
                        mysql_close();
                        
                        ?>
                               
                        </select>
                        
                    </td>
                    <!--<td class="list">
                        
                        <php
                        
                        conex();
                        
                        $inf = seleccionar_registro("sistemapago", "ventas", "Contado");
                        
                        ?>
                        
                        <select name="paz_y_salvo" size="5" style="margin: 0; width: 100%; height: 100%;">
                            
                        <php   
                            
                        while ($f = mysql_fetch_array($inf)){
                            echo "<option value='$f[id_cliente]'>$f[nombre]</option>";
                        }
                        
                        mysql_close();
                        
                        ?>
                            
                        </select>
                        
                    </td>-->
                </tr>
                <tr>
                    <td colspan="1">
                        <center><input name="consult_list" type="submit" value="Consultar" class="boton"/></center>
                    </td>
                </tr>
            </table>
            
                        </td>
            
            <!--******************************************-->
            
          </tr>
                    <tr>
                        <td colspan="2">
                    <center>
                        <input type="submit" name="cobrar" value="Cobrar" class="boton"/>
                        <input value="Borrar" type="reset" class="boton"/>
                        <input type="button" value="Cancelar" class="boton"
                               onclick="window.location='indexAdmin.php'"/>
                        
                    
                    </center>
                    
                        </td>
                    </tr>
                </table>
            
            </form>
            
            
            
            <!--*************************************************************-->
        
        <?php

generar_pie();
