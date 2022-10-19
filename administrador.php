<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administrador</title>
  <link rel="shortcut icon" href="img/flor.png" type="image/png">

  <!-- Bootstrap CSS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" src="style.css">

</head>

<body>
  <?php
  require_once('header.php');
  ?>
  <BR />
  <header class="bg text-white d-flex flex-row justify-content-center align-items-center">
    <img src="img/logo.png" height="120" width="240">
  </header>
  </div>

  <style>
    body {
      background-color: rgb(224, 221, 221);
      font-family: 'Raleway', sans-serif;
    }
  </style>



  <br />
  <main class="container">
    <div class="row m-3">
      <div class="col-md-3"></div>
      <h2 class="admin">Administrador de cuentas</h2>
      <style>
        h2 {
          color: #966857;
          font-family: "Playfair Display";
        }
      </style>
      <br />
      <br />
      <br />
      <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Puntos</th>
            <th scope="col">Acceso</th>
            <th scope="col"> </th>
            <th scope="col"> </th>
            <th scope="col"> </th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>@mdo</td>
            <td>10</td>
            <td>admin</td>
            <td><button type="button" class="btn btn-danger text-white"><img src="img/cruz.png" height="20" width="20"></button></td>
            <td><button type="button" class="btn btn-success text-white text-center"><img src="img/cambio.png" height="20" width="20"></button></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>@fat</td>
            <td>50</td>
            <td>usuario</td>
            <td><button type="button" class="btn btn-danger text-white"><img src="img/cruz.png" height="20" width="20"></button></td>
            <td><button type="button" class="btn btn-success text-white text-center"><img src="img/cambio.png" height="20" width="20"></button></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>@twitter</td>
            <td>35</td>
            <td>admin</td>
            <td><button type="button" class="btn btn-danger text-white"><img src="img/cruz.png" height="20" width="20"></button></td>
            <td><button type="button" class="btn btn-success text-white text-center"><img src="img/cambio.png" height="20" width="20"></button></td>
            <td></td>
          </tr>
        </tbody>
      </table>


      <br />
      <br />
      <br />
      <br />
      <br />
      <section>
        <h3>Agregar usuario</h3>
        <style>
          h3 {
            color: #966857;
            font-family: "Playfair Display";
          }
        </style>
        <br />
        <div class="input-group">
          <input type="text" aria-label="First name" class="form-control" placeholder="Nombre">
          <input type="text" aria-label="Last name" class="form-control" placeholder="Correo">
          <input type="text" aria-label="First name" class="form-control" placeholder="Contraseña">
          <select name="acceso" id="acceso" class="form-control">
            <option value="1">Admin</option>
            <option value="2">Usuario</option>
          </select>
          <button class="btn-lg" type="button"><img src="img/enter.png" height="20" width="20"></button>
          <style>
            button {
              background-color: #966857;
              border-color: #966857;
              color: white;
            }
          </style>
        </div>
      </section>
  </main>




  <?php
  require_once('footer.php');
  ?>
</body>

</html>