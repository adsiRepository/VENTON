<!DOCTYPE html>
<!--			Etiqueta <datalist><option></option></datalist>      Una lista de Selecciones 

                                                <select required></select>  //obliga a que este campo sea diligenciado

-->



<html>
    <head>
        <title>Ventas</title>
    
    
    <?php
            include 'Recursos/FuncionEntorno_encabezado_vend.php';
            include 'Recursos/FuncionEntorno_pie.php';
            include 'Recursos/ConexionBD.php';
    
            
            generar_encabezado();          
        
            
            $post = $_REQUEST['post'];
            
        
        if (isset($_REQUEST['facturar'])){
            
        $consecutivo    =$_REQUEST['consecutivo'];
        $user           =$_REQUEST['user'];
        $nomcliente     =$_REQUEST['nomcliente'];
        $NIP            =$_REQUEST['NIP'];
        $telcliente     =$_REQUEST['telcliente'];
        $dircliente     =$_REQUEST['dircliente'];
        $sistpago       =$_REQUEST['sistemapago'];
        $plazo_deuda    =$_REQUEST['plazo_deuda'];
        $frecu_cobro    =$_REQUEST['frecu_cobro'];
        $fecha          =$_REQUEST['fecha'];
        
        
        for($i=1;$i<=5;$i++){
            $art_comp[$i]=$_REQUEST["codart$i"];
            $desc[$i]=$_REQUEST["desc$i"];
            $cant[$i]=$_REQUEST["cant$i"];
            $total_art[$i]=$cant[$i]*$_REQUEST["vlrund$i"];
        }
        
        $n=1;
        
        for ($g=2;$g<=5;$g++){
            if (strlen($art_comp[$g])>0){
            $n=$g;
            }
        }
        
        conex();//funcion que conecta al servidor y a la BD
        
        //REGISTRO DE LA VENTA
        $tbl_ventas="ventas";
        
        $camps_ventas="consecutivo,fecha,usuario,codcliente,nombre,id_cliente,direccion,telefono,sistemapago,"
                . "plazo,frecuenciacobro,lista_compra,total_venta";
        
        $ttotal=0;
        for ($d=1;$d<=$n;$d++){
            $list_arts[$d]="Cod: $art_comp[$d] Desc: $desc[$d] - Cant: $cant[$d] - Total: $$total_art[$d] \n";
            $ttotal=$ttotal+$total_art[$d];
        }
        
        $list=implode(" / ",$list_arts);
        
        $vlrs_ventas="'$consecutivo','$fecha','$user','VENTA PARTICULAR','$nomcliente','$NIP','$dircliente',"
                . "'$telcliente','$sistpago','$plazo_deuda','$frecu_cobro',"
                . "'$list','$ttotal'";
                
                /*. "'Cod Prod: $art_comp[1], Cant: $cant[1] -Total: $$total[1],"
                . " $art_comp[2]-cant: $cant[2],"
                . " $art_comp[3]-cant: $cant[3],"
                . " $art_comp[4]-cant: $cant[4],"
                . " $art_comp[5]-cant: $cant[5]'";*/
        
        registrar_datos($vlrs_ventas, $tbl_ventas, $camps_ventas);
        
        //**********************************************************************************************
        
        close_conex("FormVenta.php");//funcion que cierra la BD y te lleva al archivo dentro del parentesis
        
        }
        
        
        
        //FORM "VENDIENDO"//
        if (isset($_REQUEST['facturar_a_cliente'])){
        
        $consecutivo    =$_REQUEST['consecutivo'];
        $user           =$_REQUEST['user'];
        $codcliente     =$_REQUEST['codcliente'];
        $nomcliente     =$_REQUEST['nomcliente'];
        $NIP            =$_REQUEST['NIP'];
        $telcliente     =$_REQUEST['telcliente'];
        $dircliente     =$_REQUEST['dircliente'];
        $sistpago       =$_REQUEST['sistemapago'];
        $plazo_deuda    =$_REQUEST['plazo_deuda'];
        $frecu_cobro    =$_REQUEST['frecu_cobro'];
        $fecha          =$_REQUEST['fecha'];
        
        for($i=1;$i<=5;$i++){
            $art_comp[$i]=$_REQUEST["codart$i"];
            $cant[$i]=$_REQUEST["cant$i"];
            $total[$i]=$cant[$i]*$_REQUEST["vlrund$i"];
        }
        
        $n=1;
        
        for ($g=2;$g<=5;$g++){
            if (strlen($art_comp[$g])>0){
            $n=$g;
            }
        }
        
        conex();//funcion que conecta al servidor y a la BD
        
        //REGISTRO DE LA VENTA
        $tbl_ventas="ventas";
        
        $camps_ventas="consecutivo,fecha,usuario,codcliente,nombre,id_cliente,direccion,telefono,sistemapago,"
                . "plazo,frecuenciacobro,lista_compra,total_venta";
        
        $ttotal=0;
        for ($d=1;$d<=$n;$d++){
            $list_arts[$d]="Cod: $art_comp[$d] Desc: $desc[$d] - Cant: $cant[$d] - Total: $$total_art[$d] \n";
            $ttotal=$ttotal+$total_art[$d];
        }
        
        $list=implode(" / ",$list_arts);
        
        $vlrs_ventas="'$consecutivo','$fecha','$user','$codcliente','$nomcliente','$NIP','$dircliente','$telcliente',"
                . "'$sistpago','$plazo_deuda','$frecu_cobro',"
                . "'$list','$ttotal'";
                
                /*. "'Cod Prod: $art_comp[1], Cant: $cant[1] -Total: $$total[1],"
                . " $art_comp[2]-cant: $cant[2],"
                . " $art_comp[3]-cant: $cant[3],"
                . " $art_comp[4]-cant: $cant[4],"
                . " $art_comp[5]-cant: $cant[5]'";*/
        
        registrar_datos($vlrs_ventas, $tbl_ventas, $camps_ventas);
        
        //**********************************************************************************************
        
        close_conex($post);//funcion que cierra la BD y te lleva al archivo dentro del parentesis
        
        } 
       
               
        //Diseño
                generar_pie();
    
    