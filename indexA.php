<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tekktek | Inicio</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/kute.js@2.1.2/dist/kute.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="icon" type="image/x-icon" href="./MEDIA/logoIcono.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/a1.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href="./css/stylePaginaInicial.css" rel="stylesheet">
</head>

<body>
    <!-- HEADER -->
   <div class="all">
    <header id="navbar">
        <img class="logo" src="MEDIA/logoCompletoMORADO.png" alt="logo" width="135px" height="30px">
        <nav>
            <ul class="nav_links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <?php
                    if(isset($_SESSION["correo"])){
                        echo '<li><a href="Vacantes.php">Vacantes</a></li>';
                    }
                ?>
            </ul>
        </nav>
        <?php
            if(isset($_SESSION["correo"])){
                ?>

                <div class="derecha"></div>
                    <?php
                        date_default_timezone_set('America/Mexico_City');
                        $hour=date("H");
                        if($hour<12){
                            echo "<p class='Hola'>Buenos Dias ".$_SESSION["nombre"]."!";
                        }else if($hour<20){
                            echo "<p class='Hola'>Buenas Tardes ".$_SESSION["nombre"]."!";

                        }else{
                            echo "<p class='Hola'>Buenas Noches ".$_SESSION["nombre"]."!";

                        }
                    ?>
                    <a href="php/logout.php"><button class="cta" style="background-color: #f18067;padding: 15px;border-radius: 5px;">Logout</button></a>
                </div>
          
        <?php
            }else{
        ?>
        <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="custom-button btn dropdown-toggle">Login <span class="caret"></span></button>
        <ul class="dropdown-menu dropdown-menu-right mt-2">
            <li class="px-3 py-2">
                <form class="form" role="form" action="php/login.php" method="post">
                    <div class="form-group">
                        <input name="email" id="emailInput" placeholder="Email" class="form-control form-control-sm" type="email" required="">
                    </div>
                    <div class="form-group">
                        <input name="palabra_secreta" id="passwordInput" placeholder="Password" class="form-control form-control-sm" type="password" required="">
                    </div>
                        
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                    <div class="form-group text-center">
                        <small><a href="#" data-toggle="modal" data-target="#modalPassword">Registrar cuenta</a></small>
                    </div>
                </form>
            </li>
        </ul>

        <?php
            }
        ?>

</header>
<div id="modalPassword" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Registro</h3>
                <button type="button" class="close font-weight-light" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form class="form" role="form" action="php/registro.php" method="post">
            <div class="modal-body">
                <p>Primer Nombre: <input type="text" name="nombre" required> </p>
                <p>Correo: <input type="email" name="email" required> </p>
                <p>Contraseña: <input type="text" name="contra" required> </p>
             
                
            </div>
            <div class="modal-footer">                
                <div class="form-group">                  
                  <button type="submit" class="btn btn-primary btn-block">Enviar</button>
               </div>
            </div>
            </form>
        </div>
    </div>
</div>
<div id="padd"></div>
        </div>
    <!-- /HEADER -->
    
