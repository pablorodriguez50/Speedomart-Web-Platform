<?php	

session_start();




// Verifica si es un imagen o un archivo x

if(isset($_POST["submit"]) && isset($_FILES['imagen'])) {

    $target_dir = "images/imgproductos/";
    $target_file = $target_dir . basename($_FILES["imagen"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


    $check = getimagesize($_FILES["imagen"]["tmp_name"]);

    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        //echo "File is not an image.";
        $uploadOk = 0;
    }


    if ($_FILES["imagen"]["size"] > 1000000) { //1MB
         //echo "Sorry, your file is too large.";
         $uploadOk = 2;
     }



    if ($uploadOk == 0) {
        $_SESSION["mensaje"] = "El archivo subido no es una imagen";
        header("Location:agregarproducto.php");
       //echo "Sorry, your file was not uploaded.";
} else if($uploadOk == 2){

         $_SESSION["mensaje"] = "El archivo subido excede los 1 MB";
         header("Location:agregarproducto.php");
  

}else {
          if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
              
                include('conex.php');

                $codigo_barra=$_POST["codigo_barra"];
                $nombre=$_POST["nombre"];


                $descripcion=$_POST["descripcion"];
                $precio=$_POST["precio"];
                $stock=$_POST["stock"];

                

                $categoria=$_POST["categoria"];
                $ubicacion=$_POST["ubicacion"];
                $idSup =  $_SESSION['idSup'];

                

                //Query 1 , Inserta la tabla stock prod
                $query1="INSERT INTO stock_prod (idSup, codigo_barra, stock, ubicacion)  
                    VALUES ('$idSup','$codigo_barra','$stock' ,'$ubicacion')";
                

                $query2="INSERT INTO producto(codigo_barra, nombre, imagen, descripcion, precio, stock, idCategoria) 
                        SELECT '$codigo_barra','$nombre','$target_file' ,'$descripcion','$precio',
                        (SELECT idStock_prod from stock_prod where codigo_barra=$codigo_barra and idSup=$idSup),'$categoria'";


                if (($conex->query($query1) == TRUE)) {
                    if (($conex->query($query2) == TRUE)) {
                    $_SESSION["mensaje"] = "Producto agregado correctamente";
                    header("Location:agregarproducto.php");
                    }else{
                        $_SESSION["mensaje"] = "Error: ".$conex->error.".";
                        header("Location:agregarproducto.php");
                    }
                } else {
                    // $_SESSION["mensaje"] = "Error: " . $query . "<br>" . $conex->error;
                    $_SESSION["mensaje"] = "Error: ".$conex->error.".";
                    header("Location:agregarproducto.php");
                }
                $conex->close();
 

          } else {
              $_SESSION["mensaje"] = "Error , algo ocurrio al intentar subir la imagen...";
              header("Location:agregarproducto.php");
          }    
}


}else{ 
         $_SESSION["mensaje"] = "Error , suba un archivo valido...";
         header("Location:agregarproducto.php");
}




?>