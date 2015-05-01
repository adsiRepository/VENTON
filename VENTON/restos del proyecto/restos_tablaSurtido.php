/*while ($option=mysql_fetch_array($surtido)){
                                    $cod_art="$option[Cod]";
                                    echo $cod_art;       
                        }*/
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <!--<table id="surtido">
                                    <tr>
                                        <th class="numeral">Art No.</th>
                                        <th class="numeral">Código</th>
                                        <th class="texto">Descripcion</th>
                                        <th class="numeral">Cantidad</th>
                                        <th class="numeral">Precio UND</th>
                                        <th class="numeral">Total</th>
                                    </tr>
                                    <php
                                    echo "
                                    <tr>
                                        <td class='numeral'>"; 
                                    /*while ($_REQUEST['newart'])*/
                                    echo $iart=1;
                                    $iart++;
                                        echo "</td>
                                        <td class='numeral'>
                                        <input type='text' name='codart' id='codart' style='width:94%;
                                                                                        margin-right=0;'/>
                                        </td>
                                        <td class='texto>
                                        <output name='descripcion' for='codart cant''></output>
                                        </td>
                                        <td><input name='cant' id='cant' type='number' value='1' min='0'style='width:94%;
                                                                                        margin-right=0;'/></td>
                                        <td class='numeral'>
                                        <output name='valorund' for='codart' id='valorund'></output>
                                        </td>
                                        <td class='numeral'>";
                                        /*$valorund=.... * */
                                    echo "</td>
                                    </tr>
                                    ";
                                    ?>
                                    <tr>
                                        <td></td><td></td><td></td><td></td><td></td><td></td>
                                    </tr>
                                    <tr>
                                        <td></td><td></td><td></td><td></td><td></td><td></td>
                                    </tr>
                                    <tr>
                                        <td></td><td></td><td></td><td></td><td></td><td></td>
                                    </tr>
                                </table>
                                    <!--frameborder="1" width="700" height="400" -->
                                    <!--<iframe src="tabla_surtido.php" sandbox="allow-scripts allow-forms 
                                            allow-same-origin"
                                            name="surtido"
                                            style="margin: 0; padding: 0; width: 100%; height:100%;
                                        display: inline-block; position: relative; float: left;">
                                    </iframe>-->    
                                    
                                
                            <!--</td>
                            <td style="padding-left: 7%;">-->
                                <!--tabla_surtido.php target="surtido"-->
                               <!--<a href=""><img src="add.png" height="50" alt="nuevo articulo"/></a>
                                <button></button>
                                <!--
                                <a href=""><img src="minus.png" height="50" alt="nuevo articulo"/></a>-->