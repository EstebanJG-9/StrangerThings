
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
        <!-- formulario incial de premio  -->
</head>
<h3 class ="text-center p-1 bg-black text-white">Premios</h3>
<?php

 include "BD-Mysql/Conexion.php";
 include "Controlador/eliminar_premios.php";
?>
  <div class ="container-fluid row">
  <form class="col-2 p-3 " method="POST">
    <h5 class ="text-center text-secondary ">Registro de Premios</h5>
    
    <?php
     
   include "BD-Mysql/Conexion.php";  // conexion a base de datos con herencia 

    include "Controlador/registro_premios.php";  // controlador 
    
    ?>
  <div class="mb-0">
    <label for="exampleInputEmail1" class="form-label">Organizacion</label>
    <input type="text" class="form-control" name ="organizacion">
  </div>
  <div class="mb-0">
    <label for="exampleInputEmail1" class="form-label">Categoria</label>
    <input type="text" class="form-control" name ="categoria">
    
  </div>
  <div class="mb-0">
    <label for="exampleInputEmail1" class="form-label">Nominados</label>
    <input type="text" class="form-control" name ="nominados">
    
  </div>
  <div class="mb-0">
    <label for="exampleInputEmail1" class="form-label">Resultados</label>
    <input type="text" class="form-control" name ="resultados">
    
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Adicionales</label>
    <input type="text" class="form-control" name ="adicionales">
    
  </div>
  
  
  <button type="submit" class="btn btn-primary" name="btnregistrar"value="OK">Registrar</button>

  
</form>
    <!-- tabla de premios  -->
<div class="col-10 p-5">

<table class="table">
  <thead class ="bg-warning">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Organizacion</th>
      <th scope="col">Categoria</th>
      <th scope="col">Nominados</th>
      <th scope="col">Resultados</th>
      <th scope="col">Adicionales</th>
    
    </tr>
  </thead>
  <tbody>
    <?php
    include "BD-Mysql/Conexion.php";
    $sql=$conn->query("select * from premios");  // select para traer infromacion de la base de datos premios 
    while($datos=$sql->fetch_object()){?>
      <tr>
     <td><?= $datos->id_premios ?></td>   
      <td><?= $datos->organizacion ?></td>
      <td><?= $datos->categoria ?></td>
      <td><?= $datos->nominados ?></td>
      <td><?= $datos->resultados ?></td>
      <td><?= $datos->adicionales ?></td>
    
      <td>
        <a href="modificar_premios.php ?id=<?=$datos->id_premios?>" class ="btn btn-small btn-danger"><i class="fa-solid fa-user-pen"></i></a>
        <a href="Premios.php ?id=<?=$datos->id_premios?>"class ="btn btn-small btn-warning"><i class="fa-solid fa-trash"></i></a>
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