<?php
// modificar libros
if (!empty($_POST["btnregistrar"])) {
  // sentencia que nos premite   recargar los datos con los nuevos valores
    if (!empty($_POST["titulo"]) and !empty($_POST["autor"]) and !empty($_POST["año"]) and !empty($_POST["editorial"]) and !empty($_POST["adicionales"]) ) {
         // datos  de la tabla 
      $id=$_POST["id"];
      $titulo=$_POST["titulo"];
      $autor=$_POST["autor"];
      $año=$_POST["año"];
      $editorial=$_POST["editorial"];
      $adicionales=$_POST["adicionales"];
      
// recargo de datos 
      $sql=$conn->query("update libros set titulo='$titulo',autor='$autor',año='$año',editorial='$editorial',adicionales='$adicionales' where  id_libros =$id");
     if ($sql==1) {
        header("location:libros_serie.php");
     }else{
        echo" <div class ='alert alert-danger'>ERROR AL MODIFICAR</div> ";
     
    }
     } else {
     
        echo" <div class ='alert alert-warning'>ALGUNO DE LOS CAMPOS ESTA VACIO</div> ";
    }

}
   
?>