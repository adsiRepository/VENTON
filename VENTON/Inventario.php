<!DOCTYPE html>
<!--			Etiqueta <datalist><option></option></datalist>      Una lista de Selecciones

                                                <select required></select>  //obliga a que este campo sea diligenciado

-->

<?php session_start(); ?>

<html>
    <head>
        <title>Inventario</title>
        <style type="text/css">
            .mod{
                width: 100%;
                //  margin-right: 5px;
            }
        </style>
    
   
            <?php
            include_once 'Recursos/FuncionEntorno_encabezado_admin.php';
            include_once 'Recursos/FuncionEntorno_pie.php';
            include 'Recursos/ConexionBD.php';
            
            generar_encabezado();
            
?>
         
        <form action="Modificaciones.php" style="border:0;">
        
            <table id="tabla_reporteVenta"
                   style="
                   border-spacing:10px;
                   ">
                <tr>
                    <th>Modifica</th>
                    <th>Codigo Articulo</th>
                    <th>Descripcion</th>
                    <th>Cantidad <br> Disponible</th>
                    <th>Precio Compra</th>
                    <th>Preventa</th>
                    <th>Codigo de Proveedor</th>
                </tr>
             
            <?php
            
            $tabla="articulos";
            
            conex();
            
            $registros = extraer_datos($tabla);
            
            
            $i=0;
            while ($dato = mysql_fetch_array($registros)){
                
                for($u=0;$u<6;$u++){
                    
                    $td[$u]="$dato[$u]";
                
                }
                
                echo "<tr>
                         <td style='text-align:center;'
                         ><input type='radio' name='select' value='$dato[0]'/></td>   ";
                
                for($u=0;$u<6;$u++){
                    
                    echo "<td>
                        $td[$u]
                      </td>
                     ";
                
                 }
                
                echo "</tr>";
                
                $i++;
                
            }
            
            ?>
           
                <tr>
                    <td></td>
                    <td><input type="text" name="newcode" class="mod"/></td>
                    <td><textarea name="newdes" cols="35"></textarea></td>
                    <td><input type="text" name="cant" class="mod"/></td>
                    <td></td>
                    <td><input type="text" name="newprice" class="mod"/></td>
                    <td><input type="text" name="refprov" class="mod"/></td>
                    
                </tr>      
                
                <tr>
                    <td colspan="7">
                       <center>
                           <input type="submit" name="cambiar" value="Cambiar" class="boton"/>
                           <input type="submit" name="eliminar" value="Eliminar" class="boton"/>
                           <input type="button" value="Salir" class="boton"
                                  onclick="window.location='indexAdmin.php'"/>
        </center> 
                    </td>
                </tr>
                
                
            </table>
    
    
    
    
    
     
        
        
        <!--<input type="text" name="references" class="mod"/>-->
        
        
        
        
   
    </form>
    
    
    
    
    
            
            <?php
                
            mysql_close();
            
            ?>
    
    
                
                <form action="Archivos/MadeFileVenton.php" method="post" id="go_report" name="go_report"
               style="
               top: -37px;
               position: absolute;
               right: 35%;
               
               "               
               >
        
        <input type="text" name="tabla" value="articulos" style="position:absolute;display:none;"/>
        <input type="text" name="nomFile" value="Articulos en Stock" style="position:absolute;display:none;"/>
        <input type="text" name="post" value="Inventario.php" style="position:absolute;display:none;"/>
    
        
        <input type="submit" name="ventas" value="Generar Archivo Descargable"
               style="
               padding: 15px;
               background-color: black;
               color: papayawhip;
               font-weight: bolder;
               font-size: 110%;
               border: 6px outset papayawhip;
               "
               />
 
                </form>
    
    
    
    
    
    
    
        <?php       
               
        generar_pie();