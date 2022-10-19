<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Detalle</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="estilos.css">
</head>

<?php
require_once('header.php');
?>

<body>
<style>
    body {
      font-family: 'Raleway', sans-serif;
    }
  </style>
<div class="container-fluid" style="margin-top: 60px; margin-bottom: 80px;">
    <main class="container col">
      <div class="card mb-3" >
      <div class="row ">
         <div class="col">
           <img src="img/c5.png" class="img-fluid rounded-start" alt="..." >
         </div>
     <div class="col">
      <div class="card-body" >
        <h5 class="card-title" style="font-family: Playfair Display; margin-top: 15px;">CIRCUITO DE HIDROTERAPIA </h5>
        <p class="card-text">Baño Sauna + Baño Turco + Baño Finlandés + Piscina lúdica + Hidromasaje con ozonoterapia + Sala de relax con cromoterapia + Toallones + Infusiones</p>
        <br/>
        <p class="card-text"><small class="text-muted">$2045</small></p>
        <button type="submit" id="sub" value="RESERVAR" class="btn-lg" onclick="valida_envia()">RESERVAR</button>
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
</div>
            </div>











  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3 img-fluid/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

<?php
require_once('footer.php');
?>
</html>
