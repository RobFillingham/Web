<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JUlio</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/kute.js@2.1.2/dist/kute.min.js"></script>
    <link href="./css/stylePaginaInicial.css" rel="stylesheet">
    
   

</head>

<body>
    <section class="orange">
        <div class="First">
            <p data-aos="fade-down" data-aos-duration="1500">Donde la inovación <br>se encuentra con <br>el codigo uniendote <br> al equipo <span style="color:white">teKKet</span></p>
        </div>
        
          <img class="cubo"  src="./MEDIA/cubo2.png" alt=""> 
          <img class="cubo2"  src="./MEDIA/cubo2.png" alt=""> 
          <img class="cubo3"  src="./MEDIA/cubo2.png" alt="">
          <img class="cubo4"  src="./MEDIA/cubo2.png" alt="">
          
        <div class="guy">
           <img style="width: 600px;" src="./MEDIA/guyIdea.png" alt="">
          
        </div>
        <div class="guy2">
           <img style="width: 600px;" src="./MEDIA/guyIdea2.png" alt="">
        </div>
        <div class="ideas" >
            <img class="idea1"  src="./MEDIA/idea1.png" alt="">
            <img class="idea2"  src="./MEDIA/idea2.png" alt="">
            <img class="idea3"  src="./MEDIA/idea3.png" alt="">
        </div>
        
    </section>
    <div>
        
    </div>
<!-- CURVE -->
    <svg id="visual" viewBox="12 0 900 450" width="110%" height="100%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
        <rect x="0" y="0" width="900" height="450" fill="#e36124"></rect>
        <path id="blob1" d="M0 296L30 297.2C60 298.3 120 300.7 180 297.8C240 295 300 287 360 263.2C420 239.3 480 199.7 540 181.2C600 162.7 660 165.3 720 168.8C780 172.3 840 176.7 870 178.8L900 181L900 451L870 451C840 451 780 451 720 451C660 451 600 451 540 451C480 451 420 451 360 451C300 451 240 451 180 451C120 451 60 451 30 451L0 451Z" fill="#231b31" stroke-linecap="round" stroke-linejoin="miter"></path>
        <path id="blob2" style="visibility: hidden;" d="M0 251L37.5 254.5C75 258 150 265 225 255.3C300 245.7 375 219.3 450 219C525 218.7 600 244.3 675 235.8C750 227.3 825 184.7 862.5 163.3L900 142L900 451L862.5 451C825 451 750 451 675 451C600 451 525 451 450 451C375 451 300 451 225 451C150 451 75 451 37.5 451L0 451Z" fill="#231b31" stroke-linecap="round" stroke-linejoin="miter"></path>
    </svg>

  
        <script>
            const tween = KUTE.fromTo(
                '#blob1',
                {path: '#blob1'},
                {path: '#blob2'},
                {repeat:999 , duration: 9000, yoyo: true},
            )
            tween.start()
        </script>
<!-- /CURVE -->
<div class="purple" >
                <div data-aos="fade-down" data-aos-once="true" data-aos-duration="1500">
                <h1 >Desarrollo de software y <br>aplicaciones moviles en todo el mundo</h1>
                <hr class="line">
                <br>
                <article >
                    <p>En teKKet, nuestra pasión es convertir ideas en soluciones tecnológicas <br>a medida. Somos una empresa de consultoría con una profunda experiencia <br>en el desarrollo e integración de tecnología, dedicada a impulsar la innovación <br>y la eficiencia en tu negocio. Nuestro equipo de expertos trabaja incansablemente<br> para diseñar y desarrollar soluciones personalizadas que se adapten perfectamente <br>a tus necesidades únicas. Desde la conceptualización hasta la implementación, teKKet <br>es tu socio confiable para potenciar el futuro de tu empresa a través de la tecnología</p>
                </article>
                </div>

                <div  data-aos="fade-right" data-aos-once="true" data-aos-duration="1000">
                    <img class="rombo1" src="./MEDIA/rombo1.png" alt="">
                </div>
                <div>
                    <img class="rombo2"  data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true" data-aos-delay="1000" src="./MEDIA/rombo2.png" alt="">
                    
                </div>
                <img class="rombo3" data-aos="fade-left" data-aos-duration="2000" data-aos-once="true" src="./MEDIA/romboIMG1.png" alt="">

</div>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
  
</script>

</body>

</html>