<!-- Seccion 1 y 2 J -->
    <section class="orange">
        <div class="First">
            <p data-aos="fade-down" data-aos-duration="1500">Donde la inovación <br>se encuentra con <br>el codigo uniendote <br> al equipo <span style="color:white">teKKet</span></p>
        </div>

        <img class="cubo" src="./MEDIA/cubo2.png" alt="">
        <img class="cubo2" src="./MEDIA/cubo2.png" alt="">
        <img class="cubo3" src="./MEDIA/cubo2.png" alt="">
        <img class="cubo4" src="./MEDIA/cubo2.png" alt="">

        <div class="guy">
            <img style="width: 600px;" src="./MEDIA/guyIdea.png" alt="">

        </div>
        <div class="guy2">
            <img style="width: 600px;" src="./MEDIA/guyIdea2.png" alt="">
        </div>
        <div class="ideas">
            <img class="idea1" src="./MEDIA/idea1.png" alt="">
            <img class="idea2" src="./MEDIA/idea2.png" alt="">
            <img class="idea3" src="./MEDIA/idea3.png" alt="">
        </div>

    </section>
    <div>

    </div>
    <!-- CURVE -->
    <svg id="visual" viewBox="20 0 1000 450" width="110%" height="100%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
        <rect x="0" y="0" width="1000" height="450" fill="#e36124"></rect>


        <path id="blob1" d="M0 267L41.7 268.2C83.3 269.3 166.7 271.7 250 269.3C333.3 267 416.7 260 500 255.5C583.3 251 666.7 249 750 257.5C833.3 266 916.7 285 958.3 294.5L1000 304L1000 451L958.3 451C916.7 451 833.3 451 750 451C666.7 451 583.3 451 500 451C416.7 451 333.3 451 250 451C166.7 451 83.3 451 41.7 451L0 451Z" fill="#231b31" stroke-linecap="round" stroke-linejoin="miter"></path>
        <path id="blob2" style="visibility: hidden;" d="M0 303L33.3 300C66.7 297 133.3 291 200 290.7C266.7 290.3 333.3 295.7 400 289.7C466.7 283.7 533.3 266.3 600 260.3C666.7 254.3 733.3 259.7 800 258.5C866.7 257.3 933.3 249.7 966.7 245.8L1000 242L1000 451L966.7 451C933.3 451 866.7 451 800 451C733.3 451 666.7 451 600 451C533.3 451 466.7 451 400 451C333.3 451 266.7 451 200 451C133.3 451 66.7 451 33.3 451L0 451Z" fill="#231b31" stroke-linecap="round" stroke-linejoin="miter"></path>


    </svg>

    <script>
        const tween = KUTE.fromTo(
            '#blob1', {
                path: '#blob1'
            }, {
                path: '#blob2'
            }, {
                repeat: 999,
                duration: 9000,
                yoyo: true
            },
        )
        tween.start()
    </script>
    <!-- /CURVE -->
    <div class="purple">
        <div data-aos="fade-down" data-aos-once="true" data-aos-duration="1500">
            <h1>Desarrollo de software y <br>aplicaciones moviles en todo el mundo</h1>
            <hr class="line">
            <br>
            <article>
                <p>En teKKet, nuestra pasión es convertir ideas en soluciones tecnológicas <br>a medida. Somos una empresa de consultoría con una profunda experiencia <br>en el desarrollo e integración de tecnología, dedicada a impulsar la innovación <br>y la eficiencia en tu negocio. Nuestro equipo de expertos trabaja incansablemente<br> para diseñar y desarrollar soluciones personalizadas que se adapten perfectamente <br>a tus necesidades únicas. Desde la conceptualización hasta la implementación, teKKet <br>es tu socio confiable para potenciar el futuro de tu empresa a través de la tecnología</p>
            </article>
        </div>

        <div data-aos="fade-right" data-aos-once="true" data-aos-duration="1000">
            <img class="rombo1" src="./MEDIA/rombo1.png" alt="">
        </div>
        <div>
            <img class="rombo2" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true" data-aos-delay="1000" src="./MEDIA/rombo2.png" alt="">

        </div>
        <img class="rombo3" data-aos="fade-left" data-aos-duration="2000" data-aos-once="true" src="./MEDIA/romboIMG1.png" alt="">

    </div>
<!-- Seccion 3 y 4 F -->
<!-- Seccion Rombo 1 -->

