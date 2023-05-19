<?php
// modificar actores 
if (!empty($_POST["btnregistrar"])) {
  // sentencia que nos premite   recargar los datos con los nuevos valores
    if (!empty($_POST["nombre"]) and !empty($_POST["edad"]) and !empty($_POST["personaje"]) and !empty($_POST["sexo"]) and !empty($_POST["rol"]) and !empty($_POST["temporada"])) {
      // datos  de la tabla 
      $id=$_POST["id"];
      $nombre=$_POST["nombre"];
      $edad=$_POST["edad"];
      $personaje=$_POST["personaje"];
      $sexo=$_POST["sexo"];
      $rol=$_POST["rol"];
      $temporada=$_POST["temporada"];
// recargo de datos 
      $sql=$conn->query("update actores set nombre='$nombre',edad=$edad,personaje='$personaje',sexo='$sexo',rol='$rol',temporada='$temporada' where  id_actor =$id");
     if ($sql==1) {
        header("location:Administrador.php");
     }else{
        echo" <div class ='alert alert-danger'>ERROR AL MODIFICAR</div> ";
     
    }
     } else {
     
        echo" <div class ='alert alert-warning'>ALGUNO DE LOS CAMPOS ESTA VACIO</div> ";
    }

}
   
?>