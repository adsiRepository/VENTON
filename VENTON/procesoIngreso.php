

<?php    

        include 'Recursos/ConexionBD.php';
//include("conexionventon.php");

if(isset($_POST["usuario"]) && isset($_POST["password"])){
    
        $user=$_POST["usuario"];
        $key=$_POST["password"];
	
        conex();
    
        $consulta=mysql_query("select * from empleados where cedula='$user' and clave='$key'");
	
	if (mysql_num_rows($consulta)>0){
            
            while($resul=mysql_fetch_array($consulta)){
                
                /*session_start();
		$_SESSION['usuario']=$user;
		$_SESSION['tipo']=$resul[12];*/
		
		if($resul[12]=="administrador"){
                    
                session_start();
		$_SESSION['usuario']=$resul[2];
		$_SESSION['tipo']=$resul[12]; 
                    
		echo "<script type='text/javascript'>
		  window.location='indexAdmin.php';
		  </script>";
		}
                else if($resul[12]=="vendedor"){
                    
                session_start();
		$_SESSION['usuario']=$resul[2];
		$_SESSION['tipo']=$resul[12];
                    
                    echo "<script type='text/javascript'>
                        window.location='indexVendedor.php';
                        </script>";
		}
	} 
	} 
	else
	{
            ?>

<script type='text/javascript'>
    alert("Usuario o Contraseña Incorrecta!");
    window.location='index_main.php';
</script>

    <?php
        }
        }
        
        mysql_close();
		 