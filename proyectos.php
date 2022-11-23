<?php 
$pg = "proyecto";
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">

</head>

<body id="proyecto">
    <?php include_once "header.php"; ?>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-2 col-sm-6 ">
                <p>Los siquientes son algunos de los trabajos que eh realizado:</p>
            </div>
        </div>

        <div class="row ">
            <div class="col-12 pb-2 col-sm-4 p-sm-4">
                <div class="row card">
                    <img src="..//portfolio2/css/imagenes/abmclientes.png" alt="ABM Clientes" class="img-fluid">
                    <div class="col-12 gradiente px-3 py-2">
                        <h2>ABM Cliente</h2>
                    </div>
                    <div class="col-12 pt-2">
                        <p>Alta, baja y modificacion de un registro de clientes realizando Html.</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6">
                            <a href="" class="btn boton-rojo">Ver Online</a>
                        </div>
                        <div class="col-6">
                            <a href="http://github.com" target="_blank">Codigo fuente</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 pb-2 col-sm-4 p-sm-4">
                <div class="row card">
                        <img src="..//portfolio2/css/imagenes/abmventas.png" alt="ABM Clientes" class="img-fluid">
                    <div class="col-12 gradiente px-3 py-2">
                        <h2>SISTEMA DE GESTIÓN DE VENTAS</h2>
                    </div>
                    <div class="col-12 pt-2">
                        <p>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6">
                            <a href="" class="btn boton-rojo">Ver Online</a>
                        </div>
                        <div class="col-6">
                            <a href="http://github.com" target="_blank">Codigo fuente</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 pb-2 col-sm-4 p-sm-4 ">
                <div class="row card">
                         <img src="..//portfolio2/css/imagenes/proyecto-integrador.png" alt="ABM Clientes" class="img-fluid">
                      <div class="col-12 gradiente px-3 py-2">
                        <h2>PROYECTO INTEGRADOR</h2>
                    </div>
                    <div class="col-12 pt-2">
                        <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines.</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6">
                            <a href="" class="btn boton-rojo">Ver Online</a>
                        </div>
                        <div class="col-6">
                            <a href="http://github.com" target="_blank">Codigo fuente</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        </div>
    </main>
  <?php include_once "footer.php"?>;

    <div class="whatsapp">
        <a href="http://api.whatsapp.com/send?phone=541124780607" target="_blank"><i class="fab fa-whatsapp"></i></a>
    </div>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>

</html>