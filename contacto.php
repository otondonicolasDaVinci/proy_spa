<!DOCTYPE html>
<html lang="estrellas">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <?php
    require_once('header.php');
    ?>
    <div class="container-fluid">


        <div id="contenedor">

            <div id="fondorosa">
                <h1 class="display-2 txt">Contacto</h1>
            </div>

            <div id="imagensuperpuesta">

                <div class="contac row align-items-center">

                    <div class="col">
                        <img src="img/contac.jpg" alt="telefonista" class="imgcontac">
                    </div>

                    <div class="col align-center">
                        <h2 class="display-6">
                            Líneas rotativas
                        </h2>
                        <p>
                            011-458962351 / 2 <br>
                            011-456897856 / 5 <br>
                            consultas@spa.com
                        </p>
                    </div>

                </div>

            </div>
        </div>


        <div>



            <div class="container posicion">
                <p class="margen text-center">O envianos tu consulta completando el siguiente formulario, nuestras representantes se pondrán en
                    contacto para asesorarte</p>
                <form action="post">
                    <div class="mb-3">
                        <label for="" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="mensaje" rows="3"></textarea>
                    </div>
                    <button type="submit" id="sub" value= "enviar"  class= "btn-lg" >ENVIAR</button>
                    <style>
                      button {background-color: #545454; border-color: #966857; color:white; font-family: 'Raleway', sans-serif;} 
                    </style>
                </form>
            </div>



            <!--cierra container gral-->
        </div>

        <?php
        require_once('footer.php');
        ?>
</body>

</html>