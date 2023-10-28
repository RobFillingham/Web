<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/nav.css">
</head>

<header>
        <img class="logo" src="MEDIA/logoCompleto.png" alt="logo" height="200px">
        <nav>
            <ul class="nav_links">
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Vacantes</a></li>
                <li><a href="#">log</a></li>
            </ul>
        </nav>
        <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="custom-button btn dropdown-toggle">Login <span class="caret"></span></button>
        <ul class="dropdown-menu dropdown-menu-right mt-2">
            <li class="px-3 py-2">
                <form class="form" role="form" action="php/login.php" method="post">
                    <div class="form-group">
                        <input name="email" id="emailInput" placeholder="Email" class="form-control form-control-sm" type="email" required="">
                    </div>
                    <div class="form-group">
                        <input name="palabra_secreta" id="passwordInput" placeholder="Password" class="form-control form-control-sm" type="password" required="">
                    </div>
                        
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                    <div class="form-group text-center">
                        <small><a href="#" data-toggle="modal" data-target="#modalPassword">Registrar cuenta</a></small>
                    </div>
                </form>
            </li>
        </ul>

</header>
<div id="modalPassword" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Registro</h3>
                <button type="button" class="close font-weight-light" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form class="form" role="form" action="php/registro.php" method="post">
            <div class="modal-body">
                <p>Primer Nombre: <input type="text" name="nombre" required> </p>
                <p>Correo: <input type="email" name="email" required> </p>
                <p>Contraseña: <input type="text" name="contra" required> </p>
             
                
            </div>
            <div class="modal-footer">                
                <div class="form-group">                  
                  <button type="submit" class="btn btn-primary btn-block">Enviar</button>
               </div>
            </div>
            </form>
        </div>
    </div>
</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
