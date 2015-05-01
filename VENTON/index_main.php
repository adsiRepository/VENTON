<!DOCTYPE html>
<!--			Etiqueta <datalist><option></option></datalist>      Una lista de Selecciones 

                                                <select required></select>  //obliga a que este campo sea diligenciado

-->



<html>
    <head>
        <title>Index</title>
		
        <link rel="shortcut icon" href="Imagenes/logo_venton.png"/>
    
    <?php
            
            include_once 'Recursos/FuncionEntorno_pie.php';
            include 'Recursos/ConexionBD.php';
            
    ?>       

<meta charset=utf-8>
<link href='Recursos/ProyectoTrimestre3.css' rel='stylesheet' type='text/css'/>

<style>
    #logo_venton{
        width: 30%;
        height: 15%;
        position: relative;
    }
    #form{
        /*font-family: AlphaWood;*/
        font-family: monospace;
        font-size: 170%;
        color: #29129E;
        padding-top: 1%;
    }
    #poster{
    margin: 0;
    position: absolute;
    top:-6px;
    left:-6px;
    width: 71%;
    height: 19%;
    background-color:gainsboro;
    z-index: 1;
    overflow:hidden;
    }
    
    
    
</style>

</head>
    <body>
        
        
        <div id="poster">
            
            <div id="a" class="line"></div>
            <div id="b" class="line"></div>
            <div id="c" class="line"></div>
            <div id="d"></div>
            <!--
                 -webkit-animation:float_down_to_left_up 10s infinite linear;-->
            
        </div>
        
        
<div id='program'>

            
            <!--                    BARRA DE ACCESO DE ADMINISTRADOR                            -->


            <div id='admin'>

                <center>
                <p>Ingreso<img id='mainkey' src='Imagenes/key.ico' alt='key'/></p>
                </center>

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
                <!--<a href='FormVenta.php'>--><img src='Imagenes/gear2.png' class='access' title="La Tienda Virtual Venton"/><!--</a>-->
                <!--<a href='FormCobros.php'>--><img id='divergente' src='Imagenes/gear2.png' class='access' title="Tu Negocio en Linea"/><!--</a>-->
                <!--<a href='FormPago.php'>--><img src='Imagenes/gear2.png' class='access' title="Llevalo a donde Quieras"/><!--</a>-->
            </div>
           
            
<div id='form'>
    
    
    <!--<img src='Imagenes/index_imagen.png' id='logo_index'/>-->
    
    
    <center>
        
        <img src='Imagenes/logo_venton.png' id='logo_venton'/>
        
        <br/>
        <br/>
        <br/>
        
        <h1>
            Bienvenidos a Venton
        </h1>
        
        <br/>
        
        <h3>
            Sistema de Gestion de Negocios
        </h3>
        
        <br/>
        
        <p>
            Autores del Proyecto:<br/>
            Alexander Qembauer, Christian Lopez,<br/>
            Braden Velásquez, Angie Daniela Pabón,<br/>
            Diana Jurado Valencia, Miguel González<br/>
            Jose Antonio Arango,<br/>
            ADSI-38 SENA, 2014
        </p>        
    
    </center>
    
    
    <?php
    
        generar_pie();
    
    
    
    