<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Arte Urbano | 2022</title>
    <link rel="stylesheet" href="recursos/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="recursos/fontawesome/css/all.css">
    <link rel="stylesheet" href="recursos/css/styles.css">
    <link rel="stylesheet" href="recursos/css/animate/animate.css">
    <link rel="stylesheet" href="recursos/css/contacto.css">
</head>
<body>
<!--Menu de Navegación-->
  <div>
  <?php include'recursos/includes/nav.php' ?>
    </div>
    <!--Formulario-->
    <div class="container">
        <div class="row" id="contacto">
            <div class="container mt-5" >
                <div class="row" style="height:450px;">
                    <div class="col-md-6 maps" >
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15052.92308374893!2d-99.0460533!3d19.4024326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1653754491986!5m2!1ses-419!2smx" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-6">
                        <div class="formulario">
                            <h2 class="h3">Contactanos</h2>
                        </div>
                        <form action="">
                            <div class="row">
                                <div>
                                    <label for="nombre" class="form-label">Nombre Completo:</label>
                                    <input type="text" class="form-control" id="nombre">
                                </div>
                                <div>
                                    <label for="email" class="form-label">Correo Electronico:</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                                <div>
                                    <label for="direccion" class="form-label">Dirección:</label>
                                <br>
                                    <textarea class="col-md-12" id="direccion" name="direccion" ></textarea>
                                </div>
                                <div><br>
                                    <a class="btn btn-bg-#F1C40F boton" href="">Enviar</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
<!--Footer-->
	<div>
   <?php include'recursos/includes/footer.php' ?>
    </div>
    <script src="recursos/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="recursos/fontawesome/js/all.js"></script>
    <script src="recursos/js/jquery.min.js"></script>

</body>
</html>

<!-- Fomulario con:
Nombre, correo, mensaje

contacto dirección, numero telefono, correo, google maps-->