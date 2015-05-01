<!DOCTYPE html>
<!--			Etiqueta <datalist><option></option></datalist>      Una lista de Selecciones 

                                                <select required></select>  //obliga a que este campo sea diligenciado

-->

<?php session_start(); ?>

<html>
    <head>
        <title>Registro Cliente</title>
    
   <!--             GENERACION DE ENTORNO AUTOMATICAMENTE--> 
    <?php
            include_once 'Recursos/FuncionEntorno_encabezado_admin.php';
            include_once 'Recursos/FuncionEntorno_pie.php';
            include 'Recursos/ConexionBD.php';
    
            
            
            generar_encabezado(); // crea el entorno grafico
            
   
    //  ************************************************************    //
        
        //          CAMPOS
        
            // $variable_c  -> guion bajo c (_c) para identificar que las variables son unicas de este archivo
            
        $codcliente_c       =   $_REQUEST['codcliente_c'];
        $fecharegistro_c    =   $_REQUEST['fecharegistro_c'];
        $nomcliente_c       =   $_REQUEST['nomcliente_c'];
        $NIP_c              =   $_REQUEST['NIP_c'];
        $dircliente_c       =   $_REQUEST['dircliente_c'];
        $ciudadcliente_c    =   $_REQUEST['ciudadcliente_c'];
        $telcliente_c       =   $_REQUEST['telcliente_c'];
        $emailcliente_c     =   $_REQUEST['emailcliente_c'];
        $desclient_c        =   $_REQUEST['desclient_c'];
        $nomcontac_c        =   $_REQUEST['nomcontac_c'];
        $telcontac_c        =   $_REQUEST['telcontac_c'];
        $parentesco_c       =   $_REQUEST['parentesco_c'];
        $sistpago_c         =   $_REQUEST['sistpago_c'];
        $cuentaCli_num_c    =   $_REQUEST['cuentaCli_num_c'];
        
    //  *****************************   //
        
        // REQUISITOS DE FUNCIONAMIENTO //
        
        $postproceso_c="FormCliente.php";
        
        $tabla_c="clientes";
        
        $campos_c="codcliente,nombre,nip,domicilio,ciudad,telefono,email,fecha,"
                . "observaciones,sistemapago,cuenta,nombrecontacto,telefonocontacto,relacion";
        
        $valores_c="'$codcliente_c','$nomcliente_c','$NIP_c','$dircliente_c','$ciudadcliente_c','$telcliente_c',"
                . "'$emailcliente_c','$fecharegistro_c','$desclient_c','$sistpago_c','$cuentaCli_num_c','$nomcontac_c',"
                . "'$telcontac_c','$parentesco_c'";
        
        //*********************//
        
        //         PROCESO
        
        $cliente=conectar_servidor();
        
        conectar_base($cliente);
        
        registrar_datos($valores_c,$tabla_c,$campos_c);
        
        romper_conexion($cliente,$postproceso_c);
        
        //  ********************    //
        
        

generar_pie();