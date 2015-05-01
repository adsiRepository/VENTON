<!DOCTYPE html>
<!--			Etiqueta <datalist><option></option></datalist>      Una lista de Selecciones

                                                <select required></select>  //obliga a que este campo sea diligenciado

-->

<?php session_start(); ?>

<html>
    <head>
        <title>Importar Archivo</title>

    <!--</head>-->
   
            <?php
            include_once 'Recursos/FuncionEntorno_encabezado_admin.php';
            include_once 'Recursos/FuncionEntorno_pie.php';
            
            generar_encabezado();
            
            ?>
            
 
    
    
            <form action="FormExcel.php" method="post">
                
                <center>
                <table style="width:95%;height:100%;margin:0;padding:0;">
                    
                    <caption>Importar Archivo</caption>
                    
                    <tr>
                        <td>
                    <center>
                            <img src="Imagenes/Excel.png" alt="Excel"
                                 style="width:20%;"/>
                    </center>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                    <center>
                            <label>Archivo/Lista Excel</label>
                            <input type="text" name="archivo_excel"/>
                            <input type="submit" name="excel" value="examinar" class="boton"/>
                    </center>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                    <center>
                            Sobrescribir Articulos Repetidos
                            <input type="checkbox" name="sobrexcel"/>
                    </center>
                        </td>
                        
                    </tr>
                    
                    <tr>
                        <td>
                    <center>
                        <div>
                            <input type="submit" name="excel" value="guardar_libro" class="boton"/>
                            <input type="reset" value="Retroceder" class="boton"
                                   style="width:10%;height:90%;"/>
                        </div>
                    </center>
                        </td>
                    </tr>
                    
                </table>
                </center>
                
            </form>

  
        
            <?php
            
            generar_pie();
            
            ?>
            
            
        <!--</div>

            
</div>

    </body>
</html>-->
