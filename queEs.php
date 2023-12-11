<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xibo 3D</title>
    <link rel="icon" type="image/x-icon" href="images/logox4.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <!-- menu -->
    <?php include 'menu.php'; ?>
    <!-- fin menu-->
    <div style="text-align:center; padding: 30px; background-color: rgba(247, 220, 220);">
        <h1 style="color: black;">¿Que es la impresión 3d?</h1>
    </div>

    <div>
        <div id="cuerpo" class="container position-relative" style="padding: 50px;">

            <p style="padding: 30px; font-size: 25px;">
            La impresión 3D es una tecnología innovadora que permite crear
                objetos físicos desde un modelo digital.
                Ofrecen resultados maravillosos permitiendo crear todo lo que se pueda imaginar.
                Si tenes tu modelo, podes escribirnos un correo y te enviaremos una cotización de inmediato.
                Si tenes una idea ¡La diseñamos, modelamos e imprimimos por vos!
            </p>

            <img src="images/fondo rombos multicolores.png" class="img-fluid" alt="logo"
                style="position: absolute; right: 0; top: 0; z-index: -1; opacity: 0.1; width: 80%; height: auto;">
            <h2 class="text-left" style="padding: 10px;">Descubri mas...</h2>
        </div>
    </div>
    <div>
        <div class="container text-center">
            <div data-aos="fade-right" data-aos-duration="2000">
                <div class="row" style="margin-bottom: 20px; padding: 20px">
                    <div class="col">
                        <img src="images/12@3x.png" class="img-fluid" alt="que es la impresion"
                            style="transform: scale(1.3); display: block; margin: 0 auto;">
                    </div>
                </div>
            </div>
            <div data-aos="fade-left" data-aos-duration="2000">
                <div class="row" style="margin-bottom: 20px; padding: 40px">
                    <div class="col">
                        <img src="images/15@3x.png" class="img-fluid" alt="que podes imprimir"
                            style="transform: scale(1.3); display: block; margin: 0 auto;">
                    </div>
                </div>
            </div>
            <div data-aos="fade-right" data-aos-duration="2000">
                <div class="row" style="margin-bottom: 20px; padding: 40px">
                    <div class="col">
                        <img src="images/14@3x.png" class="img-fluid" alt="que podes imprimir"
                            style="transform: scale(1.3); display: block; margin: 0 auto;">
                    </div>
                </div>
            </div>
            <div data-aos="fade-left" data-aos-duration="2000">
                <div class="row" style="margin-bottom: 20px; padding: 40px">
                    <div class="col">
                        <img src="images/13@3x.png" class="img-fluid" alt="que podes imprimir"
                            style="transform: scale(1.3); display: block; margin: 0 auto;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="volver-atras">
        <button onclick="window.scrollTo(0, 0)" class="btn btn-light"
            style="position: fixed; bottom: 20px; right: 20px;">
            <a href="index.php" style="text-decoration: none; color: inherit;">
                <img src="images/24SinFondo.png" style="width: 20px; height: 20px;"> Ir al inicio
            </a>
        </button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> <!-- animacion -->
    <script>
        AOS.init();
    </script>
    <script src="js/validacion.js"></script>
</body>

</html>