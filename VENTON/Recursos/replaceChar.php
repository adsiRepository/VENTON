<?php

$function='<meta charset=utf-8>
<link href="Recursos/ProyectoTrimestre3.css" rel="stylesheet" type="text/css"/>

</head>
    <body>
        
        <div id="titulo">
            <h1><span>V</span>ENTON</h1>
        </div>
 
        <!--Aqui empieza la tabla que contendra el cuerpo del Formulario como tal-->

        <!--                  MENU SUPERIOR                         -->

        <div id="program">

            <div id="menu">

                <ul class="nav">

                    <li><a href="">Archivo</a>
                        <ul>
                            <li><a href="FormExcel.php">Importar Archivo</a></li>
                            <li><a href="FormCopiaSeguridad.php">Copia de Seguridad</a></li>
                            <li><a href="FormConfiguracion.php">Logo</a>
                            <li><a href="http://www.youtube.com/watch?v=LV-cgZ6FWtc">Salir</a>
                                <!--<ul>
                                    <li><a href="">Cierre Dia</a></li>
                                    <li><a href="">Balance General</a></li>
                                </ul>-->
                            </li>
                        </ul>
                    </li>

                    <li><a href="">Movimientos</a>
                        <ul>
                            <li><a href="FormVenta.php">Venta</a></li>
                            <li><a href="FormCompra.php">Compra</a></li>
                            <li><a href="FormCobros.php">Cobro</a></li>
                            <li><a href="FormPago.php">Pago</a></li>
                            <li><a href="FormArqueo.php">Arqueo</a></li>
                        </ul>
                    </li>

                    <li><a href="">Reportes</a>
                        <ul>
                            <li><a href="FormInventario.php">Inventario</a></li>
                            <li><a href="reporteProveedor.php">Proveedores</a></li>
                            <li><a href="FormCliente.php">Clientes</a></li>
                            <li><a href="FormEmpleado.php">Empleados</a></li>
                            <li><a href="reporteVentas.php">Ventas</a></li>
                            <li><a href="reporteCreditos.php">Creditos</a></li>
                        </ul>
                    </li>

                    <!--<li><a href="">Caja</a>
                        <ul>
                            
                            <li><a href="">Reportes</a></li>
                            
                        </ul>
                    </li>-->

                </ul>

            </div>

 <!-- ************************************************************************************************  -->



            <!--                    BARRA DE ACCESO DE ADMINISTRADOR                            -->


            <div id="admin">


                <p>Administrador<img id="mainkey" src="Imagenes/key.ico" alt="key"/></p>


                <div id="pass">
                    <form id="manager" action="" method="post">
                        <input type="password" name="mainpass" id="mainpass"/>
                        <input type="submit" name="enter" value="Entrar" id="ingreso_gerente"/>
                    </form>
                </div>

            </div>

            <!--  *********************************************************************  -->


            <!--BARRA LATERAL DE ACCESOS RAPIDOS -->

            <div id="accessdirect">
                <a href="FormVenta.php"><img src="Imagenes/gear2.png" class="access"/></a>
                <a href="FormCobros.php"><img id="divergente" src="Imagenes/gear2.png" class="access"/></a>
                <a href="FormPago.php"><img src="Imagenes/gear2.png" class="access"/></a>
            </div>
           


<div id="form">';

$replace= str_replace('"', "'", $function);

?>

<textarea>
    <?php   echo $replace;    ?>
</textarea>


        