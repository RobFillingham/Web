<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login incorrecto</title>

    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 100px;
            background-color: #e36124;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: #231b31;
        }

        .square{
            display: flex;
            justify-content: center;
            align-items: center;

            padding: 250px;
            
             
            height: 100px; 
            background-color: white; 
            border-radius: 15px; 
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5); 
            
        }

        

        

        .messg img{
            
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
        
        

    </style>
</head>
<body>
    <div class="square">
        <div class="messg">
        <h2>Lo sentimos..</h2>
        <img src="../MEDIA/bailey.png" alt="">
        <h1 >Correo o contraseña incorrectos</h1>
        <a href="../index.php">Intentar de nuevo</a>
        </div>
    </div>
</body>
</html>