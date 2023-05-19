
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
        <!-- contenedor con formulario incial  -->
</head>
<h3 class ="text-center p-1 bg-black text-white">Banda Sonora</h3>
<?php

 include "BD-Mysql/Conexion.php";
 include "Controlador/eliminar_bandas.php";
?>
  <div class ="container-fluid row">
  <form class="col-3 p-3 " method="POST">
    <h5 class ="text-center text-secondary ">Registro de Bandas</h5>
    
    <?php
     
   include "BD-Mysql/Conexion.php";   // conexion base de datos 

    include "Controlador/registro_banda.php";   // controlador 
    
    ?>
    <div class="mb-0">
    <label for="exampleInputEmail1" class="form-label">Nombres</label>
    <input type="text" class="form-control" name ="nombre">
  </div>
  <div class="mb-0">
    <label for="exampleInputEmail1" class="form-label">Artista</label>
    <input type="text" class="form-control" name ="artista">
    
  </div>
  <div class="mb-0">
    <label for="exampleInputEmail1" class="form-label">Año</label>
    <input type="text" class="form-control" name ="año">
    
  </div>
  <div class="mb-0">
    <label for="exampleInputEmail1" class="form-label">Episodio</label>
    <input type="text" class="form-control" name ="episodio">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Adicionales</label>
    <input type="text" class="form-control" name ="adicionales">
    
 
    </div>

  <button type="submit" class="btn btn-primary" name="btnregistrar"value="OK">Registrar</button>

  
</form>

<div class="col-9 p-5">
      <!-- tabla  para el area de musica  -->

<table class="table">
  <thead class ="bg-warning">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Artista</th>
      <th scope="col">Año</th>
      <th scope="col">Episodio</th>
      <th scope="col">Adicional</th>
    
    </tr>
  </thead>
  <tbody>
    <?php
    include "BD-Mysql/Conexion.php";
    $sql=$conn->query("select * from bandas");  // controlador 
    while($datos=$sql->fetch_object()){?>
      <tr>
     <td><?= $datos->id_banda ?></td>
      <td><?= $datos->nombre ?></td>
      <td><?= $datos->artista ?></td>
      <td><?= $datos->año ?></td>
      <td><?= $datos->episodio ?></td>
      <td><?= $datos->adicionales ?></td>
      
      <td>
        <a href="modificar_banda.php ?id=<?=$datos->id_banda?>" class ="btn btn-small btn-danger"><i class="fa-solid fa-user-pen"></i></a>
        <a href="Musica_serie.php ?id=<?=$datos->id_banda?>"class ="btn btn-small btn-warning"><i class="fa-solid fa-trash"></i></a>
      </td>
    </tr>
    <?php }
             
    ?>
   
  </tbody>
</table>
  </div>


   

</div>
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
       </script>
   
</body>

</html>