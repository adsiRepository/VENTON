<!DOCTYPE html>
<!--			Etiqueta <datalist><option></option></datalist>      Una lista de Selecciones

                                                <select required></select>  //obliga a que este campo sea diligenciado

-->

<?php session_start(); ?>

<html>
    <head>
        <title>Copia de Seguridad</title>
        
<?php
            include_once 'Recursos/FuncionEntorno_encabezado_admin.php';
            include_once 'Recursos/FuncionEntorno_pie.php';
            
            generar_encabezado();
            
            ?>     
            
                <form action="CopiaSeguridad.php" method="post">
                    <table>
                        <caption>Copia de Seguridad</caption>
                        <tr>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                    <center>
                                        <p>Senale la Unidad y/o Carpeta en la que desea colocar la copia de Seguridad</p>
                                    </center>
                                </td>
                                    </tr>
                                    <tr>
                                        <td>
                                    <center>
                                            <input type="text" name="ubicacion_copia"/>
                                            <b><input type="submit" name="enviar" value="Examinar" class="boton"
                                                      style=""/></b>
                                    </center>
                                        </td>
                                    </tr>
                                </table>
                            </td> 
                        </tr>
                        <tr>
                            <td>
                        <center>
                            <input type="submit" name="enviar" value="Aceptar" class="boton"/>
                            <input type="reset" value="Restablecer" class="boton"/>
                        </center>
                            </td>
                        </tr>
                    </table>
                </form>
    
    
            <?php
            
            generar_pie();	
