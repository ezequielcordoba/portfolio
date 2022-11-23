<?php 
$pg = "inicio";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incio</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
   <link rel="stylesheet" href="css/estilo.css">
    </head>
<body id="inicio">
<?php include_once "header.php";?>
<body id="inicio">
        <main class="container">
            
            <div class="row presentacion">
                <div class="col-12 col-sm-6">
                   <div class="col-12  text-center">
                    <img src="..//portfolio2/css/imagenes/yo.jpg" alt="ezequiel Cordoba" class="img-fluid " title="Cordoba Ezequiel">
                </div>
                  
                </div>
                <div class="col-12 col-sm-6 ">
                <div class="input-home text-center">
                    <h1 class="mb-3">Hola! soy Ezequiel Cordoba</h1>
                      <p>BIENVENID@ A MI PORTFOLIO</p>
                </div> 
                <div class="col-12">
                   <div class="text-center">
                      <a href="proyectos.php" class="btn index-btn-rojo" > Conoce mis proyectos</a>
                   </div> 
                </div>
                <div class="col-12 mt-2">
                   <div class="text-center">
                      <a href="contacto.php" class="btn index-btn-rojo" >Contacto</a>
                   </div> 
                </div>
                
            </div>
        </main>
        <?php include_once "footer.php"?>
        <div class="whatsapp">
            <a href="http://api.whatsapp.com/send?phone=541124780607" target="_blank"><i class="fab fa-whatsapp"></i></a>
        </div>
        <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    

</body>
    
</body>
</html>