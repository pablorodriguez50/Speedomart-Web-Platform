<?php 

session_start();

include('conex.php');

 
if (isset($_GET['rut']) and isset($_GET['password'])){

$rut = $_GET['rut'];
$password = $_GET['password'];

 $query = "SELECT * FROM empleado WHERE rut='$rut' AND contrasena='$password'";


$result = mysqli_query($conex, $query) or die(mysqli_error($conex));
$count = mysqli_num_rows($result);


if ($row=mysqli_fetch_assoc($result)){

   $_SESSION['nombre_usuario'] = $row["nombre"];
   $_SESSION['cargo_usuario'] = $row["cargo"];
   $_SESSION['rut_usuario'] = $row["rut"];
   $_SESSION['idSup'] = $row["idSup"];
   header("Location:home.php");
}else{
//ERROR
    $_SESSION['mensaje_error'] = "credenciales incorrectas";
    header("Location:index.php");
    
}   
}

 

?>

 