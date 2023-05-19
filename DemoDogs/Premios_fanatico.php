<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="StrangerThings">
    <meta name="author" content="Esteban">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link rel="stylesheet" href="css/administrador.css">
    <link rel="stylesheet" href="css/fanatico.css">
    <title>Fanatico StarngerThingas</title>
    <script src="https://kit.fontawesome.com/f437d7f3c4.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <!-- menu vertical  -->

<div id="sidebaricono">
      
      <ul>
          <li>

   
          </li>
          <div class="vertical-menuicono">
             
          <a href="Fanatico.php "><i class="fa-solid fa-users"></i></i></a>     <!-- actores --> 
              <a href="Musica_fanatico.php"><i class="fa-sharp fa-solid fa-headphones"></i></i></a><!-- Musica --> 
              <a href="Premios_fanatico.php"><i class="fa-solid fa-medal"></i></i></a>      <!-- premios --> 
              <a href="Libros_fanatico.php"><i class="fa-solid fa-book"></i></i></a>        <!-- Libros --> 
              <a href="index.html"><i class="fa-sharp fa-solid fa-right-from-bracket"></i></i></a>   <!-- salir --> 
      </ul>
  
  </div>
  

  </div>
    <!-- formulario incial del area de fanatico  -->
    <main>
        <div class="container py-4 text-center">
            <h2>Premios StrangerThings</h2>
            <div class="row justify-content-md-center">
                <div class="col-md-4 text-white">
                    <form action="" method="post">
                        <label for="campo">Buscar: </label>
                        <input type="text" name="campo" id="campo">
                    </form>
                </div>
            </div>
            <div class="row py-4 ">
                <div class="col">
                    <table class="table table-sm table-bordered bg-white">
                        <thead>
                             <th>Organizacion</th>
                            <th>Categoria</th>
                            <th>Nominados</th>
                            <th>Resultados</th>
                            <th>Adicionales</th>
                            
                        </thead>
                        <!-- El id del cuerpo de la tabla. -->
                        <tbody id="content">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <script>
        /* Llamando a la función getData() */
        getData()
        /* Escuchar un evento keyup en el campo de entrada y luego llamar a la función getData. */
        document.getElementById("campo").addEventListener("keyup", getData)
        /* Peticion AJAX */
        function getData() {
            let input = document.getElementById("campo").value
            let content = document.getElementById("content")
            let url = "load_premios.php"
            let formaData = new FormData()
            formaData.append('campo', input)
            fetch(url, {
                    method: "POST",
                    body: formaData
                }).then(response => response.json())
                .then(data => {
                    content.innerHTML = data
                }).catch(err => console.log(err))
        }
    </script>
    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </script>
   
</body>
</html>