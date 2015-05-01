

<?php

function generar_encabezado(){
//echo "
?>   
    <meta charset=utf-8>
<link href='Recursos/ProyectoTrimestre3.css' rel='stylesheet' type='text/css'/>

</head>
    <body>
        <!--javascript:window.history.back();-->
        <a href="indexAdmin.php">
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
                            <!--<li><a href='FormCopiaSeguridad.php'>Copia de Seguridad</a></li>-->
                            <li><a href='FormConfiguracion.php'>Logo</a>
                            <li><a href='Recursos/CerrarSession.php' title="Cerrar Aplicacion">Salir</a>
                                <!--<ul>
                                    <li><a href=''>Cierre Dia</a></li>
                                    <li><a href=''>Balance General</a></li>
                                </ul>-->
                            </li>
                        </ul>
                    </li>

                    <li><a href=''>Movimientos</a>
                        <ul>
                            <li><a href='FormVenta.php'>Venta</a></li>
                            <li><a href=''>Productos</a>
                                <ul>
                                    <li><a href='FormCompra.php'>Compra</a></li>
                                    <li><a href='Inventario.php'>Modificaciones</a></li>
                                </ul>
                            </li>
                            <li><a href='FormCobros.php'>Cobro</a></li> 
                            <li><a href='FormCliente.php'>Nuevo Cliente</a></li>
                            <li><a href='FormEmpleado.php'>Nuevo Empleado</a></li>
                            <!--<li><a href='FormPago.php'>Pago</a></li>-->
                            <!--<li><a href='FormArqueo.php'>Arqueo</a></li>-->
                        </ul>
                    </li>

                    <li><a href=''>Reportes</a>
                        <ul>
                            <li><a href='Inventario.php'>Inventario</a></li>
                            <li><a href='reporteProveedor.php'>Proveedores</a></li>
                            <li><a href='reporteVentas.php'>Ventas</a></li>
                            <li><a href='reporteCreditos.php'>Creditos</a></li>
                            <li><a href='reporteClientes.php'>Clientes</a></li>
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
 <div
     style="
     right:5%;
     top: 60px;
     position: absolute;
     z-index: 4;
     ">
     <label>Usuario Actual:</label>
     <span
         style="
         background-color:#DF7220;
         font-size: 110%;
         ">
 <?php echo " ".$_SESSION['usuario'];  ?>
     </span>
 </div>


            <!--                    BARRA DE ACCESO DE ADMINISTRADOR                            -->


            <!--<div id='admin'>

                
                
                <p>Administrador<img id='mainkey' src='Imagenes/key.ico' alt='key'/></p>


                <div id='pass'>
                    <form id='manager' action='' method='post'>
                        <input type='password' name='mainpass' id='mainpass'/>
                        <input type='submit' name='enter' value='Entrar' id='ingreso_gerente'/>
                    </form>
                </div>

            </div>-->

            <!--  *********************************************************************  -->


            <!--BARRA LATERAL DE ACCESOS RAPIDOS -->

            <div id='accessdirect'>
                <!--<a href='FormVenta.php'>--><img src='Imagenes/gear2.png' class='access' title="La Tienda Virtual Venton"/><!--</a>-->
                <!--<a href='FormCobros.php'>--><img id='divergente' src='Imagenes/gear2.png' class='access' title="Tu Negocio en Linea"/><!--</a>-->
                <!--<a href='FormPago.php'>--><img src='Imagenes/gear2.png' class='access' title="Llevalo a donde Quieras"/><!--</a>-->
            </div>
           


<div id='form'>

    
<?php 

//";

}
