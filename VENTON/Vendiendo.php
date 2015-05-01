<!DOCTYPE html>
<!--			Etiqueta <datalist><option></option></datalist>      Una lista de Selecciones 

                                                <select required></select>  //obliga a que este campo sea diligenciado

-->

<?php session_start(); ?>

<html>
    <head>
        <title>Ventas</title>
    
<?php
            include_once 'Recursos/FuncionEntorno_encabezado_vend.php';
            include_once 'Recursos/FuncionEntorno_pie.php';
            include 'Recursos/ConexionBD.php';
            
            generar_encabezado();
            
            $cod=$_REQUEST['codcliente'];
            
            conex();
            
            $datos_clnt=seleccionar_registro("codcliente", "clientes", $cod);//columna, tabla en la que va a buscar, valor de referencia
            
            while($f=mysql_fetch_array($datos_clnt)){
                $nom_clnt="$f[nombre]";
                $id_clnt="$f[nip]";
                $tel_clnt="$f[telefono]";
                $dir_clnt="$f[domicilio]";
            }
            
            ?>
        
    <form action="venta.php" id="FormVenta" method="post" style="height: 100%;"
          oninput=" 
          valortot1.value=parseInt(cant1.value)*parseInt(vlrund1.value);
          valortot2.value=parseInt(cant2.value)*parseInt(vlrund2.value);
          valortot3.value=parseInt(cant3.value)*parseInt(vlrund3.value);
          valortot4.value=parseInt(cant4.value)*parseInt(vlrund4.value);
          valortot5.value=parseInt(cant5.value)*parseInt(vlrund5.value);
          valortot6.value=parseInt(cant6.value)*parseInt(vlrund6.value);
          valortot7.value=parseInt(cant7.value)*parseInt(vlrund7.value);
          ">
     
        <?php
        echo "
        
        <input type='text' name='post' value='".$_REQUEST['post']."' style='display:none;position:absolute;'/>
        
        ";
        ?>
        
                    <table>
                        <tr>
                            <td>
                                <label>Factura No.</label><!--<input type="text" name="codfactura" />-->
                            <?php
                            
                                $host=conectar_servidor();
                                conectar_base($host);
                                $tabla="ventas";
                                
                                $conteo=  contar_registros($tabla);
                                $consecutivo=$conteo+1;
                                
                                
                            echo "<input type='text' name='consecutivo' value='$consecutivo' readonly='readonly'"
                                    . "style='text-align:end;padding-right:10px;'/>";
                            
                            mysql_close($host);
                            
                            ?>
                            </td>
                            <td>
                                <?php
                                //$fecha=date("d-m-Y");
                                
                                date_default_timezone_set("America/Bogota");
                                setlocale(LC_TIME, "spanish");
                                
                                $fecha = strftime("%d/%b/%Y");
                                
                                echo "Fecha:<input type='text' name='fecha' value='$fecha'/>";
                                ?>
                            </td>
                            <td>
                              
                                <input type="text" name="user" value="Tu Usuario Aqui" onfocus="if(this.value==='Tu Usuario Aqui')this.value=''"/>
                            
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="labelright">
                                <fieldset><legend>Cliente</legend>
                                    
                                    <table>
                                        <tr>
                                            <td colspan="2">
                                                
                                                <label>Codigo Cliente:</label>
                                        
                                            </td>
                                            <td colspan="2">
                                                <?php
                                                echo "
                                               <input name='codcliente' type='text' 
                                                      style='display:inline-block;' value='$cod'/> 
                                               ";
                                               ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="labelright">
                                                <label>Nombre</label>
                                            </td>
                                            
                                            <td colspan="2">
                                                <?php
                                                echo "
                                                <input name='nomcliente' type='text' value='$nom_clnt'/>
                                                ";
                                                ?>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="labelright">
                                                <label>NIT</label>
                                            </td>
                                            <td colspan="2">
                                                <?php
                                                echo "
                                                <input name='NIP' type='text' value='$id_clnt'/>
                                                ";
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="labelright">
                                                <label>Telefono</label>
                                            </td>
                                            <td>
                                                <?php
                                                echo "
                                                <input name='telcliente' type='text' value='$tel_clnt'/>
                                                ";
                                                ?>
                                            </td>
                                            <td class="labelright">
                                                <label>Dirección</label>
                                            </td>
                                            <td>
                                                <?php
                                                echo "
                                                <input name='dircliente' type='text' value='$dir_clnt'/>
                                                ";
                                                ?>
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
                                overflow:auto;
                                ">
                                
           <table id="tabla_surtido">
            
            <tr>
                <th class="numeral">Art No.</th>
                <th class="numeral">Código</th>
                <th class="texto">Descripcion</th>
                <th class="numeral">Cantidad</th>
                <th class="numeral">Precio UND</th>
                <th class="numeral">Total</th>
            </tr>
            
            
            
            <?php
            
            
                            // numero de filas de la tabla de productos
            for($i=1;$i<=7;$i++){
                        
                    echo "
                            <tr>
                            <td>$i</td>
                                
                                <td>
                                
                                ";
                        
                        /*while ($option=mysql_fetch_array($surtido)){
                                    $cod_art="$option[Cod]";
                                    echo $cod_art;       
                        }*/
                        
                        echo "

<input type='text' name='codart$i' id='codart$i' value='' 
    style='width:94%;margin-right=0;border:0;'/>
    
                                </td>
                                                                

                                <td>
                                <!--<input type='text' name='art' style='width:98%;'/>-->

                                 ";
                        
                    $conex=conectar_servidor();
                                
                    conectar_base($conex);
                                
                    $tabla="articulos";
                    
                    $surtido=extraer_datos($tabla);
                    
                                
                                echo "<select name='codart' style='width:99%;border-radius:8px;'>";
                                
                                while ($option=mysql_fetch_array($surtido)){
                                    $code="$option[Cod]";
                                    $value="$option[Descripcion]";
                                    $precio="$option[Precio]";
                                    echo "<option value='$value'>Cod: $code, $value, Valor:$precio</option>";
                                }                                
                                
                                echo "</select>";
                                
                                mysql_close($conex);
               
                        
                        
                                echo "</td>
                                

                                <td>
                                
<input name='cant$i' id='cant$i' type='number' value='0' min='0' style='width:97%;margin-right=0px;'/>
                                
                                </td>
                                
                                
                                         
                                 <td>    ";

                        /*$con2=conectar_servidor();        
                        conectar_base($con2);*/
                        
                        //$vlrun = seleccionar_campo("Precio", $tabla, "Descripcion", $value);   
                        
                                echo"
                                
                                
<input type='text' id='vlrund$i' name='vlrund$i' value='' />                               
                                </td>
                                
                                <td>
<output name='valortot' for='cant vlrund' id='valortot$i'></output>
                                
                    </td>
                            </tr>
                            ";
                        
                    }
            
                   //mysql_close($conex); 
                    
            ?>
                    
                                 </table>
                                
                                
                            </td>
                        
                            
                            <!--<td>
                            </td>-->
                            
                        </tr>
                        
                        
                        <tr>
                            <td colspan="3">
                        <center>
                                <input type="submit" name="facturar_a_cliente" value="Facturar" class="boton"/>
                                <input type="reset" value="Borrar Todo" class="boton"/>
                                <input type="button" value="Cancelar" onclick="javascript:window.history.back();" class="boton"/>
                                
                        </center>
                    </td>
                        </tr>
                    </table>
                    
                </form>
                    
            <?php
            
              generar_pie();