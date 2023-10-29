<?php
    require('fpdf186/fpdf.php');


    class PDF extends FPDF {
        function Header() {
            $pageWidth = $this->GetPageWidth();
            $logoWidth = 120;  
            $logoHeight = 30;  
            $logoX = ($pageWidth - $logoWidth) / 2;
            $this->Image('img/logoCompleto.png', $logoX, 5, $logoWidth, $logoHeight);
            $this->SetY(40); 
            $this->SetFont('Arial', 'B', 16); // Define fuente para el texto
            $this->Cell(0, 10, '"Donde la innovacion se encuentra con el codigo"', 0, 1, 'C'); // Agrega el texto
        }
    
        function Footer() {
            $logoWidth = 50;
            $this->SetY(-45);
            $this->SetFont('Arial', '', 12);
            $this->Image('img/firma.png', 80, $this->GetY() -5, $logoWidth); 
            $this->Cell(0, 10, '____________________________', 0, 1, 'C');
            $this->Cell(0, 10, 'CEO Robert Everett Fillingham Gaeta', 0, 1, 'C');
        }
    }

    $months = array(
        1 => "Enero",
        2 => "Febrero",
        3 => "Marzo",
        4 => "Abril",
        5 => "Mayo",
        6 => "Junio",
        7 => "Julio",
        8 => "Agosto",
        9 => "Septiembre",
        10 => "Octubre",
        11 => "Noviembre",
        12 => "Diciembre"
    );

    $options= array("c", "c++", "java", "javascript", "html", "css", "bootstrap", "php");

    $positions= array("Junior java developer", "Senior java developer", "Quality control tester", 
                    "Junior web devoloper", "Senior web developer", "Proyect manager",
                    "Database administrator", "Junior AI and machine learning developer",
                    "Senior AI and machine learning developer");

    
    function test_input($data) {
        $data = trim($data);  
        $data = stripslashes($data); 
        $data = htmlspecialchars($data);
        return $data;
    }

    function checkBox($vecCheck){
        $text= "";
        foreach ($vecCheck as $valor) {
            $text= $text . "" .$valor . ", ";
        }
       return $text;
    }

    function checkImage(){
        
        if (isset($_FILES["user_image"]) && $_FILES["user_image"]["error"] == UPLOAD_ERR_OK) {
            // Directorio de destino para las imágenes
            $destiny_dir = "imagenesAspirantes/";
            
            // Mover la imagen al directorio de destino
            $image_name = $_FILES["user_image"]["name"];
            $image_dir = $destiny_dir . $image_name;
            move_uploaded_file($_FILES["user_image"]["tmp_name"], $image_dir);
            return $image_dir;
    
        } 
    }
    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $lastname_dad = test_input($_POST["lastname_dad"]);
        $lastname_mom = test_input($_POST["lastname_mom"]);
        $cel_number = test_input($_POST["cel_number"]);
        $birthday_day = $_POST["birthday_day"];
        $birthday_month = $_POST["birthday_month"];
        $birthday_year = $_POST["birthday_year"];
        $programing_languages =checkBox($_POST["programing_languages"]);
        $travel_availability = $_POST["travel_availability"];
        $english_skills = $_POST["english_skills"];
        $desire_position = $_POST["desire_position"];
        
        //MODIFICAR EL REGISTRO DEL USUARIO A QUE YA MANDO LA FORMA
        /*
        $file = fopen("../../data/archivo.txt","r");
        $file2 = fopen("../../data/archivo2.txt","a+");

        while (!feof($file)) {
            $linea = fgets($file);
            if ($linea != "") {
                $aux = preg_split("/[\s,]+/", $linea);   /*https://www.w3schools.com/php/func_regex_preg_split.asp
                                                https://www.w3schools.com/php/php_ref_regex.asp
                $correo = $aux[0];
                $contrasena = $aux[1];
                $form= $aux[2];
                $examen= $aux[3];
                $codigoE = $aux[4];
                $nombre = $aux[5];

                if ($correo === $_SESSION["correo"]) {
                    $linea = $correo." ".$contrasena." 1 ".$examen." ".$codigoE." ".$nombre."\n";
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

        unlink("archivo.txt");
        rename("archivo2.txt","archivo.txt");
        */
    }

    if(isset($_POST["submit"])) {
        $date = date('d/m/Y');
        $image_dir=checkImage();
        
        $text = "En el dia de hoy, $date, tenemos el placer de considerar a $name $lastname_dad $lastname_mom como un candidato potencial para el puesto de $desire_position. 

El solicitante proporciono la siguiente informacion: Numero de telefono: $cel_number, fecha de nacimiento: $birthday_day de $birthday_month de $birthday_year.";

        $text2 = "$name posee experiencia en los siguientes lenguajes de programacion: $programing_languages. Ademas, esta $travel_availability para viajar al extranjero y posee el idioma ingles $english_skills.

A continuacion se le proporcionara su clave de acceso para realizar el examen de conocimientos, le deseamos lo mejor en todo el proceso de seleccion.
        
clave:";


        $pdf = new PDF();
        $pdf->AddPage();
        
        // $pdf->Ln(20);
        $pdf->Image($image_dir, 10, 70, 50, 0);

        $pdf->SetXY(70, 70);
        $pdf->SetFont('Arial', '', 12,  'ISO-8859-1');
        $pdf->MultiCell(0, 10, $text);

        $pdf->SetXY(10, 140);
        $pdf->MultiCell(0, 10, $text2);
        
        $pdf->Output('Solicitud.pdf', 'D');
    }else{
?>
<body>
    <h2>Formulario</h2>
    <form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

        <label for="name">Nombre: </label>
        <input type="text" id="name" name="name" required>
        
        <label for="lastname_dad">Apellido paterno: </label>
        <input type="text" id="lastname_dad" name="lastname_dad" required>

        <label for="lastname_mom">Apellido materno</label>
        <input type="text" id="lastname_mom" name="lastname_mom" required>

        <label for="cel_number">Número de teléfono:</label>
        <input type="number" id="cel_number" name="cel_number" required>

        <label for="user_image">Fotografía:</label>
        <input type="file" id="user_image" name="user_image"  required>

        <label>Día de nacimiento:</label>
        <label for="birthday_day" aria-placeholder="Día"></label>
        <select id="birthday_day" name="birthday_day" required>
            <!-- Generar opciones para los días (1-31) -->
            <?php
            for ($day = 1; $day <= 31; $day++) {
                echo "<option value='$day'>$day</option>";
            }
            ?>
        </select>
        
        <label for="birthday_month"aria-placeholder="Mes">Mes</label>
        <select id="birthday_month" name="birthday_month" required>
            <!-- Generar opciones para los meses (1-12) -->
            <?php
            $textMonth= "";
            for ($month = 1; $month <= 12; $month++) {
                $textMonth= $months[$month];
                echo "<option value='$textMonth'>$textMonth</option>";
            }
            ?>
        </select>

        <label for="birthday_year"aria-placeholder="Año">Año</label>
        <select id="birthday_year" name="birthday_year" required>
            <!-- Generar opciones para los años (1970-2023) -->
            <?php
            for ($year = 1970; $year <= 2023; $year++) {
                echo "<option value='$year'>$year</option>";
            }
            ?>
        </select>

        <label>Que lenguajes o framworks dominas?</label>
            <?php
            foreach ($options as $option) {
                echo '<input type="checkbox" name="programing_languages[]" value="' . $option . '">';
                echo ' '.$option . '<br>';
            }
            ?>

        <label>Disponibilidad para viajar:</label>
            <label>
                <input type="radio" name="travel_availability" value="disponible" required> Sí
            </label>
            <label>
                <input type="radio" name="travel_availability" value="no disponible" required> No
            </label>

        <label>Hablas ingles:</label>
            <label>
                <input type="radio" name="english_skills" value="dominado" required> Sí
            </label>
            <label>
                <input type="radio" name="english_skills" value="no dominado" required> No
            </label>

        <label for="desire_position"aria-placeholder="Posición a aplicar:">Posición a aplicar:</label>
            <?php
            echo "<select id='desire_position'  name='desire_position' required>";

            foreach ($positions as $position) {
               echo "<option value='$position'> $position </option>";
            }
   
            echo "</select>";
            ?>

        <input  type="submit" name="submit" value="Enviar">  
    </form>

    <a href="../../indexT.php">Regresar</a>
</body>
<?php
}
?>