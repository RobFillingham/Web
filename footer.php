<head>
    <link rel="stylesheet" href="css/footer.css">
</head>
<footer class="pie-pagina">
    <div class="grupo-1">
        <div class="box">
            <figure>
                <a href="#">
                    <img src="MEDIA/logoCompleto.png" alt="logo">
                </a>
            </figure>
        </div>
        <div class="box">
            <h2>Sobre nosotros</h2>
            <p>Somos tekket, una compañía dedicada al desarrollo de software con un enfoque en la innovación. Nuestra pasión es crear aplicaciones revolucionarias que impacten positivamente a nivel global. Nos enorgullece impulsar la evolución tecnológica y diseñar soluciones que van más allá de las expectativas.</p>
        </div>
        <div class="box">
            <h2>Siguenos</h2>
            <div class="redSocial">
                <a href="#" ><img src="MEDIA/iconos-Sociales/bxl-facebook-circle.png" alt="face"></a>
                <a href="#" ><img src="MEDIA/iconos-Sociales/bxl-linkedin-square.png" alt="linkedin"></a>
                <a href="#" ><img src="MEDIA/iconos-Sociales/bxl-instagram-alt.png" alt="insta"></a>
                <a href="#" ><img src="MEDIA/iconos-Sociales/bxl-github.png" alt="github"></a>
                <a href="#" ><img src="MEDIA/iconos-Sociales/bxl-twitter.png" alt="twiter"></a>
            </div>
        </div>
    </div>
    <div class="grupo-2">
        <?php
            include 'php/config.php';
        ?>

        <small>&copy; 2023 <b>tekket</b> - Todos los Derechos Reservados - Última actualización <?php echo date("d/m/Y", $lastUpdate); ?></small>
    </div>
</footer>

