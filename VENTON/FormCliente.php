<!DOCTYPE html>
<!--			Etiqueta <datalist><option></option></datalist>      Una lista de Selecciones 

                                                <select required></select>  //obliga a que este campo sea diligenciado

-->

<?php session_start(); ?>

<html>
    <head>
        <title>Registro de Clientes</title>
    

    <?php
            include_once 'Recursos/FuncionEntorno_encabezado_admin.php';
            include_once 'Recursos/FuncionEntorno_pie.php';
            include 'Recursos/ConexionBD.php';
            
            
            generar_encabezado();
            
    ?>
                
   

                <!--FormCliente-->

    <form id="formCliente" action="newCliente.php" method="post">
                    <table>
                        <caption>Clientes</caption>
                        <tr>
                            <td colspan="2" rowspan="2"></td>
                            <td class="labelright">
                                <label>Codigo Cliente:</label>
                            </td>
                            <td>
                                <?php
                                
                                
                                if(($contact=conectar_servidor())==FALSE){
                                    echo "
                   <input type='text' name='codcliente_c' style='text-align:end;padding-right:13px;'/>
                                ";
                                }else{     
                                            conectar_base($contact);
                                            $tabla_consulta="clientes";
                                            $conteo=contar_registros($tabla_consulta);
                                            $num_cliente=$conteo+1;
                                            echo "
                                <input class='insert' name='codcliente_c' type='text' value='$num_cliente'
                                    style='text-align:end;padding-right:13px;'/>
                                       <!--onfocus=\"if(this.value==='Siguiente Registro')this.value=''\"-->
                                            ";
                                            
                                            mysql_close($contact);
                                        
                                }
                                                         ?>
                                
                            </td>
                        </tr>
                        <tr>
                            <td class="labelright">
                                <label>Fecha:</label>
                            </td>
                            <td>
                                <input class="insert" name="fecharegistro_c" type="date"/>
                            </td>
                        </tr>
                        <tr>
                            <td class="labelright">
                                <label>Nombre/Razon Social:</label>
                            </td>
                            <td>
                                <input class="insert" name="nomcliente_c" type="text"/>
                            </td>
                            <td class="labelright">
                                <label>CC/NIT:</label>
                            </td>
                            <td>
                                <input class="insert" name="NIP_c" type="text"/>
                            </td>

                        </tr>
                        <tr>
                            <td class="labelright">
                                <label>Domicilio:</label>
                            </td>
                            <td>
                                <input class="insert" name="dircliente_c" type="text"/>
                            </td>
                            <td class="labelright">
                                <label>Ciudad:</label>
                            </td>
                            <td>
                                <input class="insert" name="ciudadcliente_c" type="text"/>
                            </td>
                        </tr>
                        <tr>
                            <td class="labelright">
                                <label>Telefono(s):</label>
                            </td>
                            <td>
                                <input class="insert" name="telcliente_c" type="text" value=" / "/>
                            </td>
                            <td class="labelright">
                                <label>E-mail:</label>
                            </td>
                            <td>
                                <input class="insert" name="emailcliente_c" type="email"/>
                            </td>
                        </tr>
                        <tr>
                            <td class="labelright">
                                <label>Observaciones:</label>
                            </td>
                            <td colspan="2">
                                <textarea name="desclient_c" cols="30" rows="5"></textarea>
                            </td>
                            
                            <td id="contact" rowspan="2">
                                <table>
                                    <caption>Contacto Personal</caption>
                                    <tr>
                                        <td class="labelright">
                                            <label>Nombre:</label>
                                        </td>
                                        <td>
                                            <input class="insert" name="nomcontac_c" type="text"/>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="labelright">
                                            <label>Teléfono:</label>
                                        </td>
                                        <td>
                                            <input class="insert" name="telcontac_c" type="text"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="labelright">
                                            <label>Relación:</label>
                                        </td>
                                        <td>
                                            <input class="insert" name="parentesco_c" type="text"/>
                                        </td>
                                    </tr>
                                </table>
                                
                            </td>
                            
                        </tr>
                        <tr>
                            
                            <td colspan="3">
                                
                                <table id="detcliente">
                                    <tr>
                                        <td style="text-align:center;width:50%;">
                                            <label>Sistema de Pago</label>
                                        </td>
                                        <td style="text-align:center;">
                                            <label>Cuenta Cliente</label>
                                        </td>
                                        <!--<td style="text-align:center;">
                                            <label>Estado de Cuenta</label>
                                        </td>-->
                                    </tr>
                                    <tr>
                                        <td>
                                    <center>
                                        <select name="sistpago_c">
                                            <option value="Credito">Credito</option>
                                            <option value="Contado">Contado</option>
                                        </select>
                                    </center>
                                        </td>
                                        <td>
                                        <center>
                                            <input type="text" NAME="cuentaCli_num_c" class="insert"/>
                                        </center>
                                        </td>
                                        <!--<td>
                                    <center>
                                            <php echo "
                                            <textarea NAME='estadoCuenta' cols='15' rows='2' readonly='readonly'>
                                            </textarea>
                                            ";?>
                                    </center>
                                        </td>-->
                                    </tr>
                                </table>
                    </td>
                    </tr>
                    <tr>
                        
                        <td colspan="4">
                    <center>
                            <div id="consola">
                                <input type="submit" name="guardar" value="Guardar" class="boton" id="guardar"/>
                                <input type="reset" name="borrar" value="Borrar" class="boton" id="borrar"/> 
                                <!--<input type="submit" name="buscar" value="Buscar" class="boton" id="buscar"/>
                                <input type="button" name="imprimir" value="Imprimir" class="boton" id="imprimir"/>
                                <input type="reset" name="regresar" value="Regresar" class="boton" id="regresar"/>-->
                            </div>
                    </center>
                        </td>
                        
                    </tr>

                    </table>

                </form>
          
   

<?php

generar_pie();





