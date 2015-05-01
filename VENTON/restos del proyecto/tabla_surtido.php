<!doctype html>
<html>
    <head>
        <meta charset="utf-8">  
        <!--<link href="ProyectoTrimestre3.css" rel="stylesheet" type="text/css"/>-->
		
    <title>surtido</title>
    
    <style>
form table{
    height: 99%;
    width: 99%;
    border: 1px solid #F69E19;
    margin: auto;
    //position: relative;
    padding: 3px;
    border-spacing: 3px;
    border-radius: 4px;
}

/*form table td{
    border: 1px solid salmon;
}*/

#surtido{
    border-radius: 3px;
    margin: 0;
    width: 79%;
    height: 100%;
}

#surtido td, th{
    height: 19px;
    width: 120px;
    background-color: white;
    border: 1px solid black;
}

#surtido td,input{
    text-align: end;
    padding-right: 7px;
}

.numeral{
width: 50px;
}
.texto{
width: 300px;
}
textarea{
    width: 100%;
    height: 100%;
}

/*form table div table td{
    height: 50%;
}*/
#cuadro_insercion{
    position:fixed;
    top:2%;
    right:1%;
    width:19%;
}

                    </style>
                    
                    <?php
                    include 'Recursos/ConexionBD.php';
                    ?>
    
    </head>
    
    <body style="background-color: white; padding: 0;margin: 0; width: 100%;height: 100%;">
        

        
        <form action="tabla_surtido.php" method="post" name="canasta"
              oninput="valortot.value=parseInt(cant.value)*parseInt(vlrund.value)">
            
             
        <table style="padding: 0; width: 100%;height:100%; display: inline-block;">
            
            <tr><td>
                    
                    <table id="surtido">
                        <tr>
                            <th class="numeral">Art No.</th>
                            <th class="numeral">Código</th>
                            <th class="texto">Descripcion</th>
                            <th class="numeral">Cantidad</th>
                            <th class="numeral">Precio UND</th>
                            <th class="numeral">Total</th>
                        </tr>
                        <!--<tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>-->
                    
                    <?php
                    
                    /*for($icamp=1;$icamp<=5;$icamp++){
                        
                    
                        
                        echo "
                            <tr>
                            <td>$icamp</td>
                                
                                <td>
                                
                                ";
                        
                        /*while ($option=mysql_fetch_array($surtido)){
                                    $cod_art="$option[Cod]";
                                    echo $cod_art;       
                        }*/
                        
                        
                        /*echo "

<input type='text' name='codart' id='codart' value='' readonly='readonly'
    style='width:94%;margin-right=0;border:0;'/>
                                </td>
                                                                

                                <td>";
                        
                    /*$conex=conectar_servidor();
                                
                    conectar_base($conex);
                                
                    $tabla="articulos";
                    
                    $surtido=extraer_datos($tabla);
                                
                                echo "<select name='codart'>";
                                
                                while ($option=mysql_fetch_array($surtido)){
                                    $value="$option[Descripcion]";
                                    echo "<option value='$value'>$value</option>";
                                }                                
                                
                                echo "</select>";
                                
                                mysql_close($conex);*/
                                    
                                /*echo "</td>
                                

                                <td>
                                
<input name='cant' id='cant' type='number' value='1' min='0' style='width:97%;margin-right=0px;'/>
                                
                                </td>
                                

                                <td>
<input type='text' id='vlrund' name='vlrund' value='' readonly='readonly'/>                               
                                </td>
                                
                                <td>
<output name='valortot' for='cant vlrund' id='valortot'></output>
                                </td>
                            </tr>
                            ";
                    }*/
                    
                    /*$iadd=$_REQUEST['iventa'];
                    
                    if($iadd==="")*/
                    
                    /*if($_REQUEST['iventa']==false)
                    {*/
                     
                    //$iart=1;
                    
                    /*echo "
                        <tr>
                        <td class='numeral'>
                        
<input type='text' value='' style='width:94%;margin-right=0;
                                                                        border:0;'/>
                            </td>";*/
                    
                    if(($_REQUEST['action']=='Añadir') && (strlen($_REQUEST['codart'])=0)){
                    
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
          <output name='valortot' for='cant vlrund' id='valortot'></output>
                    </td>
                    </tr>
                    ";
                    
                    }
                    
                    $cod_art=$_REQUEST['codart'];
                    $detail=$_REQUEST['descart'];
                    $cant=$_REQUEST['cant'];
                    $vlrund=$_REQUEST['vlrund'];
                    $total=$_REQUEST['valortot'];
                    
                    $tabla_canasta="canasta";
                    
                    $campos_canasta="codigo,descripcion,cantidad,vlrund,total";
                    
                    $valors_canasta="'$cod_art','$detail','$cant','$vlrund','$total'";
                    
                    $conec_canast=conectar_servidor();
                    
                    conectar_base($conec_canast);
                    
                    registrar_datos($valors_canasta, $tabla_canasta, $campos_canasta);
                    
                    
                    }else if (($_REQUEST['action']=='Añadir') && (strlen($_REQUEST['codart'])>0)){
                        
                        
                        
                    }
                    
                    
                    /*}
                    
                    
                    else
                    {
                        
                    $iart=$_REQUEST['iventa']+1;
                        
                    
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
                     
                    $fila[$iart]="
                        <tr>
                        <td class='numeral'>
                        
<input type='text' name='iventa' id='iventa' value='$iart' readonly='readonly'
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
          <output name='valortot' for='cant vlrund' id='valortot'></output>
                    </td>
                    </tr>
                    ";
                    
                    echo $fila[$iart];
                    }
                    
                    }
                    
                    
                    */
                    
                    
                    ?>
                                    <tr>
                                        <td></td><td></td><td></td><td></td><td></td><td></td>
                                    </tr>
                                    
                                    
                                    
                                    <?php
                                    
                                    
                                    
                                    ?>
                                    
                                    
                                    
                                    <tr>
                                        <td></td><td></td><td></td><td></td><td></td><td></td>
                                    </tr>
                                </table>
                    

                </td>
                
                <td>
                    <div id="cuadro_insercion">
                    <fieldset>
                        <legend style="font-size:90%;font-family:monospace;">Busqueda por Nombre</legend>
                        
                    <table style="margin:0;padding:0;width:100%;height:100%;">
                        <tr>
                            <td>
                              
                                <!--<select name="art_venta">
                                    <optgroup label="Aseo">
                                    <option value="1">Jabon****</option>
                                    </optgroup>
                                    <optgroup label="Alimentos">
                                    <option value="2">Manzana***</option>
                                    </optgroup>
                                </select>-->
                                
                                
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
                            <input type="submit" name="action" value="Añadir" class="boton"/>
                            
                        <!--<input type="image" name="action" src="Imagenes/add.png" alt="añadir" style="width:30%;height:40%;"/>-->
                        <input type="reset" value="borrar"/>
                   
                    
                        </td> 
                    </tr>
                    </table>
                    
                    </fieldset>
                    </div>       
                </td>
                
                </tr>
        </table>
     </form>           
         
         
     </body>
</html>