<body>
    

<?php
 


?>
<div style="margin:100px;">
<?php
     
    $nombre = $_POST["nombre"];
    $usuario = $_POST["email"];
    $contra = $_POST["contra"];

    //formar codigo de usuario
    $file = fopen("../data/code.txt","r");
    $linea = fgets($file);
    $linea += rand(1,20);
    fclose($file);
    $file = fopen("../data/code.txt","w");
    fwrite($file, $linea);
    fclose($file);
    
     
    $file = fopen("../data/archivo.txt","a+");
    fwrite($file, $usuario." ".$contra." "."-1 -1 ".$linea." ".$nombre."\n");
    fclose($file);
    
    echo "<br> cuenta insertada <br>";   
     
    echo "<br><a href='../elim.php'>regresar</a>";


?>
</div>
</body>

