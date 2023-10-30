<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login incorrecto</title>

    <style>
        body{
            background-color: #e36124;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: #231b31;
        }

        .square{
            
            padding: 250px;
            margin: 80px;
            width: 800px; 
            height: 100px; 
            background-color: white; 
            border-radius: 15px; 
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5); 
            
        }

        

        .messg{
            margin-top: -150px;
            margin-left: 280px;
        }

        .messg img{
            position:relative;
            right: 50px;
            width:50%;
        }

        .messg a {
        text-decoration: none; 
        color: #231b31; 
        background-color: #F4A261; 
        padding: 5px 10px; 
        border-radius: 5px; 
        transition: background-color 0.3s, color 0.3s; 
        }

        .messg a:hover {
        background-color: #E76F51;
        color: #FFFFFF; 
        }
        
        .messg h1{
            margin-left: -120px;
        }

    </style>
</head>
<body>
    <div class="square">
        <div class="messg">
        <h2>Lo sentimos..</h2>
        <img src="./MEDIA/bailey.png" alt="">
        <h1 >Correo o contraseña incorrectos</h1>
        <a href="index.php">Intentar de nuevo</a>
        </div>
    </div>
</body>
</html>