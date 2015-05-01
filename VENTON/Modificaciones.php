<!DOCTYPE html>
<!--			Etiqueta <datalist><option></option></datalist>      Una lista de Selecciones 

                                                <select required></select>  //obliga a que este campo sea diligenciado

-->

<?php session_start(); ?>

<html>
    <head>
        <title></title>

            
        
        <?php
            include_once 'Recursos/FuncionEntorno_encabezado_admin.php';
            include_once 'Recursos/FuncionEntorno_pie.php';
            include 'Recursos/ConexionBD.php';
            
            
            generar_encabezado();
            
            
        
           /* conex();
            
            $sq = mysql_query("select tipo from empleados where nomempleado='".$_SESSION['usuario']."'");
        
            
            while ($f = mysql_fetch_array($sq)){
                $key = "$f[tipo]";
            }
            

   if(!$key==="administrador"){
       echo "<script>window.location='index_main.php'</script>";
   } 
*/
            
            $select=$_REQUEST['select'];

            
            
            if(isset($_REQUEST['cambiar'])){
            
    
    $newcode=$_REQUEST['newcode'];
    $newdes=$_REQUEST['newdes'];
    $cant=$_REQUEST['cant'];
    $newprice=$_REQUEST['newprice'];
    $refprov=$_REQUEST['refprov'];
    
    
    conex();
    
    if(strlen($newcode)>0){
        mysql_query("update articulos set Cod='$newcode' where Cod='$select'");
    }
    
    
    if(strlen($newdes)>0){
        mysql_query("update articulos set Descripcion='$newdes' where Cod='$select'");
    }
    
    
    if(strlen($cant)>0){
        mysql_query("update articulos set Cantidad='$cant' where Cod='$select'");
    }
    
    
    if(strlen($newprice)>0){
        mysql_query("update articulos set Precio='$newprice' where Cod='$select'");
    }
    
    
    if(strlen($refprov)>0){
        mysql_query("update articulos set Proveedor='$refprov' where Cod='$select'");
    }
    
    
    /*mysql_query("update articulos set Cod='',Descripcion='',Cantidad='',Precio='', "
            . "where Cod='$select'");*/
       
    
    
   close_conex("Inventario.php");
   
            }
            
            
            
            
            
            if(isset($_REQUEST['eliminar'])){
                
                conex();
                
                mysql_query("delete from articulos where Cod='$select'");
                
                close_conex("Inventario.php");
                
            }
            
            
        
        generar_pie();