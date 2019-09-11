<?php	


include('conex.php');

$rut=$_GET["rut"];

 $query = "DELETE from empleado WHERE rut='$rut'";
	
if ($conex->query($query) == TRUE) {
    header("Location:gestionarempleados.php");
} else {
     echo "Error: " . $query . "<br>" . $conex->error;
}

$conex->close();

?>