<?php


session_start();

 
# Eliminamos la sesion
session_destroy();

# Finalmente lo redireccionamos al formulario
header("Location: ../indexA.php");
?>
