<?php
// nos permite evaluar en la base de datos que los datos ingresados en  el formulario 
// son corrector dependiendo el rol
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;
// conn variable que nos permite con la clase concect validar la conexion 
$conn=mysqli_connect("localhost","root","","StrangerThings");
// seleciona los datos de la tabla usuario  
$consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conn,$consulta);

$filas=mysqli_fetch_array($resultado);
// condicional  que permite determinar si lo  datos ingresados son del rol 
// -> administrador
//-> fanatico 
if($filas['id_rol']==1){ //administrador
    header("location:Administrador.php");

}else
if($filas['id_rol']==2){ //fanatico 
header("location:Fanatico.php");
}
else{
    ?>
<?php
    include("Formulario.html");
    ?>
<h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conn);