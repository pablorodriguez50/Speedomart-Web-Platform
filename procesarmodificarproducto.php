 <?php	

session_start();


 if(!empty($_SESSION["check"]))
 {
    
    include('conex.php');

                    $_SESSION["mensaje"] = $_SESSION["check"];

                    $id =$_POST['id'];
                    $codigo_barra=$_SESSION["codbarra"];
                    $nombre=$_POST["nombre"];
                    $descripcion=$_POST["descripcion"];
                    $precio=$_POST["precio"];
                    $stock=$_POST["stock"]; 
                    $categoria=$_POST["categoria"];
            

                    $query = "UPDATE producto 
                            SET nombre='$nombre' , descripcion='$descripcion' , precio='$precio',  idCategoria ='$categoria' WHERE codigo_barra='$codigo_barra'";

                    $query2 = "UPDATE stock_prod INNER JOIN producto 
                                SET stock_prod.stock = '$stock' 
                                WHERE producto.idProducto = '$id' AND stock_prod.idStock_prod = producto.stock ";

                    if ($conex->query($query) == TRUE) {
                        if ($conex->query($query2) == TRUE) {
                        //$_SESSION["mensaje"] = "Producto modificado correctamente";
                         //$_SESSION["mensaje"] = "query" . $query . "<br>" . $conex->error;
                        header("Location:modificarproducto.php");}
                    } else {
                        // $_SESSION["mensaje"] = "Error: " . $query . "<br>" . $conex->error;
                        //$_SESSION["mensaje"] = "Error: ".$conex->error.".";
                        header("Location:modificarproducto.php");
                    }

                    $conex->close();
 }else{


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
        header("Location:modificarproducto.php");
       //echo "Sorry, your file was not uploaded.";
} else if($uploadOk == 2){

         $_SESSION["mensaje"] = "El archivo subido excede los 1 MB";
         header("Location:modificarproducto.php");
  

}else {
          if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
                    
                    include('conex.php');

                    $id =$_POST['id'];
                    $codigo_barra=$_SESSION["codbarra"];
                    $nombre=$_POST["nombre"];
                    $descripcion=$_POST["descripcion"];
                    $precio=$_POST["precio"];
                    $stock=$_POST["stock"]; 
                    $categoria=$_POST["categoria"];
            

                    $query = "UPDATE producto 
                            SET nombre='$nombre' , imagen='$target_file' ,
                                descripcion='$descripcion' , precio='$precio',  idCategoria ='$categoria' WHERE codigo_barra='$codigo_barra'";

                    $query2 = "UPDATE stock_prod INNER JOIN producto 
                                SET stock_prod.stock = '$stock' 
                                WHERE producto.idProducto = '$id' AND stock_prod.idStock_prod = producto.stock ";

                    if ($conex->query($query) == TRUE) {
                        if ($conex->query($query2) == TRUE) {
                        $_SESSION["mensaje"] = "Producto modificado correctamente";
                         //$_SESSION["mensaje"] = "query" . $query . "<br>" . $conex->error;
                        header("Location:modificarproducto.php");}
                    } else {
                        // $_SESSION["mensaje"] = "Error: " . $query . "<br>" . $conex->error;
                        $_SESSION["mensaje"] = "Error: ".$conex->error.".";
                        header("Location:modificarproducto.php");
                    }

                    $conex->close();
          



 

          } else {
              $_SESSION["mensaje"] = "Error , algo ocurrio al intentar subir la imagen...";
              header("Location:modificarproducto.php");
          }    
}


}else{ 
         $_SESSION["mensaje"] = "Error , suba un archivo valido...";
         header("Location:modificarproducto.php");
}
 }




?>