<?php
// registro premios 
 if (!empty($_POST["btnregistrar"])) {
// recargar datos de nuevo a la tabla 
    if (!empty($_POST["organizacion"]) and !empty($_POST["categoria"]) and !empty($_POST["nominados"]) and !empty($_POST["resultados"]) and !empty($_POST["adicionales"])){
        $organizacion=$_POST["organizacion"];
        $categoria=$_POST["categoria"];
        $nominados=$_POST["nominados"];
        $resultados=$_POST["resultados"];
        $adicionales=$_POST["adicionales"];
      

// llenar la tabla 
        $sql=$conn->query("insert into premios (organizacion,categoria,nominados,resultados,adicionales)values('$organizacion','$categoria','$nominados','$resultados','$adicionales')");
        if ($sql==1){
            echo '<div class ="alert alert-success"> Premios registrado correctamente </div>';
        }else{
            echo '<div class ="alert alert-danger"> Error al registrarse </div>';
        }
    }else{
        echo '<div class ="alert alert-danger"> Algunos de los campos esta vacio </div>';
    }

 }    




?>
    
