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
    <link rel="stylesheet" href="recursos/css/servicio.css">

</head>
<body>
<!--Menu de Navegación-->
  <div>
  <?php include'recursos/includes/nav.php' ?>
    </div>

	<!--Formulario-->
	<div class="container">
    <div class="contenido">
        <h1 class="servicio_h1">¿Desea realizar un mural y no sabe con quien?</h1>
        <strong class="strong">Llene el siguiente formulario y nos contactaremos a la brevedad</strong>
   </div>
   <div class="row">
       <form action="" class="formulario">
           <div>
               <label for="nombre" class="form-label">Nombre Completo:</label>
               <input type="text" class="form-control" id="nombre">
           </div>
           <div>
                <label for="email" class="form-label">Correo Electronico:</label>
                <input type="email" class="form-control" id="email">
           </div>
           <div class="row align-items-start">
               <div class="col-md-6">
                    <label for="telce" class="form-label">Teléfono Celular:</label>
                    <input type="String" class="form-control" id="telce">
               </div>
               <div class="col-md-6">
                    <label for="telca" class="form-label">Teléfono de Casa:</label>
                    <input type="String" class="form-control" id="telca">
                </div>
           </div>
           <div class="row align-items-start">
               <div class="col-md-6">
                    <label for="ciudad" class="form-label">Ciudad:</label>
                    <input type="text" class="form-control" id="ciudad">
               </div>
               <div class="col-md-6">
                    <label for="estado" class="form-label">Estado:</label>
                    <input type="text" class="form-control" id="estado">
                </div>
           </div>
           <div>
                <label for="direccion" class="form-label">Dirección:</label>
                <br>
                <textarea class="col-md-12 mensaje" id="direccion" name="direccion" ></textarea>
           </div><br>
           <div>
               <a class="btn btn-outline-danger boton" href="">Solicitar</a>
           </div><br>
       </form>
       <hr>
   </div>
	</div>

<!--Footer-->
	<div>
   <?php include'recursos/includes/footer.php'?>
    </div>
    <script src="recursos/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="recursos/fontawesome/js/all.js"></script>
    <script src="recursos/js/jquery.min.js"></script>
</body>
</html>
