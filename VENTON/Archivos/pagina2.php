<html>
<head>
    
<title>Problema Si señor</title>
</head>
<body>

<?php

$file = fopen("Archivos/datos.txt","a") or die("Problemas en la creacion");

fputs($file,
        "Nombre: ".$_REQUEST['nombre']."".PHP_EOL.""
        . "Direccion: ".$_REQUEST['direccion']."
");


if (isset($_REQUEST['jamonqueso']))
{
  fputs($file,"Cantidad de Jamon y Queso: ".$_REQUEST['cantjamonqueso']."
");
}

  
if (isset($_REQUEST['napolitana']))
{
  fputs($file,"Cantidad de Napolitana: ".$_REQUEST['cantnapolitana']."
");
}

  
if (isset($_REQUEST['muzzarella']))
{
  fputs($file,"Cantidad de Muzzarella: ".$_REQUEST['cantmuzzarella']."
");
}
  
fputs($file,"--------------------------------------------------------"
        . "".PHP_EOL."
        ");

echo "El pedido se cargo correctamente.";
?>

</body>
</html>