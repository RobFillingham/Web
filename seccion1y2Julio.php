<?php
include('indexT.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tekktek | Inicio</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/kute.js@2.1.2/dist/kute.min.js"></script>
    <link href="./css/stylePaginaInicial.css" rel="stylesheet">
    <link rel="stylesheet" href="css/a1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="css/footer.css">

</head>

<body>
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
        <div class="table-container">


            <div class="table-cell diamond">
                <div data-aos="fade-right">
                    <img src="img/img2.jpg" alt="" id="img">
                </div>
            </div>


            <div class="table-cell">
                <div class="text-container">
                    <h4>Tecnologías</h4>
                    <p>Descubre cómo nuestro equipo de desarrolladores</p>
                    <p> trabaja con tecnologías de vanguardia.</p>
                    <button>Ver Mas</button>
                </div>
            </div>


        </div>
    </div>

    <div class="section-prueba">
            <img src="MEDIA/Software.png" alt="">
    </div>
    <!-- Seccion Rombo 2 -->
    <div class="section-container2">
        <div class="table-container">


            <div class="table-cell">
                <div class="text-container">
                    <h4>Datos</h4>
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
    
    <div class="section-prueba">
        <img src="MEDIA/creatividad.png" alt="">
    </div>

    <!-- Seccion Rombo 3 -->
    <div class="section-container3">
        <div class="table-container">


            <div class="table-cell diamond">
                <div data-aos="fade-down-right">
                    <img src="img/img3.jpg" alt="" id="img">
                </div>
            </div>


            <div class="table-cell">
                <div class="text-container">
                    <h4>Actualizacion</h4>
                    <p>Nuestra última aplicación en acción: una interfaz de usuario intuitiva</p>
                    <p>y una experiencia fluida para los usuarios.</p>
                    <button>Ver Mas</button>
                </div>
            </div>


        </div>
    </div>

    <div class="section-prueba">
        <img src="MEDIA/app.png" alt="" style="margin-top: -30px;">
    </div>

    <div class="section-container4">
    <table>
        <tr>
            <td>
                <p id="text" class="animate__animated animate__backInLeft">Somos tu mejor opcion</p>
            </td>


            <td>
                <div class="section-container-cards">
                    <table>


                        <tr>


                            <td rowspan="5">
                                <div class="card1">
                                    <img src="img/icon1.jpg" alt="">
                                    <h2>Trabajo en Equipo</h2>
                                    <p>Trabajamos en armonía para componer soluciones de software excepcionales.</p>
                                </div>
                            </td>


                            <td >
                                <div class="card1">
                                    <img src="img/icon2.jpg" alt="">
                                    <h2>Desarrollo agil</h2>
                                    <p> Saltamos los obstáculos, nos adaptamos al ritmo de los cambios y entregamos actuaciones sobresalientes en cada iteración.</p>
                                </div>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <div class="card1">
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
 

</body>

</html>