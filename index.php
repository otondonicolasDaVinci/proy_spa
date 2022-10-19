<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-10">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha3104-1BmE4kWBq710iYhFldvKuhfTAU10auU10tT94WrHftjDbrCEXSU1oBoqyl2QvZ10jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">

    <title>Home</title>
</head>


<body class="body">
    <?php
require_once('header.php');
?>
    <div id="home">

    </div>

    <section class="container-fluid text-center" style="color:black; margin-top:5%;">
        <div class="row justify-content-md-center">
            <div class="col-12">
                <h2>Tu escape de la rutina</h2>
                <br />
                <p>Es un Spa Urbano de Salud, Placer y Belleza. <br>
                 Con años de trayectoria en el tratamiento de la salud y el trabajo fís, <br>
                 nuestra misión es lograr el bienestar integral de quienes nos visitan. <br>
                  Plaza Spa se encuentra ubicado junto a la​ naturaleza, <br>
                  en una de las esquinas más lindas y soleadas de Villa Devoto.</p>

            </div>

        </div>

    </section>

    <div class="container-fluid" style="margin-top:5%;">
        <div class="row justify-content-md-center">
            <div class="card col-10" style="width: 22rem; margin: 30px">
                <img src="img/corporal.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">Tratamientos Corporales</h5>
                    <p class="card-text">Contamos con la ultima tecnologia para todos los tipos de tratamientos corporales que quieras.</p>
                    <div class="card-link">
                        <a href="#">Ver más</a>
                    </div>
                </div>
            </div>

            <div class="card col-10" style="width: 22rem; margin: 30px;">
                <img src="img/definitiva.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title"> Definitiva </h5>
                    <p class="card-text">Depilacion definitiva con sisitema Soprano</p>
                    <div class="card-link">
                        <a href="#">Ver más</a>
                    </div>
                </div>
            </div>

            <div class="card col-10" style="width: 22rem; margin: 30px;">
                <img src="img/facial1.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title"> Cosmiatria </h5>
                    <p class="card-text">Tratamientos faciales para todos los tipos de piel.</p>
                    <div class="card-link">
                        <a href="#">Ver más</a>
                    </div>
                </div>
            </div>

            <div class="card col-10" style="width: 22rem; margin: 30px;">
                <img src="img/masaje1.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title"> Masajes </h5>
                    <p class="card-text">Distintos tipos de masajes segun lo que estes buscando</p>
                    <div class="card-link">
                        <a href="#">Ver más</a>
                    </div>
                </div>
            </div>

            <div class="card col-10" style="width: 22rem; margin: 30px;">
                <img src="img/manos.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title"> Manicuria </h5>
                    <p class="card-text">Contamos con las mejores profecionales para dejar tus manos impecables</p>
                    <div class="card-link">
                        <a href="#">Ver más</a>
                    </div>
                </div>
            </div>

            <div class="card col-10" style="width: 22rem; margin: 30px;">
                <img src="img/pies.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title"> Belleza de pies </h5>
                    <p class="card-text">Cuida y mima a tus pies que son quienes nos llevan y nos traen.</p>
                    <div class="card-link">
                        <a href="#">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="benefi container text-center">
            <div class="row">
                <div class="col-sm-4">
                    <img src="img/2500.png" alt="numero" style="max-height: 150px;
    margin-bottom: 20px;">
                    <p>
                        Más de 2500 personas al año <br>
                        vivistan nuestro Spa.
                    </p>
                </div>
                <div class="col-sm-4">
                    <img src="img/30.png" alt="numero" style="max-height: 150px;
    margin-bottom: 20px;">
                    <p>
                    Contamos con 30 años <br>
                    de experiencia en el rubro.    
                    </p>
                </div>
                <div class="col-sm-4">
                    <img src="img/6.png" alt="numero" style="max-height: 150px;
    margin-bottom: 20px;">
                    <p>
                        Contamos con 6 sedes en <br>
                        Capital Federal y Barrio Norte.
                    </p>
                </div>
            </div>
        </div>

        <div class="container-fluid text-center">
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44221.88480795257!2d-58.50746165259456!3d-34.533009684439406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca3b4ef90cbd%3A0xa0b3812e88e88e87!2sBuenos%20Aires%2C%20CABA!5e0!3m2!1ses!2sar!4v1666053422619!5m2!1ses!2sar" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="mapa container-sm"></iframe>
            </div>
        </div>

    <div id="fixed">
        <div></div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha3104-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+10nbTov4+1p" crossorigin="anonymous"></script>
</body>
<?php
    require_once('footer.php');
    ?>
</html>