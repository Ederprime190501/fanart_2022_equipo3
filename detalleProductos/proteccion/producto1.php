<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Arte Urbano | 2022</title>
    <link rel="stylesheet" href="../../recursos/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../recursos/fontawesome/css/all.css">
    <link rel="stylesheet" href="../../recursos/css/styles.css">
    <link rel="stylesheet" href="../../recursos/css/animate/animate.css">
    <link rel="stylesheet" href="../../recursos/css/detalle.css">
</head>
<body>
<!--Menu de Navegación-->
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand logo" href="#"><img src="../../recursos/img/iconos/logo.PNG" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active enlace1" aria-current="page" href="../../index.html">Inicio</a></li>
                <li class="nav-item"><a class="nav-link active enlace1" aria-current="page" href="../../conocenos.php">Conocenos</a></li>
                <!--Dropdown Productos-->
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Productos</a>

                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="../../prodPinturas.php"><i class="fa-solid fa-palette"></i> Pinturas</a></li>
                    <li><a class="dropdown-item" href="../../prodSolventes.php"><i class="fa-solid fa-bottle-water"></i> Solventes</a></li>
                    <li><a class="dropdown-item" href="../../prodAccesorios.php"><i class="fa-solid fa-paint-roller"></i> Accesorios Extras</a></li>
                    <li><a class="dropdown-item" href="../../prodProteccion.php"><i class="fa-solid fa-helmet-safety"></i> Equipo de Protección</a></li>
                    <li><a class="dropdown-item" href="../../productos.php"><i class="fa-solid fa-paintbrush"></i> Todos los Productos</a></li>
                </ul>
                </li>
                
                <li class="nav-item"><a class="nav-link active enlace1" aria-current="page" href="../../servicio.php">Servicios</a></li>
                <li class="nav-item"><a class="nav-link active enlace1" aria-current="page" href="#">Comunidad</a></li>
                <li class="nav-item"><a class="nav-link active enlace1" aria-current="page" href="../../contacto.php">Contacto</a></li>
                
                <!--Barra de Busqueda-->
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Busqueda" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
                
                <!--Modal Login-->
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#"><spam class="fa-solid fa-circle-user fa-2x" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"></spam></a></li>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Inicia Sesión</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="login_img">
                                    <img src="../../recursos/img/imagenes/login.png">
                                </div>
                                <form>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Correo Electronico: </label>
                                        <input type="email" class="form-control" id="recipient-name" placeholder="Correo">
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Contraseña: </label>
                                        <input type="password" class="form-control" id="recipient-name" placeholder="Contraseña">
                                    </div>
                                    <div class="mb-3">
                                        <p>¿No tienes una Cuenta? <a href="#">Registrate</a> </p>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-success">Entrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </ul>
        </div>
    </div>
</nav>
<!--detalle de Productos-->
<div class="container">
 <div class="card detalle">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="../../recursos/img/productos/PROTECCION/producto1.PNG" class="img-fluid rounded-start" alt="#">
    </div>
    <div class="col-md-8">
     <div class="card-header bg-transparent"><strong>Categoria:</strong> Equipo de Protección</div>
      <div class="card-body">
        <h5 class="card-title">IMPERMEABLE ECONOMICO AMARILLO 2XL</h5>
        <ul class="list-group list-group-flush">
    <li class="list-group-item"><strong>Marca: </strong> Economex</li>
    <li class="list-group-item"><strong>Cantidad unitaria: </strong> 1</li>
    <li class="list-group-item"><strong>Precio: </strong> $462.00</li>
  </ul>
      </div>
      <div class="card-footer bg-transparent">
          <a href="../../prodProteccion.php" class="btn btn-danger" role="button">Regresar</a>
          <a href="#" class="btn btn-primary" role="button">Comprar</a>
      </div>
    </div>
  </div>
</div>
<hr>
</div>
<!--Footer-->
   <div>
   <?php include'../../recursos/includes/footer.php' ?>
    </div>
    
    
    <script src="../../recursos/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../recursos/fontawesome/js/all.js"></script>
    <script src="../../recursos/js/jquery.min.js"></script>
</body>
</html>