<?php
// eliminar libro 
if (!empty($_GET["id"])) {
$id=$_GET["id"];

$Sql=$conn->query("delete from libros where  id_libros=$id");
// sentencia sql ==1 si reconoce el id lo borra de lo contrario presentara un error con else 
if ($Sql==1){
    echo '<div class ="alert alert-success"> LIBROS ELIMINADO </div>';
     

}else{

   echo '<div>ERROR </div> ';
         

}
}  


?>