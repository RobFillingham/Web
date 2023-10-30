<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctanos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/contactanos.css">
</head>
<body>
    <?php
        include('indexT.php');
    ?>
    <body id="main">

        <div id="contenedor-1" class="boxContact">
            <div id="contactText">
                <h2>Contacto</h2>
                <h3>Estamos aquí para apoyarte en el logro exitoso de tu proyecto</h3>
                <p>Completa nuestro formulario y uno de nuestros expertos te contactará para programar una consulta gratuita.</p>
                <h4>También puedes comunicarte con nosotros directamente al:</h4>
                <img id="image" src="MEDIA/iconos-Sociales/bxs-phone.png" alt="phone" width="25px">
                <button type="button" class="custom-button-2">449 104 9995</button>
            </div>
            <div id="contactForm">
                <form method="post" action="#">
                    <table>
                        <tr>
                            <td colspan="2">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Nombre completo</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombre Completo">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Email</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Teléfono</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Número telefónico">
                                </div>
                            </td>
                            <td>
                                <div class="form-group select">
                                    <label for="formGroupExampleInput">Solución</label>
                                    <select class="custom-select">
                                        <option selected>Selecciona una opción</option>
                                        <option value="1">Desarrollo de software</option>
                                        <option value="2">Desarrollo de apps</option>
                                        <option value="3">Analítica de datos</option>
                                      </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Nombre de la empresa</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombre de la empresa">
                                </div>
                            </td>
                            <td>
                                <div class="form-group select">
                                    <label for="formGroupExampleInput">Etapa en que se encuentra tu proyecto</label>
                                    <select class="custom-select">
                                        <option selected>Selecciona una opción</option>
                                        <option value="1">Pruebas</option>
                                        <option value="2">Diseño</option>
                                        <option value="3">Desarrollo</option>
                                        <option value="4">Idea</option>
                                      </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Describe tu proyecto</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  placeholder="Describe tu proyecto"></textarea>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <center><input type="submit" value="Enviar"></center>
                            </td>
                        </tr>
                    </table>
                  </form>
            </div>
        </div>
        <hr style="border: none;border-top: 2px solid #e36124;margin: 0 70px;">
        <div id="contenedor-2" class="boxContact">
            <div id="compu">
                <center><img src="MEDIA/romboCesar.png" alt="computadora" width="400px"></center>
            </div>
            <div id="datos">
                <table id="tabla-2">
                    <tr>
                        <td>
                            <p class="titulos">DIRECCIÓN</p>
                        </td>
                        <td>
                            <p class="titulos">TELÉFONO</p>
                        </td>
                    </tr>
                    <tr>
                        <td id="location">
                            <p>Jorge Reynoso 1703-15, Desarrollo Especial Galerías, 20120 Aguascalientes, Ags, Mexico</p>
                        </td>
                        <td>
                            <p>55 5687 16 21</p>
                            <p>55 1668 34 64</p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" id="city">
                            <p>Wework Aguascalientes</p>
                            <p>Wework Monterrey</p>
                            <p>Wework Guadalajara</p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <p class="titulos">EMAIL</p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <p id="correo">info@tekket.com.mx</p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

    </body>
        <?php
        include('footer.php');
        ?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</body>
</html>
