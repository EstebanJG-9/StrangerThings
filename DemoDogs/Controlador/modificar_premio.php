<?php
// modificar premios 
if (!empty($_POST["btnregistrar"])) {
  // sentencia que nos premite   recargar los datos con los nuevos valores
    if (!empty($_POST["organizacion"]) and !empty($_POST["categoria"]) and !empty($_POST["nominados"]) and !empty($_POST["resultados"]) and !empty($_POST["adicionales"]) ) {
      // datos  de la tabla  
      $id=$_POST["id"];
      $organizacion=$_POST["organizacion"];
      $categoria=$_POST["categoria"];
      $nominados=$_POST["nominados"];
      $resultados=$_POST["resultados"];
      $adicionales=$_POST["adicionales"];
     // recargo de datos  

      $sql=$conn->query("update premios set organizacion='$organizacion',categoria='$categoria',nominados='$nominados',resultados='$resultados',adicionales='$adicionales' where  id_premios =$id");
     if ($sql==1) {
        header("location:premios.php");
     }else{
        echo" <div class ='alert alert-danger'>ERROR AL MODIFICAR</div> ";
     
    }
     } else {
     
        echo" <div class ='alert alert-warning'>ALGUNO DE LOS CAMPOS ESTA VACIO</div> ";
    }

}
   
?>