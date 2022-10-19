<!doctype html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="estilos.css">

  <title>Oasis</title>
</head>

<?php
$menu = array(
  'Home' => 'index.php',
  'Nosotros' => 'nosotros.php',
  'Contacto' => 'contacto.php',
  'Sedes' => 'sedes.php',
  'Servicios' => 'servicios.php',
  'LogIn' => 'logIn.php'
);
?>

<body>
  <header class="" style=" color: #545454;">
    <div class="container">
      <nav class="navbar navbar-expand-lg aline-item-center text-uppercase pt-4">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">
            <img src="img/logo.png" href="#" alt="" width="140" height="70" class="logo d-inline-block align-text-top"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end navi" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav ms-auto ms-3">
                <li class="nav-item pr-3">
                  <?php
                  foreach ($menu as $texto => $url) {
                    echo ' <a class="navbar-brand" text-reset href="' . $url . '">' . $texto . '</a> ';
                  }
                  ?>
                </li>
            </div>
          </div>
      </nav>
    </div>
  </header>