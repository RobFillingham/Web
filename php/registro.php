<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/registro.css">
</head>
<body>
    

<?php
 

?>
<div style="margin:100px;">
<?php
    function generarPassword($longitud) {
        $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $password = '';
    
        for ($i = 0; $i < $longitud; $i++) {
            $password .= $caracteres[rand(0, strlen($caracteres) - 1)];
        }
    
        return $password;
    }

    $nombre = $_POST["nombre"];
    $usuario = $_POST["email"];
    $contra = $_POST["contra"];

    //formar codigo de usuario
    $file = fopen("../data/code.txt","r");
    $linea = fgets($file);
    $linea = generarPassword(8);
    fclose($file);
    $file = fopen("../data/code.txt","w");
    fwrite($file, $linea);
    fclose($file);
    
     
    $file = fopen("../data/archivo.txt","a+");
    fwrite($file, $usuario." ".$contra." "."-1 -1 ".$linea." ".$nombre."\n");
    fclose($file);
?>
    <div class="success-message">
        <p>¡Tu cuenta se ha registrado con éxito!</p>
    </div>
    <div class="container">
        <a href="../elim.php" class="returnbtn">Regresar</a>
    </div>
</div>
</body>

