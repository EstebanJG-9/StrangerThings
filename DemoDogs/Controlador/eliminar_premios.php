<?php
// eliminar premios 
if (!empty($_GET["id"])) {
$id=$_GET["id"];
// sentencia sql ==1 si reconoce el id lo borra de lo contrario presentara un error con else 
$Sql=$conn->query("delete from premios where  id_premios=$id");

if ($Sql==1){
    echo '<div class ="alert alert-success"> PREMIOS ELIMINADO </div>';
     

}else{

   echo '<div>ERROR </div> ';
         

}
}  


?>