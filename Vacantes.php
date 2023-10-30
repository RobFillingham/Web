<?php
    //session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/26749c556a.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/vacantes.css">

    <title>Document</title>
</head>
<body>
    <!-- HEADER -->
    <?php
    include("indexT.php");
    ?>
    <!-- Julios div-->

    <div class="abajo">
        <div class="text1" >
            <h5 class="primero">Forja tu futuro con nosotros: Embárcate en un camino profesional gratificante. Únete a un equipo dinámico, contribuye a la innovación y realiza tu potencial en Tekket. Tu éxito comienza aquí</h5>
        </div>
        <div class="sub1">
            <h1>Nuestras Localizaciones</h1>
        </div>
        <div class="text2" >
            <h3>Miembros de Tekket trabajan desde Chicago, Miami, San Francisco, Nueva York, Bogotá, Washington, D.C., y muchos otros lugares alrededor del mundo.</h3>
        </div>
        <div class="icons">
            <i class="fa-solid fa-earth-americas"></i>
            <i class="fa-solid fa-umbrella-beach"></i>
            <i class="fa-solid fa-train-tram"></i>
            <i class="fa-solid fa-plane-departure"></i>
        </div>
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" style="  background: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(255, 255, 255, 1));">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                <img src="img/vacantes1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="img/vacantes2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="img/vacantes4(1).jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="img/vacantes5.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="box4">
            
                <h1>¿Por qué trabajar con nosotros?</h1>
                <p>
                Trabajar con nosotros significa formar parte de una cultura de innovación que fomenta la creatividad y la colaboración. 
                Ofrecemos un entorno donde el desarrollo profesional es una prioridad, con oportunidades constantes para crecer y aprender. 
                Además, recompensamos el esfuerzo y 
                el talento con beneficios y reconocimiento. 
                Únete a nosotros y sé parte de nuestra exitosa trayectoria, donde tu contribución es fundamental.
                </p>
           
                <!-- HTML !-->
                <?php
                    if($_SESSION["form"] != 1){
                        echo '<a href="php/Form/form.php"><button class="button-87" role="button">Formulario</button></a>';
                    }else if($_SESSION["examen"] == -1){
                        echo '<a href="examen.php"><button class="button-87" role="button">Examen</button></a>';
                    }else{
                        ?>
                        <img class="animate__bounceIn" src="img/checkmark.png" alt="">
                    <?php
                    }
                ?>
            
        </div>
    </div>
    <?php
    include("footer.html");
    ?>
</body>
</html>


