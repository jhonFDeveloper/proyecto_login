<?php

include("conexion.php");
$con = conectar();

$sql = "SELECT * FROM usuarios"; //le dicmos a todo el programa que selecione toda la info que haya en la tabla usuarios.

$query = mysqli_query($con, $sql); //ejecuta la consulta



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <title>Formulario clientes</title>

  <style>
    body {

      background: #ffe259;
      background: linear-gradient(to right, #C39BD3, #76D7C4);
    }
  </style>
</head>

<body>

  <div class="container mt-5 mb-5 shadow-lg"> <!--contenedor principal.-->

    <div class="d-flex flex-column justify-content-center align-items-center"> <!--crea una fila y dentro creamos 2 columnas una para el formulario y otra para la tabla.-->

      <div class="col-8 text-center p-5"> <!--columna para el formulario-->
        <h1>Registro</h1>

        <form action="guardar.php" method="POST">




          <input type="text" class="form-control mb-3 mt-5" name="nombre" placeholder="Nombre">


          <input type="text" class="form-control mb-3" name="edad" placeholder="Edad">


          <input type="text" class="form-control mb-3 " name="ciudad" placeholder="Ciudad">





          <h2>Datos de inicio de sesión</h2>

          <input type="text" class="form-control mb-3 mt-5" name="usuario" placeholder="Usuario">


          <input type="text" class="form-control mb-3" name="pass" placeholder="Contraseña">



          <div class="d-grid gap-2 col-6 mx-auto p-5">
            <button class="btn btn-primary" type="submit">Registrar</button>



          </div>




          <div class="container p-5 shadow">

            <h5>¿Ya tienes una cuenta?</h5>

            <a href="../login.html" class="btn btn-primary ">Iniciar sesión</a>

        

          </div>

        </form>

      </div>

      <div class="container p-5 shadow">

        <table class="table">
          <thead class="table-success table-striped">
            <tr>
              <th>id_usuario</th>
              <th>Nombre</th>
              <th>Edad</th>
              <th>ciudad</th>
              <th>Usuario</th>
              <th>Contraseña</th>
              <th></th>
              <th></th>
            </tr>
          </thead>

          <tbody>

            <?php

            while ($row = mysqli_fetch_array($query)) {

              ?>
              <tr>
                <th>
                  <?php echo $row['id_usuario'] ?>
                </th>

                <th>
                  <?php echo $row['nombre'] ?>
                </th>
                <th>
                  <?php echo $row['edad'] ?>
                </th>
                <th>
                  <?php echo $row['ciudad'] ?>
                </th>
                <th>
                  <?php echo $row['usuario'] ?>
                </th>
                <th>
                  <?php echo $row['pass'] ?>
                </th>


                <th><a href="actualizar.php?id= <?php echo $row['id_usuario'] ?>" class="btn btn-info">Actualizar
                    infromación</a>
                </th>

                <th><a href="eliminar.php?id= <?php echo $row['id_usuario'] ?>" class="btn btn-danger">Eliminar</a>
                </th>
              </tr>
              <?php
            }
            ?>
          </tbody>
        </table>
      </div>

    </div>


  </div>


</body>

</html>