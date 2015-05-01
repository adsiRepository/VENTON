


<?php   

        include 'Recursos/ConexionBD.php';
        //include("conexionventon.php");
        
        $conexion=conectar_servidor();
        conectar_base($conexion);
        
        
        if(isset($_REQUEST['enter'])){

if(isset($_POST["usuario"]) && isset($_POST["password"]))
{
	
    $consulta=mysql_query("select * from empleados where cc='".$_POST['usuario']."'");
    
    //$consulta=  mysql_query("select * from empleados");

    $r=mysql_num_rows($consulta);
    
    if($r>0)
	{
	
	while($resul=mysql_fetch_array($consulta)){
            
               $clv="$resul[claveUsuario]";
               
            if($clv===$_REQUEST['password']){
		session_start();
		$_SESSION['usuario']=$_POST["usuario"];
		$_SESSION['tipo']=$resul[12];
		
		if($resul[12]=="administrador"){
                  echo "<script type='text/javascript'>
		  window.location='paginaadmin.php';
		  </script>";
		}
		else if($resul[12]=="vendedor"){
		echo "<script type='text/javascript'>
		  window.location='paginavendedor.php';
		  </script>";
		}
                else{
                    echo "
                        <script>
                        alert('No se te ha Asignado Cargo aún, Consulta al Administrador');
                        window.location='index_main.php';
                        </script>
                        ";
                }
            }
		
		
	} //if
	} //while
	
	else
	{
			?>

		<script type='text/javascript'>
		  alert("Usuario o Contraseña Incorrecta!");
		  </script>
		  
		           <?php
				   
				  echo "<script type='text/javascript'>
		  window.location='index_main.php';
		  </script>";
 
		  
	}
}
        }
        

mysql_close($conexion);


		  
