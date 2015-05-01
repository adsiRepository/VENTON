<!doctype html>
<html>
    <head>
        <meta charset="utf-8">  
        <!--<link href="ProyectoTrimestre3.css" rel="stylesheet" type="text/css"/>-->
		
    <title>surtido</title>
    
    <?php
    
    include 'Recursos/ConexionBD.php'; 
    
    ?>

    <style>
        body{
            border: 1px solid black;
        }
        table{
            width: 70%;
            height: 100%;
            display: inline-block;
        }
        table th td{
            height: 19px;
            width: 120px;
        }
        table th{
            border: 2px solid gray;
            background-color: graytext;
        }
        table td{
            border: 1px solid #F69E19;
        }
        #cuadro_insercion{
            display: inline-block;
        }
    </style>
    
    </head>
    
    <body>
        
        <form action='tabla_surtido_3.php' method="post" 
              oninput="valortot.value=parseInt(cant.value)*parseInt(vlrund.value)">
        
        <table>
            
            <tr>
                <th class="numeral">Art No.</th>
                <th class="numeral">Código</th>
                <th class="texto">Descripcion</th>
                <th class="numeral">Cantidad</th>
                <th class="numeral">Precio UND</th>
                <th class="numeral">Total</th>
            </tr>
            
            <?php
            
            /*for($i=0;$i<5;$i++){
                echo "<tr>
                    <td>$i</td>
                    <td>
                    <input type='' name='' id='' value=''/>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>
                 ";
            }*/
            
            
            
                    $art=$_REQUEST['codart'];
                    $campo="Descripcion";//campo de la tabla en que buscara el articulo
                    $valor=$art;
                    $tablasurt="articulos";
                    
                    $conext=conectar_servidor();
                    conectar_base($conext);
                    
                    $result=seleccionar_registro($campo,$tablasurt,$valor);
                    
                    while ($registro=mysql_fetch_array($result)){
                        $id_art="$registro[Cod]";
                        $desc_art="$registro[Descripcion]";
                        $precio_und="$registro[Precio]";
                     
                    echo "
                        <tr>
                        <td class='numeral'>
                        
<input type='text' name='iventa' id='iventa' value='' readonly='readonly'
    style='width:94%;margin-right=0;border:0;'/>
                            </td>
                        
                    <td class='numeral'>
<input type='text' name='codart' id='codart' value='$id_art' readonly='readonly'
    style='width:94%;margin-right=0;border:0;'/>
                    </td>
                    
                    <td class='texto'>
<input type='text' name='descart' id='descart' value='$desc_art' readonly='readonly'
    style='width:94%;margin-right=0;border:0;'/>
                    </td>
                    
                    <td>                    
<input name='cant' id='cant' type='number' value='1' min='0' style='width:97%;margin-right=0px;'/>
                    </td>
                    
                    <td class='numeral'>
                    
<input type='text' id='vlrund' name='vlrund' value='$precio_und' readonly='readonly'/>
<!--<output name='valorund' for='codart' id='valorund'></output>-->

                    </td>
                    
                    <td class='numeral'>
          <output name='valortot' for='cant vlrund' id='valortot' readonly='readonly'></output>
                    </td>
                    </tr>
                    ";
                    
                    }
            ?>
            
        </table>
        
        
        <div id="cuadro_insercion">
                    
                    <table style="margin:0;padding:0;">
                        <caption>Busqueda por Nombre</caption>
                        <tr>
                            <td>
                                <label>
                                    Elige producto
                                </label>
                                <?php
                                
                                $conex=conectar_servidor();
                                conectar_base($conex);
                                
                                $tabla="articulos";
                                $surtido=extraer_datos($tabla);
                                
                                echo "<select name='codart'>";
                                
                                while ($option=mysql_fetch_array($surtido)){
                                    $value="$option[Descripcion]";
                                    echo "<option value='$value'>$value</option>";
                                }                                
                                
                                echo "</select>";
                                
                                mysql_close($conex);
                                
                                ?>
                                
                        </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <input type="image" name="ingresar" src="Imagenes/add.png" alt="añadir"
                                       style="width:30%;height:40%;"/>
                                <input type="reset" value="borrar"/>
                            </td>
                        </tr>
                    </table>
        </div>
        </form>
    </body>
</html>
        