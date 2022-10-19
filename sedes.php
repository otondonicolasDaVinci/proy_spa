<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sedes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
<?php
require_once('header.php');
?>
    <div class="container-fluid">


        <img class="img-fluid card-img" src="img/recepcionlogo.jpg">

        <div class="container text-center sedes">
            <h1 class="display-1 hija2">Nuestras sedes</h1>
        </div>

        <div class="container-fluid text-center">
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44221.88480795257!2d-58.50746165259456!3d-34.533009684439406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca3b4ef90cbd%3A0xa0b3812e88e88e87!2sBuenos%20Aires%2C%20CABA!5e0!3m2!1ses!2sar!4v1666053422619!5m2!1ses!2sar" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="mapa container-sm"></iframe>
            </div>
        </div>

        <div class="container text-center sedesdetalle">
            <div class="row">

                <div class="col">
                    <div class="card" style="width: 15rem;">
                        <img src="img/mapa.png" class=" cardsedes card-img-top" alt="icono de ubicacion">
                        <div class="card-body">
                            <h5 class="card-title">Belgrano</h5>
                            <p class="card-text">​Cdad. de La Paz 21750 <br> 11-15467978</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 15rem;">
                        <img src="img/mapa.png" class=" cardsedes card-img-top" alt="icono de ubicacion">
                        <div class="card-body">
                            <h5 class="card-title">Barrio Norte</h5>
                            <p class="card-text">​Vicente López 20500 <br> 11-46879584</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 15rem;">
                        <img src="img/mapa.png" class=" cardsedes card-img-top" alt="icono de ubicacion">
                        <div class="card-body">
                            <h5 class="card-title">Núñez</h5>
                            <p class="card-text">​Av. del Libertador 72080 <br> 11-469251312</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="card" style="width: 15rem;">
                        <img src="img/mapa.png" class=" cardsedes card-img-top" alt="icono de ubicacion">
                        <div class="card-body">
                            <h5 class="card-title">San Isidro</h5>
                            <p class="card-text">​Don Bosco 5590 <br> 11-485962513</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 15rem;">
                        <img src="img/mapa.png" class=" cardsedes card-img-top" alt="icono de ubicacion">
                        <div class="card-body">
                            <h5 class="card-title">Vicente López</h5>
                            <p class="card-text">​Gaspar Campos 7590 <br> 11-4587965223</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 15rem;">
                        <img src="img/mapa.png" class=" cardsedes card-img-top" alt="icono de ubicacion">
                        <div class="card-body">
                            <h5 class="card-title">Olivos</h5>
                            <p class="card-text">​ Roque Sáenz Peña 17650 <br> 11-485625698</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>





    </div>
    <?php
    require_once('footer.php');
    ?>
</body>

</html>