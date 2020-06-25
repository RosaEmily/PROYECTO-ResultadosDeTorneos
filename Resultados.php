<?php 
include 'Conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Fútbol Peruano | Inicio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Estilos.css">
  </head>
    <body>
      <header>
        <div class="container-fluid" style="background-color: #085B3D">
          <div class="row" style="display: flex; align-items: center;">
            <div class="col-xl-4">
                <div class="col-12" style="text-align: center;">
                  <p></p>
                  <a href="Index.html"><img src="img/Liga.png" style="width: 300px;"></a>
                  <p></p>
                </div>
            </div>
            <div class="col-xl-3">
            </div>
            <div class="col-xl-5" style="display: inline-block;">
              <div class="row">
                <div class="bloque_ryb col-12">
                  <p class="espacio"></p>
                  <a href="https://www.facebook.com"><img src="img/facebook.png" class="img" alt="" width="40px" height="40px"></a>
                  <p class="espacio"></p>
                  <a href="https://twitter.com"><img src="img/twitter.png" alt="" class="img" width="40px" height="40px"></a>
                  <p class="espacio"></p>
                  <a href="https://www.instagram.com"><img src="img/instagram.png" alt="" class="img" width="40px" height="40px"></a>
                  <p class="espacio"></p>
                  <a href="https://www.youtube.com"><img src="img/youtube.png" alt="" class="img" width="40px" height="40px"></a>
                  <p class="espacio"></p>
                  <input class="form-control" type="search" placeholder="Buscar" aria-label="Search" style="height: 25px; width: 160px; display: inline-block; margin-top: 15px; margin-bottom: 15px">
                  <a href=""><img class="boton_buscar"src="img/lupa.png" alt=""></a>
                </div>
              </div>
              <div style="height: 15px;"></div>
            </div>
          </div>
        </div>
      </header>
      <div style="height: 10px; background-color: white;"></div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-lg-3" style="background-color: #085B3D; padding-right: 20px; padding-left: 20px; padding-top: 50px; padding-bottom: 30px;">
            <div class="menu">
              <a style="font-weight: bold; font-family: Arial; font-size: 20px; text-decoration: none; color: white;" href="RegistrarEquipo.html">REGISTRAR EQUIPO</a>
            </div>
            <div class="menu">
              <a style="font-weight: bold; font-family: Arial; font-size: 20px; text-decoration: none; color: white;" href="RegistrarPartido.php">REGISTRAR PARTIDO</a>
            </div>
            <div class="menu">
              <a style="font-weight: bold; font-family: Arial; font-size: 20px; text-decoration: none; color: white;" href="Equipos.php">EQUIPOS</a>
            </div>
            <div class="menu">
              <a style="font-weight: bold; font-family: Arial; font-size: 20px; text-decoration: none; color: white;" href="Resultados.php">RESULTADOS</a>
            </div>
            <div class="menu">
              <a style="font-weight: bold; font-family: Arial; font-size: 20px; text-decoration: none; color: white;" href="TablaPosiciones.php">TABLA DE POSICIONES</a>
            </div>
          </div>
          <div class="col" style="text-align: center;background-image: url(img/Inicio.jpg); background-position: center;">
            <div class="col" style="padding-right: 50px; padding-left: 50px; padding-bottom: 50px; padding-top: 50px;">
              <div style="background-color: #085B3D; color: white; font-weight: bold; font-size: 30px; padding: 10px;">
                PARTIDOS JUGADOS
              </div>
              <div class="col-12" style="height: 20px;"></div>
              <?php 
                $con=Conexion::conectar();
                $res=$con->query("select Local, GolesLocal, GolesVisitante, Visitante from partidos order by IdPartido");
                echo '<table class="table table-bordered" style="text-align: center; font-size: 18px; border: #085B3D solid; background-color: white;">';
                echo 
                '<thead>
                  <tr>
                    <th scope="col">LOCAL</th>
                    <th scope="col" colspan="3"> MARCADOR</th>
                    <th scope="col">VISITANTE</th>
                  </tr>
                </thead>';
                while ($registro=mysqli_fetch_row($res))
                {
                  echo '<tr><td>'.$registro[0].'</td><td>'.$registro[1].'</td><td>-</td><td>'.$registro[2].'</td><td>'.$registro[3].'</td></tr>';
                }
                $con->close();
                echo '</table>'
              ?>
            </div>
          </div>
        </div>
      </div>
      <div style="height: 10px;"></div>
      <div style="background-color: #085B3D; padding: 20px; font-family: 20px; font-family: Arial; font-weight: bold; color: white; text-align: center;"> ROSA RODRIGUEZ HUAMAN COPYRIGHT©</div>
    </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>