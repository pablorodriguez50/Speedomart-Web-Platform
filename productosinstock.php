<?php	


include('conex.php');

$codigo_barra=$_GET["codigo_barra"];

 $query = "UPDATE stock_prod SET stock=0 WHERE codigo_barra='$codigo_barra'";
	
if ($conex->query($query) == TRUE) {
    header("Location:gestionarproductos.php");
} else {
     echo "Error: " . $query . "<br>" . $conex->error;
}

$conex->close();

?>