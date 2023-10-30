<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/examen.css">

    <title>Document</title>
</head>
<body>
    <?php
        include("indexT.php");
    ?>
    <div class="bloque1">
        <div class="bienvenido">
            <?php
                
                echo "<h1 style='font-family: 'Outfit', sans-serif;'>Bienvendo a tu Examen ".$_SESSION["nombre"]."!</h1>";
            ?>
        </div>
        
        <div class="indicaciones">
            <p>Indicaciones: Este examen consta de varias preguntas de opción múltiple. Cada pregunta tiene una única respuesta correcta. Por favor, lea cuidadosamente cada pregunta y seleccione la opción que considere correcta.</p>
            <ul style="font-family:'Outfit', sans-serif; font-weight: 500; color: grey;">
                <li style="font-family:'Outfit', sans-serif; font-weight: 500; color: grey;">Para seleccionar una respuesta, haga clic en el círculo junto a la opción correspondiente.</li>
                <li style="font-family:'Outfit', sans-serif; font-weight: 500; color: grey;">Puede revisar y cambiar sus respuestas en cualquier momento antes de enviar el examen.</li>
                <li style="font-family:'Outfit', sans-serif; font-weight: 500; color: grey;"> No hay límite de tiempo para completar este examen, así que tómese el tiempo necesario para responder con precisión.</li>
                <li style="font-family:'Outfit', sans-serif; font-weight: 500; color: grey;">Una vez que haya terminado, haga clic en el botón "Finalizar" para enviar su examen. Una vez enviado, no podrá realizar cambios.</li>
                <li style="font-family:'Outfit', sans-serif; font-weight: 500; color: grey;">La calificación aprobatoria para este examen es de 8 puntos o más. Si obtiene una calificación igual o superior a 8, habrá aprobado el examen.</li>
            </ul>
            <p>¡Buena suerte!</p>
        
        
            <p class="fecha">Fecha: <?php
            date_default_timezone_set('America/Mexico_City');
            $fecha_actual = date('d-m-Y');
            echo $fecha_actual;
            ?></p>
        </div>
        
    </div>
    <div class="qs">
        <form method="post" action="evaluarExamen.php">
        <?php
            //Arreglos para almacenar las preguntas y respuestas
            $preguntaYRespuestasArray = array();
            // Abre el archivo de texto para lectura
            $archivo = fopen('data/preguntas.txt', 'r');
            $arrayAuxiliar = array();
            $cont = 0;
            if ($archivo) {
                while (($linea = fgets($archivo)) !== false) {
                    if($cont >= 5){  //Si acaba con los cinco renglones, deja pasar una iteracion, se añade el arrayAux al array principal y resetea el arrayAuxiliar
                        $cont = 0;
                        $preguntaYRespuestasArray[] = $arrayAuxiliar;
                        $arrayAuxiliar = array();
                    }else{  //Se va llenando el array auxiliar
                        $arrayAuxiliar[] = $linea;
                        $cont+=1;
                    }
                }
                fclose($archivo);
            }
            // Desordena al array de arrays
            shuffle($preguntaYRespuestasArray);
            // Desordena cada uno de los arrays internos
            foreach ($preguntaYRespuestasArray as &$subArray) {
                shuffle($subArray);
            }
            $pregunta = "¿";
            $respuesta = "*";
            $k = 0;
            for($i=0;$i<count($preguntaYRespuestasArray);$i++){  //Imprime la pregunta
                echo "<div class='question'>";
                for($k=0;$k<5;$k++){
                    if(strstr($preguntaYRespuestasArray[$i][$k],$pregunta)){ //Revisa si existe el caracter "?" indica que es pregunta
                            echo "<label class='labs' for=''>".($i+1).") ".$preguntaYRespuestasArray[$i][$k]."</label><br>";
                            break;
                    }
                }
                echo "<div class='answers'>";
                for($j=0;$j<5;$j++){  //Imprime la respuesta
                    if($j != $k){
                        if(strstr($preguntaYRespuestasArray[$i][$j],$respuesta)){ //Revisa si existe el caracter "*" indica que es respuesta
                            $resp = str_replace($respuesta, "", $preguntaYRespuestasArray[$i][$j]);
                            echo "<input class='rads' type='radio' name='pregunta".($i+1)."' id='".$resp."' value='1' required><label for='".$resp."'>".$resp."</label>";
                        }else{
                            echo "<input class='rads' type='radio' name='pregunta".($i+1)."' id='".$preguntaYRespuestasArray[$i][$j]."' value='0' required><label for='".$preguntaYRespuestasArray[$i][$j]."'>".$preguntaYRespuestasArray[$i][$j]."</label>";
                        }
                        echo "<br>";
                    }
                }
                echo "</div>";
                echo "</div>";
                echo "<br>";
            }
        ?>
        

        </form>
        <div class="but">
            <input class="button-36" role="button" type="submit" value="Enviar">
        </div>
    </div>
    
        

    <?php
        include("footer.html");
    ?>
</body>