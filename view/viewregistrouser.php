<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario</title>

  <!--  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	Custom styles-->
	<link rel="stylesheet" href="../view/assets/css/estilosRegistroUser.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<!-- HEADER -->
<?php
include 'header.php'
?>

<style>
.container.text-center {
  background-image: url('ruta/de/la/imagen.gif');
  background-size: cover;
}

legend.text-xs-center {
  font-size: 15px;
  font-weight: bold;
  text-transform: uppercase;

}
</style>


<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
-->
<div class="container">
    <div class="row">
        
        <div class="col-md-12">
            <div class="well well-sm">
            <div >
                <form method="post" action="../business/usuarioaction.php">
                    <fieldset>
                    <style>
        body {
            background-image: url("assets/images/bat.gif");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
                      <div class="container text-center">
  <legend class="text-xs-center header p-3 mb-2 bg-primary text-white">Datos del Usuario</legend>
  <!-- resto del formulario -->
</div>
                        <!-- CEDULA -->
                        <div class="form-group container text-center">
                            <span class="col-md-1 offset-md-2 text-xs-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8 container text-center">
                                <input id="cedula" name="cedula" type="text" placeholder="Cédula" class="form-control" required pattern="[0-9]+">
                            </div>
                        </div>

                        <!-- NOMBRE -->
                        <div class="form-group container text-center">
                            <span class="col-md-1 offset-md-2 text-xs-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8 container text-center">
                                <input id="nombre" name="nombre" type="text" placeholder="Nombre" class="form-control" required pattern="^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$">
                            </div>
                        </div>

                        <!-- PRIMER APELLIDO -->
                        <div class="form-group container text-center">
                            <span class="col-md-1 offset-md-2 text-xs-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8 container text-center">
                                <input id="apellido1" name="apellido1" type="text" placeholder="Primer Apellido" class="form-control" required pattern="^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$">
                            </div>
                        </div>

                        <!-- SEGUNDO APELLIDO -->
                        <div class="form-group container text-center">
                            <span class="col-md-1 offset-md-2 text-xs-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8 container text-center">
                                <input id="apellido2" name="apellido2" type="text" placeholder="Segundo Apellido" class="form-control" required pattern="^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$">
                            </div>
                        </div>

                        <!-- EDAD -->
                        <div class="form-group container text-center">
                            <span class="col-md-1 offset-md-2 text-xs-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8 container text-center">
                                <input id="edad" name="edad" type="text" placeholder="Edad" class="form-control" required pattern="[0-9]+" />
                            </div>
                        </div>

                        <!-- CORREO ELECTRONICO -->
                        <div class="form-group container text-center">
                            <span class="col-md-1 offset-md-2 text-xs-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8 container text-center">
                            <input id="correo" name="correo" type="text" placeholder="Correo Electrónico" class="form-control" required pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" />
                            </div>
                        </div>
                        
                        <div class="form-group container text-center">    
                        <div class="col-md-12 text-center">
                            <a href="viewlistausuarios.php" class="btn btn-secondary btn-lg mr-2">Cancelar</a>
                            <button type="submit" name="registrar" id="registrar" class="btn btn-primary btn-lg">Registrar</button>
                        </div>
                        </div>

                    </fieldset>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

if(isset($_GET['mensaje']) && $_GET['mensaje'] == "1"){
    ?><script>
	Swal.fire({
		icon: 'success',
		title: 'ÉXITO',
		text: 'Se registró con éxito!'
	  })
	</script><?php
	
}else if(isset($_GET['mensaje']) && $_GET['mensaje'] == "2"){
    ?><script>
	Swal.fire({
		icon: 'error',
		title: 'Ocurrio un error',
		text: 'No se pudo registra el usuario!'
	  })
	</script><?php
}

?>

<!-- FOOTER -->
<?php
    include 'footer.php';
?>

</body>
</html>