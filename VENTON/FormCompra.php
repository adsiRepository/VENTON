<!DOCTYPE html>
<!--			Etiqueta <datalist><option></option></datalist>      Una lista de Selecciones 

                                                <select required></select>  //obliga a que este campo sea diligenciado

-->

<?php session_start(); ?>

<html>
    <head>
        <title>Compras e Ingresos</title>
        <style>
            #form form table{
                height:99%;
            }
            td{
                width:20%;
            }
            input, textarea{
                width: 97%;
            }
        </style>
       


        <?php
        include_once 'Recursos/FuncionEntorno_encabezado_admin.php';
        include_once 'Recursos/FuncionEntorno_pie.php';

        generar_encabezado();
        
        ?>

        <!--  **********************************************************************-->

        <!--          FORMULARIO CENTRAL           -->


        <!--FormCliente-->



    <form id="formCompra" action="newProveedor.php" method="post"
          oninput="
          total0.value=parseInt(cantidad0.value)*parseInt(costo0.value);
          total1.value=parseInt(cantidad1.value)*parseInt(costo1.value);
          total2.value=parseInt(cantidad2.value)*parseInt(costo2.value);
          total3.value=parseInt(cantidad3.value)*parseInt(costo3.value);
          ">
        

        <table>
            <caption style="height:2%;background-color:coral;"></caption>
            <tr>
                <td>

                    <table>
                        <caption>Registro proveedor</caption>
                        <tr>
                            <!--<td colspan="2" rowspan="2"></td>-->                                        <!--CC o Nit del proveedor-->
                            <td class="labelright">
                                <label>NIT ó CC:</label>
                            </td>
                            <td>
                                <input class="insert" name="nip_prov" type="text" value=""/>
                            </td>
                            
                            <td class="labelright">
                                <label>codigo</label>
                            </td>
                            <td>
                                <input class="insert" name="codproveedor" type="text"/>
                            </td>
                        </tr>                                                                                               <!--id de proveedor en la base de datos -->

                        <tr>
                            <td class="labelright">
                                <label>Razon Social/Nombre:</label>
                            </td>
                            <td>
                                <input class="insert" name="nomprov" type="text"/>
                            </td>
                        </tr>

                        <tr>
                            <td class="labelright">
                                <label>Direccion:</label>
                            </td>
                            <td>
                                <input class="insert" name="dirprov" type="text"/>
                            </td>
                            
                            <td class="labelright">
                                <label>Sistema de Pago</label>
                            </td>
                            <td>
                                <select name="sistemapago">
                                    <option value="Credito">Credito</option>
                                    <option value="Contado">Contado</option>
                                </select>
                            </td>   
                        </tr>
                        
                        <tr>
                            <td class="labelright">
                                <label>Ciudad:</label>
                            </td>
                            <td>
                                <input class="insert" name="ciudadproveedor" type="text"/>
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="labelright">
                                <label>Telefono(s):</label>
                            </td>
                            <td>
                                <input class="insert" name="telproveedor" type="text" value=""/>
                            </td>
                            
                            <td class="labelright">
                                <label>E-mail:</label>
                            </td>
                            <td>
                                <input class="insert" name="emailproveedor" type="email" placeholder="ejemplo@email.com"/>
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="labelright">
                                <label>Fecha:</label>
                            </td>
                            <td>
                                <input class="insert" name="fecharegistro" type="date"/>
                            </td>
                            <td>
                                <div id="tot"></div>
                                
                                <!--<output name="tot" id="tot"></output>-->
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="labelright">
                                <label>Observaciones:</label>
                            </td>
                            <td colspan="3">
                                <textarea name="descprov" cols="50" rows="3"></textarea>
                            </td>
                        </tr>

                    </table>
                
                </td>
            </tr>
            
            <tr>
                <td>

                    <style>
                        #desccompra td{
                            border: 1px solid greenyellow;
                            padding: 2px;
                            width: 16.6%;
                        }
                    </style>

                    <table id="desccompra">
                        <caption>Registro producto</caption>
                        
                        <tr>
                            <th><center>PLU</center></th>
                    <th><center>Descripcion</center></th>
                    <th><center>Cantidad</center></th>
                    <th><center>Costo</center></th>
                    <th><center>Preventa</center></th>
                    <th><center>Total</center></th>
                    </tr>
                
                <?php
                
                for($c=0;$c<4;$c++){
            echo " <tr>   
                <td>
                    <input type='text' name='plu$c' class='insert'/>
                </td>
                <td>
                    <textarea name='desproducto$c' cols='30' rows='2'></textarea>
                </td>
                <td>
                    <input type=text' name='cantidad$c' class='insert'/>
                </td>
                <td>
                    <input type='text' name='costo$c' class='insert'/>
                </td>
                <td>
                    <input type='text' name='preventa$c' class='insert'/>
                </td>
                <td>
                    <output name='total$c' id='total$c' for='cantidad$c costo$c' class='insert'></output>
                </td></tr>
                
";
                }
                
                ?>
                
	

            <tr>

                <td colspan="6">
            <center>
                <div>
                <input type="submit" name="guardar" value="Guardar" class="boton" id="guardar" style="max-width:120px;"/>
                <input type="reset" name="borrar" value="Borrar" class="boton" id="borrar" style="max-width:120px;"/> 
                <input type="button" value="Inventario" onclick="window.location='Inventario.php'" class="boton" id="imprimir" style="max-width:120px;"/>
                <input type="button" value="Salir" onclick="window.location.href='indexAdmin.php'" class="boton" style="max-width:120px;"/>
                </div>
            </center>
            </td>

            </tr>	


        </table>



    </td>
</tr>
</table>

</form> 

<?php
generar_pie();
