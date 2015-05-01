


<?php

    //include 'Recursos/ConexionBD.php';

include_once("conexionventon.php");

$conec=conectar_servidor();
conectar_base($conec);

$codempleado=$_POST['codempleado'];
$fecharegistro=$_POST['fecharegistro'];
$nomempleado=$_POST['nomempleado'];
$cedula=$_POST['cedula'];
$dircliente=$_POST['dircliente'];
$ciudadcliente=$_POST['ciudadcliente'];
$telcliente=$_POST['telcliente'];
$emailcliente=$_POST['emailcliente'];
$opcionsexo=$_POST['opcionsexo'];
$desclient=$_POST['desclient'];
$contrato=$_POST['contrato'];
$clave=$_POST['clave'];
$tipo=$_POST['tipo'];

$req = (strlen ($codempleado)* strlen($fecharegistro)* strlen($nomempleado)* strlen($cedula)* strlen($dircliente)* strlen($ciudadcliente)* strlen($telcliente)* strlen($emailcliente)* strlen($opcionsexo)* strlen($desclient)* strlen($clave)*strlen($tipo));



		require("conexionventon.php");

                /*$tabla="empleadosventon";
                
                $campos="codempleado,fecharegistro,nomempleado,cedula,dircliente,ciudadcliente,telcliente,
                    emailcliente,opcionsexo,desclient,contrato,clave,tipo";
                
		$valores="'$codempleado','$fecharegistro','$nomempleado','$cedula',
                        '$dircliente','$ciudadcliente','$telcliente','$emailcliente','$opcionsexo','$desclient','$contrato','$clave','$tipo'";*/
                
		mysql_query ("insert into empleadosventon (codempleado,fecharegistro,nomempleado,cedula,dircliente,ciudadcliente,telcliente,
                    emailcliente,opcionsexo,desclient,contrato,clave,tipo) values ('$codempleado','$fecharegistro','$nomempleado','$cedula',
                        '$dircliente','$ciudadcliente','$telcliente','$emailcliente','$opcionsexo','$desclient','$contrato','$clave','$tipo')");
                
                     //registrar_datos($valores, $tabla, $campos);
		
		echo 'se ha registrado exitosamente';
		mysql_close($conec);
					


?>