<?php
    session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/verificarCodigo.css">
    <title>Document</title>
</head>

<?php
    if(isset($_POST["submit"])){
        if($_POST["code"] == $_SESSION["code"])
            header("Location: ../examen.php");
        else{
            ?>
            <div class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="title">Hola <?php echo $_SESSION["nombre"] ?>,</div>
                <div class="subtitle">Ingresa el codigo para tu examen:</div>
                <div class="input-container ic1">
                    <input id="firstname" name="code" class="input" type="text" placeholder=" " />
                    <div class="cut"></div>
                    <label for="firstname" class="placeholder">Código</label>
                </div>
                <button type="text" class="submit">Codigo Incorrecto!</button>
            </div>
            <?php
        }
    }
?>

<body>
    <div class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <div class="title">Hola <?php echo $_SESSION["nombre"] ?>,</div>
      <div class="subtitle">Ingresa el codigo para tu examen:</div>
      <div class="input-container ic1">
        <input id="firstname" name="code" class="input" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="firstname" class="placeholder">Código</label>
    </div>
      <button type="text" class="submit">Okay</button>
    </div>
</body>
</html>