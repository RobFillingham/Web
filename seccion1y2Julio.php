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
            background: #202731;
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
            width: 10%;
            margin-top: 50px;
            margin-left: 420px;
        }

        .ideas{
            position: absolute;
            margin-top: 150px;
            margin-left: 500px;
        }
        .idea1{
            transform: rotate(16deg);
            position: absolute;
            margin-top: -30px;
            width: 300px;
            margin-left: 300px;
        }
        .idea2{
            transform: rotate(-16deg);
            position: absolute;
            margin-top: -60px;
            width: 78px;
            margin-left: 60px;
        }
        .idea3{
            transform: rotate(-10deg);
            position: absolute;
            margin-top: 90px;
            width: 200px;
            margin-left: -50px;
        }
    </style>
</head>

<body>
    <section class="orange">
        <div class="First">
            <p>Donde la inovacion <br>se encuentra con <br>el codigo uniendote <br> al equipo <span style="color:white">teKKet</span></p>
        </div>
         <!-- <img class="cubo" src="./MEDIA/cubo2.png" alt="">  -->
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

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</body>

</html>