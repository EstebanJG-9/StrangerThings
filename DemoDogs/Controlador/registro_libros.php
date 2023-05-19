<?php
//  registro libros 
 if (!empty($_POST["btnregistrar"])) {
// recargar datos de nuevo a la tabla 
    if (!empty($_POST["titulo"]) and !empty($_POST["autor"]) and !empty($_POST["año"]) and !empty($_POST["editorial"]) and !empty($_POST["adicionales"])){
        $titulo=$_POST["titulo"];
        $autor=$_POST["autor"];
        $año=$_POST["año"];
        $editorial=$_POST["editorial"];
        $adicionales=$_POST["adicionales"];
      
// llenar la tabla 
        $sql=$conn->query("insert into libros (titulo,autor,año,editorial,adicionales)values('$titulo','$autor','$año','$editorial','$adicionales')");
        if ($sql==1){
            echo '<div class ="alert alert-success"> libros  registrado correctamente </div>';
        }else{
            echo '<div class ="alert alert-danger"> Error al registrarse </div>';
        }
    }else{
        echo '<div class ="alert alert-danger"> Algunos de los campos esta vacio </div>';
    }

 }    




?>
    
