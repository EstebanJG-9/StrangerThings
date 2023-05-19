<?php
// clase eliminar actores 
// sentencia para reconocer el id y si es correcto el id del actor lo borrara 
if (!empty($_GET["id"])) {
$id=$_GET["id"];

$Sql=$conn->query("delete from actores where  id_actor=$id");
// sql ==1 lo borra
if ($Sql==1){
    echo '<div class ="alert alert-success"> ACTOR ELIMINADO  </div>';
     

}else{

   echo '<div>ERROR </div> ';
         

}
}  


?>