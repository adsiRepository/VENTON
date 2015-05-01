<!DOCTYPE html>
<!--			Etiqueta <datalist><option></option></datalist>      Una lista de Selecciones

                                                <select required></select>  //obliga a que este campo sea diligenciado

-->

<?php session_start(); ?>

<html>
    <head>
        <title>Pagos</title>

    <?php
            include_once 'Recursos/FuncionEntorno_encabezado_admin.php';
            include_once 'Recursos/FuncionEntorno_pie.php';
            
            generar_encabezado();
            
            ?>

            <form action="FormPago.php" method="post" id="FormPago">
                                
                <table>
                    <caption>Pago de Cuentas y Servicios</caption>
                    
                    <tr>
                        <td style="text-align:right;" class="tdleft">Fecha:<p class="output" style="display: inline-block;text-align: right;margin-left: 5px;"><?php echo date('d/M/Y');?></p></td>
                        
                        <td rowspan="3" class="tdright">
                            
                            <table style="width: 96%;">
                                <caption>Detalle</caption>
                                
                                <tr>
                                    <td class="tdleft"><label>Proveedor</label></td>
                                    <td class="tdright"><p class="output"></p></td>
                                </tr>
                                
                                <tr>
                                    <td class="tdleft"><label>Monto</label></td>
                                    <td class="tdright"><p class="output"></p></td>
                                </tr>
                                
                                <tr>
                                    <td class="tdleft"><label>Concepto</label></td>
                                    <td class="tdright"><p class="output"></p></td>
                                </tr>
                                <tr>
                                    <td class="tdleft"><label>Fecha Transaccion</label></td>
                                    <td class="tdright"><p class="output"></td>
                                </tr>
                                <tr>
                                    <td class="tdleft"><label>Interes</label></td>
                                    <td class="tdright"><p class="output"></td>
                                </tr>
                                
                                
                                <tr>
                                    <td style="width:60%;" colspan="2">
                                        <table style="width: 98%;">
                                            <tr>
                                                
                                                <th class="numh">Art.</th>
                                                <th class="numh">Cant</th>
                                                <th class="numh">Costo Unt</th>
                                                <th class="numh">Costo Total</th>
                                            </tr>
											
                                            <tr>
                                                
                                                <td class="num"><p></p></td>
						<td class="num"><p></p></td>
						<td class="num"><p></p></td>
						<td class="num"><p></p></td>
                                            </tr>
											
                                            <tr>
                                                
                                                <td class="num"><p></p></td>
						<td class="num"><p></p></td>
						<td class="num"><p></p></td>
						<td class="num"><p></p></td>
                                            </tr>
											
                                            <tr>
						
                                                <td class="num"><p></p></td>
						<td class="num"><p></p></td>
						<td class="num"><p></p></td>
						<td class="num"><p></p></td>
                                            </tr>
											
                                        </table>
                                    </td>
                                </tr>
                                
                            </table>
                        </td>
                        
                    </tr>
                    
                    <tr>
                        <td class="tdleft" style="text-align:right;"> Total Adeuadado:<p class="output"></p></td>
                            <!--<input type="text" name="deuda" value="<?phpecho$deuda;?>" readonly style="text-align: right;"/>-->
                    </tr>
                    <tr>
                        
                        <td style="padding:0 0 0 0;height: 90%;">
                            
                            <table style="width:100%;height: 100%;">
                                <tr>
                                    
                                    <td style="padding:0 0 5px 0;height:10%;">
                                        
                            <label>Deudas:</label>
                            
                                    </td>
                                    
                                    <td rowspan="2" style="width: 30%;padding:0;">
                                        
                                <center><input type="image" name="revisar" src="Imagenes/arrow.png" style="width:50%; height:50%;margin:0;" class="boton"/></center>
                                
                                    </td>
                                </tr>
                                
                                <tr> 
                                    
                                    <td>
                            <select size="5">
                                <optgroup label="Proveedores">
                                <option>Familia</option>
                                <option>Nestle</option>
                                <option>Alpina</option>
                                </optgroup>
                                <optgroup label="Servicios">
                                    <option>Servicios Publicos</option>
                                    <option>Papeleria</option>
                                    <option>Bolsas</option>
                                </optgroup>
                            </select>
                                    </td>
                                    
                                </tr>
                                
                              <tr>
                                  <td colspan="2" style="padding:0;height:10%;">
                                      <label>Observaciones:</label>
                                  </td>
                              </tr>
                              <tr>
                                  <td colspan="2">
                                      <textarea cols="30" rows="5"></textarea>
                                  </td>
                              </tr>  
                                
                            </table>
                            
                            
                    <!--<tr style="height:5px;">
                        <td>
                                                        
                        </td>
                    </tr>-->
                            
                    
                    <tr>
                        <td colspan="2">
                    <center>
                            <div>
                                <input type="submit" name="pagar" value="Liquidar" class="boton"/>
                                <input type="submit" name="abonar" value="Abonar" class="boton"/>
                                <input type="reset" value="Limpiar" class="boton"/>
                                <input type="button" value="Salir" class="boton"/>
                            </div>
                    </center>
                        </td>
                    </tr>
                        
                </table>

            </form>

        <?php
        
            generar_pie();
        
        