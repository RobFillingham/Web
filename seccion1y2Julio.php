<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JUlio</title>
    <style>
        body{
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

            margin: 0;
            font-family: 'Poppins', sans-serif;
            color: white;
            background: #202731;
        }

        section{
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            height: 0px;
            padding: 80px 20vw;
            
        }

        .orange{
            background: #e36124;
        }
        .purple{
            background: #231b31;
        }
        .spacer{
            aspect-ratio: 900/300;
            width: 100%;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
        .layer1{
            background-image: url('./layer1.svg');
        }

        .First{
            position: absolute;
            font-size: 50px;
            font-weight: bold;
            color: #231b31;
            margin-left: -100px;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <section class="orange">
        <div class="First">
        <p>Donde la inovacion <br>se encuentra con <br>el codigo uniendote <br> a <span style="color:white">teKKet</span></p>
        </div>
    </section>

    <div class="spacer layer1"></div>

    
</body>
</html>