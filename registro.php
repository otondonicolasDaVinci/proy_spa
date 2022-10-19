<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrarse</title>
  <link rel="shortcut icon" href="img/flor.png" type="image/png">


  <!-- Bootstrap CSS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="spa/estilos.css">
</head>

<body>
  <?php
  require_once('header.php');
  ?>


  <header class="bg text-white d-flex flex-row justify-content-center align-items-center">
  </header>


  <style>
    body {
      background-image: url("img/login1.webp");
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>
  <style>
    body {
      font-family: 'Raleway', sans-serif;
    }
  </style>

  <!--prueba2-->
  <main class="container">
    <div class="row m-3">
      <div class="col-md-3"></div>
      <div class="col-md-6">

        <style>
          section {
            background-color: white;
          }
        </style>

        <!--img src="img/logo.png" width="200" height="100"-->
        <br />
        <br />
        <form action="login.php" method="post">
          <input name="nombre" type="nombre" id="nombre" placeholder="Nombre" class="form-control">
          </br>

          <!---label for="email">Email</label-->
          <input name="email" type="email" id="email" placeholder="Email" class="form-control">
          </br>

          <!--label for="password">Contraseña</label-->
          <input name="password" type="password" id="password" placeholder="Contraseña" class="form-control">
          </br>

          <select name="acceso" id="acceso" class="form-control">
            <option value="1">Admin</option>
            <option value="2">Usuario</option>
          </select>
          </br-->

          <div>
            <label>
              <br />
              </br>
              <input type="checkbox" id="cb" />
              <!--crea identificador del checkbox-->
              Recordarme
            </label>
          </div>

          <br />
          <div class="btn_login">
            <div class="d-grid gap-2">
              <input type="submit" id="sub" value="REGISTRARSE" disabled="disabled" class="btn-lg" onclick="valida_envia()">
              <!--crea identificador del boton-->
            </div>
          </div>
          <style>
            input {
              background-color: #966857;
              border-color: #966857;
              color: white;
            }
          </style>
          <div class="text-center">
            <br />
            <p>Ya tienes cuenta? <a href="registroCuenta.html"> Iniciar Sesion</a></p>
            <style>
              p {
                font-size: 18px;
              }
            </style>

            <style>
              a {
                color: #966857;
                text-decoration-line: none;
                font-size: 20px;
              }
            </style>
            <br />
            <br />
            <br />
            <br />
        </form>

      </div>
      </section>
    </div>





    <!--se habilita cuando hacemos click en condiciones-->
    <script type="text/javascript">
      var cb = document.getElementById('cb'); //puedo identificar y llamar al checkbox(cb)
      var sub = document.getElementById('sub'); //puedo identificar y llamar al boton(sub)
      cb.onclick = function() { //!--los onclick con funciones--//
        if (cb.checked) {
          sub.disabled = false;
        } else {
          sub.disabled = true;
        }
      }
      //si a checkbox no se le realizo un onclick, el boton esta desabilitado
    </script>


    <!--para que avise si hay informacion incompleta-->
    <script type="text/javascript">
      function valida_envia() {
        //validar nombre
        if (document.fvalida.nombre.value.length == 0) {
          //lo conecto con el name del form(fvalida)
          alert("No escribio su Nombre")
          document.fvalida.nombre.focus()
          return 0;

        }
        //validar contraseña
        if (document.fvalida.password.value.length == 0) {
          alert("No escribio su Contraseña")
          document.fvalida.password.focus()
          return 0;

        }
        //validar email
        if (document.fvalida.email.value.length == 0) {
          alert("No escribio su Email")
          document.fvalida.email.focus()
          return 0;

        }
        //validar acceso
        if (document.fvalida.acceso.value.length == 0) {
          alert("No selecciono su tipo de acceso")
          document.fvalida.acceso.focus()
          return 0;


        }
      }
    </script>





</body>

</html>