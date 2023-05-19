<?php
 include "BD-Mysql/Conexion.php";
 $id=$_GET["id"];



 $sql=$conn->query("select * from libros where id_libros=$id");


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link rel="stylesheet" href="css/administrador.css">
  
    <script src="https://kit.fontawesome.com/f437d7f3c4.js" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

            <!-- menu vertical  -->

    <div id="sidebar">
      
        <ul>
            <li>

            <img class="imagen" src="assets/img/iconoa.png"> 
            </li>
            <div class="vertical-menu">
               
                <a href="Administrador.php "><i class="fa-solid fa-users"></i></i></a>     <!-- actores --> 
                <a href="Musica_serie.php"><i class="fa-sharp fa-solid fa-headphones"></i></i></a><!-- Musica --> 
                <a href="Premios.php"><i class="fa-solid fa-medal"></i></i></a>      <!-- premios --> 
                <a href="libros_serie.php"><i class="fa-solid fa-book"></i></i></a>        <!-- Libros --> 
                <a href="index.html"><i class="fa-sharp fa-solid fa-right-from-bracket"></i></i></a>   <!-- salir --> 
        </ul>
    
    </div>
    

    </div>
        <!-- formulario que permite modificar los datos de los libros con su respectivo controlador  -->
</head>

  <div class ="container-center p -2">
 <form class="col-4 p-2 m-auto " method="POST">
    <h5 class ="text-center  alert alert-secondary ">Modificar Lirbos</h5>  
    <input type="hidden" name="id" value ="<?=$_GET["id"]?>">
 <?php
 include "Controlador/modificar_libro.php"; //controlador para modificar datos y redirecionar a la pagina inicial 
  while($datos=$sql->fetch_object()) {?>

  <div class="mb-0">
    <label for="exampleInputEmail1" class="form-label">Titulo</label>
    <input type="text" class="form-control" name ="titulo" value="<?= $datos->titulo?>">
  </div>
  <div class="mb-0">
    <label for="exampleInputEmail1" class="form-label">Autor</label>
    <input type="text" class="form-control" name ="autor"value="<?= $datos->autor?>">
    
  </div>
  <div class="mb-0">
    <label for="exampleInputEmail1" class="form-label">Año</label>
    <input type="text" class="form-control" name ="año"value="<?= $datos->año?>">
    
  </div>
  <div class="mb-0">
    <label for="exampleInputEmail1" class="form-label">Editorial</label>
    <input type="text" class="form-control" name ="editorial"value="<?= $datos->editorial?>">
    
  </div>
  <div class="mb-0">
    <label for="exampleInputEmail1" class="form-label">Adicionales</label>
    <input type="text" class="form-control" name ="adicionales"value="<?= $datos->adicionales?>">
    
  </div>
 

   <?php } 
     
    ?>
 
  
  <button type="submit" class="btn btn-primary" name="btnregistrar"value="OK">Modificar</button>

  
</form>

</div>
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
       </script>
 
</body>
</html>