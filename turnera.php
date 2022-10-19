<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>sedes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="estilos.css">
</head>

<?php
require_once('header.php');
?>

<body>
  <div class="container-fluid">
    <main class="container col-6">
        <div class="card mb-3" style="max-width: 540px; margin:30px">
          <div class="card-body">
            <h3 class="card-title text-center" style="font-family: Playfair Display;">Seleccione su turno</h3>
            <div class="row g-0">
              <div class="col-6">
                <!--label for="start">Fecha:</label-->
                <input type="date" id="start" name="trip-start" value="2018-07-22" min="2022-10-18" max="2023-12-31" class="text-center" style="margin-left: 30px;">
              </div>
              <div>
                <label for="hora">Hora: </label>
                <select name="hora" id="hora" class="form-control">
                  <option value="1">08:00 am</option>
                  <option value="2">08:30 am</option>
                  <option value="3">09:00 am</option>
                  <option value="4">09:30 am</option>
                  <option value="5">10:00 am</option>
                  <option value="6">10:30 am</option>
                  <option value="1">11:00 am</option>
                  <option value="2">11:30 am</option>
                  <option value="1">12:00 am</option>
                  <option value="2">12:30 am</option>
                  <option value="1">01:00 pm</option>
                </select>

                <br />
                <p class="card-text"><small class="text-muted">$2057</small></p>
              </div>
              <button type="submit" id="sub" value="COMPRAR" disabled="disabled" class="btn-lg" onclick="valida_envia()">COMPRAR</button>
              <!--crea identificador del boton-->
              <style>
                button {
                  background-color: #966857;
                  border-color: #966857;
                  color: white;
                  font-family: 'Raleway', sans-serif;
                }
              </style>
            </div>
          </div>
        </div>
    </main>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3 img-fluid/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
<?php
require_once('footer.php');
?>

</html>