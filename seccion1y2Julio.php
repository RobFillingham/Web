<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JUlio</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/kute.js@2.1.2/dist/kute.min.js"></script>
    
   

    <style>
        body {
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
            margin: 0;
            font-family: 'Poppins', sans-serif;
            color: white;
            background: #231b31;
        }

        section {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            height: 0px;
            padding: 80px 20vw;

        }

        .orange {
            background: #e36124;
        }

        .purple {
            background: #231b31;
            height: 100%;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 80px 20vw;
            top: -200px;
        }


        .First {
            position: relative;
            font-size: 50px;
            font-weight: bold;
            color: #231b31;
            margin-left: -100px;
            margin-top: 200px;
        }

        .guy{
            position: absolute;
            margin-top: 150px;
            margin-left: 500px;
            
            
        }
        .guy2{
            position: absolute;
            margin-top: 150px;
            margin-left: 500px;
            animation: crossfade2 8s infinite;
        }

        
        @keyframes crossfade2{
            0%, 100%{
                opacity:0;
            }
            70%{
                opacity:1;
            }    
        }

        .cubo{
            transform: rotate(40deg);
            position: absolute;
            width: 20%;
            margin-top: -80px;
            margin-left: -400px;
            opacity: 0.5;
           animation-name: cube;
           animation-duration: 3s;
        }
        .cubo2{
            transform: rotate(15deg);
            position: absolute;
            width: 17%;
            margin-top: 250px;
            margin-left: 850px;
            opacity: 0.4;
            animation-name: cube2;
           animation-duration: 2s;
        }
        .cubo3{
            transform: rotate(40deg);
            position: absolute;
            width: 12%;
            margin-top: -30px;
            margin-left: 920px;
            opacity: 0.3;
            animation-name: cube3;
           animation-duration: 4s;
        }
        .cubo4{
            transform: rotate(55deg);
            position: absolute;
            width: 10%;
            margin-top: 110px;
            margin-left: 1130px;
            opacity: 0.3;
            animation-name: cube4;
           animation-duration: 1s;
        }

        @keyframes cube{
            from{
                transform:translateX(-100px)
            }
            to{
                transform: translateX(0);
                transform: rotate(40deg);
            }

        }

        @keyframes cube2{
            from{
                transform:translateX(100px)
            }
            to{
                transform: translateX(0);
                transform: rotate(15deg);
            }

        }
        @keyframes cube3{
            from{
                transform:translateX(100px)
            }
            to{
                transform: translateX(0);
                transform: rotate(40deg);
            }

        }
        @keyframes cube4{
            from{
                transform:translateX(100px)
            }
            to{
                transform: translateX(0);
                transform: rotate(55deg);
            }

        }

        .ideas{
            position: absolute;
            margin-top: 150px;
            margin-left: 500px;
        }
        .idea1{
            
            position: absolute;
            margin-top: -30px;
            width: 300px;
            margin-left: 300px;
            animation: idle 10s infinite;
            transform: rotate(16deg);
        }
        .idea2{
            transform: rotate(-16deg);
            position: absolute;
            margin-top: -60px;
            width: 78px;
            margin-left: 60px;
            animation: idle2 10s infinite;
        }
        .idea3{
            transform: rotate(-10deg);
            position: absolute;
            margin-top: 120px;
            width: 200px;
            margin-left: -50px;
            
            animation: idle3 10s infinite;
        }
         @keyframes idle{
            0%{
                transform: rotate(16deg) translateY(0px);
            }
            50%{
              
                transform: rotate(13deg)translateY(20px);
                
            }   
            100%{
              
              transform: rotate(16deg)translateY(0px);
              
          }  
        } 
        @keyframes idle2{
            0%{
                transform: rotate(-16deg) translateY(0px);
            }
            50%{
              
                transform: rotate(-10deg)translateY(20px);
                
            }   
            100%{
              
              transform: rotate(-16deg)translateY(0px);
              
          }  
        } 
        @keyframes idle3{
            0%{
                transform: rotate(-10deg) translateY(0px);
            }
            50%{
              
                transform: rotate(-5deg)translateY(10px);
                
            }   
            100%{
              
              transform: rotate(-10deg)translateY(0px);
              
          }  
        } 
        .line {
            width: 90px; 
            height: 2px; 
            background-color: orange; 
            border: none;
            margin-left: 0px;
         }
         .rombo1 {
            
            width: 130%; 
            margin-top: -350px;
            margin-left: -370px;
         
        }
        .rombo2 {
            
            width: 50%; 
            margin-top: -300px;
            margin-left: 660px;
         
        }
        .rombo3 {
            
            width: 50%; 
            margin-top: -450px;
            margin-left: 656px;
         
        }
        


    </style>
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
    <svg id="visual" viewBox="12 0 900 450" width="120%" height="100%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
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