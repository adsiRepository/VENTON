<?php

function generar_encabezado(){
//echo "
?>   
    <meta charset=utf-8>
<link href='Recursos/ProyectoTrimestre3.css' rel='stylesheet' type='text/css'/>

</head>
    <body>
        
        
        <a href="javascript:window.history.back();">
            <img src="Imagenes/back.png" title="volver"
           style="
           width: 50px;
           height:50px;
           position:absolute;
           z-index: 3;
           top: 45px;
           left: 30px;
           "/>
        </a>
        
        
        <div id='titulo'>
            <img src='Imagenes/logo_venton.png' title="VENTON"/>
            <!--<h1><span>V</span>ENTON</h1>-->
        </div>
 
        <!--Aqui empieza la tabla que contendra el cuerpo del Formulario como tal-->

        <!--                  MENU SUPERIOR                         -->

        <div id='program'>

            <div id='menu'>

                <ul class='nav'>

                    <li><a href=''>Archivo</a>
                        <ul>
                            <!--<li><a href='FormExcel.php'>Importar Archivo</a></li>-->
                            <li><a href='FormCopiaSeguridad_vend.php'>Copia de Seguridad</a></li>
                            <!--<li><a href='FormConfiguracion.php'>Logo</a>-->
                            <li><a href='index_main.php'>Salir</a>
                                <!--<ul>
                                    <li><a href=''>Cierre Dia</a></li>
                                    <li><a href=''>Balance General</a></li>
                                </ul>-->
                            </li>
                        </ul>
                    </li>

                    <li><a href=''>Movimientos</a>
                        <ul>
                            <li><a href='FormVenta_vend.php'>Venta</a></li>
                            <!--<li><a href='FormCompra.php'>Compra</a></li>
                            <li><a href='FormCobros.php'>Cobro</a></li>
                            <li><a href='FormPago.php'>Pago</a></li>
                            <li><a href='FormArqueo.php'>Arqueo</a></li>-->
                        </ul>
                    </li>

                    <li><a href=''>Reportes</a>
                        <ul>
                            <!--<li><a href='FormInventario.php'>Inventario</a></li>
                            <li><a href='reporteProveedor.php'>Proveedores</a></li>
                            <li><a href='FormCliente.php'>Clientes</a></li>
                            <li><a href='FormEmpleado.php'>Empleados</a></li>-->
                            <li><a href='reporteVentas_vend.php'>Ventas</a></li>
                            <!--<li><a href='reporteCreditos.php'>Creditos</a></li>-->
                        </ul>
                    </li>

                    <!--<li><a href=''>Caja</a>
                        <ul>
                            
                            <li><a href=''>Reportes</a></li>
                            
                        </ul>
                    </li>-->

                </ul>

            </div>
            
            <!--Linea-->
            
            <hr style="
                height: 6px;
                background-color:#DF7220;
                position:absolute;
                right: -25px;
                top:5%;
                width: 60%;
                z-index: 3;
                margin: 0;
                border-style:groove;
                ">

 <!-- ************************************************************************************************  -->



            <!--                    BARRA DE ACCESO DE ADMINISTRADOR                            -->


            <div id='admin'>


                <p>Administrador<img id='mainkey' src='Imagenes/key.ico' alt='key'/></p>


                <div id="pass">
                    <form id="manager" action="procesoIngreso.php" method="post">
			<input type="text" name="usuario" id="mainuser"/>
                        <input type="password" name="password" id="mainpass"/>
                        <input type="submit" name="enter" value="Entrar" id="ingreso_gerente"/>
                    </form>
                </div>

            </div>

            <!--  *********************************************************************  -->


            <!--BARRA LATERAL DE ACCESOS RAPIDOS -->

            <div id='accessdirect'>
                <!--<a href='FormVenta.php'>--><img src='Imagenes/gear2.png' class='access'/><!--</a>-->
                <!--<a href='FormCobros.php'>--><img id='divergente' src='Imagenes/gear2.png' class='access'/><!--</a>-->
                <!--<a href='FormPago.php'>--><img src='Imagenes/gear2.png' class='access'/><!--</a>-->
            </div>
           


<div id='form'>

    
<?php


}
