<!doctype html>

<html>
    <head>
        <style>*{margin:0;padding:0;}</style>
        <title></title>
    </head>
    <body>
<?php

//INVESTIGAR SOBRE LAS FUNCIONES mysqli_...(); para actualizar este código

function conectar_servidor(){
    if (($servidor=mysql_connect("localhost","root",""))==true){
        //echo "<script>alert('Conexion Establecida');</script>";
        return $servidor;   
    }
    else {
        mysql_error();
    }
}



function conectar_base($servidor){  
    if(mysql_select_db("venton",$servidor)==false){
       echo "Base de Datos Inexistente";         
    }
}


function conex(){
    $hosting=mysql_connect("localhost","root","") or die ('Fallo en la Conexion con el Servidor');
    mysql_selectdb("venton", $hosting) or die('Error en la conexion a la Base de Datos, posiblemente no Exista');
}

function close_conex($postLocation){
    mysql_close();
    echo "
        <script>
        window.location='$postLocation';
        </script>
    ";
}


function registrar_datos($insercion,$tabla,$campos){  
    if((mysql_query("insert into $tabla ($campos) values ($insercion)"))==false){
        echo "<script>                               
            alert('error en el registro de datos debes diligenciarlos completamente');
            </script>";
    }else{
        echo "<script>                               
            alert('Registrado!!');
            </script>";
    }
}


function registrar_bloque($tabla,$campos,$valores){
    //if()==false){
    
       if((mysql_query("insert into $tabla ($campos) values ($valores[0]),($valores[1]),($valores[2]),"
                . "($valores[3])"))==false){
       echo "<script>                               
            alert('No has registrado ningun articulo o no has usado todos los campos');
                </script>";
       }else{
        echo "<script>                               
            alert('bloque registrado con exito');
            </script>";
        } 
    //}
}



function registrar_bloque_b($tabla,$campos,$valores){
    //if()==false){
        for($i=0;$i<sizeof($valores);$i++){
           $pack[$i]="($valores[$i])"; 
        }
        
        $list=implode(",",$pack);
        
        if (!mysql_query("insert into $tabla ($campos) values $list")){
            echo "<script>                               
            alert('error en el registro de bloque b');
                </script>";
            }else{
                echo "<script> 
                    alert('bloque registrado con exito');
                    </script>";
            }
}
               
               
               
               
               
        
    //}




function registrar_bloque_i($num_reg,$tabla,$campos,$valores){
    for($i=0;$i<$num_reg;$i++){
        mysql_query("insert into $tabla ($campos) values ($valores[$i])");
    }
}


function datos_una_columna($colum,$tabla){
    $quest="select $colum from $tabla";
    $request=  mysql_query($quest);
    return $request;
}



/*function alter_table(){
    mysql_query($query);
}




function mostrar_todo(){    // hasta ahora sin pleno conocimiento
    $request="show table";
    $ans=mysql_query($request);
    return $ans;
}*/







function extraer_datos($tabla){
    $peticion="select * from $tabla";
    $revision=mysql_query($peticion);
    /*$resp=mysql_fetch_array($revision);*/
    return $revision;
}



function contar_registros($tabla){
    $peticion="select * from $tabla";
    $revision=mysql_query($peticion);
    $resp=mysql_num_rows($revision);
    return $resp;
}



function seleccionar_registro($campo,$tabla,$valor){    
    $peticion="select * from $tabla where $campo='$valor'";
    $revision=mysql_query($peticion);
    return $revision;
}


function seleccionar_campo($columna,$tabla,$campo,$valor){    
    $peticion="select $columna from $tabla where $campo='$valor'";
    $revision=mysql_query($peticion);
    while($dat=mysql_fetch_array($revision)){
        $resp="$dat[$columna]";
    }
    return "$resp";
}


function modificar_dato($tabla,$columnadestino,$colreferencia,$dato_refer,$nuevo_dato){
    $dialogo="update $tabla set $columnadestino='$nuevo_dato' where $colreferencia='$dato_refer'";
    $verify=mysql_query($dialogo);
    if(!$verify){
        mysql_error();
    }
}


function romper_conexion($servidor,$postplane){   
    if(mysql_close($servidor)==true){
       echo "<script>                               
            alert('registro exitoso');
            document.location=('$postplane');
            </script>";
    }       
    else{
        echo "<script>
        alert('No se ha Cerrado la Base de Datos');
        document.location=('$postplane');
                </script>";
    }
} 





    
?>
    </body>
</html>