<div class="section-container1">
    
 <img class="img00" src="MEDIA/Software.png" alt=""> 

        <div class="table-container">

            <div class="table-cell diamond">
                <div data-aos="fade-right">
                    <img src="img/img2.jpg" alt="" id="img">
                </div>
            </div>


            <div class="table-cell">
                <div class="text-container">
                    <h1>Tecnologías</h1>
                    <hr class="line">
                    <p>Descubre cómo nuestro equipo de desarrolladores</p>
                    <p> trabaja con tecnologías de vanguardia.</p>
                    <button>Ver Mas</button>
                </div>
            </div>


        </div>
    </div>

  
           
    
    <!-- Seccion Rombo 2 -->
    <div class="section-container2">
    
        <img class="img01" src="MEDIA/creatividad.png" alt="">
    
        <div class="table-container">


            <div class="table-cell">
                <div class="text-container">
                    <h1>Datos</h1>
                    <hr class="line">
                    <p>Nuestro proceso de desarrollo web combina la creatividad y el analisis</p>
                    <p> de datos para crear sitios web efectivos y atractivos</p>
                    <button>Ver Mas</button>
                </div>
            </div>


            <div class="table-cell diamond">
                <div data-aos="fade-up-left">
                    <img src="img/img1.jpg" alt="" id="img2" width="400px" height="400px">
                </div>
            </div>


        </div>
    </div>
    
    

    <!-- Seccion Rombo 3 -->
    <div class="section-container3">
     
        <img class="img02" src="MEDIA/app.png" alt="" >
    
        <div class="table-container">


            <div class="table-cell diamond">
                <div data-aos="fade-down-right">
                    <img src="img/img3.jpg" alt="" id="img">
                </div>
            </div>


            <div class="table-cell">
                <div class="text-container">
                    <h1>Actualizacion</h1>
                    <hr class="line">
                    <p>Nuestra última aplicación en acción: una interfaz de usuario intuitiva</p>
                    <p>y una experiencia fluida para los usuarios.</p>
                    <button>Ver Mas</button>
                </div>
            </div>


        </div>
    </div>

    

    <div class="section-container4">
    <table>
        <tr>
            <td>
            <div style="margin-left: 0px;" data-aos="fade-down" data-aos-once="true" data-aos-duration="1500">
            <h1>Beneficios de trabajar con el grupo teKKet</h1>
            <hr class="line">
            <br>
            <article>
                <p>Al elegir trabajar con el Grupo Tekket, obtienes acceso a soluciones de software personalizadas diseñadas para satisfacer tus necesidades específicas. Nuestro equipo de expertos en software se dedica a entregar proyectos a tiempo, brindando un soporte continuo y manteniéndose a la vanguardia de la innovación tecnológica para garantizar el éxito de tu empresa</p>
            </article>
        </div>
            </td>


            <td>
                <div class="section-container-cards">
                    <table>


                        <tr>


                            <td rowspan="5">
                                <div class="card1">
            
                                    <img class="icon1W" src="img/icon1.jpg" alt="">
                                    <h2>Trabajo en Equipo</h2>
                                    <p>Trabajamos en armonía para componer soluciones de software excepcionales.</p>
                                </div>
                            </td>


                            <td >
                                <div class="card1" >
                                    <img src="img/icon2.jpg" alt="">
                                    <h2>Desarrollo agil</h2>
                                    <p> Saltamos los obstáculos, nos adaptamos al ritmo de los cambios y entregamos actuaciones sobresalientes en cada iteración.</p>
                                </div>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <div class="card1" >
                                    <img src="img/icon3.jpg" alt="">
                                    <h2>Sistemas Empresariales</h2>
                                    <p>Las empresas confían en nosotros para tejer conexiones invisibles y aumentar la eficiencia.</p>
                                </div>
                            </td>
                        </tr>


                    </table>
                </div>
            </td>
        </tr>
   </table>
   </div>

   

   <!-- Footer -->
   

<footer class="pie-pagina">
<svg id="visual" viewBox="0 0 2000 250" width="2000" height="250" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><rect x="0" y="0" width="2000" height="250" fill="#231b31"></rect><path d="M0 123L55.5 122.3C111 121.7 222 120.3 333.2 126.2C444.3 132 555.7 145 666.8 145.7C778 146.3 889 134.7 1000 125.8C1111 117 1222 111 1333.2 112.3C1444.3 113.7 1555.7 122.3 1666.8 127.3C1778 132.3 1889 133.7 1944.5 134.3L2000 135L2000 251L1944.5 251C1889 251 1778 251 1666.8 251C1555.7 251 1444.3 251 1333.2 251C1222 251 1111 251 1000 251C889 251 778 251 666.8 251C555.7 251 444.3 251 333.2 251C222 251 111 251 55.5 251L0 251Z" fill="#e36124"></path><path d="M0 156L55.5 152.7C111 149.3 222 142.7 333.2 140C444.3 137.3 555.7 138.7 666.8 137.5C778 136.3 889 132.7 1000 133.5C1111 134.3 1222 139.7 1333.2 147C1444.3 154.3 1555.7 163.7 1666.8 166.5C1778 169.3 1889 165.7 1944.5 163.8L2000 162L2000 251L1944.5 251C1889 251 1778 251 1666.8 251C1555.7 251 1444.3 251 1333.2 251C1222 251 1111 251 1000 251C889 251 778 251 666.8 251C555.7 251 444.3 251 333.2 251C222 251 111 251 55.5 251L0 251Z" fill="#f5814c"></path><path d="M0 166L55.5 166C111 166 222 166 333.2 166.3C444.3 166.7 555.7 167.3 666.8 168C778 168.7 889 169.3 1000 168C1111 166.7 1222 163.3 1333.2 160.8C1444.3 158.3 1555.7 156.7 1666.8 155.8C1778 155 1889 155 1944.5 155L2000 155L2000 251L1944.5 251C1889 251 1778 251 1666.8 251C1555.7 251 1444.3 251 1333.2 251C1222 251 1111 251 1000 251C889 251 778 251 666.8 251C555.7 251 444.3 251 333.2 251C222 251 111 251 55.5 251L0 251Z" fill="#ff9462"></path><path d="M0 213L55.5 209.8C111 206.7 222 200.3 333.2 195C444.3 189.7 555.7 185.3 666.8 188.8C778 192.3 889 203.7 1000 207C1111 210.3 1222 205.7 1333.2 200C1444.3 194.3 1555.7 187.7 1666.8 189.3C1778 191 1889 201 1944.5 206L2000 211L2000 251L1944.5 251C1889 251 1778 251 1666.8 251C1555.7 251 1444.3 251 1333.2 251C1222 251 1111 251 1000 251C889 251 778 251 666.8 251C555.7 251 444.3 251 333.2 251C222 251 111 251 55.5 251L0 251Z" fill="#f5814c"></path><path d="M0 223L55.5 221.2C111 219.3 222 215.7 333.2 213.7C444.3 211.7 555.7 211.3 666.8 214C778 216.7 889 222.3 1000 224.2C1111 226 1222 224 1333.2 223.5C1444.3 223 1555.7 224 1666.8 225.7C1778 227.3 1889 229.7 1944.5 230.8L2000 232L2000 251L1944.5 251C1889 251 1778 251 1666.8 251C1555.7 251 1444.3 251 1333.2 251C1222 251 1111 251 1000 251C889 251 778 251 666.8 251C555.7 251 444.3 251 333.2 251C222 251 111 251 55.5 251L0 251Z" fill="#e36124"></path></svg>

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
        <small>&copy; 2023 <b>tekket</b> - Todos los Derechos Reservados</small>
    </div>
</footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>window.addEventListener('scroll', function() {
    const navbar = document.querySelector('#navbar');
    const logo = document.querySelector('.logo');
    const btn = document.querySelector('#dropdownMenu1');
    const div = document.querySelector('#padd');

    if (window.scrollY > 300) {
        navbar.style.position = 'fixed';
        div.style.display = "block";
        
            //navbar.style.top = '-140px';
            //navbar.style.top = '0';


        navbar.style.backgroundColor = '#231b31'; // Cambia el color de fondo al hacer scroll
        navbar.style.color = '#fffafa'; // Cambia el color del texto al hacer scroll
        logo.src = 'MEDIA/logoCompleto.png';
        logo.style.width = '135px';
        btn.style.color = '#231b31';
        btn.style.backgroundColor = '#dddddd;';
        // También actualiza los estilos en :hover
        btn.addEventListener('mouseenter', function() {
            btn.style.backgroundColor = '#332848';
            btn.style.color = '#fff';
        });

        btn.addEventListener('mouseleave', function() {
            btn.style.backgroundColor = '#dddddd'; // Cambia el color de fondo al salir de :hover
            btn.style.color = '#231b31'; // Cambia el color de texto al salir de :hover
        });/*
        if(window.scrollY > 400){
            navbar.style.opacity = '1';
            navbar.style.top = '0';
        }else{
            navbar.style.opacity = '0';
            navbar.style.position = 'fixed';
            navbar.style.top = '-140px';
        }*/
        
    } else {
        //div.style.height = '0px';
        navbar.style.backgroundColor = ' #e36124'; // Restaura el color de fondo original
        navbar.style.color = '#fffafa'; // Restaura el color de texto original
        logo.src = 'MEDIA/logoCompletoMORADO.png';
        logo.style.width = '135px';
        btn.style.color = '#FF5733';
        btn.style.backgroundColor = '#dddddd;';
        // También actualiza los estilos en :hover
        btn.addEventListener('mouseenter', function() {
            btn.style.backgroundColor = '#f3694a';
            btn.style.color = '#fff';
        });

        btn.addEventListener('mouseleave', function() {
            btn.style.backgroundColor = '#dddddd'; // Cambia el color de fondo al salir de :hover
            btn.style.color = '#FF5733'; // Cambia el color de texto al salir de :hover
        });
        navbar.style.position = 'relative';
        div.style.display = "none";
        /*navbar.style.top = '0';
        navbar.style.opacity = '1';*/
        
    }
    /*if (window.scrollY > 300) {
        // Cuando el desplazamiento sea mayor que 220px
        navbar.classList.add('fixed'); // Añade una clase CSS para hacerlo fijo
    } else {
        // Cuando el desplazamiento sea 220px o menos
        navbar.classList.remove('fixed'); // Elimina la clase CSS para volver a la posición relativa
    }*/
});

</script>
 
 
</body>

</html>

