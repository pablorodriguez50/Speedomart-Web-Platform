<?php	

session_start();

include('conex.php');

$rut=$_SESSION["rut_empleado"];
$nombre=$_GET["nombre"];
$apellido=$_GET["apellido"];
$cargo=$_GET["cargo"];
$correo=$_GET["correo"];
$contrasena=$_GET["contrasena"];

//$idSup = "5";

 $query = "UPDATE empleado SET nombre='$nombre' , apellido='$apellido' , cargo='$cargo' , correo='$correo' , contrasena='$contrasena' WHERE rut='$rut'";




if ($conex->query($query) == TRUE) {

    $_SESSION["mensaje"] = "Empleado modificado correctamente";
    header("Location:modificarempleado.php");
} else {
    // $_SESSION["mensaje"] = "Error: " . $query . "<br>" . $conex->error;
     $_SESSION["mensaje"] = "Error: ".$conex->error.".";
     header("Location:modificarempleado.php");
}

$conex->close();

?>