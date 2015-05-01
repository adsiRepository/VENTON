<!doctype html>
<html>
    <head>
        <meta charset="utf-8">  
        <!--<link href="ProyectoTrimestre3.css" rel="stylesheet" type="text/css"/>-->
		
    <title>surtido</title>
    
    <?php
    
    include 'Recursos/ConexionBD.php'; 
    
    ?>

    </head>
    
    <body>
        
        <form action='tabla_surtido2.php' method="post">
        
        <?php
        
        $a=1;
        
        do{
        
        if($a==1){
            
        $pr=$_REQUEST['submit']==true;
        
        echo "hecho";
        
        }
        
        echo "otra?: si: 1, no: 2";
        
        }while($a==1);
        
        ?>
            
            <input type="submit" value="aceptar"/>
            
        </form>
        
    </body>
    
</html>
        