<?php
// registro actor 
 if (!empty($_POST["btnregistrar"])) {
// recargar datos de nuevo a la tabla 
    if (!empty($_POST["nombre"]) and !empty($_POST["edad"]) and !empty($_POST["personaje"]) and !empty($_POST["sexo"]) and !empty($_POST["rol"]) and !empty($_POST["temporada"])){
        $nombre=$_POST["nombre"];
        $edad=$_POST["edad"];
        $personaje=$_POST["personaje"];
        $sexo=$_POST["sexo"];
        $rol=$_POST["rol"];
        $temporada=$_POST["temporada"];
// llenar la tabla 
        $sql=$conn->query("insert into actores (nombre,edad,personaje,sexo,rol,temporada)values('$nombre','$edad','$personaje','$sexo','$rol','  $temporada')");
        if ($sql==1){
            echo '<div class ="alert alert-success"> Actor registrado correctamente </div>';
        }else{
            echo '<div class ="alert alert-danger"> Error al registrarse </div>';
        }
    }else{
        echo '<div class ="alert alert-danger"> Algunos de los campos esta vacio </div>';
    }

 }    




?>