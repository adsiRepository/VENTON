<!DOCTYPE html>
<!--			Etiqueta <datalist><option></option></datalist>      Una lista de Selecciones

                                                <select required></select>  //obliga a que este campo sea diligenciado

-->

<?php session_start(); ?>

<html>
    <head>
        <title>Inventario</title>
        <style>#form{height:100%;}</style>
    
   
            <?php
            include_once 'Recursos/FuncionEntorno_encabezado_admin.php';
            include_once 'Recursos/FuncionEntorno_pie.php';
            
            generar_encabezado();
            
            ?>
    
    <form>
        
        <table>
            <caption>Movimiento de Articulos entre Fechas</caption>
            <tr>
                <td>
            <center>
                <label>Ingresa Código del Articulo</label>
                    <input type="text" NAME="art_consultado"/>
                    <input type="submit" NAME="revisar" value="Consultar" class="boton"/>
            </center>
                </td>
                
                <td rowspan="4" style="width:50%;">
                
                <table>
                        <tr>
                            <th>Fecha</th>
                            <th>Movimiento</th>
                            <th>Cantidad</th>
                            <th>Costo</th>
                            <th>Proveedor</th>
                        </tr>
                        
                            <?php
                            for ($i=1;$i<=5;$i++){
                            echo "
                                <tr>
                            <td>
                                <p class='output'></p>
                            </td>
                            <td>
                                <p class='output'></p>
                            </td>
                            <td>
                                <p class='output'></p>
                            </td>
                            <td>
                                <p class='output'></p>
                            </td>
                            <td>
                                <p class='output'></p>
                            </td>
                            </tr>
                            ";
                            }
                            ?>
                        
                    </table>
                
        </td>
                
            </tr>
            
            <tr>
                <td>
                    Detalles
                    <table style="border:0;">
                        <tr>
                            <td style="width:33.3%;">
                                <label>Stock:</label>
                                <p class="output"></p>
                            </td>
                            <td style="width:33.3%;">
                                <label>Stock Minimo:</label>
                                <p class="output"></p>
                            </td>
                            <td style="width:33.3%;">
                                <label>Diferencia:</label>
                                <p class="output"></p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr>
                <td>
                    Rango de Busqueda
                    <table style="border:0;">
                        <tr>
                            <td>
                                <center>
                                    <label>Fecha Inicial</label>
                                    <input type="date" NAME="fch_ini"/>
                                </center>
                            </td>
                            <td>
                            <center>
                                <label>Fecha Final</label>
                                <input type="date" NAME="fch_fin"/>
                            </center>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr>
            <td>
                <center>
                <input type="submit" NAME="revisar" value="Revisar" class="boton"/>
                </center>
            </td>
            </tr>
            
            <tr>
                <td colspan="2">
                    <center>
                    <input type="submit" NAME="terminar" value="Reporte" class="boton"/>
                    <input type="reset" value="Borrar" class="boton"/>
                    </center>
                </td>
            </tr>
            
        </table>
        
        <table>
            <caption>Aplicar Inventario</caption>
            <tr><td>
                    <table>
                        <tr>
                            <th>Codigo</th>
                            <th>Descripcion</th>
                            <th>Cantidad</th>
                            <th>Stock</th>
                            <th>Diferencia</th>
                        </tr>
                        
                            <?php
                            for ($i=1;$i<=3;$i++){
                            echo "
                                <tr>
                            <td>
                                <input type='text' NAME='cod_invent'/>
                            </td>
                            <td>
                                <p class='output'></p>
                            </td>
                            <td>
                                <input type='text' NAME='cant_invent'/>
                            </td>
                            <td>
                                <p class='output'></p>
                            </td>
                            <td>
                                <p class='output'></p>
                            </td>
                            </tr>
                            ";
                            }
                            ?>
                        
                        
                    </table>
            </td>
            
                            <td style="width:20%;">
                                <center>
                                    <input type="submit" NAME="save_temp" value="Guardar" class="boton"/>
                                    <input type="submit" NAME="apply_temp" value="Aplicar" class="boton"/>
                                </center>
                            </td>
                            
                        </tr>
            
        </table>
        
    </form>
    
    
    

    <?php
    
        generar_pie();
        
       