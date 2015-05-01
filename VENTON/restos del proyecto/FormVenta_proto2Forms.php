<!DOCTYPE html>
<!--			Etiqueta <datalist><option></option></datalist>      Una lista de Selecciones 

                                                <select required></select>  //obliga a que este campo sea diligenciado

-->



<html>
    <head>
        <title>Ventas</title>
    
        
       
        
    
    <?php
            include_once 'Recursos/FuncionEntorno_encabezado.php';
            include_once 'Recursos/FuncionEntorno_pie.php';
            include 'Recursos/ConexionBD.php';
            
            generar_encabezado();
            
            ?>
        
        
        
                
    <form action="venta.php" id="FormVenta" method="post" style="height: 100%;">
        
        
                    <table>
                        <tr>
                            <td>
                                <label>Factura No.</label><!--<input type="text" name="codfactura" />-->
                            <?php
                            
                                $host=conectar_servidor();
                                conectar_base($host);
                                $tabla_v="ventas";
                                
                                $conteo=  contar_registros($tabla_v);
                                $consecutivo=$conteo+1;
                                
                                
                            echo "<input type='text' name='consecutivo' value='$consecutivo' readonly='readonly'"
                                    . "style='text-align:end;padding-right:10px;'/>";
                            
                            mysql_close($host);
                            
                            ?>
                            </td>
                            <td>
                                <?php
                                $fecha=date("d-m-Y");
                                echo "Fecha:<input type='text' name='fecha' value='$fecha'/>";
                                ?>
                            </td>
                            <td>
                              
                                <input type="text" name="user" value="Tu Usuario Aqui" onfocus="if(this.value==='Tu Usuario Aqui')this.value=''"/>
                            
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <fieldset><legend>Cliente</legend>
                                    
                                    <table>
                                        <tr>
                                            <td colspan="2" class="labelright"><label>Cod. Cliente</label></td>    
                                            <td colspan="2"><input name="codcliente" type="text" style="display:inline-block;"/>
                                                <input type="image" name="autocompletar" src="Imagenes/autocomplete.png"
                                                       style="width:25px;height:25px;display:inline-block;position:absolute;"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="labelright"><label>Nombre</label></td>
                                            <td colspan="2"><input name="nomcliente" type="text"/></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="labelright"><label>NIT</label></td>
                                            <td colspan="2"><input name="NIP" type="text"/></td>
                                        </tr>
                                        <tr>
                                            <td class="labelright">
                                                <label>Telefono</label>
                                            </td>
                                            <td>
                                                <input name="telcliente" type="text"/>
                                            </td>
                                            <td class="labelright">
                                                <label>Dirección</label>
                                            </td>
                                            <td>
                                                <input name="dircliente" type="text"/>
                                            </td>
                                        </tr>
                                    </table>
                                    
                                </fieldset></td>
                            <td><fieldset><legend>Detalle de Venta</legend>
                                    <table>
                                        <tr>
                                            <td class="labelright"><label>Sistema de Pago</label></td>
                                            <td>
                                                <select name="sistemapago">
                                                    <option value="Contado">Contado</option>
                                                    <option value="Credito">Credito</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="labelright">
                                                <label>Plazo</label>
                                            </td>
                                            <td>
                                                <input name="plazo_deuda" type="date"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="labelright"><label>Cuota</label>
                                            </td>
                                            <td>
                                                <select name="frecu_cobro">
                                                    <option value="semanal">Semanal</option>
                                                    <option value="quincena">Quincenal</option>
                                                    <option value="mensual">Mensual</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                                </fieldset>
                            </td>
                        </tr>
                        <tr>
                            
                            
                            <td colspan="3"
                                style="
                                margin: 0;
                                padding: 0;
                                height:200px;
                                //overflow:auto;
                                ">
                                
                             <iframe src="tabla_surtido.php" sandbox="allow-scripts allow-forms 
                                            allow-same-origin"
                                            name="surtido"
                                            style="margin: 0; padding: 0; width: 100%; height:100%;
                                        display: inline-block; position: relative; float: left;">
                             </iframe>
                             
                            </td>
                            
                         </tr>
                        
                        
                        <tr>
                            <td colspan="3">
                        <center>
                                <input type="submit" name="action" value="Facturar" class="boton"/>
                                <input type="reset" value="Borrar Todo" class="boton"/>
                                <input type="button" value="Cancelar" onclick="Location.href='FormExcel.php'" class="boton"/>
                                
                        </center>
                    </td>
                        </tr>
                    </table>
                    
                </form>
    
    
    <!--<form action="tabla_surtido.php" method="post">
                <div id="cuadro_insercion" 
                     style="
                     position: absolute;
                     right: -8%;
                     bottom: 30%;
                     ">
                    
                    <table style="margin:0;padding:0;">
                        <caption>Busqueda por Nombre</caption>
                        <tr>
                            <td>
                                <label>
                                    Elige producto
                                </label>
                                <php
                                
                                $conex=conectar_servidor();
                                conectar_base($conex);
                                
                                $tabla_art="articulos";
                                $surtido=extraer_datos($tabla_art);
                                
                                echo "<select name='codart'>";
                                
                                while ($option=mysql_fetch_array($surtido)){
                                    $value="$option[Descripcion]";
                                    echo "<option value='$value'>$value</option>";
                                }                                
                                
                                echo "</select>";
                                
                                mysql_close($conex);
                                
                                ?>
                                
                        </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <input type="image" name="ingresar" src="Imagenes/add.png" alt="añadir"
                                       style="width:30%;height:40%;"/>
                                <input type="reset" value="borrar"/>
                            </td>
                        </tr>
                    </table>
            </div>
    </form>-->
                    
            <?php
            
              generar_pie();
