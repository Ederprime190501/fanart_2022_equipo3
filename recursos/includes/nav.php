<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand logo" href="#"><img src="recursos/img/iconos/logo.PNG" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active enlace1" aria-current="page" href="index.html">Inicio</a></li>
                <li class="nav-item"><a class="nav-link active enlace1" aria-current="page" href="conocenos.php">Conocenos</a></li>
                <!--Dropdown Productos-->
                <?php include'productos.php' ?>
                
                <li class="nav-item"><a class="nav-link active enlace1" aria-current="page" href="servicio.php">Servicios</a></li>
                <li class="nav-item"><a class="nav-link active enlace1" aria-current="page" href="comunidad.php">Comunidad</a></li>
                <li class="nav-item"><a class="nav-link active enlace1" aria-current="page" href="contacto.php">Contacto</a></li>
                
                <!--Barra de Busqueda-->
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Busqueda" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
                
                <!--Modal Login-->
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#"><spam class="fas fa-user fa-2x" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"></spam></a></li>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Inicia Sesión</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="login_img">
                                    <img src="recursos/img/imagenes/login.png">
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