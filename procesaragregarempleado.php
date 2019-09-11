<?php	

session_start();

include('conex.php');

$rut=$_GET["rut"];
$nombre=$_GET["nombre"];
$apellido=$_GET["apellido"];
$cargo=$_GET["cargo"];
$correo=$_GET["correo"];
$contrasena=$_GET["contrasena"];

$idSup =  $_SESSION['idSup'];

 $query = "INSERT INTO empleado (rut,nombre,apellido,cargo,correo,contrasena,idSup)  VALUES ('$rut','$nombre','$apellido' ,'$cargo','$correo' ,'$contrasena',$idSup)";




if ($conex->query($query) == TRUE) {

    $_SESSION["mensaje"] = "Empleado agregado correctamente";
    header("Location:agregarempleado.php");
} else {
    // $_SESSION["mensaje"] = "Error: " . $query . "<br>" . $conex->error;
     $_SESSION["mensaje"] = "Error: ".$conex->error.".";
     header("Location:agregarempleado.php");
}

$conex->close();

?>