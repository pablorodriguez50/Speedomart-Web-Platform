<?php	

 

include('conex.php');

$rut=$_GET["rut"];
 

$query = "SELECT * FROM empleado WHERE rut='$rut'"; 
$datos=mysqli_query($conex,$query);

$cargo;

if($fila=mysqli_fetch_assoc($datos))
		{  

           $cargo = $fila["cargo"]; 
          
        }

     
      
if($cargo == "personal"){ // SE PUEDE BLOQUEAR

  $query = "UPDATE empleado SET cargo='bloqueado' WHERE rut='$rut'";
  
  if ($conex->query($query) == TRUE) {

     
     header("Location:gestionarempleados.php");
} else {
     
     die('error!');
}

 

}else{ // SE PUEDE ACTIVAR

     $query = "UPDATE empleado SET cargo='personal' WHERE rut='$rut'";
  
  if ($conex->query($query) == TRUE) {


     header("Location:gestionarempleados.php");
} else {
  
         die('error!');
}


}

 $conex->close();

?>