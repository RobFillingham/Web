<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
</head>
<body>
    <header style="background-color: blue; color: snow;">
        <center><p>HEADER</p></center>
    </header>
    <main>
        <div>
            <p>Examen de conocimientos</p>
        </div>
        <div>
            <p>Fecha: <?php
            date_default_timezone_set('America/Mexico_City');
            $fecha_actual = date('d-m-Y');
            echo $fecha_actual;
            ?></p>
        </div>
        <div>
            <p>Indicaciones: Este examen consta de varias preguntas de opción múltiple. Cada pregunta tiene una única respuesta correcta. Por favor, lea cuidadosamente cada pregunta y seleccione la opción que considere correcta.</p>
            <ul>
                <li>Para seleccionar una respuesta, haga clic en el círculo junto a la opción correspondiente.</li>
                <li>Puede revisar y cambiar sus respuestas en cualquier momento antes de enviar el examen.</li>
                <li>No hay límite de tiempo para completar este examen, así que tómese el tiempo necesario para responder con precisión.</li>
                <li>Una vez que haya terminado, haga clic en el botón "Finalizar" para enviar su examen. Una vez enviado, no podrá realizar cambios.</li>
                <li>La calificación aprobatoria para este examen es de 8 puntos o más. Si obtiene una calificación igual o superior a 8, habrá aprobado el examen.</li>
            </ul>
            <p>¡Buena suerte!</p>
        </div>
        <div>
            <form method="post" action="#">
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
                    for($k=0;$k<5;$k++){
                        if(strstr($preguntaYRespuestasArray[$i][$k],$pregunta)){ //Revisa si existe el caracter "?" indica que es pregunta
                             echo "<label for=''>pregunta ".($i+1)." ".$preguntaYRespuestasArray[$i][$k]."</label><br>";
                             break;
                        }
                    }
                    for($j=0;$j<5;$j++){  //Imprime la respuesta
                        if($j != $k){
                            if(strstr($preguntaYRespuestasArray[$i][$j],$respuesta)){ //Revisa si existe el caracter "*" indica que es respuesta
                                $resp = str_replace($respuesta, "", $preguntaYRespuestasArray[$i][$j]);
                                echo "<input type='radio' name='pregunta".($i+1)."' id='".$resp."' value='1' required><label for='".$resp."'>".$resp."</label>";
                            }else{
                                echo "<input type='radio' name='pregunta".($i+1)."' id='".$preguntaYRespuestasArray[$i][$j]."' value='0' required><label for='".$preguntaYRespuestasArray[$i][$j]."'>".$preguntaYRespuestasArray[$i][$j]."</label>";
                            }
                            echo "<br>";
                        }
                    }
                    echo "<br>";
                }
            ?>
                <input type="submit" value="Finalizar">
            </form>
        </div>
    </main>
    <footer style="background-color: green;color: snow;">
        <center><p>FOOTER</p></center>
    </footer>
</body>