<!DOCTYPE html>
<!--			Etiqueta <datalist><option></option></datalist>      Una lista de Selecciones

                                                <select required></select>  //obliga a que este campo sea diligenciado

-->



<html>
    <head>
        <title>Cuadre de Caja</title>

    <?php
            include_once 'Recursos/FuncionEntorno_encabezado_admin.php';
            include_once 'Recursos/FuncionEntorno_pie.php';
            
            generar_encabezado();
            
            ?>

        
       
    <form action="FormArqueo.php" method="post" id="Arqueo">
        
        <table>
            
            <caption>Cuadre de Caja</caption>
            
            <tr>
                <td rowspan="4" style="padding-top:10px;">
                    
            <center><h2>Cuadre de Caja</h2></center>
                    
                    <div style="top:10px;">
                        
                    <fieldset id="cierre_admin">
                        <legend>Cierre Dia</legend>
                        <center>
                            <input type="button" value="Cierre" class="boton"
                                   onclick="document.getElementById('cierre_admin').innerHTML='\n\
<label>Codigo Administrador</label>\n\
<input type=\'password\'/> <input type=\'submit\' name=\'cuadre_dia\' value=\'Autorizar\' class=\'boton\'/>'"/>
                        </center>
                    </fieldset>
                    
                    <br>
                    
                    <fieldset>
                        <legend>Por Fecha</legend>
                        <label>Fecha Final:</label>
                        <input type="date" NAME="cierre_fch_ini"/>
                        <br>
                        <label>Fecha Inicial:</label>
                        <input type="date" NAME="cierre_fch_fin"/>
                    </fieldset>
            
                    </div>
                    
                </td>
                
                <td style="width:50%;padding:0;">
                    <table style="padding:0;">
                        <caption>Ventas Realizadas</caption>
                        <tr>
                            <th>Art</th>
                            <th>Fecha</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Costo</th>
                        </tr>
                        <tr>
                            <td colspan="5">
                                <select size="5">
                                    <option></option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </td>
                
            </tr>
            
            <tr>
                <td>
            <center><label>Balance:</label></center>
                </td>
            </tr>
            
            <tr>
                <td>
                    <table style="padding:0;">
                        <caption>Articulos Adquiridos</caption>
                        <tr>
                            <th>Art</th>
                            <th>Fecha</th>
                            <th>Cantidad</th>
                            <th>Costo</th>
                            <th>Precio</th>
                        </tr>
                        <tr>
                            <td colspan="5">
                                <select size="5">
                                    <option></option>
                                </select>
                            </td>
                        </tr>
                    </table>                    
                </td>
            </tr>
            
            <tr>
                <td>
            <center><label>Balance:</label></center>
                </td>
            </tr>
            
            <tr>
                <td colspan="2">
                    <center>
                        <input type="submit" NAME="reporte" value="Reporte" class="boton"/>
                        <input type="reset" value="Limpiar" class="boton"/>
                        <input type="button" value="Salir" onclick="location.href='FormVenta.php'" class="boton"/>
                    </center>
                </td>
            </tr>
            
        </table>
        
    </form>
       
        
        
        
        
        
        <?php
        
            generar_pie();