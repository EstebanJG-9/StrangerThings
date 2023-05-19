<?php
// registro banda 
 if (!empty($_POST["btnregistrar"])) {
// recargar datos de nuevo a la tabla 
    if (!empty($_POST["nombre"]) and !empty($_POST["artista"]) and !empty($_POST["año"]) and !empty($_POST["episodio"]) and !empty($_POST["adicionales"])){
        $nombre=$_POST["nombre"];
        $artista=$_POST["artista"];
        $año=$_POST["año"];
        $episodio=$_POST["episodio"];
        $adicionales=$_POST["adicionales"];
      
// llenar la tabla 
        $sql=$conn->query("insert into bandas (nombre,artista,año,episodio,adicionales)values('$nombre','$artista','$año','$episodio','$adicionales')");
        if ($sql==1){
            echo '<div class ="alert alert-success"> Banda registrado correctamente </div>';
        }else{
            echo '<div class ="alert alert-danger"> Error al registrarse </div>';
        }
    }else{
        echo '<div class ="alert alert-danger"> Algunos de los campos esta vacio </div>';
    }

 }    




?>
    

