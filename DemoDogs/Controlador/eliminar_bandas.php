<?php
//eliminar bandas 
if (!empty($_GET["id"])) {
$id=$_GET["id"];

$Sql=$conn->query("delete from bandas where  id_banda=$id");
// sentencia sql ==1 si reconoce el id lo borra de lo contrario presentara un error con else 
if ($Sql==1){
    echo '<div class ="alert alert-success"> Bandas ELIMINADO </div>';
     

}else{

   echo '<div>ERROR </div> ';
         

}
}  


?>