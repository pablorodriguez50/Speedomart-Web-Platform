<?php

    $hostname = "localhost";
    $usuario = "root";
    $clave = "";
    $bd = "speedomart";

    $conex = mysqli_connect($hostname,$usuario,$clave,$bd);

	if(!$conex)
	{
		die("Fallo la conexion");
	}else
	{
		// Conexion OK
	}

?>