<!DOCTYPE html>
<!--			Etiqueta <datalist><option></option></datalist>      Una lista de Selecciones

                                                <select required></select>  //obliga a que este campo sea diligenciado

-->



<html>
    <head>
        <title>Inventario</title>

    <!--</head>-->
   
            <?php
            include_once 'Recursos/FuncionEntorno_encabezado.php';
            include_once 'Recursos/FuncionEntorno_pie.php';
            
            generar_encabezado();
            
            ?>

    
    
    <form action="FormInventario.php" method="post" id="FormInventario">
        
        <table style="border-spacing:10px;">
            <tr>
                <td style="height:50%;">    <!--primer celda izq-sup-->
                    
                   <table>
                       
                       <caption>
                           <span style="font-size:120%;font-weight:bolder;">
                               Activos Movibles
                           </span>
                           <br>
                           <span style="font-size:90%;">(articulos en venta/stock)</span>
                       </caption>
                       <tr>
                           
                           <td>
                       <label>Consultar Inventario por:</label>
                           </td>
                           
                           <td>
                               <select NAME="consul_invent" style="display:inline-block;">
                           <option value="abc">Orden Alfabético</option>
                           <option value="fch_ingreso">Fecha de Ingreso</option>
                           <option value="fch_venc">Fecha de Vencimiento</option>
                           <option value="prov">Proveedor</option>
                       </select>
                               
                               <div style="display:inline-block;" id="info">
                                   <style>
                                       #info p{
                                           width:110px;
                                           height:110px;
                                           display:none;
                                           position:absolute;
                                           z-index:3;
                                           background-color:wheat;
                                           font-weight:bolder;
                                       }
                                       #info:hover > p{
                                           display:block;
                                       }
                                   </style>
                                   
                                   <img src="Imagenes/info.png" style="width:15px;height:15px;" alt="info"/>
                                   
                                   <p>Puedes Especificar la fecha o el proveedor en el siguiente campo</p>
                                   
                               </div>
                               
                           </td>
                       </tr>
                       
                       <tr>
                           <td>
                       <label>Búsqueda Especifica:</label>
                           </td>
                           <td>
                       <input type="text" NAME="busq_invent"/>
                           </td>
                       <tr>
                           <td colspan="2" style="padding:0;">
                       <center><input type="submit" name="buscar_en_invent" value="Revisar" class="boton"/></center>
                           </td>
                       </tr>
                       
                   </table>
                    
                </td>
                
                <td rowspan="2" style="width:50%;">
                    <div id="nota_invent" style="position:relative;height:100%;">
                        <style>
                            #nota_invent ul li p{
                                display:none;
                                position:absolute;
                                z-index:3;
                                background-color:#DFE3DF;
                                color:#1C22D3;
                                width:200px;
                                height:50px;
                            }
                            #nota_invent ul li:hover > p{
                                display:block;
                            }
                        </style>
                        <ul>
                        <li>Nota!
                            <p>Si Eliges Fechas la lista ira en orden descendente desde la mas reciente a la mas antigua</p>
                        </li>
                        </ul>
                    
                        <table style="min-height:100%;">
                        <tr>
                            <th>PLU</th>
                            <th>Descripcion</th>
                            <th>Cantidad</th>
                            <th>Stock Ideal</th>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <select size="10" style="width:100%;">
                                    
                        <?php 
                       for($i=1;$i<=5;$i++){ 
            echo "
                           <option>$i</option>
                  ";
                       }
                        ?>
                                </select>
                            </td>
                        </tr>
                    </table>
                    
                        </div>
                    
                    
                    
                        
                </td>
            </tr>
            
            <tr>
                <td style="height:50%;">
                    
                    <table>
                        <caption>
                            <span style="font-size:120%;font-weight:bolder;">
                                Activos Fijos
                            </span>
                            <br>
                            (recurso interno)
                        </caption>
                        <tr>
                            <td style="border:0;">
                        <center><label>Equipos</label></center>
                            </td>
                            <td style="border:0;">
                        <center><label>Insumos</label></center>
                            </td>
                        </tr>
                        <tr>
                            <td style="border:0;">
                        <center><input type="radio" name="interno" value="equipo"/></center>
                            </td>
                            <td style="border:0;">
                        <center><input type="radio" name="interno" value="insumo"/></center>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                        <center><input type="submit" name="insumos" value="Revisar" class="boton"/></center>
                            </td>
                        </tr>
                        
                    </table>
                    
                </td>
            </tr>
            
            <tr>
                <td colspan="2" style="padding:0;">
            <center><input type="submit" NAME="generar_reporte" value="Generar Reporte" class="boton" style="min-width:150px;"/></center> 
                </td>
            </tr>
            
        </table>        
        
    </form>    
    
    <?php
    
        generar_pie();
    
   