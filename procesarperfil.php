<?php	

session_start();

include('conex.php');

$rut=$_SESSION["rut_perfil"];
$nombre=$_GET["nombre"];
$apellido=$_GET["apellido"];
$cargo="administrador";
$correo=$_GET["correo"];
$contrasena=$_GET["contrasena"];

//$idSup = "5";

 $query = "UPDATE empleado SET nombre='$nombre' , apellido='$apellido' , cargo='$cargo' , correo='$correo' , contrasena='$contrasena' WHERE rut='$rut'";




if ($conex->query($query) == TRUE) {

    $_SESSION["mensaje_perfil"] = "Perfil modificado correctamente , inicie sesion nuevamente para visualizar los cambios.";
    header("Location:perfil.php");
} else {
    // $_SESSION["mensaje"] = "Error: " . $query . "<br>" . $conex->error;
     $_SESSION["mensaje_perfil"] = "Error: ".$conex->error.".";
     header("Location:perfil.php");
}

$conex->close();

?>