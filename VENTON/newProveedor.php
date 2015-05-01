<!DOCTYPE html>
<!--			Etiqueta <datalist><option></option></datalist>      Una lista de Selecciones 

                                                <select required></select>  //obliga a que este campo sea diligenciado

-->
<?php session_start(); ?>

<html>
    <head>
        <title>Compra</title>
    <style>
            #tabla_compra{
                border:3px solid chocolate;
                border-radius: 2px;
                border-collapse: collapse;
                margin: auto;
            } 
            #tabla_compra td{
                border:1px solid cornflowerblue;
                padding: 5px;
            }
            caption{
                padding-left: 20px;
                background-color:#C3C1CE;
            }
        </style> 
    
    <?php
            include_once 'Recursos/FuncionEntorno_encabezado_admin.php';
            include_once 'Recursos/FuncionEntorno_pie.php';
            include 'Recursos/ConexionBD.php';
    
            
            generar_encabezado();
          
            for($c=0;$c<4;$c++){
            
        $plu[$c]        =$_REQUEST["plu$c"];
        $desproducto[$c]=$_REQUEST["desproducto$c"];
        $cantidad[$c]   =$_REQUEST["cantidad$c"];
        $costo[$c]      =$_REQUEST["costo$c"];
        $preventa[$c]   =$_REQUEST["preventa$c"];
        //$total[$c]      =$cantidad[$c]*$costo[$c];
        //$total[$c]      =$_REQUEST["total$c"];
        
        }
        
   $j = strlen($plu[0])*strlen($desproducto[0])*strlen($cantidad[0])*strlen($costo[0]);
        
        $n=1;
        
        if (strlen($plu[1])>0){
            $n=2;
        }
        if (strlen($plu[2])>0){
            $n=3;
        }
        if (strlen($plu[3])>0){
            $n=4;
        }
       
        
         for($h=0;$h<$n;$h++){
             $rtotal[$h]=$cantidad[$h]*$costo[$h];
         }
        
    ?>
 
       
       
        
        
    <table id="tabla_compra">
        
        <caption>Haz Registrado esta Compra:</caption>
        
        <tr>
            <th>PLU</th>
            <th>Descripcion</th>
            <th>Cantidad</th>
            <th>Costo</th>
            <th>Precio Venta</th>
            <th>Total</th>
        </tr>
        
        <?php
        
        
        for($z=0;$z<$n;$z++){
            echo "<tr>
                <td>$plu[$z]</td>
                <td>$desproducto[$z]</td>
                <td>$cantidad[$z]</td>
                <td>$costo[$z]</td>
                <td>$preventa[$z]</td>
                <td>$rtotal[$z]</td>
                </tr>
                    
                ";
        }
        
    ?>    
    </table>
    
    
        <?php
        
        $codigopro      =$_REQUEST['codproveedor'];
        $niprov         =$_REQUEST['nip_prov'];
        $nomprov        =$_REQUEST['nomprov'];
        $dirprov        =$_REQUEST['dirprov'];
        $sistemapago    =$_REQUEST['sistemapago'];
        $cityprov       =$_REQUEST['ciudadproveedor'];
        $telprov        =$_REQUEST['telproveedor'];
        $emailprov      =$_REQUEST['emailproveedor'];
        $fecharegistro  =$_REQUEST['fecharegistro'];
        $descprov       =$_REQUEST['descprov'];
     
    $p=strlen($niprov)*strlen($nomprov);
    
        
    
        
      /*$stotal=0;
      for($s=0;$s<$n;$s++){
          $stotal=$stotal+$total[$s];
      }*/
        
        
        //  CONEXION PRINCIPAL
        conex();
    
        
        //  PARTE ARTICULOS O PRODUCTOS
    
 if ($j>0){
    
    $tabla_arts="articulos";
    
    $camps_arts="Cod,Descripcion,Cantidad,Costo,Precio,Proveedor";
    
        /*$plu[$c]        =$_REQUEST["plu$c"];
        $desproducto[$c]=$_REQUEST["desproducto$c"];
        $cantidad[$c]   =$_REQUEST["cantidad$c"];
        $costo[$c]      =$_REQUEST["costo$c"];
        $preventa[$c]   =$_REQUEST["preventa$c"];
        $total[$c]      =$_REQUEST["total$c"];*/
    
    
    $stotal=0;
    for($k=0;$k<$n;$k++){
        
        $values_arts[$k]="'$plu[$k]','$desproducto[$k]','$cantidad[$k]','$costo[$k]','$preventa[$k]',"
                . "'$codigopro'";
        $stotal=$stotal+($cantidad[$k]*$costo[$k]);
        
    }
    
    
    //registrar_bloque($tabla_arts, $camps_arts, $values_arts);
    
    registrar_bloque_b($tabla_arts, $camps_arts, $values_arts);
    
        //  ********************************************************************
  
$consul = mysql_query("select cuentaMonto from proveedores where id='$codigopro'");

while ($f = mysql_fetch_array($consul)){
    $saldo="$f[cuentaMonto]";
}
    
$cuenta=$saldo+$stotal;

mysql_query("update proveedores set cuentaMonto='$cuenta' where id='$codigopro'");
    
    
   }
   
   
   
   
        //  PARTE PROVEEDORES
      
    if ($p>0){
        
    $tabla_prov="proveedores";
    
    $camps_prov="id,nip,nombre,direccion,ciudad,telefono,fechaReg,observaciones,email,sistemapago,cuentaMonto";
    
    $values_prov="'$codigopro','$niprov','$nomprov','$dirprov','$cityprov','$telprov','$fecharegistro',"
            . "'$descprov','$emailprov','$sistemapago','$stotal'";
    
    registrar_datos($values_prov, $tabla_prov, $camps_prov);
    
    }
        //  ********************************************************************
    
    
    
   mysql_close();
    
    
    
        ?>
    
    <form action="FormCompra.php" method="post">
        <input type="submit" value="Regresar a la Lista" class="boton"/>
    </form>
    
    <?php
        
        /*$postproceso="FormCompra.php";
        romper_conexion($vinculo,$postproceso);*/    
    
    
        generar_pie();
        
        
        