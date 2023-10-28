<?php 

    session_start();

    $uno=array(10);
    $uno[0] = $_POST["pregunta1"];
    $uno[1] = $_POST["pregunta2"];
    $uno[2] = $_POST["pregunta3"];
    $uno[3] = $_POST["pregunta4"];
    $uno[4] = $_POST["pregunta5"];
    $uno[5] = $_POST["pregunta6"];
    $uno[6] = $_POST["pregunta7"];
    $uno[7] = $_POST["pregunta8"];
    $uno[8] = $_POST["pregunta9"];
    $uno[9] = $_POST["pregunta10"];

    $calificacion = 0;
    for($i=0;$i<10;$i++){
        $calificacion+=$uno[$i];
    }

    //reescribir el archivo con la nueva calificacion del usuario
    $file = fopen("../data/archivo.txt","r");
    $file2 = fopen("../data/archivo2.txt","a+");

    while (!feof($file)) {
        $linea = fgets($file);
        if ($linea != "") {
            $aux = preg_split("/[\s,]+/", $linea);   /*https://www.w3schools.com/php/func_regex_preg_split.asp
                                            https://www.w3schools.com/php/php_ref_regex.asp*/
            $correo = $aux[0];
            $contrasena = $aux[1];
            $form= $aux[2];
            $examen= $aux[3];
            $codigoE = $aux[4];
            $nombre = $aux[5];

            if ($correo === $_SESSION["correo"]) {
                $linea = $correo." ".$contrasena." ".$form." ".$calificacion." ".$codigoE." ".$nombre."\n";
                fwrite($file2, $linea);
                break;
            }
            else{
                fwrite($file2, $linea);
            }
        }
    }

    fclose($file);
    fclose($file2);

    unlink("../data/archivo.txt");
    rename("../data/archivo2.txt","archivo.txt");

    if($calificacion>=7){
        //MENSAJE DE EXITO
        include("Correo/correo.php");
    }
    else{
        //MENSAJE DE REPROBADO
    }







    

?>