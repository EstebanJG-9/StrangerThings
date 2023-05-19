<?php
// modificar bandas 
if (!empty($_POST["btnregistrar"])) {
  // sentencia que nos premite   recargar los datos con los nuevos valores
    if (!empty($_POST["nombre"]) and !empty($_POST["artista"]) and !empty($_POST["año"]) and !empty($_POST["episodio"]) and !empty($_POST["adicionales"]) ) {
      // datos  de la tabla 
      $id=$_POST["id"];
      $nombre=$_POST["nombre"];
      $artista=$_POST["artista"];
      $año=$_POST["año"];
      $episodio=$_POST["episodio"];
      $adicionales=$_POST["adicionales"];
      // recargo de datos 

      $sql=$conn->query("update bandas set nombre='$nombre',artista='$artista',año='$año',Episodio='$episodio',adicionales='$adicionales' where  id_banda =$id");
     if ($sql==1) {
        header("location:Musica_serie.php");
     }else{
        echo" <div class ='alert alert-danger'>ERROR AL MODIFICAR</div> ";
     
    }
     } else {
     
        echo" <div class ='alert alert-warning'>ALGUNO DE LOS CAMPOS ESTA VACIO</div> ";
    }

}
   
?>