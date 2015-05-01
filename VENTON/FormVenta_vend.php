<!DOCTYPE html>
<!--			Etiqueta <datalist><option></option></datalist>      Una lista de Selecciones 

                                                <select required></select>  //obliga a que este campo sea diligenciado

-->

<?php session_start(); ?>

<html>
    <head>
        <title>Ventas</title>
    
        <style>
            #instruct{
                 font-size:90%;
                 text-align:justify;
                 display:inline-block;
            }
            #instruct{
                background-image: url("Imagenes/add.png");
                background-repeat: no-repeat;
                background-position: center;
                background-size: 40%;
            }
            #instruct > #p_hid{
                display: none;
                position: absolute;
                z-index: 4;
                background-color:#DF7220;
                font-weight: bolder;
            }
            #instruct:hover #p_hid{
                display: block;
            }
        </style>    
       
        
    
    <?php
            include_once 'Recursos/FuncionEntorno_encabezado_vend.php';
            include_once 'Recursos/FuncionEntorno_pie.php';
            include 'Recursos/ConexionBD.php';
            
            generar_encabezado();
            
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
          total.value=valortot1.value+valortot2.value+valortot3.value+valortot4.value
          +valortot5.value+valortot6.value+valortot7.value;
          ">
        
        
        <input type="text" name="post" value="FormVenta_vend.php" style="display:none;position:absolute;"/>
        
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
                            <td>    <!--   onfocus='if(this.value==='Tu Usuario Aqui')this.value=''     -->
                                <label>Usuario:</label>
                                
                              <?php     //para que borre lo que esta escrito en el input
                              echo "
                                <input type='text' name='user' value='".$_SESSION['usuario']."' readonly='readonly'/>
                              ";
                               ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <fieldset><legend>Cliente</legend>
                                    
                                    <table>
                                        <tr>
                                            <!--<td colspan="2" class="labelright">
                                        
                                                <label style="display: inline-block;"> Cliente:</label>
                                                <!--<input name="codcliente_new" type="text" 
                                                       style="display:inline-block;width:80px;"/>
                                       
                                            </td>-->
                                            
                                            <td colspan="3">
                                                <!--<label>Cod. Clientes Registrados</label><br>
                                        
                                            <select name="codcliente" style="display:inline-block;">
                                                    
                                                    <?php
                                                    
                                                    /*conex();//Conexion Servidor-Base de Datos
                                                    
                                                    $datos=extraer_datos("clientes");
                                                    
                                                    while ($f=mysql_fetch_array($datos)){
                                                        echo "<option value='$f[codcliente]'>Cod: $f[codcliente], Nom: $f[nombre]</option>";
                                                    }
                                                    
                                                    mysql_close();*/
                                                    
                                                    ?>
                                                    
                                            </select>-->
                                        
                                                
                                                <!--<input name="codcliente" type="text" 
                                                       style="display:inline-block;"/>-->
                                            <!--Auto-Completar
                                            <input type="image" name="autocompletar" src="Imagenes/autocomplete.png" alt="autocompletar"
                                                       style="width:25px;height:25px;display:inline-block;"/>-->
                                        
                                        
                                            </td>
                                            
                                            <td id="instruct">
                                                <label>Tipo de Venta</label><br>
                                                
                                                <p id="p_vis">
                                                    Si es una venta particular
                                                    no necesitas especificar codigo de cliente,
                                                    de lo contrario elige al cliente y dale AutoCompletar
                                                    <!--<img src="Imagenes/add.png" title="Más" id="more" 
                                                         style="width:20px;height:20px;display:inline-block"/>-->
                                                </p>
                                                <p id="p_hid">
                                                    Si necesitas Registrar un Nuevo Cliente debes dirigirte
                                                    a Menu/Movimientos/Clientes
                                                </p>
                                               
                                        <!--<center>A Cliente<br>
                                                <input type="radio" name="tipo_venta" value="client"/><br>
                                                A Particular<br>
                                                <input type="radio" name="tipo_venta" value="part"/>
                                        </center>-->
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
                                                <label>Direccion</label>
                                            </td>
                                            <td>
                                                <input name="dircliente" type="text"/>
                                            </td>
                                        </tr>
                                        <!--<tr>
                                            <td colspan="2" class="labelright">
                                                <label>El Cliente no está en la Base de Datos</label>                                                
                                            </td>
                                            <td colspan="2">
                                                Registrar como Nuevo
                                                <input type="radio" name="new_client" value="yes"/>
                                                Venta Particular
                                                <input type="radio" name="new_client" value="not"/>
                                                
                                            </td>
                                        </tr>-->
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
                                
                                <table id="tabla_surtido" style="border:0;">
            
            <tr>
                <th class="numeral">Art No.</th>
                <th class="numeral">Codigo</th>
                <th class="texto">Descripcion</th>
                <th class="numeral">Cantidad</th>
                <th class="numeral">Precio UND</th>
                <th class="numeral">Total</th>
            </tr>
            
            
            
            <?php
            
            
                            // numero de filas de la tabla de productos
            for($i=1;$i<=5;$i++){
                        
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
                    
                                
                                echo "<select name='desc$i' style='width:99%;border-radius:8px;'>";
                                
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
            
            <tr>
                <td colspan="5" class="labelright">
                    <label>Total:</label>
                </td>
                <td>
                    <output name="total" for="valortot1 valortot2 valortot3 valortot4 
                            valortot5 valortot6 valortot7" id="total"></output> 
                </td>
            </tr>
                    
                                 </table>
                                
                                
                            </td>
                        
                            
                            <!--<td>
                            </td>-->
                            
                        </tr>
                        
                        
                        <tr>
                            <td colspan="3">
                        <center>
                                <input type="submit" name="facturar" value="Facturar" class="boton"/>
                                <input type="reset" value="Borrar Todo" class="boton"/>
                                <input type="button" value="Cancelar" onclick="Location.href='indexAdmin.php'" class="boton"/>
                                
                        </center>
                    </td>
                        </tr>
                    </table>
                    
                </form>
    
    <!--FORMULARIO DE AUTOCOMPLETAR-->
    <form action="Vendiendo.php" method="post" 
          style="
          position:absolute;
          top: 108px;
          left: 4%;">
        
        <label>Cod. Clientes Registrados</label><br>
        <center>
         <select name="codcliente" style="display:inline-block;">
             <?php
             
             conex();//Conexion Servidor-Base de Datos
               
              $datos=extraer_datos("clientes");
               
              while ($f=mysql_fetch_array($datos)){
               
              echo "<option value='$f[codcliente]'>Cod: $f[codcliente], Nom: $f[nombre]</option>";
              
              }
              
              mysql_close();
              
             ?>
         </select>
        
        <input type="image" name="autocompletar" src="Imagenes/autocomplete.png" title="AutoCompletar" alt="autocompletar" 
               style="width:25px;height:25px;display:inline-block;"/>
        </center>
        
        
        <input type="text" name="post" value="FormVenta_vend.php" style="display:none;position:absolute;"/>
        
        
    </form>
    
                    
            <?php
            
              generar_pie();
            
            